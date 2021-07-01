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

class UpdateContactJobTitle extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $contact_job_title_id;

	/**
	 * This method requires the **Contacts:Update** permission to be associated with your role.
	 *
	 * @param string                                 $contactJobTitleId Contact Id to update
	 * @param \CatchE\OpenApi2\Model\ContactJobTitle $contactJobTitle   JSON Payload
	 * @param array                                  $headerParameters  {
	 *
	 *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
	 * }
	 */
	public function __construct(string $contactJobTitleId, \CatchE\OpenApi2\Model\ContactJobTitle $contactJobTitle, array $headerParameters = [])
	{
		$this->contact_job_title_id = $contactJobTitleId;
		$this->body = $contactJobTitle;
		$this->headerParameters = $headerParameters;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{contact_job_title_id}'], [$this->contact_job_title_id], '/fm/contact/job-titles/{contact_job_title_id}');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getSerializedBody($serializer);
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
	{
		$optionsResolver = parent::getHeadersOptionsResolver();
		$optionsResolver->setDefined(['Audit-User-Id']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\UpdateContactJobTitleInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContactJobTitleGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContactJobTitleGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\UpdateContactJobTitleInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
