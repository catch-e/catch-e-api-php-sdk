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

class GetEmployeePackageItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $employee_package_item_id;

	/**
	 * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
	 */
	public function __construct(string $employeePackageItemId)
	{
		$this->employee_package_item_id = $employeePackageItemId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{employee_package_item_id}'], [$this->employee_package_item_id], '/sp/employee/package/items/{employee_package_item_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeePackageItemInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\EmployeePackageItem|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EmployeePackageItem', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeePackageItemUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeePackageItemForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeePackageItemNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeePackageItemInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
