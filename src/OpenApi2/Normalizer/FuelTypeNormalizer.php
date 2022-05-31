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

class FuelTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\FuelType' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\FuelType' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\FuelType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fuel_type_id', $data) && null !== $data['fuel_type_id']) {
            $object->setFuelTypeId($data['fuel_type_id']);
        } elseif (\array_key_exists('fuel_type_id', $data) && null === $data['fuel_type_id']) {
            $object->setFuelTypeId(null);
        }
        if (\array_key_exists('fuel_type_code', $data) && null !== $data['fuel_type_code']) {
            $object->setFuelTypeCode($data['fuel_type_code']);
        } elseif (\array_key_exists('fuel_type_code', $data) && null === $data['fuel_type_code']) {
            $object->setFuelTypeCode(null);
        }
        if (\array_key_exists('fuel_name', $data) && null !== $data['fuel_name']) {
            $object->setFuelName($data['fuel_name']);
        } elseif (\array_key_exists('fuel_name', $data) && null === $data['fuel_name']) {
            $object->setFuelName(null);
        }
        if (\array_key_exists('fuel_cpl', $data) && null !== $data['fuel_cpl']) {
            $object->setFuelCpl($data['fuel_cpl']);
        } elseif (\array_key_exists('fuel_cpl', $data) && null === $data['fuel_cpl']) {
            $object->setFuelCpl(null);
        }
        if (\array_key_exists('effective_date', $data) && null !== $data['effective_date']) {
            $object->setEffectiveDate(\DateTime::createFromFormat('Y-m-d', $data['effective_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('effective_date', $data) && null === $data['effective_date']) {
            $object->setEffectiveDate(null);
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
        if (null !== $object->getFuelTypeId()) {
            $data['fuel_type_id'] = $object->getFuelTypeId();
        }
        if (null !== $object->getFuelTypeCode()) {
            $data['fuel_type_code'] = $object->getFuelTypeCode();
        }
        if (null !== $object->getFuelName()) {
            $data['fuel_name'] = $object->getFuelName();
        }
        if (null !== $object->getFuelCpl()) {
            $data['fuel_cpl'] = $object->getFuelCpl();
        }
        if (null !== $object->getEffectiveDate()) {
            $data['effective_date'] = $object->getEffectiveDate()->format('Y-m-d');
        }

        return $data;
    }
}
