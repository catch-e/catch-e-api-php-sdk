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

class PatchQuote extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $quote_id;

    /**
     * Partially update a quote.
     *
     * This method is not idempotent.
     *
     * This method requires the **Quotes:Update** permission to be associated with your role.
     *
     * This API will allow partial updating of a quote. Initially only selected Lease Profiles listed below will be supported. More functionality will be added later.
     *
     **Currently supported features:**
     * 1) Carbon Emissions Offset (CEO)
     * 2) Fuel (F)
     * 3) Comprehensive Insurance (INS)
     * 4) Registration & CTP (REGCTP)
     * 5) Roadside Assistance (RSA)
     * 6) Vehicle Maintenance Program (VMP)
     * 7) Lease Inclusions
     *
     * @param string                            $quoteId          Quote ID
     * @param \CatchE\OpenApi2\Model\QuotePatch $quote            JSON payload
     * @param array                             $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(string $quoteId, \CatchE\OpenApi2\Model\QuotePatch $quote, array $headerParameters = [])
    {
        $this->quote_id = $quoteId;
        $this->body = $quote;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{quote_id}'], [$this->quote_id], '/qt/quotes/{quote_id}');
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
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteForbiddenException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteLockedException
     * @throws \CatchE\OpenApi2\Exception\PatchQuoteInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Quote
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Quote', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\PatchQuoteUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\PatchQuoteForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\PatchQuoteUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\PatchQuoteLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\PatchQuoteInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
