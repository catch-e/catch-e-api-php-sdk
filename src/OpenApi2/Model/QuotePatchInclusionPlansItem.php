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

class QuotePatchInclusionPlansItem
{
    /**
     * Optional if inclusion_plan_code_qualified specified.
     *
     * @var null|string
     */
    protected $inclusionCode;
    /**
     * Optional if inclusion_plan_code_qualified specified.
     *
     * @var null|string
     */
    protected $inclusionPlanCode;
    /**
     * Required if inclusion_code and inclusion_plan_code omitted.
     *
     * @var null|string
     */
    protected $inclusionPlanCodeQualified;
    /**
     * @var null|float
     */
    protected $retailPriceGross;
    /**
     * @var null|string
     */
    protected $includedFlag;

    /**
     * Optional if inclusion_plan_code_qualified specified.
     */
    public function getInclusionCode(): ?string
    {
        return $this->inclusionCode;
    }

    /**
     * Optional if inclusion_plan_code_qualified specified.
     */
    public function setInclusionCode(?string $inclusionCode): self
    {
        $this->inclusionCode = $inclusionCode;

        return $this;
    }

    /**
     * Optional if inclusion_plan_code_qualified specified.
     */
    public function getInclusionPlanCode(): ?string
    {
        return $this->inclusionPlanCode;
    }

    /**
     * Optional if inclusion_plan_code_qualified specified.
     */
    public function setInclusionPlanCode(?string $inclusionPlanCode): self
    {
        $this->inclusionPlanCode = $inclusionPlanCode;

        return $this;
    }

    /**
     * Required if inclusion_code and inclusion_plan_code omitted.
     */
    public function getInclusionPlanCodeQualified(): ?string
    {
        return $this->inclusionPlanCodeQualified;
    }

    /**
     * Required if inclusion_code and inclusion_plan_code omitted.
     */
    public function setInclusionPlanCodeQualified(?string $inclusionPlanCodeQualified): self
    {
        $this->inclusionPlanCodeQualified = $inclusionPlanCodeQualified;

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
