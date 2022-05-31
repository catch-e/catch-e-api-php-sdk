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

class SalesforceApexSyncContract extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **InterfaceSalesforceApex:SyncContract** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var string $client_id Client Id
     * }
     */
    public function __construct(array $formParameters = [])
    {
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gb/interface/salesforce-apex/sync-contract';
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
        $optionsResolver->setDefined(['contract_id', 'client_id']);
        $optionsResolver->setRequired(['contract_id', 'client_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('contract_id', ['string']);
        $optionsResolver->setAllowedTypes('client_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractBadRequestException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncContractInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractBadRequestException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\BadRequest', 'json'));
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncContractInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
