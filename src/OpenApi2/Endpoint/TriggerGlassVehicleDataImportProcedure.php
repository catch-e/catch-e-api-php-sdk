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

class TriggerGlassVehicleDataImportProcedure extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $import_id;

    /**
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * @param string $importId       Import Id obtained from Glass vehicle data import request
     * @param array  $formParameters {
     *
     *     @var string $procedure
     * }
     */
    public function __construct(string $importId, array $formParameters = [])
    {
        $this->import_id = $importId;
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{import_id}'], [$this->import_id], '/qt/interface/vehicle-data/glass/{import_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['procedure']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('procedure', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\TriggerGlassVehicleDataImportProcedureInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
