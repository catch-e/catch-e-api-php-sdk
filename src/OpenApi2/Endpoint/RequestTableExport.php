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

class RequestTableExport extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ExportTable** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $table_name Source table name
     *     @var string $format Desired export format
     *     @var string $include_field_headers_flag Include field headers in export file
     *     @var string $sample_rows_only_flag
     *     @var string $remove_null_values_flag
     *     @var string $timezone Timestamps in export files will be presented in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     */
    public function __construct(array $formParameters = [])
    {
        $this->formParameters = $formParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/gb/export/table';
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
        $optionsResolver->setDefined(['table_name', 'format', 'include_field_headers_flag', 'sample_rows_only_flag', 'remove_null_values_flag', 'timezone']);
        $optionsResolver->setRequired(['table_name', 'sample_rows_only_flag']);
        $optionsResolver->setDefaults(['format' => 'csv', 'include_field_headers_flag' => 'yes', 'remove_null_values_flag' => 'no', 'timezone' => 'UTC']);
        $optionsResolver->setAllowedTypes('table_name', ['string']);
        $optionsResolver->setAllowedTypes('format', ['string']);
        $optionsResolver->setAllowedTypes('include_field_headers_flag', ['string']);
        $optionsResolver->setAllowedTypes('sample_rows_only_flag', ['string']);
        $optionsResolver->setAllowedTypes('remove_null_values_flag', ['string']);
        $optionsResolver->setAllowedTypes('timezone', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestTableExportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableExportRequestSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\TableExportRequestSuccess', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableExportInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
