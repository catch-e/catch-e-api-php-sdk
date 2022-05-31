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

class GetSalaryPackagingDisbursementCycle extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $disbursement_cycle_id;

    /**
     * This method requires the **SalaryPackageDisbursementCycles:Get** permission to be associated with your role.
     */
    public function __construct(string $disbursementCycleId)
    {
        $this->disbursement_cycle_id = $disbursementCycleId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{disbursement_cycle_id}'], [$this->disbursement_cycle_id], '/sp/disbursement/cycles/{disbursement_cycle_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\SalaryPackagingDisbursementCycle
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\SalaryPackagingDisbursementCycle', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetSalaryPackagingDisbursementCycleInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
