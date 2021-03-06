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

class PackageItemPayCycleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\PackageItemPayCycle' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\PackageItemPayCycle' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\PackageItemPayCycle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('package_item_pay_cycle_id', $data) && null !== $data['package_item_pay_cycle_id']) {
            $object->setPackageItemPayCycleId($data['package_item_pay_cycle_id']);
        } elseif (\array_key_exists('package_item_pay_cycle_id', $data) && null === $data['package_item_pay_cycle_id']) {
            $object->setPackageItemPayCycleId(null);
        }
        if (\array_key_exists('package_item_id', $data) && null !== $data['package_item_id']) {
            $object->setPackageItemId($data['package_item_id']);
        } elseif (\array_key_exists('package_item_id', $data) && null === $data['package_item_id']) {
            $object->setPackageItemId(null);
        }
        if (\array_key_exists('pay_cycle_type', $data) && null !== $data['pay_cycle_type']) {
            $object->setPayCycleType($data['pay_cycle_type']);
        } elseif (\array_key_exists('pay_cycle_type', $data) && null === $data['pay_cycle_type']) {
            $object->setPayCycleType(null);
        }
        if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
            $object->setPayCycleId($data['pay_cycle_id']);
        } elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
            $object->setPayCycleId(null);
        }
        if (\array_key_exists('pay_cycle_code', $data) && null !== $data['pay_cycle_code']) {
            $object->setPayCycleCode($data['pay_cycle_code']);
        } elseif (\array_key_exists('pay_cycle_code', $data) && null === $data['pay_cycle_code']) {
            $object->setPayCycleCode(null);
        }
        if (\array_key_exists('pay_cycles_per_year', $data) && null !== $data['pay_cycles_per_year']) {
            $object->setPayCyclesPerYear($data['pay_cycles_per_year']);
        } elseif (\array_key_exists('pay_cycles_per_year', $data) && null === $data['pay_cycles_per_year']) {
            $object->setPayCyclesPerYear(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
        }
        if (\array_key_exists('_embedded', $data) && null !== $data['_embedded']) {
            $object->setEmbedded($this->denormalizer->denormalize($data['_embedded'], 'CatchE\\OpenApi2\\Model\\PackageItemPayCycleEmbedded', 'json', $context));
        } elseif (\array_key_exists('_embedded', $data) && null === $data['_embedded']) {
            $object->setEmbedded(null);
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
        if (null !== $object->getPackageItemPayCycleId()) {
            $data['package_item_pay_cycle_id'] = $object->getPackageItemPayCycleId();
        }
        if (null !== $object->getPackageItemId()) {
            $data['package_item_id'] = $object->getPackageItemId();
        }
        if (null !== $object->getPayCycleType()) {
            $data['pay_cycle_type'] = $object->getPayCycleType();
        }
        if (null !== $object->getPayCycleId()) {
            $data['pay_cycle_id'] = $object->getPayCycleId();
        }
        if (null !== $object->getPayCycleCode()) {
            $data['pay_cycle_code'] = $object->getPayCycleCode();
        }
        if (null !== $object->getPayCyclesPerYear()) {
            $data['pay_cycles_per_year'] = $object->getPayCyclesPerYear();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }
        if (null !== $object->getEmbedded()) {
            $data['_embedded'] = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
        }

        return $data;
    }
}
