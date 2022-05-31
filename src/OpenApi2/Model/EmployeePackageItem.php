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

class EmployeePackageItem
{
    /**
     * Employee Package Item Id.
     *
     * @var null|string
     */
    protected $employeePackageItemId;
    /**
     * Driver Id.
     *
     * @var null|string
     */
    protected $driverId;
    /**
     * Package Item Id.
     *
     * @var null|string
     */
    protected $packageItemId;
    /**
     * Package Item Pay Cycle.
     *
     * @var null|string
     */
    protected $packageItemPayCycleId;
    /**
     * The supplier that will be paid for this disbursement.
     *
     * @var null|string
     */
    protected $supplierId;
    /**
     * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
     * If the Payment Method is 'Bpay', Reference must be 20 characters or less in length.
     *
     * @var null|string
     */
    protected $reference;
    /**
     * Payee payment method Id.
     *
     * @var null|string
     */
    protected $payeePaymentMethodId;
    /**
     * Legacy field.
     *
     * @var null|string
     */
    protected $deductionId;
    /**
     * Employee Package Item Description.
     *
     * @var null|string
     */
    protected $description;
    /**
     * @var null|float
     */
    protected $totalDeduction = 0;
    /**
     * Employee Package Item Employee Contribution.
     *
     * @var null|float
     */
    protected $employeeContribution = 0;
    /**
     * Compress flag.
     *
     * @var null|string
     */
    protected $compressFlag = 'no';
    /**
     * Inertia flag.
     *
     * @var null|string
     */
    protected $inertiaFlag = 'no';
    /**
     * Number of times you expect to deduct this item from a payroll.
     *
     * @var null|int
     */
    protected $cycles;
    /**
     * Date of the first pay run this item should be deducted from.
     *
     * @var null|\DateTime
     */
    protected $startDate;
    /**
     * Date of the last pay run this item should be deducted from.
     *
     * @var null|\DateTime
     */
    protected $endDate;
    /**
     * The amount that should be deducted from each pay.
     *
     * @var null|float
     */
    protected $deductionPerPay;
    /**
     * @var null|string
     */
    protected $taxMethod;
    /**
     * Disbursement Type.
     *
     * @var null|string
     */
    protected $disbursementType;
    /**
     * @var null|string
     */
    protected $substantiationFlag;
    /**
     * The frequency of the disbursements that are required.
     *
     * @var null|string
     */
    protected $disbursementCycleId;
    /**
     * The number of the disbursements that are required.
     *
     * @var null|int
     */
    protected $disbursementPeriods;
    /**
     * The first date this disbursement should be made.
     *
     * @var null|\DateTime
     */
    protected $firstDisbursementDate;
    /**
     * Expected disbursement amount (Net).
     *
     * @var null|float
     */
    protected $disbursementAmountNet;
    /**
     * Expected disbursement amount (Net).
     *
     * @var null|float
     */
    protected $disbursementAmountGst;
    /**
     * Linked driver bank account preference.
     *
     * @var null|string
     */
    protected $driverBankAccountId;
    /**
     * Contract Id.
     *
     * @var null|string
     */
    protected $contractId;
    /**
     * Status Flag.
     *
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|EmployeePackageItemEmbedded
     */
    protected $embedded;

    /**
     * Employee Package Item Id.
     */
    public function getEmployeePackageItemId(): ?string
    {
        return $this->employeePackageItemId;
    }

    /**
     * Employee Package Item Id.
     */
    public function setEmployeePackageItemId(?string $employeePackageItemId): self
    {
        $this->employeePackageItemId = $employeePackageItemId;

        return $this;
    }

    /**
     * Driver Id.
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    /**
     * Driver Id.
     */
    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * Package Item Id.
     */
    public function getPackageItemId(): ?string
    {
        return $this->packageItemId;
    }

    /**
     * Package Item Id.
     */
    public function setPackageItemId(?string $packageItemId): self
    {
        $this->packageItemId = $packageItemId;

        return $this;
    }

    /**
     * Package Item Pay Cycle.
     */
    public function getPackageItemPayCycleId(): ?string
    {
        return $this->packageItemPayCycleId;
    }

    /**
     * Package Item Pay Cycle.
     */
    public function setPackageItemPayCycleId(?string $packageItemPayCycleId): self
    {
        $this->packageItemPayCycleId = $packageItemPayCycleId;

        return $this;
    }

    /**
     * The supplier that will be paid for this disbursement.
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    /**
     * The supplier that will be paid for this disbursement.
     */
    public function setSupplierId(?string $supplierId): self
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
     * If the Payment Method is 'Bpay', Reference must be 20 characters or less in length.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
     * If the Payment Method is 'Bpay', Reference must be 20 characters or less in length.
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Payee payment method Id.
     */
    public function getPayeePaymentMethodId(): ?string
    {
        return $this->payeePaymentMethodId;
    }

    /**
     * Payee payment method Id.
     */
    public function setPayeePaymentMethodId(?string $payeePaymentMethodId): self
    {
        $this->payeePaymentMethodId = $payeePaymentMethodId;

        return $this;
    }

    /**
     * Legacy field.
     */
    public function getDeductionId(): ?string
    {
        return $this->deductionId;
    }

    /**
     * Legacy field.
     */
    public function setDeductionId(?string $deductionId): self
    {
        $this->deductionId = $deductionId;

        return $this;
    }

