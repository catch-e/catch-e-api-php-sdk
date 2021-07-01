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

class GetEmployeeContractLifeBudgetAndDisbursement extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $contract_id Contract ID
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
		return '/sp/employee/contract-life-budget-and-disbursement';
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
		$optionsResolver->setDefined(['contract_id']);
		$optionsResolver->setRequired(['contract_id']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('contract_id', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\SpEmployeeContractLifeBudgetAndDisbursementGetResponse200|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\SpEmployeeContractLifeBudgetAndDisbursementGetResponse200', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeContractLifeBudgetAndDisbursementInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
