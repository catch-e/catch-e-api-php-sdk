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

class ContractBillingVary
{
    /**
     * Contract Id.
     *
     * @var null|string
     */
    protected $contractId;
    /**
     * Posting Map Id.
     *
     * @var null|string
     */
    protected $postingMapId;
    /**
     * Contract Term (in months).
     *
     * @var null|float
     */
    protected $term;
    /**
     * Contract Start Date.
     *
     * @var null|\DateTime
     */
    protected $contractStart;
    /**
     * Contract End Date.
     *
     * @var null|\DateTime
     */
    protected $contractEnd;
    /**
     * Determines the contract's FBT days calculations.
     *
     * @var null|string
     */
    protected $inertiaFlag;
    /**
     * A valid pay cycle code.
     *
     * @var null|string
     */
    protected $billingInterval;
    /**
     * The number of periods deferred.
     *
     * @var null|float
     */
    protected $billingDeferred;
    /**
     * Additional billing periods to create.
     *
     * @var null|int
     */
    protected $remainingBillingPeriods;
    /**
     * Date of the next budget period to bill.
     *
     * @var null|string
     */
    protected $nextBillingDate;
    /**
     * For monthly billing, select the day of the month charges will be due, or 'eom' for end of month.
     *
     * @var null|string
     */
    protected $billingCommonDay;
    /**
     * Payment method preference for budgets.
     *
     * @var null|string
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
     * Posting Map Id.
     */
    public function getPostingMapId(): ?string
    {
        return $this->postingMapId;
    }

    /**
     * Posting Map Id.
     */
    public function setPostingMapId(?string $postingMapId): self
    {
        $this->postingMapId = $postingMapId;

        return $this;
    }

    /**
     * Contract Term (in months).
     */
    public function getTerm(): ?float
    {
        return $this->term;
    }

    /**
     * Contract Term (in months).
     */
    public function setTerm(?float $term): self
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Contract Start Date.
     */
    public function getContractStart(): ?\DateTime
    {
        return $this->contractStart;
    }

    /**
     * Contract Start Date.
     */
    public function setContractStart(?\DateTime $contractStart): self
    {
        $this->contractStart = $contractStart;

        return $this;
    }

    /**
     * Contract End Date.
     */
    public function getContractEnd(): ?\DateTime
    {
        return $this->contractEnd;
    }

    /**
     * Contract End Date.
     */
    public function setContractEnd(?\DateTime $contractEnd): self
    {
        $this->contractEnd = $contractEnd;

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
     * The number of periods deferred.
     */
    public function getBillingDeferred(): ?float
    {
        return $this->billingDeferred;
    }

    /**
     * The number of periods deferred.
     */
    public function setBillingDeferred(?float $billingDeferred): self
    {
        $this->billingDeferred = $billingDeferred;

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
