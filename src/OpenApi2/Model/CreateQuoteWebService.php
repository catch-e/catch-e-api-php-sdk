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

class CreateQuoteWebService
{
    /**
     * Salesforce opportunity id.
     *
     * @var null|string
     */
    protected $opportunityId;
    /**
     * Salesforce opportunity.
     *
     * @var null|int
     */
    protected $opportunityNumber;
    /**
     * Catch-e variant identifier.
     *
     * @var null|string
     */
    protected $variantId;
    /**
     * Active Catch-e user_id i.e. not at 'deleted' status.
     *
     * @var null|string
     */
    protected $userIdClientManager;
    /**
     * Quote term. (1 - 60).
     *
     * @var null|int
     */
    protected $term;
    /**
     * Non-zero positive number.
     *
     * @var null|int
     */
    protected $annualKilometres;
    /**
     * State codes, VIC, NSW, ACT, NT, TAS, WA, SA, QLD, NZ. When [gb_controls]country_code is 'AUS' then it must be either 'NSW', 'VIC', 'QLD', 'ACT', 'TAS', 'SA', 'WA', or 'NT'. When [gb_controls]country_code is 'NZ' then it must be 'NZ'.
     *
     * @var null|string
     */
    protected $stateRegistered;
    /**
     * Use this if your insurance set-up is configured by postcode, otherwise location_name should be used. The postcode must be valid for the supplied state_registered. If not passed in the respective postcode from Global Controls 'postcode_by_state_default' will be used to determine the Insurance price.
     *
     * @var null|string
     */
    protected $insurerLocationPostcode;
    /**
     * Catch-e client_code, a short text string identifying the client.
     *
     * @var null|string
     */
    protected $clientCode;
    /**
     * Catch-e client cost centre, a short text string identifying the client cost centre.
     *
     * @var null|string
     */
    protected $costCentre;
    /**
     * Catch-e client division, a short text string identifying the client division.
     *
     * @var null|string
     */
    protected $division;
    /**
     * Annual gross salary.
     *
     * @var null|float
     */
    protected $driverAnnualSalary;
    /**
     * Unique reference used to identify this driver.
     *
     * @var null|string
     */
    protected $driverExternalCode;
    /**
     * Surname of the driver.
     *
     * @var null|string
     */
    protected $driverSurname;
    /**
     * Deal Type field in Salesforce.
     *
     * @var null|string
     */
    protected $dealType;
    /**
     * Quote ID to use as the parent of the new quote.
     *
     * @var null|string
     */
    protected $parentQuoteId;
    /**
     * Numeric dollar value, takes precedent over list_price_net i.e. if this is set then list_price_net is ignored.
     *
     * @var null|float
     */
    protected $listPriceGross;
    /**
     * Numeric dollar value.
     *
     * @var null|float
     */
    protected $listPriceNet;
    /**
     * Numeric dollar value.
     *
     * @var null|float
     */
    protected $listPriceGst;
    /**
     * Sets the FBT Value in the quote and turn on the lock_fbt_value_flag.
     *
     * @var null|float
     */
    protected $fbtValue;
    /**
     * Sets the Purchase Stamp Duty in the quote and turn on the lock_purchase_stamp_duty_flag.
     *
     * @var null|float
     */
    protected $purchaseStampDuty;
    /**
     * Vehicle plate year (1900-2099).
     *
     * @var null|int
     */
    protected $plateYear;
    /**
     * Indicates whether the vehicle is new or used, defaults to 'new'.
     *
     * @var null|string
     */
    protected $newUsed;
    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero integer.
     *
     * @var null|int
     */
    protected $odometer;
    /**
     * Contract type code.
     *
     * @var null|string
     */
    protected $postingMapCode;
    /**
     * Given name.
     *
     * @var null|string
     */
    protected $driverGivenName;
    /**
     * Work phone number.
     *
     * @var null|string
     */
    protected $driverWorkPhone;
    /**
     * Home email.
     *
     * @var null|string
     */
    protected $driverHomeEmail;
    /**
     * Postal / Home address line 1 e.g. Level 1, 30 Coora Road'.
     *
     * @var null|string
     */
    protected $driverAddress1;
    /**
     * Postal / Home address line 2.
     *
     * @var null|string
     */
    protected $driverAddress2;
    /**
     * Postal / Home area e.g. 'Oakleigh South'.
     *
     * @var null|string
     */
    protected $driverArea;
    /**
     * Postal / Home state.
     *
     * @var null|string
     */
    protected $driverState;
    /**
     * Postal / Home postcode.
     *
     * @var null|string
     */
    protected $driverPostcode;
    /**
     * Home phone number for Driver.
     *
     * @var null|string
     */
    protected $driverPhone;
    /**
     * One of no_claims_0_to_5_years, 1_claim_in_12_months, 1_claim_in_1_to_3_years, 2+_claims_0_to_3_years, 3+_claims_in_0_to_5_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     *
     * @var null|string
     */
    protected $insuranceLoadingTypePastClaims;
    /**
     * One of no_loss, loss_in_2_to_5_years, loss_in_0_to_2_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     *
     * @var null|string
     */
    protected $insuranceLoadingTypeLicence;
    /**
     * One of no_drivers_less_than_26_yo, all_drivers, no_drivers_less_than_22_yo. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     *
     * @var null|string
     */
    protected $insuranceLoadingTypeDriverRestriction;
    /**
     * Sets the quote vehicle procurement flag.
     *
     * @var null|string
     */
    protected $procurementFlag;
    /**
     * Override the default Tyre and Rim inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productTyreAndRimFlag;
    /**
     * Override the default NLPI inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productNlpiFlag;
    /**
     * Override the default Walkaway inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productWalkawayFlag;
    /**
     * Override the default Small Damage Repairs profile flag, 'yes' or 'no'. If the quote term does not match one of the SDR profile records, SDR will be checked on but the premium will not calculate.
     *
     * @var null|string
     */
    protected $productSmallDamageRepairsFlag;
    /**
     * Override the default Comprehensive Insurance profile flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productComprehensiveInsuranceFlag;
    /**
     * Override the default Roadside Asistance inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productRoadsideAssistanceFlag;
    /**
     * Override the default Extended Warranty profile flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productExtendedWarrantyFlag;
    /**
     * Override the default Carbon Emissions profile flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productCarbonEmissionsOffsetFlag;
    /**
     * Override the default Vehicle Maintenanace profile flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productVehicleMaintenanceProgramFlag;
    /**
     * Override the default Aftermarket inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $aftermarketRequestedFlag;
    /**
     * Override the default Relief Vehicle inclusion flag, 'yes' or 'no'.
     *
     * @var null|string
     */
    protected $productRvehFlag;
    /**
     * Add the Relief Vehicle monthly cost to the Profile (Quotes / Lease -> 'Monthly Budget').
     *
     * @var null|float
     */
    protected $productRvehAmountNet;
    /**
     * Set the colour preference.
     *
     * @var null|string
     */
    protected $colourPreference;
    /**
     * Set an alternative Financier. This will override the Financier default set on the Quote Defaults and must map to a Supplier with a 'Supplier Type' set to "Financier" on the Suppliers / Account tab.
     *
     * @var null|string
     */
    protected $supplierCodeFinancier;
    /**
     * An alternative to passing the driver_external_code. The driver_id passed in here will be updated with data submitted in this call. If URL contains ‘driver_id=100000’ then, If driver_id match is found, update Driver record (if any changes required). If URL contains ‘driver_id=0’ or not passed then, Do not create a new Driver Record. Simply add the driver_surname to [qt_quotes] driver_surname and driver_annual_salary to [qt_quotes] annual_salary. If URL contains ‘create_new_driver_flag=yes’ then, Create a new Driver.
     *
     * @var null|string
     */
    protected $driverId;
    /**
     * Set this to 'yes' to create a new Driver. Requires driver_external_code if set to 'yes'.
     *
     * @var null|string
     */
    protected $createNewDriverFlag;
    /**
     * Set the Quote 'Assigned' user. Must be an active Catch-e user_id i.e. not at 'deleted' status.
     *
     * @var null|string
     */
    protected $userIdAssigned;
    /**
     * Set the Insurance location you want applied. This will display on the Quotes → Contract tab.
     *
     * @var null|string
     */
    protected $locationName;
    /**
     * Allows you to set the Pay Cycle for this quote. The list of available codes is stored in [gb_pay_cycles]pay_cycle_code. If not passed the Client Pay Cycle will be used.
     *
     * @var null|string
     */
    protected $payCycleCode;
    /**
     * @var null|CreateQuoteWebServiceInclusionsItem[]
     */
    protected $inclusions;
    /**
     * Either yes or no are the only acceptable values to be passed,if the fag is set to yes, If ‘product_lti_flag’ = yes is passed, and only one active “Plan” / “Top Up Benefit” is found, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     *
     * @var null|string
     */
    protected $productLtiFlag;
    /**
     * If the ‘product_lti_plan_code’ passed has only one active “Top Up Benefit”, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     *
     * @var null|string
     */
    protected $productLtiPlanCode;
    /**
     * If more than one active “Top Up Benefit” exists for the “Plan” passed, then a ‘product_lti_top_up_benefit_name’ should be passed as well. The Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     *
     * @var null|string
     */
    protected $productLtiTopUpBenefitName;
    /**
     * User can give a previous lease start date.
     *
     * @var null|string
     */
    protected $previousLeaseStart;
    /**
     * It's optional and can only be a positive number.
     *
     * @var null|float
     */
    protected $previousFbtValue;
    /**
     * If Driver found or new Driver created, Driver's "Mobile" will be updated.
     *
     * @var null|string
     */
    protected $driverMobile;
    /**
     * If Driver found or new Driver created, Driver's "Licence No" will be updated.
     *
     * @var null|string
     */
    protected $driverDriverLicence;
    /**
     * If Driver found or new Driver created, Driver's "Licence State" will be updated.
     *
     * @var null|string
     */
    protected $driverDriverLicenceState;
    /**
     * Must be one of [qt_quote_statuses]description values. Default value is 'requested' if not included.
     *
     * @var null|string
     */
    protected $statusFlag;

