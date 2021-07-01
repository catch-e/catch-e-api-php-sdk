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

class GetRecordLocks extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $table_name;
	protected $unique_id;

	/**
	 * Get record locks currently held for the specified table name and unique id.

	This method requires the **Locks:Get** permission to be associated with your role.
	 *
	 * @param string $tableName Table name
	 * @param string $uniqueId  Unique Id to check for locks on
	 */
	public function __construct(string $tableName, string $uniqueId)
	{
		$this->table_name = $tableName;
		$this->unique_id = $uniqueId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{table_name}', '{unique_id}'], [$this->table_name, $this->unique_id], '/gb/locks/{table_name}/{unique_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\GetRecordLocksUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetRecordLocksForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetRecordLocksNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetRecordLocksNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetRecordLocksInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\GbLocksTableNameUniqueIdGetResponse200Item[]|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\GbLocksTableNameUniqueIdGetResponse200Item[]', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetRecordLocksUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetRecordLocksForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetRecordLocksNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetRecordLocksNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetRecordLocksInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
