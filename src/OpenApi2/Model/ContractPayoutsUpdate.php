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

class ContractPayoutsUpdate
{
	/**
	 * @var float|null
	 */
	protected $financierValue;
	/**
	 * Valid Until date in YYYY-MM-DD format.
	 *
	 * @var string|null
	 */
	protected $validUntil;
	/**
	 * Price to Purchase flag.
	 *
	 * @var string|null
	 */
	protected $priceToPurchaseFlag;
	/**
	 * Early Termination Fee flag.
	 *
	 * @var string|null
	 */
	protected $earlyTerminationFeeFlag;
	/**
	 * Total Loss flag.
	 *
	 * @var string|null
	 */
	protected $totalLossFlag;
	/**
	 * @var float|null
	 */
	protected $priceToPurchaseNet;
	/**
	 * @var float|null
	 */
	protected $earlyTerminationFeeNet;
	/**
	 * @var float|null
	 */
	protected $totalLossNet;
	/**
	 * (Optional) Contract Payout status to transition to on update.
	 *
	 * @var string|null
	 */
	protected $contractPayoutStatusId;
	/**
	 * Override warning validation. If not specified, defaults to 'no'.
	 *
	 * @var string|null
	 */
	protected $overrideWarningsFlag;

	public function getFinancierValue(): ?float
	{
		return $this->financierValue;
	}

	public function setFinancierValue(?float $financierValue): self
	{
		$this->financierValue = $financierValue;

		return $this;
	}

	/**
	 * Valid Until date in YYYY-MM-DD format.
	 */
	public function getValidUntil(): ?string
	{
		return $this->validUntil;
	}

	/**
	 * Valid Until date in YYYY-MM-DD format.
	 */
	public function setValidUntil(?string $validUntil): self
	{
		$this->validUntil = $validUntil;

		return $this;
	}

	/**
	 * Price to Purchase flag.
	 */
	public function getPriceToPurchaseFlag(): ?string
	{
		return $this->priceToPurchaseFlag;
	}

	/**
	 * Price to Purchase flag.
	 */
	public function setPriceToPurchaseFlag(?string $priceToPurchaseFlag): self
	{
		$this->priceToPurchaseFlag = $priceToPurchaseFlag;

		return $this;
	}

	/**
	 * Early Termination Fee flag.
	 */
	public function getEarlyTerminationFeeFlag(): ?string
	{
		return $this->earlyTerminationFeeFlag;
	}

	/**
	 * Early Termination Fee flag.
	 */
	public function setEarlyTerminationFeeFlag(?string $earlyTerminationFeeFlag): self
	{
		$this->earlyTerminationFeeFlag = $earlyTerminationFeeFlag;

		return $this;
	}

	/**
	 * Total Loss flag.
	 */
	public function getTotalLossFlag(): ?string
	{
		return $this->totalLossFlag;
	}

	/**
	 * Total Loss flag.
	 */
	public function setTotalLossFlag(?string $totalLossFlag): self
	{
		$this->totalLossFlag = $totalLossFlag;

		return $this;
	}

	public function getPriceToPurchaseNet(): ?float
	{
		return $this->priceToPurchaseNet;
	}

	public function setPriceToPurchaseNet(?float $priceToPurchaseNet): self
	{
		$this->priceToPurchaseNet = $priceToPurchaseNet;

		return $this;
	}

	public function getEarlyTerminationFeeNet(): ?float
	{
		return $this->earlyTerminationFeeNet;
	}

	public function setEarlyTerminationFeeNet(?float $earlyTerminationFeeNet): self
	{
		$this->earlyTerminationFeeNet = $earlyTerminationFeeNet;

		return $this;
	}

	public function getTotalLossNet(): ?float
	{
		return $this->totalLossNet;
	}

	public function setTotalLossNet(?float $totalLossNet): self
	{
		$this->totalLossNet = $totalLossNet;

		return $this;
	}

	/**
	 * (Optional) Contract Payout status to transition to on update.
	 */
	public function getContractPayoutStatusId(): ?string
	{
		return $this->contractPayoutStatusId;
	}

	/**
	 * (Optional) Contract Payout status to transition to on update.
	 */
	public function setContractPayoutStatusId(?string $contractPayoutStatusId): self
	{
		$this->contractPayoutStatusId = $contractPayoutStatusId;

		return $this;
	}

	/**
	 * Override warning validation. If not specified, defaults to 'no'.
	 */
	public function getOverrideWarningsFlag(): ?string
	{
		return $this->overrideWarningsFlag;
	}

	/**
	 * Override warning validation. If not specified, defaults to 'no'.
	 */
	public function setOverrideWarningsFlag(?string $overrideWarningsFlag): self
	{
		$this->overrideWarningsFlag = $overrideWarningsFlag;

		return $this;
	}
}
