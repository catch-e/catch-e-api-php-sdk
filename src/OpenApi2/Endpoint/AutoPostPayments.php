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

class AutoPostPayments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **EmployeePayments:Create** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $timezone Payments will be processed in the specified timezone.

	 * }
	 * @param array $formParameters {
	 *
	 *     @var string $bank_account_id (Optional) Bank Account Id
	 *     @var string $delivery Delivery
	 *     @var string $dated_to_method
	 *     @var string $common_day (Optional) Common day
	 *     @var int $run_date_offset (Optional) Run date offset
	 * }
	 *
	 * @param array $headerParameters {
	 *
	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
	 * }
	 */
	public function __construct(array $queryParameters = [], array $formParameters = [], array $headerParameters = [])
	{
		$this->queryParameters = $queryParameters;
		$this->formParameters = $formParameters;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return '/sp/payments/auto-post-payments';
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getFormBody();
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getQueryOptionsResolver();
		$optionsResolver->setDefined(['timezone']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults(['timezone' => 'UTC']);
		$optionsResolver->setAllowedTypes('timezone', ['string']);

		return $optionsResolver;
	}

	protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getFormOptionsResolver();
		$optionsResolver->setDefined(['bank_account_id', 'delivery', 'dated_to_method', 'common_day', 'run_date_offset']);
		$optionsResolver->setRequired(['delivery', 'dated_to_method']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('bank_account_id', ['string']);
		$optionsResolver->setAllowedTypes('delivery', ['string']);
		$optionsResolver->setAllowedTypes('dated_to_method', ['string']);
		$optionsResolver->setAllowedTypes('common_day', ['string']);
		$optionsResolver->setAllowedTypes('run_date_offset', ['int']);

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
	 * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\AutoPostPaymentsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\AutoPostPaymentsSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\AutoPostPaymentsSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\AutoPostPaymentsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\AutoPostPaymentsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\AutoPostPaymentsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\AutoPostPaymentsUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\AutoPostPaymentsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
