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

class UpdateContact extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $contact_id;

    /**
     * This method requires the **Contacts:Update** permission to be associated with your role.
     *
     * @param string                               $contactId        Contact Id to update
     * @param \CatchE\OpenApi2\Model\ContactUpdate $contact          JSON Payload
     * @param array                                $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $contactId, \CatchE\OpenApi2\Model\ContactUpdate $contact, array $headerParameters = [])
    {
        $this->contact_id = $contactId;
        $this->body = $contact;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{contact_id}'], [$this->contact_id], '/fm/contacts/{contact_id}');
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
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpdateContactInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Contact|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Contact', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpdateContactInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
