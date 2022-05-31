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

class ContractPayoutNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\ContractPayout' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractPayout' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\ContractPayout();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contract_payout_id', $data) && null !== $data['contract_payout_id']) {
            $object->setContractPayoutId($data['contract_payout_id']);
        } elseif (\array_key_exists('contract_payout_id', $data) && null === $data['contract_payout_id']) {
            $object->setContractPayoutId(null);
        }
        if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
            $object->setContractId($data['contract_id']);
        } elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
            $object->setContractId(null);
        }
        if (\array_key_exists('contract_payout_status_id', $data) && null !== $data['contract_payout_status_id']) {
            $object->setContractPayoutStatusId($data['contract_payout_status_id']);
        } elseif (\array_key_exists('contract_payout_status_id', $data) && null === $data['contract_payout_status_id']) {
            $object->setContractPayoutStatusId(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('payout_date', $data) && null !== $data['payout_date']) {
            $object->setPayoutDate($data['payout_date']);
        } elseif (\array_key_exists('payout_date', $data) && null === $data['payout_date']) {
            $object->setPayoutDate(null);
        }
        if (\array_key_exists('price_to_purchase_flag', $data) && null !== $data['price_to_purchase_flag']) {
            $object->setPriceToPurchaseFlag($data['price_to_purchase_flag']);
        } elseif (\array_key_exists('price_to_purchase_flag', $data) && null === $data['price_to_purchase_flag']) {
            $object->setPriceToPurchaseFlag(null);
        }
        if (\array_key_exists('early_termination_fee_flag', $data) && null !== $data['early_termination_fee_flag']) {
            $object->setEarlyTerminationFeeFlag($data['early_termination_fee_flag']);
        } elseif (\array_key_exists('early_termination_fee_flag', $data) && null === $data['early_termination_fee_flag']) {
            $object->setEarlyTerminationFeeFlag(null);
        }
        if (\array_key_exists('total_loss_flag', $data) && null !== $data['total_loss_flag']) {
            $object->setTotalLossFlag($data['total_loss_flag']);
        } elseif (\array_key_exists('total_loss_flag', $data) && null === $data['total_loss_flag']) {
            $object->setTotalLossFlag(null);
        }
        if (\array_key_exists('remaining_billings', $data) && null !== $data['remaining_billings']) {
            $object->setRemainingBillings($data['remaining_billings']);
        } elseif (\array_key_exists('remaining_billings', $data) && null === $data['remaining_billings']) {
            $object->setRemainingBillings(null);
        }
        if (\array_key_exists('calculated_value_net', $data) && null !== $data['calculated_value_net']) {
            $object->setCalculatedValueNet($data['calculated_value_net']);
        } elseif (\array_key_exists('calculated_value_net', $data) && null === $data['calculated_value_net']) {
            $object->setCalculatedValueNet(null);
        }
        if (\array_key_exists('calculated_value_gst', $data) && null !== $data['calculated_value_gst']) {
            $object->setCalculatedValueGst($data['calculated_value_gst']);
        } elseif (\array_key_exists('calculated_value_gst', $data) && null === $data['calculated_value_gst']) {
            $object->setCalculatedValueGst(null);
        }
        if (\array_key_exists('financier_value', $data) && null !== $data['financier_value']) {
            $object->setFinancierValue($data['financier_value']);
        } elseif (\array_key_exists('financier_value', $data) && null === $data['financier_value']) {
            $object->setFinancierValue(null);
        }
        if (\array_key_exists('valid_until', $data) && null !== $data['valid_until']) {
            $object->setValidUntil($data['valid_until']);
        } elseif (\array_key_exists('valid_until', $data) && null === $data['valid_until']) {
            $object->setValidUntil(null);
        }
        if (\array_key_exists('price_to_purchase_net', $data) && null !== $data['price_to_purchase_net']) {
            $object->setPriceToPurchaseNet($data['price_to_purchase_net']);
        } elseif (\array_key_exists('price_to_purchase_net', $data) && null === $data['price_to_purchase_net']) {
            $object->setPriceToPurchaseNet(null);
        }
        if (\array_key_exists('price_to_purchase_gst', $data) && null !== $data['price_to_purchase_gst']) {
            $object->setPriceToPurchaseGst($data['price_to_purchase_gst']);
        } elseif (\array_key_exists('price_to_purchase_gst', $data) && null === $data['price_to_purchase_gst']) {
            $object->setPriceToPurchaseGst(null);
        }
        if (\array_key_exists('early_termination_fee_net', $data) && null !== $data['early_termination_fee_net']) {
            $object->setEarlyTerminationFeeNet($data['early_termination_fee_net']);
        } elseif (\array_key_exists('early_termination_fee_net', $data) && null === $data['early_termination_fee_net']) {
            $object->setEarlyTerminationFeeNet(null);
        }
        if (\array_key_exists('early_termination_fee_gst', $data) && null !== $data['early_termination_fee_gst']) {
            $object->setEarlyTerminationFeeGst($data['early_termination_fee_gst']);
        } elseif (\array_key_exists('early_termination_fee_gst', $data) && null === $data['early_termination_fee_gst']) {
            $object->setEarlyTerminationFeeGst(null);
        }
        if (\array_key_exists('total_loss_net', $data) && null !== $data['total_loss_net']) {
            $object->setTotalLossNet($data['total_loss_net']);
        } elseif (\array_key_exists('total_loss_net', $data) && null === $data['total_loss_net']) {
            $object->setTotalLossNet(null);
        }
        if (\array_key_exists('total_loss_gst', $data) && null !== $data['total_loss_gst']) {
            $object->setTotalLossGst($data['total_loss_gst']);
        } elseif (\array_key_exists('total_loss_gst', $data) && null === $data['total_loss_gst']) {
            $object->setTotalLossGst(null);
        }
        if (\array_key_exists('attachment_id', $data) && null !== $data['attachment_id']) {
            $object->setAttachmentId($data['attachment_id']);
        } elseif (\array_key_exists('attachment_id', $data) && null === $data['attachment_id']) {
            $object->setAttachmentId(null);
        }
        if (\array_key_exists('user_id_create', $data) && null !== $data['user_id_create']) {
            $object->setUserIdCreate($data['user_id_create']);
        } elseif (\array_key_exists('user_id_create', $data) && null === $data['user_id_create']) {
            $object->setUserIdCreate(null);
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
        if (null !== $object->getContractPayoutId()) {
            $data['contract_payout_id'] = $object->getContractPayoutId();
        }
        if (null !== $object->getContractId()) {
            $data['contract_id'] = $object->getContractId();
        }
        if (null !== $object->getContractPayoutStatusId()) {
            $data['contract_payout_status_id'] = $object->getContractPayoutStatusId();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getPayoutDate()) {
            $data['payout_date'] = $object->getPayoutDate();
        }
        if (null !== $object->getPriceToPurchaseFlag()) {
            $data['price_to_purchase_flag'] = $object->getPriceToPurchaseFlag();
        }
        if (null !== $object->getEarlyTerminationFeeFlag()) {
            $data['early_termination_fee_flag'] = $object->getEarlyTerminationFeeFlag();
        }
        if (null !== $object->getTotalLossFlag()) {
            $data['total_loss_flag'] = $object->getTotalLossFlag();
        }
        if (null !== $object->getRemainingBillings()) {
            $data['remaining_billings'] = $object->getRemainingBillings();
        }
        if (null !== $object->getCalculatedValueNet()) {
            $data['calculated_value_net'] = $object->getCalculatedValueNet();
        }
        if (null !== $object->getCalculatedValueGst()) {
            $data['calculated_value_gst'] = $object->getCalculatedValueGst();
        }
        if (null !== $object->getFinancierValue()) {
            $data['financier_value'] = $object->getFinancierValue();
        }
        if (null !== $object->getValidUntil()) {
            $data['valid_until'] = $object->getValidUntil();
        }
        if (null !== $object->getPriceToPurchaseNet()) {
            $data['price_to_purchase_net'] = $object->getPriceToPurchaseNet();
        }
        if (null !== $object->getPriceToPurchaseGst()) {
            $data['price_to_purchase_gst'] = $object->getPriceToPurchaseGst();
        }
        if (null !== $object->getEarlyTerminationFeeNet()) {
            $data['early_termination_fee_net'] = $object->getEarlyTerminationFeeNet();
        }
        if (null !== $object->getEarlyTerminationFeeGst()) {
            $data['early_termination_fee_gst'] = $object->getEarlyTerminationFeeGst();
        }
        if (null !== $object->getTotalLossNet()) {
            $data['total_loss_net'] = $object->getTotalLossNet();
        }
        if (null !== $object->getTotalLossGst()) {
            $data['total_loss_gst'] = $object->getTotalLossGst();
        }
        if (null !== $object->getAttachmentId()) {
            $data['attachment_id'] = $object->getAttachmentId();
        }
        if (null !== $object->getUserIdCreate()) {
            $data['user_id_create'] = $object->getUserIdCreate();
        }

        return $data;
    }
}
