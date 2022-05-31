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

class QuoteFuel
{
    /**
     * @var null|string
     */
    protected $fuelTypeId;
    /**
     * @var null|float
     */
    protected $costPerLitre;
    /**
     * @var null|string
     */
    protected $usageType = 'metro';
    /**
     * @var null|float
     */
    protected $litresPer100km;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getFuelTypeId(): ?string
    {
        return $this->fuelTypeId;
    }

    public function setFuelTypeId(?string $fuelTypeId): self
    {
        $this->fuelTypeId = $fuelTypeId;

        return $this;
    }

    public function getCostPerLitre(): ?float
    {
        return $this->costPerLitre;
    }

    public function setCostPerLitre(?float $costPerLitre): self
    {
        $this->costPerLitre = $costPerLitre;

        return $this;
    }

    public function getUsageType(): ?string
    {
        return $this->usageType;
    }

    public function setUsageType(?string $usageType): self
    {
        $this->usageType = $usageType;

        return $this;
    }

    public function getLitresPer100km(): ?float
    {
        return $this->litresPer100km;
    }

    public function setLitresPer100km(?float $litresPer100km): self
    {
        $this->litresPer100km = $litresPer100km;

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
