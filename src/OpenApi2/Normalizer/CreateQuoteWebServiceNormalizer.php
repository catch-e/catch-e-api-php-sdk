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

namespace CatchE\OpenApi2\Normalizer;

use CatchE\OpenApi2\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreateQuoteWebServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    use NormalizerAwareTrait;

    use CheckArray;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param null|mixed $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'CatchE\\OpenApi2\\Model\\CreateQuoteWebService' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\CreateQuoteWebService' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CatchE\OpenApi2\Model\CreateQuoteWebService();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('opportunity_id', $data) && null !== $data['opportunity_id']) {
            $object->setOpportunityId($data['opportunity_id']);
        } elseif (\array_key_exists('opportunity_id', $data) && null === $data['opportunity_id']) {
            $object->setOpportunityId(null);
        }
        if (\array_key_exists('opportunity_number', $data) && null !== $data['opportunity_number']) {
            $object->setOpportunityNumber($data['opportunity_number']);
        } elseif (\array_key_exists('opportunity_number', $data) && null === $data['opportunity_number']) {
            $object->setOpportunityNumber(null);
        }
        if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
            $object->setVariantId($data['variant_id']);
        } elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('user_id_client_manager', $data) && null !== $data['user_id_client_manager']) {
            $object->setUserIdClientManager($data['user_id_client_manager']);
        } elseif (\array_key_exists('user_id_client_manager', $data) && null === $data['user_id_client_manager']) {
            $object->setUserIdClientManager(null);
        }
        if (\array_key_exists('term', $data) && null !== $data['term']) {
            $object->setTerm($data['term']);
        } elseif (\array_key_exists('term', $data) && null === $data['term']) {
            $object->setTerm(null);
        }
        if (\array_key_exists('annual_kilometres', $data) && null !== $data['annual_kilometres']) {
            $object->setAnnualKilometres($data['annual_kilometres']);
        } elseif (\array_key_exists('annual_kilometres', $data) && null === $data['annual_kilometres']) {
            $object->setAnnualKilometres(null);
        }
        if (\array_key_exists('state_registered', $data) && null !== $data['state_registered']) {
            $object->setStateRegistered($data['state_registered']);
        } elseif (\array_key_exists('state_registered', $data) && null === $data['state_registered']) {
            $object->setStateRegistered(null);
        }
        if (\array_key_exists('insurer_location_postcode', $data) && null !== $data['insurer_location_postcode']) {
            $object->setInsurerLocationPostcode($data['insurer_location_postcode']);
        } elseif (\array_key_exists('insurer_location_postcode', $data) && null === $data['insurer_location_postcode']) {
            $object->setInsurerLocationPostcode(null);
        }
        if (\array_key_exists('client_code', $data) && null !== $data['client_code']) {
            $object->setClientCode($data['client_code']);
        } elseif (\array_key_exists('client_code', $data) && null === $data['client_code']) {
            $object->setClientCode(null);
        }
        if (\array_key_exists('cost_centre', $data) && null !== $data['cost_centre']) {
            $object->setCostCentre($data['cost_centre']);
        } elseif (\array_key_exists('cost_centre', $data) && null === $data['cost_centre']) {
            $object->setCostCentre(null);
        }
        if (\array_key_exists('division', $data) && null !== $data['division']) {
            $object->setDivision($data['division']);
        } elseif (\array_key_exists('division', $data) && null === $data['division']) {
            $object->setDivision(null);
        }
        if (\array_key_exists('driver_annual_salary', $data) && null !== $data['driver_annual_salary']) {
            $object->setDriverAnnualSalary($data['driver_annual_salary']);
        } elseif (\array_key_exists('driver_annual_salary', $data) && null === $data['driver_annual_salary']) {
            $object->setDriverAnnualSalary(null);
        }
        if (\array_key_exists('driver_external_code', $data) && null !== $data['driver_external_code']) {
            $object->setDriverExternalCode($data['driver_external_code']);
        } elseif (\array_key_exists('driver_external_code', $data) && null === $data['driver_external_code']) {
            $object->setDriverExternalCode(null);
        }
        if (\array_key_exists('driver_surname', $data) && null !== $data['driver_surname']) {
            $object->setDriverSurname($data['driver_surname']);
        } elseif (\array_key_exists('driver_surname', $data) && null === $data['driver_surname']) {
            $object->setDriverSurname(null);
        }
        if (\array_key_exists('deal_type', $data) && null !== $data['deal_type']) {
            $object->setDealType($data['deal_type']);
        } elseif (\array_key_exists('deal_type', $data) && null === $data['deal_type']) {
            $object->setDealType(null);
        }
        if (\array_key_exists('parent_quote_id', $data) && null !== $data['parent_quote_id']) {
            $object->setParentQuoteId($data['parent_quote_id']);
        } elseif (\array_key_exists('parent_quote_id', $data) && null === $data['parent_quote_id']) {
            $object->setParentQuoteId(null);
        }
        if (\array_key_exists('list_price_gross', $data) && null !== $data['list_price_gross']) {
            $object->setListPriceGross($data['list_price_gross']);
        } elseif (\array_key_exists('list_price_gross', $data) && null === $data['list_price_gross']) {
            $object->setListPriceGross(null);
        }
        if (\array_key_exists('list_price_net', $data) && null !== $data['list_price_net']) {
            $object->setListPriceNet($data['list_price_net']);
        } elseif (\array_key_exists('list_price_net', $data) && null === $data['list_price_net']) {
            $object->setListPriceNet(null);
        }
        if (\array_key_exists('list_price_gst', $data) && null !== $data['list_price_gst']) {
            $object->setListPriceGst($data['list_price_gst']);
        } elseif (\array_key_exists('list_price_gst', $data) && null === $data['list_price_gst']) {
            $object->setListPriceGst(null);
        }
        if (\array_key_exists('fbt_value', $data) && null !== $data['fbt_value']) {
            $object->setFbtValue($data['fbt_value']);
        } elseif (\array_key_exists('fbt_value', $data) && null === $data['fbt_value']) {
            $object->setFbtValue(null);
        }
        if (\array_key_exists('purchase_stamp_duty', $data) && null !== $data['purchase_stamp_duty']) {
            $object->setPurchaseStampDuty($data['purchase_stamp_duty']);
        } elseif (\array_key_exists('purchase_stamp_duty', $data) && null === $data['purchase_stamp_duty']) {
            $object->setPurchaseStampDuty(null);
        }
        if (\array_key_exists('plate_year', $data) && null !== $data['plate_year']) {
            $object->setPlateYear($data['plate_year']);
        } elseif (\array_key_exists('plate_year', $data) && null === $data['plate_year']) {
            $object->setPlateYear(null);
        }
        if (\array_key_exists('new_used', $data) && null !== $data['new_used']) {
            $object->setNewUsed($data['new_used']);
        } elseif (\array_key_exists('new_used', $data) && null === $data['new_used']) {
            $object->setNewUsed(null);
        }
        if (\array_key_exists('odometer', $data) && null !== $data['odometer']) {
            $object->setOdometer($data['odometer']);
        } elseif (\array_key_exists('odometer', $data) && null === $data['odometer']) {
            $object->setOdometer(null);
        }
        if (\array_key_exists('posting_map_code', $data) && null !== $data['posting_map_code']) {
            $object->setPostingMapCode($data['posting_map_code']);
        } elseif (\array_key_exists('posting_map_code', $data) && null === $data['posting_map_code']) {
            $object->setPostingMapCode(null);
        }
        if (\array_key_exists('driver_given_name', $data) && null !== $data['driver_given_name']) {
            $object->setDriverGivenName($data['driver_given_name']);
        } elseif (\array_key_exists('driver_given_name', $data) && null === $data['driver_given_name']) {
            $object->setDriverGivenName(null);
        }
        if (\array_key_exists('driver_work_phone', $data) && null !== $data['driver_work_phone']) {
            $object->setDriverWorkPhone($data['driver_work_phone']);
        } elseif (\array_key_exists('driver_work_phone', $data) && null === $data['driver_work_phone']) {
            $object->setDriverWorkPhone(null);
        }
        if (\array_key_exists('driver_home_email', $data) && null !== $data['driver_home_email']) {
            $object->setDriverHomeEmail($data['driver_home_email']);
        } elseif (\array_key_exists('driver_home_email', $data) && null === $data['driver_home_email']) {
            $object->setDriverHomeEmail(null);
        }
        if (\array_key_exists('driver_address_1', $data) && null !== $data['driver_address_1']) {
            $object->setDriverAddress1($data['driver_address_1']);
        } elseif (\array_key_exists('driver_address_1', $data) && null === $data['driver_address_1']) {
            $object->setDriverAddress1(null);
        }
        if (\array_key_exists('driver_address_2', $data) && null !== $data['driver_address_2']) {
            $object->setDriverAddress2($data['driver_address_2']);
        } elseif (\array_key_exists('driver_address_2', $data) && null === $data['driver_address_2']) {
            $object->setDriverAddress2(null);
        }
        if (\array_key_exists('driver_area', $data) && null !== $data['driver_area']) {
            $object->setDriverArea($data['driver_area']);
        } elseif (\array_key_exists('driver_area', $data) && null === $data['driver_area']) {
            $object->setDriverArea(null);
        }
        if (\array_key_exists('driver_state', $data) && null !== $data['driver_state']) {
            $object->setDriverState($data['driver_state']);
        } elseif (\array_key_exists('driver_state', $data) && null === $data['driver_state']) {
            $object->setDriverState(null);
        }
        if (\array_key_exists('driver_postcode', $data) && null !== $data['driver_postcode']) {
            $object->setDriverPostcode($data['driver_postcode']);
        } elseif (\array_key_exists('driver_postcode', $data) && null === $data['driver_postcode']) {
            $object->setDriverPostcode(null);
        }
        if (\array_key_exists('driver_phone', $data) && null !== $data['driver_phone']) {
            $object->setDriverPhone($data['driver_phone']);
        } elseif (\array_key_exists('driver_phone', $data) && null === $data['driver_phone']) {
            $object->setDriverPhone(null);
        }
        if (\array_key_exists('insurance_loading_type_past_claims', $data) && null !== $data['insurance_loading_type_past_claims']) {
            $object->setInsuranceLoadingTypePastClaims($data['insurance_loading_type_past_claims']);
        } elseif (\array_key_exists('insurance_loading_type_past_claims', $data) && null === $data['insurance_loading_type_past_claims']) {
            $object->setInsuranceLoadingTypePastClaims(null);
        }
        if (\array_key_exists('insurance_loading_type_licence', $data) && null !== $data['insurance_loading_type_licence']) {
            $object->setInsuranceLoadingTypeLicence($data['insurance_loading_type_licence']);
        } elseif (\array_key_exists('insurance_loading_type_licence', $data) && null === $data['insurance_loading_type_licence']) {
            $object->setInsuranceLoadingTypeLicence(null);
        }
        if (\array_key_exists('insurance_loading_type_driver_restriction', $data) && null !== $data['insurance_loading_type_driver_restriction']) {
            $object->setInsuranceLoadingTypeDriverRestriction($data['insurance_loading_type_driver_restriction']);
        } elseif (\array_key_exists('insurance_loading_type_driver_restriction', $data) && null === $data['insurance_loading_type_driver_restriction']) {
            $object->setInsuranceLoadingTypeDriverRestriction(null);
        }
        if (\array_key_exists('procurement_flag', $data) && null !== $data['procurement_flag']) {
            $object->setProcurementFlag($data['procurement_flag']);
        } elseif (\array_key_exists('procurement_flag', $data) && null === $data['procurement_flag']) {
            $object->setProcurementFlag(null);
        }
        if (\array_key_exists('product_tyre_and_rim_flag', $data) && null !== $data['product_tyre_and_rim_flag']) {
            $object->setProductTyreAndRimFlag($data['product_tyre_and_rim_flag']);
        } elseif (\array_key_exists('product_tyre_and_rim_flag', $data) && null === $data['product_tyre_and_rim_flag']) {
            $object->setProductTyreAndRimFlag(null);
        }
        if (\array_key_exists('product_nlpi_flag', $data) && null !== $data['product_nlpi_flag']) {
            $object->setProductNlpiFlag($data['product_nlpi_flag']);
        } elseif (\array_key_exists('product_nlpi_flag', $data) && null === $data['product_nlpi_flag']) {
            $object->setProductNlpiFlag(null);
        }
        if (\array_key_exists('product_walkaway_flag', $data) && null !== $data['product_walkaway_flag']) {
            $object->setProductWalkawayFlag($data['product_walkaway_flag']);
        } elseif (\array_key_exists('product_walkaway_flag', $data) && null === $data['product_walkaway_flag']) {
            $object->setProductWalkawayFlag(null);
        }
        if (\array_key_exists('product_small_damage_repairs_flag', $data) && null !== $data['product_small_damage_repairs_flag']) {
            $object->setProductSmallDamageRepairsFlag($data['product_small_damage_repairs_flag']);
        } elseif (\array_key_exists('product_small_damage_repairs_flag', $data) && null === $data['product_small_damage_repairs_flag']) {
            $object->setProductSmallDamageRepairsFlag(null);
        }
        if (\array_key_exists('product_comprehensive_insurance_flag', $data) && null !== $data['product_comprehensive_insurance_flag']) {
            $object->setProductComprehensiveInsuranceFlag($data['product_comprehensive_insurance_flag']);
        } elseif (\array_key_exists('product_comprehensive_insurance_flag', $data) && null === $data['product_comprehensive_insurance_flag']) {
            $object->setProductComprehensiveInsuranceFlag(null);
        }
        if (\array_key_exists('product_roadside_assistance_flag', $data) && null !== $data['product_roadside_assistance_flag']) {
            $object->setProductRoadsideAssistanceFlag($data['product_roadside_assistance_flag']);
        } elseif (\array_key_exists('product_roadside_assistance_flag', $data) && null === $data['product_roadside_assistance_flag']) {
            $object->setProductRoadsideAssistanceFlag(null);
        }
        if (\array_key_exists('product_extended_warranty_flag', $data) && null !== $data['product_extended_warranty_flag']) {
            $object->setProductExtendedWarrantyFlag($data['product_extended_warranty_flag']);
        } elseif (\array_key_exists('product_extended_warranty_flag', $data) && null === $data['product_extended_warranty_flag']) {
            $object->setProductExtendedWarrantyFlag(null);
        }
        if (\array_key_exists('product_carbon_emissions_offset_flag', $data) && null !== $data['product_carbon_emissions_offset_flag']) {
            $object->setProductCarbonEmissionsOffsetFlag($data['product_carbon_emissions_offset_flag']);
        } elseif (\array_key_exists('product_carbon_emissions_offset_flag', $data) && null === $data['product_carbon_emissions_offset_flag']) {
            $object->setProductCarbonEmissionsOffsetFlag(null);
        }
        if (\array_key_exists('product_vehicle_maintenance_program_flag', $data) && null !== $data['product_vehicle_maintenance_program_flag']) {
            $object->setProductVehicleMaintenanceProgramFlag($data['product_vehicle_maintenance_program_flag']);
        } elseif (\array_key_exists('product_vehicle_maintenance_program_flag', $data) && null === $data['product_vehicle_maintenance_program_flag']) {
            $object->setProductVehicleMaintenanceProgramFlag(null);
        }
        if (\array_key_exists('aftermarket_requested_flag', $data) && null !== $data['aftermarket_requested_flag']) {
            $object->setAftermarketRequestedFlag($data['aftermarket_requested_flag']);
        } elseif (\array_key_exists('aftermarket_requested_flag', $data) && null === $data['aftermarket_requested_flag']) {
            $object->setAftermarketRequestedFlag(null);
        }
        if (\array_key_exists('product_rveh_flag', $data) && null !== $data['product_rveh_flag']) {
            $object->setProductRvehFlag($data['product_rveh_flag']);
        } elseif (\array_key_exists('product_rveh_flag', $data) && null === $data['product_rveh_flag']) {
            $object->setProductRvehFlag(null);
        }
        if (\array_key_exists('product_rveh_amount_net', $data) && null !== $data['product_rveh_amount_net']) {
            $object->setProductRvehAmountNet($data['product_rveh_amount_net']);
        } elseif (\array_key_exists('product_rveh_amount_net', $data) && null === $data['product_rveh_amount_net']) {
            $object->setProductRvehAmountNet(null);
        }
        if (\array_key_exists('colour_preference', $data) && null !== $data['colour_preference']) {
            $object->setColourPreference($data['colour_preference']);
        } elseif (\array_key_exists('colour_preference', $data) && null === $data['colour_preference']) {
            $object->setColourPreference(null);
        }
        if (\array_key_exists('supplier_code_financier', $data) && null !== $data['supplier_code_financier']) {
            $object->setSupplierCodeFinancier($data['supplier_code_financier']);
        } elseif (\array_key_exists('supplier_code_financier', $data) && null === $data['supplier_code_financier']) {
            $object->setSupplierCodeFinancier(null);
        }
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('create_new_driver_flag', $data) && null !== $data['create_new_driver_flag']) {
            $object->setCreateNewDriverFlag($data['create_new_driver_flag']);
        } elseif (\array_key_exists('create_new_driver_flag', $data) && null === $data['create_new_driver_flag']) {
            $object->setCreateNewDriverFlag(null);
        }
        if (\array_key_exists('user_id_assigned', $data) && null !== $data['user_id_assigned']) {
            $object->setUserIdAssigned($data['user_id_assigned']);
        } elseif (\array_key_exists('user_id_assigned', $data) && null === $data['user_id_assigned']) {
            $object->setUserIdAssigned(null);
        }
        if (\array_key_exists('location_name', $data) && null !== $data['location_name']) {
            $object->setLocationName($data['location_name']);
        } elseif (\array_key_exists('location_name', $data) && null === $data['location_name']) {
            $object->setLocationName(null);
        }
        if (\array_key_exists('pay_cycle_code', $data) && null !== $data['pay_cycle_code']) {
            $object->setPayCycleCode($data['pay_cycle_code']);
        } elseif (\array_key_exists('pay_cycle_code', $data) && null === $data['pay_cycle_code']) {
            $object->setPayCycleCode(null);
        }
        if (\array_key_exists('inclusions', $data) && null !== $data['inclusions']) {
            $values = [];
            foreach ($data['inclusions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\CreateQuoteWebServiceInclusionsItem', 'json', $context);
            }
            $object->setInclusions($values);
        } elseif (\array_key_exists('inclusions', $data) && null === $data['inclusions']) {
            $object->setInclusions(null);
        }
        if (\array_key_exists('product_lti_flag', $data) && null !== $data['product_lti_flag']) {
            $object->setProductLtiFlag($data['product_lti_flag']);
        } elseif (\array_key_exists('product_lti_flag', $data) && null === $data['product_lti_flag']) {
            $object->setProductLtiFlag(null);
        }
        if (\array_key_exists('product_lti_plan_code', $data) && null !== $data['product_lti_plan_code']) {
            $object->setProductLtiPlanCode($data['product_lti_plan_code']);
        } elseif (\array_key_exists('product_lti_plan_code', $data) && null === $data['product_lti_plan_code']) {
            $object->setProductLtiPlanCode(null);
        }
        if (\array_key_exists('product_lti_top_up_benefit_name', $data) && null !== $data['product_lti_top_up_benefit_name']) {
            $object->setProductLtiTopUpBenefitName($data['product_lti_top_up_benefit_name']);
        } elseif (\array_key_exists('product_lti_top_up_benefit_name', $data) && null === $data['product_lti_top_up_benefit_name']) {
            $object->setProductLtiTopUpBenefitName(null);
        }
        if (\array_key_exists('previous_lease_start', $data) && null !== $data['previous_lease_start']) {
            $object->setPreviousLeaseStart($data['previous_lease_start']);
        } elseif (\array_key_exists('previous_lease_start', $data) && null === $data['previous_lease_start']) {
            $object->setPreviousLeaseStart(null);
        }
        if (\array_key_exists('previous_fbt_value', $data) && null !== $data['previous_fbt_value']) {
            $object->setPreviousFbtValue($data['previous_fbt_value']);
        } elseif (\array_key_exists('previous_fbt_value', $data) && null === $data['previous_fbt_value']) {
            $object->setPreviousFbtValue(null);
        }
        if (\array_key_exists('driver_mobile', $data) && null !== $data['driver_mobile']) {
            $object->setDriverMobile($data['driver_mobile']);
        } elseif (\array_key_exists('driver_mobile', $data) && null === $data['driver_mobile']) {
            $object->setDriverMobile(null);
        }
        if (\array_key_exists('driver_driver_licence', $data) && null !== $data['driver_driver_licence']) {
            $object->setDriverDriverLicence($data['driver_driver_licence']);
        } elseif (\array_key_exists('driver_driver_licence', $data) && null === $data['driver_driver_licence']) {
            $object->setDriverDriverLicence(null);
        }
        if (\array_key_exists('driver_driver_licence_state', $data) && null !== $data['driver_driver_licence_state']) {
            $object->setDriverDriverLicenceState($data['driver_driver_licence_state']);
        } elseif (\array_key_exists('driver_driver_licence_state', $data) && null === $data['driver_driver_licence_state']) {
            $object->setDriverDriverLicenceState(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return null|array|\ArrayObject|bool|float|int|string
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getOpportunityId()) {
            $data['opportunity_id'] = $object->getOpportunityId();
        }
        if (null !== $object->getOpportunityNumber()) {
            $data['opportunity_number'] = $object->getOpportunityNumber();
        }
        $data['variant_id'] = $object->getVariantId();
        $data['user_id_client_manager'] = $object->getUserIdClientManager();
        $data['term'] = $object->getTerm();
        $data['annual_kilometres'] = $object->getAnnualKilometres();
        $data['state_registered'] = $object->getStateRegistered();
        if (null !== $object->getInsurerLocationPostcode()) {
            $data['insurer_location_postcode'] = $object->getInsurerLocationPostcode();
        }
        $data['client_code'] = $object->getClientCode();
        if (null !== $object->getCostCentre()) {
            $data['cost_centre'] = $object->getCostCentre();
        }
        if (null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        $data['driver_annual_salary'] = $object->getDriverAnnualSalary();
        if (null !== $object->getDriverExternalCode()) {
            $data['driver_external_code'] = $object->getDriverExternalCode();
        }
        $data['driver_surname'] = $object->getDriverSurname();
        if (null !== $object->getDealType()) {
            $data['deal_type'] = $object->getDealType();
        }
        if (null !== $object->getParentQuoteId()) {
            $data['parent_quote_id'] = $object->getParentQuoteId();
        }
        if (null !== $object->getListPriceGross()) {
            $data['list_price_gross'] = $object->getListPriceGross();
        }
        if (null !== $object->getListPriceNet()) {
            $data['list_price_net'] = $object->getListPriceNet();
        }
        if (null !== $object->getListPriceGst()) {
            $data['list_price_gst'] = $object->getListPriceGst();
        }
        if (null !== $object->getFbtValue()) {
            $data['fbt_value'] = $object->getFbtValue();
        }
        if (null !== $object->getPurchaseStampDuty()) {
            $data['purchase_stamp_duty'] = $object->getPurchaseStampDuty();
        }
        if (null !== $object->getPlateYear()) {
            $data['plate_year'] = $object->getPlateYear();
        }
        if (null !== $object->getNewUsed()) {
            $data['new_used'] = $object->getNewUsed();
        }
        if (null !== $object->getOdometer()) {
            $data['odometer'] = $object->getOdometer();
        }
        if (null !== $object->getPostingMapCode()) {
            $data['posting_map_code'] = $object->getPostingMapCode();
        }
        if (null !== $object->getDriverGivenName()) {
            $data['driver_given_name'] = $object->getDriverGivenName();
        }
        if (null !== $object->getDriverWorkPhone()) {
            $data['driver_work_phone'] = $object->getDriverWorkPhone();
        }
        if (null !== $object->getDriverHomeEmail()) {
            $data['driver_home_email'] = $object->getDriverHomeEmail();
        }
        if (null !== $object->getDriverAddress1()) {
            $data['driver_address_1'] = $object->getDriverAddress1();
        }
        if (null !== $object->getDriverAddress2()) {
            $data['driver_address_2'] = $object->getDriverAddress2();
        }
        if (null !== $object->getDriverArea()) {
            $data['driver_area'] = $object->getDriverArea();
        }
        if (null !== $object->getDriverState()) {
            $data['driver_state'] = $object->getDriverState();
        }
        if (null !== $object->getDriverPostcode()) {
            $data['driver_postcode'] = $object->getDriverPostcode();
        }
        if (null !== $object->getDriverPhone()) {
            $data['driver_phone'] = $object->getDriverPhone();
        }
        if (null !== $object->getInsuranceLoadingTypePastClaims()) {
            $data['insurance_loading_type_past_claims'] = $object->getInsuranceLoadingTypePastClaims();
        }
        if (null !== $object->getInsuranceLoadingTypeLicence()) {
            $data['insurance_loading_type_licence'] = $object->getInsuranceLoadingTypeLicence();
        }
        if (null !== $object->getInsuranceLoadingTypeDriverRestriction()) {
            $data['insurance_loading_type_driver_restriction'] = $object->getInsuranceLoadingTypeDriverRestriction();
        }
        if (null !== $object->getProcurementFlag()) {
            $data['procurement_flag'] = $object->getProcurementFlag();
        }
        if (null !== $object->getProductTyreAndRimFlag()) {
            $data['product_tyre_and_rim_flag'] = $object->getProductTyreAndRimFlag();
        }
        if (null !== $object->getProductNlpiFlag()) {
            $data['product_nlpi_flag'] = $object->getProductNlpiFlag();
        }
        if (null !== $object->getProductWalkawayFlag()) {
            $data['product_walkaway_flag'] = $object->getProductWalkawayFlag();
        }
        if (null !== $object->getProductSmallDamageRepairsFlag()) {
            $data['product_small_damage_repairs_flag'] = $object->getProductSmallDamageRepairsFlag();
        }
        if (null !== $object->getProductComprehensiveInsuranceFlag()) {
            $data['product_comprehensive_insurance_flag'] = $object->getProductComprehensiveInsuranceFlag();
        }
        if (null !== $object->getProductRoadsideAssistanceFlag()) {
            $data['product_roadside_assistance_flag'] = $object->getProductRoadsideAssistanceFlag();
        }
        if (null !== $object->getProductExtendedWarrantyFlag()) {
            $data['product_extended_warranty_flag'] = $object->getProductExtendedWarrantyFlag();
        }
        if (null !== $object->getProductCarbonEmissionsOffsetFlag()) {
            $data['product_carbon_emissions_offset_flag'] = $object->getProductCarbonEmissionsOffsetFlag();
        }
        if (null !== $object->getProductVehicleMaintenanceProgramFlag()) {
            $data['product_vehicle_maintenance_program_flag'] = $object->getProductVehicleMaintenanceProgramFlag();
        }
        if (null !== $object->getAftermarketRequestedFlag()) {
            $data['aftermarket_requested_flag'] = $object->getAftermarketRequestedFlag();
        }
        if (null !== $object->getProductRvehFlag()) {
            $data['product_rveh_flag'] = $object->getProductRvehFlag();
        }
        if (null !== $object->getProductRvehAmountNet()) {
            $data['product_rveh_amount_net'] = $object->getProductRvehAmountNet();
        }
        if (null !== $object->getColourPreference()) {
            $data['colour_preference'] = $object->getColourPreference();
        }
        if (null !== $object->getSupplierCodeFinancier()) {
            $data['supplier_code_financier'] = $object->getSupplierCodeFinancier();
        }
        if (null !== $object->getDriverId()) {
            $data['driver_id'] = $object->getDriverId();
        }
        if (null !== $object->getCreateNewDriverFlag()) {
            $data['create_new_driver_flag'] = $object->getCreateNewDriverFlag();
        }
        if (null !== $object->getUserIdAssigned()) {
            $data['user_id_assigned'] = $object->getUserIdAssigned();
        }
        if (null !== $object->getLocationName()) {
            $data['location_name'] = $object->getLocationName();
        }
        if (null !== $object->getPayCycleCode()) {
            $data['pay_cycle_code'] = $object->getPayCycleCode();
        }
        if (null !== $object->getInclusions()) {
            $values = [];
            foreach ($object->getInclusions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['inclusions'] = $values;
        }
        if (null !== $object->getProductLtiFlag()) {
            $data['product_lti_flag'] = $object->getProductLtiFlag();
        }
        if (null !== $object->getProductLtiPlanCode()) {
            $data['product_lti_plan_code'] = $object->getProductLtiPlanCode();
        }
        if (null !== $object->getProductLtiTopUpBenefitName()) {
            $data['product_lti_top_up_benefit_name'] = $object->getProductLtiTopUpBenefitName();
        }
        if (null !== $object->getPreviousLeaseStart()) {
            $data['previous_lease_start'] = $object->getPreviousLeaseStart();
        }
        if (null !== $object->getPreviousFbtValue()) {
            $data['previous_fbt_value'] = $object->getPreviousFbtValue();
        }
        if (null !== $object->getDriverMobile()) {
            $data['driver_mobile'] = $object->getDriverMobile();
        }
        if (null !== $object->getDriverDriverLicence()) {
            $data['driver_driver_licence'] = $object->getDriverDriverLicence();
        }
        if (null !== $object->getDriverDriverLicenceState()) {
            $data['driver_driver_licence_state'] = $object->getDriverDriverLicenceState();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
