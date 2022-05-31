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

class GetPayeePaymentMethods extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **PayeePaymentMethods:Get** permission to be associated with your role.
     *
     * @param array $queryParameters {
     *
     *     @var string $process_type Process type
     *     @var string $payee_id Payee Id
     *     @var string $payment_method_id Payment method Id
     *     @var string $status_flag Status flag
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
        return '/gl/payee/payment-methods';
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
        $optionsResolver->setDefined(['process_type', 'payee_id', 'payment_method_id', 'status_flag', 'page', 'page_size']);
        $optionsResolver->setRequired(['process_type']);
        $optionsResolver->setDefaults(['status_flag' => 'active', 'page' => 1, 'page_size' => 25]);
        $optionsResolver->setAllowedTypes('process_type', ['string']);
        $optionsResolver->setAllowedTypes('payee_id', ['string']);
        $optionsResolver->setAllowedTypes('payment_method_id', ['string']);
        $optionsResolver->setAllowedTypes('status_flag', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('page_size', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsConflictException
     * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\PayeePaymentMethodsGet
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PayeePaymentMethodsGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (409 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsConflictException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Conflict', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodsInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
