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

namespace CatchE\OpenApi2\Model;

class PaymentMethod
{
	/**
	 * Payment method Id.
	 *
	 * @var string|null
	 */
	protected $paymentMethodId;
	/**
	 * Payment method.
	 *
	 * @var string|null
	 */
	protected $paymentMethod;
	/**
	 * Status flag.
	 *
	 * @var string|null
	 */
	protected $statusFlag;

	/**
	 * Payment method Id.
	 */
	public function getPaymentMethodId(): ?string
	{
		return $this->paymentMethodId;
	}

	/**
	 * Payment method Id.
	 */
	public function setPaymentMethodId(?string $paymentMethodId): self
	{
		$this->paymentMethodId = $paymentMethodId;

		return $this;
	}

	/**
	 * Payment method.
	 */
	public function getPaymentMethod(): ?string
	{
		return $this->paymentMethod;
	}

	/**
	 * Payment method.
	 */
	public function setPaymentMethod(?string $paymentMethod): self
	{
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Status flag.
	 */
	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	/**
	 * Status flag.
	 */
	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}
}