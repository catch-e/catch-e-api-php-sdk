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

class CreateDriver
{
	/**
	 * @var string|null
	 */
	protected $accountantContactName = '';
	/**
	 * @var string|null
	 */
	protected $accountantContactPhone = '';
	/**
	 * @var string|null
	 */
	protected $accountantFirmName = '';
	/**
	 * @var string|null
	 */
	protected $addressIdHome;
	/**
	 * @var string|null
	 */
	protected $addressIdPost;
	/**
	 * @var float|null
	 */
	protected $allowances = 0;
	/**
	 * @var float|null
	 */
	protected $annualSalary = 0;
	/**
	 * @var float|null
	 */
	protected $assetBankAccounts;
	/**
	 * @var string|null
	 */
	protected $assetBankAccountsDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetFurniture;
	/**
	 * @var string|null
	 */
	protected $assetFurnitureDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetInvestmentProperties;
	/**
	 * @var string|null
	 */
	protected $assetInvestmentPropertiesDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetMotorVehicle;
	/**
	 * @var string|null
	 */
	protected $assetMotorVehicleDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetOtherInvestments;
	/**
	 * @var string|null
	 */
	protected $assetOtherInvestmentsDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetResidentProperty;
	/**
	 * @var string|null
	 */
	protected $assetResidentPropertyDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetShares;
	/**
	 * @var string|null
	 */
	protected $assetSharesDescription = '';
	/**
	 * @var float|null
	 */
	protected $assetSuper;
	/**
	 * @var string|null
	 */
	protected $assetSuperDescription = '';
	/**
	 * @var string|null
	 */
	protected $atoLoanFlag = 'no';
	/**
	 * @var string|null
	 */
	protected $australianResident = 'yes';
	/**
	 * @var string|null
	 */
	protected $cardAccountNumber = '';
	/**
	 * @var string|null
	 */
	protected $clientCostCentreId = '0';
	/**
	 * @var string|null
	 */
	protected $clientId = '';
	/**
	 * @var string|null
	 */
	protected $contactNote;
	/**
	 * @var string|null
	 */
	protected $corporateTypeIdPreviousEmployer = '0';
	/**
	 * @var \DateTime|null
	 */
	protected $created = '0000-00-00 00:00:00';
	/**
	 * @var string|null
	 */
	protected $creditCheckAuthorisedFlag;
	/**
	 * @var \DateTime|null
	 */
	protected $dateOfBirth;
	/**
	 * @var string|null
	 */
	protected $driverClaimsFlag = 'yes';
	/**
	 * @var string|null
	 */
	protected $driverEmploymentTypeId = '0';
	/**
	 * @var string|null
	 */
	protected $driverIdExternal = '0';
	/**
	 * @var string|null
	 */
	protected $driverLicExp;
	/**
	 * @var string|null
	 */
	protected $driverLicence;
	/**
	 * @var string|null
	 */
	protected $driverLicenceState;
	/**
	 * @var string|null
	 */
	protected $driverOccupationCodeId = '0';
	/**
	 * @var string|null
	 */
	protected $employeeAlias = '';
	/**
	 * @var string|null
	 */
	protected $employeeArea;
	/**
	 * @var \DateTime|null
	 */
	protected $employeeEnd = '0000-00-00';
	/**
	 * @var string|null
	 */
	protected $employeeGroup;
	/**
	 * @var string|null
	 */
	protected $employeeNo;
	/**
	 * @var string|null
	 */
	protected $employeePayOffice;
	/**
	 * @var string|null
	 */
	protected $employeeSlAcc;
	/**
	 * @var \DateTime|null
	 */
	protected $employeeStart = '0000-00-00';
	/**
	 * @var float|null
	 */
	protected $employeeSuper = 0;
	/**
	 * @var string|null
	 */
	protected $employerAddress1 = '';
	/**
	 * @var string|null
	 */
	protected $employerAddress2 = '';
	/**
	 * @var string|null
	 */
	protected $employerAddress3 = '';
	/**
	 * @var string|null
	 */
	protected $employerAddressPostcode = '';
	/**
	 * @var string|null
	 */
	protected $employerAddressState;
	/**
	 * @var float|null
	 */
	protected $employerSuper = 0;
	/**
	 * @var float|null
	 */
	protected $expenseCreditCard;
	/**
	 * @var float|null
	 */
	protected $expenseHousehold;
	/**
	 * @var float|null
	 */
	protected $expenseMortgage;
	/**
	 * @var float|null
	 */
	protected $expenseOther;
	/**
	 * @var float|null
	 */
	protected $expensePrivateEducationChildcare;
	/**
	 * @var float|null
	 */
	protected $expenseRent;
	/**
	 * @var float|null
	 */
	protected $expenseVehicle;
	/**
	 * @var string|null
	 */
	protected $externalCode = '';
	/**
	 * @var string|null
	 */
	protected $fbtType;
	/**
	 * @var string|null
	 */
	protected $financierApplicantReference = '';
	/**
	 * @var string|null
	 */
	protected $gender;
	/**
	 * @var string|null
	 */
	protected $generatedPassword;
	/**
	 * @var string|null
	 */
	protected $givenName;
	/**
	 * @var string|null
	 */
	protected $homeCarPostcode;
	/**
	 * @var string|null
	 */
	protected $homeEmail;
	/**
	 * @var string|null
	 */
	protected $homeFax;
	/**
	 * @var string|null
	 */
	protected $homePhone;
	/**
	 * @var string|null
	 */
	protected $homePostcode;
	/**
	 * @var string|null
	 */
	protected $homeState;
	/**
	 * @var string|null
	 */
	protected $homeStreet;
	/**
	 * @var string|null
	 */
	protected $homeStreetNo;
	/**
	 * @var string|null
	 */
	protected $homeStreetType;
	/**
	 * @var string|null
	 */
	protected $homeSuburb;
	/**
	 * @var string|null
	 */
	protected $homeUnitNo;
	/**
	 * @var float|null
	 */
	protected $incomeGovernmentBenefits;
	/**
	 * @var float|null
	 */
	protected $incomeGross;
	/**
	 * @var float|null
	 */
	protected $incomeInvestment;
	/**
	 * @var float|null
	 */
	protected $incomeNet;
	/**
	 * @var float|null
	 */
	protected $incomeOther;
	/**
	 * @var float|null
	 */
	protected $incomeRentalNet;
	/**
	 * @var float|null
	 */
	protected $incomeSpouseGross;
	/**
	 * @var float|null
	 */
	protected $incomeSpouseNet;
	/**
	 * @var float|null
	 */
	protected $incomeSuperannuation;
	/**
	 * @var string|null
	 */
	protected $insuranceBrokerFeeExemptFlag = 'yes';
	/**
	 * @var string|null
	 */
	protected $kycVerifiedFlag = 'no';
	/**
	 * @var string|null
	 */
	protected $landlordName = '';
	/**
	 * @var string|null
	 */
	protected $landlordTelephone = '';
	/**
	 * @var \DateTime|null
	 */
	protected $lastEdit;
	/**
	 * @var float|null
	 */
	protected $liabilityCreditCardLimit;
	/**
	 * @var string|null
	 */
	protected $liabilityCreditCardLimitDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityInvestmentMortgages;
	/**
	 * @var string|null
	 */
	protected $liabilityInvestmentMortgagesDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityLoans;
	/**
	 * @var string|null
	 */
	protected $liabilityLoansDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityMortgages;
	/**
	 * @var string|null
	 */
	protected $liabilityMortgagesDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityOther;
	/**
	 * @var string|null
	 */
	protected $liabilityOtherDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityOverdraft;
	/**
	 * @var string|null
	 */
	protected $liabilityOverdraftDescription = '';
	/**
	 * @var float|null
	 */
	protected $liabilityRent;
	/**
	 * @var string|null
	 */
	protected $liabilityRentDescription = '';
	/**
	 * @var string|null
	 */
	protected $licenceClass = '';
	/**
	 * @var string|null
	 */
	protected $maritalStatus;
	/**
	 * @var string|null
	 */
	protected $middleName = '';
	/**
	 * @var string|null
	 */
	protected $mobile;
	/**
	 * @var string|null
	 */
	protected $nameOnAccount = '';
	/**
	 * @var int|null
	 */
	protected $noOfDependents;
	/**
	 * @var string|null
	 */
	protected $payCycleId = '0';
	/**
	 * @var string|null
	 */
	protected $preferredName;
	/**
	 * @var string|null
	 */
	protected $previousAddress1 = '';
	/**
	 * @var string|null
	 */
	protected $previousAddress2 = '';
	/**
	 * @var string|null
	 */
	protected $previousAddress3 = '';
	/**
	 * @var string|null
	 */
	protected $previousAddressCountryId;
	/**
	 * @var string|null
	 */
	protected $previousAddressPostcode = '';
	/**
	 * @var string|null
	 */
	protected $previousAddressState;
	/**
	 * @var float|null
	 */
	protected $previousAddressYearsAtAddress = 0;
	/**
	 * @var string|null
	 */
	protected $previousEmployerName = '';
	/**
	 * @var string|null
	 */
	protected $previousEmployerPhone = '';
	/**
	 * @var float|null
	 */
	protected $previousYearsEmployed = 0;
	/**
	 * @var string|null
	 */
	protected $reportDeliveryType = 'email';
	/**
	 * @var string|null
	 */
	protected $residencyStatus;
	/**
	 * @var string|null
	 */
	protected $residentialStatus;
	/**
	 * @var string|null
	 */
	protected $salutation;
	/**
	 * @var \DateTime|null
	 */
	protected $startAtAddress = '0000-00-00';
	/**
	 * @var string|null
	 */
	protected $stopBecsFlag = 'no';
	/**
	 * @var string|null
	 */
	protected $supplierIdEtag = '0';
	/**
	 * @var string|null
	 */
	protected $supplierIdFinancier = '0';
	/**
	 * @var string|null
	 */
	protected $surname;
	/**
	 * @var string|null
	 */
	protected $tagAccountNumber = '';
	/**
	 * @var string|null
	 */
	protected $tagNumber = '';
	/**
	 * @var string|null
	 */
	protected $userIdPackageAdvisor;
	/**
	 * @var string|null
	 */
	protected $workContactGiven;
	/**
	 * @var string|null
	 */
	protected $workContactPosition;
	/**
	 * @var string|null
	 */
	protected $workContactSurname;
	/**
	 * @var string|null
	 */
	protected $workFax;
	/**
	 * @var string|null
	 */
	protected $workName;
	/**
	 * @var string|null
	 */
	protected $workPhone;
	/**
	 * @var string|null
	 */
	protected $workPhoneExt;
	/**
	 * @var string|null
	 */
	protected $workPosition;
	/**
	 * @var string|null
	 */
	protected $workPostcode;
	/**
	 * @var string|null
	 */
	protected $workState;
	/**
	 * @var string|null
	 */
	protected $workStreet;
	/**
	 * @var string|null
	 */
	protected $workStreetNo;
	/**
	 * @var string|null
	 */
	protected $workStreetType;
	/**
	 * @var string|null
	 */
	protected $workSuburb;
	/**
	 * @var string|null
	 */
	protected $workType;
	/**
	 * @var string|null
	 */
	protected $workUnitNo;
	/**
	 * @var float|null
	 */
	protected $yearsAtAddress = 0;
	/**
	 * @var float|null
	 */
	protected $yearsWithEmployer = 0;

