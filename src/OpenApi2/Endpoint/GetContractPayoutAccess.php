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

class GetContractPayoutAccess extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contract_payout_id;
    protected $access_type;

    /**
     * This method requires the **ContractPayouts:Get** permission to be associated with your role.
     */
    public function __construct(string $contractPayoutId, string $accessType)
    {
        $this->contract_payout_id = $contractPayoutId;
        $this->access_type = $accessType;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{contract_payout_id}', '{access_type}'], [$this->contract_payout_id, $this->access_type], '/fm/contract/payouts/{contract_payout_id}/access/{access_type}');
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

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetContractPayoutAccessInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\FmContractPayoutsContractPayoutIdAccessAccessTypeGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\FmContractPayoutsContractPayoutIdAccessAccessTypeGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContractPayoutAccessInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
