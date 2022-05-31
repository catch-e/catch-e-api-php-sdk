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

class GetVariantMakes extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * Get a list of vehicle makes.
     *
     * This method requires the **QuoteVariants:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $make_code optional Make Code
     *
     * This field supports the wildcard % operator
     *     @var string $name optional Make Name
     *
     * This field supports the wildcard % operator
     *     @var string $make_type Optional Make Type
     *     @var string $data_source_id Optional Data Source Id
     *     @var string $profile_required_flag If yes, only show makes for variants that have an active qt_variant_profile record
     *     @var string $include_inactive_flag Set to yes if inactive items required in the list
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
        return '/qt/makes';
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
        $optionsResolver->setDefined(['make_code', 'name', 'make_type', 'data_source_id', 'profile_required_flag', 'include_inactive_flag', 'page', 'page_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['profile_required_flag' => 'no', 'include_inactive_flag' => 'no', 'page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('make_code', ['string']);
        $optionsResolver->setAllowedTypes('name', ['string']);
        $optionsResolver->setAllowedTypes('make_type', ['string']);
        $optionsResolver->setAllowedTypes('data_source_id', ['string']);
        $optionsResolver->setAllowedTypes('profile_required_flag', ['string']);
        $optionsResolver->setAllowedTypes('include_inactive_flag', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesConflictException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetVariantMakesInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VariantMakesGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VariantMakesGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetVariantMakesInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
