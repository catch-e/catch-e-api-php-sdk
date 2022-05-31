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

class GetContractPayouts extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Optional contract id - only show contract payouts for the specified contract
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/fm/contract/payouts';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['contract_id', 'page', 'page_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('contract_id', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayoutsGet|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractPayoutsGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
