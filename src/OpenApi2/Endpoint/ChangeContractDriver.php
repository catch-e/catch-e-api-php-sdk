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

class ChangeContractDriver extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contract_id;

    /**
     * This method changes the driver by creating a driver change event and optionally saves an odometer record.
     *
     * This method requires the **ContractEvents:ChangeDriver** permission to be
     * associated with your role.
     *
     * @param string                             $contractId       Contract Id
     * @param \CatchE\OpenApi2\Model\DriverEvent $driverEvent      JSON payload
     * @param array                              $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $contractId, \CatchE\OpenApi2\Model\DriverEvent $driverEvent, array $headerParameters = [])
    {
        $this->contract_id = $contractId;
        $this->body = $driverEvent;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{contract_id}'], [$this->contract_id], '/fm/contract/events/{contract_id}/change-driver');
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
        $optionsResolver->setDefined(['Audit-User-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverLockedException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverFailedDependencyException
     * @throws \CatchE\OpenApi2\Exception\ChangeContractDriverInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractEvent|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractEvent', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (424 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverFailedDependencyException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\FailedDependency', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\ChangeContractDriverInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
