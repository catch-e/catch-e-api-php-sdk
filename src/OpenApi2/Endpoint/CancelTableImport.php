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

class CancelTableImport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $table_import_id;

	/**
	 * This method requires the **ImportTable** permission to be associated with your role.
	 *
	 * @param string $tableImportId Import Id obtained from table import request
	 */
	public function __construct(string $tableImportId)
	{
		$this->table_import_id = $tableImportId;
	}

	public function getMethod(): string
	{
		return 'DELETE';
	}

	public function getUri(): string
	{
		return str_replace(['{table_import_id}'], [$this->table_import_id], '/gb/import/table/{table_import_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportRequestedRangeNotSatisfiableException
	 * @throws \CatchE\OpenApi2\Exception\CancelTableImportInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (204 === $status) {
			return null;
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (416 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportRequestedRangeNotSatisfiableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ExportNotSatisfiable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\CancelTableImportInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
