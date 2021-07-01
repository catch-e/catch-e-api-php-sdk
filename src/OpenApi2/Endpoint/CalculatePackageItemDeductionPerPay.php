<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

class CalculatePackageItemDeductionPerPay extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $package_item_id;

	/**
	 * This method requires the **PackageItems:CalculateDeductions** permission to be associated with your role.
	 *
	 * @param string $packageItemId   Package Item Id
	 * @param array  $queryParameters {
	 *
	 *     @var string $driver_id Driver Id
	 *     @var float $total_deduction Total Deduction
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
		return str_replace(['{package_item_id}'], [$this->package_item_id], '/sp/package/items/{package_item_id}/calculate-deduction-per-pay');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return [[], null];
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getQueryOptionsResolver();
		$optionsResolver->setDefined(['driver_id', 'total_deduction', 'cycles', 'package_item_pay_cycle_id', 'compress_flag', 'inertia_flag']);
		$optionsResolver->setRequired(['driver_id', 'total_deduction', 'cycles']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('driver_id', ['string']);
		$optionsResolver->setAllowedTypes('total_deduction', ['float']);
		$optionsResolver->setAllowedTypes('cycles', ['int']);
		$optionsResolver->setAllowedTypes('package_item_pay_cycle_id', ['string']);
		$optionsResolver->setAllowedTypes('compress_flag', ['string']);
		$optionsResolver->setAllowedTypes('inertia_flag', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\PackageItemDeductionPerPayGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PackageItemDeductionPerPayGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculatePackageItemDeductionPerPayInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
