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

class ContractBillingVary
{
	/**
	 * Contract Id.
	 *
	 * @var string|null
	 */
	protected $contractId;
	/**
	 * Determines the contract's FBT days calculations.
	 *
	 * @var string|null
	 */
	protected $inertiaFlag;
	/**
	 * A valid pay cycle code.
	 *
	 * @var string|null
	 */
	protected $billingInterval;
	/**
	 * Additional billing periods to create.
	 *
	 * @var int|null
	 */
	protected $remainingBillingPeriods;
	/**
	 * Date of the next budget period to bill.
	 *
	 * @var string|null
	 */
	protected $nextBillingDate;
	/**
	 * For monthly billing, select the day of the month charges will be due, or 'eom' for end of month.
	 *
	 * @var string|null
	 */
	protected $billingCommonDay;
	/**
	 * Payment method preference for budgets.
	 *
	 * @var string|null
	 */
	protected $paymentMethod;

	/**
	 * Contract Id.
	 */
	public function getContractId(): ?string
	{
		return $this->contractId;
	}

	/**
	 * Contract Id.
	 */
	public function setContractId(?string $contractId): self
	{
		$this->contractId = $contractId;

		return $this;
	}

	/**
	 * Determines the contract's FBT days calculations.
	 */
	public function getInertiaFlag(): ?string
	{
		return $this->inertiaFlag;
	}

	/**
	 * Determines the contract's FBT days calculations.
	 */
	public function setInertiaFlag(?string $inertiaFlag): self
	{
		$this->inertiaFlag = $inertiaFlag;

		return $this;
	}

	/**
	 * A valid pay cycle code.
	 */
	public function getBillingInterval(): ?string
	{
		return $this->billingInterval;
	}

	/**
	 * A valid pay cycle code.
	 */
	public function setBillingInterval(?string $billingInterval): self
	{
		$this->billingInterval = $billingInterval;

		return $this;
	}

	/**
	 * Additional billing periods to create.
	 */
	public function getRemainingBillingPeriods(): ?int
	{
		return $this->remainingBillingPeriods;
	}

	/**
	 * Additional billing periods to create.
	 */
	public function setRemainingBillingPeriods(?int $remainingBillingPeriods): self
	{
		$this->remainingBillingPeriods = $remainingBillingPeriods;

		return $this;
	}

	/**
	 * Date of the next budget period to bill.
	 */
	public function getNextBillingDate(): ?string
	{
		return $this->nextBillingDate;
	}

	/**
	 * Date of the next budget period to bill.
	 */
	public function setNextBillingDate(?string $nextBillingDate): self
	{
		$this->nextBillingDate = $nextBillingDate;

		return $this;
	}

	/**
	 * For monthly billing, select the day of the month charges will be due, or 'eom' for end of month.
	 */
	public function getBillingCommonDay(): ?string
	{
		return $this->billingCommonDay;
	}

	/**
	 * For monthly billing, select the day of the month charges will be due, or 'eom' for end of month.
	 */
	public function setBillingCommonDay(?string $billingCommonDay): self
	{
		$this->billingCommonDay = $billingCommonDay;

		return $this;
	}

	/**
	 * Payment method preference for budgets.
	 */
	public function getPaymentMethod(): ?string
	{
		return $this->paymentMethod;
	}

	/**
	 * Payment method preference for budgets.
	 */
	public function setPaymentMethod(?string $paymentMethod): self
	{
		$this->paymentMethod = $paymentMethod;

		return $this;
	}
}
