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

class QuoteTyresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteTyres' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteTyres' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteTyres();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tyre_id', $data) && null !== $data['tyre_id']) {
            $object->setTyreId($data['tyre_id']);
        } elseif (\array_key_exists('tyre_id', $data) && null === $data['tyre_id']) {
            $object->setTyreId(null);
        }
        if (\array_key_exists('tyres_per_set', $data) && null !== $data['tyres_per_set']) {
            $object->setTyresPerSet($data['tyres_per_set']);
        } elseif (\array_key_exists('tyres_per_set', $data) && null === $data['tyres_per_set']) {
            $object->setTyresPerSet(null);
        }
        if (\array_key_exists('tyre_km_interval', $data) && null !== $data['tyre_km_interval']) {
            $object->setTyreKmInterval($data['tyre_km_interval']);
        } elseif (\array_key_exists('tyre_km_interval', $data) && null === $data['tyre_km_interval']) {
            $object->setTyreKmInterval(null);
        }
        if (\array_key_exists('unit_cost_net', $data) && null !== $data['unit_cost_net']) {
            $object->setUnitCostNet($data['unit_cost_net']);
        } elseif (\array_key_exists('unit_cost_net', $data) && null === $data['unit_cost_net']) {
            $object->setUnitCostNet(null);
        }
        if (\array_key_exists('limit_flag', $data) && null !== $data['limit_flag']) {
            $object->setLimitFlag($data['limit_flag']);
        } elseif (\array_key_exists('limit_flag', $data) && null === $data['limit_flag']) {
            $object->setLimitFlag(null);
        }
        if (\array_key_exists('tyres_estimated', $data) && null !== $data['tyres_estimated']) {
            $object->setTyresEstimated($data['tyres_estimated']);
        } elseif (\array_key_exists('tyres_estimated', $data) && null === $data['tyres_estimated']) {
            $object->setTyresEstimated(null);
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
        $data['tyre_id'] = $object->getTyreId();
        if (null !== $object->getTyresPerSet()) {
            $data['tyres_per_set'] = $object->getTyresPerSet();
        }
        $data['tyre_km_interval'] = $object->getTyreKmInterval();
        $data['unit_cost_net'] = $object->getUnitCostNet();
        $data['limit_flag'] = $object->getLimitFlag();
        if (null !== $object->getTyresEstimated()) {
            $data['tyres_estimated'] = $object->getTyresEstimated();
        }
        $data['included_flag'] = $object->getIncludedFlag();

        return $data;
    }
}
