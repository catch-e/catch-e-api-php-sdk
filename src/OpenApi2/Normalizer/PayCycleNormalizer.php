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

class PayCycleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\PayCycle' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\PayCycle' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\PayCycle();
		if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
			$object->setPayCycleId($data['pay_cycle_id']);
		} elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
			$object->setPayCycleId(null);
		}
		if (\array_key_exists('pay_cycle_code', $data) && null !== $data['pay_cycle_code']) {
			$object->setPayCycleCode($data['pay_cycle_code']);
		} elseif (\array_key_exists('pay_cycle_code', $data) && null === $data['pay_cycle_code']) {
			$object->setPayCycleCode(null);
		}
		if (\array_key_exists('description', $data) && null !== $data['description']) {
			$object->setDescription($data['description']);
		} elseif (\array_key_exists('description', $data) && null === $data['description']) {
			$object->setDescription(null);
		}
		if (\array_key_exists('billing_flag', $data) && null !== $data['billing_flag']) {
			$object->setBillingFlag($data['billing_flag']);
		} elseif (\array_key_exists('billing_flag', $data) && null === $data['billing_flag']) {
			$object->setBillingFlag(null);
		}
		if (\array_key_exists('pay_cycles_per_year', $data) && null !== $data['pay_cycles_per_year']) {
			$object->setPayCyclesPerYear($data['pay_cycles_per_year']);
		} elseif (\array_key_exists('pay_cycles_per_year', $data) && null === $data['pay_cycles_per_year']) {
			$object->setPayCyclesPerYear(null);
		}
		if (\array_key_exists('tax_cycles_per_year', $data) && null !== $data['tax_cycles_per_year']) {
			$object->setTaxCyclesPerYear($data['tax_cycles_per_year']);
		} elseif (\array_key_exists('tax_cycles_per_year', $data) && null === $data['tax_cycles_per_year']) {
			$object->setTaxCyclesPerYear(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getPayCycleId()) {
			$data['pay_cycle_id'] = $object->getPayCycleId();
		}
		if (null !== $object->getPayCycleCode()) {
			$data['pay_cycle_code'] = $object->getPayCycleCode();
		}
		if (null !== $object->getDescription()) {
			$data['description'] = $object->getDescription();
		}
		if (null !== $object->getBillingFlag()) {
			$data['billing_flag'] = $object->getBillingFlag();
		}
		if (null !== $object->getPayCyclesPerYear()) {
			$data['pay_cycles_per_year'] = $object->getPayCyclesPerYear();
		}
		if (null !== $object->getTaxCyclesPerYear()) {
			$data['tax_cycles_per_year'] = $object->getTaxCyclesPerYear();
		}

		return $data;
	}
}