    /**
     * Salesforce opportunity id.
     */
    public function getOpportunityId(): ?string
    {
        return $this->opportunityId;
    }

    /**
     * Salesforce opportunity id.
     */
    public function setOpportunityId(?string $opportunityId): self
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    /**
     * Salesforce opportunity.
     */
    public function getOpportunityNumber(): ?int
    {
        return $this->opportunityNumber;
    }

    /**
     * Salesforce opportunity.
     */
    public function setOpportunityNumber(?int $opportunityNumber): self
    {
        $this->opportunityNumber = $opportunityNumber;

        return $this;
    }

    /**
     * Catch-e variant identifier.
     */
    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    /**
     * Catch-e variant identifier.
     */
    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * Active Catch-e user_id i.e. not at 'deleted' status.
     */
    public function getUserIdClientManager(): ?string
    {
        return $this->userIdClientManager;
    }

    /**
     * Active Catch-e user_id i.e. not at 'deleted' status.
     */
    public function setUserIdClientManager(?string $userIdClientManager): self
    {
        $this->userIdClientManager = $userIdClientManager;

        return $this;
    }

    /**
     * Quote term. (1 - 60).
     */
    public function getTerm(): ?int
    {
        return $this->term;
    }

    /**
     * Quote term. (1 - 60).
     */
    public function setTerm(?int $term): self
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Non-zero positive number.
     */
    public function getAnnualKilometres(): ?int
    {
        return $this->annualKilometres;
    }

