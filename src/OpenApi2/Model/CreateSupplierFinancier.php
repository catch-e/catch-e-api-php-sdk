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

class CreateSupplierFinancier
{
    /**
     * @var null|string
     */
    protected $supplierIdResidualInsurer;
    /**
     * @var null|float
     */
    protected $residualFeeRate;
    /**
     * @var null|float
     */
    protected $residualCashPoolRate;
    /**
     * @var null|string
     */
    protected $establishmentFeeFundedFlag;
    /**
     * @var null|string
     */
    protected $financeMethod;
    /**
     * @var null|string
     */
    protected $paymentsArrearsInterestFlag;
    /**
     * @var null|string
     */
    protected $externalCode;
    /**
     * @var null|string
     */
    protected $aftermarketSeparateSupplyFlag;
    /**
     * @var null|float
     */
    protected $discountMargin;
    /**
     * @var null|string
     */
    protected $residualValueAsFutureValueFlag;
    /**
     * @var null|float
     */
    protected $noOfAdditionalMonthlyRentals;
    /**
     * @var null|string
     */
    protected $gstOnPayoutFlag;
    /**
     * @var null|string
     */
    protected $financierValueMandatoryFlag;
    /**
     * @var null|string
     */
    protected $payoutEmail;

    public function getSupplierIdResidualInsurer(): ?string
    {
        return $this->supplierIdResidualInsurer;
    }

    public function setSupplierIdResidualInsurer(?string $supplierIdResidualInsurer): self
    {
        $this->supplierIdResidualInsurer = $supplierIdResidualInsurer;

        return $this;
    }

    public function getResidualFeeRate(): ?float
    {
        return $this->residualFeeRate;
    }

    public function setResidualFeeRate(?float $residualFeeRate): self
    {
        $this->residualFeeRate = $residualFeeRate;

        return $this;
    }

    public function getResidualCashPoolRate(): ?float
    {
        return $this->residualCashPoolRate;
    }

    public function setResidualCashPoolRate(?float $residualCashPoolRate): self
    {
        $this->residualCashPoolRate = $residualCashPoolRate;

        return $this;
    }

    public function getEstablishmentFeeFundedFlag(): ?string
    {
        return $this->establishmentFeeFundedFlag;
    }

    public function setEstablishmentFeeFundedFlag(?string $establishmentFeeFundedFlag): self
    {
        $this->establishmentFeeFundedFlag = $establishmentFeeFundedFlag;

        return $this;
    }

    public function getFinanceMethod(): ?string
    {
        return $this->financeMethod;
    }

    public function setFinanceMethod(?string $financeMethod): self
    {
        $this->financeMethod = $financeMethod;

        return $this;
    }

    public function getPaymentsArrearsInterestFlag(): ?string
    {
        return $this->paymentsArrearsInterestFlag;
    }

    public function setPaymentsArrearsInterestFlag(?string $paymentsArrearsInterestFlag): self
    {
        $this->paymentsArrearsInterestFlag = $paymentsArrearsInterestFlag;

        return $this;
    }

    public function getExternalCode(): ?string
    {
        return $this->externalCode;
    }

    public function setExternalCode(?string $externalCode): self
    {
        $this->externalCode = $externalCode;

        return $this;
    }

    public function getAftermarketSeparateSupplyFlag(): ?string
    {
        return $this->aftermarketSeparateSupplyFlag;
    }

    public function setAftermarketSeparateSupplyFlag(?string $aftermarketSeparateSupplyFlag): self
    {
        $this->aftermarketSeparateSupplyFlag = $aftermarketSeparateSupplyFlag;

        return $this;
    }

    public function getDiscountMargin(): ?float
    {
        return $this->discountMargin;
    }

    public function setDiscountMargin(?float $discountMargin): self
    {
        $this->discountMargin = $discountMargin;

        return $this;
    }

    public function getResidualValueAsFutureValueFlag(): ?string
    {
        return $this->residualValueAsFutureValueFlag;
    }

    public function setResidualValueAsFutureValueFlag(?string $residualValueAsFutureValueFlag): self
    {
        $this->residualValueAsFutureValueFlag = $residualValueAsFutureValueFlag;

        return $this;
    }

    public function getNoOfAdditionalMonthlyRentals(): ?float
    {
        return $this->noOfAdditionalMonthlyRentals;
    }

    public function setNoOfAdditionalMonthlyRentals(?float $noOfAdditionalMonthlyRentals): self
    {
        $this->noOfAdditionalMonthlyRentals = $noOfAdditionalMonthlyRentals;

        return $this;
    }

    public function getGstOnPayoutFlag(): ?string
    {
        return $this->gstOnPayoutFlag;
    }

    public function setGstOnPayoutFlag(?string $gstOnPayoutFlag): self
    {
        $this->gstOnPayoutFlag = $gstOnPayoutFlag;

        return $this;
    }

    public function getFinancierValueMandatoryFlag(): ?string
    {
        return $this->financierValueMandatoryFlag;
    }

    public function setFinancierValueMandatoryFlag(?string $financierValueMandatoryFlag): self
    {
        $this->financierValueMandatoryFlag = $financierValueMandatoryFlag;

        return $this;
    }

    public function getPayoutEmail(): ?string
    {
        return $this->payoutEmail;
    }

    public function setPayoutEmail(?string $payoutEmail): self
    {
        $this->payoutEmail = $payoutEmail;

        return $this;
    }
}
