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

class GetVariantPhotos extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;

	/**
	 * Get list of photo codes and corresponding types for a given vehicle variant. Photo codes are provided by the vehicle data supplier, and are typically used as the file name for each image. Types describe the orientation of the photo e.g. 'front'.

	This method requires the **QuoteVariants:Get** permission to be associated with your role.

	 *
	 * @param array $queryParameters {
	 *
	 *     @var string $variant_id Variant Id
	 *     @var array $photo_type Optional Photo Types
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
		return '/qt/variants/photos';
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
		$optionsResolver->setDefined(['variant_id', 'photo_type']);
		$optionsResolver->setRequired(['variant_id']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('variant_id', ['string']);
		$optionsResolver->setAllowedTypes('photo_type', ['array']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetVariantPhotosInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\VariantPhotosGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VariantPhotosGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantPhotosUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantPhotosForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantPhotosNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantPhotosNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetVariantPhotosInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