    /**
     * Non-zero positive number.
     */
    public function setAnnualKilometres(?int $annualKilometres): self
    {
        $this->annualKilometres = $annualKilometres;

        return $this;
    }

    /**
     * State codes, VIC, NSW, ACT, NT, TAS, WA, SA, QLD, NZ. When [gb_controls]country_code is 'AUS' then it must be either 'NSW', 'VIC', 'QLD', 'ACT', 'TAS', 'SA', 'WA', or 'NT'. When [gb_controls]country_code is 'NZ' then it must be 'NZ'.
     */
    public function getStateRegistered(): ?string
    {
        return $this->stateRegistered;
    }

    /**
     * State codes, VIC, NSW, ACT, NT, TAS, WA, SA, QLD, NZ. When [gb_controls]country_code is 'AUS' then it must be either 'NSW', 'VIC', 'QLD', 'ACT', 'TAS', 'SA', 'WA', or 'NT'. When [gb_controls]country_code is 'NZ' then it must be 'NZ'.
     */
    public function setStateRegistered(?string $stateRegistered): self
    {
        $this->stateRegistered = $stateRegistered;

        return $this;
    }

    /**
     * Use this if your insurance set-up is configured by postcode, otherwise location_name should be used. The postcode must be valid for the supplied state_registered. If not passed in the respective postcode from Global Controls 'postcode_by_state_default' will be used to determine the Insurance price.
     */
    public function getInsurerLocationPostcode(): ?string
    {
        return $this->insurerLocationPostcode;
    }

    /**
     * Use this if your insurance set-up is configured by postcode, otherwise location_name should be used. The postcode must be valid for the supplied state_registered. If not passed in the respective postcode from Global Controls 'postcode_by_state_default' will be used to determine the Insurance price.
     */
    public function setInsurerLocationPostcode(?string $insurerLocationPostcode): self
    {
        $this->insurerLocationPostcode = $insurerLocationPostcode;

        return $this;
    }

    /**
     * Catch-e client_code, a short text string identifying the client.
     */
    public function getClientCode(): ?string
    {
        return $this->clientCode;
    }

    /**
     * Catch-e client_code, a short text string identifying the client.
     */
    public function setClientCode(?string $clientCode): self
    {
        $this->clientCode = $clientCode;

        return $this;
    }

    /**
     * Catch-e client cost centre, a short text string identifying the client cost centre.
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }

    /**
     * Catch-e client cost centre, a short text string identifying the client cost centre.
     */
    public function setCostCentre(?string $costCentre): self
    {
        $this->costCentre = $costCentre;

        return $this;
    }

    /**
     * Catch-e client division, a short text string identifying the client division.
     */
    public function getDivision(): ?string
    {
        return $this->division;
    }

    /**
     * Catch-e client division, a short text string identifying the client division.
     */
    public function setDivision(?string $division): self
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Annual gross salary.
     */
    public function getDriverAnnualSalary(): ?float
    {
        return $this->driverAnnualSalary;
    }

    /**
     * Annual gross salary.
     */
    public function setDriverAnnualSalary(?float $driverAnnualSalary): self
    {
        $this->driverAnnualSalary = $driverAnnualSalary;

        return $this;
    }

