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

class DeleteContactJobTitle extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $contact_job_title_id;

	/**
	 * This method requires the **Contacts:Delete** permission to be associated with your role.
	 *
	 * @param string $contactJobTitleId Contact job title Id
	 */
	public function __construct(string $contactJobTitleId)
	{
		$this->contact_job_title_id = $contactJobTitleId;
	}

	public function getMethod(): string
	{
		return 'DELETE';
	}

	public function getUri(): string
	{
		return str_replace(['{contact_job_title_id}'], [$this->contact_job_title_id], '/fm/contact/job-titles/{contact_job_title_id}');
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
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\DeleteContactJobTitleInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (204 === $status) {
			return null;
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactJobTitleUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactJobTitleForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactJobTitleNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\DeleteContactJobTitleInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
