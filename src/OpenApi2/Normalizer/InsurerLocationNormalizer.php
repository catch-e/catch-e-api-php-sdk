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

class InsurerLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InsurerLocation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InsurerLocation' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InsurerLocation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('insurer_location_id', $data) && null !== $data['insurer_location_id']) {
            $object->setInsurerLocationId($data['insurer_location_id']);
        } elseif (\array_key_exists('insurer_location_id', $data) && null === $data['insurer_location_id']) {
            $object->setInsurerLocationId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('policy_owner_type', $data) && null !== $data['policy_owner_type']) {
            $object->setPolicyOwnerType($data['policy_owner_type']);
        } elseif (\array_key_exists('policy_owner_type', $data) && null === $data['policy_owner_type']) {
            $object->setPolicyOwnerType(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('location_category', $data) && null !== $data['location_category']) {
            $object->setLocationCategory($data['location_category']);
        } elseif (\array_key_exists('location_category', $data) && null === $data['location_category']) {
            $object->setLocationCategory(null);
        }
        if (\array_key_exists('excess_rate', $data) && null !== $data['excess_rate']) {
            $object->setExcessRate($data['excess_rate']);
        } elseif (\array_key_exists('excess_rate', $data) && null === $data['excess_rate']) {
            $object->setExcessRate(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
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
        if (null !== $object->getInsurerLocationId()) {
            $data['insurer_location_id'] = $object->getInsurerLocationId();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getPolicyOwnerType()) {
            $data['policy_owner_type'] = $object->getPolicyOwnerType();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getLocationCategory()) {
            $data['location_category'] = $object->getLocationCategory();
        }
        if (null !== $object->getExcessRate()) {
            $data['excess_rate'] = $object->getExcessRate();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }

        return $data;
    }
}
