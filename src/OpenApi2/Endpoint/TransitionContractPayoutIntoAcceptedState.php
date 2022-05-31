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

class TransitionContractPayoutIntoAcceptedState extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contract_payout_id;

    /**
     * Transition a Contract Payout into **accepted** state.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsAccepted $body JSON payload
     */
    public function __construct(string $contractPayoutId, \CatchE\OpenApi2\Model\ContractPayoutsAccepted $body)
    {
        $this->contract_payout_id = $contractPayoutId;
        $this->body = $body;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{contract_payout_id}'], [$this->contract_payout_id], '/fm/contract/payouts/{contract_payout_id}/accept');
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

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractPayout', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoAcceptedStateInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