    /**
     * Unique reference used to identify this driver.
     */
    public function getDriverExternalCode(): ?string
    {
        return $this->driverExternalCode;
    }

    /**
     * Unique reference used to identify this driver.
     */
    public function setDriverExternalCode(?string $driverExternalCode): self
    {
        $this->driverExternalCode = $driverExternalCode;

        return $this;
    }

    /**
     * Surname of the driver.
     */
    public function getDriverSurname(): ?string
    {
        return $this->driverSurname;
    }

    /**
     * Surname of the driver.
     */
    public function setDriverSurname(?string $driverSurname): self
    {
        $this->driverSurname = $driverSurname;

        return $this;
    }

    /**
     * Deal Type field in Salesforce.
     */
    public function getDealType(): ?string
    {
        return $this->dealType;
    }

    /**
     * Deal Type field in Salesforce.
     */
    public function setDealType(?string $dealType): self
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * Quote ID to use as the parent of the new quote.
     */
    public function getParentQuoteId(): ?string
    {
        return $this->parentQuoteId;
    }

    /**
     * Quote ID to use as the parent of the new quote.
     */
    public function setParentQuoteId(?string $parentQuoteId): self
    {
        $this->parentQuoteId = $parentQuoteId;

        return $this;
    }

    /**
     * Numeric dollar value, takes precedent over list_price_net i.e. if this is set then list_price_net is ignored.
     */
    public function getListPriceGross(): ?float
    {
        return $this->listPriceGross;
    }

    /**
     * Numeric dollar value, takes precedent over list_price_net i.e. if this is set then list_price_net is ignored.
     */
    public function setListPriceGross(?float $listPriceGross): self
    {
        $this->listPriceGross = $listPriceGross;

        return $this;
    }

    /**
     * Numeric dollar value.
     */
    public function getListPriceNet(): ?float
    {
        return $this->listPriceNet;
    }

    /**
     * Numeric dollar value.
     */
    public function setListPriceNet(?float $listPriceNet): self
    {
        $this->listPriceNet = $listPriceNet;

        return $this;
    }

    /**
     * Numeric dollar value.
     */
    public function getListPriceGst(): ?float
    {
        return $this->listPriceGst;
    }

    /**
     * Numeric dollar value.
     */
    public function setListPriceGst(?float $listPriceGst): self
    {
        $this->listPriceGst = $listPriceGst;

        return $this;
    }

    /**
     * Sets the FBT Value in the quote and turn on the lock_fbt_value_flag.
     */
    public function getFbtValue(): ?float
    {
        return $this->fbtValue;
    }

    /**
     * Sets the FBT Value in the quote and turn on the lock_fbt_value_flag.
     */
    public function setFbtValue(?float $fbtValue): self
    {
        $this->fbtValue = $fbtValue;

        return $this;
    }

    /**
     * Sets the Purchase Stamp Duty in the quote and turn on the lock_purchase_stamp_duty_flag.
     */
    public function getPurchaseStampDuty(): ?float
    {
        return $this->purchaseStampDuty;
    }

    /**
     * Sets the Purchase Stamp Duty in the quote and turn on the lock_purchase_stamp_duty_flag.
     */
    public function setPurchaseStampDuty(?float $purchaseStampDuty): self
    {
        $this->purchaseStampDuty = $purchaseStampDuty;

        return $this;
    }

    /**
     * Vehicle plate year (1900-2099).
     */
    public function getPlateYear(): ?int
    {
        return $this->plateYear;
    }

    /**
     * Vehicle plate year (1900-2099).
     */
    public function setPlateYear(?int $plateYear): self
    {
        $this->plateYear = $plateYear;

        return $this;
    }

    /**
     * Indicates whether the vehicle is new or used, defaults to 'new'.
     */
    public function getNewUsed(): ?string
    {
        return $this->newUsed;
    }

    /**
     * Indicates whether the vehicle is new or used, defaults to 'new'.
     */
    public function setNewUsed(?string $newUsed): self
    {
        $this->newUsed = $newUsed;

        return $this;
    }

    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero integer.
     */
    public function getOdometer(): ?int
    {
        return $this->odometer;
    }

    /**
     * If 'new_used' is set to 'used' or 'demonstrator' this value must bet set to a non-zero integer.
     */
    public function setOdometer(?int $odometer): self
    {
        $this->odometer = $odometer;

        return $this;
    }

    /**
     * Contract type code.
     */
    public function getPostingMapCode(): ?string
    {
        return $this->postingMapCode;
    }

    /**
     * Contract type code.
     */
    public function setPostingMapCode(?string $postingMapCode): self
    {
        $this->postingMapCode = $postingMapCode;

        return $this;
    }

    /**
     * Given name.
     */
    public function getDriverGivenName(): ?string
    {
        return $this->driverGivenName;
    }

    /**
     * Given name.
     */
    public function setDriverGivenName(?string $driverGivenName): self
    {
        $this->driverGivenName = $driverGivenName;

        return $this;
    }

