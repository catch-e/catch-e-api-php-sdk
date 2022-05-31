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

class Submit255FinanceExportBatch extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **InterfaceExports:255FinanceSubmit** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $dmz_upload_file_destination_id Credentials to use for submission process
     *     @var string $dmz_upload_remote_prefix (Optional) Remote directory prefix to use when submitting file to upload destination
     *     @var string $interface_export_id (Optional) Interface Export Id
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
        return '/gb/interface/exports/255finance/submit';
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
        $optionsResolver->setDefined(['dmz_upload_file_destination_id', 'dmz_upload_remote_prefix', 'interface_export_id']);
        $optionsResolver->setRequired(['dmz_upload_file_destination_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('dmz_upload_file_destination_id', ['string']);
        $optionsResolver->setAllowedTypes('dmz_upload_remote_prefix', ['string']);
        $optionsResolver->setAllowedTypes('interface_export_id', ['string']);

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
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchForbiddenException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotFoundException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\Submit255FinanceExportBatchInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
