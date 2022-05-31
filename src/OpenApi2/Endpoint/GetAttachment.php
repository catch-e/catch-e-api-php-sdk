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

class GetAttachment extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $attachment_id;

    /**
     * Get an existing attachment.
     *
     * To obtain the attachment binary contents:
     * - forward the client to the url returned from the getAttachmentPresignedUrl method (recommended if applicable)
     * - capture the binary stream from the url returned from the getAttachmentPresignedUrl method
     * - invoke this API preferencing the 'application/octet-stream' response
     *
     * This method requires the **Attachments:Get** permission to be associated with your role.
     *
     * @param string $attachmentId Attachment Id
     */
    public function __construct(string $attachmentId)
    {
        $this->attachment_id = $attachmentId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{attachment_id}'], [$this->attachment_id], '/gb/attachments/{attachment_id}');
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
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Attachment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Attachment', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
