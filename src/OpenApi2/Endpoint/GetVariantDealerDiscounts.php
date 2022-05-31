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

class GetVariantDealerDiscounts extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ReferenceData:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var array $variant_id (Optional) Filter by Variant Id
     *     @var array $dealer_discount_type_id (Optional) Filter by Dealer Discount Type Id
     *     @var array $supplier_id (Optional) Filter by Dealer Supplier Id
     *     @var array $client_id (Optional) Filter by Dealer Client Id
     *     @var int $page (Optional) Page number
     *     @var int $page_size (Optional) Page size
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
        return '/gb/setup/reference/data/qt_variant_dealer_discounts';
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
        $optionsResolver->setDefined(['variant_id', 'dealer_discount_type_id', 'supplier_id', 'client_id', 'page', 'page_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('variant_id', ['array']);
        $optionsResolver->setAllowedTypes('dealer_discount_type_id', ['array']);
        $optionsResolver->setAllowedTypes('supplier_id', ['array']);
        $optionsResolver->setAllowedTypes('client_id', ['array']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\VariantDealerDiscounts
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VariantDealerDiscounts', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
