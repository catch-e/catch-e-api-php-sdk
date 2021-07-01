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

class CreateChannelQuoteDefaults extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * Create a new channel default.
	This method requires the **ChannelQuoteDefaults:Create** permission to be associated with your role.
	 *
	 * @param \CatchE\OpenApi2\Model\ChannelQuoteDefaultsCreate $body JSON payload
	 */
	public function __construct(\CatchE\OpenApi2\Model\ChannelQuoteDefaultsCreate $body)
	{
		$this->body = $body;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return '/qt/channel/defaults';
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getSerializedBody($serializer);
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateChannelQuoteDefaultsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