	public function getAccountantContactName(): ?string
	{
		return $this->accountantContactName;
	}

	public function setAccountantContactName(?string $accountantContactName): self
	{
		$this->accountantContactName = $accountantContactName;

		return $this;
	}

	public function getAccountantContactPhone(): ?string
	{
		return $this->accountantContactPhone;
	}

	public function setAccountantContactPhone(?string $accountantContactPhone): self
	{
		$this->accountantContactPhone = $accountantContactPhone;

		return $this;
	}

	public function getAccountantFirmName(): ?string
	{
		return $this->accountantFirmName;
	}

	public function setAccountantFirmName(?string $accountantFirmName): self
	{
		$this->accountantFirmName = $accountantFirmName;

		return $this;
	}

	public function getAddressIdHome(): ?string
	{
		return $this->addressIdHome;
	}

	public function setAddressIdHome(?string $addressIdHome): self
	{
		$this->addressIdHome = $addressIdHome;

		return $this;
	}

	public function getAddressIdPost(): ?string
	{
		return $this->addressIdPost;
	}

	public function setAddressIdPost(?string $addressIdPost): self
	{
		$this->addressIdPost = $addressIdPost;

		return $this;
	}

	public function getAllowances(): ?float
	{
		return $this->allowances;
	}

	public function setAllowances(?float $allowances): self
	{
		$this->allowances = $allowances;

		return $this;
	}

