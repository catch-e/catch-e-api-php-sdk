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

class UpdateVariantDealerDiscount extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $variant_dealer_discount_id;

    /**
     * Update an exisiting channel
     * This method requires the **ReferenceData:Update** permissions to be
     * associated with your role.
     *
     * @param string                                             $variantDealerDiscountId Variant Dealer discount id to update
     * @param \CatchE\OpenApi2\Model\VariantDealerDiscountUpdate $discount                JSON payload
     */
    public function __construct(string $variantDealerDiscountId, \CatchE\OpenApi2\Model\VariantDealerDiscountUpdate $discount)
    {
        $this->variant_dealer_discount_id = $variantDealerDiscountId;
        $this->body = $discount;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{variant_dealer_discount_id}'], [$this->variant_dealer_discount_id], '/gb/setup/reference/data/qt_variant_dealer_discounts/{variant_dealer_discount_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantDealerDiscount
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\QtVariantDealerDiscount', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateVariantDealerDiscountInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
