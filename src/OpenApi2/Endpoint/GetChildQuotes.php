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

class GetChildQuotes extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $quote_id;

    /**
     * Get a list of all (child) Quotes linked to a (primary) Quote ID in a tree structure.
     *
     **Note:** circular references are not allowed and will result in a validation error.
     *
     * This method requires the **Quotes:GetChildQuotes** permission to be associated  with your role.
     *
     * @param string $quoteId         Quote Id
     * @param array  $queryParameters {
     *
     *     @var int $depth (Optional) The depth of parent / child relationships required.
     *
     * 1 = children only
     * 2 = children and grandchildren
     * 3 = children, grandchildren, and great-grandchildren
     *
     * Maximum 100.
     *
     * By default, the full parent / child relationship history is returned unless the depth exceeds 100 in which case you get a validation error.
     *
     * }
     */
    public function __construct(string $quoteId, array $queryParameters = [])
    {
        $this->quote_id = $quoteId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{quote_id}'], [$this->quote_id], '/qt/quotes/{quote_id}/child-quotes');
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
        $optionsResolver->setDefined(['depth']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('depth', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetChildQuotesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ChildQuotesGet|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ChildQuotesGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetChildQuotesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetChildQuotesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetChildQuotesUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetChildQuotesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
