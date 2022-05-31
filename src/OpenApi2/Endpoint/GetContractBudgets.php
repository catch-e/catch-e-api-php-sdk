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

class GetContractBudgets extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ContractBudgets:Get** permission to be associated with your role.
     *
     * Allows you to retrieve Budget details for a Contract.
     *
     *
     * A single Contract may have 1000s of records depending on the specified Periodic Interval, Posting Classes  and Term (eg Weekly Pay Cycle with 10 Posting Classes (FIN, MAINT, REG etc) over 60 months will have _2600_ budget records.
     *
     * Use the Billing Period, Posting Class Code and Page filters to return a manageable set of results.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var int $billing_period Optional billing period restriction
     *     @var string $posting_class_code Optional posting class code restriction
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
        return '/fm/contract/budgets';
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
        $optionsResolver->setDefined(['contract_id', 'billing_period', 'posting_class_code', 'page', 'page_size']);
        $optionsResolver->setRequired(['contract_id']);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('contract_id', ['string']);
        $optionsResolver->setAllowedTypes('billing_period', ['int']);
        $optionsResolver->setAllowedTypes('posting_class_code', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractBudgetsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractBudgetsGet[]|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractBudgetsGet[]', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractBudgetsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
