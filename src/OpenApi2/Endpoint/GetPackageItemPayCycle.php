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

class GetPackageItemPayCycle extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $package_item_pay_cycle_id;

	/**
	 * This method requires the **EmployeePackageItemPayCycles:Get** permission to be associated with your role.
	 */
	public function __construct(string $packageItemPayCycleId)
	{
		$this->package_item_pay_cycle_id = $packageItemPayCycleId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{package_item_pay_cycle_id}'], [$this->package_item_pay_cycle_id], '/sp/package/item/pay-cycles/{package_item_pay_cycle_id}');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return [[], null];
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemPayCycleInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\PackageItemPayCycle|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PackageItemPayCycle', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemPayCycleUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemPayCycleForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemPayCycleNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemPayCycleInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
