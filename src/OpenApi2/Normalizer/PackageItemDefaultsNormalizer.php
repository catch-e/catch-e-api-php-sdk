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

class PackageItemDefaultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\PackageItemDefaults' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\PackageItemDefaults' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\PackageItemDefaults();
		if (\array_key_exists('package_item_default_id', $data) && null !== $data['package_item_default_id']) {
			$object->setPackageItemDefaultId($data['package_item_default_id']);
		} elseif (\array_key_exists('package_item_default_id', $data) && null === $data['package_item_default_id']) {
			$object->setPackageItemDefaultId(null);
		}
		if (\array_key_exists('package_item_id', $data) && null !== $data['package_item_id']) {
			$object->setPackageItemId($data['package_item_id']);
		} elseif (\array_key_exists('package_item_id', $data) && null === $data['package_item_id']) {
			$object->setPackageItemId(null);
		}
		if (\array_key_exists('pay_cycle_type_default', $data) && null !== $data['pay_cycle_type_default']) {
			$object->setPayCycleTypeDefault($data['pay_cycle_type_default']);
		} elseif (\array_key_exists('pay_cycle_type_default', $data) && null === $data['pay_cycle_type_default']) {
			$object->setPayCycleTypeDefault(null);
		}
		if (\array_key_exists('total_deduction_default', $data) && null !== $data['total_deduction_default']) {
			$object->setTotalDeductionDefault($data['total_deduction_default']);
		} elseif (\array_key_exists('total_deduction_default', $data) && null === $data['total_deduction_default']) {
			$object->setTotalDeductionDefault(null);
		}
		if (\array_key_exists('compress_flag_default', $data) && null !== $data['compress_flag_default']) {
			$object->setCompressFlagDefault($data['compress_flag_default']);
		} elseif (\array_key_exists('compress_flag_default', $data) && null === $data['compress_flag_default']) {
			$object->setCompressFlagDefault(null);
		}
		if (\array_key_exists('inertia_flag_default', $data) && null !== $data['inertia_flag_default']) {
			$object->setInertiaFlagDefault($data['inertia_flag_default']);
		} elseif (\array_key_exists('inertia_flag_default', $data) && null === $data['inertia_flag_default']) {
			$object->setInertiaFlagDefault(null);
		}
		if (\array_key_exists('cycles_default', $data) && null !== $data['cycles_default']) {
			$object->setCyclesDefault($data['cycles_default']);
		} elseif (\array_key_exists('cycles_default', $data) && null === $data['cycles_default']) {
			$object->setCyclesDefault(null);
		}
		if (\array_key_exists('disbursement_type_default', $data) && null !== $data['disbursement_type_default']) {
			$object->setDisbursementTypeDefault($data['disbursement_type_default']);
		} elseif (\array_key_exists('disbursement_type_default', $data) && null === $data['disbursement_type_default']) {
			$object->setDisbursementTypeDefault(null);
		}
		if (\array_key_exists('supplier_id_default', $data) && null !== $data['supplier_id_default']) {
			$object->setSupplierIdDefault($data['supplier_id_default']);
		} elseif (\array_key_exists('supplier_id_default', $data) && null === $data['supplier_id_default']) {
			$object->setSupplierIdDefault(null);
		}
		if (\array_key_exists('supplier_id_edit_flag', $data) && null !== $data['supplier_id_edit_flag']) {
			$object->setSupplierIdEditFlag($data['supplier_id_edit_flag']);
		} elseif (\array_key_exists('supplier_id_edit_flag', $data) && null === $data['supplier_id_edit_flag']) {
			$object->setSupplierIdEditFlag(null);
		}
		if (\array_key_exists('substantiation_flag_default', $data) && null !== $data['substantiation_flag_default']) {
			$object->setSubstantiationFlagDefault($data['substantiation_flag_default']);
		} elseif (\array_key_exists('substantiation_flag_default', $data) && null === $data['substantiation_flag_default']) {
			$object->setSubstantiationFlagDefault(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getPackageItemDefaultId()) {
			$data['package_item_default_id'] = $object->getPackageItemDefaultId();
		}
		if (null !== $object->getPackageItemId()) {
			$data['package_item_id'] = $object->getPackageItemId();
		}
		if (null !== $object->getPayCycleTypeDefault()) {
			$data['pay_cycle_type_default'] = $object->getPayCycleTypeDefault();
		}
		if (null !== $object->getTotalDeductionDefault()) {
			$data['total_deduction_default'] = $object->getTotalDeductionDefault();
		}
		if (null !== $object->getCompressFlagDefault()) {
			$data['compress_flag_default'] = $object->getCompressFlagDefault();
		}
		if (null !== $object->getInertiaFlagDefault()) {
			$data['inertia_flag_default'] = $object->getInertiaFlagDefault();
		}
		if (null !== $object->getCyclesDefault()) {
			$data['cycles_default'] = $object->getCyclesDefault();
		}
		if (null !== $object->getDisbursementTypeDefault()) {
			$data['disbursement_type_default'] = $object->getDisbursementTypeDefault();
		}
		if (null !== $object->getSupplierIdDefault()) {
			$data['supplier_id_default'] = $object->getSupplierIdDefault();
		}
		if (null !== $object->getSupplierIdEditFlag()) {
			$data['supplier_id_edit_flag'] = $object->getSupplierIdEditFlag();
		}
		if (null !== $object->getSubstantiationFlagDefault()) {
			$data['substantiation_flag_default'] = $object->getSubstantiationFlagDefault();
		}

		return $data;
	}
}