    /**
     * Employee Package Item Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Employee Package Item Description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTotalDeduction(): ?float
    {
        return $this->totalDeduction;
    }

    public function setTotalDeduction(?float $totalDeduction): self
    {
        $this->totalDeduction = $totalDeduction;

        return $this;
    }

    /**
     * Employee Package Item Employee Contribution.
     */
    public function getEmployeeContribution(): ?float
    {
        return $this->employeeContribution;
    }

    /**
     * Employee Package Item Employee Contribution.
     */
    public function setEmployeeContribution(?float $employeeContribution): self
    {
        $this->employeeContribution = $employeeContribution;

        return $this;
    }

    /**
     * Compress flag.
     */
    public function getCompressFlag(): ?string
    {
        return $this->compressFlag;
    }

    /**
     * Compress flag.
     */
    public function setCompressFlag(?string $compressFlag): self
    {
        $this->compressFlag = $compressFlag;

        return $this;
    }

    /**
     * Inertia flag.
     */
    public function getInertiaFlag(): ?string
    {
        return $this->inertiaFlag;
    }

    /**
     * Inertia flag.
     */
    public function setInertiaFlag(?string $inertiaFlag): self
    {
        $this->inertiaFlag = $inertiaFlag;

        return $this;
    }

    /**
     * Number of times you expect to deduct this item from a payroll.
     */
    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    /**
     * Number of times you expect to deduct this item from a payroll.
     */
    public function setCycles(?int $cycles): self
    {
        $this->cycles = $cycles;

        return $this;
    }

    /**
     * Date of the first pay run this item should be deducted from.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Date of the first pay run this item should be deducted from.
     */
    public function setStartDate(?\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Date of the last pay run this item should be deducted from.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Date of the last pay run this item should be deducted from.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * The amount that should be deducted from each pay.
     */
    public function getDeductionPerPay(): ?float
    {
        return $this->deductionPerPay;
    }

    /**
     * The amount that should be deducted from each pay.
     */
    public function setDeductionPerPay(?float $deductionPerPay): self
    {
        $this->deductionPerPay = $deductionPerPay;

        return $this;
    }

    public function getTaxMethod(): ?string
    {
        return $this->taxMethod;
    }

    public function setTaxMethod(?string $taxMethod): self
    {
        $this->taxMethod = $taxMethod;

        return $this;
    }

    /**
     * Disbursement Type.
     */
    public function getDisbursementType(): ?string
    {
        return $this->disbursementType;
    }

    /**
     * Disbursement Type.
     */
    public function setDisbursementType(?string $disbursementType): self
    {
        $this->disbursementType = $disbursementType;

        return $this;
    }

    public function getSubstantiationFlag(): ?string
    {
        return $this->substantiationFlag;
    }

    public function setSubstantiationFlag(?string $substantiationFlag): self
    {
        $this->substantiationFlag = $substantiationFlag;

        return $this;
    }

    /**
     * The frequency of the disbursements that are required.
     */
    public function getDisbursementCycleId(): ?string
    {
        return $this->disbursementCycleId;
    }

    /**
     * The frequency of the disbursements that are required.
     */
    public function setDisbursementCycleId(?string $disbursementCycleId): self
    {
        $this->disbursementCycleId = $disbursementCycleId;

        return $this;
    }

    /**
     * The number of the disbursements that are required.
     */
    public function getDisbursementPeriods(): ?int
    {
        return $this->disbursementPeriods;
    }

    /**
     * The number of the disbursements that are required.
     */
    public function setDisbursementPeriods(?int $disbursementPeriods): self
    {
        $this->disbursementPeriods = $disbursementPeriods;

        return $this;
    }

    /**
     * The first date this disbursement should be made.
     */
    public function getFirstDisbursementDate(): ?\DateTime
    {
        return $this->firstDisbursementDate;
    }

    /**
     * The first date this disbursement should be made.
     */
    public function setFirstDisbursementDate(?\DateTime $firstDisbursementDate): self
    {
        $this->firstDisbursementDate = $firstDisbursementDate;

        return $this;
    }

    /**
     * Expected disbursement amount (Net).
     */
    public function getDisbursementAmountNet(): ?float
    {
        return $this->disbursementAmountNet;
    }

    /**
     * Expected disbursement amount (Net).
     */
    public function setDisbursementAmountNet(?float $disbursementAmountNet): self
    {
        $this->disbursementAmountNet = $disbursementAmountNet;

        return $this;
    }

    /**
     * Expected disbursement amount (Net).
     */
    public function getDisbursementAmountGst(): ?float
    {
        return $this->disbursementAmountGst;
    }

    /**
     * Expected disbursement amount (Net).
     */
    public function setDisbursementAmountGst(?float $disbursementAmountGst): self
    {
        $this->disbursementAmountGst = $disbursementAmountGst;

        return $this;
    }

    /**
     * Linked driver bank account preference.
     */
    public function getDriverBankAccountId(): ?string
    {
        return $this->driverBankAccountId;
    }

    /**
     * Linked driver bank account preference.
     */
    public function setDriverBankAccountId(?string $driverBankAccountId): self
    {
        $this->driverBankAccountId = $driverBankAccountId;

        return $this;
    }

    /**
     * Contract Id.
     */
    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    /**
     * Contract Id.
     */
    public function setContractId(?string $contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * Status Flag.
     */
    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    /**
     * Status Flag.
     */
    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    public function getEmbedded(): ?EmployeePackageItemEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?EmployeePackageItemEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }
}
