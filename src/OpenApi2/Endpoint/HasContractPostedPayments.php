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

class HasContractPostedPayments extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ContractPaymentStructures:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $contract_id Contract Id
     *     @var string $supplier_id Supplier Id
     *     @var string $payment_type Payment Type
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
        return '/fm/contract/payment-structures/posted';
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
        $optionsResolver->setDefined(['contract_id', 'supplier_id', 'payment_type']);
        $optionsResolver->setRequired(['contract_id', 'supplier_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('contract_id', ['string']);
        $optionsResolver->setAllowedTypes('supplier_id', ['string']);
        $optionsResolver->setAllowedTypes('payment_type', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsLockedException
     * @throws \CatchE\OpenApi2\Exception\HasContractPostedPaymentsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\HasContractPostedPaymentsGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\HasContractPostedPaymentsGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\HasContractPostedPaymentsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
