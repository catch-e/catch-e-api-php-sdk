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

class PrintReportQuery extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $report_query_id;

    /**
     * The representational output format of the report query is controlled by HTTP Accept header. Three content types are presently supported:.
     *
     * text/csv
     * text/xml
     * application/vnd.ms-excel
     * application/json (default)
     *
     * Queries that run successfully but result in 0 rows will return an HTTP 204 (No content) response from the API.
     *
     * Query parameters are optional. If a specific parameter is *required* by the selected report query but not included in the request,
     * a 422 Unprocessable Entity response will result. The required parameter will be documented within the HTTP 422 response payload.
     *
     * This method requires the **ReportQueries:Print** permission to be associated with the role.
     *
     * @param string $reportQueryId   Report query to run
     * @param array  $queryParameters Report query parameters
     */
    public function __construct(string $reportQueryId, array $queryParameters)
    {
        $this->report_query_id = $reportQueryId;
        $this->body = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{report_query_id}'], [$this->report_query_id], '/gb/report/queries/print/{report_query_id}');
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

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\PrintReportQueryInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return json_decode($body);
        }
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\PrintReportQueryInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
