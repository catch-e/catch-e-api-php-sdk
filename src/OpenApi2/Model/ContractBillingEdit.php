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

class ContractBillingEdit
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
     * @var null|int
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
     * Periodic Billing Start Date.
     *
     * @var null|\DateTime
     */
    protected $startPeriodic;
    /**
     * Determines the contract's FBT days calculations.
     *
     * @var null|string
     */
    protected $inertiaFlag;
    /**
     * Billing Common Day (monthly pay cycle only).
     *
     * @var null|int
     */
    protected $billingCommonDay;
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
     * The number of periods included in the Initial Charge.
     *
     * @var null|int
     */
    protected $initialBillings;
    /**
     * The number of regular billings to be processed as Periodic invoices.
     *
     * @var null|int
     */
    protected $periodicBillings;
    /**
     * Payment method preference for budgets.
     *
     * @var null|string
     */
    protected $paymentMethod;
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
    public function getTerm(): ?int
    {
        return $this->term;
    }

    /**
     * Contract Term (in months).
     */
    public function setTerm(?int $term): self
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
     * Periodic Billing Start Date.
     */
    public function getStartPeriodic(): ?\DateTime
    {
        return $this->startPeriodic;
    }

    /**
     * Periodic Billing Start Date.
     */
    public function setStartPeriodic(?\DateTime $startPeriodic): self
    {
        $this->startPeriodic = $startPeriodic;

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
     * Billing Common Day (monthly pay cycle only).
     */
    public function getBillingCommonDay(): ?int
    {
        return $this->billingCommonDay;
    }

    /**
     * Billing Common Day (monthly pay cycle only).
     */
    public function setBillingCommonDay(?int $billingCommonDay): self
    {
        $this->billingCommonDay = $billingCommonDay;

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
     * The number of periods included in the Initial Charge.
     */
    public function getInitialBillings(): ?int
    {
        return $this->initialBillings;
    }

    /**
     * The number of periods included in the Initial Charge.
     */
    public function setInitialBillings(?int $initialBillings): self
    {
        $this->initialBillings = $initialBillings;

        return $this;
    }

    /**
     * The number of regular billings to be processed as Periodic invoices.
     */
    public function getPeriodicBillings(): ?int
    {
        return $this->periodicBillings;
    }

    /**
     * The number of regular billings to be processed as Periodic invoices.
     */
    public function setPeriodicBillings(?int $periodicBillings): self
    {
        $this->periodicBillings = $periodicBillings;

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
