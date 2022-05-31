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

class InsuranceType
{
    /**
     * @var null|string
     */
    protected $insuranceTypeId;
    /**
     * @var null|string
     */
    protected $insuranceTypeCode;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|string
     */
    protected $typeCategory;
    /**
     * @var null|string
     */
    protected $highPerformanceFlag;
    /**
     * @var null|float
     */
    protected $claimExcess;
    /**
     * @var null|string
     */
    protected $notes;
    /**
     * @var null|\DateTime
     */
    protected $date;

    public function getInsuranceTypeId(): ?string
    {
        return $this->insuranceTypeId;
    }

    public function setInsuranceTypeId(?string $insuranceTypeId): self
    {
        $this->insuranceTypeId = $insuranceTypeId;

        return $this;
    }

    public function getInsuranceTypeCode(): ?string
    {
        return $this->insuranceTypeCode;
    }

    public function setInsuranceTypeCode(?string $insuranceTypeCode): self
    {
        $this->insuranceTypeCode = $insuranceTypeCode;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTypeCategory(): ?string
    {
        return $this->typeCategory;
    }

    public function setTypeCategory(?string $typeCategory): self
    {
        $this->typeCategory = $typeCategory;

        return $this;
    }

    public function getHighPerformanceFlag(): ?string
    {
        return $this->highPerformanceFlag;
    }

    public function setHighPerformanceFlag(?string $highPerformanceFlag): self
    {
        $this->highPerformanceFlag = $highPerformanceFlag;

        return $this;
    }

    public function getClaimExcess(): ?float
    {
        return $this->claimExcess;
    }

    public function setClaimExcess(?float $claimExcess): self
    {
        $this->claimExcess = $claimExcess;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
