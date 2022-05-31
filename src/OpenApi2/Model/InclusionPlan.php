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

class InclusionPlan
{
    /**
     * @var null|string
     */
    protected $inclusionPlanId;
    /**
     * @var null|string
     */
    protected $inclusionCode;
    /**
     * @var null|string
     */
    protected $inclusionPlanCode;
    /**
     * @var null|string
     */
    protected $inclusionPlanCodeQualified;
    /**
     * @var null|string
     */
    protected $planName;
    /**
     * @var null|float
     */
    protected $retailPriceGross;
    /**
     * @var null|float
     */
    protected $retailPriceNet;
    /**
     * @var null|float
     */
    protected $costPriceNet;
    /**
     * @var null|float
     */
    protected $marginNet;
    /**
     * @var null|\DateTime
     */
    protected $effectiveDate;
    /**
     * @var null|string
     */
    protected $statusFlag;

    public function getInclusionPlanId(): ?string
    {
        return $this->inclusionPlanId;
    }

    public function setInclusionPlanId(?string $inclusionPlanId): self
    {
        $this->inclusionPlanId = $inclusionPlanId;

        return $this;
    }

    public function getInclusionCode(): ?string
    {
        return $this->inclusionCode;
    }

    public function setInclusionCode(?string $inclusionCode): self
    {
        $this->inclusionCode = $inclusionCode;

        return $this;
    }

    public function getInclusionPlanCode(): ?string
    {
        return $this->inclusionPlanCode;
    }

    public function setInclusionPlanCode(?string $inclusionPlanCode): self
    {
        $this->inclusionPlanCode = $inclusionPlanCode;

        return $this;
    }

    public function getInclusionPlanCodeQualified(): ?string
    {
        return $this->inclusionPlanCodeQualified;
    }

    public function setInclusionPlanCodeQualified(?string $inclusionPlanCodeQualified): self
    {
        $this->inclusionPlanCodeQualified = $inclusionPlanCodeQualified;

        return $this;
    }

    public function getPlanName(): ?string
    {
        return $this->planName;
    }

    public function setPlanName(?string $planName): self
    {
        $this->planName = $planName;

        return $this;
    }

    public function getRetailPriceGross(): ?float
    {
        return $this->retailPriceGross;
    }

    public function setRetailPriceGross(?float $retailPriceGross): self
    {
        $this->retailPriceGross = $retailPriceGross;

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

    public function getCostPriceNet(): ?float
    {
        return $this->costPriceNet;
    }

    public function setCostPriceNet(?float $costPriceNet): self
    {
        $this->costPriceNet = $costPriceNet;

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

    public function getEffectiveDate(): ?\DateTime
    {
        return $this->effectiveDate;
    }

    public function setEffectiveDate(?\DateTime $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

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
}
