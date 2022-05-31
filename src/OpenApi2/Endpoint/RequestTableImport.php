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

class RequestTableImport extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * This method requires the **ImportTable** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $table_name Destination table name
     *     @var string $format Format of data
     *     @var string $procedure
     *     @var string $duplicate_import_check_flag Perform duplicate gb_imports checksum check
     *     @var string $timezone Timestamps in import files will be parsed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *     @var \Psr\Http\Message\StreamInterface|resource|string $data Data to import
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
        return '/gb/import/table';
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
        $optionsResolver->setDefined(['table_name', 'format', 'procedure', 'duplicate_import_check_flag', 'timezone', 'data']);
        $optionsResolver->setRequired(['table_name', 'format', 'data']);
        $optionsResolver->setDefaults(['procedure' => 'validate', 'duplicate_import_check_flag' => 'yes', 'timezone' => 'UTC']);
        $optionsResolver->setAllowedTypes('table_name', ['string']);
        $optionsResolver->setAllowedTypes('format', ['string']);
        $optionsResolver->setAllowedTypes('procedure', ['string']);
        $optionsResolver->setAllowedTypes('duplicate_import_check_flag', ['string']);
        $optionsResolver->setAllowedTypes('timezone', ['string']);
        $optionsResolver->setAllowedTypes('data', ['string', 'resource', '\\Psr\\Http\\Message\\StreamInterface']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestTableImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\TableImportRequestSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\TableImportRequestSuccess', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestTableImportInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