	public function getAnnualSalary(): ?float
	{
		return $this->annualSalary;
	}

	public function setAnnualSalary(?float $annualSalary): self
	{
		$this->annualSalary = $annualSalary;

		return $this;
	}

	public function getAssetBankAccounts(): ?float
	{
		return $this->assetBankAccounts;
	}

	public function setAssetBankAccounts(?float $assetBankAccounts): self
	{
		$this->assetBankAccounts = $assetBankAccounts;

		return $this;
	}

	public function getAssetBankAccountsDescription(): ?string
	{
		return $this->assetBankAccountsDescription;
	}

	public function setAssetBankAccountsDescription(?string $assetBankAccountsDescription): self
	{
		$this->assetBankAccountsDescription = $assetBankAccountsDescription;

		return $this;
	}

	public function getAssetFurniture(): ?float
	{
		return $this->assetFurniture;
	}

	public function setAssetFurniture(?float $assetFurniture): self
	{
		$this->assetFurniture = $assetFurniture;

		return $this;
	}

	public function getAssetFurnitureDescription(): ?string
	{
		return $this->assetFurnitureDescription;
	}

	public function setAssetFurnitureDescription(?string $assetFurnitureDescription): self
	{
		$this->assetFurnitureDescription = $assetFurnitureDescription;

		return $this;
	}

	public function getAssetInvestmentProperties(): ?float
	{
		return $this->assetInvestmentProperties;
	}

	public function setAssetInvestmentProperties(?float $assetInvestmentProperties): self
	{
		$this->assetInvestmentProperties = $assetInvestmentProperties;

		return $this;
	}

	public function getAssetInvestmentPropertiesDescription(): ?string
	{
		return $this->assetInvestmentPropertiesDescription;
	}

	public function setAssetInvestmentPropertiesDescription(?string $assetInvestmentPropertiesDescription): self
	{
		$this->assetInvestmentPropertiesDescription = $assetInvestmentPropertiesDescription;

		return $this;
	}

	public function getAssetMotorVehicle(): ?float
	{
		return $this->assetMotorVehicle;
	}

	public function setAssetMotorVehicle(?float $assetMotorVehicle): self
	{
		$this->assetMotorVehicle = $assetMotorVehicle;

		return $this;
	}

	public function getAssetMotorVehicleDescription(): ?string
	{
		return $this->assetMotorVehicleDescription;
	}

	public function setAssetMotorVehicleDescription(?string $assetMotorVehicleDescription): self
	{
		$this->assetMotorVehicleDescription = $assetMotorVehicleDescription;

		return $this;
	}

	public function getAssetOtherInvestments(): ?float
	{
		return $this->assetOtherInvestments;
	}

	public function setAssetOtherInvestments(?float $assetOtherInvestments): self
	{
		$this->assetOtherInvestments = $assetOtherInvestments;

		return $this;
	}

	public function getAssetOtherInvestmentsDescription(): ?string
	{
		return $this->assetOtherInvestmentsDescription;
	}

	public function setAssetOtherInvestmentsDescription(?string $assetOtherInvestmentsDescription): self
	{
		$this->assetOtherInvestmentsDescription = $assetOtherInvestmentsDescription;

		return $this;
	}

	public function getAssetResidentProperty(): ?float
	{
		return $this->assetResidentProperty;
	}

	public function setAssetResidentProperty(?float $assetResidentProperty): self
	{
		$this->assetResidentProperty = $assetResidentProperty;

		return $this;
	}

	public function getAssetResidentPropertyDescription(): ?string
	{
		return $this->assetResidentPropertyDescription;
	}

	public function setAssetResidentPropertyDescription(?string $assetResidentPropertyDescription): self
	{
		$this->assetResidentPropertyDescription = $assetResidentPropertyDescription;

		return $this;
	}

	public function getAssetShares(): ?float
	{
		return $this->assetShares;
	}

	public function setAssetShares(?float $assetShares): self
	{
		$this->assetShares = $assetShares;

		return $this;
	}

	public function getAssetSharesDescription(): ?string
	{
		return $this->assetSharesDescription;
	}

	public function setAssetSharesDescription(?string $assetSharesDescription): self
	{
		$this->assetSharesDescription = $assetSharesDescription;

		return $this;
	}

	public function getAssetSuper(): ?float
	{
		return $this->assetSuper;
	}

	public function setAssetSuper(?float $assetSuper): self
	{
		$this->assetSuper = $assetSuper;

		return $this;
	}

	public function getAssetSuperDescription(): ?string
	{
		return $this->assetSuperDescription;
	}

	public function setAssetSuperDescription(?string $assetSuperDescription): self
	{
		$this->assetSuperDescription = $assetSuperDescription;

		return $this;
	}

	public function getAtoLoanFlag(): ?string
	{
		return $this->atoLoanFlag;
	}

	public function setAtoLoanFlag(?string $atoLoanFlag): self
	{
		$this->atoLoanFlag = $atoLoanFlag;

		return $this;
	}

	public function getAustralianResident(): ?string
	{
		return $this->australianResident;
	}

	public function setAustralianResident(?string $australianResident): self
	{
		$this->australianResident = $australianResident;

		return $this;
	}

	public function getCardAccountNumber(): ?string
	{
		return $this->cardAccountNumber;
	}

	public function setCardAccountNumber(?string $cardAccountNumber): self
	{
		$this->cardAccountNumber = $cardAccountNumber;

		return $this;
	}

	public function getClientCostCentreId(): ?string
	{
		return $this->clientCostCentreId;
	}

	public function setClientCostCentreId(?string $clientCostCentreId): self
	{
		$this->clientCostCentreId = $clientCostCentreId;

		return $this;
	}

	public function getClientId(): ?string
	{
		return $this->clientId;
	}

