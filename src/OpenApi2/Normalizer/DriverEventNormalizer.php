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

class DriverEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\DriverEvent' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\DriverEvent' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\DriverEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('event_date', $data) && null !== $data['event_date']) {
            $object->setEventDate(\DateTime::createFromFormat('Y-m-d', $data['event_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('event_date', $data) && null === $data['event_date']) {
            $object->setEventDate(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('odometer', $data) && null !== $data['odometer']) {
            $object->setOdometer($data['odometer']);
        } elseif (\array_key_exists('odometer', $data) && null === $data['odometer']) {
            $object->setOdometer(null);
        }
        if (\array_key_exists('contract_event_action_id', $data) && null !== $data['contract_event_action_id']) {
            $object->setContractEventActionId($data['contract_event_action_id']);
        } elseif (\array_key_exists('contract_event_action_id', $data) && null === $data['contract_event_action_id']) {
            $object->setContractEventActionId(null);
        }
        if (\array_key_exists('due_date', $data) && null !== $data['due_date']) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('due_date', $data) && null === $data['due_date']) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('completed_flag', $data) && null !== $data['completed_flag']) {
            $object->setCompletedFlag($data['completed_flag']);
        } elseif (\array_key_exists('completed_flag', $data) && null === $data['completed_flag']) {
            $object->setCompletedFlag(null);
        }
        if (\array_key_exists('override_warnings_flag', $data) && null !== $data['override_warnings_flag']) {
            $object->setOverrideWarningsFlag($data['override_warnings_flag']);
        } elseif (\array_key_exists('override_warnings_flag', $data) && null === $data['override_warnings_flag']) {
            $object->setOverrideWarningsFlag(null);
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
        $data['driver_id'] = $object->getDriverId();
        if (null !== $object->getEventDate()) {
            $data['event_date'] = $object->getEventDate()->format('Y-m-d');
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getOdometer()) {
            $data['odometer'] = $object->getOdometer();
        }
        if (null !== $object->getContractEventActionId()) {
            $data['contract_event_action_id'] = $object->getContractEventActionId();
        }
        if (null !== $object->getDueDate()) {
            $data['due_date'] = $object->getDueDate()->format('Y-m-d');
        }
        if (null !== $object->getCompletedFlag()) {
            $data['completed_flag'] = $object->getCompletedFlag();
        }
        if (null !== $object->getOverrideWarningsFlag()) {
            $data['override_warnings_flag'] = $object->getOverrideWarningsFlag();
        }

        return $data;
    }
}
