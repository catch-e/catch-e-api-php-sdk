<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

class UpdateEmployeePackageItem
{
	/**
	 * Driver Id.
	 *
	 * @var string|null
	 */
	protected $driverId;
	/**
	 * Package Item Id.
	 *
	 * @var string|null
	 */
	protected $packageItemId;
	/**
	 * Package Item Pay Cycle.
	 *
	 * @var string|null
	 */
	protected $packageItemPayCycleId;
	/**
	 * The supplier that will be paid for this disbursement.

	 *
	 * @var string|null
	 */
	protected $supplierId;
	/**
	 * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
	 *
	 * @var string|null
	 */
	protected $reference;
	/**
	 * Payee payment method Id.
	 *
	 * @var string|null
	 */
	protected $payeePaymentMethodId;
	/**
	 * (Optional) [Legacy field].
	 *
	 * @var string|null
	 */
	protected $deductionId;
	/**
	 * (Optional) Description.
	 *
	 * @var string|null
	 */
	protected $description;
	/**
	 * @var float|null
	 */
	protected $totalDeduction = 0;
	/**
	 * @var float|null
	 */
	protected $employeeContribution = 0;
	/**
	 * Compress flag.
	 *
	 * @var string|null
	 */
	protected $compressFlag = 'no';
	/**
	 * Inertia flag.
	 *
	 * @var string|null
	 */
	protected $inertiaFlag = 'no';
	/**
	 * Number of times you expect to deduct this item from a payroll.
	 *
	 * @var int|null
	 */
	protected $cycles;
	/**
	 * Date of the first pay run this item should be deducted from.
	 *
	 * @var \DateTime|null
	 */
	protected $startDate;
	/**
	 * Date of the last pay run this item should be deducted from.
	 *
	 * @var \DateTime|null
	 */
	protected $endDate;
	/**
	 * The amount that should be deducted from each pay.
	 *
	 * @var int|null
	 */
	protected $deductionPerPay;
	/**
	 * (Optional) Default is derived from the associated [sp_package_items]tax_method.
	 *
	 * @var string|null
	 */
	protected $taxMethod;
	/**
	 * Disbursement Type.
	 *
	 * @var string|null
	 */
	protected $disbursementType;
	/**
	 * Set 'yes' if substantiation is required.
	 *
	 * @var string|null
	 */
	protected $substantiationFlag;
	/**
	 * The frequency of the disbursements that are required.
	 *
	 * @var string|null
	 */
	protected $disbursementCycleId;
	/**
	 * The number of the disbursements that are required.
	 *
	 * @var int|null
	 */
	protected $disbursementPeriods;
	/**
	 * The first date this disbursement should be made.
	 *
	 * @var \DateTime|null
	 */
	protected $firstDisbursementDate;
	/**
	 * Expected disbursement amount (Net).
	 *
	 * @var float|null
	 */
	protected $disbursementAmountNet;
	/**
	 * Expected disbursement amount (GST).
	 *
	 * @var float|null
	 */
	protected $disbursementAmountGst;
	/**
	 * Linked driver bank account preference.
	 *
	 * @var string|null
	 */
	protected $driverBankAccountId;
	/**
	 * Contract Id you want to link the Package Item to.
	 *
	 * @var string|null
	 */
	protected $contractId;
	/**
	 * Status Flag.
	 *
	 * @var string|null
	 */
	protected $statusFlag = 'active';
	/**
	 * (Optional) When an employee package item is activated, if 'yes' budgets will be created using next payroll date that occurs.
	 *
	 * @var string|null
	 */
	protected $allowRetrospectivePayrollDatesFlag = 'no';

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

	Omit when Disbursement Type is 'Claim'. Value will be overridden with the default reimbursement supplier.
	 */
	public function getSupplierId(): ?string
	{
		return $this->supplierId;
	}

	/**
	 * The supplier that will be paid for this disbursement.

	Omit when Disbursement Type is 'Claim'. Value will be overridden with the default reimbursement supplier.
	 */
	public function setSupplierId(?string $supplierId): self
	{
		$this->supplierId = $supplierId;

		return $this;
	}

	/**
	 * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
	If the Payment Method is 'Bpay', Reference must be 20 characters or less in length.
	 */
	public function getReference(): ?string
	{
		return $this->reference;
	}

	/**
	 * If the Payment Method is 'Direct Credit', Reference must be 18 characters or less in length.
	If the Payment Method is 'Bpay', Reference must be 20 characters or less in length.
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
	 * (Optional) [Legacy field].
	 */
	public function getDeductionId(): ?string
	{
		return $this->deductionId;
	}

	/**
	 * (Optional) [Legacy field].
	 */
	public function setDeductionId(?string $deductionId): self
	{
		$this->deductionId = $deductionId;

		return $this;
	}

