<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContractPayoutsOpenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContractPayoutsOpen' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractPayoutsOpen' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContractPayoutsOpen();
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
		if (\array_key_exists('override_warnings_flag', $data) && null !== $data['override_warnings_flag']) {
			$object->setOverrideWarningsFlag($data['override_warnings_flag']);
		} elseif (\array_key_exists('override_warnings_flag', $data) && null === $data['override_warnings_flag']) {
			$object->setOverrideWarningsFlag(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getPriceToPurchaseNet()) {
			$data['price_to_purchase_net'] = $object->getPriceToPurchaseNet();
		}
		if (null !== $object->getEarlyTerminationFeeNet()) {
			$data['early_termination_fee_net'] = $object->getEarlyTerminationFeeNet();
		}
		if (null !== $object->getTotalLossNet()) {
			$data['total_loss_net'] = $object->getTotalLossNet();
		}
		if (null !== $object->getOverrideWarningsFlag()) {
			$data['override_warnings_flag'] = $object->getOverrideWarningsFlag();
		}

		return $data;
	}
}
