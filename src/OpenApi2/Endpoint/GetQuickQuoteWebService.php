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

class GetQuickQuoteWebService extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * Get a Quick Quote.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy qq::lease::getQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * This service returns quote template placeholders for a quick quote.
     *
     * @param array $queryParameters {
     *
     *     @var string $variant_id Variant Id
     *     @var string $variant_code Variant Code
     *     @var float $approximate_price Approximate Price
     *     @var float $approximate_on_road_price Approximate On Road Price
     *     @var string $state_registered State Registered
     *     @var float $annual_kilometres Annual Kilometres
     *     @var int $lease_period Lease Period
     *     @var float $annual_salary Annual Salary
     *     @var string $postcode Postcode
     *     @var string $roadside_assistance_plan_code Roadside Assistance Plan Code
     *     @var float $monthly_finance_gross Monthly Finance Gross
     *     @var string $client_code Client Code
     *     @var string $pay_cycle_code Pay Cycle Code
     *     @var string $data_source Data Source
     *     @var string $new_used New / Used
     *     @var float $odometer Odometer
     *     @var string $contract_type Contract Type
     *     @var string $fbt_benefit_type FBT Benefit Type
     *     @var float $fbt_business_use Bus Use% for the quote
     *     @var string $maintenance_service_flag Maintenance Service Flag
     *     @var string $insurance_flag Insurance Flag
     *     @var string $reg_ctp_flag Reg Ctp Flag
     *     @var string $tyres_flag Tyres Flag
     *     @var string $fuel_flag Fuel Flag
     *     @var string $optional_equipment_deselect_flag Optional Equipment Deselect Flag
     *     @var float $dealer_delivery_net Dealer Delivery (Net)
     *     @var array $fields Define fields required. If no fields are specified then all fields are returned.
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
        return '/web-services/qq/lease/getQuote';
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
        $optionsResolver->setDefined(['variant_id', 'variant_code', 'approximate_price', 'approximate_on_road_price', 'state_registered', 'annual_kilometres', 'lease_period', 'annual_salary', 'postcode', 'roadside_assistance_plan_code', 'monthly_finance_gross', 'client_code', 'pay_cycle_code', 'data_source', 'new_used', 'odometer', 'contract_type', 'fbt_benefit_type', 'fbt_business_use', 'maintenance_service_flag', 'insurance_flag', 'reg_ctp_flag', 'tyres_flag', 'fuel_flag', 'optional_equipment_deselect_flag', 'dealer_delivery_net', 'fields']);
        $optionsResolver->setRequired(['state_registered', 'annual_kilometres', 'lease_period', 'annual_salary']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('variant_id', ['string']);
        $optionsResolver->setAllowedTypes('variant_code', ['string']);
        $optionsResolver->setAllowedTypes('approximate_price', ['float']);
        $optionsResolver->setAllowedTypes('approximate_on_road_price', ['float']);
        $optionsResolver->setAllowedTypes('state_registered', ['string']);
        $optionsResolver->setAllowedTypes('annual_kilometres', ['float']);
        $optionsResolver->setAllowedTypes('lease_period', ['int']);
        $optionsResolver->setAllowedTypes('annual_salary', ['float']);
        $optionsResolver->setAllowedTypes('postcode', ['string']);
        $optionsResolver->setAllowedTypes('roadside_assistance_plan_code', ['string']);
        $optionsResolver->setAllowedTypes('monthly_finance_gross', ['float']);
        $optionsResolver->setAllowedTypes('client_code', ['string']);
        $optionsResolver->setAllowedTypes('pay_cycle_code', ['string']);
        $optionsResolver->setAllowedTypes('data_source', ['string']);
        $optionsResolver->setAllowedTypes('new_used', ['string']);
        $optionsResolver->setAllowedTypes('odometer', ['float']);
        $optionsResolver->setAllowedTypes('contract_type', ['string']);
        $optionsResolver->setAllowedTypes('fbt_benefit_type', ['string']);
        $optionsResolver->setAllowedTypes('fbt_business_use', ['float']);
        $optionsResolver->setAllowedTypes('maintenance_service_flag', ['string']);
        $optionsResolver->setAllowedTypes('insurance_flag', ['string']);
        $optionsResolver->setAllowedTypes('reg_ctp_flag', ['string']);
        $optionsResolver->setAllowedTypes('tyres_flag', ['string']);
        $optionsResolver->setAllowedTypes('fuel_flag', ['string']);
        $optionsResolver->setAllowedTypes('optional_equipment_deselect_flag', ['string']);
        $optionsResolver->setAllowedTypes('dealer_delivery_net', ['float']);
        $optionsResolver->setAllowedTypes('fields', ['array']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (418 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceIAmATeapotException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InvalidCredentials', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuickQuoteWebServiceInternalServerErrorException();
        }
    }
}
