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

class EricInsuranceGetPricing extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **InterfaceEricInsurance:GetPricing** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $quote_id Quote Id (Catch-e)
     *     @var string $eric_quote_id (Optional) Eric Quote Id (UUID). If specified, revised details will be applied to the specified Eric Quote Id.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *
     * }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gb/interface/eric-insurance/get-pricing';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['quote_id', 'eric_quote_id']);
        $optionsResolver->setRequired(['quote_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('quote_id', ['string']);
        $optionsResolver->setAllowedTypes('eric_quote_id', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Delegated-Locking-Session-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Delegated-Locking-Session-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingBadRequestException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingForbiddenException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotFoundException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\EricInsuranceGetPricingInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\EricInsuranceGetPricingSuccess|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\EricInsuranceGetPricingSuccess', 'json');
        }
        if (400 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingBadRequestException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\BadRequest', 'json'));
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (424 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingFailedDependencyException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\FailedDependency', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\EricInsuranceGetPricingInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
