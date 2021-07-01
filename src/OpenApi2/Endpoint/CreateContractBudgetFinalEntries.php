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

class CreateContractBudgetFinalEntries extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **ContractBudgets:CreateFinalEntries** permission to be associated with your role.
	 *
	 * @param array $formParameters {
	 *
	 *     @var string $contract_id Contract Id
	 * }
	 *
	 * @param array $headerParameters {
	 *
	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
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
		return '/fm/contract/budgets/final-entries';
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
		$optionsResolver->setDefined(['contract_id']);
		$optionsResolver->setRequired(['contract_id']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('contract_id', ['string']);

		return $optionsResolver;
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
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesLockedException
	 * @throws \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContractBudgetsCreateFinalEntriesSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractBudgetsCreateFinalEntriesSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (423 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\CreateContractBudgetFinalEntriesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
