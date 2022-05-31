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

class QuotePatchFuelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuotePatchFuel' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuotePatchFuel' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuotePatchFuel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fuel_type_id', $data) && null !== $data['fuel_type_id']) {
            $object->setFuelTypeId($data['fuel_type_id']);
        } elseif (\array_key_exists('fuel_type_id', $data) && null === $data['fuel_type_id']) {
            $object->setFuelTypeId(null);
        }
        if (\array_key_exists('cost_per_litre', $data) && null !== $data['cost_per_litre']) {
            $object->setCostPerLitre($data['cost_per_litre']);
        } elseif (\array_key_exists('cost_per_litre', $data) && null === $data['cost_per_litre']) {
            $object->setCostPerLitre(null);
        }
        if (\array_key_exists('usage_type', $data) && null !== $data['usage_type']) {
            $object->setUsageType($data['usage_type']);
        } elseif (\array_key_exists('usage_type', $data) && null === $data['usage_type']) {
            $object->setUsageType(null);
        }
        if (\array_key_exists('litres_per_100km', $data) && null !== $data['litres_per_100km']) {
            $object->setLitresPer100km($data['litres_per_100km']);
        } elseif (\array_key_exists('litres_per_100km', $data) && null === $data['litres_per_100km']) {
            $object->setLitresPer100km(null);
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
        if (null !== $object->getFuelTypeId()) {
            $data['fuel_type_id'] = $object->getFuelTypeId();
        }
        if (null !== $object->getCostPerLitre()) {
            $data['cost_per_litre'] = $object->getCostPerLitre();
        }
        if (null !== $object->getUsageType()) {
            $data['usage_type'] = $object->getUsageType();
        }
        if (null !== $object->getLitresPer100km()) {
            $data['litres_per_100km'] = $object->getLitresPer100km();
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