    /**
     * Work phone number.
     */
    public function getDriverWorkPhone(): ?string
    {
        return $this->driverWorkPhone;
    }

    /**
     * Work phone number.
     */
    public function setDriverWorkPhone(?string $driverWorkPhone): self
    {
        $this->driverWorkPhone = $driverWorkPhone;

        return $this;
    }

    /**
     * Home email.
     */
    public function getDriverHomeEmail(): ?string
    {
        return $this->driverHomeEmail;
    }

    /**
     * Home email.
     */
    public function setDriverHomeEmail(?string $driverHomeEmail): self
    {
        $this->driverHomeEmail = $driverHomeEmail;

        return $this;
    }

    /**
     * Postal / Home address line 1 e.g. Level 1, 30 Coora Road'.
     */
    public function getDriverAddress1(): ?string
    {
        return $this->driverAddress1;
    }

    /**
     * Postal / Home address line 1 e.g. Level 1, 30 Coora Road'.
     */
    public function setDriverAddress1(?string $driverAddress1): self
    {
        $this->driverAddress1 = $driverAddress1;

        return $this;
    }

    /**
     * Postal / Home address line 2.
     */
    public function getDriverAddress2(): ?string
    {
        return $this->driverAddress2;
    }

    /**
     * Postal / Home address line 2.
     */
    public function setDriverAddress2(?string $driverAddress2): self
    {
        $this->driverAddress2 = $driverAddress2;

        return $this;
    }

    /**
     * Postal / Home area e.g. 'Oakleigh South'.
     */
    public function getDriverArea(): ?string
    {
        return $this->driverArea;
    }

    /**
     * Postal / Home area e.g. 'Oakleigh South'.
     */
    public function setDriverArea(?string $driverArea): self
    {
        $this->driverArea = $driverArea;

        return $this;
    }

    /**
     * Postal / Home state.
     */
    public function getDriverState(): ?string
    {
        return $this->driverState;
    }

    /**
     * Postal / Home state.
     */
    public function setDriverState(?string $driverState): self
    {
        $this->driverState = $driverState;

        return $this;
    }

    /**
     * Postal / Home postcode.
     */
    public function getDriverPostcode(): ?string
    {
        return $this->driverPostcode;
    }

    /**
     * Postal / Home postcode.
     */
    public function setDriverPostcode(?string $driverPostcode): self
    {
        $this->driverPostcode = $driverPostcode;

        return $this;
    }

    /**
     * Home phone number for Driver.
     */
    public function getDriverPhone(): ?string
    {
        return $this->driverPhone;
    }

    /**
     * Home phone number for Driver.
     */
    public function setDriverPhone(?string $driverPhone): self
    {
        $this->driverPhone = $driverPhone;

        return $this;
    }

    /**
     * One of no_claims_0_to_5_years, 1_claim_in_12_months, 1_claim_in_1_to_3_years, 2+_claims_0_to_3_years, 3+_claims_in_0_to_5_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function getInsuranceLoadingTypePastClaims(): ?string
    {
        return $this->insuranceLoadingTypePastClaims;
    }

    /**
     * One of no_claims_0_to_5_years, 1_claim_in_12_months, 1_claim_in_1_to_3_years, 2+_claims_0_to_3_years, 3+_claims_in_0_to_5_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function setInsuranceLoadingTypePastClaims(?string $insuranceLoadingTypePastClaims): self
    {
        $this->insuranceLoadingTypePastClaims = $insuranceLoadingTypePastClaims;

        return $this;
    }

    /**
     * One of no_loss, loss_in_2_to_5_years, loss_in_0_to_2_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function getInsuranceLoadingTypeLicence(): ?string
    {
        return $this->insuranceLoadingTypeLicence;
    }

    /**
     * One of no_loss, loss_in_2_to_5_years, loss_in_0_to_2_years. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function setInsuranceLoadingTypeLicence(?string $insuranceLoadingTypeLicence): self
    {
        $this->insuranceLoadingTypeLicence = $insuranceLoadingTypeLicence;

        return $this;
    }

    /**
     * One of no_drivers_less_than_26_yo, all_drivers, no_drivers_less_than_22_yo. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function getInsuranceLoadingTypeDriverRestriction(): ?string
    {
        return $this->insuranceLoadingTypeDriverRestriction;
    }

    /**
     * One of no_drivers_less_than_26_yo, all_drivers, no_drivers_less_than_22_yo. Insert one of the 'loading_code' values stored in [qt_insurance_loading_types].
     */
    public function setInsuranceLoadingTypeDriverRestriction(?string $insuranceLoadingTypeDriverRestriction): self
    {
        $this->insuranceLoadingTypeDriverRestriction = $insuranceLoadingTypeDriverRestriction;

        return $this;
    }

    /**
     * Sets the quote vehicle procurement flag.
     */
    public function getProcurementFlag(): ?string
    {
        return $this->procurementFlag;
    }

    /**
     * Sets the quote vehicle procurement flag.
     */
    public function setProcurementFlag(?string $procurementFlag): self
    {
        $this->procurementFlag = $procurementFlag;

        return $this;
    }

