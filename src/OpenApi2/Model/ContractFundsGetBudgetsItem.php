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

class ContractFundsGetBudgetsItem
{
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
     * @var null|string[]
     */
    protected $postingClassCodes;
    /**
     * @var null|string
     */
    protected $availableToClaim;
    /**
     * @var null|string
     */
    protected $reportBudgetAsActual;

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

    /**
     * @return null|string[]
     */
    public function getPostingClassCodes(): ?array
    {
        return $this->postingClassCodes;
    }

    /**
     * @param null|string[] $postingClassCodes
     */
    public function setPostingClassCodes(?array $postingClassCodes): self
    {
        $this->postingClassCodes = $postingClassCodes;

        return $this;
    }

    public function getAvailableToClaim(): ?string
    {
        return $this->availableToClaim;
    }

    public function setAvailableToClaim(?string $availableToClaim): self
    {
        $this->availableToClaim = $availableToClaim;

        return $this;
    }

    public function getReportBudgetAsActual(): ?string
    {
        return $this->reportBudgetAsActual;
    }

    public function setReportBudgetAsActual(?string $reportBudgetAsActual): self
    {
        $this->reportBudgetAsActual = $reportBudgetAsActual;

        return $this;
    }
}
