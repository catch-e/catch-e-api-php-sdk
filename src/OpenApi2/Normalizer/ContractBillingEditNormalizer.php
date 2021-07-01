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

class ContractBillingEditNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContractBillingEdit' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractBillingEdit' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContractBillingEdit();
		if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
			$object->setContractId($data['contract_id']);
		} elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
			$object->setContractId(null);
		}
		if (\array_key_exists('term', $data) && null !== $data['term']) {
			$object->setTerm($data['term']);
		} elseif (\array_key_exists('term', $data) && null === $data['term']) {
			$object->setTerm(null);
		}
		if (\array_key_exists('contract_start', $data) && null !== $data['contract_start']) {
			$object->setContractStart(\DateTime::createFromFormat('Y-m-d', $data['contract_start'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('contract_start', $data) && null === $data['contract_start']) {
			$object->setContractStart(null);
		}
		if (\array_key_exists('contract_end', $data) && null !== $data['contract_end']) {
			$object->setContractEnd(\DateTime::createFromFormat('Y-m-d', $data['contract_end'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('contract_end', $data) && null === $data['contract_end']) {
			$object->setContractEnd(null);
		}
		if (\array_key_exists('start_periodic', $data) && null !== $data['start_periodic']) {
			$object->setStartPeriodic(\DateTime::createFromFormat('Y-m-d', $data['start_periodic'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('start_periodic', $data) && null === $data['start_periodic']) {
			$object->setStartPeriodic(null);
		}
		if (\array_key_exists('inertia_flag', $data) && null !== $data['inertia_flag']) {
			$object->setInertiaFlag($data['inertia_flag']);
		} elseif (\array_key_exists('inertia_flag', $data) && null === $data['inertia_flag']) {
			$object->setInertiaFlag(null);
		}
		if (\array_key_exists('billing_common_day', $data) && null !== $data['billing_common_day']) {
			$object->setBillingCommonDay($data['billing_common_day']);
		} elseif (\array_key_exists('billing_common_day', $data) && null === $data['billing_common_day']) {
			$object->setBillingCommonDay(null);
		}
		if (\array_key_exists('billing_interval', $data) && null !== $data['billing_interval']) {
			$object->setBillingInterval($data['billing_interval']);
		} elseif (\array_key_exists('billing_interval', $data) && null === $data['billing_interval']) {
			$object->setBillingInterval(null);
		}
		if (\array_key_exists('initial_billings', $data) && null !== $data['initial_billings']) {
			$object->setInitialBillings($data['initial_billings']);
		} elseif (\array_key_exists('initial_billings', $data) && null === $data['initial_billings']) {
			$object->setInitialBillings(null);
		}
		if (\array_key_exists('periodic_billings', $data) && null !== $data['periodic_billings']) {
			$object->setPeriodicBillings($data['periodic_billings']);
		} elseif (\array_key_exists('periodic_billings', $data) && null === $data['periodic_billings']) {
			$object->setPeriodicBillings(null);
		}
		if (\array_key_exists('payment_method', $data) && null !== $data['payment_method']) {
			$object->setPaymentMethod($data['payment_method']);
		} elseif (\array_key_exists('payment_method', $data) && null === $data['payment_method']) {
			$object->setPaymentMethod(null);
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
		if (null !== $object->getContractId()) {
			$data['contract_id'] = $object->getContractId();
		}
		if (null !== $object->getTerm()) {
			$data['term'] = $object->getTerm();
		}
		if (null !== $object->getContractStart()) {
			$data['contract_start'] = $object->getContractStart()->format('Y-m-d');
		}
		if (null !== $object->getContractEnd()) {
			$data['contract_end'] = $object->getContractEnd()->format('Y-m-d');
		}
		if (null !== $object->getStartPeriodic()) {
			$data['start_periodic'] = $object->getStartPeriodic()->format('Y-m-d');
		}
		if (null !== $object->getInertiaFlag()) {
			$data['inertia_flag'] = $object->getInertiaFlag();
		}
		if (null !== $object->getBillingCommonDay()) {
			$data['billing_common_day'] = $object->getBillingCommonDay();
		}
		if (null !== $object->getBillingInterval()) {
			$data['billing_interval'] = $object->getBillingInterval();
		}
		if (null !== $object->getInitialBillings()) {
			$data['initial_billings'] = $object->getInitialBillings();
		}
		if (null !== $object->getPeriodicBillings()) {
			$data['periodic_billings'] = $object->getPeriodicBillings();
		}
		if (null !== $object->getPaymentMethod()) {
			$data['payment_method'] = $object->getPaymentMethod();
		}
		if (null !== $object->getOverrideWarningsFlag()) {
			$data['override_warnings_flag'] = $object->getOverrideWarningsFlag();
		}

		return $data;
	}
}
