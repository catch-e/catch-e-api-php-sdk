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

class TriggerTableImportProcedure extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $table_import_id;

	/**
	 * This method requires the **ImportTable** permission to be associated with your role.
	 *
	 * @param string $tableImportId  Import Id obtained from table import request
	 * @param array  $formParameters {
	 *
	 *     @var string $procedure
	 * }
	 */
	public function __construct(string $tableImportId, array $formParameters = [])
	{
		$this->table_import_id = $tableImportId;
		$this->formParameters = $formParameters;
	}

	public function getMethod(): string
	{
		return 'PUT';
	}

	public function getUri(): string
	{
		return str_replace(['{table_import_id}'], [$this->table_import_id], '/gb/import/table/{table_import_id}');
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
		$optionsResolver->setDefined(['procedure']);
		$optionsResolver->setRequired(['procedure']);
		$optionsResolver->setDefaults([]);
		$optionsResolver->setAllowedTypes('procedure', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\TriggerTableImportProcedureInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\TableImportStatusRequestSuccess|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\TableImportStatusRequestSuccess', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\TriggerTableImportProcedureInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
