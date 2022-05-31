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

class GetQuoteFieldsWebService extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * Get a Quote.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy getQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * This service returns quote template placeholders for a saved quote.
     *
     * @param array $queryParameters {
     *
     *     @var string $quote_id Quote Id
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
        return '/web-services/qt/quotes/getQuote/fields';
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
        $optionsResolver->setDefined(['quote_id', 'fields']);
        $optionsResolver->setRequired(['quote_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('quote_id', ['string']);
        $optionsResolver->setAllowedTypes('fields', ['array']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (418 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceIAmATeapotException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InvalidCredentials', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetQuoteFieldsWebServiceInternalServerErrorException();
        }
    }
}
