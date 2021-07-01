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

class Payee
{
	/**
	 * Payee Id.
	 *
	 * @var string|null
	 */
	protected $payeeId;
	/**
	 * Payee.
	 *
	 * @var string|null
	 */
	protected $payee;
	/**
	 * @var string|null
	 */
	protected $statusFlag;

	/**
	 * Payee Id.
	 */
	public function getPayeeId(): ?string
	{
		return $this->payeeId;
	}

	/**
	 * Payee Id.
	 */
	public function setPayeeId(?string $payeeId): self
	{
		$this->payeeId = $payeeId;

		return $this;
	}

	/**
	 * Payee.
	 */
	public function getPayee(): ?string
	{
		return $this->payee;
	}

	/**
	 * Payee.
	 */
	public function setPayee(?string $payee): self
	{
		$this->payee = $payee;

		return $this;
	}

	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}
}