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

class QuoteSmallDamageRepairsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteSmallDamageRepairs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteSmallDamageRepairs' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteSmallDamageRepairs();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('small_damage_repairs_id', $data) && null !== $data['small_damage_repairs_id']) {
            $object->setSmallDamageRepairsId($data['small_damage_repairs_id']);
        } elseif (\array_key_exists('small_damage_repairs_id', $data) && null === $data['small_damage_repairs_id']) {
            $object->setSmallDamageRepairsId(null);
        }
        if (\array_key_exists('months', $data) && null !== $data['months']) {
            $object->setMonths($data['months']);
        } elseif (\array_key_exists('months', $data) && null === $data['months']) {
            $object->setMonths(null);
        }
        if (\array_key_exists('premium', $data) && null !== $data['premium']) {
            $object->setPremium($data['premium']);
        } elseif (\array_key_exists('premium', $data) && null === $data['premium']) {
            $object->setPremium(null);
        }
        if (\array_key_exists('cost', $data) && null !== $data['cost']) {
            $object->setCost($data['cost']);
        } elseif (\array_key_exists('cost', $data) && null === $data['cost']) {
            $object->setCost(null);
        }
        if (\array_key_exists('financed_flag', $data) && null !== $data['financed_flag']) {
            $object->setFinancedFlag($data['financed_flag']);
        } elseif (\array_key_exists('financed_flag', $data) && null === $data['financed_flag']) {
            $object->setFinancedFlag(null);
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
        $data['small_damage_repairs_id'] = $object->getSmallDamageRepairsId();
        if (null !== $object->getMonths()) {
            $data['months'] = $object->getMonths();
        }
        if (null !== $object->getPremium()) {
            $data['premium'] = $object->getPremium();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        $data['financed_flag'] = $object->getFinancedFlag();
        $data['included_flag'] = $object->getIncludedFlag();

        return $data;
    }
}
