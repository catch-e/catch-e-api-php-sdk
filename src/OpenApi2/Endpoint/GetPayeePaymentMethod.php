<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

class GetPayeePaymentMethod extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $payee_payment_method_id;

	/**
	 * This method requires the **PayeePaymentMethods:Get** permission to be associated with your role.
	 *
	 * @param string $payeePaymentMethodId Payee Payment method Id
	 */
	public function __construct(string $payeePaymentMethodId)
	{
		$this->payee_payment_method_id = $payeePaymentMethodId;
	}

	public function getMethod(): string
	{
		return 'GET';
	}

	public function getUri(): string
	{
		return str_replace(['{payee_payment_method_id}'], [$this->payee_payment_method_id], '/gl/payee/payment-methods/{payee_payment_method_id}');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return [[], null];
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\GetPayeePaymentMethodInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\PayeePaymentMethod|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (200 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\PayeePaymentMethod', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\GetPayeePaymentMethodInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
