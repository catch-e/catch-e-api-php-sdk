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

class CreateEmployeePackageItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\CreateEmployeePackageItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\CreateEmployeePackageItem' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\CreateEmployeePackageItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('package_item_id', $data) && null !== $data['package_item_id']) {
            $object->setPackageItemId($data['package_item_id']);
        } elseif (\array_key_exists('package_item_id', $data) && null === $data['package_item_id']) {
            $object->setPackageItemId(null);
        }
        if (\array_key_exists('package_item_pay_cycle_id', $data) && null !== $data['package_item_pay_cycle_id']) {
            $object->setPackageItemPayCycleId($data['package_item_pay_cycle_id']);
        } elseif (\array_key_exists('package_item_pay_cycle_id', $data) && null === $data['package_item_pay_cycle_id']) {
            $object->setPackageItemPayCycleId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('reference', $data) && null !== $data['reference']) {
            $object->setReference($data['reference']);
        } elseif (\array_key_exists('reference', $data) && null === $data['reference']) {
            $object->setReference(null);
        }
        if (\array_key_exists('payee_payment_method_id', $data) && null !== $data['payee_payment_method_id']) {
            $object->setPayeePaymentMethodId($data['payee_payment_method_id']);
        } elseif (\array_key_exists('payee_payment_method_id', $data) && null === $data['payee_payment_method_id']) {
            $object->setPayeePaymentMethodId(null);
        }
        if (\array_key_exists('deduction_id', $data) && null !== $data['deduction_id']) {
            $object->setDeductionId($data['deduction_id']);
        } elseif (\array_key_exists('deduction_id', $data) && null === $data['deduction_id']) {
            $object->setDeductionId(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('total_deduction', $data) && null !== $data['total_deduction']) {
            $object->setTotalDeduction($data['total_deduction']);
        } elseif (\array_key_exists('total_deduction', $data) && null === $data['total_deduction']) {
            $object->setTotalDeduction(null);
        }
        if (\array_key_exists('employee_contribution', $data) && null !== $data['employee_contribution']) {
            $object->setEmployeeContribution($data['employee_contribution']);
        } elseif (\array_key_exists('employee_contribution', $data) && null === $data['employee_contribution']) {
            $object->setEmployeeContribution(null);
        }
        if (\array_key_exists('compress_flag', $data) && null !== $data['compress_flag']) {
            $object->setCompressFlag($data['compress_flag']);
        } elseif (\array_key_exists('compress_flag', $data) && null === $data['compress_flag']) {
            $object->setCompressFlag(null);
        }
        if (\array_key_exists('inertia_flag', $data) && null !== $data['inertia_flag']) {
            $object->setInertiaFlag($data['inertia_flag']);
        } elseif (\array_key_exists('inertia_flag', $data) && null === $data['inertia_flag']) {
            $object->setInertiaFlag(null);
        }
        if (\array_key_exists('cycles', $data) && null !== $data['cycles']) {
            $object->setCycles($data['cycles']);
        } elseif (\array_key_exists('cycles', $data) && null === $data['cycles']) {
            $object->setCycles(null);
        }
        if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('deduction_per_pay', $data) && null !== $data['deduction_per_pay']) {
            $object->setDeductionPerPay($data['deduction_per_pay']);
        } elseif (\array_key_exists('deduction_per_pay', $data) && null === $data['deduction_per_pay']) {
            $object->setDeductionPerPay(null);
        }
        if (\array_key_exists('tax_method', $data) && null !== $data['tax_method']) {
            $object->setTaxMethod($data['tax_method']);
        } elseif (\array_key_exists('tax_method', $data) && null === $data['tax_method']) {
            $object->setTaxMethod(null);
        }
        if (\array_key_exists('disbursement_type', $data) && null !== $data['disbursement_type']) {
            $object->setDisbursementType($data['disbursement_type']);
        } elseif (\array_key_exists('disbursement_type', $data) && null === $data['disbursement_type']) {
            $object->setDisbursementType(null);
        }
        if (\array_key_exists('substantiation_flag', $data) && null !== $data['substantiation_flag']) {
            $object->setSubstantiationFlag($data['substantiation_flag']);
        } elseif (\array_key_exists('substantiation_flag', $data) && null === $data['substantiation_flag']) {
            $object->setSubstantiationFlag(null);
        }
        if (\array_key_exists('disbursement_cycle_id', $data) && null !== $data['disbursement_cycle_id']) {
            $object->setDisbursementCycleId($data['disbursement_cycle_id']);
        } elseif (\array_key_exists('disbursement_cycle_id', $data) && null === $data['disbursement_cycle_id']) {
            $object->setDisbursementCycleId(null);
        }
        if (\array_key_exists('disbursement_periods', $data) && null !== $data['disbursement_periods']) {
            $object->setDisbursementPeriods($data['disbursement_periods']);
        } elseif (\array_key_exists('disbursement_periods', $data) && null === $data['disbursement_periods']) {
            $object->setDisbursementPeriods(null);
        }
        if (\array_key_exists('first_disbursement_date', $data) && null !== $data['first_disbursement_date']) {
            $object->setFirstDisbursementDate(\DateTime::createFromFormat('Y-m-d', $data['first_disbursement_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('first_disbursement_date', $data) && null === $data['first_disbursement_date']) {
            $object->setFirstDisbursementDate(null);
        }
        if (\array_key_exists('disbursement_amount_net', $data) && null !== $data['disbursement_amount_net']) {
            $object->setDisbursementAmountNet($data['disbursement_amount_net']);
        } elseif (\array_key_exists('disbursement_amount_net', $data) && null === $data['disbursement_amount_net']) {
            $object->setDisbursementAmountNet(null);
        }
        if (\array_key_exists('disbursement_amount_gst', $data) && null !== $data['disbursement_amount_gst']) {
            $object->setDisbursementAmountGst($data['disbursement_amount_gst']);
        } elseif (\array_key_exists('disbursement_amount_gst', $data) && null === $data['disbursement_amount_gst']) {
            $object->setDisbursementAmountGst(null);
        }
        if (\array_key_exists('driver_bank_account_id', $data) && null !== $data['driver_bank_account_id']) {
            $object->setDriverBankAccountId($data['driver_bank_account_id']);
        } elseif (\array_key_exists('driver_bank_account_id', $data) && null === $data['driver_bank_account_id']) {
            $object->setDriverBankAccountId(null);
        }
        if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
            $object->setContractId($data['contract_id']);
        } elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
            $object->setContractId(null);
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
        $data['driver_id'] = $object->getDriverId();
        $data['package_item_id'] = $object->getPackageItemId();
        if (null !== $object->getPackageItemPayCycleId()) {
            $data['package_item_pay_cycle_id'] = $object->getPackageItemPayCycleId();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if (null !== $object->getPayeePaymentMethodId()) {
            $data['payee_payment_method_id'] = $object->getPayeePaymentMethodId();
        }
        if (null !== $object->getDeductionId()) {
            $data['deduction_id'] = $object->getDeductionId();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getTotalDeduction()) {
            $data['total_deduction'] = $object->getTotalDeduction();
        }
        if (null !== $object->getEmployeeContribution()) {
            $data['employee_contribution'] = $object->getEmployeeContribution();
        }
        if (null !== $object->getCompressFlag()) {
            $data['compress_flag'] = $object->getCompressFlag();
        }
        if (null !== $object->getInertiaFlag()) {
            $data['inertia_flag'] = $object->getInertiaFlag();
        }
        $data['cycles'] = $object->getCycles();
        $data['start_date'] = $object->getStartDate()->format('Y-m-d');
        if (null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate()->format('Y-m-d');
        }
        $data['deduction_per_pay'] = $object->getDeductionPerPay();
        if (null !== $object->getTaxMethod()) {
            $data['tax_method'] = $object->getTaxMethod();
        }
        $data['disbursement_type'] = $object->getDisbursementType();
        if (null !== $object->getSubstantiationFlag()) {
            $data['substantiation_flag'] = $object->getSubstantiationFlag();
        }
        if (null !== $object->getDisbursementCycleId()) {
            $data['disbursement_cycle_id'] = $object->getDisbursementCycleId();
        }
        if (null !== $object->getDisbursementPeriods()) {
            $data['disbursement_periods'] = $object->getDisbursementPeriods();
        }
        if (null !== $object->getFirstDisbursementDate()) {
            $data['first_disbursement_date'] = $object->getFirstDisbursementDate()->format('Y-m-d');
        }
        if (null !== $object->getDisbursementAmountNet()) {
            $data['disbursement_amount_net'] = $object->getDisbursementAmountNet();
        }
        if (null !== $object->getDisbursementAmountGst()) {
            $data['disbursement_amount_gst'] = $object->getDisbursementAmountGst();
        }
        if (null !== $object->getDriverBankAccountId()) {
            $data['driver_bank_account_id'] = $object->getDriverBankAccountId();
        }
        if (null !== $object->getContractId()) {
            $data['contract_id'] = $object->getContractId();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
