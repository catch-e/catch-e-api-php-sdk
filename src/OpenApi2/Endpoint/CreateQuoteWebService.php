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

class CreateQuoteWebService extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * **Create a Quote.**.
     *
     * This method requires the **WebServices** permission to be associated with your role.
     *
     * This API invokes the legacy createQuote web service. ***Note, this endpoint will be deprecated once a full service replacement has been developed.***
     *
     * Generates a lease quote.
     *
     * A collection of parameters (listed below) are passed into the parameters. These are used to construct a lease quotation.
     *
     * - The Opportunity ID and Number are optional, and are stored on the quote
     * - A code identifying an existing Catch-e client must be included
     * - Alpha numeric unique driver identifier is required, and a new driver record will be created if a driver bearing the identifier doesn't already exist
     * - Driver details can be updated when creating a new quote, see fields with the prefix 'driver_'
     * - When creating a second quote, pass in the parent_quote_id to link the two quotes together
     * - An optional contract type can be passed in to be used in place of the default
     * - The list price may be overridden using the list_price_gross field, or the list_price_net and list_price_gst fields
     *
     * If a problem occurs a Catch-e error code (listed below) will be returned with the results. If successfully created, the quote PDF can be extracted using the quote download web service.
     *
     * The driver_surname field is required when creating a new driver record. To force the reading of this value or any other driver fields from the opportunity account, pass through the value 'encrypted'.
     *
     **Audit History**
     *
     * Audit history is created when using this web service. The history is attributed to the user_id passed in the parameter 'user_id_client_manager'.
     *
     * @param \CatchE\OpenApi2\Model\CreateQuoteWebService $quote JSON payload
     */
    public function __construct(\CatchE\OpenApi2\Model\CreateQuoteWebService $quote)
    {
        $this->body = $quote;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/web-services/qt/salesforce/createQuote';
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
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceIAmATeapotException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceLockedException
     * @throws \CatchE\OpenApi2\Exception\CreateQuoteWebServiceInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\CreateQuoteWebServiceSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\CreateQuoteWebServiceSuccess', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (418 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceIAmATeapotException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InvalidCredentials', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\CreateQuoteWebServiceInternalServerErrorException();
        }
    }
}
