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

class SalesforceLegacySyncQuote extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **InterfaceSalesforceLegacy:SyncQuote** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $quote_id Quote Id
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
        return '/gb/interface/salesforce-legacy/sync-quote';
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
        $optionsResolver->setDefined(['quote_id']);
        $optionsResolver->setRequired(['quote_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('quote_id', ['string']);

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
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteBadRequestException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteBadRequestException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\BadRequest', 'json'));
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\SalesforceLegacySyncQuoteInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
