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

class FuelType
{
    /**
     * @var null|string
     */
    protected $fuelTypeId;
    /**
     * @var null|string
     */
    protected $fuelTypeCode;
    /**
     * @var null|string
     */
    protected $fuelName;
    /**
     * @var null|float
     */
    protected $fuelCpl;
    /**
     * @var null|\DateTime
     */
    protected $effectiveDate;

    public function getFuelTypeId(): ?string
    {
        return $this->fuelTypeId;
    }

    public function setFuelTypeId(?string $fuelTypeId): self
    {
        $this->fuelTypeId = $fuelTypeId;

        return $this;
    }

    public function getFuelTypeCode(): ?string
    {
        return $this->fuelTypeCode;
    }

    public function setFuelTypeCode(?string $fuelTypeCode): self
    {
        $this->fuelTypeCode = $fuelTypeCode;

        return $this;
    }

    public function getFuelName(): ?string
    {
        return $this->fuelName;
    }

    public function setFuelName(?string $fuelName): self
    {
        $this->fuelName = $fuelName;

        return $this;
    }

    public function getFuelCpl(): ?float
    {
        return $this->fuelCpl;
    }

    public function setFuelCpl(?float $fuelCpl): self
    {
        $this->fuelCpl = $fuelCpl;

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
}