	public function setClientId(?string $clientId): self
	{
		$this->clientId = $clientId;

		return $this;
	}

	public function getContactNote(): ?string
	{
		return $this->contactNote;
	}

	public function setContactNote(?string $contactNote): self
	{
		$this->contactNote = $contactNote;

		return $this;
	}

	public function getCorporateTypeIdPreviousEmployer(): ?string
	{
		return $this->corporateTypeIdPreviousEmployer;
	}

	public function setCorporateTypeIdPreviousEmployer(?string $corporateTypeIdPreviousEmployer): self
	{
		$this->corporateTypeIdPreviousEmployer = $corporateTypeIdPreviousEmployer;

		return $this;
	}

	public function getCreated(): ?\DateTime
	{
		return $this->created;
	}

	public function setCreated(?\DateTime $created): self
	{
		$this->created = $created;

		return $this;
	}

	public function getCreditCheckAuthorisedFlag(): ?string
	{
		return $this->creditCheckAuthorisedFlag;
	}

	public function setCreditCheckAuthorisedFlag(?string $creditCheckAuthorisedFlag): self
	{
		$this->creditCheckAuthorisedFlag = $creditCheckAuthorisedFlag;

		return $this;
	}

	public function getDateOfBirth(): ?\DateTime
	{
		return $this->dateOfBirth;
	}

	public function setDateOfBirth(?\DateTime $dateOfBirth): self
	{
		$this->dateOfBirth = $dateOfBirth;

		return $this;
	}

	public function getDriverClaimsFlag(): ?string
	{
		return $this->driverClaimsFlag;
	}

	public function setDriverClaimsFlag(?string $driverClaimsFlag): self
	{
		$this->driverClaimsFlag = $driverClaimsFlag;

		return $this;
	}

	public function getDriverEmploymentTypeId(): ?string
	{
		return $this->driverEmploymentTypeId;
	}

	public function setDriverEmploymentTypeId(?string $driverEmploymentTypeId): self
	{
		$this->driverEmploymentTypeId = $driverEmploymentTypeId;

		return $this;
	}

	public function getDriverIdExternal(): ?string
	{
		return $this->driverIdExternal;
	}

	public function setDriverIdExternal(?string $driverIdExternal): self
	{
		$this->driverIdExternal = $driverIdExternal;

		return $this;
	}

	public function getDriverLicExp(): ?string
	{
		return $this->driverLicExp;
	}

	public function setDriverLicExp(?string $driverLicExp): self
	{
		$this->driverLicExp = $driverLicExp;

		return $this;
	}

	public function getDriverLicence(): ?string
	{
		return $this->driverLicence;
	}

	public function setDriverLicence(?string $driverLicence): self
	{
		$this->driverLicence = $driverLicence;

		return $this;
	}

	public function getDriverLicenceState(): ?string
	{
		return $this->driverLicenceState;
	}

	public function setDriverLicenceState(?string $driverLicenceState): self
	{
		$this->driverLicenceState = $driverLicenceState;

		return $this;
	}

	public function getDriverOccupationCodeId(): ?string
	{
		return $this->driverOccupationCodeId;
	}

	public function setDriverOccupationCodeId(?string $driverOccupationCodeId): self
	{
		$this->driverOccupationCodeId = $driverOccupationCodeId;

		return $this;
	}

	public function getEmployeeAlias(): ?string
	{
		return $this->employeeAlias;
	}

	public function setEmployeeAlias(?string $employeeAlias): self
	{
		$this->employeeAlias = $employeeAlias;

		return $this;
	}

	public function getEmployeeArea(): ?string
	{
		return $this->employeeArea;
	}

	public function setEmployeeArea(?string $employeeArea): self
	{
		$this->employeeArea = $employeeArea;

		return $this;
	}

	public function getEmployeeEnd(): ?\DateTime
	{
		return $this->employeeEnd;
	}

	public function setEmployeeEnd(?\DateTime $employeeEnd): self
	{
		$this->employeeEnd = $employeeEnd;

		return $this;
	}

	public function getEmployeeGroup(): ?string
	{
		return $this->employeeGroup;
	}

	public function setEmployeeGroup(?string $employeeGroup): self
	{
		$this->employeeGroup = $employeeGroup;

		return $this;
	}

	public function getEmployeeNo(): ?string
	{
		return $this->employeeNo;
	}

	public function setEmployeeNo(?string $employeeNo): self
	{
		$this->employeeNo = $employeeNo;

		return $this;
	}

	public function getEmployeePayOffice(): ?string
	{
		return $this->employeePayOffice;
	}

	public function setEmployeePayOffice(?string $employeePayOffice): self
	{
		$this->employeePayOffice = $employeePayOffice;

		return $this;
	}

	public function getEmployeeSlAcc(): ?string
	{
		return $this->employeeSlAcc;
	}

	public function setEmployeeSlAcc(?string $employeeSlAcc): self
	{
		$this->employeeSlAcc = $employeeSlAcc;

		return $this;
	}

	public function getEmployeeStart(): ?\DateTime
	{
		return $this->employeeStart;
	}

	public function setEmployeeStart(?\DateTime $employeeStart): self
	{
		$this->employeeStart = $employeeStart;

		return $this;
	}

	public function getEmployeeSuper(): ?float
	{
		return $this->employeeSuper;
	}

	public function setEmployeeSuper(?float $employeeSuper): self
	{
		$this->employeeSuper = $employeeSuper;

		return $this;
	}

	public function getEmployerAddress1(): ?string
	{
		return $this->employerAddress1;
	}

	public function setEmployerAddress1(?string $employerAddress1): self
	{
		$this->employerAddress1 = $employerAddress1;

		return $this;
	}

	public function getEmployerAddress2(): ?string
	{
		return $this->employerAddress2;
	}

	public function setEmployerAddress2(?string $employerAddress2): self
	{
		$this->employerAddress2 = $employerAddress2;

		return $this;
	}

	public function getEmployerAddress3(): ?string
	{
		return $this->employerAddress3;
	}

	public function setEmployerAddress3(?string $employerAddress3): self
	{
		$this->employerAddress3 = $employerAddress3;

		return $this;
	}

