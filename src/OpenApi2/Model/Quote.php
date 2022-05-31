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

class Quote
{
    /**
     * @var null|float
     */
    protected $acceptedCount;
    /**
     * @var null|QuoteAccidentManagementFee
     */
    protected $accidentManagementFee;
    /**
     * @var null|string
     */
    protected $advanceArrears;
    /**
     * @var null|string
     */
    protected $afterHoursAssistanceFlag = 'no';
    /**
     * @var null|float
     */
    protected $allowances;
    /**
     * @var null|float
     */
    protected $annualKilometers;
    /**
     * @var null|float
     */
    protected $annualSalary;
    /**
     * @var null|\DateTime
     */
    protected $applicationCollectionDate;
    /**
     * @var null|\DateTime
     */
    protected $applicationDate;
    /**
     * @var null|string
     */
    protected $applicationReference;
    /**
     * @var null|string
     */
    protected $applicationStatus;
    /**
     * @var null|string
     */
    protected $applicationStatusFlag;
    /**
     * @var null|float
     */
    protected $arrearsInterest;
    /**
     * @var null|string
     */
    protected $atoLoanFlag = 'no';
    /**
     * @var null|float
     */
    protected $baseRate;
    /**
     * @var null|float
     */
    protected $baseResidualRate;
    /**
     * @var null|mixed
     */
    protected $bespokeFieldValues;
    /**
     * @var null|float
     */
    protected $billingPeriods;
    /**
     * @var null|float
     */
    protected $bonusAmountGst;
    /**
     * @var null|float
     */
    protected $bonusAmountNet;
    /**
     * @var null|float
     */
    protected $brokerFee;
    /**
     * @var null|float
     */
    protected $brokerRate;
    /**
     * Budget.
     *
     * @var null|QuoteBudget[]
     */
    protected $budgets;
    /**
     * @var null|float
     */
    protected $budgetsFinanced;
    /**
     * @var null|QuoteCarbonEmissionsOffset
     */
    protected $carbonEmissionsOffset;
    /**
     * @var null|float
     */
    protected $cancelled;
    /**
     * @var null|float
     */
    protected $capitalisedInterest;
    /**
     * @var null|float
     */
    protected $claimableGst;
    /**
     * @var null|string
     */
    protected $clientContactName;
    /**
     * @var null|string
     */
    protected $clientCostCentreId;
    /**
     * @var null|string
     */
    protected $clientDivisionId;
    /**
     * @var null|string
     */
    protected $clientEmail;
    /**
     * @var null|string
     */
    protected $clientFax;
    /**
     * @var null|mixed
     */
    protected $clientGroupFlag = 'no';
    /**
     * @var null|string
     */
    protected $clientId;
    /**
     * @var null|float
     */
    protected $clientMarginNet;
    /**
     * @var null|float
     */
    protected $clientMarginRate;
    /**
     * @var null|string
     */
    protected $clientName;
    /**
     * @var null|string
     */
    protected $clientPhone;
    /**
     * @var null|float
     */
    protected $clientResidualRate;
    /**
     * @var null|string
     */
    protected $clientType;
    /**
     * @var null|string
     */
    protected $colourPreference;
    /**
     * @var null|string
     */
    protected $colourPreference2;
    /**
     * @var null|string
     */
    protected $colourPreference3;
    /**
     * @var null|string
     */
    protected $colourPreferenceNote;
    /**
     * @var null|string
     */
    protected $comments;
    /**
     * @var null|string
     */
    protected $commentsInternal;
    /**
     * @var null|float
     */
    protected $commission;
    /**
     * @var null|float
     */
    protected $commissionRate;
    /**
     * @var null|string
     */
    protected $competitorId;
    /**
     * @var null|string
     */
    protected $competitorMarginId;
    /**
     * @var null|float
     */
    protected $contractKms;
    /**
     * @var null|string
     */
    protected $costCentre;
    /**
     * @var null|float
     */
    protected $csdGst;
    /**
     * @var null|float
     */
    protected $csdNet;
    /**
     * @var null|float
     */
    protected $csdRate;
    /**
     * @var null|float
     */
    protected $ctpInitialGst;
    /**
     * @var null|float
     */
    protected $ctpInitialNet;
    /**
     * @var null|\DateTime
     */
    protected $date;
    /**
     * @var null|\DateTime
     */
    protected $dateTo;
    /**
     * @var null|string
     */
    protected $dealTypeId;
    /**
     * @var null|string
     */
    protected $dealerComment;
    /**
     * @var null|float
     */
    protected $dealerDeliveryGst;
    /**
     * @var null|float
     */
    protected $dealerDeliveryNet;
    /**
     * @var null|float
     */
    protected $dealerDiscountGst;
    /**
     * @var null|float
     */
    protected $dealerDiscountNet;
    /**
     * @var null|float
     */
    protected $dealerRebateGst;
    /**
     * @var null|float
     */
    protected $dealerRebateNet;
    /**
     * @var null|float
     */
    protected $deferredInterest;
    /**
     * @var null|float
     */
    protected $deliveryFee;
    /**
     * @var null|mixed
     */
    protected $deliveryLocationType;
    /**
     * @var null|float
     */
    protected $depositGst;
    /**
     * @var null|float
     */
    protected $depositNet;
    /**
     * @var null|float
     */
    protected $depreciableAmount;
    /**
     * @var null|float
     */
    protected $discountGst;
    /**
     * @var null|string
     */
    protected $discountName;
    /**
     * @var null|float
     */
    protected $discountNet;
    /**
     * @var null|string
     */
    protected $discountTypeId;
    /**
     * @var null|float
     */
    protected $disposalFee;
    /**
     * @var null|string
     */
    protected $disposalFlag = 'no';
    /**
     * @var null|string
     */
    protected $division;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverEmail;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverFax;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverGivenName;
    /**
     * (Optional) Id of existing driver record.
     *
     * @var null|string
     */
    protected $driverId;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverPhone;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverSurname;
    /**
     * @var null|float
     */
    protected $duration;
    /**
     * @var null|float
     */
    protected $earlyTerminationFee;
    /**
     * @var null|string
     */
    protected $ecmFlag = 'no';
    /**
     * @var null|string
     */
    protected $employerFbtType = 'full-fbt-payable';
    /**
     * @var null|float
     */
    protected $establishmentFee;
    /**
     * @var null|string
     */
    protected $establishmentFeeFundedFlag = 'yes';
    /**
     * @var null|string
     */
    protected $excessKmFlag = 'no';
    /**
     * @var null|float
     */
    protected $excessKmRate;
    /**
     * @var null|QuoteExtendedWarranty
     */
    protected $extendedWarranty;
    /**
     * @var null|string
     */
    protected $fbtBenefitType = 'statutory';
    /**
     * @var null|float
     */
    protected $fbtBusinessUse;
    /**
     * @var null|float
     */
    protected $fbtStatutoryRate;
    /**
     * @var null|float
     */
    protected $fbtValue;
    /**
     * @var null|float
     */
    protected $fbtValueYearly;
    /**
     * @var null|float
     */
    protected $financeAdministrationFeeGst;
    /**
     * @var null|float
     */
    protected $financeAdministrationFeeNet;
    /**
     * @var null|string
     */
    protected $financeMethod = 'future-value';
    /**
     * @var null|float
     */
    protected $financePmtGst;
    /**
     * @var null|float
     */
    protected $financePmtNet;
    /**
     * @var null|float
     */
    protected $financeRate;
    /**
     * @var null|string
     */
    protected $financeTypeId;
    /**
     * @var null|string
     */
    protected $financeUuid;
    /**
     * @var null|float
     */
    protected $financedAmount;
    /**
     * @var null|QuoteFuel
     */
    protected $fuel;
    /**
     * @var null|float
     */
    protected $fuelOnDeliveryFee;
    /**
     * @var null|float
     */
    protected $gapInsurance;
    /**
     * @var null|string
     */
    protected $gapInsuranceFlag = 'yes';
    /**
     * @var null|float
     */
    protected $gstOnInterest;
    /**
     * @var null|float
     */
    protected $highKmAdjustmentRate;
    /**
     * Inclusion Plans.
     *
     * @var null|QuoteInclusionPlan[]
     */
    protected $inclusionPlans;
    /**
     * @var null|QuoteInsurance
     */
    protected $insurance;
    /**
     * @var null|string
     */
    protected $insuranceAtFaultFlag;
    /**
     * @var null|string
     */
    protected $insuranceConvictionFlag;
    /**
     * Insurance Disclosures.
     *
     * @var null|QuoteInsuranceDisclosure[]
     */
    protected $insuranceDisclosures;
    /**
     * Insurance Loading Types.
     *
     * @var null|QuoteInsuranceLoadingTypes
     */
    protected $insuranceLoadingTypes;
    /**
     * @var null|string
     */
    protected $insuranceLossLicenceFlag;
    /**
     * @var null|string
     */
    protected $insurerLocationId;
    /**
     * @var null|string
     */
    protected $insurerLocationPostcode;
    /**
     * @var null|float
     */
    protected $interestOnResidual;
    /**
     * @var null|float
     */
    protected $lesseeRate;
    /**
     * @var null|float
     */
    protected $listPriceGst;
    /**
     * @var null|float
     */
    protected $listPriceNet;
    /**
     * @var null|string
     */
    protected $locationName;
    /**
     * @var null|string
     */
    protected $locationRegistrationId;
    /**
     * @var null|string
     */
    protected $lockComprehensiveInsuranceFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockDealerDiscountFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockDiscountFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockFbtValueFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockLeaseRateFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockLuxuryCarTaxFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockPurchaseStampDutyFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockQuoteFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockRedundancyInsuranceFlag = 'no';
    /**
     * @var null|string
     */
    protected $lockResidualFlag = 'no';
    /**
     * @var null|float
     */
    protected $lookAhead;
    /**
     * @var null|QuoteLti
     */
    protected $lti;
    /**
     * @var null|float
     */
    protected $luxuryCarTax;
    /**
     * @var null|string
     */
    protected $luxuryCarTaxExemptFlag = 'no';
    /**
     * @var null|float
     */
    protected $luxuryCharge;
    /**
     * @var null|QuoteMaintenanceService
     */
    protected $maintenanceService;
    /**
     * @var null|float
     */
    protected $marginGst;
    /**
     * @var null|float
     */
    protected $marginNet;
    /**
     * @var null|float
     */
    protected $monthsInArrears;
    /**
     * @var null|float
     */
    protected $mortgageDuty;
    /**
     * @var null|string
     */
    protected $newUsed = 'new';
    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero value.
     *
     * @var null|float
     */
    protected $odometer;
    /**
     * @var null|float
     */
    protected $onRoadPriceGst;
    /**
     * @var null|float
     */
    protected $onRoadPriceNet;
    /**
     * @var null|string
     */
    protected $opportunityId;
    /**
     * @var null|string
     */
    protected $opportunityNumber;
    /**
     * @var null|string
     */
    protected $opportunityStageId;
    /**
     * Optional equipment.
     *
     * @var null|QuoteOptionalEquipment[]
     */
    protected $optionalEquipment;
    /**
     * @var null|float
     */
    protected $optionalEquipmentGst;
    /**
     * @var null|float
     */
    protected $optionalEquipmentNet;
    /**
     * @var null|float
     */
    protected $originatorFee;
    /**
     * @var null|string
     */
    protected $originatorId;
    /**
     * @var null|float
     */
    protected $otherBrokerage;
    /**
     * @var null|float
     */
    protected $packageAdminFee;
    /**
     * @var null|float
     */
    protected $packagingAdviceFee;
    /**
     * @var null|string
     */
    protected $parentQuoteId;
    /**
     * @var null|float
     */
    protected $payCycleBillingPeriods;
    /**
     * @var null|string
     */
    protected $payCycleId;
    /**
     * @var null|float
     */
    protected $periodsDeferred;
    /**
     * @var null|float
     */
    protected $plateYear;
    /**
     * @var null|string
     */
    protected $policyOwnerType = 'driver';
    /**
     * @var null|float
     */
    protected $postTaxExisting;
    /**
     * @var null|string
     */
    protected $postingMapId;
    /**
     * @var null|float
     */
    protected $preTaxExisting;
    /**
     * @var null|float
     */
    protected $premiumPlatesNet;
    /**
     * (Optional) Must be a positive number.
     *
     * @var null|float
     */
    protected $previousFbtValue;
    /**
     * @var null|string
     */
    protected $priceComment;
    /**
     * @var null|string
     */
    protected $pricingReceived;
    /**
     * @var null|string
     */
    protected $pricingReference;
    /**
     * @var null|string
     */
    protected $pricingRequested;
    /**
     * @var null|float
     */
    protected $procurementFee;
    /**
     * @var null|string
     */
    protected $procurementFlag = 'no';
    /**
     * @var null|float
     */
    protected $purchaseStampDuty;
    /**
     * @var null|string
     */
    protected $purchaseStampDutyExemptFlag = 'no';
    /**
     * @var null|\DateTime
     */
    protected $quoteDate;
    /**
     * @var null|QuoteStatuses
     */
    protected $quoteStatus;
    /**
     * @var null|string
     */
    protected $quoteStatusId;
    /**
     * @var null|string
     */
    protected $quoteSubStatusId;
    /**
     * @var null|float
     */
    protected $rebateGst;
    /**
     * @var null|float
     */
    protected $rebateNet;
    /**
     * @var null|mixed
     */
    protected $reducedSuperFlag = 'no';
    /**
     * @var null|float
     */
    protected $redundancyInsurance;
    /**
     * @var null|float
     */
    protected $redundancyInsuranceCost;
    /**
     * @var null|string
     */
    protected $redundancyInsuranceFlag = 'no';
    /**
     * @var null|float
     */
    protected $redundancyInsuranceRate;
    /**
     * @var null|string
     */
    protected $redundancyInsuranceValidationFlag = 'no';
    /**
     * @var null|QuoteRegCtp
     */
    protected $regCtp;
    /**
     * @var null|float
     */
    protected $regInitialNet;
    /**
     * @var null|QuoteReliefVehicle
     */
    protected $reliefVehicle;
    /**
     * @var null|string
     */
    protected $residualBasis;
    /**
     * @var null|float
     */
    protected $residualCashPoolGst;
    /**
     * @var null|float
     */
    protected $residualCashPoolNet;
    /**
     * @var null|float
     */
    protected $residualCashPoolRate;
    /**
     * @var null|float
     */
    protected $residualGst;
    /**
     * @var null|float
     */
    protected $residualInsurance;
    /**
     * @var null|float
     */
    protected $residualInsuranceRate;
    /**
     * @var null|float
     */
    protected $residualNet;
    /**
     * @var null|float
     */
    protected $residualRate;
    /**
     * @var null|float
     */
    protected $residualRateGross;
    /**
     * @var null|float
     */
    protected $residualRateNet;
    /**
     * @var null|float
     */
    protected $revsFee;
    /**
     * @var null|QuoteRoadsideAssistance
     */
    protected $roadsideAssistance;
    /**
     * @var null|QuoteSmallDamageRepairs
     */
    protected $smallDamageRepairs;
    /**
     * @var null|string
     */
    protected $state;
    /**
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|float
     */
    protected $superannuation;
    /**
     * @var null|string
     */
    protected $supplierIdBroker;
    /**
     * @var null|string
     */
    protected $supplierIdDealer;
    /**
     * @var null|string
     */
    protected $supplierIdFinancier;
    /**
     * @var null|string
     */
    protected $supplierIdInsurer;
    /**
     * @var null|string
     */
    protected $supplierIdResidualInsurer;
    /**
     * @var null|float
     */
    protected $term;
    /**
     * @var null|float
     */
    protected $totalBrokerage;
    /**
     * @var null|float
     */
    protected $tradeInAmountGst;
    /**
     * @var null|float
     */
    protected $tradeInAmountNet;
    /**
     * @var null|string
     */
    protected $tradeInRegNo;
    /**
     * @var null|string
     */
    protected $tradeInVehicleDescription;
    /**
     * @var null|string
     */
    protected $trimPreference;
    /**
     * @var null|QuoteTyres
     */
    protected $tyres;
    /**
     * @var null|QuoteTyreRimInsurance
     */
    protected $tyreRimInsurance;
    /**
     * @var null|string
     */
    protected $tyreRimInsuranceFlag = 'no';
    /**
     * @var null|float
     */
    protected $usageAdjustmentRate;
    /**
     * @var null|string
     */
    protected $userIdAssigned;
    /**
     * @var null|string
     */
    protected $userIdClientManager;
    /**
     * @var null|float
     */
    protected $variantAdjustmentRate;
    /**
     * @var null|string
     */
    protected $variantBonusId;
    /**
     * @var null|string
     */
    protected $variantId;
    /**
     * @var null|QuoteVehicleMaintenanceProgram
     */
    protected $vehicleMaintenanceProgram;
    /**
     * @var null|string
     */
    protected $vehicleTrackingSystemFlag;
    /**
     * @var null|string
     */
    protected $vehicleUsageTypeId;
    /**
     * @var null|QuoteWalkaway
     */
    protected $walkaway;
    /**
     * @var null|string
     */
    protected $walkawayFlag = 'no';
    /**
     * @var null|QuoteWarrantOfFitness
     */
    protected $warrantOfFitness;
    /**
     * @var null|float
     */
    protected $warrantyKms;
    /**
     * @var null|float
     */
    protected $warrantyMths;

