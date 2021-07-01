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

class GetDrivers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **Drivers:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $client_id Optional Client Id
	 *     @var string $client_cost_centre_id Optional Cost Centre Id
	 *     @var string $external_code Optional External Code

	 *     @var string $given_name Optional Given Name

	 *     @var string $surname Optional Surname

	 *     @var string $user_id_package_advisor Optional Package Advisor User Id
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
		return '/fm/drivers';
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
		$optionsResolver->setDefined(['client_id', 'client_cost_centre_id', 'external_code', 'given_name', 'surname', 'user_id_package_advisor', 'page', 'page_size']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
		$optionsResolver->setAllowedTypes('client_id', ['string']);
		$optionsResolver->setAllowedTypes('client_cost_centre_id', ['string']);
		$optionsResolver->setAllowedTypes('external_code', ['string']);
		$optionsResolver->setAllowedTypes('given_name', ['string']);
		$optionsResolver->setAllowedTypes('surname', ['string']);
		$optionsResolver->setAllowedTypes('user_id_package_advisor', ['string']);
		$optionsResolver->setAllowedTypes('page', ['int']);
		$optionsResolver->setAllowedTypes('page_size', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetDriversUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetDriversForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetDriversNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetDriversNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetDriversConflictException
	 * @throws \CatchE\OpenApi2\Exception\GetDriversInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\GetDrivers|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\GetDrivers', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetDriversInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