    /**
     * Override the default Tyre and Rim inclusion flag, 'yes' or 'no'.
     */
    public function getProductTyreAndRimFlag(): ?string
    {
        return $this->productTyreAndRimFlag;
    }

    /**
     * Override the default Tyre and Rim inclusion flag, 'yes' or 'no'.
     */
    public function setProductTyreAndRimFlag(?string $productTyreAndRimFlag): self
    {
        $this->productTyreAndRimFlag = $productTyreAndRimFlag;

        return $this;
    }

    /**
     * Override the default NLPI inclusion flag, 'yes' or 'no'.
     */
    public function getProductNlpiFlag(): ?string
    {
        return $this->productNlpiFlag;
    }

    /**
     * Override the default NLPI inclusion flag, 'yes' or 'no'.
     */
    public function setProductNlpiFlag(?string $productNlpiFlag): self
    {
        $this->productNlpiFlag = $productNlpiFlag;

        return $this;
    }

    /**
     * Override the default Walkaway inclusion flag, 'yes' or 'no'.
     */
    public function getProductWalkawayFlag(): ?string
    {
        return $this->productWalkawayFlag;
    }

    /**
     * Override the default Walkaway inclusion flag, 'yes' or 'no'.
     */
    public function setProductWalkawayFlag(?string $productWalkawayFlag): self
    {
        $this->productWalkawayFlag = $productWalkawayFlag;

        return $this;
    }

    /**
     * Override the default Small Damage Repairs profile flag, 'yes' or 'no'. If the quote term does not match one of the SDR profile records, SDR will be checked on but the premium will not calculate.
     */
    public function getProductSmallDamageRepairsFlag(): ?string
    {
        return $this->productSmallDamageRepairsFlag;
    }

    /**
     * Override the default Small Damage Repairs profile flag, 'yes' or 'no'. If the quote term does not match one of the SDR profile records, SDR will be checked on but the premium will not calculate.
     */
    public function setProductSmallDamageRepairsFlag(?string $productSmallDamageRepairsFlag): self
    {
        $this->productSmallDamageRepairsFlag = $productSmallDamageRepairsFlag;

        return $this;
    }

    /**
     * Override the default Comprehensive Insurance profile flag, 'yes' or 'no'.
     */
    public function getProductComprehensiveInsuranceFlag(): ?string
    {
        return $this->productComprehensiveInsuranceFlag;
    }

    /**
     * Override the default Comprehensive Insurance profile flag, 'yes' or 'no'.
     */
    public function setProductComprehensiveInsuranceFlag(?string $productComprehensiveInsuranceFlag): self
    {
        $this->productComprehensiveInsuranceFlag = $productComprehensiveInsuranceFlag;

        return $this;
    }

    /**
     * Override the default Roadside Asistance inclusion flag, 'yes' or 'no'.
     */
    public function getProductRoadsideAssistanceFlag(): ?string
    {
        return $this->productRoadsideAssistanceFlag;
    }

    /**
     * Override the default Roadside Asistance inclusion flag, 'yes' or 'no'.
     */
    public function setProductRoadsideAssistanceFlag(?string $productRoadsideAssistanceFlag): self
    {
        $this->productRoadsideAssistanceFlag = $productRoadsideAssistanceFlag;

        return $this;
    }

    /**
     * Override the default Extended Warranty profile flag, 'yes' or 'no'.
     */
    public function getProductExtendedWarrantyFlag(): ?string
    {
        return $this->productExtendedWarrantyFlag;
    }

    /**
     * Override the default Extended Warranty profile flag, 'yes' or 'no'.
     */
    public function setProductExtendedWarrantyFlag(?string $productExtendedWarrantyFlag): self
    {
        $this->productExtendedWarrantyFlag = $productExtendedWarrantyFlag;

        return $this;
    }

    /**
     * Override the default Carbon Emissions profile flag, 'yes' or 'no'.
     */
    public function getProductCarbonEmissionsOffsetFlag(): ?string
    {
        return $this->productCarbonEmissionsOffsetFlag;
    }

    /**
     * Override the default Carbon Emissions profile flag, 'yes' or 'no'.
     */
    public function setProductCarbonEmissionsOffsetFlag(?string $productCarbonEmissionsOffsetFlag): self
    {
        $this->productCarbonEmissionsOffsetFlag = $productCarbonEmissionsOffsetFlag;

        return $this;
    }

    /**
     * Override the default Vehicle Maintenanace profile flag, 'yes' or 'no'.
     */
    public function getProductVehicleMaintenanceProgramFlag(): ?string
    {
        return $this->productVehicleMaintenanceProgramFlag;
    }

    /**
     * Override the default Vehicle Maintenanace profile flag, 'yes' or 'no'.
     */
    public function setProductVehicleMaintenanceProgramFlag(?string $productVehicleMaintenanceProgramFlag): self
    {
        $this->productVehicleMaintenanceProgramFlag = $productVehicleMaintenanceProgramFlag;

        return $this;
    }

