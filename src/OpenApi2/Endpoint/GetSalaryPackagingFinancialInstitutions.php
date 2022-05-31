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

class GetSalaryPackagingFinancialInstitutions extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **SalaryPackageFinancialInstitutions:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $financial_institution_number optional Financial Institution Number
     *
     * This field supports the wildcard % operator
     *     @var int $page Optional page number
     *     @var int $page_size Optional page size
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
        return '/sp/financial/institutions';
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
        $optionsResolver->setDefined(['financial_institution_number', 'page', 'page_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('financial_institution_number', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SalaryPackagingFinancialInstitutionsGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\SalaryPackagingFinancialInstitutionsGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingFinancialInstitutionsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
