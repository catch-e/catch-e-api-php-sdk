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

class ContractBudgetsCreateFinalEntriesSuccess
{
	/**
	 * @var string|null
	 */
	protected $contractId;
	/**
	 * @var int|null
	 */
	protected $billingPeriod;
	/**
	 * @var int|null
	 */
	protected $billingPeriodItemNo;

	public function getContractId(): ?string
	{
		return $this->contractId;
	}

	public function setContractId(?string $contractId): self
	{
		$this->contractId = $contractId;

		return $this;
	}

	public function getBillingPeriod(): ?int
	{
		return $this->billingPeriod;
	}

	public function setBillingPeriod(?int $billingPeriod): self
	{
		$this->billingPeriod = $billingPeriod;

		return $this;
	}

	public function getBillingPeriodItemNo(): ?int
	{
		return $this->billingPeriodItemNo;
	}

	public function setBillingPeriodItemNo(?int $billingPeriodItemNo): self
	{
		$this->billingPeriodItemNo = $billingPeriodItemNo;

		return $this;
	}
}
