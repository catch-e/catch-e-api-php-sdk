<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

class GetEmployeeEndDates extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $driver_id;

    /**
     * This method requires the **EmployeePackageItems:Get** permission to be associated with your role.
     *
     * @param string $driverId        Driver Id
     * @param array  $queryParameters {
     *
     *     @var string $package_item_id Package Item Id
     *     @var string $start_date Start Date
     *     @var int $cycles Cycles
     *     @var string $pay_cycle_type (Optional) Pay Cycle Type. If not specified, will use package item default (if defined).
     *     @var int $dates_to_calculate (Optional) End dates to calculate. If not specified, will use driver pay cycles per year.
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
        return str_replace(['{driver_id}'], [$this->driver_id], '/sp/employee/{driver_id}/end-dates');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['package_item_id', 'start_date', 'cycles', 'pay_cycle_type', 'dates_to_calculate']);
        $optionsResolver->setRequired(['package_item_id', 'start_date']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('package_item_id', ['string']);
        $optionsResolver->setAllowedTypes('start_date', ['string']);
        $optionsResolver->setAllowedTypes('cycles', ['int']);
        $optionsResolver->setAllowedTypes('pay_cycle_type', ['string']);
        $optionsResolver->setAllowedTypes('dates_to_calculate', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetEmployeeEndDatesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EmployeeEndDatesGet|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EmployeeEndDatesGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetEmployeeEndDatesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetEmployeeEndDatesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetEmployeeEndDatesNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetEmployeeEndDatesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
