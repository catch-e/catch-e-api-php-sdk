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

class GetVariants extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * This method requires the **QuoteVariants:Get** permission to be associated with your role.
	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $make_id Optional Make Id

	 *     @var string $model_id Optional Model Id

	 *     @var int $model_year Optional Model Year

	 *     @var string $variant_code Optional Variant Code

	 *     @var string $variant_name Optional Variant Name

	 *     @var string $body_type_id Optional Body Type Id

	 *     @var string $data_source_id Optional Data Source Id

	 *     @var string $profile_required_flag If yes, only show variants that have an active qt_variant_profile record

	 *     @var string $include_inactive_flag Set to yes if inactive items required in the list
	 *     @var int $page Optional page number
	 *     @var int $page_size Optional page size
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
		return '/qt/variants';
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
		$optionsResolver->setDefined(['make_id', 'model_id', 'model_year', 'variant_code', 'variant_name', 'body_type_id', 'data_source_id', 'profile_required_flag', 'include_inactive_flag', 'page', 'page_size']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults(['profile_required_flag' => 'no', 'include_inactive_flag' => 'no', 'page' => 1, 'page_size' => 25]);
		$optionsResolver->setAllowedTypes('make_id', ['string']);
		$optionsResolver->setAllowedTypes('model_id', ['string']);
		$optionsResolver->setAllowedTypes('model_year', ['int']);
		$optionsResolver->setAllowedTypes('variant_code', ['string']);
		$optionsResolver->setAllowedTypes('variant_name', ['string']);
		$optionsResolver->setAllowedTypes('body_type_id', ['string']);
		$optionsResolver->setAllowedTypes('data_source_id', ['string']);
		$optionsResolver->setAllowedTypes('profile_required_flag', ['string']);
		$optionsResolver->setAllowedTypes('include_inactive_flag', ['string']);
		$optionsResolver->setAllowedTypes('page', ['int']);
		$optionsResolver->setAllowedTypes('page_size', ['int']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsConflictException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\VariantsGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VariantsGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (409 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
