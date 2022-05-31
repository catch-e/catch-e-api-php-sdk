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

class CreateContactTypeAllocation extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires **Contacts:Create** permission to be associated with the role.
     *
     * @param array $contactTypeAllocation JSON payload
     */
    public function __construct(array $contactTypeAllocation)
    {
        $this->body = $contactTypeAllocation;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/fm/contact/type/allocations';
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
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateContactTypeAllocationInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactTypeAllocationGet[]|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContactTypeAllocationGet[]', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateContactTypeAllocationInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
