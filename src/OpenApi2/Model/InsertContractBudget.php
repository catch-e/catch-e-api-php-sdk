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

class InsertContractBudget
{
    /**
     * Contract Id.
     *
     * @var null|string
     */
    protected $contractId;
    /**
     * Bulling period.
     *
     * @var null|int
     */
    protected $billingPeriod;
    /**
     * @var null|string
     */
    protected $paymentMethod;
    /**
     * Billing date.
     *
     * @var null|\DateTime
     */
    protected $billingDate;
    /**
     * A set of budgets to be inserted with the posting class code as the property.
     *
     * @var null|InsertContractBudgetBudgetsItem[]
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
     * Bulling period.
     */
    public function getBillingPeriod(): ?int
    {
        return $this->billingPeriod;
    }

    /**
     * Bulling period.
     */
    public function setBillingPeriod(?int $billingPeriod): self
    {
        $this->billingPeriod = $billingPeriod;

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

    /**
     * A set of budgets to be inserted with the posting class code as the property.
     *
     * @return null|InsertContractBudgetBudgetsItem[]
     */
    public function getBudgets(): ?iterable
    {
        return $this->budgets;
    }

    /**
     * A set of budgets to be inserted with the posting class code as the property.
     *
     * @param null|InsertContractBudgetBudgetsItem[] $budgets
     */
    public function setBudgets(?iterable $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }
}
