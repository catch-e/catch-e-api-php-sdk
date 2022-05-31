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

class GetGlassVehicleDataImport extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $import_id;

    /**
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * @param string $importId Import Id obtained from Glass vehicle data import request
     */
    public function __construct(string $importId)
    {
        $this->import_id = $importId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{import_id}'], [$this->import_id], '/qt/interface/vehicle-data/glass/{import_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Accepted|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VehicleDataGlassImportStatusRequestSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VehicleDataGlassImportStatusRequestSuccess', 'json');
        }
        if (202 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Accepted', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetGlassVehicleDataImportInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
