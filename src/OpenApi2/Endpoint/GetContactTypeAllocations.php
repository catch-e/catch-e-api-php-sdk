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

class GetContactTypeAllocations extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **Contacts:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $contact_id Contact Id
	 *     @var string $contact_type_id Optional contact type Id
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
		return '/fm/contact/type/allocations';
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
		$optionsResolver->setDefined(['contact_id', 'contact_type_id', 'page', 'page_size']);
		$optionsResolver->setRequired(['contact_id']);
		$optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
		$optionsResolver->setAllowedTypes('contact_id', ['string']);
		$optionsResolver->setAllowedTypes('contact_type_id', ['string']);
		$optionsResolver->setAllowedTypes('page', ['int']);
		$optionsResolver->setAllowedTypes('page_size', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsConflictException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\GetContactTypeAllocationsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContactTypeAllocationGet[]|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContactTypeAllocationGet[]', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetContactTypeAllocationsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
