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

class SaveAttachment extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This service allows you to save an attachment via the API rather than using the regular web-based attachment upload function.
     *
     * This method requires the **Attachments:Save** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var \Psr\Http\Message\StreamInterface|resource|string $attachment_file Attachment file
     *     @var string $target_table Target table
     *     @var string $record_id The unique (primary) id of the record in the target table the attachment is to be associated with
     *     @var string $notes (Optional) Notes to be stored with the attachment
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gb/attachments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
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
        $optionsResolver->setDefined(['attachment_file', 'target_table', 'record_id', 'notes']);
        $optionsResolver->setRequired(['attachment_file', 'target_table', 'record_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('attachment_file', ['string', 'resource', '\\Psr\\Http\\Message\\StreamInterface']);
        $optionsResolver->setAllowedTypes('target_table', ['string']);
        $optionsResolver->setAllowedTypes('record_id', ['string']);
        $optionsResolver->setAllowedTypes('notes', ['string']);

        return $optionsResolver;
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
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentForbiddenException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentNotFoundException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\SaveAttachmentInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Attachment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Attachment', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\SaveAttachmentUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\SaveAttachmentForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\SaveAttachmentNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\SaveAttachmentUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\SaveAttachmentInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
