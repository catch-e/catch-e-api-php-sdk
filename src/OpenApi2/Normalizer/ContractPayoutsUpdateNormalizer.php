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

class ContractPayoutsUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\ContractPayoutsUpdate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractPayoutsUpdate' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\ContractPayoutsUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('price_to_purchase_net', $data) && null !== $data['price_to_purchase_net']) {
            $object->setPriceToPurchaseNet($data['price_to_purchase_net']);
        } elseif (\array_key_exists('price_to_purchase_net', $data) && null === $data['price_to_purchase_net']) {
            $object->setPriceToPurchaseNet(null);
        }
        if (\array_key_exists('early_termination_fee_net', $data) && null !== $data['early_termination_fee_net']) {
            $object->setEarlyTerminationFeeNet($data['early_termination_fee_net']);
        } elseif (\array_key_exists('early_termination_fee_net', $data) && null === $data['early_termination_fee_net']) {
            $object->setEarlyTerminationFeeNet(null);
        }
        if (\array_key_exists('total_loss_net', $data) && null !== $data['total_loss_net']) {
            $object->setTotalLossNet($data['total_loss_net']);
        } elseif (\array_key_exists('total_loss_net', $data) && null === $data['total_loss_net']) {
            $object->setTotalLossNet(null);
        }
        if (\array_key_exists('contract_payout_status_id', $data) && null !== $data['contract_payout_status_id']) {
            $object->setContractPayoutStatusId($data['contract_payout_status_id']);
        } elseif (\array_key_exists('contract_payout_status_id', $data) && null === $data['contract_payout_status_id']) {
            $object->setContractPayoutStatusId(null);
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
        if (null !== $object->getFinancierValue()) {
            $data['financier_value'] = $object->getFinancierValue();
        }
        if (null !== $object->getValidUntil()) {
            $data['valid_until'] = $object->getValidUntil();
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
        if (null !== $object->getPriceToPurchaseNet()) {
            $data['price_to_purchase_net'] = $object->getPriceToPurchaseNet();
        }
        if (null !== $object->getEarlyTerminationFeeNet()) {
            $data['early_termination_fee_net'] = $object->getEarlyTerminationFeeNet();
        }
        if (null !== $object->getTotalLossNet()) {
            $data['total_loss_net'] = $object->getTotalLossNet();
        }
        if (null !== $object->getContractPayoutStatusId()) {
            $data['contract_payout_status_id'] = $object->getContractPayoutStatusId();
        }
        if (null !== $object->getOverrideWarningsFlag()) {
            $data['override_warnings_flag'] = $object->getOverrideWarningsFlag();
        }

        return $data;
    }
}
