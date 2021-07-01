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

class GetEmployeeStartDates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $driver_id;

	/**
	 * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
	 *
	 * @param string $driverId        Driver Id
	 * @param array  $queryParameters {
	 *
	 *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, it will use REG.
	 *     @var string $anchor_date Anchor Date
	 *     @var string $allow_retrospective_start_dates_flag (Optional) If 'yes' start dates can be generated based on an anchor date that occurs before the system date.
	 * }
	 */
	public function __construct(string $driverId, array $queryParameters = [])
	{
		$this->driver_id = $driverId;
		$this->queryParameters = $queryParameters;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{driver_id}'], [$this->driver_id], '/sp/employee/{driver_id}/start-dates');
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
		$optionsResolver->setDefined(['pay_cycle_type', 'anchor_date', 'allow_retrospective_start_dates_flag']);
		$optionsResolver->setRequired([]);
		$optionsResolver->setDefaults(['allow_retrospective_start_dates_flag' => 'no']);
		$optionsResolver->setAllowedTypes('pay_cycle_type', ['string']);
		$optionsResolver->setAllowedTypes('anchor_date', ['string']);
		$optionsResolver->setAllowedTypes('allow_retrospective_start_dates_flag', ['string']);

		return $optionsResolver;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetEmployeeStartDatesInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\EmployeeStartDatesGet|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EmployeeStartDatesGet', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeStartDatesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeStartDatesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeStartDatesNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetEmployeeStartDatesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
