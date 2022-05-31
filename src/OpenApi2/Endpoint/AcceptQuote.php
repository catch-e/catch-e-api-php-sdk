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

class AcceptQuote extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $quote_id;

    /**
     * This method requires the **Quotes:Accept** permission to be associated with your role.
     *
     * @param string $quoteId        Quote Id
     * @param array  $formParameters {
     *
     *     @var string $procurement_check_flag Procurement Check Flag
     *
     * If **no** procurement check warnings will prevent a quote from being accepted if the qt::accept_quote_procurement_check control is configured to enable alerts and the procurement flag is checked on the quote.
     *
     * Setting **yes** will overrride the procurement check warnings and indicate acceptance of any applicable procurement fees.
     *     @var string $timezone Quotes will be accepted in the specified timezone.
     *
     * The timezone value can be given in several formats, none of which are case sensitive:
     * - As a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'.
     * - As a string indicating an offset from UTC of the form [H]H:MM, prefixed with a + or -, such as '+10:00', '-6:00', or '+05:30'.
     * A leading zero can optionally be used for hours values less than 10;
     *
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Delegated-Locking-Session-Id (Optional) Locking responsibility will be delegated to the specified Session Id.
     *
     * This header enables the client to instruct the API to merely verify the presence of locks with the specified session id, but not attempt to obtain them itself. It requires the **DelegatedLocking** permission to be associated with your role.
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $quoteId, array $formParameters = [], array $headerParameters = [])
    {
        $this->quote_id = $quoteId;
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{quote_id}'], [$this->quote_id], '/qt/quotes/{quote_id}/accept');
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
        $optionsResolver->setDefined(['procurement_check_flag', 'timezone']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['procurement_check_flag' => 'no', 'timezone' => 'UTC']);
        $optionsResolver->setAllowedTypes('procurement_check_flag', ['string']);
        $optionsResolver->setAllowedTypes('timezone', ['string']);

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
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteNotFoundException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\AcceptQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\QuoteAcceptSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\QuoteAcceptSuccess', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\AcceptQuoteInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
