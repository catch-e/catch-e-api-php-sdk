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

class EmployeePackageItemEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\EmployeePackageItemEmbedded' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\EmployeePackageItemEmbedded' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\EmployeePackageItemEmbedded();
		if (\array_key_exists('disbursement_cycle', $data) && null !== $data['disbursement_cycle']) {
			$object->setDisbursementCycle($this->denormalizer->denormalize($data['disbursement_cycle'], 'CatchE\\OpenApi2\\Model\\SalaryPackagingDisbursementCycle', 'json', $context));
		} elseif (\array_key_exists('disbursement_cycle', $data) && null === $data['disbursement_cycle']) {
			$object->setDisbursementCycle(null);
		}
		if (\array_key_exists('driver', $data) && null !== $data['driver']) {
			$object->setDriver($this->denormalizer->denormalize($data['driver'], 'CatchE\\OpenApi2\\Model\\Driver', 'json', $context));
		} elseif (\array_key_exists('driver', $data) && null === $data['driver']) {
			$object->setDriver(null);
		}
		if (\array_key_exists('driver_bank_account', $data) && null !== $data['driver_bank_account']) {
			$object->setDriverBankAccount($this->denormalizer->denormalize($data['driver_bank_account'], 'CatchE\\OpenApi2\\Model\\DriverBankAccount', 'json', $context));
		} elseif (\array_key_exists('driver_bank_account', $data) && null === $data['driver_bank_account']) {
			$object->setDriverBankAccount(null);
		}
		if (\array_key_exists('package_item', $data) && null !== $data['package_item']) {
			$object->setPackageItem($this->denormalizer->denormalize($data['package_item'], 'CatchE\\OpenApi2\\Model\\PackageItem', 'json', $context));
		} elseif (\array_key_exists('package_item', $data) && null === $data['package_item']) {
			$object->setPackageItem(null);
		}
		if (\array_key_exists('supplier', $data) && null !== $data['supplier']) {
			$object->setSupplier($this->denormalizer->denormalize($data['supplier'], 'CatchE\\OpenApi2\\Model\\Supplier', 'json', $context));
		} elseif (\array_key_exists('supplier', $data) && null === $data['supplier']) {
			$object->setSupplier(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getDisbursementCycle()) {
			$data['disbursement_cycle'] = $this->normalizer->normalize($object->getDisbursementCycle(), 'json', $context);
		}
		if (null !== $object->getDriver()) {
			$data['driver'] = $this->normalizer->normalize($object->getDriver(), 'json', $context);
		}
		if (null !== $object->getDriverBankAccount()) {
			$data['driver_bank_account'] = $this->normalizer->normalize($object->getDriverBankAccount(), 'json', $context);
		}
		if (null !== $object->getPackageItem()) {
			$data['package_item'] = $this->normalizer->normalize($object->getPackageItem(), 'json', $context);
		}
		if (null !== $object->getSupplier()) {
			$data['supplier'] = $this->normalizer->normalize($object->getSupplier(), 'json', $context);
		}

		return $data;
	}
}
