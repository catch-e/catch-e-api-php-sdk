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

class ContractBudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContractBudget' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractBudget' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContractBudget();
		if (\array_key_exists('id', $data) && null !== $data['id']) {
			$object->setId($data['id']);
		} elseif (\array_key_exists('id', $data) && null === $data['id']) {
			$object->setId(null);
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
		if (\array_key_exists('billing_period', $data) && null !== $data['billing_period']) {
			$object->setBillingPeriod($data['billing_period']);
		} elseif (\array_key_exists('billing_period', $data) && null === $data['billing_period']) {
			$object->setBillingPeriod(null);
		}
		if (\array_key_exists('billing_period_item_no', $data) && null !== $data['billing_period_item_no']) {
			$object->setBillingPeriodItemNo($data['billing_period_item_no']);
		} elseif (\array_key_exists('billing_period_item_no', $data) && null === $data['billing_period_item_no']) {
			$object->setBillingPeriodItemNo(null);
		}
		if (\array_key_exists('billing_type_flag', $data) && null !== $data['billing_type_flag']) {
			$object->setBillingTypeFlag($data['billing_type_flag']);
		} elseif (\array_key_exists('billing_type_flag', $data) && null === $data['billing_type_flag']) {
			$object->setBillingTypeFlag(null);
		}
		if (\array_key_exists('billing_interval', $data) && null !== $data['billing_interval']) {
			$object->setBillingInterval($data['billing_interval']);
		} elseif (\array_key_exists('billing_interval', $data) && null === $data['billing_interval']) {
			$object->setBillingInterval(null);
		}
		if (\array_key_exists('billing_date', $data) && null !== $data['billing_date']) {
			$object->setBillingDate(\DateTime::createFromFormat('Y-m-d', $data['billing_date'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('billing_date', $data) && null === $data['billing_date']) {
			$object->setBillingDate(null);
		}
		if (\array_key_exists('payment_method', $data) && null !== $data['payment_method']) {
			$object->setPaymentMethod($data['payment_method']);
		} elseif (\array_key_exists('payment_method', $data) && null === $data['payment_method']) {
			$object->setPaymentMethod(null);
		}
		if (\array_key_exists('amount_net', $data) && null !== $data['amount_net']) {
			$object->setAmountNet($data['amount_net']);
		} elseif (\array_key_exists('amount_net', $data) && null === $data['amount_net']) {
			$object->setAmountNet(null);
		}
		if (\array_key_exists('amount_gst', $data) && null !== $data['amount_gst']) {
			$object->setAmountGst($data['amount_gst']);
		} elseif (\array_key_exists('amount_gst', $data) && null === $data['amount_gst']) {
			$object->setAmountGst(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}
		if (\array_key_exists('posting_class_code', $data) && null !== $data['posting_class_code']) {
			$object->setPostingClassCode($data['posting_class_code']);
		} elseif (\array_key_exists('posting_class_code', $data) && null === $data['posting_class_code']) {
			$object->setPostingClassCode(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getId()) {
			$data['id'] = $object->getId();
		}
		if (null !== $object->getContractId()) {
			$data['contract_id'] = $object->getContractId();
		}
		if (null !== $object->getPostingClassId()) {
			$data['posting_class_id'] = $object->getPostingClassId();
		}
		if (null !== $object->getBillingPeriod()) {
			$data['billing_period'] = $object->getBillingPeriod();
		}
		if (null !== $object->getBillingPeriodItemNo()) {
			$data['billing_period_item_no'] = $object->getBillingPeriodItemNo();
		}
		if (null !== $object->getBillingTypeFlag()) {
			$data['billing_type_flag'] = $object->getBillingTypeFlag();
		}
		if (null !== $object->getBillingInterval()) {
			$data['billing_interval'] = $object->getBillingInterval();
		}
		if (null !== $object->getBillingDate()) {
			$data['billing_date'] = $object->getBillingDate()->format('Y-m-d');
		}
		if (null !== $object->getPaymentMethod()) {
			$data['payment_method'] = $object->getPaymentMethod();
		}
		if (null !== $object->getAmountNet()) {
			$data['amount_net'] = $object->getAmountNet();
		}
		if (null !== $object->getAmountGst()) {
			$data['amount_gst'] = $object->getAmountGst();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}
		if (null !== $object->getPostingClassCode()) {
			$data['posting_class_code'] = $object->getPostingClassCode();
		}

		return $data;
	}
}
