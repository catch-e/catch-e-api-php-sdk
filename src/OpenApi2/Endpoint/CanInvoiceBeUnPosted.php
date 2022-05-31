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

class CanInvoiceBeUnPosted extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;
    protected $invoice_no;

    /**
     * This method requires the **ContractBilling:Unpost** permission to be associated with your role.
     *
     * @param string $invoiceNo Invoice no to unpost
     */
    public function __construct(string $invoiceNo)
    {
        $this->invoice_no = $invoiceNo;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{invoice_no}'], [$this->invoice_no], '/fm/contract/billing/unpost-invoice/{invoice_no}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
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
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedForbiddenException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedNotFoundException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedLockedException
     * @throws \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (423 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedLockedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Locked', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\CanInvoiceBeUnPostedInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }
    }
}
