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

class ContractPayout
{
    /**
     * @var null|string
     */
    protected $contractPayoutId;
    /**
     * @var null|string
     */
    protected $contractId;
    /**
     * @var null|string
     */
    protected $contractPayoutStatusId;
    /**
     * @var null|string
     */
    protected $created;
    /**
     * @var null|string
     */
    protected $payoutDate;
    /**
     * @var null|string
     */
    protected $priceToPurchaseFlag;
    /**
     * @var null|string
     */
    protected $earlyTerminationFeeFlag;
    /**
     * @var null|string
     */
    protected $totalLossFlag;
    /**
     * @var null|int
     */
    protected $remainingBillings;
    /**
     * @var null|float
     */
    protected $calculatedValueNet;
    /**
     * @var null|float
     */
    protected $calculatedValueGst;
    /**
     * @var null|float
     */
    protected $financierValue;
    /**
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
    protected $priceToPurchaseGst;
    /**
     * @var null|float
     */
    protected $earlyTerminationFeeNet;
    /**
     * @var null|float
     */
    protected $earlyTerminationFeeGst;
    /**
     * @var null|float
     */
    protected $totalLossNet;
    /**
     * @var null|float
     */
    protected $totalLossGst;
    /**
     * @var null|string
     */
    protected $attachmentId;
    /**
     * @var null|string
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
