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

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

interface Endpoint
{
    /**
     * Get body for an endpoint.
     *
     * Return value consist of an array where the first item will be a list of headers to add on the request (like the Content Type)
     * And the second value consist of the body object.
     *
     * @param null|mixed $streamFactory
     */
    public function getBody(SerializerInterface $serializer, $streamFactory = null): array;

    /**
     * Get the query string of an endpoint without the starting ? (like foo=foo&bar=bar).
     */
    public function getQueryString(): string;

    /**
     * Get the URI of an endpoint (like /foo-uri).
     */
    public function getUri(): string;

    /**
     * Get the HTTP method of an endpoint (like GET, POST, ...).
     */
    public function getMethod(): string;

    /**
     * Get the headers of an endpoint.
     */
    public function getHeaders(array $baseHeaders = []): array;

    /**
     * Get security scopes of an endpoint.
     */
    public function getAuthenticationScopes(): array;

    /**
     * Parse and transform a PSR7 Response into a different object.
     *
     * Implementations may vary depending the status code of the response and the fetch mode used.
     */
    public function parseResponse(ResponseInterface $response, SerializerInterface $serializer, string $fetchMode = Client::FETCH_OBJECT);
}