	public function getEmployerAddressPostcode(): ?string
	{
		return $this->employerAddressPostcode;
	}

	public function setEmployerAddressPostcode(?string $employerAddressPostcode): self
	{
		$this->employerAddressPostcode = $employerAddressPostcode;

		return $this;
	}

	public function getEmployerAddressState(): ?string
	{
		return $this->employerAddressState;
	}

	public function setEmployerAddressState(?string $employerAddressState): self
	{
		$this->employerAddressState = $employerAddressState;

		return $this;
	}

	public function getEmployerSuper(): ?float
	{
		return $this->employerSuper;
	}

	public function setEmployerSuper(?float $employerSuper): self
	{
		$this->employerSuper = $employerSuper;

		return $this;
	}

	public function getExpenseCreditCard(): ?float
	{
		return $this->expenseCreditCard;
	}

	public function setExpenseCreditCard(?float $expenseCreditCard): self
	{
		$this->expenseCreditCard = $expenseCreditCard;

		return $this;
	}

	public function getExpenseHousehold(): ?float
	{
		return $this->expenseHousehold;
	}

	public function setExpenseHousehold(?float $expenseHousehold): self
	{
		$this->expenseHousehold = $expenseHousehold;

		return $this;
	}

	public function getExpenseMortgage(): ?float
	{
		return $this->expenseMortgage;
	}

	public function setExpenseMortgage(?float $expenseMortgage): self
	{
		$this->expenseMortgage = $expenseMortgage;

		return $this;
	}

	public function getExpenseOther(): ?float
	{
		return $this->expenseOther;
	}

	public function setExpenseOther(?float $expenseOther): self
	{
		$this->expenseOther = $expenseOther;

		return $this;
	}

	public function getExpensePrivateEducationChildcare(): ?float
	{
		return $this->expensePrivateEducationChildcare;
	}

	public function setExpensePrivateEducationChildcare(?float $expensePrivateEducationChildcare): self
	{
		$this->expensePrivateEducationChildcare = $expensePrivateEducationChildcare;

		return $this;
	}

	public function getExpenseRent(): ?float
	{
		return $this->expenseRent;
	}

	public function setExpenseRent(?float $expenseRent): self
	{
		$this->expenseRent = $expenseRent;

		return $this;
	}

	public function getExpenseVehicle(): ?float
	{
		return $this->expenseVehicle;
	}

