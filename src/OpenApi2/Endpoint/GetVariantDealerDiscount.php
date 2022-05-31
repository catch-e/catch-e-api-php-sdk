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

class GetVariantDealerDiscount extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $variant_dealer_discount_id;

    /**
     * This method requires the **ReferenceData:Get** permission to be
     * associated with your role.
     *
     * @param string $variantDealerDiscountId Optionally filter by variant id
     */
    public function __construct(string $variantDealerDiscountId)
    {
        $this->variant_dealer_discount_id = $variantDealerDiscountId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{variant_dealer_discount_id}'], [$this->variant_dealer_discount_id], '/gb/setup/reference/data/qt_variant_dealer_discounts/{variant_dealer_discount_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantDealerDiscountInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\QtVariantDealerDiscount
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\QtVariantDealerDiscount', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantDealerDiscountInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
