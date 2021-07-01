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

class TransitionContractPayoutIntoInvoiceSentState extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
	use \Jane\OpenApiRuntime\Client\EndpointTrait;
	protected $contract_payout_id;

	/**
	 * Transition a Contract Payout into **invoice-sent** state.
	This method requires the **ContractPayouts:Update** and **ContractPayouts:InvoiceSent** permissions to be associated with your role.
	 *
	 * @param \CatchE\OpenApi2\Model\ContractPayoutsInvoiceSent $body JSON payload
	 */
	public function __construct(string $contractPayoutId, \CatchE\OpenApi2\Model\ContractPayoutsInvoiceSent $body)
	{
		$this->contract_payout_id = $contractPayoutId;
		$this->body = $body;
	}

	public function getMethod(): string
	{
		return 'POST';
	}

	public function getUri(): string
	{
		return str_replace(['{contract_payout_id}'], [$this->contract_payout_id], '/fm/contract/payouts/{contract_payout_id}/invoice-sent');
	}

	public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
	{
		return $this->getSerializedBody($serializer);
	}

	public function getExtraHeaders(): array
	{
		return ['Accept' => ['application/json']];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnauthorizedException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateForbiddenException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotFoundException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotAcceptableException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnsupportedMediaTypeException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnprocessableEntityException
	 * @throws \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateInternalServerErrorException
	 *
	 * @return \CatchE\OpenApi2\Model\ContractPayout|\CatchE\OpenApi2\Model\Error|null
	 */
	protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
	{
		if (201 === $status) {
			return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\ContractPayout', 'json');
		}
		if (401 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
		}
		if (403 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
		}
		if (404 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
		}
		if (406 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
		}
		if (415 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
		}
		if (422 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
		}
		if (500 === $status) {
			throw new \CatchE\OpenApi2\Exception\TransitionContractPayoutIntoInvoiceSentStateInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
		}

		return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
	}

	public function getAuthenticationScopes(): array
	{
		return ['Bearer Token'];
	}
}
