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

class QuotePatchInsuranceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuotePatchInsurance' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuotePatchInsurance' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuotePatchInsurance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('insurance_type_id', $data) && null !== $data['insurance_type_id']) {
            $object->setInsuranceTypeId($data['insurance_type_id']);
        } elseif (\array_key_exists('insurance_type_id', $data) && null === $data['insurance_type_id']) {
            $object->setInsuranceTypeId(null);
        }
        if (\array_key_exists('billing_type', $data) && null !== $data['billing_type']) {
            $object->setBillingType($data['billing_type']);
        } elseif (\array_key_exists('billing_type', $data) && null === $data['billing_type']) {
            $object->setBillingType(null);
        }
        if (\array_key_exists('claim_excess', $data) && null !== $data['claim_excess']) {
            $object->setClaimExcess($data['claim_excess']);
        } elseif (\array_key_exists('claim_excess', $data) && null === $data['claim_excess']) {
            $object->setClaimExcess(null);
        }
        if (\array_key_exists('annual_insurance', $data) && null !== $data['annual_insurance']) {
            $object->setAnnualInsurance($data['annual_insurance']);
        } elseif (\array_key_exists('annual_insurance', $data) && null === $data['annual_insurance']) {
            $object->setAnnualInsurance(null);
        }
        if (\array_key_exists('fund_1st_year_flag', $data) && null !== $data['fund_1st_year_flag']) {
            $object->setFund1stYearFlag($data['fund_1st_year_flag']);
        } elseif (\array_key_exists('fund_1st_year_flag', $data) && null === $data['fund_1st_year_flag']) {
            $object->setFund1stYearFlag(null);
        }
        if (\array_key_exists('monthly_amount_net', $data) && null !== $data['monthly_amount_net']) {
            $object->setMonthlyAmountNet($data['monthly_amount_net']);
        } elseif (\array_key_exists('monthly_amount_net', $data) && null === $data['monthly_amount_net']) {
            $object->setMonthlyAmountNet(null);
        }
        if (\array_key_exists('included_flag', $data) && null !== $data['included_flag']) {
            $object->setIncludedFlag($data['included_flag']);
        } elseif (\array_key_exists('included_flag', $data) && null === $data['included_flag']) {
            $object->setIncludedFlag(null);
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
        if (null !== $object->getInsuranceTypeId()) {
            $data['insurance_type_id'] = $object->getInsuranceTypeId();
        }
        if (null !== $object->getBillingType()) {
            $data['billing_type'] = $object->getBillingType();
        }
        if (null !== $object->getClaimExcess()) {
            $data['claim_excess'] = $object->getClaimExcess();
        }
        if (null !== $object->getAnnualInsurance()) {
            $data['annual_insurance'] = $object->getAnnualInsurance();
        }
        if (null !== $object->getFund1stYearFlag()) {
            $data['fund_1st_year_flag'] = $object->getFund1stYearFlag();
        }
        if (null !== $object->getMonthlyAmountNet()) {
            $data['monthly_amount_net'] = $object->getMonthlyAmountNet();
        }
        if (null !== $object->getIncludedFlag()) {
            $data['included_flag'] = $object->getIncludedFlag();
        }

        return $data;
    }
}
