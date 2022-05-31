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

class InsuranceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InsuranceType' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InsuranceType' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InsuranceType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('insurance_type_id', $data) && null !== $data['insurance_type_id']) {
            $object->setInsuranceTypeId($data['insurance_type_id']);
        } elseif (\array_key_exists('insurance_type_id', $data) && null === $data['insurance_type_id']) {
            $object->setInsuranceTypeId(null);
        }
        if (\array_key_exists('insurance_type_code', $data) && null !== $data['insurance_type_code']) {
            $object->setInsuranceTypeCode($data['insurance_type_code']);
        } elseif (\array_key_exists('insurance_type_code', $data) && null === $data['insurance_type_code']) {
            $object->setInsuranceTypeCode(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('type_category', $data) && null !== $data['type_category']) {
            $object->setTypeCategory($data['type_category']);
        } elseif (\array_key_exists('type_category', $data) && null === $data['type_category']) {
            $object->setTypeCategory(null);
        }
        if (\array_key_exists('high_performance_flag', $data) && null !== $data['high_performance_flag']) {
            $object->setHighPerformanceFlag($data['high_performance_flag']);
        } elseif (\array_key_exists('high_performance_flag', $data) && null === $data['high_performance_flag']) {
            $object->setHighPerformanceFlag(null);
        }
        if (\array_key_exists('claim_excess', $data) && null !== $data['claim_excess']) {
            $object->setClaimExcess($data['claim_excess']);
        } elseif (\array_key_exists('claim_excess', $data) && null === $data['claim_excess']) {
            $object->setClaimExcess(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
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
        if (null !== $object->getInsuranceTypeId()) {
            $data['insurance_type_id'] = $object->getInsuranceTypeId();
        }
        if (null !== $object->getInsuranceTypeCode()) {
            $data['insurance_type_code'] = $object->getInsuranceTypeCode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getTypeCategory()) {
            $data['type_category'] = $object->getTypeCategory();
        }
        if (null !== $object->getHighPerformanceFlag()) {
            $data['high_performance_flag'] = $object->getHighPerformanceFlag();
        }
        if (null !== $object->getClaimExcess()) {
            $data['claim_excess'] = $object->getClaimExcess();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }

        return $data;
    }
}
