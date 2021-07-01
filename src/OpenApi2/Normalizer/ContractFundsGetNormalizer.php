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

class ContractFundsGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContractFundsGet' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractFundsGet' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContractFundsGet();
		if (\array_key_exists('budgets', $data) && null !== $data['budgets']) {
			$values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
			foreach ($data['budgets'] as $key => $value) {
				$values[$key] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\ContractFundsGetBudgetsItem', 'json', $context);
			}
			$object->setBudgets($values);
		} elseif (\array_key_exists('budgets', $data) && null === $data['budgets']) {
			$object->setBudgets(null);
		}
		if (\array_key_exists('budget', $data) && null !== $data['budget']) {
			$object->setBudget($data['budget']);
		} elseif (\array_key_exists('budget', $data) && null === $data['budget']) {
			$object->setBudget(null);
		}
		if (\array_key_exists('actual', $data) && null !== $data['actual']) {
			$object->setActual($data['actual']);
		} elseif (\array_key_exists('actual', $data) && null === $data['actual']) {
			$object->setActual(null);
		}
		if (\array_key_exists('variance', $data) && null !== $data['variance']) {
			$object->setVariance($data['variance']);
		} elseif (\array_key_exists('variance', $data) && null === $data['variance']) {
			$object->setVariance(null);
		}
		if (\array_key_exists('available', $data) && null !== $data['available']) {
			$object->setAvailable($data['available']);
		} elseif (\array_key_exists('available', $data) && null === $data['available']) {
			$object->setAvailable(null);
		}
		if (\array_key_exists('funds_received', $data) && null !== $data['funds_received']) {
			$object->setFundsReceived($data['funds_received']);
		} elseif (\array_key_exists('funds_received', $data) && null === $data['funds_received']) {
			$object->setFundsReceived(null);
		}
		if (\array_key_exists('funds_variance', $data) && null !== $data['funds_variance']) {
			$object->setFundsVariance($data['funds_variance']);
		} elseif (\array_key_exists('funds_variance', $data) && null === $data['funds_variance']) {
			$object->setFundsVariance(null);
		}
		if (\array_key_exists('available_balance', $data) && null !== $data['available_balance']) {
			$object->setAvailableBalance($data['available_balance']);
		} elseif (\array_key_exists('available_balance', $data) && null === $data['available_balance']) {
			$object->setAvailableBalance(null);
		}
		if (\array_key_exists('actual_balance', $data) && null !== $data['actual_balance']) {
			$object->setActualBalance($data['actual_balance']);
		} elseif (\array_key_exists('actual_balance', $data) && null === $data['actual_balance']) {
			$object->setActualBalance(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getBudgets()) {
			$values = [];
			foreach ($object->getBudgets() as $key => $value) {
				$values[$key] = $this->normalizer->normalize($value, 'json', $context);
			}
			$data['budgets'] = $values;
		}
		if (null !== $object->getBudget()) {
			$data['budget'] = $object->getBudget();
		}
		if (null !== $object->getActual()) {
			$data['actual'] = $object->getActual();
		}
		if (null !== $object->getVariance()) {
			$data['variance'] = $object->getVariance();
		}
		if (null !== $object->getAvailable()) {
			$data['available'] = $object->getAvailable();
		}
		if (null !== $object->getFundsReceived()) {
			$data['funds_received'] = $object->getFundsReceived();
		}
		if (null !== $object->getFundsVariance()) {
			$data['funds_variance'] = $object->getFundsVariance();
		}
		if (null !== $object->getAvailableBalance()) {
			$data['available_balance'] = $object->getAvailableBalance();
		}
		if (null !== $object->getActualBalance()) {
			$data['actual_balance'] = $object->getActualBalance();
		}

		return $data;
	}
}