    /**
     * Override the default Aftermarket inclusion flag, 'yes' or 'no'.
     */
    public function getAftermarketRequestedFlag(): ?string
    {
        return $this->aftermarketRequestedFlag;
    }

    /**
     * Override the default Aftermarket inclusion flag, 'yes' or 'no'.
     */
    public function setAftermarketRequestedFlag(?string $aftermarketRequestedFlag): self
    {
        $this->aftermarketRequestedFlag = $aftermarketRequestedFlag;

        return $this;
    }

    /**
     * Override the default Relief Vehicle inclusion flag, 'yes' or 'no'.
     */
    public function getProductRvehFlag(): ?string
    {
        return $this->productRvehFlag;
    }

    /**
     * Override the default Relief Vehicle inclusion flag, 'yes' or 'no'.
     */
    public function setProductRvehFlag(?string $productRvehFlag): self
    {
        $this->productRvehFlag = $productRvehFlag;

        return $this;
    }

    /**
     * Add the Relief Vehicle monthly cost to the Profile (Quotes / Lease -> 'Monthly Budget').
     */
    public function getProductRvehAmountNet(): ?float
    {
        return $this->productRvehAmountNet;
    }

    /**
     * Add the Relief Vehicle monthly cost to the Profile (Quotes / Lease -> 'Monthly Budget').
     */
    public function setProductRvehAmountNet(?float $productRvehAmountNet): self
    {
        $this->productRvehAmountNet = $productRvehAmountNet;

        return $this;
    }

    /**
     * Set the colour preference.
     */
    public function getColourPreference(): ?string
    {
        return $this->colourPreference;
    }

    /**
     * Set the colour preference.
     */
    public function setColourPreference(?string $colourPreference): self
    {
        $this->colourPreference = $colourPreference;

        return $this;
    }

    /**
     * Set an alternative Financier. This will override the Financier default set on the Quote Defaults and must map to a Supplier with a 'Supplier Type' set to "Financier" on the Suppliers / Account tab.
     */
    public function getSupplierCodeFinancier(): ?string
    {
        return $this->supplierCodeFinancier;
    }

    /**
     * Set an alternative Financier. This will override the Financier default set on the Quote Defaults and must map to a Supplier with a 'Supplier Type' set to "Financier" on the Suppliers / Account tab.
     */
    public function setSupplierCodeFinancier(?string $supplierCodeFinancier): self
    {
        $this->supplierCodeFinancier = $supplierCodeFinancier;

        return $this;
    }

    /**
     * An alternative to passing the driver_external_code. The driver_id passed in here will be updated with data submitted in this call. If URL contains ‘driver_id=100000’ then, If driver_id match is found, update Driver record (if any changes required). If URL contains ‘driver_id=0’ or not passed then, Do not create a new Driver Record. Simply add the driver_surname to [qt_quotes] driver_surname and driver_annual_salary to [qt_quotes] annual_salary. If URL contains ‘create_new_driver_flag=yes’ then, Create a new Driver.
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    /**
     * An alternative to passing the driver_external_code. The driver_id passed in here will be updated with data submitted in this call. If URL contains ‘driver_id=100000’ then, If driver_id match is found, update Driver record (if any changes required). If URL contains ‘driver_id=0’ or not passed then, Do not create a new Driver Record. Simply add the driver_surname to [qt_quotes] driver_surname and driver_annual_salary to [qt_quotes] annual_salary. If URL contains ‘create_new_driver_flag=yes’ then, Create a new Driver.
     */
    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * Set this to 'yes' to create a new Driver. Requires driver_external_code if set to 'yes'.
     */
    public function getCreateNewDriverFlag(): ?string
    {
        return $this->createNewDriverFlag;
    }

    /**
     * Set this to 'yes' to create a new Driver. Requires driver_external_code if set to 'yes'.
     */
    public function setCreateNewDriverFlag(?string $createNewDriverFlag): self
    {
        $this->createNewDriverFlag = $createNewDriverFlag;

        return $this;
    }

    /**
     * Set the Quote 'Assigned' user. Must be an active Catch-e user_id i.e. not at 'deleted' status.
     */
    public function getUserIdAssigned(): ?string
    {
        return $this->userIdAssigned;
    }

    /**
     * Set the Quote 'Assigned' user. Must be an active Catch-e user_id i.e. not at 'deleted' status.
     */
    public function setUserIdAssigned(?string $userIdAssigned): self
    {
        $this->userIdAssigned = $userIdAssigned;

        return $this;
    }

    /**
     * Set the Insurance location you want applied. This will display on the Quotes → Contract tab.
     */
    public function getLocationName(): ?string
    {
        return $this->locationName;
    }

    /**
     * Set the Insurance location you want applied. This will display on the Quotes → Contract tab.
     */
    public function setLocationName(?string $locationName): self
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Allows you to set the Pay Cycle for this quote. The list of available codes is stored in [gb_pay_cycles]pay_cycle_code. If not passed the Client Pay Cycle will be used.
     */
    public function getPayCycleCode(): ?string
    {
        return $this->payCycleCode;
    }

