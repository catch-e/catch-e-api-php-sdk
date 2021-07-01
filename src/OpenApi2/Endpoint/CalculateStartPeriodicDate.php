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

class CalculateStartPeriodicDate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **ContractBilling:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $payroll_date Payroll date
	 *     @var string $pay_cycle_code Pay cycle code
	 *     @var string $contract_start_date Contract start date
	 *     @var int $payroll_cut_off_days Payroll cut off days
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
		return '/fm/contract/billing/calculate-start-periodic-date';
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
		$optionsResolver->setDefined(['payroll_date', 'pay_cycle_code', 'contract_start_date', 'payroll_cut_off_days']);
		$optionsResolver->setRequired(['payroll_date', 'pay_cycle_code', 'contract_start_date']);
		$optionsResolver->setDefaults(['payroll_cut_off_days' => 0]);
		$optionsResolver->setAllowedTypes('payroll_date', ['string']);
		$optionsResolver->setAllowedTypes('pay_cycle_code', ['string']);
		$optionsResolver->setAllowedTypes('contract_start_date', ['string']);
		$optionsResolver->setAllowedTypes('payroll_cut_off_days', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateLockedException
	 * @throws \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\StartPeriodicDateGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\StartPeriodicDateGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (423 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\CalculateStartPeriodicDateInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
