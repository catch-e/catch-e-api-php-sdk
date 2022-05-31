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

namespace CatchE\Api;

use CatchE\OpenApi2\Authentication\BearerTokenAuthentication;
use CatchE\OpenApi2\Client as BaseClient;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry as PluginAuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\StreamInterface;

final class Client extends BaseClient
{
    /**
     * Catch-e API client factory.
     *
     * @param array<mixed> $additionalPlugins
     *
     * @return Client
     */
    public static function factory(string $bearerToken = null, string $host = 'https://api.catch-e.com', ClientInterface $httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri($host);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (! is_null($bearerToken)) {
                $plugins[] = new PluginAuthenticationRegistry([new BearerTokenAuthentication('Bearer ' . $bearerToken)]);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(
            [
                new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
                new \CatchE\Api\Normalizer\StdClassNormalizer(),
                new \CatchE\OpenApi2\Normalizer\JaneObjectNormalizer(), ],
            [
                new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                    new \Symfony\Component\Serializer\Encoder\JsonEncode(),
                    new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])
                ),
            ]
        );

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }

    /**
     * Execute endpoint with additional headers.
     *
     * @param array<mixed> $additionalHeaders
     *
     * @return mixed
     */
    public function executeEndpointWithAdditionalHeaders(\CatchE\OpenApi2\Runtime\Client\Endpoint $endpoint, array $additionalHeaders = [], string $fetch = self::FETCH_OBJECT)
    {
        [$bodyHeaders, $body] = $endpoint->getBody($this->serializer, $this->streamFactory);
        $queryString = $endpoint->getQueryString();
        $uriGlue = false === strpos($endpoint->getUri(), '?') ? '?' : '&';
        $uri = '' !== $queryString ? $endpoint->getUri() . $uriGlue . $queryString : $endpoint->getUri();
        $request = $this->requestFactory->createRequest($endpoint->getMethod(), $uri);

        if ($body) {
            if ($body instanceof StreamInterface) {
                $request = $request->withBody($body);
            } elseif (\is_resource($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromResource($body));
            } elseif (is_file($body)) {
                $request = $request->withBody($this->streamFactory->createStreamFromFile($body));
            } else {
                $request = $request->withBody($this->streamFactory->createStream($body));
            }
        }

        foreach ($endpoint->getHeaders($bodyHeaders) as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        foreach ($additionalHeaders as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        if (\count($endpoint->getAuthenticationScopes()) > 0) {
            $scopes = [];
            foreach ($endpoint->getAuthenticationScopes() as $scope) {
                $scopes[] = $scope;
            }
            $request = $request->withHeader(PluginAuthenticationRegistry::SCOPES_HEADER, $scopes);
        }

        return $endpoint->parseResponse($this->httpClient->sendRequest($request), $this->serializer, $fetch);
    }

    /**
     * The representational output format of the report query is controlled by HTTP Accept header. Three content types are presently supported:.
     *
     * text/csv
     * text/xml
     * application/vnd.ms-excel
     * application/json (default).
     * Queries that run successfully but result in 0 rows will return an HTTP 204 (No content) response from the API.
     *
     * Query parameters are optional. If a specific parameter is *required* by the selected report query but not included in the request,
     * a 422 Unprocessable Entity response will result. The required parameter will be documented within the HTTP 422 response payload.
     *
     * This method requires the **ReportQueries:Print** permission to be associated with the role.
     *
     * @param string       $reportQueryId       Report query to run
     * @param array<mixed> $queryParameters     Report query parameters
     * @param string       $responseContentType Report response content type
     * @param string       $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function printReportQuery(string $reportQueryId, array $queryParameters, string $responseContentType = 'application/json', string $fetch = self::FETCH_OBJECT)
    {
        $printReportQueryEndpoint = new \CatchE\Api\Endpoint\PrintReportQuery($reportQueryId, $queryParameters);

        return $this->executeEndpointWithAdditionalHeaders($printReportQueryEndpoint, [
            'Accept' => $responseContentType,
        ], $fetch);
    }
}
