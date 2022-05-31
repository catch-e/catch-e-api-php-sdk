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

class ContractBudget
{
    /**
     * @var null|string
     */
    protected $id;
    /**
     * Contract Id.
     *
     * @var null|string
     */
    protected $contractId;
    /**
     * @var null|string
     */
    protected $postingClassId;
    /**
     * @var null|float
     */
    protected $billingPeriod;
    /**
     * @var null|float
     */
    protected $billingPeriodItemNo;
    /**
     * @var null|string
     */
    protected $billingTypeFlag;
    /**
     * @var null|string
     */
    protected $billingInterval;
    /**
     * Billing date.
     *
     * @var null|\DateTime
     */
    protected $billingDate;
    /**
     * @var null|string
     */
    protected $paymentMethod;
    /**
     * @var null|float
     */
    protected $amountNet;
    /**
     * @var null|float
     */
    protected $amountGst;
    /**
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|string
     */
    protected $postingClassCode;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

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

    public function getPostingClassId(): ?string
    {
        return $this->postingClassId;
    }

    public function setPostingClassId(?string $postingClassId): self
    {
        $this->postingClassId = $postingClassId;

        return $this;
    }

    public function getBillingPeriod(): ?float
    {
        return $this->billingPeriod;
    }

    public function setBillingPeriod(?float $billingPeriod): self
    {
        $this->billingPeriod = $billingPeriod;

        return $this;
    }

    public function getBillingPeriodItemNo(): ?float
    {
        return $this->billingPeriodItemNo;
    }

    public function setBillingPeriodItemNo(?float $billingPeriodItemNo): self
    {
        $this->billingPeriodItemNo = $billingPeriodItemNo;

        return $this;
    }

    public function getBillingTypeFlag(): ?string
    {
        return $this->billingTypeFlag;
    }

    public function setBillingTypeFlag(?string $billingTypeFlag): self
    {
        $this->billingTypeFlag = $billingTypeFlag;

        return $this;
    }

    public function getBillingInterval(): ?string
    {
        return $this->billingInterval;
    }

    public function setBillingInterval(?string $billingInterval): self
    {
        $this->billingInterval = $billingInterval;

        return $this;
    }

    /**
     * Billing date.
     */
    public function getBillingDate(): ?\DateTime
    {
        return $this->billingDate;
    }

    /**
     * Billing date.
     */
    public function setBillingDate(?\DateTime $billingDate): self
    {
        $this->billingDate = $billingDate;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getAmountNet(): ?float
    {
        return $this->amountNet;
    }

    public function setAmountNet(?float $amountNet): self
    {
        $this->amountNet = $amountNet;

        return $this;
    }

    public function getAmountGst(): ?float
    {
        return $this->amountGst;
    }

    public function setAmountGst(?float $amountGst): self
    {
        $this->amountGst = $amountGst;

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

    public function getPostingClassCode(): ?string
    {
        return $this->postingClassCode;
    }

    public function setPostingClassCode(?string $postingClassCode): self
    {
        $this->postingClassCode = $postingClassCode;

        return $this;
    }
}
