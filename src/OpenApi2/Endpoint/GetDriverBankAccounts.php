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

class GetDriverBankAccounts extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **DriverBankAccounts:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $driver_id Driver Id
	 *     @var string $claims_access_flag Optional Claims Access Flag
	 *     @var string $claims_default_flag Optional Claims Default Flag
	 *     @var array $status_flag Optional status flag
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
		return '/fm/driver/bank/accounts';
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
		$optionsResolver->setDefined(['driver_id', 'claims_access_flag', 'claims_default_flag', 'status_flag', 'page', 'page_size']);
		$optionsResolver->setRequired(['driver_id']);
		$optionsResolver->setDefaults(['status_flag' => 'active', 'page' => 1, 'page_size' => 25]);
		$optionsResolver->setAllowedTypes('driver_id', ['string']);
		$optionsResolver->setAllowedTypes('claims_access_flag', ['string']);
		$optionsResolver->setAllowedTypes('claims_default_flag', ['string']);
		$optionsResolver->setAllowedTypes('status_flag', ['array']);
		$optionsResolver->setAllowedTypes('page', ['int']);
		$optionsResolver->setAllowedTypes('page_size', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsConflictException
	 * @throws \CatchE\OpenApi2\Exception\GetDriverBankAccountsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\DriverBankAccountsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\DriverBankAccountsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriverBankAccountsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
