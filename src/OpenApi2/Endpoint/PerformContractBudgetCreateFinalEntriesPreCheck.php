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

class PerformContractBudgetCreateFinalEntriesPreCheck extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $contract_id;

	/**
	 * The rules governing whether the create final budget entries functionality is available  for an associated contract type are as follows:.
	3.  At least one period has been billed.

	This method requires the **ContractBudgets:CreateFinalEntries** permission to be associated with your role.
	 */
	public function __construct(string $contractId)
	{
		$this->contract_id = $contractId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{contract_id}'], [$this->contract_id], '/fm/contract/budgets/final-entries/pre-check/{contract_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContractBudgetsCreateFinalEntriesPreCheck|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractBudgetsCreateFinalEntriesPreCheck', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\PerformContractBudgetCreateFinalEntriesPreCheckInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
