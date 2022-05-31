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

class QuoteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\Quote' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\Quote' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\Quote();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accepted_count', $data) && null !== $data['accepted_count']) {
            $object->setAcceptedCount($data['accepted_count']);
        } elseif (\array_key_exists('accepted_count', $data) && null === $data['accepted_count']) {
            $object->setAcceptedCount(null);
        }
        if (\array_key_exists('accident_management_fee', $data) && null !== $data['accident_management_fee']) {
            $object->setAccidentManagementFee($this->denormalizer->denormalize($data['accident_management_fee'], 'CatchE\\OpenApi2\\Model\\QuoteAccidentManagementFee', 'json', $context));
        } elseif (\array_key_exists('accident_management_fee', $data) && null === $data['accident_management_fee']) {
            $object->setAccidentManagementFee(null);
        }
        if (\array_key_exists('advance_arrears', $data) && null !== $data['advance_arrears']) {
            $object->setAdvanceArrears($data['advance_arrears']);
        } elseif (\array_key_exists('advance_arrears', $data) && null === $data['advance_arrears']) {
            $object->setAdvanceArrears(null);
        }
        if (\array_key_exists('after_hours_assistance_flag', $data) && null !== $data['after_hours_assistance_flag']) {
            $object->setAfterHoursAssistanceFlag($data['after_hours_assistance_flag']);
        } elseif (\array_key_exists('after_hours_assistance_flag', $data) && null === $data['after_hours_assistance_flag']) {
            $object->setAfterHoursAssistanceFlag(null);
        }
        if (\array_key_exists('allowances', $data) && null !== $data['allowances']) {
            $object->setAllowances($data['allowances']);
        } elseif (\array_key_exists('allowances', $data) && null === $data['allowances']) {
            $object->setAllowances(null);
        }
        if (\array_key_exists('annual_kilometers', $data) && null !== $data['annual_kilometers']) {
            $object->setAnnualKilometers($data['annual_kilometers']);
        } elseif (\array_key_exists('annual_kilometers', $data) && null === $data['annual_kilometers']) {
            $object->setAnnualKilometers(null);
        }
        if (\array_key_exists('annual_salary', $data) && null !== $data['annual_salary']) {
            $object->setAnnualSalary($data['annual_salary']);
        } elseif (\array_key_exists('annual_salary', $data) && null === $data['annual_salary']) {
            $object->setAnnualSalary(null);
        }
        if (\array_key_exists('application_collection_date', $data) && null !== $data['application_collection_date']) {
            $object->setApplicationCollectionDate(\DateTime::createFromFormat('Y-m-d', $data['application_collection_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('application_collection_date', $data) && null === $data['application_collection_date']) {
            $object->setApplicationCollectionDate(null);
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
        if (\array_key_exists('application_status', $data) && null !== $data['application_status']) {
            $object->setApplicationStatus($data['application_status']);
        } elseif (\array_key_exists('application_status', $data) && null === $data['application_status']) {
            $object->setApplicationStatus(null);
        }
        if (\array_key_exists('application_status_flag', $data) && null !== $data['application_status_flag']) {
            $object->setApplicationStatusFlag($data['application_status_flag']);
        } elseif (\array_key_exists('application_status_flag', $data) && null === $data['application_status_flag']) {
            $object->setApplicationStatusFlag(null);
        }
        if (\array_key_exists('arrears_interest', $data) && null !== $data['arrears_interest']) {
            $object->setArrearsInterest($data['arrears_interest']);
        } elseif (\array_key_exists('arrears_interest', $data) && null === $data['arrears_interest']) {
            $object->setArrearsInterest(null);
        }
        if (\array_key_exists('ato_loan_flag', $data) && null !== $data['ato_loan_flag']) {
            $object->setAtoLoanFlag($data['ato_loan_flag']);
        } elseif (\array_key_exists('ato_loan_flag', $data) && null === $data['ato_loan_flag']) {
            $object->setAtoLoanFlag(null);
        }
        if (\array_key_exists('base_rate', $data) && null !== $data['base_rate']) {
            $object->setBaseRate($data['base_rate']);
        } elseif (\array_key_exists('base_rate', $data) && null === $data['base_rate']) {
            $object->setBaseRate(null);
        }
        if (\array_key_exists('base_residual_rate', $data) && null !== $data['base_residual_rate']) {
            $object->setBaseResidualRate($data['base_residual_rate']);
        } elseif (\array_key_exists('base_residual_rate', $data) && null === $data['base_residual_rate']) {
            $object->setBaseResidualRate(null);
        }
        if (\array_key_exists('bespoke_field_values', $data) && null !== $data['bespoke_field_values']) {
            $object->setBespokeFieldValues($data['bespoke_field_values']);
        } elseif (\array_key_exists('bespoke_field_values', $data) && null === $data['bespoke_field_values']) {
            $object->setBespokeFieldValues(null);
        }
        if (\array_key_exists('billing_periods', $data) && null !== $data['billing_periods']) {
            $object->setBillingPeriods($data['billing_periods']);
        } elseif (\array_key_exists('billing_periods', $data) && null === $data['billing_periods']) {
            $object->setBillingPeriods(null);
        }
        if (\array_key_exists('bonus_amount_gst', $data) && null !== $data['bonus_amount_gst']) {
            $object->setBonusAmountGst($data['bonus_amount_gst']);
        } elseif (\array_key_exists('bonus_amount_gst', $data) && null === $data['bonus_amount_gst']) {
            $object->setBonusAmountGst(null);
        }
        if (\array_key_exists('bonus_amount_net', $data) && null !== $data['bonus_amount_net']) {
            $object->setBonusAmountNet($data['bonus_amount_net']);
        } elseif (\array_key_exists('bonus_amount_net', $data) && null === $data['bonus_amount_net']) {
            $object->setBonusAmountNet(null);
        }
        if (\array_key_exists('broker_fee', $data) && null !== $data['broker_fee']) {
            $object->setBrokerFee($data['broker_fee']);
        } elseif (\array_key_exists('broker_fee', $data) && null === $data['broker_fee']) {
            $object->setBrokerFee(null);
        }
        if (\array_key_exists('broker_rate', $data) && null !== $data['broker_rate']) {
            $object->setBrokerRate($data['broker_rate']);
        } elseif (\array_key_exists('broker_rate', $data) && null === $data['broker_rate']) {
            $object->setBrokerRate(null);
        }
        if (\array_key_exists('budgets', $data) && null !== $data['budgets']) {
            $values = [];
            foreach ($data['budgets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\QuoteBudget', 'json', $context);
            }
            $object->setBudgets($values);
        } elseif (\array_key_exists('budgets', $data) && null === $data['budgets']) {
            $object->setBudgets(null);
        }
        if (\array_key_exists('budgets_financed', $data) && null !== $data['budgets_financed']) {
            $object->setBudgetsFinanced($data['budgets_financed']);
        } elseif (\array_key_exists('budgets_financed', $data) && null === $data['budgets_financed']) {
            $object->setBudgetsFinanced(null);
        }
        if (\array_key_exists('carbon_emissions_offset', $data) && null !== $data['carbon_emissions_offset']) {
            $object->setCarbonEmissionsOffset($this->denormalizer->denormalize($data['carbon_emissions_offset'], 'CatchE\\OpenApi2\\Model\\QuoteCarbonEmissionsOffset', 'json', $context));
        } elseif (\array_key_exists('carbon_emissions_offset', $data) && null === $data['carbon_emissions_offset']) {
            $object->setCarbonEmissionsOffset(null);
        }
        if (\array_key_exists('cancelled', $data) && null !== $data['cancelled']) {
            $object->setCancelled($data['cancelled']);
        } elseif (\array_key_exists('cancelled', $data) && null === $data['cancelled']) {
            $object->setCancelled(null);
        }
        if (\array_key_exists('capitalised_interest', $data) && null !== $data['capitalised_interest']) {
            $object->setCapitalisedInterest($data['capitalised_interest']);
        } elseif (\array_key_exists('capitalised_interest', $data) && null === $data['capitalised_interest']) {
            $object->setCapitalisedInterest(null);
        }
        if (\array_key_exists('claimable_gst', $data) && null !== $data['claimable_gst']) {
            $object->setClaimableGst($data['claimable_gst']);
        } elseif (\array_key_exists('claimable_gst', $data) && null === $data['claimable_gst']) {
            $object->setClaimableGst(null);
        }
        if (\array_key_exists('client_contact_name', $data) && null !== $data['client_contact_name']) {
            $object->setClientContactName($data['client_contact_name']);
        } elseif (\array_key_exists('client_contact_name', $data) && null === $data['client_contact_name']) {
            $object->setClientContactName(null);
        }
        if (\array_key_exists('client_cost_centre_id', $data) && null !== $data['client_cost_centre_id']) {
            $object->setClientCostCentreId($data['client_cost_centre_id']);
        } elseif (\array_key_exists('client_cost_centre_id', $data) && null === $data['client_cost_centre_id']) {
            $object->setClientCostCentreId(null);
        }
        if (\array_key_exists('client_division_id', $data) && null !== $data['client_division_id']) {
            $object->setClientDivisionId($data['client_division_id']);
        } elseif (\array_key_exists('client_division_id', $data) && null === $data['client_division_id']) {
            $object->setClientDivisionId(null);
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
        if (\array_key_exists('client_group_flag', $data) && null !== $data['client_group_flag']) {
            $object->setClientGroupFlag($data['client_group_flag']);
        } elseif (\array_key_exists('client_group_flag', $data) && null === $data['client_group_flag']) {
            $object->setClientGroupFlag(null);
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('client_margin_net', $data) && null !== $data['client_margin_net']) {
            $object->setClientMarginNet($data['client_margin_net']);
        } elseif (\array_key_exists('client_margin_net', $data) && null === $data['client_margin_net']) {
            $object->setClientMarginNet(null);
        }
        if (\array_key_exists('client_margin_rate', $data) && null !== $data['client_margin_rate']) {
            $object->setClientMarginRate($data['client_margin_rate']);
        } elseif (\array_key_exists('client_margin_rate', $data) && null === $data['client_margin_rate']) {
            $object->setClientMarginRate(null);
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
        if (\array_key_exists('client_residual_rate', $data) && null !== $data['client_residual_rate']) {
            $object->setClientResidualRate($data['client_residual_rate']);
        } elseif (\array_key_exists('client_residual_rate', $data) && null === $data['client_residual_rate']) {
            $object->setClientResidualRate(null);
        }
        if (\array_key_exists('client_type', $data) && null !== $data['client_type']) {
            $object->setClientType($data['client_type']);
        } elseif (\array_key_exists('client_type', $data) && null === $data['client_type']) {
            $object->setClientType(null);
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
        if (\array_key_exists('commission', $data) && null !== $data['commission']) {
            $object->setCommission($data['commission']);
        } elseif (\array_key_exists('commission', $data) && null === $data['commission']) {
            $object->setCommission(null);
        }
        if (\array_key_exists('commission_rate', $data) && null !== $data['commission_rate']) {
            $object->setCommissionRate($data['commission_rate']);
        } elseif (\array_key_exists('commission_rate', $data) && null === $data['commission_rate']) {
            $object->setCommissionRate(null);
        }
        if (\array_key_exists('competitor_id', $data) && null !== $data['competitor_id']) {
            $object->setCompetitorId($data['competitor_id']);
        } elseif (\array_key_exists('competitor_id', $data) && null === $data['competitor_id']) {
            $object->setCompetitorId(null);
        }
        if (\array_key_exists('competitor_margin_id', $data) && null !== $data['competitor_margin_id']) {
            $object->setCompetitorMarginId($data['competitor_margin_id']);
        } elseif (\array_key_exists('competitor_margin_id', $data) && null === $data['competitor_margin_id']) {
            $object->setCompetitorMarginId(null);
        }
        if (\array_key_exists('contract_kms', $data) && null !== $data['contract_kms']) {
            $object->setContractKms($data['contract_kms']);
        } elseif (\array_key_exists('contract_kms', $data) && null === $data['contract_kms']) {
            $object->setContractKms(null);
        }
        if (\array_key_exists('cost_centre', $data) && null !== $data['cost_centre']) {
            $object->setCostCentre($data['cost_centre']);
        } elseif (\array_key_exists('cost_centre', $data) && null === $data['cost_centre']) {
            $object->setCostCentre(null);
        }
        if (\array_key_exists('csd_gst', $data) && null !== $data['csd_gst']) {
            $object->setCsdGst($data['csd_gst']);
        } elseif (\array_key_exists('csd_gst', $data) && null === $data['csd_gst']) {
            $object->setCsdGst(null);
        }
        if (\array_key_exists('csd_net', $data) && null !== $data['csd_net']) {
            $object->setCsdNet($data['csd_net']);
        } elseif (\array_key_exists('csd_net', $data) && null === $data['csd_net']) {
            $object->setCsdNet(null);
        }
        if (\array_key_exists('csd_rate', $data) && null !== $data['csd_rate']) {
            $object->setCsdRate($data['csd_rate']);
        } elseif (\array_key_exists('csd_rate', $data) && null === $data['csd_rate']) {
            $object->setCsdRate(null);
        }
        if (\array_key_exists('ctp_initial_gst', $data) && null !== $data['ctp_initial_gst']) {
            $object->setCtpInitialGst($data['ctp_initial_gst']);
        } elseif (\array_key_exists('ctp_initial_gst', $data) && null === $data['ctp_initial_gst']) {
            $object->setCtpInitialGst(null);
        }
        if (\array_key_exists('ctp_initial_net', $data) && null !== $data['ctp_initial_net']) {
            $object->setCtpInitialNet($data['ctp_initial_net']);
        } elseif (\array_key_exists('ctp_initial_net', $data) && null === $data['ctp_initial_net']) {
            $object->setCtpInitialNet(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('date_to', $data) && null !== $data['date_to']) {
            $object->setDateTo(\DateTime::createFromFormat('Y-m-d', $data['date_to'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('date_to', $data) && null === $data['date_to']) {
            $object->setDateTo(null);
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
        if (\array_key_exists('dealer_delivery_gst', $data) && null !== $data['dealer_delivery_gst']) {
            $object->setDealerDeliveryGst($data['dealer_delivery_gst']);
        } elseif (\array_key_exists('dealer_delivery_gst', $data) && null === $data['dealer_delivery_gst']) {
            $object->setDealerDeliveryGst(null);
        }
        if (\array_key_exists('dealer_delivery_net', $data) && null !== $data['dealer_delivery_net']) {
            $object->setDealerDeliveryNet($data['dealer_delivery_net']);
        } elseif (\array_key_exists('dealer_delivery_net', $data) && null === $data['dealer_delivery_net']) {
            $object->setDealerDeliveryNet(null);
        }
        if (\array_key_exists('dealer_discount_gst', $data) && null !== $data['dealer_discount_gst']) {
            $object->setDealerDiscountGst($data['dealer_discount_gst']);
        } elseif (\array_key_exists('dealer_discount_gst', $data) && null === $data['dealer_discount_gst']) {
            $object->setDealerDiscountGst(null);
        }
        if (\array_key_exists('dealer_discount_net', $data) && null !== $data['dealer_discount_net']) {
            $object->setDealerDiscountNet($data['dealer_discount_net']);
        } elseif (\array_key_exists('dealer_discount_net', $data) && null === $data['dealer_discount_net']) {
            $object->setDealerDiscountNet(null);
        }
        if (\array_key_exists('dealer_rebate_gst', $data) && null !== $data['dealer_rebate_gst']) {
            $object->setDealerRebateGst($data['dealer_rebate_gst']);
        } elseif (\array_key_exists('dealer_rebate_gst', $data) && null === $data['dealer_rebate_gst']) {
            $object->setDealerRebateGst(null);
        }
        if (\array_key_exists('dealer_rebate_net', $data) && null !== $data['dealer_rebate_net']) {
            $object->setDealerRebateNet($data['dealer_rebate_net']);
        } elseif (\array_key_exists('dealer_rebate_net', $data) && null === $data['dealer_rebate_net']) {
            $object->setDealerRebateNet(null);
        }
        if (\array_key_exists('deferred_interest', $data) && null !== $data['deferred_interest']) {
            $object->setDeferredInterest($data['deferred_interest']);
        } elseif (\array_key_exists('deferred_interest', $data) && null === $data['deferred_interest']) {
            $object->setDeferredInterest(null);
        }
        if (\array_key_exists('delivery_fee', $data) && null !== $data['delivery_fee']) {
            $object->setDeliveryFee($data['delivery_fee']);
        } elseif (\array_key_exists('delivery_fee', $data) && null === $data['delivery_fee']) {
            $object->setDeliveryFee(null);
        }
        if (\array_key_exists('delivery_location_type', $data) && null !== $data['delivery_location_type']) {
            $object->setDeliveryLocationType($data['delivery_location_type']);
        } elseif (\array_key_exists('delivery_location_type', $data) && null === $data['delivery_location_type']) {
            $object->setDeliveryLocationType(null);
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
        if (\array_key_exists('depreciable_amount', $data) && null !== $data['depreciable_amount']) {
            $object->setDepreciableAmount($data['depreciable_amount']);
        } elseif (\array_key_exists('depreciable_amount', $data) && null === $data['depreciable_amount']) {
            $object->setDepreciableAmount(null);
        }
        if (\array_key_exists('discount_gst', $data) && null !== $data['discount_gst']) {
            $object->setDiscountGst($data['discount_gst']);
        } elseif (\array_key_exists('discount_gst', $data) && null === $data['discount_gst']) {
            $object->setDiscountGst(null);
        }
        if (\array_key_exists('discount_name', $data) && null !== $data['discount_name']) {
            $object->setDiscountName($data['discount_name']);
        } elseif (\array_key_exists('discount_name', $data) && null === $data['discount_name']) {
            $object->setDiscountName(null);
        }
        if (\array_key_exists('discount_net', $data) && null !== $data['discount_net']) {
            $object->setDiscountNet($data['discount_net']);
        } elseif (\array_key_exists('discount_net', $data) && null === $data['discount_net']) {
            $object->setDiscountNet(null);
        }
        if (\array_key_exists('discount_type_id', $data) && null !== $data['discount_type_id']) {
            $object->setDiscountTypeId($data['discount_type_id']);
        } elseif (\array_key_exists('discount_type_id', $data) && null === $data['discount_type_id']) {
            $object->setDiscountTypeId(null);
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
        if (\array_key_exists('division', $data) && null !== $data['division']) {
            $object->setDivision($data['division']);
        } elseif (\array_key_exists('division', $data) && null === $data['division']) {
            $object->setDivision(null);
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
        if (\array_key_exists('driver_given_name', $data) && null !== $data['driver_given_name']) {
            $object->setDriverGivenName($data['driver_given_name']);
        } elseif (\array_key_exists('driver_given_name', $data) && null === $data['driver_given_name']) {
            $object->setDriverGivenName(null);
        }
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('driver_phone', $data) && null !== $data['driver_phone']) {
            $object->setDriverPhone($data['driver_phone']);
        } elseif (\array_key_exists('driver_phone', $data) && null === $data['driver_phone']) {
            $object->setDriverPhone(null);
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
        if (\array_key_exists('early_termination_fee', $data) && null !== $data['early_termination_fee']) {
            $object->setEarlyTerminationFee($data['early_termination_fee']);
        } elseif (\array_key_exists('early_termination_fee', $data) && null === $data['early_termination_fee']) {
            $object->setEarlyTerminationFee(null);
        }
        if (\array_key_exists('ecm_flag', $data) && null !== $data['ecm_flag']) {
            $object->setEcmFlag($data['ecm_flag']);
        } elseif (\array_key_exists('ecm_flag', $data) && null === $data['ecm_flag']) {
            $object->setEcmFlag(null);
        }
        if (\array_key_exists('employer_fbt_type', $data) && null !== $data['employer_fbt_type']) {
            $object->setEmployerFbtType($data['employer_fbt_type']);
        } elseif (\array_key_exists('employer_fbt_type', $data) && null === $data['employer_fbt_type']) {
            $object->setEmployerFbtType(null);
        }
        if (\array_key_exists('establishment_fee', $data) && null !== $data['establishment_fee']) {
            $object->setEstablishmentFee($data['establishment_fee']);
        } elseif (\array_key_exists('establishment_fee', $data) && null === $data['establishment_fee']) {
            $object->setEstablishmentFee(null);
        }
        if (\array_key_exists('establishment_fee_funded_flag', $data) && null !== $data['establishment_fee_funded_flag']) {
            $object->setEstablishmentFeeFundedFlag($data['establishment_fee_funded_flag']);
        } elseif (\array_key_exists('establishment_fee_funded_flag', $data) && null === $data['establishment_fee_funded_flag']) {
            $object->setEstablishmentFeeFundedFlag(null);
        }
        if (\array_key_exists('excess_km_flag', $data) && null !== $data['excess_km_flag']) {
            $object->setExcessKmFlag($data['excess_km_flag']);
        } elseif (\array_key_exists('excess_km_flag', $data) && null === $data['excess_km_flag']) {
            $object->setExcessKmFlag(null);
        }
        if (\array_key_exists('excess_km_rate', $data) && null !== $data['excess_km_rate']) {
            $object->setExcessKmRate($data['excess_km_rate']);
        } elseif (\array_key_exists('excess_km_rate', $data) && null === $data['excess_km_rate']) {
            $object->setExcessKmRate(null);
        }
        if (\array_key_exists('extended_warranty', $data) && null !== $data['extended_warranty']) {
            $object->setExtendedWarranty($this->denormalizer->denormalize($data['extended_warranty'], 'CatchE\\OpenApi2\\Model\\QuoteExtendedWarranty', 'json', $context));
        } elseif (\array_key_exists('extended_warranty', $data) && null === $data['extended_warranty']) {
            $object->setExtendedWarranty(null);
        }
        if (\array_key_exists('fbt_benefit_type', $data) && null !== $data['fbt_benefit_type']) {
            $object->setFbtBenefitType($data['fbt_benefit_type']);
        } elseif (\array_key_exists('fbt_benefit_type', $data) && null === $data['fbt_benefit_type']) {
            $object->setFbtBenefitType(null);
        }
        if (\array_key_exists('fbt_business_use', $data) && null !== $data['fbt_business_use']) {
            $object->setFbtBusinessUse($data['fbt_business_use']);
        } elseif (\array_key_exists('fbt_business_use', $data) && null === $data['fbt_business_use']) {
            $object->setFbtBusinessUse(null);
        }
        if (\array_key_exists('fbt_statutory_rate', $data) && null !== $data['fbt_statutory_rate']) {
            $object->setFbtStatutoryRate($data['fbt_statutory_rate']);
        } elseif (\array_key_exists('fbt_statutory_rate', $data) && null === $data['fbt_statutory_rate']) {
            $object->setFbtStatutoryRate(null);
        }
        if (\array_key_exists('fbt_value', $data) && null !== $data['fbt_value']) {
            $object->setFbtValue($data['fbt_value']);
        } elseif (\array_key_exists('fbt_value', $data) && null === $data['fbt_value']) {
            $object->setFbtValue(null);
        }
        if (\array_key_exists('fbt_value_yearly', $data) && null !== $data['fbt_value_yearly']) {
            $object->setFbtValueYearly($data['fbt_value_yearly']);
        } elseif (\array_key_exists('fbt_value_yearly', $data) && null === $data['fbt_value_yearly']) {
            $object->setFbtValueYearly(null);
        }
        if (\array_key_exists('finance_administration_fee_gst', $data) && null !== $data['finance_administration_fee_gst']) {
            $object->setFinanceAdministrationFeeGst($data['finance_administration_fee_gst']);
        } elseif (\array_key_exists('finance_administration_fee_gst', $data) && null === $data['finance_administration_fee_gst']) {
            $object->setFinanceAdministrationFeeGst(null);
        }
        if (\array_key_exists('finance_administration_fee_net', $data) && null !== $data['finance_administration_fee_net']) {
            $object->setFinanceAdministrationFeeNet($data['finance_administration_fee_net']);
        } elseif (\array_key_exists('finance_administration_fee_net', $data) && null === $data['finance_administration_fee_net']) {
            $object->setFinanceAdministrationFeeNet(null);
        }
        if (\array_key_exists('finance_method', $data) && null !== $data['finance_method']) {
            $object->setFinanceMethod($data['finance_method']);
        } elseif (\array_key_exists('finance_method', $data) && null === $data['finance_method']) {
            $object->setFinanceMethod(null);
        }
        if (\array_key_exists('finance_pmt_gst', $data) && null !== $data['finance_pmt_gst']) {
            $object->setFinancePmtGst($data['finance_pmt_gst']);
        } elseif (\array_key_exists('finance_pmt_gst', $data) && null === $data['finance_pmt_gst']) {
            $object->setFinancePmtGst(null);
        }
        if (\array_key_exists('finance_pmt_net', $data) && null !== $data['finance_pmt_net']) {
            $object->setFinancePmtNet($data['finance_pmt_net']);
        } elseif (\array_key_exists('finance_pmt_net', $data) && null === $data['finance_pmt_net']) {
            $object->setFinancePmtNet(null);
        }
        if (\array_key_exists('finance_rate', $data) && null !== $data['finance_rate']) {
            $object->setFinanceRate($data['finance_rate']);
        } elseif (\array_key_exists('finance_rate', $data) && null === $data['finance_rate']) {
            $object->setFinanceRate(null);
        }
        if (\array_key_exists('finance_type_id', $data) && null !== $data['finance_type_id']) {
            $object->setFinanceTypeId($data['finance_type_id']);
        } elseif (\array_key_exists('finance_type_id', $data) && null === $data['finance_type_id']) {
            $object->setFinanceTypeId(null);
        }
        if (\array_key_exists('finance_uuid', $data) && null !== $data['finance_uuid']) {
            $object->setFinanceUuid($data['finance_uuid']);
        } elseif (\array_key_exists('finance_uuid', $data) && null === $data['finance_uuid']) {
            $object->setFinanceUuid(null);
        }
        if (\array_key_exists('financed_amount', $data) && null !== $data['financed_amount']) {
            $object->setFinancedAmount($data['financed_amount']);
        } elseif (\array_key_exists('financed_amount', $data) && null === $data['financed_amount']) {
            $object->setFinancedAmount(null);
        }
        if (\array_key_exists('fuel', $data) && null !== $data['fuel']) {
            $object->setFuel($this->denormalizer->denormalize($data['fuel'], 'CatchE\\OpenApi2\\Model\\QuoteFuel', 'json', $context));
        } elseif (\array_key_exists('fuel', $data) && null === $data['fuel']) {
            $object->setFuel(null);
        }
        if (\array_key_exists('fuel_on_delivery_fee', $data) && null !== $data['fuel_on_delivery_fee']) {
            $object->setFuelOnDeliveryFee($data['fuel_on_delivery_fee']);
        } elseif (\array_key_exists('fuel_on_delivery_fee', $data) && null === $data['fuel_on_delivery_fee']) {
            $object->setFuelOnDeliveryFee(null);
        }
        if (\array_key_exists('gap_insurance', $data) && null !== $data['gap_insurance']) {
            $object->setGapInsurance($data['gap_insurance']);
        } elseif (\array_key_exists('gap_insurance', $data) && null === $data['gap_insurance']) {
            $object->setGapInsurance(null);
        }
        if (\array_key_exists('gap_insurance_flag', $data) && null !== $data['gap_insurance_flag']) {
            $object->setGapInsuranceFlag($data['gap_insurance_flag']);
        } elseif (\array_key_exists('gap_insurance_flag', $data) && null === $data['gap_insurance_flag']) {
            $object->setGapInsuranceFlag(null);
        }
        if (\array_key_exists('gst_on_interest', $data) && null !== $data['gst_on_interest']) {
            $object->setGstOnInterest($data['gst_on_interest']);
        } elseif (\array_key_exists('gst_on_interest', $data) && null === $data['gst_on_interest']) {
            $object->setGstOnInterest(null);
        }
        if (\array_key_exists('high_km_adjustment_rate', $data) && null !== $data['high_km_adjustment_rate']) {
            $object->setHighKmAdjustmentRate($data['high_km_adjustment_rate']);
        } elseif (\array_key_exists('high_km_adjustment_rate', $data) && null === $data['high_km_adjustment_rate']) {
            $object->setHighKmAdjustmentRate(null);
        }
        if (\array_key_exists('inclusion_plans', $data) && null !== $data['inclusion_plans']) {
            $values_1 = [];
            foreach ($data['inclusion_plans'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CatchE\\OpenApi2\\Model\\QuoteInclusionPlan', 'json', $context);
            }
            $object->setInclusionPlans($values_1);
        } elseif (\array_key_exists('inclusion_plans', $data) && null === $data['inclusion_plans']) {
            $object->setInclusionPlans(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'CatchE\\OpenApi2\\Model\\QuoteInsurance', 'json', $context));
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
        if (\array_key_exists('insurance_disclosures', $data) && null !== $data['insurance_disclosures']) {
            $values_2 = [];
            foreach ($data['insurance_disclosures'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CatchE\\OpenApi2\\Model\\QuoteInsuranceDisclosure', 'json', $context);
            }
            $object->setInsuranceDisclosures($values_2);
        } elseif (\array_key_exists('insurance_disclosures', $data) && null === $data['insurance_disclosures']) {
            $object->setInsuranceDisclosures(null);
        }
        if (\array_key_exists('insurance_loading_types', $data) && null !== $data['insurance_loading_types']) {
            $object->setInsuranceLoadingTypes($this->denormalizer->denormalize($data['insurance_loading_types'], 'CatchE\\OpenApi2\\Model\\QuoteInsuranceLoadingTypes', 'json', $context));
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
        if (\array_key_exists('interest_on_residual', $data) && null !== $data['interest_on_residual']) {
            $object->setInterestOnResidual($data['interest_on_residual']);
        } elseif (\array_key_exists('interest_on_residual', $data) && null === $data['interest_on_residual']) {
            $object->setInterestOnResidual(null);
        }
        if (\array_key_exists('lessee_rate', $data) && null !== $data['lessee_rate']) {
            $object->setLesseeRate($data['lessee_rate']);
        } elseif (\array_key_exists('lessee_rate', $data) && null === $data['lessee_rate']) {
            $object->setLesseeRate(null);
        }
        if (\array_key_exists('list_price_gst', $data) && null !== $data['list_price_gst']) {
            $object->setListPriceGst($data['list_price_gst']);
        } elseif (\array_key_exists('list_price_gst', $data) && null === $data['list_price_gst']) {
            $object->setListPriceGst(null);
        }
        if (\array_key_exists('list_price_net', $data) && null !== $data['list_price_net']) {
            $object->setListPriceNet($data['list_price_net']);
        } elseif (\array_key_exists('list_price_net', $data) && null === $data['list_price_net']) {
            $object->setListPriceNet(null);
        }
        if (\array_key_exists('location_name', $data) && null !== $data['location_name']) {
            $object->setLocationName($data['location_name']);
        } elseif (\array_key_exists('location_name', $data) && null === $data['location_name']) {
            $object->setLocationName(null);
        }
        if (\array_key_exists('location_registration_id', $data) && null !== $data['location_registration_id']) {
            $object->setLocationRegistrationId($data['location_registration_id']);
        } elseif (\array_key_exists('location_registration_id', $data) && null === $data['location_registration_id']) {
            $object->setLocationRegistrationId(null);
        }
        if (\array_key_exists('lock_comprehensive_insurance_flag', $data) && null !== $data['lock_comprehensive_insurance_flag']) {
            $object->setLockComprehensiveInsuranceFlag($data['lock_comprehensive_insurance_flag']);
        } elseif (\array_key_exists('lock_comprehensive_insurance_flag', $data) && null === $data['lock_comprehensive_insurance_flag']) {
            $object->setLockComprehensiveInsuranceFlag(null);
        }
        if (\array_key_exists('lock_dealer_discount_flag', $data) && null !== $data['lock_dealer_discount_flag']) {
            $object->setLockDealerDiscountFlag($data['lock_dealer_discount_flag']);
        } elseif (\array_key_exists('lock_dealer_discount_flag', $data) && null === $data['lock_dealer_discount_flag']) {
            $object->setLockDealerDiscountFlag(null);
        }
        if (\array_key_exists('lock_discount_flag', $data) && null !== $data['lock_discount_flag']) {
            $object->setLockDiscountFlag($data['lock_discount_flag']);
        } elseif (\array_key_exists('lock_discount_flag', $data) && null === $data['lock_discount_flag']) {
            $object->setLockDiscountFlag(null);
        }
        if (\array_key_exists('lock_fbt_value_flag', $data) && null !== $data['lock_fbt_value_flag']) {
            $object->setLockFbtValueFlag($data['lock_fbt_value_flag']);
        } elseif (\array_key_exists('lock_fbt_value_flag', $data) && null === $data['lock_fbt_value_flag']) {
            $object->setLockFbtValueFlag(null);
        }
        if (\array_key_exists('lock_lease_rate_flag', $data) && null !== $data['lock_lease_rate_flag']) {
            $object->setLockLeaseRateFlag($data['lock_lease_rate_flag']);
        } elseif (\array_key_exists('lock_lease_rate_flag', $data) && null === $data['lock_lease_rate_flag']) {
            $object->setLockLeaseRateFlag(null);
        }
        if (\array_key_exists('lock_luxury_car_tax_flag', $data) && null !== $data['lock_luxury_car_tax_flag']) {
            $object->setLockLuxuryCarTaxFlag($data['lock_luxury_car_tax_flag']);
        } elseif (\array_key_exists('lock_luxury_car_tax_flag', $data) && null === $data['lock_luxury_car_tax_flag']) {
            $object->setLockLuxuryCarTaxFlag(null);
        }
        if (\array_key_exists('lock_purchase_stamp_duty_flag', $data) && null !== $data['lock_purchase_stamp_duty_flag']) {
            $object->setLockPurchaseStampDutyFlag($data['lock_purchase_stamp_duty_flag']);
        } elseif (\array_key_exists('lock_purchase_stamp_duty_flag', $data) && null === $data['lock_purchase_stamp_duty_flag']) {
            $object->setLockPurchaseStampDutyFlag(null);
        }
        if (\array_key_exists('lock_quote_flag', $data) && null !== $data['lock_quote_flag']) {
            $object->setLockQuoteFlag($data['lock_quote_flag']);
        } elseif (\array_key_exists('lock_quote_flag', $data) && null === $data['lock_quote_flag']) {
            $object->setLockQuoteFlag(null);
        }
        if (\array_key_exists('lock_redundancy_insurance_flag', $data) && null !== $data['lock_redundancy_insurance_flag']) {
            $object->setLockRedundancyInsuranceFlag($data['lock_redundancy_insurance_flag']);
        } elseif (\array_key_exists('lock_redundancy_insurance_flag', $data) && null === $data['lock_redundancy_insurance_flag']) {
            $object->setLockRedundancyInsuranceFlag(null);
        }
        if (\array_key_exists('lock_residual_flag', $data) && null !== $data['lock_residual_flag']) {
            $object->setLockResidualFlag($data['lock_residual_flag']);
        } elseif (\array_key_exists('lock_residual_flag', $data) && null === $data['lock_residual_flag']) {
            $object->setLockResidualFlag(null);
        }
        if (\array_key_exists('look_ahead', $data) && null !== $data['look_ahead']) {
            $object->setLookAhead($data['look_ahead']);
        } elseif (\array_key_exists('look_ahead', $data) && null === $data['look_ahead']) {
            $object->setLookAhead(null);
        }
        if (\array_key_exists('lti', $data) && null !== $data['lti']) {
            $object->setLti($this->denormalizer->denormalize($data['lti'], 'CatchE\\OpenApi2\\Model\\QuoteLti', 'json', $context));
        } elseif (\array_key_exists('lti', $data) && null === $data['lti']) {
            $object->setLti(null);
        }
        if (\array_key_exists('luxury_car_tax', $data) && null !== $data['luxury_car_tax']) {
            $object->setLuxuryCarTax($data['luxury_car_tax']);
        } elseif (\array_key_exists('luxury_car_tax', $data) && null === $data['luxury_car_tax']) {
            $object->setLuxuryCarTax(null);
        }
        if (\array_key_exists('luxury_car_tax_exempt_flag', $data) && null !== $data['luxury_car_tax_exempt_flag']) {
            $object->setLuxuryCarTaxExemptFlag($data['luxury_car_tax_exempt_flag']);
        } elseif (\array_key_exists('luxury_car_tax_exempt_flag', $data) && null === $data['luxury_car_tax_exempt_flag']) {
            $object->setLuxuryCarTaxExemptFlag(null);
        }
        if (\array_key_exists('luxury_charge', $data) && null !== $data['luxury_charge']) {
            $object->setLuxuryCharge($data['luxury_charge']);
        } elseif (\array_key_exists('luxury_charge', $data) && null === $data['luxury_charge']) {
            $object->setLuxuryCharge(null);
        }
        if (\array_key_exists('maintenance_service', $data) && null !== $data['maintenance_service']) {
            $object->setMaintenanceService($this->denormalizer->denormalize($data['maintenance_service'], 'CatchE\\OpenApi2\\Model\\QuoteMaintenanceService', 'json', $context));
        } elseif (\array_key_exists('maintenance_service', $data) && null === $data['maintenance_service']) {
            $object->setMaintenanceService(null);
        }
        if (\array_key_exists('margin_gst', $data) && null !== $data['margin_gst']) {
            $object->setMarginGst($data['margin_gst']);
        } elseif (\array_key_exists('margin_gst', $data) && null === $data['margin_gst']) {
            $object->setMarginGst(null);
        }
        if (\array_key_exists('margin_net', $data) && null !== $data['margin_net']) {
            $object->setMarginNet($data['margin_net']);
        } elseif (\array_key_exists('margin_net', $data) && null === $data['margin_net']) {
            $object->setMarginNet(null);
        }
        if (\array_key_exists('months_in_arrears', $data) && null !== $data['months_in_arrears']) {
            $object->setMonthsInArrears($data['months_in_arrears']);
        } elseif (\array_key_exists('months_in_arrears', $data) && null === $data['months_in_arrears']) {
            $object->setMonthsInArrears(null);
        }
        if (\array_key_exists('mortgage_duty', $data) && null !== $data['mortgage_duty']) {
            $object->setMortgageDuty($data['mortgage_duty']);
        } elseif (\array_key_exists('mortgage_duty', $data) && null === $data['mortgage_duty']) {
            $object->setMortgageDuty(null);
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
        if (\array_key_exists('on_road_price_gst', $data) && null !== $data['on_road_price_gst']) {
            $object->setOnRoadPriceGst($data['on_road_price_gst']);
        } elseif (\array_key_exists('on_road_price_gst', $data) && null === $data['on_road_price_gst']) {
            $object->setOnRoadPriceGst(null);
        }
        if (\array_key_exists('on_road_price_net', $data) && null !== $data['on_road_price_net']) {
            $object->setOnRoadPriceNet($data['on_road_price_net']);
        } elseif (\array_key_exists('on_road_price_net', $data) && null === $data['on_road_price_net']) {
            $object->setOnRoadPriceNet(null);
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
        if (\array_key_exists('optional_equipment', $data) && null !== $data['optional_equipment']) {
            $values_3 = [];
            foreach ($data['optional_equipment'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CatchE\\OpenApi2\\Model\\QuoteOptionalEquipment', 'json', $context);
            }
            $object->setOptionalEquipment($values_3);
        } elseif (\array_key_exists('optional_equipment', $data) && null === $data['optional_equipment']) {
            $object->setOptionalEquipment(null);
        }
        if (\array_key_exists('optional_equipment_gst', $data) && null !== $data['optional_equipment_gst']) {
            $object->setOptionalEquipmentGst($data['optional_equipment_gst']);
        } elseif (\array_key_exists('optional_equipment_gst', $data) && null === $data['optional_equipment_gst']) {
            $object->setOptionalEquipmentGst(null);
        }
        if (\array_key_exists('optional_equipment_net', $data) && null !== $data['optional_equipment_net']) {
            $object->setOptionalEquipmentNet($data['optional_equipment_net']);
        } elseif (\array_key_exists('optional_equipment_net', $data) && null === $data['optional_equipment_net']) {
            $object->setOptionalEquipmentNet(null);
        }
        if (\array_key_exists('originator_fee', $data) && null !== $data['originator_fee']) {
            $object->setOriginatorFee($data['originator_fee']);
        } elseif (\array_key_exists('originator_fee', $data) && null === $data['originator_fee']) {
            $object->setOriginatorFee(null);
        }
        if (\array_key_exists('originator_id', $data) && null !== $data['originator_id']) {
            $object->setOriginatorId($data['originator_id']);
        } elseif (\array_key_exists('originator_id', $data) && null === $data['originator_id']) {
            $object->setOriginatorId(null);
        }
        if (\array_key_exists('other_brokerage', $data) && null !== $data['other_brokerage']) {
            $object->setOtherBrokerage($data['other_brokerage']);
        } elseif (\array_key_exists('other_brokerage', $data) && null === $data['other_brokerage']) {
            $object->setOtherBrokerage(null);
        }
        if (\array_key_exists('package_admin_fee', $data) && null !== $data['package_admin_fee']) {
            $object->setPackageAdminFee($data['package_admin_fee']);
        } elseif (\array_key_exists('package_admin_fee', $data) && null === $data['package_admin_fee']) {
            $object->setPackageAdminFee(null);
        }
        if (\array_key_exists('packaging_advice_fee', $data) && null !== $data['packaging_advice_fee']) {
            $object->setPackagingAdviceFee($data['packaging_advice_fee']);
        } elseif (\array_key_exists('packaging_advice_fee', $data) && null === $data['packaging_advice_fee']) {
            $object->setPackagingAdviceFee(null);
        }
        if (\array_key_exists('parent_quote_id', $data) && null !== $data['parent_quote_id']) {
            $object->setParentQuoteId($data['parent_quote_id']);
        } elseif (\array_key_exists('parent_quote_id', $data) && null === $data['parent_quote_id']) {
            $object->setParentQuoteId(null);
        }
        if (\array_key_exists('pay_cycle_billing_periods', $data) && null !== $data['pay_cycle_billing_periods']) {
            $object->setPayCycleBillingPeriods($data['pay_cycle_billing_periods']);
        } elseif (\array_key_exists('pay_cycle_billing_periods', $data) && null === $data['pay_cycle_billing_periods']) {
            $object->setPayCycleBillingPeriods(null);
        }
        if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
            $object->setPayCycleId($data['pay_cycle_id']);
        } elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
            $object->setPayCycleId(null);
        }
        if (\array_key_exists('periods_deferred', $data) && null !== $data['periods_deferred']) {
            $object->setPeriodsDeferred($data['periods_deferred']);
        } elseif (\array_key_exists('periods_deferred', $data) && null === $data['periods_deferred']) {
            $object->setPeriodsDeferred(null);
        }
        if (\array_key_exists('plate_year', $data) && null !== $data['plate_year']) {
            $object->setPlateYear($data['plate_year']);
        } elseif (\array_key_exists('plate_year', $data) && null === $data['plate_year']) {
            $object->setPlateYear(null);
        }
        if (\array_key_exists('policy_owner_type', $data) && null !== $data['policy_owner_type']) {
            $object->setPolicyOwnerType($data['policy_owner_type']);
        } elseif (\array_key_exists('policy_owner_type', $data) && null === $data['policy_owner_type']) {
            $object->setPolicyOwnerType(null);
        }
        if (\array_key_exists('post_tax_existing', $data) && null !== $data['post_tax_existing']) {
            $object->setPostTaxExisting($data['post_tax_existing']);
        } elseif (\array_key_exists('post_tax_existing', $data) && null === $data['post_tax_existing']) {
            $object->setPostTaxExisting(null);
        }
        if (\array_key_exists('posting_map_id', $data) && null !== $data['posting_map_id']) {
            $object->setPostingMapId($data['posting_map_id']);
        } elseif (\array_key_exists('posting_map_id', $data) && null === $data['posting_map_id']) {
            $object->setPostingMapId(null);
        }
        if (\array_key_exists('pre_tax_existing', $data) && null !== $data['pre_tax_existing']) {
            $object->setPreTaxExisting($data['pre_tax_existing']);
        } elseif (\array_key_exists('pre_tax_existing', $data) && null === $data['pre_tax_existing']) {
            $object->setPreTaxExisting(null);
        }
        if (\array_key_exists('premium_plates_net', $data) && null !== $data['premium_plates_net']) {
            $object->setPremiumPlatesNet($data['premium_plates_net']);
        } elseif (\array_key_exists('premium_plates_net', $data) && null === $data['premium_plates_net']) {
            $object->setPremiumPlatesNet(null);
        }
        if (\array_key_exists('previous_fbt_value', $data) && null !== $data['previous_fbt_value']) {
            $object->setPreviousFbtValue($data['previous_fbt_value']);
        } elseif (\array_key_exists('previous_fbt_value', $data) && null === $data['previous_fbt_value']) {
            $object->setPreviousFbtValue(null);
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
        if (\array_key_exists('purchase_stamp_duty', $data) && null !== $data['purchase_stamp_duty']) {
            $object->setPurchaseStampDuty($data['purchase_stamp_duty']);
        } elseif (\array_key_exists('purchase_stamp_duty', $data) && null === $data['purchase_stamp_duty']) {
            $object->setPurchaseStampDuty(null);
        }
        if (\array_key_exists('purchase_stamp_duty_exempt_flag', $data) && null !== $data['purchase_stamp_duty_exempt_flag']) {
            $object->setPurchaseStampDutyExemptFlag($data['purchase_stamp_duty_exempt_flag']);
        } elseif (\array_key_exists('purchase_stamp_duty_exempt_flag', $data) && null === $data['purchase_stamp_duty_exempt_flag']) {
            $object->setPurchaseStampDutyExemptFlag(null);
        }
        if (\array_key_exists('quote_date', $data) && null !== $data['quote_date']) {
            $object->setQuoteDate(\DateTime::createFromFormat('Y-m-d', $data['quote_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('quote_date', $data) && null === $data['quote_date']) {
            $object->setQuoteDate(null);
        }
        if (\array_key_exists('quote_status', $data) && null !== $data['quote_status']) {
            $object->setQuoteStatus($this->denormalizer->denormalize($data['quote_status'], 'CatchE\\OpenApi2\\Model\\QuoteStatuses', 'json', $context));
        } elseif (\array_key_exists('quote_status', $data) && null === $data['quote_status']) {
            $object->setQuoteStatus(null);
        }
        if (\array_key_exists('quote_status_id', $data) && null !== $data['quote_status_id']) {
            $object->setQuoteStatusId($data['quote_status_id']);
        } elseif (\array_key_exists('quote_status_id', $data) && null === $data['quote_status_id']) {
            $object->setQuoteStatusId(null);
        }
        if (\array_key_exists('quote_sub_status_id', $data) && null !== $data['quote_sub_status_id']) {
            $object->setQuoteSubStatusId($data['quote_sub_status_id']);
        } elseif (\array_key_exists('quote_sub_status_id', $data) && null === $data['quote_sub_status_id']) {
            $object->setQuoteSubStatusId(null);
        }
        if (\array_key_exists('rebate_gst', $data) && null !== $data['rebate_gst']) {
            $object->setRebateGst($data['rebate_gst']);
        } elseif (\array_key_exists('rebate_gst', $data) && null === $data['rebate_gst']) {
            $object->setRebateGst(null);
        }
        if (\array_key_exists('rebate_net', $data) && null !== $data['rebate_net']) {
            $object->setRebateNet($data['rebate_net']);
        } elseif (\array_key_exists('rebate_net', $data) && null === $data['rebate_net']) {
            $object->setRebateNet(null);
        }
        if (\array_key_exists('reduced_super_flag', $data) && null !== $data['reduced_super_flag']) {
            $object->setReducedSuperFlag($data['reduced_super_flag']);
        } elseif (\array_key_exists('reduced_super_flag', $data) && null === $data['reduced_super_flag']) {
            $object->setReducedSuperFlag(null);
        }
        if (\array_key_exists('redundancy_insurance', $data) && null !== $data['redundancy_insurance']) {
            $object->setRedundancyInsurance($data['redundancy_insurance']);
        } elseif (\array_key_exists('redundancy_insurance', $data) && null === $data['redundancy_insurance']) {
            $object->setRedundancyInsurance(null);
        }
        if (\array_key_exists('redundancy_insurance_cost', $data) && null !== $data['redundancy_insurance_cost']) {
            $object->setRedundancyInsuranceCost($data['redundancy_insurance_cost']);
        } elseif (\array_key_exists('redundancy_insurance_cost', $data) && null === $data['redundancy_insurance_cost']) {
            $object->setRedundancyInsuranceCost(null);
        }
        if (\array_key_exists('redundancy_insurance_flag', $data) && null !== $data['redundancy_insurance_flag']) {
            $object->setRedundancyInsuranceFlag($data['redundancy_insurance_flag']);
        } elseif (\array_key_exists('redundancy_insurance_flag', $data) && null === $data['redundancy_insurance_flag']) {
            $object->setRedundancyInsuranceFlag(null);
        }
        if (\array_key_exists('redundancy_insurance_rate', $data) && null !== $data['redundancy_insurance_rate']) {
            $object->setRedundancyInsuranceRate($data['redundancy_insurance_rate']);
        } elseif (\array_key_exists('redundancy_insurance_rate', $data) && null === $data['redundancy_insurance_rate']) {
            $object->setRedundancyInsuranceRate(null);
        }
        if (\array_key_exists('redundancy_insurance_validation_flag', $data) && null !== $data['redundancy_insurance_validation_flag']) {
            $object->setRedundancyInsuranceValidationFlag($data['redundancy_insurance_validation_flag']);
        } elseif (\array_key_exists('redundancy_insurance_validation_flag', $data) && null === $data['redundancy_insurance_validation_flag']) {
            $object->setRedundancyInsuranceValidationFlag(null);
        }
        if (\array_key_exists('reg_ctp', $data) && null !== $data['reg_ctp']) {
            $object->setRegCtp($this->denormalizer->denormalize($data['reg_ctp'], 'CatchE\\OpenApi2\\Model\\QuoteRegCtp', 'json', $context));
        } elseif (\array_key_exists('reg_ctp', $data) && null === $data['reg_ctp']) {
            $object->setRegCtp(null);
        }
        if (\array_key_exists('reg_initial_net', $data) && null !== $data['reg_initial_net']) {
            $object->setRegInitialNet($data['reg_initial_net']);
        } elseif (\array_key_exists('reg_initial_net', $data) && null === $data['reg_initial_net']) {
            $object->setRegInitialNet(null);
        }
        if (\array_key_exists('relief_vehicle', $data) && null !== $data['relief_vehicle']) {
            $object->setReliefVehicle($this->denormalizer->denormalize($data['relief_vehicle'], 'CatchE\\OpenApi2\\Model\\QuoteReliefVehicle', 'json', $context));
        } elseif (\array_key_exists('relief_vehicle', $data) && null === $data['relief_vehicle']) {
            $object->setReliefVehicle(null);
        }
        if (\array_key_exists('residual_basis', $data) && null !== $data['residual_basis']) {
            $object->setResidualBasis($data['residual_basis']);
        } elseif (\array_key_exists('residual_basis', $data) && null === $data['residual_basis']) {
            $object->setResidualBasis(null);
        }
        if (\array_key_exists('residual_cash_pool_gst', $data) && null !== $data['residual_cash_pool_gst']) {
            $object->setResidualCashPoolGst($data['residual_cash_pool_gst']);
        } elseif (\array_key_exists('residual_cash_pool_gst', $data) && null === $data['residual_cash_pool_gst']) {
            $object->setResidualCashPoolGst(null);
        }
        if (\array_key_exists('residual_cash_pool_net', $data) && null !== $data['residual_cash_pool_net']) {
            $object->setResidualCashPoolNet($data['residual_cash_pool_net']);
        } elseif (\array_key_exists('residual_cash_pool_net', $data) && null === $data['residual_cash_pool_net']) {
            $object->setResidualCashPoolNet(null);
        }
        if (\array_key_exists('residual_cash_pool_rate', $data) && null !== $data['residual_cash_pool_rate']) {
            $object->setResidualCashPoolRate($data['residual_cash_pool_rate']);
        } elseif (\array_key_exists('residual_cash_pool_rate', $data) && null === $data['residual_cash_pool_rate']) {
            $object->setResidualCashPoolRate(null);
        }
        if (\array_key_exists('residual_gst', $data) && null !== $data['residual_gst']) {
            $object->setResidualGst($data['residual_gst']);
        } elseif (\array_key_exists('residual_gst', $data) && null === $data['residual_gst']) {
            $object->setResidualGst(null);
        }
        if (\array_key_exists('residual_insurance', $data) && null !== $data['residual_insurance']) {
            $object->setResidualInsurance($data['residual_insurance']);
        } elseif (\array_key_exists('residual_insurance', $data) && null === $data['residual_insurance']) {
            $object->setResidualInsurance(null);
        }
        if (\array_key_exists('residual_insurance_rate', $data) && null !== $data['residual_insurance_rate']) {
            $object->setResidualInsuranceRate($data['residual_insurance_rate']);
        } elseif (\array_key_exists('residual_insurance_rate', $data) && null === $data['residual_insurance_rate']) {
            $object->setResidualInsuranceRate(null);
        }
        if (\array_key_exists('residual_net', $data) && null !== $data['residual_net']) {
            $object->setResidualNet($data['residual_net']);
        } elseif (\array_key_exists('residual_net', $data) && null === $data['residual_net']) {
            $object->setResidualNet(null);
        }
        if (\array_key_exists('residual_rate', $data) && null !== $data['residual_rate']) {
            $object->setResidualRate($data['residual_rate']);
        } elseif (\array_key_exists('residual_rate', $data) && null === $data['residual_rate']) {
            $object->setResidualRate(null);
        }
        if (\array_key_exists('residual_rate_gross', $data) && null !== $data['residual_rate_gross']) {
            $object->setResidualRateGross($data['residual_rate_gross']);
        } elseif (\array_key_exists('residual_rate_gross', $data) && null === $data['residual_rate_gross']) {
            $object->setResidualRateGross(null);
        }
        if (\array_key_exists('residual_rate_net', $data) && null !== $data['residual_rate_net']) {
            $object->setResidualRateNet($data['residual_rate_net']);
        } elseif (\array_key_exists('residual_rate_net', $data) && null === $data['residual_rate_net']) {
            $object->setResidualRateNet(null);
        }
        if (\array_key_exists('revs_fee', $data) && null !== $data['revs_fee']) {
            $object->setRevsFee($data['revs_fee']);
        } elseif (\array_key_exists('revs_fee', $data) && null === $data['revs_fee']) {
            $object->setRevsFee(null);
        }
        if (\array_key_exists('roadside_assistance', $data) && null !== $data['roadside_assistance']) {
            $object->setRoadsideAssistance($this->denormalizer->denormalize($data['roadside_assistance'], 'CatchE\\OpenApi2\\Model\\QuoteRoadsideAssistance', 'json', $context));
        } elseif (\array_key_exists('roadside_assistance', $data) && null === $data['roadside_assistance']) {
            $object->setRoadsideAssistance(null);
        }
        if (\array_key_exists('small_damage_repairs', $data) && null !== $data['small_damage_repairs']) {
            $object->setSmallDamageRepairs($this->denormalizer->denormalize($data['small_damage_repairs'], 'CatchE\\OpenApi2\\Model\\QuoteSmallDamageRepairs', 'json', $context));
        } elseif (\array_key_exists('small_damage_repairs', $data) && null === $data['small_damage_repairs']) {
            $object->setSmallDamageRepairs(null);
        }
        if (\array_key_exists('state', $data) && null !== $data['state']) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && null === $data['state']) {
            $object->setState(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
        }
        if (\array_key_exists('superannuation', $data) && null !== $data['superannuation']) {
            $object->setSuperannuation($data['superannuation']);
        } elseif (\array_key_exists('superannuation', $data) && null === $data['superannuation']) {
            $object->setSuperannuation(null);
        }
        if (\array_key_exists('supplier_id_broker', $data) && null !== $data['supplier_id_broker']) {
            $object->setSupplierIdBroker($data['supplier_id_broker']);
        } elseif (\array_key_exists('supplier_id_broker', $data) && null === $data['supplier_id_broker']) {
            $object->setSupplierIdBroker(null);
        }
        if (\array_key_exists('supplier_id_dealer', $data) && null !== $data['supplier_id_dealer']) {
            $object->setSupplierIdDealer($data['supplier_id_dealer']);
        } elseif (\array_key_exists('supplier_id_dealer', $data) && null === $data['supplier_id_dealer']) {
            $object->setSupplierIdDealer(null);
        }
        if (\array_key_exists('supplier_id_financier', $data) && null !== $data['supplier_id_financier']) {
            $object->setSupplierIdFinancier($data['supplier_id_financier']);
        } elseif (\array_key_exists('supplier_id_financier', $data) && null === $data['supplier_id_financier']) {
            $object->setSupplierIdFinancier(null);
        }
        if (\array_key_exists('supplier_id_insurer', $data) && null !== $data['supplier_id_insurer']) {
            $object->setSupplierIdInsurer($data['supplier_id_insurer']);
        } elseif (\array_key_exists('supplier_id_insurer', $data) && null === $data['supplier_id_insurer']) {
            $object->setSupplierIdInsurer(null);
        }
        if (\array_key_exists('supplier_id_residual_insurer', $data) && null !== $data['supplier_id_residual_insurer']) {
            $object->setSupplierIdResidualInsurer($data['supplier_id_residual_insurer']);
        } elseif (\array_key_exists('supplier_id_residual_insurer', $data) && null === $data['supplier_id_residual_insurer']) {
            $object->setSupplierIdResidualInsurer(null);
        }
        if (\array_key_exists('term', $data) && null !== $data['term']) {
            $object->setTerm($data['term']);
        } elseif (\array_key_exists('term', $data) && null === $data['term']) {
            $object->setTerm(null);
        }
        if (\array_key_exists('total_brokerage', $data) && null !== $data['total_brokerage']) {
            $object->setTotalBrokerage($data['total_brokerage']);
        } elseif (\array_key_exists('total_brokerage', $data) && null === $data['total_brokerage']) {
            $object->setTotalBrokerage(null);
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
        if (\array_key_exists('trade_in_vehicle_description', $data) && null !== $data['trade_in_vehicle_description']) {
            $object->setTradeInVehicleDescription($data['trade_in_vehicle_description']);
        } elseif (\array_key_exists('trade_in_vehicle_description', $data) && null === $data['trade_in_vehicle_description']) {
            $object->setTradeInVehicleDescription(null);
        }
        if (\array_key_exists('trim_preference', $data) && null !== $data['trim_preference']) {
            $object->setTrimPreference($data['trim_preference']);
        } elseif (\array_key_exists('trim_preference', $data) && null === $data['trim_preference']) {
            $object->setTrimPreference(null);
        }
        if (\array_key_exists('tyres', $data) && null !== $data['tyres']) {
            $object->setTyres($this->denormalizer->denormalize($data['tyres'], 'CatchE\\OpenApi2\\Model\\QuoteTyres', 'json', $context));
        } elseif (\array_key_exists('tyres', $data) && null === $data['tyres']) {
            $object->setTyres(null);
        }
        if (\array_key_exists('tyre_rim_insurance', $data) && null !== $data['tyre_rim_insurance']) {
            $object->setTyreRimInsurance($this->denormalizer->denormalize($data['tyre_rim_insurance'], 'CatchE\\OpenApi2\\Model\\QuoteTyreRimInsurance', 'json', $context));
        } elseif (\array_key_exists('tyre_rim_insurance', $data) && null === $data['tyre_rim_insurance']) {
            $object->setTyreRimInsurance(null);
        }
        if (\array_key_exists('tyre_rim_insurance_flag', $data) && null !== $data['tyre_rim_insurance_flag']) {
            $object->setTyreRimInsuranceFlag($data['tyre_rim_insurance_flag']);
        } elseif (\array_key_exists('tyre_rim_insurance_flag', $data) && null === $data['tyre_rim_insurance_flag']) {
            $object->setTyreRimInsuranceFlag(null);
        }
        if (\array_key_exists('usage_adjustment_rate', $data) && null !== $data['usage_adjustment_rate']) {
            $object->setUsageAdjustmentRate($data['usage_adjustment_rate']);
        } elseif (\array_key_exists('usage_adjustment_rate', $data) && null === $data['usage_adjustment_rate']) {
            $object->setUsageAdjustmentRate(null);
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
        if (\array_key_exists('variant_adjustment_rate', $data) && null !== $data['variant_adjustment_rate']) {
            $object->setVariantAdjustmentRate($data['variant_adjustment_rate']);
        } elseif (\array_key_exists('variant_adjustment_rate', $data) && null === $data['variant_adjustment_rate']) {
            $object->setVariantAdjustmentRate(null);
        }
        if (\array_key_exists('variant_bonus_id', $data) && null !== $data['variant_bonus_id']) {
            $object->setVariantBonusId($data['variant_bonus_id']);
        } elseif (\array_key_exists('variant_bonus_id', $data) && null === $data['variant_bonus_id']) {
            $object->setVariantBonusId(null);
        }
        if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
            $object->setVariantId($data['variant_id']);
        } elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('vehicle_maintenance_program', $data) && null !== $data['vehicle_maintenance_program']) {
            $object->setVehicleMaintenanceProgram($this->denormalizer->denormalize($data['vehicle_maintenance_program'], 'CatchE\\OpenApi2\\Model\\QuoteVehicleMaintenanceProgram', 'json', $context));
        } elseif (\array_key_exists('vehicle_maintenance_program', $data) && null === $data['vehicle_maintenance_program']) {
            $object->setVehicleMaintenanceProgram(null);
        }
        if (\array_key_exists('vehicle_tracking_system_flag', $data) && null !== $data['vehicle_tracking_system_flag']) {
            $object->setVehicleTrackingSystemFlag($data['vehicle_tracking_system_flag']);
        } elseif (\array_key_exists('vehicle_tracking_system_flag', $data) && null === $data['vehicle_tracking_system_flag']) {
            $object->setVehicleTrackingSystemFlag(null);
        }
        if (\array_key_exists('vehicle_usage_type_id', $data) && null !== $data['vehicle_usage_type_id']) {
            $object->setVehicleUsageTypeId($data['vehicle_usage_type_id']);
        } elseif (\array_key_exists('vehicle_usage_type_id', $data) && null === $data['vehicle_usage_type_id']) {
            $object->setVehicleUsageTypeId(null);
        }
        if (\array_key_exists('walkaway', $data) && null !== $data['walkaway']) {
            $object->setWalkaway($this->denormalizer->denormalize($data['walkaway'], 'CatchE\\OpenApi2\\Model\\QuoteWalkaway', 'json', $context));
        } elseif (\array_key_exists('walkaway', $data) && null === $data['walkaway']) {
            $object->setWalkaway(null);
        }
        if (\array_key_exists('walkaway_flag', $data) && null !== $data['walkaway_flag']) {
            $object->setWalkawayFlag($data['walkaway_flag']);
        } elseif (\array_key_exists('walkaway_flag', $data) && null === $data['walkaway_flag']) {
            $object->setWalkawayFlag(null);
        }
        if (\array_key_exists('warrant_of_fitness', $data) && null !== $data['warrant_of_fitness']) {
            $object->setWarrantOfFitness($this->denormalizer->denormalize($data['warrant_of_fitness'], 'CatchE\\OpenApi2\\Model\\QuoteWarrantOfFitness', 'json', $context));
        } elseif (\array_key_exists('warrant_of_fitness', $data) && null === $data['warrant_of_fitness']) {
            $object->setWarrantOfFitness(null);
        }
        if (\array_key_exists('warranty_kms', $data) && null !== $data['warranty_kms']) {
            $object->setWarrantyKms($data['warranty_kms']);
        } elseif (\array_key_exists('warranty_kms', $data) && null === $data['warranty_kms']) {
            $object->setWarrantyKms(null);
        }
        if (\array_key_exists('warranty_mths', $data) && null !== $data['warranty_mths']) {
            $object->setWarrantyMths($data['warranty_mths']);
        } elseif (\array_key_exists('warranty_mths', $data) && null === $data['warranty_mths']) {
            $object->setWarrantyMths(null);
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
        if (null !== $object->getAcceptedCount()) {
            $data['accepted_count'] = $object->getAcceptedCount();
        }
        if (null !== $object->getAccidentManagementFee()) {
            $data['accident_management_fee'] = $this->normalizer->normalize($object->getAccidentManagementFee(), 'json', $context);
        }
        if (null !== $object->getAdvanceArrears()) {
            $data['advance_arrears'] = $object->getAdvanceArrears();
        }
        if (null !== $object->getAfterHoursAssistanceFlag()) {
            $data['after_hours_assistance_flag'] = $object->getAfterHoursAssistanceFlag();
        }
        if (null !== $object->getAllowances()) {
            $data['allowances'] = $object->getAllowances();
        }
        $data['annual_kilometers'] = $object->getAnnualKilometers();
        $data['annual_salary'] = $object->getAnnualSalary();
        if (null !== $object->getApplicationCollectionDate()) {
            $data['application_collection_date'] = $object->getApplicationCollectionDate()->format('Y-m-d');
        }
        if (null !== $object->getApplicationDate()) {
            $data['application_date'] = $object->getApplicationDate()->format('Y-m-d');
        }
        if (null !== $object->getApplicationReference()) {
            $data['application_reference'] = $object->getApplicationReference();
        }
        if (null !== $object->getApplicationStatus()) {
            $data['application_status'] = $object->getApplicationStatus();
        }
        if (null !== $object->getApplicationStatusFlag()) {
            $data['application_status_flag'] = $object->getApplicationStatusFlag();
        }
        if (null !== $object->getArrearsInterest()) {
            $data['arrears_interest'] = $object->getArrearsInterest();
        }
        if (null !== $object->getAtoLoanFlag()) {
            $data['ato_loan_flag'] = $object->getAtoLoanFlag();
        }
        if (null !== $object->getBaseRate()) {
            $data['base_rate'] = $object->getBaseRate();
        }
        if (null !== $object->getBaseResidualRate()) {
            $data['base_residual_rate'] = $object->getBaseResidualRate();
        }
        if (null !== $object->getBespokeFieldValues()) {
            $data['bespoke_field_values'] = $object->getBespokeFieldValues();
        }
        if (null !== $object->getBillingPeriods()) {
            $data['billing_periods'] = $object->getBillingPeriods();
        }
        if (null !== $object->getBonusAmountGst()) {
            $data['bonus_amount_gst'] = $object->getBonusAmountGst();
        }
        if (null !== $object->getBonusAmountNet()) {
            $data['bonus_amount_net'] = $object->getBonusAmountNet();
        }
        if (null !== $object->getBrokerFee()) {
            $data['broker_fee'] = $object->getBrokerFee();
        }
        if (null !== $object->getBrokerRate()) {
            $data['broker_rate'] = $object->getBrokerRate();
        }
        if (null !== $object->getBudgets()) {
            $values = [];
            foreach ($object->getBudgets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['budgets'] = $values;
        }
        if (null !== $object->getBudgetsFinanced()) {
            $data['budgets_financed'] = $object->getBudgetsFinanced();
        }
        if (null !== $object->getCarbonEmissionsOffset()) {
            $data['carbon_emissions_offset'] = $this->normalizer->normalize($object->getCarbonEmissionsOffset(), 'json', $context);
        }
        if (null !== $object->getCancelled()) {
            $data['cancelled'] = $object->getCancelled();
        }
        if (null !== $object->getCapitalisedInterest()) {
            $data['capitalised_interest'] = $object->getCapitalisedInterest();
        }
        if (null !== $object->getClaimableGst()) {
            $data['claimable_gst'] = $object->getClaimableGst();
        }
        if (null !== $object->getClientContactName()) {
            $data['client_contact_name'] = $object->getClientContactName();
        }
        if (null !== $object->getClientCostCentreId()) {
            $data['client_cost_centre_id'] = $object->getClientCostCentreId();
        }
        if (null !== $object->getClientDivisionId()) {
            $data['client_division_id'] = $object->getClientDivisionId();
        }
        if (null !== $object->getClientEmail()) {
            $data['client_email'] = $object->getClientEmail();
        }
        if (null !== $object->getClientFax()) {
            $data['client_fax'] = $object->getClientFax();
        }
        if (null !== $object->getClientGroupFlag()) {
            $data['client_group_flag'] = $object->getClientGroupFlag();
        }
        $data['client_id'] = $object->getClientId();
        if (null !== $object->getClientMarginNet()) {
            $data['client_margin_net'] = $object->getClientMarginNet();
        }
        if (null !== $object->getClientMarginRate()) {
            $data['client_margin_rate'] = $object->getClientMarginRate();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getClientPhone()) {
            $data['client_phone'] = $object->getClientPhone();
        }
        if (null !== $object->getClientResidualRate()) {
            $data['client_residual_rate'] = $object->getClientResidualRate();
        }
        if (null !== $object->getClientType()) {
            $data['client_type'] = $object->getClientType();
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
        if (null !== $object->getCommission()) {
            $data['commission'] = $object->getCommission();
        }
        if (null !== $object->getCommissionRate()) {
            $data['commission_rate'] = $object->getCommissionRate();
        }
        if (null !== $object->getCompetitorId()) {
            $data['competitor_id'] = $object->getCompetitorId();
        }
        if (null !== $object->getCompetitorMarginId()) {
            $data['competitor_margin_id'] = $object->getCompetitorMarginId();
        }
        if (null !== $object->getContractKms()) {
            $data['contract_kms'] = $object->getContractKms();
        }
        if (null !== $object->getCostCentre()) {
            $data['cost_centre'] = $object->getCostCentre();
        }
        if (null !== $object->getCsdGst()) {
            $data['csd_gst'] = $object->getCsdGst();
        }
        if (null !== $object->getCsdNet()) {
            $data['csd_net'] = $object->getCsdNet();
        }
        if (null !== $object->getCsdRate()) {
            $data['csd_rate'] = $object->getCsdRate();
        }
        if (null !== $object->getCtpInitialGst()) {
            $data['ctp_initial_gst'] = $object->getCtpInitialGst();
        }
        if (null !== $object->getCtpInitialNet()) {
            $data['ctp_initial_net'] = $object->getCtpInitialNet();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }
        if (null !== $object->getDateTo()) {
            $data['date_to'] = $object->getDateTo()->format('Y-m-d');
        }
        if (null !== $object->getDealTypeId()) {
            $data['deal_type_id'] = $object->getDealTypeId();
        }
        if (null !== $object->getDealerComment()) {
            $data['dealer_comment'] = $object->getDealerComment();
        }
        if (null !== $object->getDealerDeliveryGst()) {
            $data['dealer_delivery_gst'] = $object->getDealerDeliveryGst();
        }
        if (null !== $object->getDealerDeliveryNet()) {
            $data['dealer_delivery_net'] = $object->getDealerDeliveryNet();
        }
        if (null !== $object->getDealerDiscountGst()) {
            $data['dealer_discount_gst'] = $object->getDealerDiscountGst();
        }
        if (null !== $object->getDealerDiscountNet()) {
            $data['dealer_discount_net'] = $object->getDealerDiscountNet();
        }
        if (null !== $object->getDealerRebateGst()) {
            $data['dealer_rebate_gst'] = $object->getDealerRebateGst();
        }
        if (null !== $object->getDealerRebateNet()) {
            $data['dealer_rebate_net'] = $object->getDealerRebateNet();
        }
        if (null !== $object->getDeferredInterest()) {
            $data['deferred_interest'] = $object->getDeferredInterest();
        }
        if (null !== $object->getDeliveryFee()) {
            $data['delivery_fee'] = $object->getDeliveryFee();
        }
        if (null !== $object->getDeliveryLocationType()) {
            $data['delivery_location_type'] = $object->getDeliveryLocationType();
        }
        if (null !== $object->getDepositGst()) {
            $data['deposit_gst'] = $object->getDepositGst();
        }
        if (null !== $object->getDepositNet()) {
            $data['deposit_net'] = $object->getDepositNet();
        }
        if (null !== $object->getDepreciableAmount()) {
            $data['depreciable_amount'] = $object->getDepreciableAmount();
        }
        if (null !== $object->getDiscountGst()) {
            $data['discount_gst'] = $object->getDiscountGst();
        }
        if (null !== $object->getDiscountName()) {
            $data['discount_name'] = $object->getDiscountName();
        }
        if (null !== $object->getDiscountNet()) {
            $data['discount_net'] = $object->getDiscountNet();
        }
        if (null !== $object->getDiscountTypeId()) {
            $data['discount_type_id'] = $object->getDiscountTypeId();
        }
        if (null !== $object->getDisposalFee()) {
            $data['disposal_fee'] = $object->getDisposalFee();
        }
        if (null !== $object->getDisposalFlag()) {
            $data['disposal_flag'] = $object->getDisposalFlag();
        }
        $data['division'] = $object->getDivision();
        if (null !== $object->getDriverEmail()) {
            $data['driver_email'] = $object->getDriverEmail();
        }
        if (null !== $object->getDriverFax()) {
            $data['driver_fax'] = $object->getDriverFax();
        }
        if (null !== $object->getDriverGivenName()) {
            $data['driver_given_name'] = $object->getDriverGivenName();
        }
        if (null !== $object->getDriverId()) {
            $data['driver_id'] = $object->getDriverId();
        }
        if (null !== $object->getDriverPhone()) {
            $data['driver_phone'] = $object->getDriverPhone();
        }
        if (null !== $object->getDriverSurname()) {
            $data['driver_surname'] = $object->getDriverSurname();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getEarlyTerminationFee()) {
            $data['early_termination_fee'] = $object->getEarlyTerminationFee();
        }
        if (null !== $object->getEcmFlag()) {
            $data['ecm_flag'] = $object->getEcmFlag();
        }
        if (null !== $object->getEmployerFbtType()) {
            $data['employer_fbt_type'] = $object->getEmployerFbtType();
        }
        if (null !== $object->getEstablishmentFee()) {
            $data['establishment_fee'] = $object->getEstablishmentFee();
        }
        if (null !== $object->getEstablishmentFeeFundedFlag()) {
            $data['establishment_fee_funded_flag'] = $object->getEstablishmentFeeFundedFlag();
        }
        if (null !== $object->getExcessKmFlag()) {
            $data['excess_km_flag'] = $object->getExcessKmFlag();
        }
        if (null !== $object->getExcessKmRate()) {
            $data['excess_km_rate'] = $object->getExcessKmRate();
        }
        if (null !== $object->getExtendedWarranty()) {
            $data['extended_warranty'] = $this->normalizer->normalize($object->getExtendedWarranty(), 'json', $context);
        }
        if (null !== $object->getFbtBenefitType()) {
            $data['fbt_benefit_type'] = $object->getFbtBenefitType();
        }
        if (null !== $object->getFbtBusinessUse()) {
            $data['fbt_business_use'] = $object->getFbtBusinessUse();
        }
        if (null !== $object->getFbtStatutoryRate()) {
            $data['fbt_statutory_rate'] = $object->getFbtStatutoryRate();
        }
        if (null !== $object->getFbtValue()) {
            $data['fbt_value'] = $object->getFbtValue();
        }
        if (null !== $object->getFbtValueYearly()) {
            $data['fbt_value_yearly'] = $object->getFbtValueYearly();
        }
        if (null !== $object->getFinanceAdministrationFeeGst()) {
            $data['finance_administration_fee_gst'] = $object->getFinanceAdministrationFeeGst();
        }
        if (null !== $object->getFinanceAdministrationFeeNet()) {
            $data['finance_administration_fee_net'] = $object->getFinanceAdministrationFeeNet();
        }
        if (null !== $object->getFinanceMethod()) {
            $data['finance_method'] = $object->getFinanceMethod();
        }
        if (null !== $object->getFinancePmtGst()) {
            $data['finance_pmt_gst'] = $object->getFinancePmtGst();
        }
        if (null !== $object->getFinancePmtNet()) {
            $data['finance_pmt_net'] = $object->getFinancePmtNet();
        }
        if (null !== $object->getFinanceRate()) {
            $data['finance_rate'] = $object->getFinanceRate();
        }
        if (null !== $object->getFinanceTypeId()) {
            $data['finance_type_id'] = $object->getFinanceTypeId();
        }
        if (null !== $object->getFinanceUuid()) {
            $data['finance_uuid'] = $object->getFinanceUuid();
        }
        if (null !== $object->getFinancedAmount()) {
            $data['financed_amount'] = $object->getFinancedAmount();
        }
        if (null !== $object->getFuel()) {
            $data['fuel'] = $this->normalizer->normalize($object->getFuel(), 'json', $context);
        }
        if (null !== $object->getFuelOnDeliveryFee()) {
            $data['fuel_on_delivery_fee'] = $object->getFuelOnDeliveryFee();
        }
        if (null !== $object->getGapInsurance()) {
            $data['gap_insurance'] = $object->getGapInsurance();
        }
        if (null !== $object->getGapInsuranceFlag()) {
            $data['gap_insurance_flag'] = $object->getGapInsuranceFlag();
        }
        if (null !== $object->getGstOnInterest()) {
            $data['gst_on_interest'] = $object->getGstOnInterest();
        }
        if (null !== $object->getHighKmAdjustmentRate()) {
            $data['high_km_adjustment_rate'] = $object->getHighKmAdjustmentRate();
        }
        if (null !== $object->getInclusionPlans()) {
            $values_1 = [];
            foreach ($object->getInclusionPlans() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['inclusion_plans'] = $values_1;
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
        if (null !== $object->getInsuranceDisclosures()) {
            $values_2 = [];
            foreach ($object->getInsuranceDisclosures() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['insurance_disclosures'] = $values_2;
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
        if (null !== $object->getInterestOnResidual()) {
            $data['interest_on_residual'] = $object->getInterestOnResidual();
        }
        if (null !== $object->getLesseeRate()) {
            $data['lessee_rate'] = $object->getLesseeRate();
        }
        if (null !== $object->getListPriceGst()) {
            $data['list_price_gst'] = $object->getListPriceGst();
        }
        if (null !== $object->getListPriceNet()) {
            $data['list_price_net'] = $object->getListPriceNet();
        }
        if (null !== $object->getLocationName()) {
            $data['location_name'] = $object->getLocationName();
        }
        if (null !== $object->getLocationRegistrationId()) {
            $data['location_registration_id'] = $object->getLocationRegistrationId();
        }
        if (null !== $object->getLockComprehensiveInsuranceFlag()) {
            $data['lock_comprehensive_insurance_flag'] = $object->getLockComprehensiveInsuranceFlag();
        }
        if (null !== $object->getLockDealerDiscountFlag()) {
            $data['lock_dealer_discount_flag'] = $object->getLockDealerDiscountFlag();
        }
        if (null !== $object->getLockDiscountFlag()) {
            $data['lock_discount_flag'] = $object->getLockDiscountFlag();
        }
        if (null !== $object->getLockFbtValueFlag()) {
            $data['lock_fbt_value_flag'] = $object->getLockFbtValueFlag();
        }
        if (null !== $object->getLockLeaseRateFlag()) {
            $data['lock_lease_rate_flag'] = $object->getLockLeaseRateFlag();
        }
        if (null !== $object->getLockLuxuryCarTaxFlag()) {
            $data['lock_luxury_car_tax_flag'] = $object->getLockLuxuryCarTaxFlag();
        }
        if (null !== $object->getLockPurchaseStampDutyFlag()) {
            $data['lock_purchase_stamp_duty_flag'] = $object->getLockPurchaseStampDutyFlag();
        }
        if (null !== $object->getLockQuoteFlag()) {
            $data['lock_quote_flag'] = $object->getLockQuoteFlag();
        }
        if (null !== $object->getLockRedundancyInsuranceFlag()) {
            $data['lock_redundancy_insurance_flag'] = $object->getLockRedundancyInsuranceFlag();
        }
        if (null !== $object->getLockResidualFlag()) {
            $data['lock_residual_flag'] = $object->getLockResidualFlag();
        }
        if (null !== $object->getLookAhead()) {
            $data['look_ahead'] = $object->getLookAhead();
        }
        if (null !== $object->getLti()) {
            $data['lti'] = $this->normalizer->normalize($object->getLti(), 'json', $context);
        }
        if (null !== $object->getLuxuryCarTax()) {
            $data['luxury_car_tax'] = $object->getLuxuryCarTax();
        }
        if (null !== $object->getLuxuryCarTaxExemptFlag()) {
            $data['luxury_car_tax_exempt_flag'] = $object->getLuxuryCarTaxExemptFlag();
        }
        if (null !== $object->getLuxuryCharge()) {
            $data['luxury_charge'] = $object->getLuxuryCharge();
        }
        if (null !== $object->getMaintenanceService()) {
            $data['maintenance_service'] = $this->normalizer->normalize($object->getMaintenanceService(), 'json', $context);
        }
        if (null !== $object->getMarginGst()) {
            $data['margin_gst'] = $object->getMarginGst();
        }
        if (null !== $object->getMarginNet()) {
            $data['margin_net'] = $object->getMarginNet();
        }
        if (null !== $object->getMonthsInArrears()) {
            $data['months_in_arrears'] = $object->getMonthsInArrears();
        }
        if (null !== $object->getMortgageDuty()) {
            $data['mortgage_duty'] = $object->getMortgageDuty();
        }
        if (null !== $object->getNewUsed()) {
            $data['new_used'] = $object->getNewUsed();
        }
        if (null !== $object->getOdometer()) {
            $data['odometer'] = $object->getOdometer();
        }
        if (null !== $object->getOnRoadPriceGst()) {
            $data['on_road_price_gst'] = $object->getOnRoadPriceGst();
        }
        if (null !== $object->getOnRoadPriceNet()) {
            $data['on_road_price_net'] = $object->getOnRoadPriceNet();
        }
        $data['opportunity_id'] = $object->getOpportunityId();
        if (null !== $object->getOpportunityNumber()) {
            $data['opportunity_number'] = $object->getOpportunityNumber();
        }
        if (null !== $object->getOpportunityStageId()) {
            $data['opportunity_stage_id'] = $object->getOpportunityStageId();
        }
        if (null !== $object->getOptionalEquipment()) {
            $values_3 = [];
            foreach ($object->getOptionalEquipment() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['optional_equipment'] = $values_3;
        }
        if (null !== $object->getOptionalEquipmentGst()) {
            $data['optional_equipment_gst'] = $object->getOptionalEquipmentGst();
        }
        if (null !== $object->getOptionalEquipmentNet()) {
            $data['optional_equipment_net'] = $object->getOptionalEquipmentNet();
        }
        if (null !== $object->getOriginatorFee()) {
            $data['originator_fee'] = $object->getOriginatorFee();
        }
        if (null !== $object->getOriginatorId()) {
            $data['originator_id'] = $object->getOriginatorId();
        }
        if (null !== $object->getOtherBrokerage()) {
            $data['other_brokerage'] = $object->getOtherBrokerage();
        }
        if (null !== $object->getPackageAdminFee()) {
            $data['package_admin_fee'] = $object->getPackageAdminFee();
        }
        if (null !== $object->getPackagingAdviceFee()) {
            $data['packaging_advice_fee'] = $object->getPackagingAdviceFee();
        }
        if (null !== $object->getParentQuoteId()) {
            $data['parent_quote_id'] = $object->getParentQuoteId();
        }
        if (null !== $object->getPayCycleBillingPeriods()) {
            $data['pay_cycle_billing_periods'] = $object->getPayCycleBillingPeriods();
        }
        if (null !== $object->getPayCycleId()) {
            $data['pay_cycle_id'] = $object->getPayCycleId();
        }
        if (null !== $object->getPeriodsDeferred()) {
            $data['periods_deferred'] = $object->getPeriodsDeferred();
        }
        if (null !== $object->getPlateYear()) {
            $data['plate_year'] = $object->getPlateYear();
        }
        if (null !== $object->getPolicyOwnerType()) {
            $data['policy_owner_type'] = $object->getPolicyOwnerType();
        }
        if (null !== $object->getPostTaxExisting()) {
            $data['post_tax_existing'] = $object->getPostTaxExisting();
        }
        $data['posting_map_id'] = $object->getPostingMapId();
        if (null !== $object->getPreTaxExisting()) {
            $data['pre_tax_existing'] = $object->getPreTaxExisting();
        }
        if (null !== $object->getPremiumPlatesNet()) {
            $data['premium_plates_net'] = $object->getPremiumPlatesNet();
        }
        if (null !== $object->getPreviousFbtValue()) {
            $data['previous_fbt_value'] = $object->getPreviousFbtValue();
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
        if (null !== $object->getPurchaseStampDuty()) {
            $data['purchase_stamp_duty'] = $object->getPurchaseStampDuty();
        }
        if (null !== $object->getPurchaseStampDutyExemptFlag()) {
            $data['purchase_stamp_duty_exempt_flag'] = $object->getPurchaseStampDutyExemptFlag();
        }
        if (null !== $object->getQuoteDate()) {
            $data['quote_date'] = $object->getQuoteDate()->format('Y-m-d');
        }
        if (null !== $object->getQuoteStatus()) {
            $data['quote_status'] = $this->normalizer->normalize($object->getQuoteStatus(), 'json', $context);
        }
        if (null !== $object->getQuoteStatusId()) {
            $data['quote_status_id'] = $object->getQuoteStatusId();
        }
        if (null !== $object->getQuoteSubStatusId()) {
            $data['quote_sub_status_id'] = $object->getQuoteSubStatusId();
        }
        if (null !== $object->getRebateGst()) {
            $data['rebate_gst'] = $object->getRebateGst();
        }
        if (null !== $object->getRebateNet()) {
            $data['rebate_net'] = $object->getRebateNet();
        }
        if (null !== $object->getReducedSuperFlag()) {
            $data['reduced_super_flag'] = $object->getReducedSuperFlag();
        }
        if (null !== $object->getRedundancyInsurance()) {
            $data['redundancy_insurance'] = $object->getRedundancyInsurance();
        }
        if (null !== $object->getRedundancyInsuranceCost()) {
            $data['redundancy_insurance_cost'] = $object->getRedundancyInsuranceCost();
        }
        if (null !== $object->getRedundancyInsuranceFlag()) {
            $data['redundancy_insurance_flag'] = $object->getRedundancyInsuranceFlag();
        }
        if (null !== $object->getRedundancyInsuranceRate()) {
            $data['redundancy_insurance_rate'] = $object->getRedundancyInsuranceRate();
        }
        if (null !== $object->getRedundancyInsuranceValidationFlag()) {
            $data['redundancy_insurance_validation_flag'] = $object->getRedundancyInsuranceValidationFlag();
        }
        if (null !== $object->getRegCtp()) {
            $data['reg_ctp'] = $this->normalizer->normalize($object->getRegCtp(), 'json', $context);
        }
        if (null !== $object->getRegInitialNet()) {
            $data['reg_initial_net'] = $object->getRegInitialNet();
        }
        if (null !== $object->getReliefVehicle()) {
            $data['relief_vehicle'] = $this->normalizer->normalize($object->getReliefVehicle(), 'json', $context);
        }
        if (null !== $object->getResidualBasis()) {
            $data['residual_basis'] = $object->getResidualBasis();
        }
        if (null !== $object->getResidualCashPoolGst()) {
            $data['residual_cash_pool_gst'] = $object->getResidualCashPoolGst();
        }
        if (null !== $object->getResidualCashPoolNet()) {
            $data['residual_cash_pool_net'] = $object->getResidualCashPoolNet();
        }
        if (null !== $object->getResidualCashPoolRate()) {
            $data['residual_cash_pool_rate'] = $object->getResidualCashPoolRate();
        }
        if (null !== $object->getResidualGst()) {
            $data['residual_gst'] = $object->getResidualGst();
        }
        if (null !== $object->getResidualInsurance()) {
            $data['residual_insurance'] = $object->getResidualInsurance();
        }
        if (null !== $object->getResidualInsuranceRate()) {
            $data['residual_insurance_rate'] = $object->getResidualInsuranceRate();
        }
        if (null !== $object->getResidualNet()) {
            $data['residual_net'] = $object->getResidualNet();
        }
        if (null !== $object->getResidualRate()) {
            $data['residual_rate'] = $object->getResidualRate();
        }
        if (null !== $object->getResidualRateGross()) {
            $data['residual_rate_gross'] = $object->getResidualRateGross();
        }
        if (null !== $object->getResidualRateNet()) {
            $data['residual_rate_net'] = $object->getResidualRateNet();
        }
        if (null !== $object->getRevsFee()) {
            $data['revs_fee'] = $object->getRevsFee();
        }
        if (null !== $object->getRoadsideAssistance()) {
            $data['roadside_assistance'] = $this->normalizer->normalize($object->getRoadsideAssistance(), 'json', $context);
        }
        if (null !== $object->getSmallDamageRepairs()) {
            $data['small_damage_repairs'] = $this->normalizer->normalize($object->getSmallDamageRepairs(), 'json', $context);
        }
        $data['state'] = $object->getState();
        $data['status_flag'] = $object->getStatusFlag();
        if (null !== $object->getSuperannuation()) {
            $data['superannuation'] = $object->getSuperannuation();
        }
        if (null !== $object->getSupplierIdBroker()) {
            $data['supplier_id_broker'] = $object->getSupplierIdBroker();
        }
        if (null !== $object->getSupplierIdDealer()) {
            $data['supplier_id_dealer'] = $object->getSupplierIdDealer();
        }
        if (null !== $object->getSupplierIdFinancier()) {
            $data['supplier_id_financier'] = $object->getSupplierIdFinancier();
        }
        if (null !== $object->getSupplierIdInsurer()) {
            $data['supplier_id_insurer'] = $object->getSupplierIdInsurer();
        }
        if (null !== $object->getSupplierIdResidualInsurer()) {
            $data['supplier_id_residual_insurer'] = $object->getSupplierIdResidualInsurer();
        }
        $data['term'] = $object->getTerm();
        if (null !== $object->getTotalBrokerage()) {
            $data['total_brokerage'] = $object->getTotalBrokerage();
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
        if (null !== $object->getTradeInVehicleDescription()) {
            $data['trade_in_vehicle_description'] = $object->getTradeInVehicleDescription();
        }
        if (null !== $object->getTrimPreference()) {
            $data['trim_preference'] = $object->getTrimPreference();
        }
        if (null !== $object->getTyres()) {
            $data['tyres'] = $this->normalizer->normalize($object->getTyres(), 'json', $context);
        }
        if (null !== $object->getTyreRimInsurance()) {
            $data['tyre_rim_insurance'] = $this->normalizer->normalize($object->getTyreRimInsurance(), 'json', $context);
        }
        if (null !== $object->getTyreRimInsuranceFlag()) {
            $data['tyre_rim_insurance_flag'] = $object->getTyreRimInsuranceFlag();
        }
        if (null !== $object->getUsageAdjustmentRate()) {
            $data['usage_adjustment_rate'] = $object->getUsageAdjustmentRate();
        }
        if (null !== $object->getUserIdAssigned()) {
            $data['user_id_assigned'] = $object->getUserIdAssigned();
        }
        $data['user_id_client_manager'] = $object->getUserIdClientManager();
        if (null !== $object->getVariantAdjustmentRate()) {
            $data['variant_adjustment_rate'] = $object->getVariantAdjustmentRate();
        }
        if (null !== $object->getVariantBonusId()) {
            $data['variant_bonus_id'] = $object->getVariantBonusId();
        }
        $data['variant_id'] = $object->getVariantId();
        if (null !== $object->getVehicleMaintenanceProgram()) {
            $data['vehicle_maintenance_program'] = $this->normalizer->normalize($object->getVehicleMaintenanceProgram(), 'json', $context);
        }
        if (null !== $object->getVehicleTrackingSystemFlag()) {
            $data['vehicle_tracking_system_flag'] = $object->getVehicleTrackingSystemFlag();
        }
        if (null !== $object->getVehicleUsageTypeId()) {
            $data['vehicle_usage_type_id'] = $object->getVehicleUsageTypeId();
        }
        if (null !== $object->getWalkaway()) {
            $data['walkaway'] = $this->normalizer->normalize($object->getWalkaway(), 'json', $context);
        }
        if (null !== $object->getWalkawayFlag()) {
            $data['walkaway_flag'] = $object->getWalkawayFlag();
        }
        if (null !== $object->getWarrantOfFitness()) {
            $data['warrant_of_fitness'] = $this->normalizer->normalize($object->getWarrantOfFitness(), 'json', $context);
        }
        if (null !== $object->getWarrantyKms()) {
            $data['warranty_kms'] = $object->getWarrantyKms();
        }
        if (null !== $object->getWarrantyMths()) {
            $data['warranty_mths'] = $object->getWarrantyMths();
        }

        return $data;
    }
}
