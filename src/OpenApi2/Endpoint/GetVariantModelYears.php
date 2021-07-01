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

class GetVariantModelYears extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * Get an array of model years for a given vehicle model.

	Model Years are linked to Variants, and Variants are excluded if they have a status of 'pending'. So if all the Variants for a particular Model Year are at status 'pending', that Model Year will not be returned in the list.

	This method requires the **QuoteVariants:Get** permission to be associated with your role.

	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $model_id Model Id

	 *     @var string $profile_required_flag If yes, only show model years for variants that have an active qt_variant_profile record

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
		return '/qt/model-years';
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
		$optionsResolver->setDefined(['model_id', 'profile_required_flag']);
		$optionsResolver->setRequired(['model_id']);
		$optionsResolver->setDefaults(['profile_required_flag' => 'no']);
		$optionsResolver->setAllowedTypes('model_id', ['string']);
		$optionsResolver->setAllowedTypes('profile_required_flag', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantModelYearsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return json_decode($body);
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantModelYearsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
