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

class GetPackageItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $posting_map_id Optional Posting Map Id

	 *     @var string $package_item_code Optional Package Item Code

	 *     @var string $module Optional Module

	 *     @var string $benefit_type Optional Benefit Type
	 *     @var string $cap_type Optional Cap Type
	 *     @var string $tax_method Optional Tax Method
	 *     @var string $employee_contribution_flag Optional Employee Contribution Flag
	 *     @var int $page Optional page number
	 *     @var int $page_size Optional page size
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
		return '/sp/package/items';
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
		$optionsResolver->setDefined(['posting_map_id', 'package_item_code', 'module', 'benefit_type', 'cap_type', 'tax_method', 'employee_contribution_flag', 'page', 'page_size']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
		$optionsResolver->setAllowedTypes('posting_map_id', ['string']);
		$optionsResolver->setAllowedTypes('package_item_code', ['string']);
		$optionsResolver->setAllowedTypes('module', ['string']);
		$optionsResolver->setAllowedTypes('benefit_type', ['string']);
		$optionsResolver->setAllowedTypes('cap_type', ['string']);
		$optionsResolver->setAllowedTypes('tax_method', ['string']);
		$optionsResolver->setAllowedTypes('employee_contribution_flag', ['string']);
		$optionsResolver->setAllowedTypes('page', ['int']);
		$optionsResolver->setAllowedTypes('page_size', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsConflictException
	 * @throws \CatchE\OpenApi2\Exception\GetPackageItemsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\PackageItemsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PackageItemsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPackageItemsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
