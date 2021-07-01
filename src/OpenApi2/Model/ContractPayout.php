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

class ContractPayout
{
	/**
	 * @var string|null
	 */
	protected $contractPayoutId;
	/**
	 * @var string|null
	 */
	protected $contractId;
	/**
	 * @var string|null
	 */
	protected $contractPayoutStatusId;
	/**
	 * @var string|null
	 */
	protected $created;
	/**
	 * @var string|null
	 */
	protected $payoutDate;
	/**
	 * @var string|null
	 */
	protected $priceToPurchaseFlag;
	/**
	 * @var string|null
	 */
	protected $earlyTerminationFeeFlag;
	/**
	 * @var string|null
	 */
	protected $totalLossFlag;
	/**
	 * @var int|null
	 */
	protected $remainingBillings;
	/**
	 * @var float|null
	 */
	protected $calculatedValueNet;
	/**
	 * @var float|null
	 */
	protected $calculatedValueGst;
	/**
	 * @var float|null
	 */
	protected $financierValue;
	/**
	 * @var string|null
	 */
	protected $validUntil;
	/**
	 * @var float|null
	 */
	protected $priceToPurchaseNet;
	/**
	 * @var float|null
	 */
	protected $priceToPurchaseGst;
	/**
	 * @var float|null
	 */
	protected $earlyTerminationFeeNet;
	/**
	 * @var float|null
	 */
	protected $earlyTerminationFeeGst;
	/**
	 * @var float|null
	 */
	protected $totalLossNet;
	/**
	 * @var float|null
	 */
	protected $totalLossGst;
	/**
	 * @var string|null
	 */
	protected $attachmentId;
	/**
	 * @var string|null
	 */
	protected $userIdCreate;

	public function getContractPayoutId(): ?string
	{
		return $this->contractPayoutId;
	}

	public function setContractPayoutId(?string $contractPayoutId): self
	{
		$this->contractPayoutId = $contractPayoutId;

		return $this;
	}

	public function getContractId(): ?string
	{
		return $this->contractId;
	}

	public function setContractId(?string $contractId): self
	{
		$this->contractId = $contractId;

		return $this;
	}

	public function getContractPayoutStatusId(): ?string
	{
		return $this->contractPayoutStatusId;
	}

	public function setContractPayoutStatusId(?string $contractPayoutStatusId): self
	{
		$this->contractPayoutStatusId = $contractPayoutStatusId;

		return $this;
	}

	public function getCreated(): ?string
	{
		return $this->created;
	}

	public function setCreated(?string $created): self
	{
		$this->created = $created;

		return $this;
	}

	public function getPayoutDate(): ?string
	{
		return $this->payoutDate;
	}

	public function setPayoutDate(?string $payoutDate): self
	{
		$this->payoutDate = $payoutDate;

		return $this;
	}

	public function getPriceToPurchaseFlag(): ?string
	{
		return $this->priceToPurchaseFlag;
	}

	public function setPriceToPurchaseFlag(?string $priceToPurchaseFlag): self
	{
		$this->priceToPurchaseFlag = $priceToPurchaseFlag;

		return $this;
	}

	public function getEarlyTerminationFeeFlag(): ?string
	{
		return $this->earlyTerminationFeeFlag;
	}

	public function setEarlyTerminationFeeFlag(?string $earlyTerminationFeeFlag): self
	{
		$this->earlyTerminationFeeFlag = $earlyTerminationFeeFlag;

		return $this;
	}

	public function getTotalLossFlag(): ?string
	{
		return $this->totalLossFlag;
	}

	public function setTotalLossFlag(?string $totalLossFlag): self
	{
		$this->totalLossFlag = $totalLossFlag;

		return $this;
	}

	public function getRemainingBillings(): ?int
	{
		return $this->remainingBillings;
	}

	public function setRemainingBillings(?int $remainingBillings): self
	{
		$this->remainingBillings = $remainingBillings;

		return $this;
	}

	public function getCalculatedValueNet(): ?float
	{
		return $this->calculatedValueNet;
	}

	public function setCalculatedValueNet(?float $calculatedValueNet): self
	{
		$this->calculatedValueNet = $calculatedValueNet;

		return $this;
	}

	public function getCalculatedValueGst(): ?float
	{
		return $this->calculatedValueGst;
	}

	public function setCalculatedValueGst(?float $calculatedValueGst): self
	{
		$this->calculatedValueGst = $calculatedValueGst;

		return $this;
	}

	public function getFinancierValue(): ?float
	{
		return $this->financierValue;
	}

	public function setFinancierValue(?float $financierValue): self
	{
		$this->financierValue = $financierValue;

		return $this;
	}

	public function getValidUntil(): ?string
	{
		return $this->validUntil;
	}

	public function setValidUntil(?string $validUntil): self
	{
		$this->validUntil = $validUntil;

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

	public function getPriceToPurchaseGst(): ?float
	{
		return $this->priceToPurchaseGst;
	}

	public function setPriceToPurchaseGst(?float $priceToPurchaseGst): self
	{
		$this->priceToPurchaseGst = $priceToPurchaseGst;

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

	public function getEarlyTerminationFeeGst(): ?float
	{
		return $this->earlyTerminationFeeGst;
	}

	public function setEarlyTerminationFeeGst(?float $earlyTerminationFeeGst): self
	{
		$this->earlyTerminationFeeGst = $earlyTerminationFeeGst;

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

	public function getTotalLossGst(): ?float
	{
		return $this->totalLossGst;
	}

	public function setTotalLossGst(?float $totalLossGst): self
	{
		$this->totalLossGst = $totalLossGst;

		return $this;
	}

	public function getAttachmentId(): ?string
	{
		return $this->attachmentId;
	}

	public function setAttachmentId(?string $attachmentId): self
	{
		$this->attachmentId = $attachmentId;

		return $this;
	}

	public function getUserIdCreate(): ?string
	{
		return $this->userIdCreate;
	}

	public function setUserIdCreate(?string $userIdCreate): self
	{
		$this->userIdCreate = $userIdCreate;

		return $this;
	}
}
