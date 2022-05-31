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

class GetContactJobTitle extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contact_job_title_id;

    /**
     * This method requires the **Contacts:Get** permission to be associcted with the role.
     *
     * @param string $contactJobTitleId Contact job title Id
     */
    public function __construct(string $contactJobTitleId)
    {
        $this->contact_job_title_id = $contactJobTitleId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{contact_job_title_id}'], [$this->contact_job_title_id], '/fm/contact/job-titles/{contact_job_title_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\GetContactJobTitleInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\ContactJobTitleGet|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContactJobTitleGet', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContactJobTitleUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContactJobTitleForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContactJobTitleNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContactJobTitleNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetContactJobTitleInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
