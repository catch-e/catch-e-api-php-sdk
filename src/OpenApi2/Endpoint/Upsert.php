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

class Upsert extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $table_name;

    /**
     * Specified table name must be in the import authorised list. See getTablesAuthorisedForImport.
     *
     * Records to update or insert must include the primary key as part of the JSON payload.
     *
     * To **insert a record** set the primary key to null or an unmapped ref(UUID).
     * To **update a record** set the primary key to the required value or existing ref(UUID).
     *
     * Mapping ref(UUID) values can be used within records. If a ref value is in a primary key and the specified record results in an insertion, the associated ref/primary key values will be mapped to gb_import_table_field_translations.
     *
     * If multiple records are specified within the payload, **record locks will be obtained for each record  before any updates or inserts are performed**. If the necessary record locks cannot be obtained, upsert will return a 423 Locked response.
     *
     * This method requires the **Record:Upsert** permission to be associated with your role
     *
     * @param string $tableName       Table name
     * @param array  $records         JSON payload
     * @param array  $queryParameters {
     *
     *     @var string $timezone Timestamps in upsert records will be parsed in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *     @var string $unique_ids_must_exist_flag Unique Ids specified in upsert records must exist when this flag is 'yes'.
     *
     * If a specified unique id does not exist on an upsert record, a recordDoesNotExist validation exception will be generated
     * and the upsert process will be aborted.
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt
     * to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $tableName, array $records, array $queryParameters = [], array $headerParameters = [])
    {
        $this->table_name = $tableName;
        $this->body = $records;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{table_name}'], [$this->table_name], '/gb/record/upsert/{table_name}');
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['timezone', 'unique_ids_must_exist_flag']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['timezone' => 'UTC', 'unique_ids_must_exist_flag' => 'yes']);
        $optionsResolver->setAllowedTypes('timezone', ['string']);
        $optionsResolver->setAllowedTypes('unique_ids_must_exist_flag', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Delegated-Locking-Session-Id', 'Audit-User-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Delegated-Locking-Session-Id', ['string']);
        $optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\UpsertUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\UpsertForbiddenException
     * @throws \CatchE\OpenApi2\Exception\UpsertNotFoundException
     * @throws \CatchE\OpenApi2\Exception\UpsertNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\UpsertUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\UpsertUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\UpsertLockedException
     * @throws \CatchE\OpenApi2\Exception\UpsertInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\UpsertInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
