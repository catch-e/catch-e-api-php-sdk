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

class DeleteContactType extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $contact_type_id;

	/**
	 * This method requires the **Contacts:Delete** permission to be associated with your role.
	 *
	 * @param string $contactTypeId Contact type id to delete
	 */
	public function __construct(string $contactTypeId)
	{
		$this->contact_type_id = $contactTypeId;
	}

	public function getMethod(): string
	{
		return 'DELETE';
	}

	public function getUri(): string
	{
		return str_replace(['{contact_type_id}'], [$this->contact_type_id], '/fm/contact/types/{contact_type_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (204 === $status) {
			return null;
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactTypeUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactTypeForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactTypeNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactTypeNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactTypeInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
