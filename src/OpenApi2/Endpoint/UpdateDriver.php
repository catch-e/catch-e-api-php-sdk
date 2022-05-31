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

class UpdateDriver extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $driver_id;

    /**
     * This method requires the **Drivers:Update** permission to be associated with your role.
     *
     * @param string                              $driverId         Driver Id
     * @param \CatchE\OpenApi2\Model\UpdateDriver $driver           JSON payload
     * @param array                               $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $driverId, \CatchE\OpenApi2\Model\UpdateDriver $driver, array $headerParameters = [])
    {
        $this->driver_id = $driverId;
        $this->body = $driver;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{driver_id}'], [$this->driver_id], '/fm/drivers/{driver_id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Delegated-Locking-Session-Id', 'Audit-User-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Delegated-Locking-Session-Id', ['string']);
        $optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateDriverInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateDriverInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
