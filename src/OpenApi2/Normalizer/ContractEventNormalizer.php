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

class ContractEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\ContractEvent' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractEvent' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\ContractEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contract_event_id', $data) && null !== $data['contract_event_id']) {
            $object->setContractEventId($data['contract_event_id']);
        } elseif (\array_key_exists('contract_event_id', $data) && null === $data['contract_event_id']) {
            $object->setContractEventId(null);
        }
        if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
            $object->setContractId($data['contract_id']);
        } elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
            $object->setContractId(null);
        }
        if (\array_key_exists('posting_class_id', $data) && null !== $data['posting_class_id']) {
            $object->setPostingClassId($data['posting_class_id']);
        } elseif (\array_key_exists('posting_class_id', $data) && null === $data['posting_class_id']) {
            $object->setPostingClassId(null);
        }
        if (\array_key_exists('attachment_id', $data) && null !== $data['attachment_id']) {
            $object->setAttachmentId($data['attachment_id']);
        } elseif (\array_key_exists('attachment_id', $data) && null === $data['attachment_id']) {
            $object->setAttachmentId(null);
        }
        if (\array_key_exists('event_date', $data) && null !== $data['event_date']) {
            $object->setEventDate(\DateTime::createFromFormat('Y-m-d', $data['event_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('event_date', $data) && null === $data['event_date']) {
            $object->setEventDate(null);
        }
        if (\array_key_exists('table_name', $data) && null !== $data['table_name']) {
            $object->setTableName($data['table_name']);
        } elseif (\array_key_exists('table_name', $data) && null === $data['table_name']) {
            $object->setTableName(null);
        }
        if (\array_key_exists('record_id', $data) && null !== $data['record_id']) {
            $object->setRecordId($data['record_id']);
        } elseif (\array_key_exists('record_id', $data) && null === $data['record_id']) {
            $object->setRecordId(null);
        }
        if (\array_key_exists('event_value', $data) && null !== $data['event_value']) {
            $object->setEventValue($data['event_value']);
        } elseif (\array_key_exists('event_value', $data) && null === $data['event_value']) {
            $object->setEventValue(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('contract_event_value_id', $data) && null !== $data['contract_event_value_id']) {
            $object->setContractEventValueId($data['contract_event_value_id']);
        } elseif (\array_key_exists('contract_event_value_id', $data) && null === $data['contract_event_value_id']) {
            $object->setContractEventValueId(null);
        }
        if (\array_key_exists('contract_event_description_id', $data) && null !== $data['contract_event_description_id']) {
            $object->setContractEventDescriptionId($data['contract_event_description_id']);
        } elseif (\array_key_exists('contract_event_description_id', $data) && null === $data['contract_event_description_id']) {
            $object->setContractEventDescriptionId(null);
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
        if (\array_key_exists('event_amount', $data) && null !== $data['event_amount']) {
            $object->setEventAmount($data['event_amount']);
        } elseif (\array_key_exists('event_amount', $data) && null === $data['event_amount']) {
            $object->setEventAmount(null);
        }
        if (\array_key_exists('message_type', $data) && null !== $data['message_type']) {
            $object->setMessageType($data['message_type']);
        } elseif (\array_key_exists('message_type', $data) && null === $data['message_type']) {
            $object->setMessageType(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('last_edit', $data) && null !== $data['last_edit']) {
            $object->setLastEdit($data['last_edit']);
        } elseif (\array_key_exists('last_edit', $data) && null === $data['last_edit']) {
            $object->setLastEdit(null);
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
        if (null !== $object->getContractEventId()) {
            $data['contract_event_id'] = $object->getContractEventId();
        }
        if (null !== $object->getContractId()) {
            $data['contract_id'] = $object->getContractId();
        }
        if (null !== $object->getPostingClassId()) {
            $data['posting_class_id'] = $object->getPostingClassId();
        }
        if (null !== $object->getAttachmentId()) {
            $data['attachment_id'] = $object->getAttachmentId();
        }
        if (null !== $object->getEventDate()) {
            $data['event_date'] = $object->getEventDate()->format('Y-m-d');
        }
        if (null !== $object->getTableName()) {
            $data['table_name'] = $object->getTableName();
        }
        if (null !== $object->getRecordId()) {
            $data['record_id'] = $object->getRecordId();
        }
        if (null !== $object->getEventValue()) {
            $data['event_value'] = $object->getEventValue();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getContractEventValueId()) {
            $data['contract_event_value_id'] = $object->getContractEventValueId();
        }
        if (null !== $object->getContractEventDescriptionId()) {
            $data['contract_event_description_id'] = $object->getContractEventDescriptionId();
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
        if (null !== $object->getEventAmount()) {
            $data['event_amount'] = $object->getEventAmount();
        }
        if (null !== $object->getMessageType()) {
            $data['message_type'] = $object->getMessageType();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getLastEdit()) {
            $data['last_edit'] = $object->getLastEdit();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
