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

class PackageItemCyclesGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\PackageItemCyclesGet' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\PackageItemCyclesGet' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\PackageItemCyclesGet();
		if (\array_key_exists('package_item_id', $data) && null !== $data['package_item_id']) {
			$object->setPackageItemId($data['package_item_id']);
		} elseif (\array_key_exists('package_item_id', $data) && null === $data['package_item_id']) {
			$object->setPackageItemId(null);
		}
		if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
			$object->setPayCycleId($data['pay_cycle_id']);
		} elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
			$object->setPayCycleId(null);
		}
		if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
			$object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
			$object->setStartDate(null);
		}
		if (\array_key_exists('pay_cycle_type', $data) && null !== $data['pay_cycle_type']) {
			$object->setPayCycleType($data['pay_cycle_type']);
		} elseif (\array_key_exists('pay_cycle_type', $data) && null === $data['pay_cycle_type']) {
			$object->setPayCycleType(null);
		}
		if (\array_key_exists('compress_flag', $data) && null !== $data['compress_flag']) {
			$object->setCompressFlag($data['compress_flag']);
		} elseif (\array_key_exists('compress_flag', $data) && null === $data['compress_flag']) {
			$object->setCompressFlag(null);
		}
		if (\array_key_exists('inertia_flag', $data) && null !== $data['inertia_flag']) {
			$object->setInertiaFlag($data['inertia_flag']);
		} elseif (\array_key_exists('inertia_flag', $data) && null === $data['inertia_flag']) {
			$object->setInertiaFlag(null);
		}
		if (\array_key_exists('cycles', $data) && null !== $data['cycles']) {
			$object->setCycles($data['cycles']);
		} elseif (\array_key_exists('cycles', $data) && null === $data['cycles']) {
			$object->setCycles(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getPackageItemId()) {
			$data['package_item_id'] = $object->getPackageItemId();
		}
		if (null !== $object->getPayCycleId()) {
			$data['pay_cycle_id'] = $object->getPayCycleId();
		}
		if (null !== $object->getStartDate()) {
			$data['start_date'] = $object->getStartDate()->format('Y-m-d');
		}
		if (null !== $object->getPayCycleType()) {
			$data['pay_cycle_type'] = $object->getPayCycleType();
		}
		if (null !== $object->getCompressFlag()) {
			$data['compress_flag'] = $object->getCompressFlag();
		}
		if (null !== $object->getInertiaFlag()) {
			$data['inertia_flag'] = $object->getInertiaFlag();
		}
		if (null !== $object->getCycles()) {
			$data['cycles'] = $object->getCycles();
		}

		return $data;
	}
}
