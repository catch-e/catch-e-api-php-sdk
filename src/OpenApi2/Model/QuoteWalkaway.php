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

class QuoteWalkaway
{
    /**
     * @var null|string
     */
    protected $walkawayPlanId;
    /**
     * @var null|float
     */
    protected $retailPriceNet;
    /**
     * @var null|float
     */
    protected $retailPriceGross;
    /**
     * @var null|float
     */
    protected $costPriceNet;
    /**
     * @var null|float
     */
    protected $marginNet;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getWalkawayPlanId(): ?string
    {
        return $this->walkawayPlanId;
    }

    public function setWalkawayPlanId(?string $walkawayPlanId): self
    {
        $this->walkawayPlanId = $walkawayPlanId;

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

    public function getRetailPriceGross(): ?float
    {
        return $this->retailPriceGross;
    }

    public function setRetailPriceGross(?float $retailPriceGross): self
    {
        $this->retailPriceGross = $retailPriceGross;

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
