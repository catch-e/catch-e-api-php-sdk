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

class QuoteTyres
{
    /**
     * @var null|string
     */
    protected $tyreId;
    /**
     * @var null|float
     */
    protected $tyresPerSet;
    /**
     * @var null|float
     */
    protected $tyreKmInterval;
    /**
     * @var null|float
     */
    protected $unitCostNet;
    /**
     * @var null|string
     */
    protected $limitFlag = 'no';
    /**
     * @var null|float
     */
    protected $tyresEstimated;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getTyreId(): ?string
    {
        return $this->tyreId;
    }

    public function setTyreId(?string $tyreId): self
    {
        $this->tyreId = $tyreId;

        return $this;
    }

    public function getTyresPerSet(): ?float
    {
        return $this->tyresPerSet;
    }

    public function setTyresPerSet(?float $tyresPerSet): self
    {
        $this->tyresPerSet = $tyresPerSet;

        return $this;
    }

    public function getTyreKmInterval(): ?float
    {
        return $this->tyreKmInterval;
    }

    public function setTyreKmInterval(?float $tyreKmInterval): self
    {
        $this->tyreKmInterval = $tyreKmInterval;

        return $this;
    }

    public function getUnitCostNet(): ?float
    {
        return $this->unitCostNet;
    }

    public function setUnitCostNet(?float $unitCostNet): self
    {
        $this->unitCostNet = $unitCostNet;

        return $this;
    }

    public function getLimitFlag(): ?string
    {
        return $this->limitFlag;
    }

    public function setLimitFlag(?string $limitFlag): self
    {
        $this->limitFlag = $limitFlag;

        return $this;
    }

    public function getTyresEstimated(): ?float
    {
        return $this->tyresEstimated;
    }

    public function setTyresEstimated(?float $tyresEstimated): self
    {
        $this->tyresEstimated = $tyresEstimated;

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
