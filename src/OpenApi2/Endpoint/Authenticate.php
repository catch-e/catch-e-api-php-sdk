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

class Authenticate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * Request an API token for use with secured methods.
	 *
	 * @param array $formParameters {
	 *
	 *     @var string $username Catch-e username
	 *     @var string $password Catch-e password
	 *     @var string $2fa_code (Optional) Catch-e two-factor authentication code
	 *     @var int $token_timeout (Optional) Token timeout in seconds. If specified, the issued access token will expire after the specified number of seconds
	 * }
	 *
	 * @param array $headerParameters {
	 *
	 *     @var string $Client-Id Client Id for your Catch-e system
	 * }
	 */
	public function __construct(array $formParameters = [], array $headerParameters = [])
	{
		$this->formParameters = $formParameters;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return '/authenticate';
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getFormBody();
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getFormOptionsResolver();
		$optionsResolver->setDefined(['username', 'password', '2fa_code', 'token_timeout']);
		$optionsResolver->setRequired(['username', 'password']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('username', ['string']);
		$optionsResolver->setAllowedTypes('password', ['string']);
		$optionsResolver->setAllowedTypes('2fa_code', ['string']);
		$optionsResolver->setAllowedTypes('token_timeout', ['int']);

		return $optionsResolver;
	}

	protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getHeadersOptionsResolver();
		$optionsResolver->setDefined(['Client-Id']);
		$optionsResolver->setRequired(['Client-Id']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('Client-Id', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateConflictException
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\AuthenticateInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\AuthenticateSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\AuthenticateSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnauthorizedAuthenticate', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ConflictAuthenticate', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\AuthenticateInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return [];
	}
}
