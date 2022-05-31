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

class QuotePatch
{
    /**
     * @var null|string
     */
    protected $afterHoursAssistanceFlag = 'no';
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
    protected $applicationStatusFlag;
    /**
     * @var null|mixed
     */
    protected $bespokeFieldValues;
    /**
     * @var null|QuotePatchCarbonEmissionsOffset
     */
    protected $carbonEmissionsOffset;
    /**
     * @var null|string
     */
    protected $clientContactName;
    /**
     * @var null|string
     */
    protected $clientEmail;
    /**
     * @var null|string
     */
    protected $clientFax;
    /**
     * @var null|string
     */
    protected $clientName;
    /**
     * @var null|string
     */
    protected $clientPhone;
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
    protected $depositGst;
    /**
     * @var null|float
     */
    protected $depositNet;
    /**
     * @var null|float
     */
    protected $disposalFee;
    /**
     * @var null|string
     */
    protected $disposalFlag = 'no';
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
    protected $driverPhone;
    /**
     * (Optional) Will be populated from Driver object (if specified).
     *
     * @var null|string
     */
    protected $driverGivenName;
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
     * @var null|string
     */
    protected $employerFbtType = 'full-fbt-payable';
    /**
     * @var null|string
     */
    protected $financeTypeId;
    /**
     * @var null|QuotePatchFuel
     */
    protected $fuel;
    /**
     * @var null|string
     */
    protected $gapInsuranceFlag;
    /**
     * @var null|QuotePatchInclusionPlansItem[]
     */
    protected $inclusionPlans;
    /**
     * @var null|QuotePatchInsurance
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
     * Insurance Loading Types.
     *
     * @var null|QuotePatchInsuranceLoadingTypes
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
     * @var null|string
     */
    protected $locationName;
    /**
     * @var null|string
     */
    protected $lockComprehensiveInsuranceFlag = 'no';
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
     * @var null|string
     */
    protected $originatorId;
    /**
     * @var null|string
     */
    protected $parentQuoteId;
    /**
     * @var null|string
     */
    protected $policyOwnerType = 'driver';
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
     * @var null|string
     */
    protected $quoteStatusId;
    /**
     * @var null|QuotePatchRegCtp
     */
    protected $regCtp;
    /**
     * @var null|QuotePatchRoadsideAssistance
     */
    protected $roadsideAssistance;
    /**
     * @var null|string
     */
    protected $supplierIdDealer;
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
    protected $trimPreference;
    /**
     * @var null|string
     */
    protected $userIdAssigned;
    /**
     * @var null|string
     */
    protected $userIdClientManager;
    /**
     * @var null|QuotePatchVehicleMaintenanceProgram
     */
    protected $vehicleMaintenanceProgram;
    /**
     * @var null|string
     */
    protected $vehicleTrackingSystemFlag;
    /**
     * Override warning validation. If not specified, defaults to 'no'.
     *
     * @var null|string
     */
    protected $overrideWarningsFlag;

    public function getAfterHoursAssistanceFlag(): ?string
    {
        return $this->afterHoursAssistanceFlag;
    }

    public function setAfterHoursAssistanceFlag(?string $afterHoursAssistanceFlag): self
    {
        $this->afterHoursAssistanceFlag = $afterHoursAssistanceFlag;

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

    public function getApplicationStatusFlag(): ?string
    {
        return $this->applicationStatusFlag;
    }

    public function setApplicationStatusFlag(?string $applicationStatusFlag): self
    {
        $this->applicationStatusFlag = $applicationStatusFlag;

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

    public function getCarbonEmissionsOffset(): ?QuotePatchCarbonEmissionsOffset
    {
        return $this->carbonEmissionsOffset;
    }

    public function setCarbonEmissionsOffset(?QuotePatchCarbonEmissionsOffset $carbonEmissionsOffset): self
    {
        $this->carbonEmissionsOffset = $carbonEmissionsOffset;

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

    public function getEmployerFbtType(): ?string
    {
        return $this->employerFbtType;
    }

    public function setEmployerFbtType(?string $employerFbtType): self
    {
        $this->employerFbtType = $employerFbtType;

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

    public function getFuel(): ?QuotePatchFuel
    {
        return $this->fuel;
    }

    public function setFuel(?QuotePatchFuel $fuel): self
    {
        $this->fuel = $fuel;

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

    /**
     * @return null|QuotePatchInclusionPlansItem[]
     */
    public function getInclusionPlans(): ?array
    {
        return $this->inclusionPlans;
    }

    /**
     * @param null|QuotePatchInclusionPlansItem[] $inclusionPlans
     */
    public function setInclusionPlans(?array $inclusionPlans): self
    {
        $this->inclusionPlans = $inclusionPlans;

        return $this;
    }

    public function getInsurance(): ?QuotePatchInsurance
    {
        return $this->insurance;
    }

    public function setInsurance(?QuotePatchInsurance $insurance): self
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
     * Insurance Loading Types.
     */
    public function getInsuranceLoadingTypes(): ?QuotePatchInsuranceLoadingTypes
    {
        return $this->insuranceLoadingTypes;
    }

    /**
     * Insurance Loading Types.
     */
    public function setInsuranceLoadingTypes(?QuotePatchInsuranceLoadingTypes $insuranceLoadingTypes): self
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

    public function getLocationName(): ?string
    {
        return $this->locationName;
    }

    public function setLocationName(?string $locationName): self
    {
        $this->locationName = $locationName;

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

    public function getOriginatorId(): ?string
    {
        return $this->originatorId;
    }

    public function setOriginatorId(?string $originatorId): self
    {
        $this->originatorId = $originatorId;

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

    public function getPolicyOwnerType(): ?string
    {
        return $this->policyOwnerType;
    }

    public function setPolicyOwnerType(?string $policyOwnerType): self
    {
        $this->policyOwnerType = $policyOwnerType;

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

    public function getQuoteStatusId(): ?string
    {
        return $this->quoteStatusId;
    }

    public function setQuoteStatusId(?string $quoteStatusId): self
    {
        $this->quoteStatusId = $quoteStatusId;

        return $this;
    }

    public function getRegCtp(): ?QuotePatchRegCtp
    {
        return $this->regCtp;
    }

    public function setRegCtp(?QuotePatchRegCtp $regCtp): self
    {
        $this->regCtp = $regCtp;

        return $this;
    }

    public function getRoadsideAssistance(): ?QuotePatchRoadsideAssistance
    {
        return $this->roadsideAssistance;
    }

    public function setRoadsideAssistance(?QuotePatchRoadsideAssistance $roadsideAssistance): self
    {
        $this->roadsideAssistance = $roadsideAssistance;

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

    public function getTrimPreference(): ?string
    {
        return $this->trimPreference;
    }

    public function setTrimPreference(?string $trimPreference): self
    {
        $this->trimPreference = $trimPreference;

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

    public function getVehicleMaintenanceProgram(): ?QuotePatchVehicleMaintenanceProgram
    {
        return $this->vehicleMaintenanceProgram;
    }

    public function setVehicleMaintenanceProgram(?QuotePatchVehicleMaintenanceProgram $vehicleMaintenanceProgram): self
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

    /**
     * Override warning validation. If not specified, defaults to 'no'.
     */
    public function getOverrideWarningsFlag(): ?string
    {
        return $this->overrideWarningsFlag;
    }

    /**
     * Override warning validation. If not specified, defaults to 'no'.
     */
    public function setOverrideWarningsFlag(?string $overrideWarningsFlag): self
    {
        $this->overrideWarningsFlag = $overrideWarningsFlag;

        return $this;
    }
}
