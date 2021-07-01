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

class UpdateEmployeePackageItem extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $employee_package_item_id;

	/**
	 * This method requires the **EmployeePackageItems:Update** permission to be associated with your role.
	 *
	 * @param string                                           $employeePackageItemId Employee Package Item Id
	 * @param \CatchE\OpenApi2\Model\UpdateEmployeePackageItem $packageItem           JSON payload
	 * @param array                                            $headerParameters      {
	 *
	 *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.

	This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.

	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
	 * }
	 */
	public function __construct(string $employeePackageItemId, \CatchE\OpenApi2\Model\UpdateEmployeePackageItem $packageItem, array $headerParameters = [])
	{
		$this->employee_package_item_id = $employeePackageItemId;
		$this->body = $packageItem;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{employee_package_item_id}'], [$this->employee_package_item_id], '/sp/employee/package/items/{employee_package_item_id}');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getSerializedBody($serializer);
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getHeadersOptionsResolver();
		$optionsResolver->setDefined(['Delegated-Locking-Session-Id', 'Audit-User-Id']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('Delegated-Locking-Session-Id', ['string']);
		$optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\EmployeePackageItem|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EmployeePackageItem', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateEmployeePackageItemInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
