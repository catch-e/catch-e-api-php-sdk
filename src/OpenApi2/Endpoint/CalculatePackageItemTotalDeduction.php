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

class CalculatePackageItemTotalDeduction extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $package_item_id;

    /**
     * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
     *
     * @param string $packageItemId   Package Item Id
     * @param array  $queryParameters {
     *
     *     @var string $driver_id Driver Id
     *     @var float $deduction_per_pay Deduction Per Pay
     *     @var int $cycles Cycles
     *     @var string $package_item_pay_cycle_id (Optional) Package Item Pay Cycle Id. If not specified, will use package item default (if specified)
     *     @var string $compress_flag (Optional) Compress. If not specified, will use package item default or 'no'
     *     @var string $inertia_flag (Optional) Inertia. If not specified, will use package item default or 'no'
     * }
     */
    public function __construct(string $packageItemId, array $queryParameters = [])
    {
        $this->package_item_id = $packageItemId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{package_item_id}'], [$this->package_item_id], '/sp/package/items/{package_item_id}/calculate-total-deduction');
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
        $optionsResolver->setDefined(['driver_id', 'deduction_per_pay', 'cycles', 'package_item_pay_cycle_id', 'compress_flag', 'inertia_flag']);
        $optionsResolver->setRequired(['driver_id', 'deduction_per_pay', 'cycles']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('driver_id', ['string']);
        $optionsResolver->setAllowedTypes('deduction_per_pay', ['float']);
        $optionsResolver->setAllowedTypes('cycles', ['int']);
        $optionsResolver->setAllowedTypes('package_item_pay_cycle_id', ['string']);
        $optionsResolver->setAllowedTypes('compress_flag', ['string']);
        $optionsResolver->setAllowedTypes('inertia_flag', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemTotalDeductionGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PackageItemTotalDeductionGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemTotalDeductionInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
