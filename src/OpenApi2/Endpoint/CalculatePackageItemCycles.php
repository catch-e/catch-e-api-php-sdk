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

class CalculatePackageItemCycles extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $package_item_id;

    /**
     * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
     *
     * @param string $packageItemId   Package Item Id
     * @param array  $queryParameters {
     *
     *     @var string $pay_cycle_id Pay Cycle Id
     *     @var string $start_date Start Date
     *     @var int $cycles (Optional) User defined cycles
     *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, will use package item default (if defined).
     *     @var string $package_item_pay_cycle_id (Optional) Package Item Pay Cycle Id - can be supplied instead of Pay Cycle Type
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
        return str_replace(['{package_item_id}'], [$this->package_item_id], '/sp/package/items/{package_item_id}/calculate-cycles');
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
        $optionsResolver->setDefined(['pay_cycle_id', 'start_date', 'cycles', 'pay_cycle_type', 'package_item_pay_cycle_id', 'compress_flag', 'inertia_flag']);
        $optionsResolver->setRequired(['pay_cycle_id', 'start_date']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('pay_cycle_id', ['string']);
        $optionsResolver->setAllowedTypes('start_date', ['string']);
        $optionsResolver->setAllowedTypes('cycles', ['int']);
        $optionsResolver->setAllowedTypes('pay_cycle_type', ['string']);
        $optionsResolver->setAllowedTypes('package_item_pay_cycle_id', ['string']);
        $optionsResolver->setAllowedTypes('compress_flag', ['string']);
        $optionsResolver->setAllowedTypes('inertia_flag', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PackageItemCyclesGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PackageItemCyclesGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\CalculatePackageItemCyclesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
