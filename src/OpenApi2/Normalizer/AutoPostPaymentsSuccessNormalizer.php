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

class AutoPostPaymentsSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\AutoPostPaymentsSuccess' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\AutoPostPaymentsSuccess' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\AutoPostPaymentsSuccess();
		if (\array_key_exists('processed_contracts', $data) && null !== $data['processed_contracts']) {
			$values = [];
			foreach ($data['processed_contracts'] as $value) {
				$values[] = $value;
			}
			$object->setProcessedContracts($values);
		} elseif (\array_key_exists('processed_contracts', $data) && null === $data['processed_contracts']) {
			$object->setProcessedContracts(null);
		}
		if (\array_key_exists('dated_to_date', $data) && null !== $data['dated_to_date']) {
			$object->setDatedToDate(\DateTime::createFromFormat('Y-m-d', $data['dated_to_date'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('dated_to_date', $data) && null === $data['dated_to_date']) {
			$object->setDatedToDate(null);
		}
		if (\array_key_exists('control_total', $data) && null !== $data['control_total']) {
			$object->setControlTotal($data['control_total']);
		} elseif (\array_key_exists('control_total', $data) && null === $data['control_total']) {
			$object->setControlTotal(null);
		}
		if (\array_key_exists('exceptions', $data) && null !== $data['exceptions']) {
			$object->setExceptions($data['exceptions']);
		} elseif (\array_key_exists('exceptions', $data) && null === $data['exceptions']) {
			$object->setExceptions(null);
		}
		if (\array_key_exists('_links', $data) && null !== $data['_links']) {
			$object->setLinks($data['_links']);
		} elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
			$object->setLinks(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getProcessedContracts()) {
			$values = [];
			foreach ($object->getProcessedContracts() as $value) {
				$values[] = $value;
			}
			$data['processed_contracts'] = $values;
		}
		if (null !== $object->getDatedToDate()) {
			$data['dated_to_date'] = $object->getDatedToDate()->format('Y-m-d');
		}
		if (null !== $object->getControlTotal()) {
			$data['control_total'] = $object->getControlTotal();
		}
		if (null !== $object->getExceptions()) {
			$data['exceptions'] = $object->getExceptions();
		}
		if (null !== $object->getLinks()) {
			$data['_links'] = $object->getLinks();
		}

		return $data;
	}
}