	/**
	 * (Optional) Description.
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * (Optional) Description.
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

	public function getEmployeeContribution(): ?float
	{
		return $this->employeeContribution;
	}

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
	public function getDeductionPerPay(): ?int
	{
		return $this->deductionPerPay;
	}

	/**
	 * The amount that should be deducted from each pay.
	 */
	public function setDeductionPerPay(?int $deductionPerPay): self
	{
		$this->deductionPerPay = $deductionPerPay;

		return $this;
	}

	/**
	 * (Optional) Default is derived from the associated [sp_package_items]tax_method.
	 */
	public function getTaxMethod(): ?string
	{
		return $this->taxMethod;
	}

	/**
	 * (Optional) Default is derived from the associated [sp_package_items]tax_method.
	 */
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

	/**
	 * Set 'yes' if substantiation is required.
	This setting defaults to 'yes' when Disbursement Type is 'Claim'.
	 */
	public function getSubstantiationFlag(): ?string
	{
		return $this->substantiationFlag;
	}

	/**
	 * Set 'yes' if substantiation is required.
	This setting defaults to 'yes' when Disbursement Type is 'Claim'.
	 */
	public function setSubstantiationFlag(?string $substantiationFlag): self
	{
		$this->substantiationFlag = $substantiationFlag;

		return $this;
	}

	/**
	 * The frequency of the disbursements that are required.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function getDisbursementCycleId(): ?string
	{
		return $this->disbursementCycleId;
	}

	/**
	 * The frequency of the disbursements that are required.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function setDisbursementCycleId(?string $disbursementCycleId): self
	{
		$this->disbursementCycleId = $disbursementCycleId;

		return $this;
	}

	/**
	 * The number of the disbursements that are required.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function getDisbursementPeriods(): ?int
	{
		return $this->disbursementPeriods;
	}

	/**
	 * The number of the disbursements that are required.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function setDisbursementPeriods(?int $disbursementPeriods): self
	{
		$this->disbursementPeriods = $disbursementPeriods;

		return $this;
	}

	/**
	 * The first date this disbursement should be made.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function getFirstDisbursementDate(): ?\DateTime
	{
		return $this->firstDisbursementDate;
	}

	/**
	 * The first date this disbursement should be made.
	This setting is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function setFirstDisbursementDate(?\DateTime $firstDisbursementDate): self
	{
		$this->firstDisbursementDate = $firstDisbursementDate;

		return $this;
	}

	/**
	 * Expected disbursement amount (Net).
	This value is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function getDisbursementAmountNet(): ?float
	{
		return $this->disbursementAmountNet;
	}

	/**
	 * Expected disbursement amount (Net).
	This value is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function setDisbursementAmountNet(?float $disbursementAmountNet): self
	{
		$this->disbursementAmountNet = $disbursementAmountNet;

		return $this;
	}

	/**
	 * Expected disbursement amount (GST).
	This value is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function getDisbursementAmountGst(): ?float
	{
		return $this->disbursementAmountGst;
	}

	/**
	 * Expected disbursement amount (GST).
	This value is ignored when the Disbursement Type is 'Claim' or 'Recurring'.
	 */
	public function setDisbursementAmountGst(?float $disbursementAmountGst): self
	{
		$this->disbursementAmountGst = $disbursementAmountGst;

		return $this;
	}

	/**
	 * Linked driver bank account preference.
	If Disbursement Type is 'Claim' and value omitted, the default reimbursement bank account is applied (if it exists).
	 */
	public function getDriverBankAccountId(): ?string
	{
		return $this->driverBankAccountId;
	}

	/**
	 * Linked driver bank account preference.
	If Disbursement Type is 'Claim' and value omitted, the default reimbursement bank account is applied (if it exists).
	 */
	public function setDriverBankAccountId(?string $driverBankAccountId): self
	{
		$this->driverBankAccountId = $driverBankAccountId;

		return $this;
	}

	/**
	 * Contract Id you want to link the Package Item to.
	 */
	public function getContractId(): ?string
	{
		return $this->contractId;
	}

	/**
	 * Contract Id you want to link the Package Item to.
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

	/**
	 * (Optional) When an employee package item is activated, if 'yes' budgets will be created using next payroll date that occurs.
	Payroll Cut Off Date. This setting should remain 'no' unless the API is being used for data migration purposes.
	 */
	public function getAllowRetrospectivePayrollDatesFlag(): ?string
	{
		return $this->allowRetrospectivePayrollDatesFlag;
	}

	/**
	 * (Optional) When an employee package item is activated, if 'yes' budgets will be created using next payroll date that occurs.
	Payroll Cut Off Date. This setting should remain 'no' unless the API is being used for data migration purposes.
	 */
	public function setAllowRetrospectivePayrollDatesFlag(?string $allowRetrospectivePayrollDatesFlag): self
	{
		$this->allowRetrospectivePayrollDatesFlag = $allowRetrospectivePayrollDatesFlag;

		return $this;
	}
}
