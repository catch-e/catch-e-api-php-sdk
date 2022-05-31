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

class GetSuppliers extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **Suppliers:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $name Optional supplier name.
     *
     * This field supports the wildcard % operator.
     *     @var string $supplier_code Optional supplier code.
     *
     * This field supports the wildcard % operator.
     *     @var array $supplier_type optional supplier type
     *     @var string $exclude_empty_name_flag Optional flag.
     * Set 'yes' to exclude suppliers with an empty name field
     *     @var array $status Optional status
     *     @var string $interface_type optional interface type
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
        return '/fm/suppliers';
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
        $optionsResolver->setDefined(['name', 'supplier_code', 'supplier_type', 'exclude_empty_name_flag', 'status', 'interface_type', 'page', 'page_size']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['exclude_empty_name_flag' => 'no', 'status' => 'active', 'page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('name', ['string']);
        $optionsResolver->setAllowedTypes('supplier_code', ['string']);
        $optionsResolver->setAllowedTypes('supplier_type', ['array']);
        $optionsResolver->setAllowedTypes('exclude_empty_name_flag', ['string']);
        $optionsResolver->setAllowedTypes('status', ['array']);
        $optionsResolver->setAllowedTypes('interface_type', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersConflictException
     * @throws \CatchE\OpenApi2\Exception\GetSuppliersInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SuppliersGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\SuppliersGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSuppliersInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
