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

class ImportPublicHolidays extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * Import public holiday data from supported data sources. Presently data.gov.au is supported.
     *
     * Resource Ids can be obtained from https://data.gov.au/dataset/ds-dga-b1bc6077-dadd-4f61-9f8c-002ab2cdff10/details.
     *
     * This API is idempotent. Making multiple identical requests has the same effect as making a single request.
     *
     * This method requires the **ImportPublicHolidays** permission to be associated with your role.
     *
     * @param array $formParameters {
     *
     *     @var string $data_source Import data source
     *     @var string $resource_id Resource id for the specified data source. e.g. 33673aca-0857-42e5-b8f0-9981b4755686
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
        return '/gb/import/public-holidays';
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
        $optionsResolver->setDefined(['data_source', 'resource_id']);
        $optionsResolver->setRequired(['data_source', 'resource_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('data_source', ['string']);
        $optionsResolver->setAllowedTypes('resource_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysForbiddenException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysNotFoundException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\ImportPublicHolidaysInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\ImportPublicHolidaysForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\ImportPublicHolidaysNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\ImportPublicHolidaysUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\ImportPublicHolidaysInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
