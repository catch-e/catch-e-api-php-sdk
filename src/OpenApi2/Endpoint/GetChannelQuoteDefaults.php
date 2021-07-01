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

class GetChannelQuoteDefaults extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $channel_default_id;

	/**
	 * This method requires the **ChannelQuoteDefaults:Get** permission to be associated with your role.
	 *
	 * @param string $channelDefaultId Channel Quote Default to lookup
	 */
	public function __construct(string $channelDefaultId)
	{
		$this->channel_default_id = $channelDefaultId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{channel_default_id}'], [$this->channel_default_id], '/qt/channel/defaults/{channel_default_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetChannelQuoteDefaultsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
