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

class SalesforceApexSyncQuote extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **InterfaceSalesforceApex:SyncQuote** permission to be associated with your role.
	 *
	 * @param array $formParameters {
	 *
	 *     @var string $quote_id Quote Id
	 *     @var string $opportunity_number Opportunity Number
	 * }
	 */
	public function __construct(array $formParameters = [])
	{
		$this->formParameters = $formParameters;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return '/gb/interface/salesforce-apex/sync-quote';
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
		$optionsResolver->setDefined(['quote_id', 'opportunity_number']);
		$optionsResolver->setRequired(['quote_id', 'opportunity_number']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('quote_id', ['string']);
		$optionsResolver->setAllowedTypes('opportunity_number', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteBadRequestException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (204 === $status) {
			return null;
		}
		if (400 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteBadRequestException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\BadRequest', 'json'));
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\SalesforceApexSyncQuoteInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
