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

class UpdateCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\UpdateCard' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\UpdateCard' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\UpdateCard();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
            $object->setContractId($data['contract_id']);
        } elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
            $object->setContractId(null);
        }
        if (\array_key_exists('card_number', $data) && null !== $data['card_number']) {
            $object->setCardNumber($data['card_number']);
        } elseif (\array_key_exists('card_number', $data) && null === $data['card_number']) {
            $object->setCardNumber(null);
        }
        if (\array_key_exists('account_number', $data) && null !== $data['account_number']) {
            $object->setAccountNumber($data['account_number']);
        } elseif (\array_key_exists('account_number', $data) && null === $data['account_number']) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('posting_flag', $data) && null !== $data['posting_flag']) {
            $object->setPostingFlag($data['posting_flag']);
        } elseif (\array_key_exists('posting_flag', $data) && null === $data['posting_flag']) {
            $object->setPostingFlag(null);
        }
        if (\array_key_exists('recharge_flag', $data) && null !== $data['recharge_flag']) {
            $object->setRechargeFlag($data['recharge_flag']);
        } elseif (\array_key_exists('recharge_flag', $data) && null === $data['recharge_flag']) {
            $object->setRechargeFlag(null);
        }
        if (\array_key_exists('client_id_recharge', $data) && null !== $data['client_id_recharge']) {
            $object->setClientIdRecharge($data['client_id_recharge']);
        } elseif (\array_key_exists('client_id_recharge', $data) && null === $data['client_id_recharge']) {
            $object->setClientIdRecharge(null);
        }
        if (\array_key_exists('history_only_flag', $data) && null !== $data['history_only_flag']) {
            $object->setHistoryOnlyFlag($data['history_only_flag']);
        } elseif (\array_key_exists('history_only_flag', $data) && null === $data['history_only_flag']) {
            $object->setHistoryOnlyFlag(null);
        }
        if (\array_key_exists('activated_date', $data) && null !== $data['activated_date']) {
            $object->setActivatedDate(\DateTime::createFromFormat('Y-m-d', $data['activated_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('activated_date', $data) && null === $data['activated_date']) {
            $object->setActivatedDate(null);
        }
        if (\array_key_exists('inactivated_date', $data) && null !== $data['inactivated_date']) {
            $object->setInactivatedDate(\DateTime::createFromFormat('Y-m-d', $data['inactivated_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('inactivated_date', $data) && null === $data['inactivated_date']) {
            $object->setInactivatedDate(null);
        }
        if (\array_key_exists('expiry_date', $data) && null !== $data['expiry_date']) {
            $object->setExpiryDate(\DateTime::createFromFormat('Y-m-d', $data['expiry_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('expiry_date', $data) && null === $data['expiry_date']) {
            $object->setExpiryDate(null);
        }
        if (\array_key_exists('card_sub_status_id', $data) && null !== $data['card_sub_status_id']) {
            $object->setCardSubStatusId($data['card_sub_status_id']);
        } elseif (\array_key_exists('card_sub_status_id', $data) && null === $data['card_sub_status_id']) {
            $object->setCardSubStatusId(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
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
        if (null !== $object->getContractId()) {
            $data['contract_id'] = $object->getContractId();
        }
        if (null !== $object->getCardNumber()) {
            $data['card_number'] = $object->getCardNumber();
        }
        if (null !== $object->getAccountNumber()) {
            $data['account_number'] = $object->getAccountNumber();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getPostingFlag()) {
            $data['posting_flag'] = $object->getPostingFlag();
        }
        if (null !== $object->getRechargeFlag()) {
            $data['recharge_flag'] = $object->getRechargeFlag();
        }
        if (null !== $object->getClientIdRecharge()) {
            $data['client_id_recharge'] = $object->getClientIdRecharge();
        }
        if (null !== $object->getHistoryOnlyFlag()) {
            $data['history_only_flag'] = $object->getHistoryOnlyFlag();
        }
        if (null !== $object->getActivatedDate()) {
            $data['activated_date'] = $object->getActivatedDate()->format('Y-m-d');
        }
        if (null !== $object->getInactivatedDate()) {
            $data['inactivated_date'] = $object->getInactivatedDate()->format('Y-m-d');
        }
        if (null !== $object->getExpiryDate()) {
            $data['expiry_date'] = $object->getExpiryDate()->format('Y-m-d');
        }
        if (null !== $object->getCardSubStatusId()) {
            $data['card_sub_status_id'] = $object->getCardSubStatusId();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
