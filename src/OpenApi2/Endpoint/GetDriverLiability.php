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

namespace CatchE\OpenApi2\Endpoint;

class GetDriverLiability extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $driver_liability_id;

    /**
     * This method requires the **DriverLiabilities:Get** permission to be associated with your role.
     *
     * @param string $driverLiabilityId Driver Liability Id
     */
    public function __construct(string $driverLiabilityId)
    {
        $this->driver_liability_id = $driverLiabilityId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{driver_liability_id}'], [$this->driver_liability_id], '/fm/driver/liabilities/{driver_liability_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetDriverLiabilityInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\DriverLiability|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\DriverLiability', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetDriverLiabilityUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetDriverLiabilityForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetDriverLiabilityNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetDriverLiabilityNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetDriverLiabilityInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
