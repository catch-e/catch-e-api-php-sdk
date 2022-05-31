<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

class ContractPayoutsCreate
{
    /**
     * Contract Id.
     *
     * @var null|string
     */
    protected $contractId;
    /**
     * Payout date in YYYY-MM-DD format.
     *
     * @var null|string
     */
    protected $payoutDate;
    /**
     * Price to Purchase flag.
     *
     * @var null|string
     */
    protected $priceToPurchaseFlag;
    /**
     * Early Termination Fee flag.
     *
     * @var null|string
     */
    protected $earlyTerminationFeeFlag;
    /**
     * Total Loss flag.
     *
     * @var null|string
     */
    protected $totalLossFlag;
    /**
     * @var null|float
     */
    protected $financierValue;
    /**
     * Valid Until date in YYYY-MM-DD format.
     *
     * @var null|string
     */
    protected $validUntil;
    /**
     * @var null|float
     */
    protected $priceToPurchaseNet;
    /**
     * @var null|float
     */
    protected $earlyTerminationFeeNet;
    /**
     * @var null|float
     */
    protected $totalLossNet;
    /**
     * (Optional) Contract Payout status to transition to on create.
     *
     * @var null|string
     */
    protected $contractPayoutStatusId;
    /**
     * Override warning validation. If not specified, defaults to 'no'.
     *
     * @var null|string
     */
    protected $overrideWarningsFlag;

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
     * Payout date in YYYY-MM-DD format.
     */
    public function getPayoutDate(): ?string
    {
        return $this->payoutDate;
    }

    /**
     * Payout date in YYYY-MM-DD format.
     */
    public function setPayoutDate(?string $payoutDate): self
    {
        $this->payoutDate = $payoutDate;

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
     * (Optional) Contract Payout status to transition to on create.
     */
    public function getContractPayoutStatusId(): ?string
    {
        return $this->contractPayoutStatusId;
    }

    /**
     * (Optional) Contract Payout status to transition to on create.
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
