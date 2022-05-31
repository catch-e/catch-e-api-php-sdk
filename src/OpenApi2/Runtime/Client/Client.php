<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CatchE\OpenApi2\Runtime\Client;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Client
{
    public const FETCH_RESPONSE = 'response';
    public const FETCH_OBJECT = 'object';
    /**
     * @var ClientInterface
     */
    protected $httpClient;
    /**
     * @var RequestFactoryInterface
     */
    protected $requestFactory;
    /**
     * @var SerializerInterface
     */
    protected $serializer;
    /**
     * @var StreamFactoryInterface
     */
    protected $streamFactory;

    public function __construct(ClientInterface $httpClient, RequestFactoryInterface $requestFactory, SerializerInterface $serializer, StreamFactoryInterface $streamFactory)
    {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->serializer = $serializer;
        $this->streamFactory = $streamFactory;
    }

    public function executeEndpoint(Endpoint $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $queryString = $endpoint->getQueryString();
        $uriGlue = false === strpos($endpoint->getUri(), '?') ? '?' : '&';
        $uri = '' !== $queryString ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $request = $this->requestFactory->createRequest($endpoint->getMethod(), $uri);
        if ($body) {
            if ($body instanceof StreamInterface) {
                $request = $request->withBody($body);
            } elseif (is_resource($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromResource($body));
            } elseif (strlen($body) <= 4000 && @file_exists($body)) {
                // more than 4096 chars will trigger an error
                $request = $request->withBody($this->streamFactory->createStreamFromFile($body));
            } else {
                $request = $request->withBody($this->streamFactory->createStream($body));
            }
        }
        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $request = $request->withHeader($name, $value);
        }
        if (count($endpoint->getAuthenticationScopes()) > 0) {
            $scopes = [];
            foreach ($endpoint->getAuthenticationScopes() as $scope) {
                $scopes[] = $scope;
            }
            $request = $request->withHeader(AuthenticationRegistry::SCOPES_HEADER, $scopes);
        }

        return $endpoint->parseResponse($this->httpClient->sendRequest($request), $this->serializer, $fetch);
    }
}
