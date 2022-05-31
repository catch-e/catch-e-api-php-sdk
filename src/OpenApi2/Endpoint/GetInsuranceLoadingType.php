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

class GetInsuranceLoadingType extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $insurance_loading_type_id;

    /**
     * This method requires the **InsuranceLoadingTypes:Get** permission to be associated with your role.
     *
     * @param string $insuranceLoadingTypeId Insurance Loading Type Id
     */
    public function __construct(string $insuranceLoadingTypeId)
    {
        $this->insurance_loading_type_id = $insuranceLoadingTypeId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{insurance_loading_type_id}'], [$this->insurance_loading_type_id], '/qt/insurance-loading-types/{insurance_loading_type_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\InsuranceLoadingType
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InsuranceLoadingType', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetInsuranceLoadingTypeInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}