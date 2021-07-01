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

class ContractBudgetsUpdate
{
	/**
	 * Contract Id.
	 *
	 * @var string|null
	 */
	protected $contractId;
	/**
	 * Optional targeted payment method.
	 *
	 * @var string|null
	 */
	protected $paymentMethod;
	/**
	 * Optional with default 'no'.  If set to 'no' all future Billing Periods including the billing_period nominated will be updated. If set to 'yes' update only the billing_period nominated.
	 *
	 * @var string|null
	 */
	protected $updateSinglePeriod;
	/**
	 * Optional. Must be specified if update_single_period is set to 'yes'.
	 *
	 * @var int|null
	 */
	protected $billingPeriod;
	/**
	 * A set of budgets to be updated with the posting class code as the property.
	 *
	 * @var ContractBudgetsUpdateBudgetsItem[]|null
	 */
	protected $budgets;

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
	 * Optional targeted payment method.
	 */
	public function getPaymentMethod(): ?string
	{
		return $this->paymentMethod;
	}

	/**
	 * Optional targeted payment method.
	 */
	public function setPaymentMethod(?string $paymentMethod): self
	{
		$this->paymentMethod = $paymentMethod;

		return $this;
	}

	/**
	 * Optional with default 'no'.  If set to 'no' all future Billing Periods including the billing_period nominated will be updated. If set to 'yes' update only the billing_period nominated.
	 */
	public function getUpdateSinglePeriod(): ?string
	{
		return $this->updateSinglePeriod;
	}

	/**
	 * Optional with default 'no'.  If set to 'no' all future Billing Periods including the billing_period nominated will be updated. If set to 'yes' update only the billing_period nominated.
	 */
	public function setUpdateSinglePeriod(?string $updateSinglePeriod): self
	{
		$this->updateSinglePeriod = $updateSinglePeriod;

		return $this;
	}

	/**
	 * Optional. Must be specified if update_single_period is set to 'yes'.
	 */
	public function getBillingPeriod(): ?int
	{
		return $this->billingPeriod;
	}

	/**
	 * Optional. Must be specified if update_single_period is set to 'yes'.
	 */
	public function setBillingPeriod(?int $billingPeriod): self
	{
		$this->billingPeriod = $billingPeriod;

		return $this;
	}

	/**
	 * A set of budgets to be updated with the posting class code as the property.
	 *
	 * @return ContractBudgetsUpdateBudgetsItem[]|null
	 */
	public function getBudgets(): ?iterable
	{
		return $this->budgets;
	}

	/**
	 * A set of budgets to be updated with the posting class code as the property.
	 *
	 * @param ContractBudgetsUpdateBudgetsItem[]|null $budgets
	 */
	public function setBudgets(?iterable $budgets): self
	{
		$this->budgets = $budgets;

		return $this;
	}
}
