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

class QuoteExtendedWarranty
{
    /**
     * @var null|string
     */
    protected $warrantyPlanId;
    /**
     * @var null|string
     */
    protected $warrantyCategoryId;
    /**
     * @var null|float
     */
    protected $months;
    /**
     * @var null|float
     */
    protected $kilometres;
    /**
     * @var null|float
     */
    protected $rate;
    /**
     * @var null|float
     */
    protected $retailPriceNet;
    /**
     * @var null|float
     */
    protected $cost;
    /**
     * @var null|float
     */
    protected $marginNet;
    /**
     * @var null|string
     */
    protected $financedFlag = 'yes';
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getWarrantyPlanId(): ?string
    {
        return $this->warrantyPlanId;
    }

    public function setWarrantyPlanId(?string $warrantyPlanId): self
    {
        $this->warrantyPlanId = $warrantyPlanId;

        return $this;
    }

    public function getWarrantyCategoryId(): ?string
    {
        return $this->warrantyCategoryId;
    }

    public function setWarrantyCategoryId(?string $warrantyCategoryId): self
    {
        $this->warrantyCategoryId = $warrantyCategoryId;

        return $this;
    }

    public function getMonths(): ?float
    {
        return $this->months;
    }

    public function setMonths(?float $months): self
    {
        $this->months = $months;

        return $this;
    }

    public function getKilometres(): ?float
    {
        return $this->kilometres;
    }

    public function setKilometres(?float $kilometres): self
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRetailPriceNet(): ?float
    {
        return $this->retailPriceNet;
    }

    public function setRetailPriceNet(?float $retailPriceNet): self
    {
        $this->retailPriceNet = $retailPriceNet;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }

    public function setMarginNet(?float $marginNet): self
    {
        $this->marginNet = $marginNet;

        return $this;
    }

    public function getFinancedFlag(): ?string
    {
        return $this->financedFlag;
    }

    public function setFinancedFlag(?string $financedFlag): self
    {
        $this->financedFlag = $financedFlag;

        return $this;
    }

    public function getIncludedFlag(): ?string
    {
        return $this->includedFlag;
    }

    public function setIncludedFlag(?string $includedFlag): self
    {
        $this->includedFlag = $includedFlag;

        return $this;
    }
}
