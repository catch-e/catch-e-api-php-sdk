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

class QuotePatchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuotePatch' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuotePatch' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuotePatch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('after_hours_assistance_flag', $data) && null !== $data['after_hours_assistance_flag']) {
            $object->setAfterHoursAssistanceFlag($data['after_hours_assistance_flag']);
        } elseif (\array_key_exists('after_hours_assistance_flag', $data) && null === $data['after_hours_assistance_flag']) {
            $object->setAfterHoursAssistanceFlag(null);
        }
        if (\array_key_exists('application_date', $data) && null !== $data['application_date']) {
            $object->setApplicationDate(\DateTime::createFromFormat('Y-m-d', $data['application_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('application_date', $data) && null === $data['application_date']) {
            $object->setApplicationDate(null);
        }
        if (\array_key_exists('application_reference', $data) && null !== $data['application_reference']) {
            $object->setApplicationReference($data['application_reference']);
        } elseif (\array_key_exists('application_reference', $data) && null === $data['application_reference']) {
            $object->setApplicationReference(null);
        }
        if (\array_key_exists('application_status_flag', $data) && null !== $data['application_status_flag']) {
            $object->setApplicationStatusFlag($data['application_status_flag']);
        } elseif (\array_key_exists('application_status_flag', $data) && null === $data['application_status_flag']) {
            $object->setApplicationStatusFlag(null);
        }
        if (\array_key_exists('bespoke_field_values', $data) && null !== $data['bespoke_field_values']) {
            $object->setBespokeFieldValues($data['bespoke_field_values']);
        } elseif (\array_key_exists('bespoke_field_values', $data) && null === $data['bespoke_field_values']) {
            $object->setBespokeFieldValues(null);
        }
        if (\array_key_exists('carbon_emissions_offset', $data) && null !== $data['carbon_emissions_offset']) {
            $object->setCarbonEmissionsOffset($this->denormalizer->denormalize($data['carbon_emissions_offset'], 'CatchE\\OpenApi2\\Model\\QuotePatchCarbonEmissionsOffset', 'json', $context));
        } elseif (\array_key_exists('carbon_emissions_offset', $data) && null === $data['carbon_emissions_offset']) {
            $object->setCarbonEmissionsOffset(null);
        }
        if (\array_key_exists('client_contact_name', $data) && null !== $data['client_contact_name']) {
            $object->setClientContactName($data['client_contact_name']);
        } elseif (\array_key_exists('client_contact_name', $data) && null === $data['client_contact_name']) {
            $object->setClientContactName(null);
        }
        if (\array_key_exists('client_email', $data) && null !== $data['client_email']) {
            $object->setClientEmail($data['client_email']);
        } elseif (\array_key_exists('client_email', $data) && null === $data['client_email']) {
            $object->setClientEmail(null);
        }
        if (\array_key_exists('client_fax', $data) && null !== $data['client_fax']) {
            $object->setClientFax($data['client_fax']);
        } elseif (\array_key_exists('client_fax', $data) && null === $data['client_fax']) {
            $object->setClientFax(null);
        }
        if (\array_key_exists('client_name', $data) && null !== $data['client_name']) {
            $object->setClientName($data['client_name']);
        } elseif (\array_key_exists('client_name', $data) && null === $data['client_name']) {
            $object->setClientName(null);
        }
        if (\array_key_exists('client_phone', $data) && null !== $data['client_phone']) {
            $object->setClientPhone($data['client_phone']);
        } elseif (\array_key_exists('client_phone', $data) && null === $data['client_phone']) {
            $object->setClientPhone(null);
        }
        if (\array_key_exists('colour_preference', $data) && null !== $data['colour_preference']) {
            $object->setColourPreference($data['colour_preference']);
        } elseif (\array_key_exists('colour_preference', $data) && null === $data['colour_preference']) {
            $object->setColourPreference(null);
        }
        if (\array_key_exists('colour_preference_2', $data) && null !== $data['colour_preference_2']) {
            $object->setColourPreference2($data['colour_preference_2']);
        } elseif (\array_key_exists('colour_preference_2', $data) && null === $data['colour_preference_2']) {
            $object->setColourPreference2(null);
        }
        if (\array_key_exists('colour_preference_3', $data) && null !== $data['colour_preference_3']) {
            $object->setColourPreference3($data['colour_preference_3']);
        } elseif (\array_key_exists('colour_preference_3', $data) && null === $data['colour_preference_3']) {
            $object->setColourPreference3(null);
        }
        if (\array_key_exists('colour_preference_note', $data) && null !== $data['colour_preference_note']) {
            $object->setColourPreferenceNote($data['colour_preference_note']);
        } elseif (\array_key_exists('colour_preference_note', $data) && null === $data['colour_preference_note']) {
            $object->setColourPreferenceNote(null);
        }
        if (\array_key_exists('comments', $data) && null !== $data['comments']) {
            $object->setComments($data['comments']);
        } elseif (\array_key_exists('comments', $data) && null === $data['comments']) {
            $object->setComments(null);
        }
        if (\array_key_exists('comments_internal', $data) && null !== $data['comments_internal']) {
            $object->setCommentsInternal($data['comments_internal']);
        } elseif (\array_key_exists('comments_internal', $data) && null === $data['comments_internal']) {
            $object->setCommentsInternal(null);
        }
        if (\array_key_exists('deal_type_id', $data) && null !== $data['deal_type_id']) {
            $object->setDealTypeId($data['deal_type_id']);
        } elseif (\array_key_exists('deal_type_id', $data) && null === $data['deal_type_id']) {
            $object->setDealTypeId(null);
        }
        if (\array_key_exists('dealer_comment', $data) && null !== $data['dealer_comment']) {
            $object->setDealerComment($data['dealer_comment']);
        } elseif (\array_key_exists('dealer_comment', $data) && null === $data['dealer_comment']) {
            $object->setDealerComment(null);
        }
        if (\array_key_exists('deposit_gst', $data) && null !== $data['deposit_gst']) {
            $object->setDepositGst($data['deposit_gst']);
        } elseif (\array_key_exists('deposit_gst', $data) && null === $data['deposit_gst']) {
            $object->setDepositGst(null);
        }
        if (\array_key_exists('deposit_net', $data) && null !== $data['deposit_net']) {
            $object->setDepositNet($data['deposit_net']);
        } elseif (\array_key_exists('deposit_net', $data) && null === $data['deposit_net']) {
            $object->setDepositNet(null);
        }
        if (\array_key_exists('disposal_fee', $data) && null !== $data['disposal_fee']) {
            $object->setDisposalFee($data['disposal_fee']);
        } elseif (\array_key_exists('disposal_fee', $data) && null === $data['disposal_fee']) {
            $object->setDisposalFee(null);
        }
        if (\array_key_exists('disposal_flag', $data) && null !== $data['disposal_flag']) {
            $object->setDisposalFlag($data['disposal_flag']);
        } elseif (\array_key_exists('disposal_flag', $data) && null === $data['disposal_flag']) {
            $object->setDisposalFlag(null);
        }
        if (\array_key_exists('driver_email', $data) && null !== $data['driver_email']) {
            $object->setDriverEmail($data['driver_email']);
        } elseif (\array_key_exists('driver_email', $data) && null === $data['driver_email']) {
            $object->setDriverEmail(null);
        }
        if (\array_key_exists('driver_fax', $data) && null !== $data['driver_fax']) {
            $object->setDriverFax($data['driver_fax']);
        } elseif (\array_key_exists('driver_fax', $data) && null === $data['driver_fax']) {
            $object->setDriverFax(null);
        }
        if (\array_key_exists('driver_phone', $data) && null !== $data['driver_phone']) {
            $object->setDriverPhone($data['driver_phone']);
        } elseif (\array_key_exists('driver_phone', $data) && null === $data['driver_phone']) {
            $object->setDriverPhone(null);
        }
        if (\array_key_exists('driver_given_name', $data) && null !== $data['driver_given_name']) {
            $object->setDriverGivenName($data['driver_given_name']);
        } elseif (\array_key_exists('driver_given_name', $data) && null === $data['driver_given_name']) {
            $object->setDriverGivenName(null);
        }
        if (\array_key_exists('driver_surname', $data) && null !== $data['driver_surname']) {
            $object->setDriverSurname($data['driver_surname']);
        } elseif (\array_key_exists('driver_surname', $data) && null === $data['driver_surname']) {
            $object->setDriverSurname(null);
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('employer_fbt_type', $data) && null !== $data['employer_fbt_type']) {
            $object->setEmployerFbtType($data['employer_fbt_type']);
        } elseif (\array_key_exists('employer_fbt_type', $data) && null === $data['employer_fbt_type']) {
            $object->setEmployerFbtType(null);
        }
        if (\array_key_exists('finance_type_id', $data) && null !== $data['finance_type_id']) {
            $object->setFinanceTypeId($data['finance_type_id']);
        } elseif (\array_key_exists('finance_type_id', $data) && null === $data['finance_type_id']) {
            $object->setFinanceTypeId(null);
        }
        if (\array_key_exists('fuel', $data) && null !== $data['fuel']) {
            $object->setFuel($this->denormalizer->denormalize($data['fuel'], 'CatchE\\OpenApi2\\Model\\QuotePatchFuel', 'json', $context));
        } elseif (\array_key_exists('fuel', $data) && null === $data['fuel']) {
            $object->setFuel(null);
        }
        if (\array_key_exists('gap_insurance_flag', $data) && null !== $data['gap_insurance_flag']) {
            $object->setGapInsuranceFlag($data['gap_insurance_flag']);
        } elseif (\array_key_exists('gap_insurance_flag', $data) && null === $data['gap_insurance_flag']) {
            $object->setGapInsuranceFlag(null);
        }
        if (\array_key_exists('inclusion_plans', $data) && null !== $data['inclusion_plans']) {
            $values = [];
            foreach ($data['inclusion_plans'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\QuotePatchInclusionPlansItem', 'json', $context);
            }
            $object->setInclusionPlans($values);
        } elseif (\array_key_exists('inclusion_plans', $data) && null === $data['inclusion_plans']) {
            $object->setInclusionPlans(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'CatchE\\OpenApi2\\Model\\QuotePatchInsurance', 'json', $context));
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('insurance_at_fault_flag', $data) && null !== $data['insurance_at_fault_flag']) {
            $object->setInsuranceAtFaultFlag($data['insurance_at_fault_flag']);
        } elseif (\array_key_exists('insurance_at_fault_flag', $data) && null === $data['insurance_at_fault_flag']) {
            $object->setInsuranceAtFaultFlag(null);
        }
        if (\array_key_exists('insurance_conviction_flag', $data) && null !== $data['insurance_conviction_flag']) {
            $object->setInsuranceConvictionFlag($data['insurance_conviction_flag']);
        } elseif (\array_key_exists('insurance_conviction_flag', $data) && null === $data['insurance_conviction_flag']) {
            $object->setInsuranceConvictionFlag(null);
        }
        if (\array_key_exists('insurance_loading_types', $data) && null !== $data['insurance_loading_types']) {
            $object->setInsuranceLoadingTypes($this->denormalizer->denormalize($data['insurance_loading_types'], 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypes', 'json', $context));
        } elseif (\array_key_exists('insurance_loading_types', $data) && null === $data['insurance_loading_types']) {
            $object->setInsuranceLoadingTypes(null);
        }
        if (\array_key_exists('insurance_loss_licence_flag', $data) && null !== $data['insurance_loss_licence_flag']) {
            $object->setInsuranceLossLicenceFlag($data['insurance_loss_licence_flag']);
        } elseif (\array_key_exists('insurance_loss_licence_flag', $data) && null === $data['insurance_loss_licence_flag']) {
            $object->setInsuranceLossLicenceFlag(null);
        }
        if (\array_key_exists('insurer_location_id', $data) && null !== $data['insurer_location_id']) {
            $object->setInsurerLocationId($data['insurer_location_id']);
        } elseif (\array_key_exists('insurer_location_id', $data) && null === $data['insurer_location_id']) {
            $object->setInsurerLocationId(null);
        }
        if (\array_key_exists('insurer_location_postcode', $data) && null !== $data['insurer_location_postcode']) {
            $object->setInsurerLocationPostcode($data['insurer_location_postcode']);
        } elseif (\array_key_exists('insurer_location_postcode', $data) && null === $data['insurer_location_postcode']) {
            $object->setInsurerLocationPostcode(null);
        }
        if (\array_key_exists('location_name', $data) && null !== $data['location_name']) {
            $object->setLocationName($data['location_name']);
        } elseif (\array_key_exists('location_name', $data) && null === $data['location_name']) {
            $object->setLocationName(null);
        }
        if (\array_key_exists('lock_comprehensive_insurance_flag', $data) && null !== $data['lock_comprehensive_insurance_flag']) {
            $object->setLockComprehensiveInsuranceFlag($data['lock_comprehensive_insurance_flag']);
        } elseif (\array_key_exists('lock_comprehensive_insurance_flag', $data) && null === $data['lock_comprehensive_insurance_flag']) {
            $object->setLockComprehensiveInsuranceFlag(null);
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
        if (\array_key_exists('opportunity_stage_id', $data) && null !== $data['opportunity_stage_id']) {
            $object->setOpportunityStageId($data['opportunity_stage_id']);
        } elseif (\array_key_exists('opportunity_stage_id', $data) && null === $data['opportunity_stage_id']) {
            $object->setOpportunityStageId(null);
        }
        if (\array_key_exists('originator_id', $data) && null !== $data['originator_id']) {
            $object->setOriginatorId($data['originator_id']);
        } elseif (\array_key_exists('originator_id', $data) && null === $data['originator_id']) {
            $object->setOriginatorId(null);
        }
        if (\array_key_exists('parent_quote_id', $data) && null !== $data['parent_quote_id']) {
            $object->setParentQuoteId($data['parent_quote_id']);
        } elseif (\array_key_exists('parent_quote_id', $data) && null === $data['parent_quote_id']) {
            $object->setParentQuoteId(null);
        }
        if (\array_key_exists('policy_owner_type', $data) && null !== $data['policy_owner_type']) {
            $object->setPolicyOwnerType($data['policy_owner_type']);
        } elseif (\array_key_exists('policy_owner_type', $data) && null === $data['policy_owner_type']) {
            $object->setPolicyOwnerType(null);
        }
        if (\array_key_exists('price_comment', $data) && null !== $data['price_comment']) {
            $object->setPriceComment($data['price_comment']);
        } elseif (\array_key_exists('price_comment', $data) && null === $data['price_comment']) {
            $object->setPriceComment(null);
        }
        if (\array_key_exists('pricing_received', $data) && null !== $data['pricing_received']) {
            $object->setPricingReceived($data['pricing_received']);
        } elseif (\array_key_exists('pricing_received', $data) && null === $data['pricing_received']) {
            $object->setPricingReceived(null);
        }
        if (\array_key_exists('pricing_reference', $data) && null !== $data['pricing_reference']) {
            $object->setPricingReference($data['pricing_reference']);
        } elseif (\array_key_exists('pricing_reference', $data) && null === $data['pricing_reference']) {
            $object->setPricingReference(null);
        }
        if (\array_key_exists('pricing_requested', $data) && null !== $data['pricing_requested']) {
            $object->setPricingRequested($data['pricing_requested']);
        } elseif (\array_key_exists('pricing_requested', $data) && null === $data['pricing_requested']) {
            $object->setPricingRequested(null);
        }
        if (\array_key_exists('procurement_fee', $data) && null !== $data['procurement_fee']) {
            $object->setProcurementFee($data['procurement_fee']);
        } elseif (\array_key_exists('procurement_fee', $data) && null === $data['procurement_fee']) {
            $object->setProcurementFee(null);
        }
        if (\array_key_exists('procurement_flag', $data) && null !== $data['procurement_flag']) {
            $object->setProcurementFlag($data['procurement_flag']);
        } elseif (\array_key_exists('procurement_flag', $data) && null === $data['procurement_flag']) {
            $object->setProcurementFlag(null);
        }
        if (\array_key_exists('quote_status_id', $data) && null !== $data['quote_status_id']) {
            $object->setQuoteStatusId($data['quote_status_id']);
        } elseif (\array_key_exists('quote_status_id', $data) && null === $data['quote_status_id']) {
            $object->setQuoteStatusId(null);
        }
        if (\array_key_exists('reg_ctp', $data) && null !== $data['reg_ctp']) {
            $object->setRegCtp($this->denormalizer->denormalize($data['reg_ctp'], 'CatchE\\OpenApi2\\Model\\QuotePatchRegCtp', 'json', $context));
        } elseif (\array_key_exists('reg_ctp', $data) && null === $data['reg_ctp']) {
            $object->setRegCtp(null);
        }
        if (\array_key_exists('roadside_assistance', $data) && null !== $data['roadside_assistance']) {
            $object->setRoadsideAssistance($this->denormalizer->denormalize($data['roadside_assistance'], 'CatchE\\OpenApi2\\Model\\QuotePatchRoadsideAssistance', 'json', $context));
        } elseif (\array_key_exists('roadside_assistance', $data) && null === $data['roadside_assistance']) {
            $object->setRoadsideAssistance(null);
        }
        if (\array_key_exists('supplier_id_dealer', $data) && null !== $data['supplier_id_dealer']) {
            $object->setSupplierIdDealer($data['supplier_id_dealer']);
        } elseif (\array_key_exists('supplier_id_dealer', $data) && null === $data['supplier_id_dealer']) {
            $object->setSupplierIdDealer(null);
        }
        if (\array_key_exists('trade_in_amount_gst', $data) && null !== $data['trade_in_amount_gst']) {
            $object->setTradeInAmountGst($data['trade_in_amount_gst']);
        } elseif (\array_key_exists('trade_in_amount_gst', $data) && null === $data['trade_in_amount_gst']) {
            $object->setTradeInAmountGst(null);
        }
        if (\array_key_exists('trade_in_amount_net', $data) && null !== $data['trade_in_amount_net']) {
            $object->setTradeInAmountNet($data['trade_in_amount_net']);
        } elseif (\array_key_exists('trade_in_amount_net', $data) && null === $data['trade_in_amount_net']) {
            $object->setTradeInAmountNet(null);
        }
        if (\array_key_exists('trade_in_reg_no', $data) && null !== $data['trade_in_reg_no']) {
            $object->setTradeInRegNo($data['trade_in_reg_no']);
        } elseif (\array_key_exists('trade_in_reg_no', $data) && null === $data['trade_in_reg_no']) {
            $object->setTradeInRegNo(null);
        }
        if (\array_key_exists('trim_preference', $data) && null !== $data['trim_preference']) {
            $object->setTrimPreference($data['trim_preference']);
        } elseif (\array_key_exists('trim_preference', $data) && null === $data['trim_preference']) {
            $object->setTrimPreference(null);
        }
        if (\array_key_exists('user_id_assigned', $data) && null !== $data['user_id_assigned']) {
            $object->setUserIdAssigned($data['user_id_assigned']);
        } elseif (\array_key_exists('user_id_assigned', $data) && null === $data['user_id_assigned']) {
            $object->setUserIdAssigned(null);
        }
        if (\array_key_exists('user_id_client_manager', $data) && null !== $data['user_id_client_manager']) {
            $object->setUserIdClientManager($data['user_id_client_manager']);
        } elseif (\array_key_exists('user_id_client_manager', $data) && null === $data['user_id_client_manager']) {
            $object->setUserIdClientManager(null);
        }
        if (\array_key_exists('vehicle_maintenance_program', $data) && null !== $data['vehicle_maintenance_program']) {
            $object->setVehicleMaintenanceProgram($this->denormalizer->denormalize($data['vehicle_maintenance_program'], 'CatchE\\OpenApi2\\Model\\QuotePatchVehicleMaintenanceProgram', 'json', $context));
        } elseif (\array_key_exists('vehicle_maintenance_program', $data) && null === $data['vehicle_maintenance_program']) {
            $object->setVehicleMaintenanceProgram(null);
        }
        if (\array_key_exists('vehicle_tracking_system_flag', $data) && null !== $data['vehicle_tracking_system_flag']) {
            $object->setVehicleTrackingSystemFlag($data['vehicle_tracking_system_flag']);
        } elseif (\array_key_exists('vehicle_tracking_system_flag', $data) && null === $data['vehicle_tracking_system_flag']) {
            $object->setVehicleTrackingSystemFlag(null);
        }
        if (\array_key_exists('override_warnings_flag', $data) && null !== $data['override_warnings_flag']) {
            $object->setOverrideWarningsFlag($data['override_warnings_flag']);
        } elseif (\array_key_exists('override_warnings_flag', $data) && null === $data['override_warnings_flag']) {
            $object->setOverrideWarningsFlag(null);
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
        if (null !== $object->getAfterHoursAssistanceFlag()) {
            $data['after_hours_assistance_flag'] = $object->getAfterHoursAssistanceFlag();
        }
        if (null !== $object->getApplicationDate()) {
            $data['application_date'] = $object->getApplicationDate()->format('Y-m-d');
        }
        if (null !== $object->getApplicationReference()) {
            $data['application_reference'] = $object->getApplicationReference();
        }
        if (null !== $object->getApplicationStatusFlag()) {
            $data['application_status_flag'] = $object->getApplicationStatusFlag();
        }
        if (null !== $object->getBespokeFieldValues()) {
            $data['bespoke_field_values'] = $object->getBespokeFieldValues();
        }
        if (null !== $object->getCarbonEmissionsOffset()) {
            $data['carbon_emissions_offset'] = $this->normalizer->normalize($object->getCarbonEmissionsOffset(), 'json', $context);
        }
        if (null !== $object->getClientContactName()) {
            $data['client_contact_name'] = $object->getClientContactName();
        }
        if (null !== $object->getClientEmail()) {
            $data['client_email'] = $object->getClientEmail();
        }
        if (null !== $object->getClientFax()) {
            $data['client_fax'] = $object->getClientFax();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getClientPhone()) {
            $data['client_phone'] = $object->getClientPhone();
        }
        if (null !== $object->getColourPreference()) {
            $data['colour_preference'] = $object->getColourPreference();
        }
        if (null !== $object->getColourPreference2()) {
            $data['colour_preference_2'] = $object->getColourPreference2();
        }
        if (null !== $object->getColourPreference3()) {
            $data['colour_preference_3'] = $object->getColourPreference3();
        }
        if (null !== $object->getColourPreferenceNote()) {
            $data['colour_preference_note'] = $object->getColourPreferenceNote();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getCommentsInternal()) {
            $data['comments_internal'] = $object->getCommentsInternal();
        }
        if (null !== $object->getDealTypeId()) {
            $data['deal_type_id'] = $object->getDealTypeId();
        }
        if (null !== $object->getDealerComment()) {
            $data['dealer_comment'] = $object->getDealerComment();
        }
        if (null !== $object->getDepositGst()) {
            $data['deposit_gst'] = $object->getDepositGst();
        }
        if (null !== $object->getDepositNet()) {
            $data['deposit_net'] = $object->getDepositNet();
        }
        if (null !== $object->getDisposalFee()) {
            $data['disposal_fee'] = $object->getDisposalFee();
        }
        if (null !== $object->getDisposalFlag()) {
            $data['disposal_flag'] = $object->getDisposalFlag();
        }
        if (null !== $object->getDriverEmail()) {
            $data['driver_email'] = $object->getDriverEmail();
        }
        if (null !== $object->getDriverFax()) {
            $data['driver_fax'] = $object->getDriverFax();
        }
        if (null !== $object->getDriverPhone()) {
            $data['driver_phone'] = $object->getDriverPhone();
        }
        if (null !== $object->getDriverGivenName()) {
            $data['driver_given_name'] = $object->getDriverGivenName();
        }
        if (null !== $object->getDriverSurname()) {
            $data['driver_surname'] = $object->getDriverSurname();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getEmployerFbtType()) {
            $data['employer_fbt_type'] = $object->getEmployerFbtType();
        }
        if (null !== $object->getFinanceTypeId()) {
            $data['finance_type_id'] = $object->getFinanceTypeId();
        }
        if (null !== $object->getFuel()) {
            $data['fuel'] = $this->normalizer->normalize($object->getFuel(), 'json', $context);
        }
        if (null !== $object->getGapInsuranceFlag()) {
            $data['gap_insurance_flag'] = $object->getGapInsuranceFlag();
        }
        if (null !== $object->getInclusionPlans()) {
            $values = [];
            foreach ($object->getInclusionPlans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['inclusion_plans'] = $values;
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        if (null !== $object->getInsuranceAtFaultFlag()) {
            $data['insurance_at_fault_flag'] = $object->getInsuranceAtFaultFlag();
        }
        if (null !== $object->getInsuranceConvictionFlag()) {
            $data['insurance_conviction_flag'] = $object->getInsuranceConvictionFlag();
        }
        if (null !== $object->getInsuranceLoadingTypes()) {
            $data['insurance_loading_types'] = $this->normalizer->normalize($object->getInsuranceLoadingTypes(), 'json', $context);
        }
        if (null !== $object->getInsuranceLossLicenceFlag()) {
            $data['insurance_loss_licence_flag'] = $object->getInsuranceLossLicenceFlag();
        }
        if (null !== $object->getInsurerLocationId()) {
            $data['insurer_location_id'] = $object->getInsurerLocationId();
        }
        if (null !== $object->getInsurerLocationPostcode()) {
            $data['insurer_location_postcode'] = $object->getInsurerLocationPostcode();
        }
        if (null !== $object->getLocationName()) {
            $data['location_name'] = $object->getLocationName();
        }
        if (null !== $object->getLockComprehensiveInsuranceFlag()) {
            $data['lock_comprehensive_insurance_flag'] = $object->getLockComprehensiveInsuranceFlag();
        }
        if (null !== $object->getOpportunityId()) {
            $data['opportunity_id'] = $object->getOpportunityId();
        }
        if (null !== $object->getOpportunityNumber()) {
            $data['opportunity_number'] = $object->getOpportunityNumber();
        }
        if (null !== $object->getOpportunityStageId()) {
            $data['opportunity_stage_id'] = $object->getOpportunityStageId();
        }
        if (null !== $object->getOriginatorId()) {
            $data['originator_id'] = $object->getOriginatorId();
        }
        if (null !== $object->getParentQuoteId()) {
            $data['parent_quote_id'] = $object->getParentQuoteId();
        }
        if (null !== $object->getPolicyOwnerType()) {
            $data['policy_owner_type'] = $object->getPolicyOwnerType();
        }
        if (null !== $object->getPriceComment()) {
            $data['price_comment'] = $object->getPriceComment();
        }
        if (null !== $object->getPricingReceived()) {
            $data['pricing_received'] = $object->getPricingReceived();
        }
        if (null !== $object->getPricingReference()) {
            $data['pricing_reference'] = $object->getPricingReference();
        }
        if (null !== $object->getPricingRequested()) {
            $data['pricing_requested'] = $object->getPricingRequested();
        }
        if (null !== $object->getProcurementFee()) {
            $data['procurement_fee'] = $object->getProcurementFee();
        }
        if (null !== $object->getProcurementFlag()) {
            $data['procurement_flag'] = $object->getProcurementFlag();
        }
        if (null !== $object->getQuoteStatusId()) {
            $data['quote_status_id'] = $object->getQuoteStatusId();
        }
        if (null !== $object->getRegCtp()) {
            $data['reg_ctp'] = $this->normalizer->normalize($object->getRegCtp(), 'json', $context);
        }
        if (null !== $object->getRoadsideAssistance()) {
            $data['roadside_assistance'] = $this->normalizer->normalize($object->getRoadsideAssistance(), 'json', $context);
        }
        if (null !== $object->getSupplierIdDealer()) {
            $data['supplier_id_dealer'] = $object->getSupplierIdDealer();
        }
        if (null !== $object->getTradeInAmountGst()) {
            $data['trade_in_amount_gst'] = $object->getTradeInAmountGst();
        }
        if (null !== $object->getTradeInAmountNet()) {
            $data['trade_in_amount_net'] = $object->getTradeInAmountNet();
        }
        if (null !== $object->getTradeInRegNo()) {
            $data['trade_in_reg_no'] = $object->getTradeInRegNo();
        }
        if (null !== $object->getTrimPreference()) {
            $data['trim_preference'] = $object->getTrimPreference();
        }
        if (null !== $object->getUserIdAssigned()) {
            $data['user_id_assigned'] = $object->getUserIdAssigned();
        }
        if (null !== $object->getUserIdClientManager()) {
            $data['user_id_client_manager'] = $object->getUserIdClientManager();
        }
        if (null !== $object->getVehicleMaintenanceProgram()) {
            $data['vehicle_maintenance_program'] = $this->normalizer->normalize($object->getVehicleMaintenanceProgram(), 'json', $context);
        }
        if (null !== $object->getVehicleTrackingSystemFlag()) {
            $data['vehicle_tracking_system_flag'] = $object->getVehicleTrackingSystemFlag();
        }
        if (null !== $object->getOverrideWarningsFlag()) {
            $data['override_warnings_flag'] = $object->getOverrideWarningsFlag();
        }

        return $data;
    }
}
