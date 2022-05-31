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

class PackageItemTotalDeductionGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\PackageItemTotalDeductionGet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\PackageItemTotalDeductionGet' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\PackageItemTotalDeductionGet();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
            $object->setPayCycleId($data['pay_cycle_id']);
        } elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
            $object->setPayCycleId(null);
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
        if (\array_key_exists('deduction_per_pay', $data) && null !== $data['deduction_per_pay']) {
            $object->setDeductionPerPay($data['deduction_per_pay']);
        } elseif (\array_key_exists('deduction_per_pay', $data) && null === $data['deduction_per_pay']) {
            $object->setDeductionPerPay(null);
        }
        if (\array_key_exists('cycles', $data) && null !== $data['cycles']) {
            $object->setCycles($data['cycles']);
        } elseif (\array_key_exists('cycles', $data) && null === $data['cycles']) {
            $object->setCycles(null);
        }
        if (\array_key_exists('total_deduction', $data) && null !== $data['total_deduction']) {
            $object->setTotalDeduction($data['total_deduction']);
        } elseif (\array_key_exists('total_deduction', $data) && null === $data['total_deduction']) {
            $object->setTotalDeduction(null);
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
        if (null !== $object->getPackageItemId()) {
            $data['package_item_id'] = $object->getPackageItemId();
        }
        if (null !== $object->getPackageItemPayCycleId()) {
            $data['package_item_pay_cycle_id'] = $object->getPackageItemPayCycleId();
        }
        if (null !== $object->getDriverId()) {
            $data['driver_id'] = $object->getDriverId();
        }
        if (null !== $object->getPayCycleId()) {
            $data['pay_cycle_id'] = $object->getPayCycleId();
        }
        if (null !== $object->getCompressFlag()) {
            $data['compress_flag'] = $object->getCompressFlag();
        }
        if (null !== $object->getInertiaFlag()) {
            $data['inertia_flag'] = $object->getInertiaFlag();
        }
        if (null !== $object->getDeductionPerPay()) {
            $data['deduction_per_pay'] = $object->getDeductionPerPay();
        }
        if (null !== $object->getCycles()) {
            $data['cycles'] = $object->getCycles();
        }
        if (null !== $object->getTotalDeduction()) {
            $data['total_deduction'] = $object->getTotalDeduction();
        }

        return $data;
    }
}
