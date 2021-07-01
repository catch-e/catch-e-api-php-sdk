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

class ContractFundsGetBudgetsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContractFundsGetBudgetsItem' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContractFundsGetBudgetsItem' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContractFundsGetBudgetsItem();
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
		if (\array_key_exists('posting_class_codes', $data) && null !== $data['posting_class_codes']) {
			$values = [];
			foreach ($data['posting_class_codes'] as $value) {
				$values[] = $value;
			}
			$object->setPostingClassCodes($values);
		} elseif (\array_key_exists('posting_class_codes', $data) && null === $data['posting_class_codes']) {
			$object->setPostingClassCodes(null);
		}
		if (\array_key_exists('available_to_claim', $data) && null !== $data['available_to_claim']) {
			$object->setAvailableToClaim($data['available_to_claim']);
		} elseif (\array_key_exists('available_to_claim', $data) && null === $data['available_to_claim']) {
			$object->setAvailableToClaim(null);
		}
		if (\array_key_exists('report_budget_as_actual', $data) && null !== $data['report_budget_as_actual']) {
			$object->setReportBudgetAsActual($data['report_budget_as_actual']);
		} elseif (\array_key_exists('report_budget_as_actual', $data) && null === $data['report_budget_as_actual']) {
			$object->setReportBudgetAsActual(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
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
		if (null !== $object->getPostingClassCodes()) {
			$values = [];
			foreach ($object->getPostingClassCodes() as $value) {
				$values[] = $value;
			}
			$data['posting_class_codes'] = $values;
		}
		if (null !== $object->getAvailableToClaim()) {
			$data['available_to_claim'] = $object->getAvailableToClaim();
		}
		if (null !== $object->getReportBudgetAsActual()) {
			$data['report_budget_as_actual'] = $object->getReportBudgetAsActual();
		}

		return $data;
	}
}
