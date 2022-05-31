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

class GetAttachmentPresignedUrl extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $attachment_id;

    /**
     * Create a pre-signed URL for the given attachment.
     *
     * This method requires the **Attachments:Get** permission to be associated with your role.
     *
     * @param string $attachmentId   Attachment Id
     * @param array  $formParameters {
     *
     *     @var int $url_timeout Pre-signed URL timeout in seconds
     * }
     */
    public function __construct(string $attachmentId, array $formParameters = [])
    {
        $this->attachment_id = $attachmentId;
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{attachment_id}'], [$this->attachment_id], '/gb/attachments/{attachment_id}/pre-signed-url');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getFormBody();
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['url_timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['url_timeout' => 300]);
        $optionsResolver->setAllowedTypes('url_timeout', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlForbiddenException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlNotFoundException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\AttachmentPresignedUrl
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\AttachmentPresignedUrl', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\GetAttachmentPresignedUrlInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
