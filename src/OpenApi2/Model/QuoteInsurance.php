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

class QuoteInsurance
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
    protected $baseRateAnnual;
    /**
     * @var null|float
     */
    protected $brokerFeeMonthly;
    /**
     * @var null|float
     */
    protected $brokerFeeAnnual;
    /**
     * @var null|float
     */
    protected $loadingRate;
    /**
     * @var null|string
     */
    protected $loadingRateFlag = 'not-applicable';
    /**
     * @var null|float
     */
    protected $stampDuty;
    /**
     * @var null|float
     */
    protected $fireServiceLevy;
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
    protected $cost;
    /**
     * @var null|string
     */
    protected $categoryCode;
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

    public function getBaseRateAnnual(): ?float
    {
        return $this->baseRateAnnual;
    }

    public function setBaseRateAnnual(?float $baseRateAnnual): self
    {
        $this->baseRateAnnual = $baseRateAnnual;

        return $this;
    }

    public function getBrokerFeeMonthly(): ?float
    {
        return $this->brokerFeeMonthly;
    }

    public function setBrokerFeeMonthly(?float $brokerFeeMonthly): self
    {
        $this->brokerFeeMonthly = $brokerFeeMonthly;

        return $this;
    }

    public function getBrokerFeeAnnual(): ?float
    {
        return $this->brokerFeeAnnual;
    }

    public function setBrokerFeeAnnual(?float $brokerFeeAnnual): self
    {
        $this->brokerFeeAnnual = $brokerFeeAnnual;

        return $this;
    }

    public function getLoadingRate(): ?float
    {
        return $this->loadingRate;
    }

    public function setLoadingRate(?float $loadingRate): self
    {
        $this->loadingRate = $loadingRate;

        return $this;
    }

    public function getLoadingRateFlag(): ?string
    {
        return $this->loadingRateFlag;
    }

    public function setLoadingRateFlag(?string $loadingRateFlag): self
    {
        $this->loadingRateFlag = $loadingRateFlag;

        return $this;
    }

    public function getStampDuty(): ?float
    {
        return $this->stampDuty;
    }

    public function setStampDuty(?float $stampDuty): self
    {
        $this->stampDuty = $stampDuty;

        return $this;
    }

    public function getFireServiceLevy(): ?float
    {
        return $this->fireServiceLevy;
    }

    public function setFireServiceLevy(?float $fireServiceLevy): self
    {
        $this->fireServiceLevy = $fireServiceLevy;

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

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCategoryCode(): ?string
    {
        return $this->categoryCode;
    }

    public function setCategoryCode(?string $categoryCode): self
    {
        $this->categoryCode = $categoryCode;

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