    /**
     * Allows you to set the Pay Cycle for this quote. The list of available codes is stored in [gb_pay_cycles]pay_cycle_code. If not passed the Client Pay Cycle will be used.
     */
    public function setPayCycleCode(?string $payCycleCode): self
    {
        $this->payCycleCode = $payCycleCode;

        return $this;
    }

    /**
     * @return null|CreateQuoteWebServiceInclusionsItem[]
     */
    public function getInclusions(): ?array
    {
        return $this->inclusions;
    }

    /**
     * @param null|CreateQuoteWebServiceInclusionsItem[] $inclusions
     */
    public function setInclusions(?array $inclusions): self
    {
        $this->inclusions = $inclusions;

        return $this;
    }

    /**
     * Either yes or no are the only acceptable values to be passed,if the fag is set to yes, If ‘product_lti_flag’ = yes is passed, and only one active “Plan” / “Top Up Benefit” is found, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function getProductLtiFlag(): ?string
    {
        return $this->productLtiFlag;
    }

    /**
     * Either yes or no are the only acceptable values to be passed,if the fag is set to yes, If ‘product_lti_flag’ = yes is passed, and only one active “Plan” / “Top Up Benefit” is found, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function setProductLtiFlag(?string $productLtiFlag): self
    {
        $this->productLtiFlag = $productLtiFlag;

        return $this;
    }

    /**
     * If the ‘product_lti_plan_code’ passed has only one active “Top Up Benefit”, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function getProductLtiPlanCode(): ?string
    {
        return $this->productLtiPlanCode;
    }

    /**
     * If the ‘product_lti_plan_code’ passed has only one active “Top Up Benefit”, the Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function setProductLtiPlanCode(?string $productLtiPlanCode): self
    {
        $this->productLtiPlanCode = $productLtiPlanCode;

        return $this;
    }

    /**
     * If more than one active “Top Up Benefit” exists for the “Plan” passed, then a ‘product_lti_top_up_benefit_name’ should be passed as well. The Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function getProductLtiTopUpBenefitName(): ?string
    {
        return $this->productLtiTopUpBenefitName;
    }

    /**
     * If more than one active “Top Up Benefit” exists for the “Plan” passed, then a ‘product_lti_top_up_benefit_name’ should be passed as well. The Quote created should pre-populate the “Plan” and “Top Up Benefit” and include the “Premium” in its calculations.
     */
    public function setProductLtiTopUpBenefitName(?string $productLtiTopUpBenefitName): self
    {
        $this->productLtiTopUpBenefitName = $productLtiTopUpBenefitName;

        return $this;
    }

    /**
     * User can give a previous lease start date.
     */
    public function getPreviousLeaseStart(): ?string
    {
        return $this->previousLeaseStart;
    }

    /**
     * User can give a previous lease start date.
     */
    public function setPreviousLeaseStart(?string $previousLeaseStart): self
    {
        $this->previousLeaseStart = $previousLeaseStart;

        return $this;
    }

    /**
     * It's optional and can only be a positive number.
     */
    public function getPreviousFbtValue(): ?float
    {
        return $this->previousFbtValue;
    }

    /**
     * It's optional and can only be a positive number.
     */
    public function setPreviousFbtValue(?float $previousFbtValue): self
    {
        $this->previousFbtValue = $previousFbtValue;

        return $this;
    }

    /**
     * If Driver found or new Driver created, Driver's "Mobile" will be updated.
     */
    public function getDriverMobile(): ?string
    {
        return $this->driverMobile;
    }

    /**
     * If Driver found or new Driver created, Driver's "Mobile" will be updated.
     */
    public function setDriverMobile(?string $driverMobile): self
    {
        $this->driverMobile = $driverMobile;

        return $this;
    }

    /**
     * If Driver found or new Driver created, Driver's "Licence No" will be updated.
     */
    public function getDriverDriverLicence(): ?string
    {
        return $this->driverDriverLicence;
    }

    /**
     * If Driver found or new Driver created, Driver's "Licence No" will be updated.
     */
    public function setDriverDriverLicence(?string $driverDriverLicence): self
    {
        $this->driverDriverLicence = $driverDriverLicence;

        return $this;
    }

    /**
     * If Driver found or new Driver created, Driver's "Licence State" will be updated.
     */
    public function getDriverDriverLicenceState(): ?string
    {
        return $this->driverDriverLicenceState;
    }

    /**
     * If Driver found or new Driver created, Driver's "Licence State" will be updated.
     */
    public function setDriverDriverLicenceState(?string $driverDriverLicenceState): self
    {
        $this->driverDriverLicenceState = $driverDriverLicenceState;

        return $this;
    }

    /**
     * Must be one of [qt_quote_statuses]description values. Default value is 'requested' if not included.
     */
    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    /**
     * Must be one of [qt_quote_statuses]description values. Default value is 'requested' if not included.
     */
    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }
}
