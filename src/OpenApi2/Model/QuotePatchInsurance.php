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

class QuotePatchInsurance
{
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|string
     */
    protected $insuranceTypeId;
    /**
     * @var null|string
     */
    protected $billingType;
    /**
     * @var null|float
     */
    protected $claimExcess;
    /**
     * @var null|float
     */
    protected $annualInsurance;
    /**
     * @var null|string
     */
    protected $fund1stYearFlag = 'no';
    /**
     * @var null|float
     */
    protected $monthlyAmountNet;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function setSupplierId(?string $supplierId): self
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    public function getInsuranceTypeId(): ?string
    {
        return $this->insuranceTypeId;
    }

    public function setInsuranceTypeId(?string $insuranceTypeId): self
    {
        $this->insuranceTypeId = $insuranceTypeId;

        return $this;
    }

    public function getBillingType(): ?string
    {
        return $this->billingType;
    }

    public function setBillingType(?string $billingType): self
    {
        $this->billingType = $billingType;

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

    public function getAnnualInsurance(): ?float
    {
        return $this->annualInsurance;
    }

    public function setAnnualInsurance(?float $annualInsurance): self
    {
        $this->annualInsurance = $annualInsurance;

        return $this;
    }

    public function getFund1stYearFlag(): ?string
    {
        return $this->fund1stYearFlag;
    }

    public function setFund1stYearFlag(?string $fund1stYearFlag): self
    {
        $this->fund1stYearFlag = $fund1stYearFlag;

        return $this;
    }

    public function getMonthlyAmountNet(): ?float
    {
        return $this->monthlyAmountNet;
    }

    public function setMonthlyAmountNet(?float $monthlyAmountNet): self
    {
        $this->monthlyAmountNet = $monthlyAmountNet;

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