	public function setExpenseVehicle(?float $expenseVehicle): self
	{
		$this->expenseVehicle = $expenseVehicle;

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

	public function getFbtType(): ?string
	{
		return $this->fbtType;
	}

	public function setFbtType(?string $fbtType): self
	{
		$this->fbtType = $fbtType;

		return $this;
	}

	public function getFinancierApplicantReference(): ?string
	{
		return $this->financierApplicantReference;
	}

	public function setFinancierApplicantReference(?string $financierApplicantReference): self
	{
		$this->financierApplicantReference = $financierApplicantReference;

		return $this;
	}

	public function getGender(): ?string
	{
		return $this->gender;
	}

	public function setGender(?string $gender): self
	{
		$this->gender = $gender;

		return $this;
	}

	public function getGeneratedPassword(): ?string
	{
		return $this->generatedPassword;
	}

	public function setGeneratedPassword(?string $generatedPassword): self
	{
		$this->generatedPassword = $generatedPassword;

		return $this;
	}

	public function getGivenName(): ?string
	{
		return $this->givenName;
	}

	public function setGivenName(?string $givenName): self
	{
		$this->givenName = $givenName;

		return $this;
	}

	public function getHomeCarPostcode(): ?string
	{
		return $this->homeCarPostcode;
	}

	public function setHomeCarPostcode(?string $homeCarPostcode): self
	{
		$this->homeCarPostcode = $homeCarPostcode;

		return $this;
	}

	public function getHomeEmail(): ?string
	{
		return $this->homeEmail;
	}

	public function setHomeEmail(?string $homeEmail): self
	{
		$this->homeEmail = $homeEmail;

		return $this;
	}

	public function getHomeFax(): ?string
	{
		return $this->homeFax;
	}

	public function setHomeFax(?string $homeFax): self
	{
		$this->homeFax = $homeFax;

		return $this;
	}

	public function getHomePhone(): ?string
	{
		return $this->homePhone;
	}

	public function setHomePhone(?string $homePhone): self
	{
		$this->homePhone = $homePhone;

		return $this;
	}

	public function getHomePostcode(): ?string
	{
		return $this->homePostcode;
	}

	public function setHomePostcode(?string $homePostcode): self
	{
		$this->homePostcode = $homePostcode;

		return $this;
	}

	public function getHomeState(): ?string
	{
		return $this->homeState;
	}

	public function setHomeState(?string $homeState): self
	{
		$this->homeState = $homeState;

		return $this;
	}

	public function getHomeStreet(): ?string
	{
		return $this->homeStreet;
	}

	public function setHomeStreet(?string $homeStreet): self
	{
		$this->homeStreet = $homeStreet;

		return $this;
	}

	public function getHomeStreetNo(): ?string
	{
		return $this->homeStreetNo;
	}

	public function setHomeStreetNo(?string $homeStreetNo): self
	{
		$this->homeStreetNo = $homeStreetNo;

		return $this;
	}

	public function getHomeStreetType(): ?string
	{
		return $this->homeStreetType;
	}

	public function setHomeStreetType(?string $homeStreetType): self
	{
		$this->homeStreetType = $homeStreetType;

		return $this;
	}

	public function getHomeSuburb(): ?string
	{
		return $this->homeSuburb;
	}

	public function setHomeSuburb(?string $homeSuburb): self
	{
		$this->homeSuburb = $homeSuburb;

		return $this;
	}

	public function getHomeUnitNo(): ?string
	{
		return $this->homeUnitNo;
	}

	public function setHomeUnitNo(?string $homeUnitNo): self
	{
		$this->homeUnitNo = $homeUnitNo;

		return $this;
	}

	public function getIncomeGovernmentBenefits(): ?float
	{
		return $this->incomeGovernmentBenefits;
	}

	public function setIncomeGovernmentBenefits(?float $incomeGovernmentBenefits): self
	{
		$this->incomeGovernmentBenefits = $incomeGovernmentBenefits;

		return $this;
	}

	public function getIncomeGross(): ?float
	{
		return $this->incomeGross;
	}

	public function setIncomeGross(?float $incomeGross): self
	{
		$this->incomeGross = $incomeGross;

		return $this;
	}

	public function getIncomeInvestment(): ?float
	{
		return $this->incomeInvestment;
	}

	public function setIncomeInvestment(?float $incomeInvestment): self
	{
		$this->incomeInvestment = $incomeInvestment;

		return $this;
	}

	public function getIncomeNet(): ?float
	{
		return $this->incomeNet;
	}

	public function setIncomeNet(?float $incomeNet): self
	{
		$this->incomeNet = $incomeNet;

		return $this;
	}

	public function getIncomeOther(): ?float
	{
		return $this->incomeOther;
	}

	public function setIncomeOther(?float $incomeOther): self
	{
		$this->incomeOther = $incomeOther;

		return $this;
	}

	public function getIncomeRentalNet(): ?float
	{
		return $this->incomeRentalNet;
	}

	public function setIncomeRentalNet(?float $incomeRentalNet): self
	{
		$this->incomeRentalNet = $incomeRentalNet;

		return $this;
	}

	public function getIncomeSpouseGross(): ?float
	{
		return $this->incomeSpouseGross;
	}

	public function setIncomeSpouseGross(?float $incomeSpouseGross): self
	{
		$this->incomeSpouseGross = $incomeSpouseGross;

		return $this;
	}

	public function getIncomeSpouseNet(): ?float
	{
		return $this->incomeSpouseNet;
	}

	public function setIncomeSpouseNet(?float $incomeSpouseNet): self
	{
		$this->incomeSpouseNet = $incomeSpouseNet;

		return $this;
	}

	public function getIncomeSuperannuation(): ?float
	{
		return $this->incomeSuperannuation;
	}

	public function setIncomeSuperannuation(?float $incomeSuperannuation): self
	{
		$this->incomeSuperannuation = $incomeSuperannuation;

		return $this;
	}

	public function getInsuranceBrokerFeeExemptFlag(): ?string
	{
		return $this->insuranceBrokerFeeExemptFlag;
	}

	public function setInsuranceBrokerFeeExemptFlag(?string $insuranceBrokerFeeExemptFlag): self
	{
		$this->insuranceBrokerFeeExemptFlag = $insuranceBrokerFeeExemptFlag;

		return $this;
	}

	public function getKycVerifiedFlag(): ?string
	{
		return $this->kycVerifiedFlag;
	}

	public function setKycVerifiedFlag(?string $kycVerifiedFlag): self
	{
		$this->kycVerifiedFlag = $kycVerifiedFlag;

		return $this;
	}

	public function getLandlordName(): ?string
	{
		return $this->landlordName;
	}

	public function setLandlordName(?string $landlordName): self
	{
		$this->landlordName = $landlordName;

		return $this;
	}

	public function getLandlordTelephone(): ?string
	{
		return $this->landlordTelephone;
	}

	public function setLandlordTelephone(?string $landlordTelephone): self
	{
		$this->landlordTelephone = $landlordTelephone;

		return $this;
	}

	public function getLastEdit(): ?\DateTime
	{
		return $this->lastEdit;
	}

	public function setLastEdit(?\DateTime $lastEdit): self
	{
		$this->lastEdit = $lastEdit;

		return $this;
	}

	public function getLiabilityCreditCardLimit(): ?float
	{
		return $this->liabilityCreditCardLimit;
	}

	public function setLiabilityCreditCardLimit(?float $liabilityCreditCardLimit): self
	{
		$this->liabilityCreditCardLimit = $liabilityCreditCardLimit;

		return $this;
	}

	public function getLiabilityCreditCardLimitDescription(): ?string
	{
		return $this->liabilityCreditCardLimitDescription;
	}

	public function setLiabilityCreditCardLimitDescription(?string $liabilityCreditCardLimitDescription): self
	{
		$this->liabilityCreditCardLimitDescription = $liabilityCreditCardLimitDescription;

		return $this;
	}

	public function getLiabilityInvestmentMortgages(): ?float
	{
		return $this->liabilityInvestmentMortgages;
	}

	public function setLiabilityInvestmentMortgages(?float $liabilityInvestmentMortgages): self
	{
		$this->liabilityInvestmentMortgages = $liabilityInvestmentMortgages;

		return $this;
	}

	public function getLiabilityInvestmentMortgagesDescription(): ?string
	{
		return $this->liabilityInvestmentMortgagesDescription;
	}

	public function setLiabilityInvestmentMortgagesDescription(?string $liabilityInvestmentMortgagesDescription): self
	{
		$this->liabilityInvestmentMortgagesDescription = $liabilityInvestmentMortgagesDescription;

		return $this;
	}

	public function getLiabilityLoans(): ?float
	{
		return $this->liabilityLoans;
	}

	public function setLiabilityLoans(?float $liabilityLoans): self
	{
		$this->liabilityLoans = $liabilityLoans;

		return $this;
	}

	public function getLiabilityLoansDescription(): ?string
	{
		return $this->liabilityLoansDescription;
	}

	public function setLiabilityLoansDescription(?string $liabilityLoansDescription): self
	{
		$this->liabilityLoansDescription = $liabilityLoansDescription;

		return $this;
	}

	public function getLiabilityMortgages(): ?float
	{
		return $this->liabilityMortgages;
	}

	public function setLiabilityMortgages(?float $liabilityMortgages): self
	{
		$this->liabilityMortgages = $liabilityMortgages;

		return $this;
	}

	public function getLiabilityMortgagesDescription(): ?string
	{
		return $this->liabilityMortgagesDescription;
	}

	public function setLiabilityMortgagesDescription(?string $liabilityMortgagesDescription): self
	{
		$this->liabilityMortgagesDescription = $liabilityMortgagesDescription;

		return $this;
	}

	public function getLiabilityOther(): ?float
	{
		return $this->liabilityOther;
	}

	public function setLiabilityOther(?float $liabilityOther): self
	{
		$this->liabilityOther = $liabilityOther;

		return $this;
	}

	public function getLiabilityOtherDescription(): ?string
	{
		return $this->liabilityOtherDescription;
	}

	public function setLiabilityOtherDescription(?string $liabilityOtherDescription): self
	{
		$this->liabilityOtherDescription = $liabilityOtherDescription;

		return $this;
	}

	public function getLiabilityOverdraft(): ?float
	{
		return $this->liabilityOverdraft;
	}

	public function setLiabilityOverdraft(?float $liabilityOverdraft): self
	{
		$this->liabilityOverdraft = $liabilityOverdraft;

		return $this;
	}

	public function getLiabilityOverdraftDescription(): ?string
	{
		return $this->liabilityOverdraftDescription;
	}

	public function setLiabilityOverdraftDescription(?string $liabilityOverdraftDescription): self
	{
		$this->liabilityOverdraftDescription = $liabilityOverdraftDescription;

		return $this;
	}

	public function getLiabilityRent(): ?float
	{
		return $this->liabilityRent;
	}

	public function setLiabilityRent(?float $liabilityRent): self
	{
		$this->liabilityRent = $liabilityRent;

		return $this;
	}

	public function getLiabilityRentDescription(): ?string
	{
		return $this->liabilityRentDescription;
	}

	public function setLiabilityRentDescription(?string $liabilityRentDescription): self
	{
		$this->liabilityRentDescription = $liabilityRentDescription;

		return $this;
	}

	public function getLicenceClass(): ?string
	{
		return $this->licenceClass;
	}

	public function setLicenceClass(?string $licenceClass): self
	{
		$this->licenceClass = $licenceClass;

		return $this;
	}

	public function getMaritalStatus(): ?string
	{
		return $this->maritalStatus;
	}

	public function setMaritalStatus(?string $maritalStatus): self
	{
		$this->maritalStatus = $maritalStatus;

		return $this;
	}

	public function getMiddleName(): ?string
	{
		return $this->middleName;
	}

	public function setMiddleName(?string $middleName): self
	{
		$this->middleName = $middleName;

		return $this;
	}

	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	public function setMobile(?string $mobile): self
	{
		$this->mobile = $mobile;

		return $this;
	}

	public function getNameOnAccount(): ?string
	{
		return $this->nameOnAccount;
	}

	public function setNameOnAccount(?string $nameOnAccount): self
	{
		$this->nameOnAccount = $nameOnAccount;

		return $this;
	}

	public function getNoOfDependents(): ?int
	{
		return $this->noOfDependents;
	}

	public function setNoOfDependents(?int $noOfDependents): self
	{
		$this->noOfDependents = $noOfDependents;

		return $this;
	}

	public function getPayCycleId(): ?string
	{
		return $this->payCycleId;
	}

	public function setPayCycleId(?string $payCycleId): self
	{
		$this->payCycleId = $payCycleId;

		return $this;
	}

	public function getPreferredName(): ?string
	{
		return $this->preferredName;
	}

	public function setPreferredName(?string $preferredName): self
	{
		$this->preferredName = $preferredName;

		return $this;
	}

	public function getPreviousAddress1(): ?string
	{
		return $this->previousAddress1;
	}

	public function setPreviousAddress1(?string $previousAddress1): self
	{
		$this->previousAddress1 = $previousAddress1;

		return $this;
	}

	public function getPreviousAddress2(): ?string
	{
		return $this->previousAddress2;
	}

	public function setPreviousAddress2(?string $previousAddress2): self
	{
		$this->previousAddress2 = $previousAddress2;

		return $this;
	}

	public function getPreviousAddress3(): ?string
	{
		return $this->previousAddress3;
	}

	public function setPreviousAddress3(?string $previousAddress3): self
	{
		$this->previousAddress3 = $previousAddress3;

		return $this;
	}

	public function getPreviousAddressCountryId(): ?string
	{
		return $this->previousAddressCountryId;
	}

	public function setPreviousAddressCountryId(?string $previousAddressCountryId): self
	{
		$this->previousAddressCountryId = $previousAddressCountryId;

		return $this;
	}

	public function getPreviousAddressPostcode(): ?string
	{
		return $this->previousAddressPostcode;
	}

	public function setPreviousAddressPostcode(?string $previousAddressPostcode): self
	{
		$this->previousAddressPostcode = $previousAddressPostcode;

		return $this;
	}

	public function getPreviousAddressState(): ?string
	{
		return $this->previousAddressState;
	}

	public function setPreviousAddressState(?string $previousAddressState): self
	{
		$this->previousAddressState = $previousAddressState;

		return $this;
	}

	public function getPreviousAddressYearsAtAddress(): ?float
	{
		return $this->previousAddressYearsAtAddress;
	}

	public function setPreviousAddressYearsAtAddress(?float $previousAddressYearsAtAddress): self
	{
		$this->previousAddressYearsAtAddress = $previousAddressYearsAtAddress;

		return $this;
	}

	public function getPreviousEmployerName(): ?string
	{
		return $this->previousEmployerName;
	}

	public function setPreviousEmployerName(?string $previousEmployerName): self
	{
		$this->previousEmployerName = $previousEmployerName;

		return $this;
	}

	public function getPreviousEmployerPhone(): ?string
	{
		return $this->previousEmployerPhone;
	}

	public function setPreviousEmployerPhone(?string $previousEmployerPhone): self
	{
		$this->previousEmployerPhone = $previousEmployerPhone;

		return $this;
	}

	public function getPreviousYearsEmployed(): ?float
	{
		return $this->previousYearsEmployed;
	}

	public function setPreviousYearsEmployed(?float $previousYearsEmployed): self
	{
		$this->previousYearsEmployed = $previousYearsEmployed;

		return $this;
	}

	public function getReportDeliveryType(): ?string
	{
		return $this->reportDeliveryType;
	}

	public function setReportDeliveryType(?string $reportDeliveryType): self
	{
		$this->reportDeliveryType = $reportDeliveryType;

		return $this;
	}

	public function getResidencyStatus(): ?string
	{
		return $this->residencyStatus;
	}

	public function setResidencyStatus(?string $residencyStatus): self
	{
		$this->residencyStatus = $residencyStatus;

		return $this;
	}

	public function getResidentialStatus(): ?string
	{
		return $this->residentialStatus;
	}

	public function setResidentialStatus(?string $residentialStatus): self
	{
		$this->residentialStatus = $residentialStatus;

		return $this;
	}

	public function getSalutation(): ?string
	{
		return $this->salutation;
	}

	public function setSalutation(?string $salutation): self
	{
		$this->salutation = $salutation;

		return $this;
	}

	public function getStartAtAddress(): ?\DateTime
	{
		return $this->startAtAddress;
	}

	public function setStartAtAddress(?\DateTime $startAtAddress): self
	{
		$this->startAtAddress = $startAtAddress;

		return $this;
	}

	public function getStopBecsFlag(): ?string
	{
		return $this->stopBecsFlag;
	}

	public function setStopBecsFlag(?string $stopBecsFlag): self
	{
		$this->stopBecsFlag = $stopBecsFlag;

		return $this;
	}

	public function getSupplierIdEtag(): ?string
	{
		return $this->supplierIdEtag;
	}

	public function setSupplierIdEtag(?string $supplierIdEtag): self
	{
		$this->supplierIdEtag = $supplierIdEtag;

		return $this;
	}

	public function getSupplierIdFinancier(): ?string
	{
		return $this->supplierIdFinancier;
	}

	public function setSupplierIdFinancier(?string $supplierIdFinancier): self
	{
		$this->supplierIdFinancier = $supplierIdFinancier;

		return $this;
	}

	public function getSurname(): ?string
	{
		return $this->surname;
	}

	public function setSurname(?string $surname): self
	{
		$this->surname = $surname;

		return $this;
	}

	public function getTagAccountNumber(): ?string
	{
		return $this->tagAccountNumber;
	}

	public function setTagAccountNumber(?string $tagAccountNumber): self
	{
		$this->tagAccountNumber = $tagAccountNumber;

		return $this;
	}

	public function getTagNumber(): ?string
	{
		return $this->tagNumber;
	}

	public function setTagNumber(?string $tagNumber): self
	{
		$this->tagNumber = $tagNumber;

		return $this;
	}

	public function getUserIdPackageAdvisor(): ?string
	{
		return $this->userIdPackageAdvisor;
	}

	public function setUserIdPackageAdvisor(?string $userIdPackageAdvisor): self
	{
		$this->userIdPackageAdvisor = $userIdPackageAdvisor;

		return $this;
	}

	public function getWorkContactGiven(): ?string
	{
		return $this->workContactGiven;
	}

	public function setWorkContactGiven(?string $workContactGiven): self
	{
		$this->workContactGiven = $workContactGiven;

		return $this;
	}

	public function getWorkContactPosition(): ?string
	{
		return $this->workContactPosition;
	}

	public function setWorkContactPosition(?string $workContactPosition): self
	{
		$this->workContactPosition = $workContactPosition;

		return $this;
	}

	public function getWorkContactSurname(): ?string
	{
		return $this->workContactSurname;
	}

	public function setWorkContactSurname(?string $workContactSurname): self
	{
		$this->workContactSurname = $workContactSurname;

		return $this;
	}

	public function getWorkFax(): ?string
	{
		return $this->workFax;
	}

	public function setWorkFax(?string $workFax): self
	{
		$this->workFax = $workFax;

		return $this;
	}

	public function getWorkName(): ?string
	{
		return $this->workName;
	}

	public function setWorkName(?string $workName): self
	{
		$this->workName = $workName;

		return $this;
	}

	public function getWorkPhone(): ?string
	{
		return $this->workPhone;
	}

	public function setWorkPhone(?string $workPhone): self
	{
		$this->workPhone = $workPhone;

		return $this;
	}

	public function getWorkPhoneExt(): ?string
	{
		return $this->workPhoneExt;
	}

	public function setWorkPhoneExt(?string $workPhoneExt): self
	{
		$this->workPhoneExt = $workPhoneExt;

		return $this;
	}

	public function getWorkPosition(): ?string
	{
		return $this->workPosition;
	}

	public function setWorkPosition(?string $workPosition): self
	{
		$this->workPosition = $workPosition;

		return $this;
	}

	public function getWorkPostcode(): ?string
	{
		return $this->workPostcode;
	}

	public function setWorkPostcode(?string $workPostcode): self
	{
		$this->workPostcode = $workPostcode;

		return $this;
	}

	public function getWorkState(): ?string
	{
		return $this->workState;
	}

	public function setWorkState(?string $workState): self
	{
		$this->workState = $workState;

		return $this;
	}

	public function getWorkStreet(): ?string
	{
		return $this->workStreet;
	}

	public function setWorkStreet(?string $workStreet): self
	{
		$this->workStreet = $workStreet;

		return $this;
	}

	public function getWorkStreetNo(): ?string
	{
		return $this->workStreetNo;
	}

	public function setWorkStreetNo(?string $workStreetNo): self
	{
		$this->workStreetNo = $workStreetNo;

		return $this;
	}

	public function getWorkStreetType(): ?string
	{
		return $this->workStreetType;
	}

	public function setWorkStreetType(?string $workStreetType): self
	{
		$this->workStreetType = $workStreetType;

		return $this;
	}

	public function getWorkSuburb(): ?string
	{
		return $this->workSuburb;
	}

	public function setWorkSuburb(?string $workSuburb): self
	{
		$this->workSuburb = $workSuburb;

		return $this;
	}

	public function getWorkType(): ?string
	{
		return $this->workType;
	}

	public function setWorkType(?string $workType): self
	{
		$this->workType = $workType;

		return $this;
	}

	public function getWorkUnitNo(): ?string
	{
		return $this->workUnitNo;
	}

	public function setWorkUnitNo(?string $workUnitNo): self
	{
		$this->workUnitNo = $workUnitNo;

		return $this;
	}

	public function getYearsAtAddress(): ?float
	{
		return $this->yearsAtAddress;
	}

	public function setYearsAtAddress(?float $yearsAtAddress): self
	{
		$this->yearsAtAddress = $yearsAtAddress;

		return $this;
	}

	public function getYearsWithEmployer(): ?float
	{
		return $this->yearsWithEmployer;
	}

	public function setYearsWithEmployer(?float $yearsWithEmployer): self
	{
		$this->yearsWithEmployer = $yearsWithEmployer;

		return $this;
	}
}
