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

class SupplierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\Supplier' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\Supplier' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\Supplier();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('payee_id', $data) && null !== $data['payee_id']) {
            $object->setPayeeId($data['payee_id']);
        } elseif (\array_key_exists('payee_id', $data) && null === $data['payee_id']) {
            $object->setPayeeId(null);
        }
        if (\array_key_exists('aba_format_type', $data) && null !== $data['aba_format_type']) {
            $object->setAbaFormatType($data['aba_format_type']);
        } elseif (\array_key_exists('aba_format_type', $data) && null === $data['aba_format_type']) {
            $object->setAbaFormatType(null);
        }
        if (\array_key_exists('abn', $data) && null !== $data['abn']) {
            $object->setAbn($data['abn']);
        } elseif (\array_key_exists('abn', $data) && null === $data['abn']) {
            $object->setAbn(null);
        }
        if (\array_key_exists('account', $data) && null !== $data['account']) {
            $object->setAccount($data['account']);
        } elseif (\array_key_exists('account', $data) && null === $data['account']) {
            $object->setAccount(null);
        }
        if (\array_key_exists('account_contact', $data) && null !== $data['account_contact']) {
            $object->setAccountContact($data['account_contact']);
        } elseif (\array_key_exists('account_contact', $data) && null === $data['account_contact']) {
            $object->setAccountContact(null);
        }
        if (\array_key_exists('account_email', $data) && null !== $data['account_email']) {
            $object->setAccountEmail($data['account_email']);
        } elseif (\array_key_exists('account_email', $data) && null === $data['account_email']) {
            $object->setAccountEmail(null);
        }
        if (\array_key_exists('account_phone', $data) && null !== $data['account_phone']) {
            $object->setAccountPhone($data['account_phone']);
        } elseif (\array_key_exists('account_phone', $data) && null === $data['account_phone']) {
            $object->setAccountPhone(null);
        }
        if (\array_key_exists('address1', $data) && null !== $data['address1']) {
            $object->setAddress1($data['address1']);
        } elseif (\array_key_exists('address1', $data) && null === $data['address1']) {
            $object->setAddress1(null);
        }
        if (\array_key_exists('address2', $data) && null !== $data['address2']) {
            $object->setAddress2($data['address2']);
        } elseif (\array_key_exists('address2', $data) && null === $data['address2']) {
            $object->setAddress2(null);
        }
        if (\array_key_exists('allow_duplicate_reference_flag', $data) && null !== $data['allow_duplicate_reference_flag']) {
            $object->setAllowDuplicateReferenceFlag($data['allow_duplicate_reference_flag']);
        } elseif (\array_key_exists('allow_duplicate_reference_flag', $data) && null === $data['allow_duplicate_reference_flag']) {
            $object->setAllowDuplicateReferenceFlag(null);
        }
        if (\array_key_exists('bank_account_number', $data) && null !== $data['bank_account_number']) {
            $object->setBankAccountNumber($data['bank_account_number']);
        } elseif (\array_key_exists('bank_account_number', $data) && null === $data['bank_account_number']) {
            $object->setBankAccountNumber(null);
        }
        if (\array_key_exists('bank_account_suffix', $data) && null !== $data['bank_account_suffix']) {
            $object->setBankAccountSuffix($data['bank_account_suffix']);
        } elseif (\array_key_exists('bank_account_suffix', $data) && null === $data['bank_account_suffix']) {
            $object->setBankAccountSuffix(null);
        }
        if (\array_key_exists('bank_bsb', $data) && null !== $data['bank_bsb']) {
            $object->setBankBsb($data['bank_bsb']);
        } elseif (\array_key_exists('bank_bsb', $data) && null === $data['bank_bsb']) {
            $object->setBankBsb(null);
        }
        if (\array_key_exists('bpay_biller_code', $data) && null !== $data['bpay_biller_code']) {
            $object->setBpayBillerCode($data['bpay_biller_code']);
        } elseif (\array_key_exists('bpay_biller_code', $data) && null === $data['bpay_biller_code']) {
            $object->setBpayBillerCode(null);
        }
        if (\array_key_exists('channel_id', $data) && null !== $data['channel_id']) {
            $object->setChannelId($data['channel_id']);
        } elseif (\array_key_exists('channel_id', $data) && null === $data['channel_id']) {
            $object->setChannelId(null);
        }
        if (\array_key_exists('city', $data) && null !== $data['city']) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && null === $data['city']) {
            $object->setCity(null);
        }
        if (\array_key_exists('contact', $data) && null !== $data['contact']) {
            $object->setContact($data['contact']);
        } elseif (\array_key_exists('contact', $data) && null === $data['contact']) {
            $object->setContact(null);
        }
        if (\array_key_exists('country_id', $data) && null !== $data['country_id']) {
            $object->setCountryId($data['country_id']);
        } elseif (\array_key_exists('country_id', $data) && null === $data['country_id']) {
            $object->setCountryId(null);
        }
        if (\array_key_exists('credit_limit', $data) && null !== $data['credit_limit']) {
            $object->setCreditLimit($data['credit_limit']);
        } elseif (\array_key_exists('credit_limit', $data) && null === $data['credit_limit']) {
            $object->setCreditLimit(null);
        }
        if (\array_key_exists('discount_days', $data) && null !== $data['discount_days']) {
            $object->setDiscountDays($data['discount_days']);
        } elseif (\array_key_exists('discount_days', $data) && null === $data['discount_days']) {
            $object->setDiscountDays(null);
        }
        if (\array_key_exists('discount_prompt_pay', $data) && null !== $data['discount_prompt_pay']) {
            $object->setDiscountPromptPay($data['discount_prompt_pay']);
        } elseif (\array_key_exists('discount_prompt_pay', $data) && null === $data['discount_prompt_pay']) {
            $object->setDiscountPromptPay(null);
        }
        if (\array_key_exists('discount_volumn', $data) && null !== $data['discount_volumn']) {
            $object->setDiscountVolumn($data['discount_volumn']);
        } elseif (\array_key_exists('discount_volumn', $data) && null === $data['discount_volumn']) {
            $object->setDiscountVolumn(null);
        }
        if (\array_key_exists('due_days', $data) && null !== $data['due_days']) {
            $object->setDueDays($data['due_days']);
        } elseif (\array_key_exists('due_days', $data) && null === $data['due_days']) {
            $object->setDueDays(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('external_code', $data) && null !== $data['external_code']) {
            $object->setExternalCode($data['external_code']);
        } elseif (\array_key_exists('external_code', $data) && null === $data['external_code']) {
            $object->setExternalCode(null);
        }
        if (\array_key_exists('external_role_disclose_transactions_flag', $data) && null !== $data['external_role_disclose_transactions_flag']) {
            $object->setExternalRoleDiscloseTransactionsFlag($data['external_role_disclose_transactions_flag']);
        } elseif (\array_key_exists('external_role_disclose_transactions_flag', $data) && null === $data['external_role_disclose_transactions_flag']) {
            $object->setExternalRoleDiscloseTransactionsFlag(null);
        }
        if (\array_key_exists('fax', $data) && null !== $data['fax']) {
            $object->setFax($data['fax']);
        } elseif (\array_key_exists('fax', $data) && null === $data['fax']) {
            $object->setFax(null);
        }
        if (\array_key_exists('gl_code', $data) && null !== $data['gl_code']) {
            $object->setGlCode($data['gl_code']);
        } elseif (\array_key_exists('gl_code', $data) && null === $data['gl_code']) {
            $object->setGlCode(null);
        }
        if (\array_key_exists('insurance_broker_fee_monthly', $data) && null !== $data['insurance_broker_fee_monthly']) {
            $object->setInsuranceBrokerFeeMonthly($data['insurance_broker_fee_monthly']);
        } elseif (\array_key_exists('insurance_broker_fee_monthly', $data) && null === $data['insurance_broker_fee_monthly']) {
            $object->setInsuranceBrokerFeeMonthly(null);
        }
        if (\array_key_exists('interface_type', $data) && null !== $data['interface_type']) {
            $object->setInterfaceType($data['interface_type']);
        } elseif (\array_key_exists('interface_type', $data) && null === $data['interface_type']) {
            $object->setInterfaceType(null);
        }
        if (\array_key_exists('labour_per_hour_retail', $data) && null !== $data['labour_per_hour_retail']) {
            $object->setLabourPerHourRetail($data['labour_per_hour_retail']);
        } elseif (\array_key_exists('labour_per_hour_retail', $data) && null === $data['labour_per_hour_retail']) {
            $object->setLabourPerHourRetail(null);
        }
        if (\array_key_exists('labour_per_hour_retail_discount', $data) && null !== $data['labour_per_hour_retail_discount']) {
            $object->setLabourPerHourRetailDiscount($data['labour_per_hour_retail_discount']);
        } elseif (\array_key_exists('labour_per_hour_retail_discount', $data) && null === $data['labour_per_hour_retail_discount']) {
            $object->setLabourPerHourRetailDiscount(null);
        }
        if (\array_key_exists('labour_rate', $data) && null !== $data['labour_rate']) {
            $object->setLabourRate($data['labour_rate']);
        } elseif (\array_key_exists('labour_rate', $data) && null === $data['labour_rate']) {
            $object->setLabourRate(null);
        }
        if (\array_key_exists('labour_rate_date', $data) && null !== $data['labour_rate_date']) {
            $object->setLabourRateDate(\DateTime::createFromFormat('Y-m-d', $data['labour_rate_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('labour_rate_date', $data) && null === $data['labour_rate_date']) {
            $object->setLabourRateDate(null);
        }
        if (\array_key_exists('mobile', $data) && null !== $data['mobile']) {
            $object->setMobile($data['mobile']);
        } elseif (\array_key_exists('mobile', $data) && null === $data['mobile']) {
            $object->setMobile(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('note', $data) && null !== $data['note']) {
            $object->setNote($data['note']);
        } elseif (\array_key_exists('note', $data) && null === $data['note']) {
            $object->setNote(null);
        }
        if (\array_key_exists('oil_price_per_litre', $data) && null !== $data['oil_price_per_litre']) {
            $object->setOilPricePerLitre($data['oil_price_per_litre']);
        } elseif (\array_key_exists('oil_price_per_litre', $data) && null === $data['oil_price_per_litre']) {
            $object->setOilPricePerLitre(null);
        }
        if (\array_key_exists('parts_discount', $data) && null !== $data['parts_discount']) {
            $object->setPartsDiscount($data['parts_discount']);
        } elseif (\array_key_exists('parts_discount', $data) && null === $data['parts_discount']) {
            $object->setPartsDiscount(null);
        }
        if (\array_key_exists('payment_delivery_type', $data) && null !== $data['payment_delivery_type']) {
            $object->setPaymentDeliveryType($data['payment_delivery_type']);
        } elseif (\array_key_exists('payment_delivery_type', $data) && null === $data['payment_delivery_type']) {
            $object->setPaymentDeliveryType(null);
        }
        if (\array_key_exists('payment_due', $data) && null !== $data['payment_due']) {
            $object->setPaymentDue($data['payment_due']);
        } elseif (\array_key_exists('payment_due', $data) && null === $data['payment_due']) {
            $object->setPaymentDue(null);
        }
        if (\array_key_exists('payment_method_id', $data) && null !== $data['payment_method_id']) {
            $object->setPaymentMethodId($data['payment_method_id']);
        } elseif (\array_key_exists('payment_method_id', $data) && null === $data['payment_method_id']) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('pl_export_flag', $data) && null !== $data['pl_export_flag']) {
            $object->setPlExportFlag($data['pl_export_flag']);
        } elseif (\array_key_exists('pl_export_flag', $data) && null === $data['pl_export_flag']) {
            $object->setPlExportFlag(null);
        }
        if (\array_key_exists('postcode', $data) && null !== $data['postcode']) {
            $object->setPostcode($data['postcode']);
        } elseif (\array_key_exists('postcode', $data) && null === $data['postcode']) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('preferred_supplier_flag', $data) && null !== $data['preferred_supplier_flag']) {
            $object->setPreferredSupplierFlag($data['preferred_supplier_flag']);
        } elseif (\array_key_exists('preferred_supplier_flag', $data) && null === $data['preferred_supplier_flag']) {
            $object->setPreferredSupplierFlag(null);
        }
        if (\array_key_exists('procurement_fee', $data) && null !== $data['procurement_fee']) {
            $object->setProcurementFee($data['procurement_fee']);
        } elseif (\array_key_exists('procurement_fee', $data) && null === $data['procurement_fee']) {
            $object->setProcurementFee(null);
        }
        if (\array_key_exists('rcti_flag', $data) && null !== $data['rcti_flag']) {
            $object->setRctiFlag($data['rcti_flag']);
        } elseif (\array_key_exists('rcti_flag', $data) && null === $data['rcti_flag']) {
            $object->setRctiFlag(null);
        }
        if (\array_key_exists('salutation', $data) && null !== $data['salutation']) {
            $object->setSalutation($data['salutation']);
        } elseif (\array_key_exists('salutation', $data) && null === $data['salutation']) {
            $object->setSalutation(null);
        }
        if (\array_key_exists('state', $data) && null !== $data['state']) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && null === $data['state']) {
            $object->setState(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('sundries_cost', $data) && null !== $data['sundries_cost']) {
            $object->setSundriesCost($data['sundries_cost']);
        } elseif (\array_key_exists('sundries_cost', $data) && null === $data['sundries_cost']) {
            $object->setSundriesCost(null);
        }
        if (\array_key_exists('supplier_code', $data) && null !== $data['supplier_code']) {
            $object->setSupplierCode($data['supplier_code']);
        } elseif (\array_key_exists('supplier_code', $data) && null === $data['supplier_code']) {
            $object->setSupplierCode(null);
        }
        if (\array_key_exists('supplier_group_id', $data) && null !== $data['supplier_group_id']) {
            $object->setSupplierGroupId($data['supplier_group_id']);
        } elseif (\array_key_exists('supplier_group_id', $data) && null === $data['supplier_group_id']) {
            $object->setSupplierGroupId(null);
        }
        if (\array_key_exists('supplier_id_agent', $data) && null !== $data['supplier_id_agent']) {
            $object->setSupplierIdAgent($data['supplier_id_agent']);
        } elseif (\array_key_exists('supplier_id_agent', $data) && null === $data['supplier_id_agent']) {
            $object->setSupplierIdAgent(null);
        }
        if (\array_key_exists('supplier_payment_term_id', $data) && null !== $data['supplier_payment_term_id']) {
            $object->setSupplierPaymentTermId($data['supplier_payment_term_id']);
        } elseif (\array_key_exists('supplier_payment_term_id', $data) && null === $data['supplier_payment_term_id']) {
            $object->setSupplierPaymentTermId(null);
        }
        if (\array_key_exists('supplier_type', $data) && null !== $data['supplier_type']) {
            $object->setSupplierType($data['supplier_type']);
        } elseif (\array_key_exists('supplier_type', $data) && null === $data['supplier_type']) {
            $object->setSupplierType(null);
        }
        if (\array_key_exists('tax_code', $data) && null !== $data['tax_code']) {
            $object->setTaxCode($data['tax_code']);
        } elseif (\array_key_exists('tax_code', $data) && null === $data['tax_code']) {
            $object->setTaxCode(null);
        }
        if (\array_key_exists('tax_code_freight', $data) && null !== $data['tax_code_freight']) {
            $object->setTaxCodeFreight($data['tax_code_freight']);
        } elseif (\array_key_exists('tax_code_freight', $data) && null === $data['tax_code_freight']) {
            $object->setTaxCodeFreight(null);
        }
        if (\array_key_exists('tax_id', $data) && null !== $data['tax_id']) {
            $object->setTaxId($data['tax_id']);
        } elseif (\array_key_exists('tax_id', $data) && null === $data['tax_id']) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('template_id_coc', $data) && null !== $data['template_id_coc']) {
            $object->setTemplateIdCoc($data['template_id_coc']);
        } elseif (\array_key_exists('template_id_coc', $data) && null === $data['template_id_coc']) {
            $object->setTemplateIdCoc(null);
        }
        if (\array_key_exists('website', $data) && null !== $data['website']) {
            $object->setWebsite($data['website']);
        } elseif (\array_key_exists('website', $data) && null === $data['website']) {
            $object->setWebsite(null);
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
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getPayeeId()) {
            $data['payee_id'] = $object->getPayeeId();
        }
        if (null !== $object->getAbaFormatType()) {
            $data['aba_format_type'] = $object->getAbaFormatType();
        }
        if (null !== $object->getAbn()) {
            $data['abn'] = $object->getAbn();
        }
        if (null !== $object->getAccount()) {
            $data['account'] = $object->getAccount();
        }
        if (null !== $object->getAccountContact()) {
            $data['account_contact'] = $object->getAccountContact();
        }
        if (null !== $object->getAccountEmail()) {
            $data['account_email'] = $object->getAccountEmail();
        }
        if (null !== $object->getAccountPhone()) {
            $data['account_phone'] = $object->getAccountPhone();
        }
        if (null !== $object->getAddress1()) {
            $data['address1'] = $object->getAddress1();
        }
        if (null !== $object->getAddress2()) {
            $data['address2'] = $object->getAddress2();
        }
        if (null !== $object->getAllowDuplicateReferenceFlag()) {
            $data['allow_duplicate_reference_flag'] = $object->getAllowDuplicateReferenceFlag();
        }
        if (null !== $object->getBankAccountNumber()) {
            $data['bank_account_number'] = $object->getBankAccountNumber();
        }
        if (null !== $object->getBankAccountSuffix()) {
            $data['bank_account_suffix'] = $object->getBankAccountSuffix();
        }
        if (null !== $object->getBankBsb()) {
            $data['bank_bsb'] = $object->getBankBsb();
        }
        if (null !== $object->getBpayBillerCode()) {
            $data['bpay_biller_code'] = $object->getBpayBillerCode();
        }
        if (null !== $object->getChannelId()) {
            $data['channel_id'] = $object->getChannelId();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getContact()) {
            $data['contact'] = $object->getContact();
        }
        if (null !== $object->getCountryId()) {
            $data['country_id'] = $object->getCountryId();
        }
        if (null !== $object->getCreditLimit()) {
            $data['credit_limit'] = $object->getCreditLimit();
        }
        if (null !== $object->getDiscountDays()) {
            $data['discount_days'] = $object->getDiscountDays();
        }
        if (null !== $object->getDiscountPromptPay()) {
            $data['discount_prompt_pay'] = $object->getDiscountPromptPay();
        }
        if (null !== $object->getDiscountVolumn()) {
            $data['discount_volumn'] = $object->getDiscountVolumn();
        }
        if (null !== $object->getDueDays()) {
            $data['due_days'] = $object->getDueDays();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getExternalCode()) {
            $data['external_code'] = $object->getExternalCode();
        }
        if (null !== $object->getExternalRoleDiscloseTransactionsFlag()) {
            $data['external_role_disclose_transactions_flag'] = $object->getExternalRoleDiscloseTransactionsFlag();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $object->getFax();
        }
        if (null !== $object->getGlCode()) {
            $data['gl_code'] = $object->getGlCode();
        }
        if (null !== $object->getInsuranceBrokerFeeMonthly()) {
            $data['insurance_broker_fee_monthly'] = $object->getInsuranceBrokerFeeMonthly();
        }
        if (null !== $object->getInterfaceType()) {
            $data['interface_type'] = $object->getInterfaceType();
        }
        if (null !== $object->getLabourPerHourRetail()) {
            $data['labour_per_hour_retail'] = $object->getLabourPerHourRetail();
        }
        if (null !== $object->getLabourPerHourRetailDiscount()) {
            $data['labour_per_hour_retail_discount'] = $object->getLabourPerHourRetailDiscount();
        }
        if (null !== $object->getLabourRate()) {
            $data['labour_rate'] = $object->getLabourRate();
        }
        if (null !== $object->getLabourRateDate()) {
            $data['labour_rate_date'] = $object->getLabourRateDate()->format('Y-m-d');
        }
        if (null !== $object->getMobile()) {
            $data['mobile'] = $object->getMobile();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if (null !== $object->getOilPricePerLitre()) {
            $data['oil_price_per_litre'] = $object->getOilPricePerLitre();
        }
        if (null !== $object->getPartsDiscount()) {
            $data['parts_discount'] = $object->getPartsDiscount();
        }
        if (null !== $object->getPaymentDeliveryType()) {
            $data['payment_delivery_type'] = $object->getPaymentDeliveryType();
        }
        if (null !== $object->getPaymentDue()) {
            $data['payment_due'] = $object->getPaymentDue();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data['payment_method_id'] = $object->getPaymentMethodId();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getPlExportFlag()) {
            $data['pl_export_flag'] = $object->getPlExportFlag();
        }
        if (null !== $object->getPostcode()) {
            $data['postcode'] = $object->getPostcode();
        }
        if (null !== $object->getPreferredSupplierFlag()) {
            $data['preferred_supplier_flag'] = $object->getPreferredSupplierFlag();
        }
        if (null !== $object->getProcurementFee()) {
            $data['procurement_fee'] = $object->getProcurementFee();
        }
        if (null !== $object->getRctiFlag()) {
            $data['rcti_flag'] = $object->getRctiFlag();
        }
        if (null !== $object->getSalutation()) {
            $data['salutation'] = $object->getSalutation();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getSundriesCost()) {
            $data['sundries_cost'] = $object->getSundriesCost();
        }
        if (null !== $object->getSupplierCode()) {
            $data['supplier_code'] = $object->getSupplierCode();
        }
        if (null !== $object->getSupplierGroupId()) {
            $data['supplier_group_id'] = $object->getSupplierGroupId();
        }
        if (null !== $object->getSupplierIdAgent()) {
            $data['supplier_id_agent'] = $object->getSupplierIdAgent();
        }
        if (null !== $object->getSupplierPaymentTermId()) {
            $data['supplier_payment_term_id'] = $object->getSupplierPaymentTermId();
        }
        if (null !== $object->getSupplierType()) {
            $data['supplier_type'] = $object->getSupplierType();
        }
        if (null !== $object->getTaxCode()) {
            $data['tax_code'] = $object->getTaxCode();
        }
        if (null !== $object->getTaxCodeFreight()) {
            $data['tax_code_freight'] = $object->getTaxCodeFreight();
        }
        if (null !== $object->getTaxId()) {
            $data['tax_id'] = $object->getTaxId();
        }
        if (null !== $object->getTemplateIdCoc()) {
            $data['template_id_coc'] = $object->getTemplateIdCoc();
        }
        if (null !== $object->getWebsite()) {
            $data['website'] = $object->getWebsite();
        }

        return $data;
    }
}
