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

class UpdateChannelQuoteDefaults extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $channel_default_id;

	/**
	 * Update an existing channel default.
	This method requires the **ChannelQuoteDefaults:Update** permission to be associated with your role.
	 *
	 * @param string                                            $channelDefaultId Channel Default id to update
	 * @param \CatchE\OpenApi2\Model\ChannelQuoteDefaultsUpdate $body             JSON payload
	 */
	public function __construct(string $channelDefaultId, \CatchE\OpenApi2\Model\ChannelQuoteDefaultsUpdate $body)
	{
		$this->channel_default_id = $channelDefaultId;
		$this->body = $body;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{channel_default_id}'], [$this->channel_default_id], '/qt/channel/defaults/{channel_default_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateChannelQuoteDefaultsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
