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

class GetBecsDisbursementsBatch extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $becs_id;

	/**
	 * This method requires the InterfaceExports:BecsBatchGet permission to be associated with your role.
	 *
	 * @param string $becsId BECS interface export id
	 */
	public function __construct(string $becsId)
	{
		$this->becs_id = $becsId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{becs_id}'], [$this->becs_id], '/gb/interface/exports/becs/disbursements/{becs_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\GetDecsDisbursementsBatchSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\GetDecsDisbursementsBatchSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetBecsDisbursementsBatchInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
