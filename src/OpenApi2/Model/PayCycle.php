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

class PayCycle
{
	/**
	 * @var string|null
	 */
	protected $payCycleId;
	/**
	 * @var string|null
	 */
	protected $payCycleCode;
	/**
	 * @var string|null
	 */
	protected $description;
	/**
	 * @var string|null
	 */
	protected $billingFlag;
	/**
	 * @var float|null
	 */
	protected $payCyclesPerYear;
	/**
	 * @var float|null
	 */
	protected $taxCyclesPerYear;

	public function getPayCycleId(): ?string
	{
		return $this->payCycleId;
	}

	public function setPayCycleId(?string $payCycleId): self
	{
		$this->payCycleId = $payCycleId;

		return $this;
	}

	public function getPayCycleCode(): ?string
	{
		return $this->payCycleCode;
	}

	public function setPayCycleCode(?string $payCycleCode): self
	{
		$this->payCycleCode = $payCycleCode;

		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getBillingFlag(): ?string
	{
		return $this->billingFlag;
	}

	public function setBillingFlag(?string $billingFlag): self
	{
		$this->billingFlag = $billingFlag;

		return $this;
	}

	public function getPayCyclesPerYear(): ?float
	{
		return $this->payCyclesPerYear;
	}

	public function setPayCyclesPerYear(?float $payCyclesPerYear): self
	{
		$this->payCyclesPerYear = $payCyclesPerYear;

		return $this;
	}

	public function getTaxCyclesPerYear(): ?float
	{
		return $this->taxCyclesPerYear;
	}

	public function setTaxCyclesPerYear(?float $taxCyclesPerYear): self
	{
		$this->taxCyclesPerYear = $taxCyclesPerYear;

		return $this;
	}
}
