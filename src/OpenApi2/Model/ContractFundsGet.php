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

class ContractFundsGet
{
    /**
     * @var null|ContractFundsGetBudgetsItem[]
     */
    protected $budgets;
    /**
     * @var null|float
     */
    protected $budget;
    /**
     * @var null|float
     */
    protected $actual;
    /**
     * @var null|float
     */
    protected $variance;
    /**
     * @var null|float
     */
    protected $available;
    /**
     * @var null|float
     */
    protected $fundsReceived;
    /**
     * @var null|float
     */
    protected $fundsVariance;
    /**
     * @var null|float
     */
    protected $availableBalance;
    /**
     * @var null|float
     */
    protected $actualBalance;

    /**
     * @return null|ContractFundsGetBudgetsItem[]
     */
    public function getBudgets(): ?iterable
    {
        return $this->budgets;
    }

    /**
     * @param null|ContractFundsGetBudgetsItem[] $budgets
     */
    public function setBudgets(?iterable $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getActual(): ?float
    {
        return $this->actual;
    }

    public function setActual(?float $actual): self
    {
        $this->actual = $actual;

        return $this;
    }

    public function getVariance(): ?float
    {
        return $this->variance;
    }

    public function setVariance(?float $variance): self
    {
        $this->variance = $variance;

        return $this;
    }

    public function getAvailable(): ?float
    {
        return $this->available;
    }

    public function setAvailable(?float $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getFundsReceived(): ?float
    {
        return $this->fundsReceived;
    }

    public function setFundsReceived(?float $fundsReceived): self
    {
        $this->fundsReceived = $fundsReceived;

        return $this;
    }

    public function getFundsVariance(): ?float
    {
        return $this->fundsVariance;
    }

    public function setFundsVariance(?float $fundsVariance): self
    {
        $this->fundsVariance = $fundsVariance;

        return $this;
    }

    public function getAvailableBalance(): ?float
    {
        return $this->availableBalance;
    }

    public function setAvailableBalance(?float $availableBalance): self
    {
        $this->availableBalance = $availableBalance;

        return $this;
    }

    public function getActualBalance(): ?float
    {
        return $this->actualBalance;
    }

    public function setActualBalance(?float $actualBalance): self
    {
        $this->actualBalance = $actualBalance;

        return $this;
    }
}
