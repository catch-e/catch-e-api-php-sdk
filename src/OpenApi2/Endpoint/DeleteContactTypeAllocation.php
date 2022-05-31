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

class DeleteContactTypeAllocation extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contact_id;
    protected $contact_type_id;

    /**
     * This method requires **Contacts:Delete** permission to be associated with the role.
     *
     * @param string $contactId     Contact Id
     * @param string $contactTypeId Contact type Id
     */
    public function __construct(string $contactId, string $contactTypeId)
    {
        $this->contact_id = $contactId;
        $this->contact_type_id = $contactTypeId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{contact_id}', '{contact_type_id}'], [$this->contact_id, $this->contact_type_id], '/fm/contact/type/allocations/{contact_id}/{contact_type_id}');
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
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotFoundException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\DeleteContactTypeAllocationInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
