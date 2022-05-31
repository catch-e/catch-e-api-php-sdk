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

class RoadsideAssistancePlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\RoadsideAssistancePlan' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\RoadsideAssistancePlan' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\RoadsideAssistancePlan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('roadside_assistance_plan_id', $data) && null !== $data['roadside_assistance_plan_id']) {
            $object->setRoadsideAssistancePlanId($data['roadside_assistance_plan_id']);
        } elseif (\array_key_exists('roadside_assistance_plan_id', $data) && null === $data['roadside_assistance_plan_id']) {
            $object->setRoadsideAssistancePlanId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('roadside_assistance_plan_code', $data) && null !== $data['roadside_assistance_plan_code']) {
            $object->setRoadsideAssistancePlanCode($data['roadside_assistance_plan_code']);
        } elseif (\array_key_exists('roadside_assistance_plan_code', $data) && null === $data['roadside_assistance_plan_code']) {
            $object->setRoadsideAssistancePlanCode(null);
        }
        if (\array_key_exists('roadside_assistance_plan_name', $data) && null !== $data['roadside_assistance_plan_name']) {
            $object->setRoadsideAssistancePlanName($data['roadside_assistance_plan_name']);
        } elseif (\array_key_exists('roadside_assistance_plan_name', $data) && null === $data['roadside_assistance_plan_name']) {
            $object->setRoadsideAssistancePlanName(null);
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
        if (null !== $object->getRoadsideAssistancePlanId()) {
            $data['roadside_assistance_plan_id'] = $object->getRoadsideAssistancePlanId();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getRoadsideAssistancePlanCode()) {
            $data['roadside_assistance_plan_code'] = $object->getRoadsideAssistancePlanCode();
        }
        if (null !== $object->getRoadsideAssistancePlanName()) {
            $data['roadside_assistance_plan_name'] = $object->getRoadsideAssistancePlanName();
        }
        if (null !== $object->getPremium()) {
            $data['premium'] = $object->getPremium();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}