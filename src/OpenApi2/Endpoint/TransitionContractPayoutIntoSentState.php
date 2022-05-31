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

class TransitionContractPayoutIntoSentState extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contract_payout_id;

    /**
     * Transition a Contract Payout into **sent** state. For this method to execute, the specified contract payout must already be in 'open' status.
     * This method is *idempotent* and can be invoked multiple times to obtain the URI resource for the document to be supplied to the client.
     * This method requires the **ContractPayouts:Update** permission to be associated with your role.
     *
     * @param \CatchE\OpenApi2\Model\ContractPayoutsSent $body JSON payload
     */
    public function __construct(string $contractPayoutId, \CatchE\OpenApi2\Model\ContractPayoutsSent $body)
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
        return str_replace(['{contract_payout_id}'], [$this->contract_payout_id], '/fm/contract/payouts/{contract_payout_id}/send');
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
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateForbiddenException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotFoundException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractPayout', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoSentStateInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
