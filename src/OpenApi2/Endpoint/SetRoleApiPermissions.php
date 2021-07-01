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

class SetRoleApiPermissions extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $role_id;

	/**
	 * Set role API permissions. This method will set the role permissions to the list provided in the JSON payload.

	This method requires the **ApiPermissions:Update** permission to be associated with your role.
	 *
	 * @param string                                       $roleId      Role Id
	 * @param \CatchE\OpenApi2\Model\RoleApiPermissionsSet $permissions JSON payload
	 */
	public function __construct(string $roleId, \CatchE\OpenApi2\Model\RoleApiPermissionsSet $permissions)
	{
		$this->role_id = $roleId;
		$this->body = $permissions;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{role_id}'], [$this->role_id], '/gb/role/{role_id}/api/permissions');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getSerializedBody($serializer);
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\SetRoleApiPermissionsInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return json_decode($body);
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\SetRoleApiPermissionsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
