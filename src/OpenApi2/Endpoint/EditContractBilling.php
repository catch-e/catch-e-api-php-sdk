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

class EditContractBilling extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **ContractBilling:Edit** permission to be associated with your role.
	 *
	 * @param \CatchE\OpenApi2\Model\ContractBillingEdit $body             JSON payload
	 * @param array                                      $headerParameters {
	 *
	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
	 * }
	 */
	public function __construct(\CatchE\OpenApi2\Model\ContractBillingEdit $body, array $headerParameters = [])
	{
		$this->body = $body;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return '/beta/fm/contract/billing/edit';
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
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingLockedException
	 * @throws \CatchE\OpenApi2\Exception\EditContractBillingInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContractBillingSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractBillingSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (423 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\EditContractBillingInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
