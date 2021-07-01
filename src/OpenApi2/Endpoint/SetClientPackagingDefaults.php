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

class SetClientPackagingDefaults extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $client_id;

	/**
	 * This method requires the **ClientPackagingDefaults:Set** permission to be associated with your role.
	 *
	 * @param string                                            $clientId                Client Id
	 * @param \CatchE\OpenApi2\Model\ClientPackagingDefaultsSet $clientPackagingDefaults JSON payload
	 * @param array                                             $headerParameters        {
	 *
	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
	 * }
	 */
	public function __construct(string $clientId, \CatchE\OpenApi2\Model\ClientPackagingDefaultsSet $clientPackagingDefaults, array $headerParameters = [])
	{
		$this->client_id = $clientId;
		$this->body = $clientPackagingDefaults;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{client_id}'], [$this->client_id], '/sp/client/packaging-defaults/{client_id}');
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
		$optionsResolver->setDefined(['Audit-User-Id']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ClientPackagingDefaultsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ClientPackagingDefaultsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetClientPackagingDefaultsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