    public function getAcceptedCount(): ?float
    {
        return $this->acceptedCount;
    }

    public function setAcceptedCount(?float $acceptedCount): self
    {
        $this->acceptedCount = $acceptedCount;

        return $this;
    }

    public function getAccidentManagementFee(): ?QuoteAccidentManagementFee
    {
        return $this->accidentManagementFee;
    }

    public function setAccidentManagementFee(?QuoteAccidentManagementFee $accidentManagementFee): self
    {
        $this->accidentManagementFee = $accidentManagementFee;

        return $this;
    }

    public function getAdvanceArrears(): ?string
    {
        return $this->advanceArrears;
    }

    public function setAdvanceArrears(?string $advanceArrears): self
    {
        $this->advanceArrears = $advanceArrears;

        return $this;
    }

    public function getAfterHoursAssistanceFlag(): ?string
    {
        return $this->afterHoursAssistanceFlag;
    }

    public function setAfterHoursAssistanceFlag(?string $afterHoursAssistanceFlag): self
    {
        $this->afterHoursAssistanceFlag = $afterHoursAssistanceFlag;

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

    public function getAnnualKilometers(): ?float
    {
        return $this->annualKilometers;
    }

    public function setAnnualKilometers(?float $annualKilometers): self
    {
        $this->annualKilometers = $annualKilometers;

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

    public function getApplicationCollectionDate(): ?\DateTime
    {
        return $this->applicationCollectionDate;
    }

    public function setApplicationCollectionDate(?\DateTime $applicationCollectionDate): self
    {
        $this->applicationCollectionDate = $applicationCollectionDate;

        return $this;
    }

    public function getApplicationDate(): ?\DateTime
    {
        return $this->applicationDate;
    }

    public function setApplicationDate(?\DateTime $applicationDate): self
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    public function getApplicationReference(): ?string
    {
        return $this->applicationReference;
    }

    public function setApplicationReference(?string $applicationReference): self
    {
        $this->applicationReference = $applicationReference;

        return $this;
    }

    public function getApplicationStatus(): ?string
    {
        return $this->applicationStatus;
    }

    public function setApplicationStatus(?string $applicationStatus): self
    {
        $this->applicationStatus = $applicationStatus;

        return $this;
    }

    public function getApplicationStatusFlag(): ?string
    {
        return $this->applicationStatusFlag;
    }

    public function setApplicationStatusFlag(?string $applicationStatusFlag): self
    {
        $this->applicationStatusFlag = $applicationStatusFlag;

        return $this;
    }

    public function getArrearsInterest(): ?float
    {
        return $this->arrearsInterest;
    }

    public function setArrearsInterest(?float $arrearsInterest): self
    {
        $this->arrearsInterest = $arrearsInterest;

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

    public function getBaseRate(): ?float
    {
        return $this->baseRate;
    }

    public function setBaseRate(?float $baseRate): self
    {
        $this->baseRate = $baseRate;

        return $this;
    }

    public function getBaseResidualRate(): ?float
    {
        return $this->baseResidualRate;
    }

    public function setBaseResidualRate(?float $baseResidualRate): self
    {
        $this->baseResidualRate = $baseResidualRate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBespokeFieldValues()
    {
        return $this->bespokeFieldValues;
    }

    /**
     * @param mixed $bespokeFieldValues
     */
    public function setBespokeFieldValues($bespokeFieldValues): self
    {
        $this->bespokeFieldValues = $bespokeFieldValues;

        return $this;
    }

    public function getBillingPeriods(): ?float
    {
        return $this->billingPeriods;
    }

    public function setBillingPeriods(?float $billingPeriods): self
    {
        $this->billingPeriods = $billingPeriods;

        return $this;
    }

    public function getBonusAmountGst(): ?float
    {
        return $this->bonusAmountGst;
    }

    public function setBonusAmountGst(?float $bonusAmountGst): self
    {
        $this->bonusAmountGst = $bonusAmountGst;

        return $this;
    }

    public function getBonusAmountNet(): ?float
    {
        return $this->bonusAmountNet;
    }

    public function setBonusAmountNet(?float $bonusAmountNet): self
    {
        $this->bonusAmountNet = $bonusAmountNet;

        return $this;
    }

    public function getBrokerFee(): ?float
    {
        return $this->brokerFee;
    }

    public function setBrokerFee(?float $brokerFee): self
    {
        $this->brokerFee = $brokerFee;

        return $this;
    }

    public function getBrokerRate(): ?float
    {
        return $this->brokerRate;
    }

    public function setBrokerRate(?float $brokerRate): self
    {
        $this->brokerRate = $brokerRate;

        return $this;
    }

    /**
     * Budget.
     *
     * @return null|QuoteBudget[]
     */
    public function getBudgets(): ?array
    {
        return $this->budgets;
    }

    /**
     * Budget.
     *
     * @param null|QuoteBudget[] $budgets
     */
    public function setBudgets(?array $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }

    public function getBudgetsFinanced(): ?float
    {
        return $this->budgetsFinanced;
    }

    public function setBudgetsFinanced(?float $budgetsFinanced): self
    {
        $this->budgetsFinanced = $budgetsFinanced;

        return $this;
    }

    public function getCarbonEmissionsOffset(): ?QuoteCarbonEmissionsOffset
    {
        return $this->carbonEmissionsOffset;
    }

    public function setCarbonEmissionsOffset(?QuoteCarbonEmissionsOffset $carbonEmissionsOffset): self
    {
        $this->carbonEmissionsOffset = $carbonEmissionsOffset;

        return $this;
    }

    public function getCancelled(): ?float
    {
        return $this->cancelled;
    }

    public function setCancelled(?float $cancelled): self
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    public function getCapitalisedInterest(): ?float
    {
        return $this->capitalisedInterest;
    }

    public function setCapitalisedInterest(?float $capitalisedInterest): self
    {
        $this->capitalisedInterest = $capitalisedInterest;

        return $this;
    }

    public function getClaimableGst(): ?float
    {
        return $this->claimableGst;
    }

    public function setClaimableGst(?float $claimableGst): self
    {
        $this->claimableGst = $claimableGst;

        return $this;
    }

    public function getClientContactName(): ?string
    {
        return $this->clientContactName;
    }

    public function setClientContactName(?string $clientContactName): self
    {
        $this->clientContactName = $clientContactName;

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

    public function getClientDivisionId(): ?string
    {
        return $this->clientDivisionId;
    }

    public function setClientDivisionId(?string $clientDivisionId): self
    {
        $this->clientDivisionId = $clientDivisionId;

        return $this;
    }

    public function getClientEmail(): ?string
    {
        return $this->clientEmail;
    }

    public function setClientEmail(?string $clientEmail): self
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    public function getClientFax(): ?string
    {
        return $this->clientFax;
    }

    public function setClientFax(?string $clientFax): self
    {
        $this->clientFax = $clientFax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClientGroupFlag()
    {
        return $this->clientGroupFlag;
    }

    /**
     * @param mixed $clientGroupFlag
     */
    public function setClientGroupFlag($clientGroupFlag): self
    {
        $this->clientGroupFlag = $clientGroupFlag;

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

    public function getClientMarginNet(): ?float
    {
        return $this->clientMarginNet;
    }

    public function setClientMarginNet(?float $clientMarginNet): self
    {
        $this->clientMarginNet = $clientMarginNet;

        return $this;
    }

    public function getClientMarginRate(): ?float
    {
        return $this->clientMarginRate;
    }

    public function setClientMarginRate(?float $clientMarginRate): self
    {
        $this->clientMarginRate = $clientMarginRate;

        return $this;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(?string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    public function getClientPhone(): ?string
    {
        return $this->clientPhone;
    }

    public function setClientPhone(?string $clientPhone): self
    {
        $this->clientPhone = $clientPhone;

        return $this;
    }

    public function getClientResidualRate(): ?float
    {
        return $this->clientResidualRate;
    }

    public function setClientResidualRate(?float $clientResidualRate): self
    {
        $this->clientResidualRate = $clientResidualRate;

        return $this;
    }

    public function getClientType(): ?string
    {
        return $this->clientType;
    }

    public function setClientType(?string $clientType): self
    {
        $this->clientType = $clientType;

        return $this;
    }

    public function getColourPreference(): ?string
    {
        return $this->colourPreference;
    }

    public function setColourPreference(?string $colourPreference): self
    {
        $this->colourPreference = $colourPreference;

        return $this;
    }

    public function getColourPreference2(): ?string
    {
        return $this->colourPreference2;
    }

    public function setColourPreference2(?string $colourPreference2): self
    {
        $this->colourPreference2 = $colourPreference2;

        return $this;
    }

    public function getColourPreference3(): ?string
    {
        return $this->colourPreference3;
    }

    public function setColourPreference3(?string $colourPreference3): self
    {
        $this->colourPreference3 = $colourPreference3;

        return $this;
    }

    public function getColourPreferenceNote(): ?string
    {
        return $this->colourPreferenceNote;
    }

    public function setColourPreferenceNote(?string $colourPreferenceNote): self
    {
        $this->colourPreferenceNote = $colourPreferenceNote;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getCommentsInternal(): ?string
    {
        return $this->commentsInternal;
    }

    public function setCommentsInternal(?string $commentsInternal): self
    {
        $this->commentsInternal = $commentsInternal;

        return $this;
    }

    public function getCommission(): ?float
    {
        return $this->commission;
    }

    public function setCommission(?float $commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    public function getCommissionRate(): ?float
    {
        return $this->commissionRate;
    }

    public function setCommissionRate(?float $commissionRate): self
    {
        $this->commissionRate = $commissionRate;

        return $this;
    }

    public function getCompetitorId(): ?string
    {
        return $this->competitorId;
    }

    public function setCompetitorId(?string $competitorId): self
    {
        $this->competitorId = $competitorId;

        return $this;
    }

    public function getCompetitorMarginId(): ?string
    {
        return $this->competitorMarginId;
    }

    public function setCompetitorMarginId(?string $competitorMarginId): self
    {
        $this->competitorMarginId = $competitorMarginId;

        return $this;
    }

    public function getContractKms(): ?float
    {
        return $this->contractKms;
    }

    public function setContractKms(?float $contractKms): self
    {
        $this->contractKms = $contractKms;

        return $this;
    }

    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }

    public function setCostCentre(?string $costCentre): self
    {
        $this->costCentre = $costCentre;

        return $this;
    }

    public function getCsdGst(): ?float
    {
        return $this->csdGst;
    }

    public function setCsdGst(?float $csdGst): self
    {
        $this->csdGst = $csdGst;

        return $this;
    }

    public function getCsdNet(): ?float
    {
        return $this->csdNet;
    }

    public function setCsdNet(?float $csdNet): self
    {
        $this->csdNet = $csdNet;

        return $this;
    }

    public function getCsdRate(): ?float
    {
        return $this->csdRate;
    }

    public function setCsdRate(?float $csdRate): self
    {
        $this->csdRate = $csdRate;

        return $this;
    }

    public function getCtpInitialGst(): ?float
    {
        return $this->ctpInitialGst;
    }

    public function setCtpInitialGst(?float $ctpInitialGst): self
    {
        $this->ctpInitialGst = $ctpInitialGst;

        return $this;
    }

    public function getCtpInitialNet(): ?float
    {
        return $this->ctpInitialNet;
    }

    public function setCtpInitialNet(?float $ctpInitialNet): self
    {
        $this->ctpInitialNet = $ctpInitialNet;

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

    public function getDateTo(): ?\DateTime
    {
        return $this->dateTo;
    }

    public function setDateTo(?\DateTime $dateTo): self
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    public function getDealTypeId(): ?string
    {
        return $this->dealTypeId;
    }

    public function setDealTypeId(?string $dealTypeId): self
    {
        $this->dealTypeId = $dealTypeId;

        return $this;
    }

    public function getDealerComment(): ?string
    {
        return $this->dealerComment;
    }

    public function setDealerComment(?string $dealerComment): self
    {
        $this->dealerComment = $dealerComment;

        return $this;
    }

    public function getDealerDeliveryGst(): ?float
    {
        return $this->dealerDeliveryGst;
    }

    public function setDealerDeliveryGst(?float $dealerDeliveryGst): self
    {
        $this->dealerDeliveryGst = $dealerDeliveryGst;

        return $this;
    }

    public function getDealerDeliveryNet(): ?float
    {
        return $this->dealerDeliveryNet;
    }

    public function setDealerDeliveryNet(?float $dealerDeliveryNet): self
    {
        $this->dealerDeliveryNet = $dealerDeliveryNet;

        return $this;
    }

    public function getDealerDiscountGst(): ?float
    {
        return $this->dealerDiscountGst;
    }

    public function setDealerDiscountGst(?float $dealerDiscountGst): self
    {
        $this->dealerDiscountGst = $dealerDiscountGst;

        return $this;
    }

    public function getDealerDiscountNet(): ?float
    {
        return $this->dealerDiscountNet;
    }

    public function setDealerDiscountNet(?float $dealerDiscountNet): self
    {
        $this->dealerDiscountNet = $dealerDiscountNet;

        return $this;
    }

    public function getDealerRebateGst(): ?float
    {
        return $this->dealerRebateGst;
    }

    public function setDealerRebateGst(?float $dealerRebateGst): self
    {
        $this->dealerRebateGst = $dealerRebateGst;

        return $this;
    }

    public function getDealerRebateNet(): ?float
    {
        return $this->dealerRebateNet;
    }

    public function setDealerRebateNet(?float $dealerRebateNet): self
    {
        $this->dealerRebateNet = $dealerRebateNet;

        return $this;
    }

    public function getDeferredInterest(): ?float
    {
        return $this->deferredInterest;
    }

    public function setDeferredInterest(?float $deferredInterest): self
    {
        $this->deferredInterest = $deferredInterest;

        return $this;
    }

    public function getDeliveryFee(): ?float
    {
        return $this->deliveryFee;
    }

    public function setDeliveryFee(?float $deliveryFee): self
    {
        $this->deliveryFee = $deliveryFee;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryLocationType()
    {
        return $this->deliveryLocationType;
    }

    /**
     * @param mixed $deliveryLocationType
     */
    public function setDeliveryLocationType($deliveryLocationType): self
    {
        $this->deliveryLocationType = $deliveryLocationType;

        return $this;
    }

    public function getDepositGst(): ?float
    {
        return $this->depositGst;
    }

    public function setDepositGst(?float $depositGst): self
    {
        $this->depositGst = $depositGst;

        return $this;
    }

    public function getDepositNet(): ?float
    {
        return $this->depositNet;
    }

    public function setDepositNet(?float $depositNet): self
    {
        $this->depositNet = $depositNet;

        return $this;
    }

    public function getDepreciableAmount(): ?float
    {
        return $this->depreciableAmount;
    }

    public function setDepreciableAmount(?float $depreciableAmount): self
    {
        $this->depreciableAmount = $depreciableAmount;

        return $this;
    }

    public function getDiscountGst(): ?float
    {
        return $this->discountGst;
    }

    public function setDiscountGst(?float $discountGst): self
    {
        $this->discountGst = $discountGst;

        return $this;
    }

    public function getDiscountName(): ?string
    {
        return $this->discountName;
    }

    public function setDiscountName(?string $discountName): self
    {
        $this->discountName = $discountName;

        return $this;
    }

    public function getDiscountNet(): ?float
    {
        return $this->discountNet;
    }

    public function setDiscountNet(?float $discountNet): self
    {
        $this->discountNet = $discountNet;

        return $this;
    }

    public function getDiscountTypeId(): ?string
    {
        return $this->discountTypeId;
    }

    public function setDiscountTypeId(?string $discountTypeId): self
    {
        $this->discountTypeId = $discountTypeId;

        return $this;
    }

    public function getDisposalFee(): ?float
    {
        return $this->disposalFee;
    }

    public function setDisposalFee(?float $disposalFee): self
    {
        $this->disposalFee = $disposalFee;

        return $this;
    }

    public function getDisposalFlag(): ?string
    {
        return $this->disposalFlag;
    }

    public function setDisposalFlag(?string $disposalFlag): self
    {
        $this->disposalFlag = $disposalFlag;

        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;

        return $this;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function getDriverEmail(): ?string
    {
        return $this->driverEmail;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function setDriverEmail(?string $driverEmail): self
    {
        $this->driverEmail = $driverEmail;

        return $this;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function getDriverFax(): ?string
    {
        return $this->driverFax;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function setDriverFax(?string $driverFax): self
    {
        $this->driverFax = $driverFax;

        return $this;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function getDriverGivenName(): ?string
    {
        return $this->driverGivenName;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function setDriverGivenName(?string $driverGivenName): self
    {
        $this->driverGivenName = $driverGivenName;

        return $this;
    }

    /**
     * (Optional) Id of existing driver record.
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    /**
     * (Optional) Id of existing driver record.
     */
    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function getDriverPhone(): ?string
    {
        return $this->driverPhone;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function setDriverPhone(?string $driverPhone): self
    {
        $this->driverPhone = $driverPhone;

        return $this;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function getDriverSurname(): ?string
    {
        return $this->driverSurname;
    }

    /**
     * (Optional) Will be populated from Driver object (if specified).
     */
    public function setDriverSurname(?string $driverSurname): self
    {
        $this->driverSurname = $driverSurname;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getEarlyTerminationFee(): ?float
    {
        return $this->earlyTerminationFee;
    }

    public function setEarlyTerminationFee(?float $earlyTerminationFee): self
    {
        $this->earlyTerminationFee = $earlyTerminationFee;

        return $this;
    }

    public function getEcmFlag(): ?string
    {
        return $this->ecmFlag;
    }

    public function setEcmFlag(?string $ecmFlag): self
    {
        $this->ecmFlag = $ecmFlag;

        return $this;
    }

    public function getEmployerFbtType(): ?string
    {
        return $this->employerFbtType;
    }

    public function setEmployerFbtType(?string $employerFbtType): self
    {
        $this->employerFbtType = $employerFbtType;

        return $this;
    }

    public function getEstablishmentFee(): ?float
    {
        return $this->establishmentFee;
    }

    public function setEstablishmentFee(?float $establishmentFee): self
    {
        $this->establishmentFee = $establishmentFee;

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

    public function getExcessKmFlag(): ?string
    {
        return $this->excessKmFlag;
    }

    public function setExcessKmFlag(?string $excessKmFlag): self
    {
        $this->excessKmFlag = $excessKmFlag;

        return $this;
    }

    public function getExcessKmRate(): ?float
    {
        return $this->excessKmRate;
    }

    public function setExcessKmRate(?float $excessKmRate): self
    {
        $this->excessKmRate = $excessKmRate;

        return $this;
    }

    public function getExtendedWarranty(): ?QuoteExtendedWarranty
    {
        return $this->extendedWarranty;
    }

    public function setExtendedWarranty(?QuoteExtendedWarranty $extendedWarranty): self
    {
        $this->extendedWarranty = $extendedWarranty;

        return $this;
    }

    public function getFbtBenefitType(): ?string
    {
        return $this->fbtBenefitType;
    }

    public function setFbtBenefitType(?string $fbtBenefitType): self
    {
        $this->fbtBenefitType = $fbtBenefitType;

        return $this;
    }

    public function getFbtBusinessUse(): ?float
    {
        return $this->fbtBusinessUse;
    }

    public function setFbtBusinessUse(?float $fbtBusinessUse): self
    {
        $this->fbtBusinessUse = $fbtBusinessUse;

        return $this;
    }

    public function getFbtStatutoryRate(): ?float
    {
        return $this->fbtStatutoryRate;
    }

    public function setFbtStatutoryRate(?float $fbtStatutoryRate): self
    {
        $this->fbtStatutoryRate = $fbtStatutoryRate;

        return $this;
    }

    public function getFbtValue(): ?float
    {
        return $this->fbtValue;
    }

    public function setFbtValue(?float $fbtValue): self
    {
        $this->fbtValue = $fbtValue;

        return $this;
    }

    public function getFbtValueYearly(): ?float
    {
        return $this->fbtValueYearly;
    }

    public function setFbtValueYearly(?float $fbtValueYearly): self
    {
        $this->fbtValueYearly = $fbtValueYearly;

        return $this;
    }

    public function getFinanceAdministrationFeeGst(): ?float
    {
        return $this->financeAdministrationFeeGst;
    }

    public function setFinanceAdministrationFeeGst(?float $financeAdministrationFeeGst): self
    {
        $this->financeAdministrationFeeGst = $financeAdministrationFeeGst;

        return $this;
    }

    public function getFinanceAdministrationFeeNet(): ?float
    {
        return $this->financeAdministrationFeeNet;
    }

    public function setFinanceAdministrationFeeNet(?float $financeAdministrationFeeNet): self
    {
        $this->financeAdministrationFeeNet = $financeAdministrationFeeNet;

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

    public function getFinancePmtGst(): ?float
    {
        return $this->financePmtGst;
    }

    public function setFinancePmtGst(?float $financePmtGst): self
    {
        $this->financePmtGst = $financePmtGst;

        return $this;
    }

    public function getFinancePmtNet(): ?float
    {
        return $this->financePmtNet;
    }

    public function setFinancePmtNet(?float $financePmtNet): self
    {
        $this->financePmtNet = $financePmtNet;

        return $this;
    }

    public function getFinanceRate(): ?float
    {
        return $this->financeRate;
    }

    public function setFinanceRate(?float $financeRate): self
    {
        $this->financeRate = $financeRate;

        return $this;
    }

    public function getFinanceTypeId(): ?string
    {
        return $this->financeTypeId;
    }

    public function setFinanceTypeId(?string $financeTypeId): self
    {
        $this->financeTypeId = $financeTypeId;

        return $this;
    }

    public function getFinanceUuid(): ?string
    {
        return $this->financeUuid;
    }

    public function setFinanceUuid(?string $financeUuid): self
    {
        $this->financeUuid = $financeUuid;

        return $this;
    }

    public function getFinancedAmount(): ?float
    {
        return $this->financedAmount;
    }

    public function setFinancedAmount(?float $financedAmount): self
    {
        $this->financedAmount = $financedAmount;

        return $this;
    }

    public function getFuel(): ?QuoteFuel
    {
        return $this->fuel;
    }

    public function setFuel(?QuoteFuel $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getFuelOnDeliveryFee(): ?float
    {
        return $this->fuelOnDeliveryFee;
    }

    public function setFuelOnDeliveryFee(?float $fuelOnDeliveryFee): self
    {
        $this->fuelOnDeliveryFee = $fuelOnDeliveryFee;

        return $this;
    }

    public function getGapInsurance(): ?float
    {
        return $this->gapInsurance;
    }

    public function setGapInsurance(?float $gapInsurance): self
    {
        $this->gapInsurance = $gapInsurance;

        return $this;
    }

    public function getGapInsuranceFlag(): ?string
    {
        return $this->gapInsuranceFlag;
    }

    public function setGapInsuranceFlag(?string $gapInsuranceFlag): self
    {
        $this->gapInsuranceFlag = $gapInsuranceFlag;

        return $this;
    }

    public function getGstOnInterest(): ?float
    {
        return $this->gstOnInterest;
    }

    public function setGstOnInterest(?float $gstOnInterest): self
    {
        $this->gstOnInterest = $gstOnInterest;

        return $this;
    }

    public function getHighKmAdjustmentRate(): ?float
    {
        return $this->highKmAdjustmentRate;
    }

    public function setHighKmAdjustmentRate(?float $highKmAdjustmentRate): self
    {
        $this->highKmAdjustmentRate = $highKmAdjustmentRate;

        return $this;
    }

    /**
     * Inclusion Plans.
     *
     * @return null|QuoteInclusionPlan[]
     */
    public function getInclusionPlans(): ?array
    {
        return $this->inclusionPlans;
    }

    /**
     * Inclusion Plans.
     *
     * @param null|QuoteInclusionPlan[] $inclusionPlans
     */
    public function setInclusionPlans(?array $inclusionPlans): self
    {
        $this->inclusionPlans = $inclusionPlans;

        return $this;
    }

    public function getInsurance(): ?QuoteInsurance
    {
        return $this->insurance;
    }

    public function setInsurance(?QuoteInsurance $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getInsuranceAtFaultFlag(): ?string
    {
        return $this->insuranceAtFaultFlag;
    }

    public function setInsuranceAtFaultFlag(?string $insuranceAtFaultFlag): self
    {
        $this->insuranceAtFaultFlag = $insuranceAtFaultFlag;

        return $this;
    }

    public function getInsuranceConvictionFlag(): ?string
    {
        return $this->insuranceConvictionFlag;
    }

    public function setInsuranceConvictionFlag(?string $insuranceConvictionFlag): self
    {
        $this->insuranceConvictionFlag = $insuranceConvictionFlag;

        return $this;
    }

    /**
     * Insurance Disclosures.
     *
     * @return null|QuoteInsuranceDisclosure[]
     */
    public function getInsuranceDisclosures(): ?array
    {
        return $this->insuranceDisclosures;
    }

    /**
     * Insurance Disclosures.
     *
     * @param null|QuoteInsuranceDisclosure[] $insuranceDisclosures
     */
    public function setInsuranceDisclosures(?array $insuranceDisclosures): self
    {
        $this->insuranceDisclosures = $insuranceDisclosures;

        return $this;
    }

    /**
     * Insurance Loading Types.
     */
    public function getInsuranceLoadingTypes(): ?QuoteInsuranceLoadingTypes
    {
        return $this->insuranceLoadingTypes;
    }

    /**
     * Insurance Loading Types.
     */
    public function setInsuranceLoadingTypes(?QuoteInsuranceLoadingTypes $insuranceLoadingTypes): self
    {
        $this->insuranceLoadingTypes = $insuranceLoadingTypes;

        return $this;
    }

    public function getInsuranceLossLicenceFlag(): ?string
    {
        return $this->insuranceLossLicenceFlag;
    }

    public function setInsuranceLossLicenceFlag(?string $insuranceLossLicenceFlag): self
    {
        $this->insuranceLossLicenceFlag = $insuranceLossLicenceFlag;

        return $this;
    }

    public function getInsurerLocationId(): ?string
    {
        return $this->insurerLocationId;
    }

    public function setInsurerLocationId(?string $insurerLocationId): self
    {
        $this->insurerLocationId = $insurerLocationId;

        return $this;
    }

    public function getInsurerLocationPostcode(): ?string
    {
        return $this->insurerLocationPostcode;
    }

    public function setInsurerLocationPostcode(?string $insurerLocationPostcode): self
    {
        $this->insurerLocationPostcode = $insurerLocationPostcode;

        return $this;
    }

    public function getInterestOnResidual(): ?float
    {
        return $this->interestOnResidual;
    }

    public function setInterestOnResidual(?float $interestOnResidual): self
    {
        $this->interestOnResidual = $interestOnResidual;

        return $this;
    }

    public function getLesseeRate(): ?float
    {
        return $this->lesseeRate;
    }

    public function setLesseeRate(?float $lesseeRate): self
    {
        $this->lesseeRate = $lesseeRate;

        return $this;
    }

    public function getListPriceGst(): ?float
    {
        return $this->listPriceGst;
    }

    public function setListPriceGst(?float $listPriceGst): self
    {
        $this->listPriceGst = $listPriceGst;

        return $this;
    }

    public function getListPriceNet(): ?float
    {
        return $this->listPriceNet;
    }

    public function setListPriceNet(?float $listPriceNet): self
    {
        $this->listPriceNet = $listPriceNet;

        return $this;
    }

    public function getLocationName(): ?string
    {
        return $this->locationName;
    }

    public function setLocationName(?string $locationName): self
    {
        $this->locationName = $locationName;

        return $this;
    }

    public function getLocationRegistrationId(): ?string
    {
        return $this->locationRegistrationId;
    }

    public function setLocationRegistrationId(?string $locationRegistrationId): self
    {
        $this->locationRegistrationId = $locationRegistrationId;

        return $this;
    }

    public function getLockComprehensiveInsuranceFlag(): ?string
    {
        return $this->lockComprehensiveInsuranceFlag;
    }

    public function setLockComprehensiveInsuranceFlag(?string $lockComprehensiveInsuranceFlag): self
    {
        $this->lockComprehensiveInsuranceFlag = $lockComprehensiveInsuranceFlag;

        return $this;
    }

    public function getLockDealerDiscountFlag(): ?string
    {
        return $this->lockDealerDiscountFlag;
    }

    public function setLockDealerDiscountFlag(?string $lockDealerDiscountFlag): self
    {
        $this->lockDealerDiscountFlag = $lockDealerDiscountFlag;

        return $this;
    }

    public function getLockDiscountFlag(): ?string
    {
        return $this->lockDiscountFlag;
    }

    public function setLockDiscountFlag(?string $lockDiscountFlag): self
    {
        $this->lockDiscountFlag = $lockDiscountFlag;

        return $this;
    }

    public function getLockFbtValueFlag(): ?string
    {
        return $this->lockFbtValueFlag;
    }

    public function setLockFbtValueFlag(?string $lockFbtValueFlag): self
    {
        $this->lockFbtValueFlag = $lockFbtValueFlag;

        return $this;
    }

    public function getLockLeaseRateFlag(): ?string
    {
        return $this->lockLeaseRateFlag;
    }

    public function setLockLeaseRateFlag(?string $lockLeaseRateFlag): self
    {
        $this->lockLeaseRateFlag = $lockLeaseRateFlag;

        return $this;
    }

    public function getLockLuxuryCarTaxFlag(): ?string
    {
        return $this->lockLuxuryCarTaxFlag;
    }

    public function setLockLuxuryCarTaxFlag(?string $lockLuxuryCarTaxFlag): self
    {
        $this->lockLuxuryCarTaxFlag = $lockLuxuryCarTaxFlag;

        return $this;
    }

    public function getLockPurchaseStampDutyFlag(): ?string
    {
        return $this->lockPurchaseStampDutyFlag;
    }

    public function setLockPurchaseStampDutyFlag(?string $lockPurchaseStampDutyFlag): self
    {
        $this->lockPurchaseStampDutyFlag = $lockPurchaseStampDutyFlag;

        return $this;
    }

    public function getLockQuoteFlag(): ?string
    {
        return $this->lockQuoteFlag;
    }

    public function setLockQuoteFlag(?string $lockQuoteFlag): self
    {
        $this->lockQuoteFlag = $lockQuoteFlag;

        return $this;
    }

    public function getLockRedundancyInsuranceFlag(): ?string
    {
        return $this->lockRedundancyInsuranceFlag;
    }

    public function setLockRedundancyInsuranceFlag(?string $lockRedundancyInsuranceFlag): self
    {
        $this->lockRedundancyInsuranceFlag = $lockRedundancyInsuranceFlag;

        return $this;
    }

    public function getLockResidualFlag(): ?string
    {
        return $this->lockResidualFlag;
    }

    public function setLockResidualFlag(?string $lockResidualFlag): self
    {
        $this->lockResidualFlag = $lockResidualFlag;

        return $this;
    }

    public function getLookAhead(): ?float
    {
        return $this->lookAhead;
    }

    public function setLookAhead(?float $lookAhead): self
    {
        $this->lookAhead = $lookAhead;

        return $this;
    }

    public function getLti(): ?QuoteLti
    {
        return $this->lti;
    }

    public function setLti(?QuoteLti $lti): self
    {
        $this->lti = $lti;

        return $this;
    }

    public function getLuxuryCarTax(): ?float
    {
        return $this->luxuryCarTax;
    }

    public function setLuxuryCarTax(?float $luxuryCarTax): self
    {
        $this->luxuryCarTax = $luxuryCarTax;

        return $this;
    }

    public function getLuxuryCarTaxExemptFlag(): ?string
    {
        return $this->luxuryCarTaxExemptFlag;
    }

    public function setLuxuryCarTaxExemptFlag(?string $luxuryCarTaxExemptFlag): self
    {
        $this->luxuryCarTaxExemptFlag = $luxuryCarTaxExemptFlag;

        return $this;
    }

    public function getLuxuryCharge(): ?float
    {
        return $this->luxuryCharge;
    }

    public function setLuxuryCharge(?float $luxuryCharge): self
    {
        $this->luxuryCharge = $luxuryCharge;

        return $this;
    }

    public function getMaintenanceService(): ?QuoteMaintenanceService
    {
        return $this->maintenanceService;
    }

    public function setMaintenanceService(?QuoteMaintenanceService $maintenanceService): self
    {
        $this->maintenanceService = $maintenanceService;

        return $this;
    }

    public function getMarginGst(): ?float
    {
        return $this->marginGst;
    }

    public function setMarginGst(?float $marginGst): self
    {
        $this->marginGst = $marginGst;

        return $this;
    }

    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }

    public function setMarginNet(?float $marginNet): self
    {
        $this->marginNet = $marginNet;

        return $this;
    }

    public function getMonthsInArrears(): ?float
    {
        return $this->monthsInArrears;
    }

    public function setMonthsInArrears(?float $monthsInArrears): self
    {
        $this->monthsInArrears = $monthsInArrears;

        return $this;
    }

    public function getMortgageDuty(): ?float
    {
        return $this->mortgageDuty;
    }

    public function setMortgageDuty(?float $mortgageDuty): self
    {
        $this->mortgageDuty = $mortgageDuty;

        return $this;
    }

    public function getNewUsed(): ?string
    {
        return $this->newUsed;
    }

    public function setNewUsed(?string $newUsed): self
    {
        $this->newUsed = $newUsed;

        return $this;
    }

    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero value.
     */
    public function getOdometer(): ?float
    {
        return $this->odometer;
    }

    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero value.
     */
    public function setOdometer(?float $odometer): self
    {
        $this->odometer = $odometer;

        return $this;
    }

    public function getOnRoadPriceGst(): ?float
    {
        return $this->onRoadPriceGst;
    }

    public function setOnRoadPriceGst(?float $onRoadPriceGst): self
    {
        $this->onRoadPriceGst = $onRoadPriceGst;

        return $this;
    }

    public function getOnRoadPriceNet(): ?float
    {
        return $this->onRoadPriceNet;
    }

    public function setOnRoadPriceNet(?float $onRoadPriceNet): self
    {
        $this->onRoadPriceNet = $onRoadPriceNet;

        return $this;
    }

    public function getOpportunityId(): ?string
    {
        return $this->opportunityId;
    }

    public function setOpportunityId(?string $opportunityId): self
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    public function getOpportunityNumber(): ?string
    {
        return $this->opportunityNumber;
    }

    public function setOpportunityNumber(?string $opportunityNumber): self
    {
        $this->opportunityNumber = $opportunityNumber;

        return $this;
    }

    public function getOpportunityStageId(): ?string
    {
        return $this->opportunityStageId;
    }

    public function setOpportunityStageId(?string $opportunityStageId): self
    {
        $this->opportunityStageId = $opportunityStageId;

        return $this;
    }

    /**
     * Optional equipment.
     *
     * @return null|QuoteOptionalEquipment[]
     */
    public function getOptionalEquipment(): ?array
    {
        return $this->optionalEquipment;
    }

    /**
     * Optional equipment.
     *
     * @param null|QuoteOptionalEquipment[] $optionalEquipment
     */
    public function setOptionalEquipment(?array $optionalEquipment): self
    {
        $this->optionalEquipment = $optionalEquipment;

        return $this;
    }

    public function getOptionalEquipmentGst(): ?float
    {
        return $this->optionalEquipmentGst;
    }

    public function setOptionalEquipmentGst(?float $optionalEquipmentGst): self
    {
        $this->optionalEquipmentGst = $optionalEquipmentGst;

        return $this;
    }

    public function getOptionalEquipmentNet(): ?float
    {
        return $this->optionalEquipmentNet;
    }

    public function setOptionalEquipmentNet(?float $optionalEquipmentNet): self
    {
        $this->optionalEquipmentNet = $optionalEquipmentNet;

        return $this;
    }

    public function getOriginatorFee(): ?float
    {
        return $this->originatorFee;
    }

    public function setOriginatorFee(?float $originatorFee): self
    {
        $this->originatorFee = $originatorFee;

        return $this;
    }

    public function getOriginatorId(): ?string
    {
        return $this->originatorId;
    }

    public function setOriginatorId(?string $originatorId): self
    {
        $this->originatorId = $originatorId;

        return $this;
    }

    public function getOtherBrokerage(): ?float
    {
        return $this->otherBrokerage;
    }

    public function setOtherBrokerage(?float $otherBrokerage): self
    {
        $this->otherBrokerage = $otherBrokerage;

        return $this;
    }

    public function getPackageAdminFee(): ?float
    {
        return $this->packageAdminFee;
    }

    public function setPackageAdminFee(?float $packageAdminFee): self
    {
        $this->packageAdminFee = $packageAdminFee;

        return $this;
    }

    public function getPackagingAdviceFee(): ?float
    {
        return $this->packagingAdviceFee;
    }

    public function setPackagingAdviceFee(?float $packagingAdviceFee): self
    {
        $this->packagingAdviceFee = $packagingAdviceFee;

        return $this;
    }

    public function getParentQuoteId(): ?string
    {
        return $this->parentQuoteId;
    }

    public function setParentQuoteId(?string $parentQuoteId): self
    {
        $this->parentQuoteId = $parentQuoteId;

        return $this;
    }

    public function getPayCycleBillingPeriods(): ?float
    {
        return $this->payCycleBillingPeriods;
    }

    public function setPayCycleBillingPeriods(?float $payCycleBillingPeriods): self
    {
        $this->payCycleBillingPeriods = $payCycleBillingPeriods;

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

    public function getPeriodsDeferred(): ?float
    {
        return $this->periodsDeferred;
    }

    public function setPeriodsDeferred(?float $periodsDeferred): self
    {
        $this->periodsDeferred = $periodsDeferred;

        return $this;
    }

    public function getPlateYear(): ?float
    {
        return $this->plateYear;
    }

    public function setPlateYear(?float $plateYear): self
    {
        $this->plateYear = $plateYear;

        return $this;
    }

    public function getPolicyOwnerType(): ?string
    {
        return $this->policyOwnerType;
    }

    public function setPolicyOwnerType(?string $policyOwnerType): self
    {
        $this->policyOwnerType = $policyOwnerType;

        return $this;
    }

    public function getPostTaxExisting(): ?float
    {
        return $this->postTaxExisting;
    }

    public function setPostTaxExisting(?float $postTaxExisting): self
    {
        $this->postTaxExisting = $postTaxExisting;

        return $this;
    }

    public function getPostingMapId(): ?string
    {
        return $this->postingMapId;
    }

    public function setPostingMapId(?string $postingMapId): self
    {
        $this->postingMapId = $postingMapId;

        return $this;
    }

    public function getPreTaxExisting(): ?float
    {
        return $this->preTaxExisting;
    }

    public function setPreTaxExisting(?float $preTaxExisting): self
    {
        $this->preTaxExisting = $preTaxExisting;

        return $this;
    }

    public function getPremiumPlatesNet(): ?float
    {
        return $this->premiumPlatesNet;
    }

    public function setPremiumPlatesNet(?float $premiumPlatesNet): self
    {
        $this->premiumPlatesNet = $premiumPlatesNet;

        return $this;
    }

    /**
     * (Optional) Must be a positive number.
     */
    public function getPreviousFbtValue(): ?float
    {
        return $this->previousFbtValue;
    }

    /**
     * (Optional) Must be a positive number.
     */
    public function setPreviousFbtValue(?float $previousFbtValue): self
    {
        $this->previousFbtValue = $previousFbtValue;

        return $this;
    }

    public function getPriceComment(): ?string
    {
        return $this->priceComment;
    }

    public function setPriceComment(?string $priceComment): self
    {
        $this->priceComment = $priceComment;

        return $this;
    }

    public function getPricingReceived(): ?string
    {
        return $this->pricingReceived;
    }

    public function setPricingReceived(?string $pricingReceived): self
    {
        $this->pricingReceived = $pricingReceived;

        return $this;
    }

    public function getPricingReference(): ?string
    {
        return $this->pricingReference;
    }

    public function setPricingReference(?string $pricingReference): self
    {
        $this->pricingReference = $pricingReference;

        return $this;
    }

    public function getPricingRequested(): ?string
    {
        return $this->pricingRequested;
    }

    public function setPricingRequested(?string $pricingRequested): self
    {
        $this->pricingRequested = $pricingRequested;

        return $this;
    }

    public function getProcurementFee(): ?float
    {
        return $this->procurementFee;
    }

    public function setProcurementFee(?float $procurementFee): self
    {
        $this->procurementFee = $procurementFee;

        return $this;
    }

    public function getProcurementFlag(): ?string
    {
        return $this->procurementFlag;
    }

    public function setProcurementFlag(?string $procurementFlag): self
    {
        $this->procurementFlag = $procurementFlag;

        return $this;
    }

    public function getPurchaseStampDuty(): ?float
    {
        return $this->purchaseStampDuty;
    }

    public function setPurchaseStampDuty(?float $purchaseStampDuty): self
    {
        $this->purchaseStampDuty = $purchaseStampDuty;

        return $this;
    }

    public function getPurchaseStampDutyExemptFlag(): ?string
    {
        return $this->purchaseStampDutyExemptFlag;
    }

    public function setPurchaseStampDutyExemptFlag(?string $purchaseStampDutyExemptFlag): self
    {
        $this->purchaseStampDutyExemptFlag = $purchaseStampDutyExemptFlag;

        return $this;
    }

    public function getQuoteDate(): ?\DateTime
    {
        return $this->quoteDate;
    }

    public function setQuoteDate(?\DateTime $quoteDate): self
    {
        $this->quoteDate = $quoteDate;

        return $this;
    }

    public function getQuoteStatus(): ?QuoteStatuses
    {
        return $this->quoteStatus;
    }

    public function setQuoteStatus(?QuoteStatuses $quoteStatus): self
    {
        $this->quoteStatus = $quoteStatus;

        return $this;
    }

    public function getQuoteStatusId(): ?string
    {
        return $this->quoteStatusId;
    }

    public function setQuoteStatusId(?string $quoteStatusId): self
    {
        $this->quoteStatusId = $quoteStatusId;

        return $this;
    }

    public function getQuoteSubStatusId(): ?string
    {
        return $this->quoteSubStatusId;
    }

    public function setQuoteSubStatusId(?string $quoteSubStatusId): self
    {
        $this->quoteSubStatusId = $quoteSubStatusId;

        return $this;
    }

    public function getRebateGst(): ?float
    {
        return $this->rebateGst;
    }

    public function setRebateGst(?float $rebateGst): self
    {
        $this->rebateGst = $rebateGst;

        return $this;
    }

    public function getRebateNet(): ?float
    {
        return $this->rebateNet;
    }

    public function setRebateNet(?float $rebateNet): self
    {
        $this->rebateNet = $rebateNet;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReducedSuperFlag()
    {
        return $this->reducedSuperFlag;
    }

    /**
     * @param mixed $reducedSuperFlag
     */
    public function setReducedSuperFlag($reducedSuperFlag): self
    {
        $this->reducedSuperFlag = $reducedSuperFlag;

        return $this;
    }

    public function getRedundancyInsurance(): ?float
    {
        return $this->redundancyInsurance;
    }

    public function setRedundancyInsurance(?float $redundancyInsurance): self
    {
        $this->redundancyInsurance = $redundancyInsurance;

        return $this;
    }

    public function getRedundancyInsuranceCost(): ?float
    {
        return $this->redundancyInsuranceCost;
    }

    public function setRedundancyInsuranceCost(?float $redundancyInsuranceCost): self
    {
        $this->redundancyInsuranceCost = $redundancyInsuranceCost;

        return $this;
    }

    public function getRedundancyInsuranceFlag(): ?string
    {
        return $this->redundancyInsuranceFlag;
    }

    public function setRedundancyInsuranceFlag(?string $redundancyInsuranceFlag): self
    {
        $this->redundancyInsuranceFlag = $redundancyInsuranceFlag;

        return $this;
    }

    public function getRedundancyInsuranceRate(): ?float
    {
        return $this->redundancyInsuranceRate;
    }

    public function setRedundancyInsuranceRate(?float $redundancyInsuranceRate): self
    {
        $this->redundancyInsuranceRate = $redundancyInsuranceRate;

        return $this;
    }

    public function getRedundancyInsuranceValidationFlag(): ?string
    {
        return $this->redundancyInsuranceValidationFlag;
    }

    public function setRedundancyInsuranceValidationFlag(?string $redundancyInsuranceValidationFlag): self
    {
        $this->redundancyInsuranceValidationFlag = $redundancyInsuranceValidationFlag;

        return $this;
    }

    public function getRegCtp(): ?QuoteRegCtp
    {
        return $this->regCtp;
    }

    public function setRegCtp(?QuoteRegCtp $regCtp): self
    {
        $this->regCtp = $regCtp;

        return $this;
    }

    public function getRegInitialNet(): ?float
    {
        return $this->regInitialNet;
    }

    public function setRegInitialNet(?float $regInitialNet): self
    {
        $this->regInitialNet = $regInitialNet;

        return $this;
    }

    public function getReliefVehicle(): ?QuoteReliefVehicle
    {
        return $this->reliefVehicle;
    }

    public function setReliefVehicle(?QuoteReliefVehicle $reliefVehicle): self
    {
        $this->reliefVehicle = $reliefVehicle;

        return $this;
    }

    public function getResidualBasis(): ?string
    {
        return $this->residualBasis;
    }

    public function setResidualBasis(?string $residualBasis): self
    {
        $this->residualBasis = $residualBasis;

        return $this;
    }

    public function getResidualCashPoolGst(): ?float
    {
        return $this->residualCashPoolGst;
    }

    public function setResidualCashPoolGst(?float $residualCashPoolGst): self
    {
        $this->residualCashPoolGst = $residualCashPoolGst;

        return $this;
    }

    public function getResidualCashPoolNet(): ?float
    {
        return $this->residualCashPoolNet;
    }

    public function setResidualCashPoolNet(?float $residualCashPoolNet): self
    {
        $this->residualCashPoolNet = $residualCashPoolNet;

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

    public function getResidualGst(): ?float
    {
        return $this->residualGst;
    }

    public function setResidualGst(?float $residualGst): self
    {
        $this->residualGst = $residualGst;

        return $this;
    }

    public function getResidualInsurance(): ?float
    {
        return $this->residualInsurance;
    }

    public function setResidualInsurance(?float $residualInsurance): self
    {
        $this->residualInsurance = $residualInsurance;

        return $this;
    }

    public function getResidualInsuranceRate(): ?float
    {
        return $this->residualInsuranceRate;
    }

    public function setResidualInsuranceRate(?float $residualInsuranceRate): self
    {
        $this->residualInsuranceRate = $residualInsuranceRate;

        return $this;
    }

    public function getResidualNet(): ?float
    {
        return $this->residualNet;
    }

    public function setResidualNet(?float $residualNet): self
    {
        $this->residualNet = $residualNet;

        return $this;
    }

    public function getResidualRate(): ?float
    {
        return $this->residualRate;
    }

    public function setResidualRate(?float $residualRate): self
    {
        $this->residualRate = $residualRate;

        return $this;
    }

    public function getResidualRateGross(): ?float
    {
        return $this->residualRateGross;
    }

    public function setResidualRateGross(?float $residualRateGross): self
    {
        $this->residualRateGross = $residualRateGross;

        return $this;
    }

    public function getResidualRateNet(): ?float
    {
        return $this->residualRateNet;
    }

    public function setResidualRateNet(?float $residualRateNet): self
    {
        $this->residualRateNet = $residualRateNet;

        return $this;
    }

    public function getRevsFee(): ?float
    {
        return $this->revsFee;
    }

    public function setRevsFee(?float $revsFee): self
    {
        $this->revsFee = $revsFee;

        return $this;
    }

    public function getRoadsideAssistance(): ?QuoteRoadsideAssistance
    {
        return $this->roadsideAssistance;
    }

    public function setRoadsideAssistance(?QuoteRoadsideAssistance $roadsideAssistance): self
    {
        $this->roadsideAssistance = $roadsideAssistance;

        return $this;
    }

    public function getSmallDamageRepairs(): ?QuoteSmallDamageRepairs
    {
        return $this->smallDamageRepairs;
    }

    public function setSmallDamageRepairs(?QuoteSmallDamageRepairs $smallDamageRepairs): self
    {
        $this->smallDamageRepairs = $smallDamageRepairs;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    public function getSuperannuation(): ?float
    {
        return $this->superannuation;
    }

    public function setSuperannuation(?float $superannuation): self
    {
        $this->superannuation = $superannuation;

        return $this;
    }

    public function getSupplierIdBroker(): ?string
    {
        return $this->supplierIdBroker;
    }

    public function setSupplierIdBroker(?string $supplierIdBroker): self
    {
        $this->supplierIdBroker = $supplierIdBroker;

        return $this;
    }

    public function getSupplierIdDealer(): ?string
    {
        return $this->supplierIdDealer;
    }

    public function setSupplierIdDealer(?string $supplierIdDealer): self
    {
        $this->supplierIdDealer = $supplierIdDealer;

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

    public function getSupplierIdInsurer(): ?string
    {
        return $this->supplierIdInsurer;
    }

    public function setSupplierIdInsurer(?string $supplierIdInsurer): self
    {
        $this->supplierIdInsurer = $supplierIdInsurer;

        return $this;
    }

    public function getSupplierIdResidualInsurer(): ?string
    {
        return $this->supplierIdResidualInsurer;
    }

    public function setSupplierIdResidualInsurer(?string $supplierIdResidualInsurer): self
    {
        $this->supplierIdResidualInsurer = $supplierIdResidualInsurer;

        return $this;
    }

    public function getTerm(): ?float
    {
        return $this->term;
    }

    public function setTerm(?float $term): self
    {
        $this->term = $term;

        return $this;
    }

    public function getTotalBrokerage(): ?float
    {
        return $this->totalBrokerage;
    }

    public function setTotalBrokerage(?float $totalBrokerage): self
    {
        $this->totalBrokerage = $totalBrokerage;

        return $this;
    }

    public function getTradeInAmountGst(): ?float
    {
        return $this->tradeInAmountGst;
    }

    public function setTradeInAmountGst(?float $tradeInAmountGst): self
    {
        $this->tradeInAmountGst = $tradeInAmountGst;

        return $this;
    }

    public function getTradeInAmountNet(): ?float
    {
        return $this->tradeInAmountNet;
    }

    public function setTradeInAmountNet(?float $tradeInAmountNet): self
    {
        $this->tradeInAmountNet = $tradeInAmountNet;

        return $this;
    }

    public function getTradeInRegNo(): ?string
    {
        return $this->tradeInRegNo;
    }

    public function setTradeInRegNo(?string $tradeInRegNo): self
    {
        $this->tradeInRegNo = $tradeInRegNo;

        return $this;
    }

    public function getTradeInVehicleDescription(): ?string
    {
        return $this->tradeInVehicleDescription;
    }

    public function setTradeInVehicleDescription(?string $tradeInVehicleDescription): self
    {
        $this->tradeInVehicleDescription = $tradeInVehicleDescription;

        return $this;
    }

    public function getTrimPreference(): ?string
    {
        return $this->trimPreference;
    }

    public function setTrimPreference(?string $trimPreference): self
    {
        $this->trimPreference = $trimPreference;

        return $this;
    }

    public function getTyres(): ?QuoteTyres
    {
        return $this->tyres;
    }

    public function setTyres(?QuoteTyres $tyres): self
    {
        $this->tyres = $tyres;

        return $this;
    }

    public function getTyreRimInsurance(): ?QuoteTyreRimInsurance
    {
        return $this->tyreRimInsurance;
    }

    public function setTyreRimInsurance(?QuoteTyreRimInsurance $tyreRimInsurance): self
    {
        $this->tyreRimInsurance = $tyreRimInsurance;

        return $this;
    }

    public function getTyreRimInsuranceFlag(): ?string
    {
        return $this->tyreRimInsuranceFlag;
    }

    public function setTyreRimInsuranceFlag(?string $tyreRimInsuranceFlag): self
    {
        $this->tyreRimInsuranceFlag = $tyreRimInsuranceFlag;

        return $this;
    }

    public function getUsageAdjustmentRate(): ?float
    {
        return $this->usageAdjustmentRate;
    }

    public function setUsageAdjustmentRate(?float $usageAdjustmentRate): self
    {
        $this->usageAdjustmentRate = $usageAdjustmentRate;

        return $this;
    }

    public function getUserIdAssigned(): ?string
    {
        return $this->userIdAssigned;
    }

    public function setUserIdAssigned(?string $userIdAssigned): self
    {
        $this->userIdAssigned = $userIdAssigned;

        return $this;
    }

    public function getUserIdClientManager(): ?string
    {
        return $this->userIdClientManager;
    }

    public function setUserIdClientManager(?string $userIdClientManager): self
    {
        $this->userIdClientManager = $userIdClientManager;

        return $this;
    }

    public function getVariantAdjustmentRate(): ?float
    {
        return $this->variantAdjustmentRate;
    }

    public function setVariantAdjustmentRate(?float $variantAdjustmentRate): self
    {
        $this->variantAdjustmentRate = $variantAdjustmentRate;

        return $this;
    }

    public function getVariantBonusId(): ?string
    {
        return $this->variantBonusId;
    }

    public function setVariantBonusId(?string $variantBonusId): self
    {
        $this->variantBonusId = $variantBonusId;

        return $this;
    }

    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function getVehicleMaintenanceProgram(): ?QuoteVehicleMaintenanceProgram
    {
        return $this->vehicleMaintenanceProgram;
    }

    public function setVehicleMaintenanceProgram(?QuoteVehicleMaintenanceProgram $vehicleMaintenanceProgram): self
    {
        $this->vehicleMaintenanceProgram = $vehicleMaintenanceProgram;

        return $this;
    }

    public function getVehicleTrackingSystemFlag(): ?string
    {
        return $this->vehicleTrackingSystemFlag;
    }

    public function setVehicleTrackingSystemFlag(?string $vehicleTrackingSystemFlag): self
    {
        $this->vehicleTrackingSystemFlag = $vehicleTrackingSystemFlag;

        return $this;
    }

    public function getVehicleUsageTypeId(): ?string
    {
        return $this->vehicleUsageTypeId;
    }

    public function setVehicleUsageTypeId(?string $vehicleUsageTypeId): self
    {
        $this->vehicleUsageTypeId = $vehicleUsageTypeId;

        return $this;
    }

    public function getWalkaway(): ?QuoteWalkaway
    {
        return $this->walkaway;
    }

    public function setWalkaway(?QuoteWalkaway $walkaway): self
    {
        $this->walkaway = $walkaway;

        return $this;
    }

    public function getWalkawayFlag(): ?string
    {
        return $this->walkawayFlag;
    }

    public function setWalkawayFlag(?string $walkawayFlag): self
    {
        $this->walkawayFlag = $walkawayFlag;

        return $this;
    }

    public function getWarrantOfFitness(): ?QuoteWarrantOfFitness
    {
        return $this->warrantOfFitness;
    }

    public function setWarrantOfFitness(?QuoteWarrantOfFitness $warrantOfFitness): self
    {
        $this->warrantOfFitness = $warrantOfFitness;

        return $this;
    }

    public function getWarrantyKms(): ?float
    {
        return $this->warrantyKms;
    }

    public function setWarrantyKms(?float $warrantyKms): self
    {
        $this->warrantyKms = $warrantyKms;

        return $this;
    }

    public function getWarrantyMths(): ?float
    {
        return $this->warrantyMths;
    }

    public function setWarrantyMths(?float $warrantyMths): self
    {
        $this->warrantyMths = $warrantyMths;

        return $this;
    }
}
