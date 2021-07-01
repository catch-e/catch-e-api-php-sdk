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

class EricInsuranceGetPricing extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **InterfaceEricInsurance:GetPricing** permission to be associated with your role.
	 *
	 * @param array $formParameters {
	 *
	 *     @var string $quote_id Quote Id (Catch-e)
	 *     @var string $eric_quote_id (Optional) Eric Quote Id (UUID). If specified, revised details will be applied to the specified Eric Quote Id.
	 *     @var string $lock_token (Optional) Require lock having the specified lock token
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
		return '/gb/interface/eric-insurance/get-pricing';
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
		$optionsResolver->setDefined(['quote_id', 'eric_quote_id', 'lock_token']);
		$optionsResolver->setRequired(['quote_id']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('quote_id', ['string']);
		$optionsResolver->setAllowedTypes('eric_quote_id', ['string']);
		$optionsResolver->setAllowedTypes('lock_token', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingBadRequestException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingFailedDependencyException
	 * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\EricInsuranceGetPricingSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EricInsuranceGetPricingSuccess', 'json');
		}
		if (400 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingBadRequestException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\BadRequest', 'json'));
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (424 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingFailedDependencyException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\FailedDependency', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
