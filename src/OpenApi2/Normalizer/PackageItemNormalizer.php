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

class PackageItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\PackageItem' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\PackageItem' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\PackageItem();
		if (\array_key_exists('package_item_id', $data) && null !== $data['package_item_id']) {
			$object->setPackageItemId($data['package_item_id']);
		} elseif (\array_key_exists('package_item_id', $data) && null === $data['package_item_id']) {
			$object->setPackageItemId(null);
		}
		if (\array_key_exists('posting_map_id', $data) && null !== $data['posting_map_id']) {
			$object->setPostingMapId($data['posting_map_id']);
		} elseif (\array_key_exists('posting_map_id', $data) && null === $data['posting_map_id']) {
			$object->setPostingMapId(null);
		}
		if (\array_key_exists('package_item_code', $data) && null !== $data['package_item_code']) {
			$object->setPackageItemCode($data['package_item_code']);
		} elseif (\array_key_exists('package_item_code', $data) && null === $data['package_item_code']) {
			$object->setPackageItemCode(null);
		}
		if (\array_key_exists('module', $data) && null !== $data['module']) {
			$object->setModule($data['module']);
		} elseif (\array_key_exists('module', $data) && null === $data['module']) {
			$object->setModule(null);
		}
		if (\array_key_exists('package_name', $data) && null !== $data['package_name']) {
			$object->setPackageName($data['package_name']);
		} elseif (\array_key_exists('package_name', $data) && null === $data['package_name']) {
			$object->setPackageName(null);
		}
		if (\array_key_exists('benefit_type', $data) && null !== $data['benefit_type']) {
			$object->setBenefitType($data['benefit_type']);
		} elseif (\array_key_exists('benefit_type', $data) && null === $data['benefit_type']) {
			$object->setBenefitType(null);
		}
		if (\array_key_exists('cap_type', $data) && null !== $data['cap_type']) {
			$object->setCapType($data['cap_type']);
		} elseif (\array_key_exists('cap_type', $data) && null === $data['cap_type']) {
			$object->setCapType(null);
		}
		if (\array_key_exists('gst_flag', $data) && null !== $data['gst_flag']) {
			$object->setGstFlag($data['gst_flag']);
		} elseif (\array_key_exists('gst_flag', $data) && null === $data['gst_flag']) {
			$object->setGstFlag(null);
		}
		if (\array_key_exists('tax_method', $data) && null !== $data['tax_method']) {
			$object->setTaxMethod($data['tax_method']);
		} elseif (\array_key_exists('tax_method', $data) && null === $data['tax_method']) {
			$object->setTaxMethod(null);
		}
		if (\array_key_exists('sp_profile_table_name', $data) && null !== $data['sp_profile_table_name']) {
			$object->setSpProfileTableName($data['sp_profile_table_name']);
		} elseif (\array_key_exists('sp_profile_table_name', $data) && null === $data['sp_profile_table_name']) {
			$object->setSpProfileTableName(null);
		}
		if (\array_key_exists('employee_contribution_flag', $data) && null !== $data['employee_contribution_flag']) {
			$object->setEmployeeContributionFlag($data['employee_contribution_flag']);
		} elseif (\array_key_exists('employee_contribution_flag', $data) && null === $data['employee_contribution_flag']) {
			$object->setEmployeeContributionFlag(null);
		}
		if (\array_key_exists('_embedded', $data) && null !== $data['_embedded']) {
			$object->setEmbedded($this->denormalizer->denormalize($data['_embedded'], 'CatchE\\OpenApi2\\Model\\PackageItemEmbedded', 'json', $context));
		} elseif (\array_key_exists('_embedded', $data) && null === $data['_embedded']) {
			$object->setEmbedded(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getPackageItemId()) {
			$data['package_item_id'] = $object->getPackageItemId();
		}
		if (null !== $object->getPostingMapId()) {
			$data['posting_map_id'] = $object->getPostingMapId();
		}
		if (null !== $object->getPackageItemCode()) {
			$data['package_item_code'] = $object->getPackageItemCode();
		}
		if (null !== $object->getModule()) {
			$data['module'] = $object->getModule();
		}
		if (null !== $object->getPackageName()) {
			$data['package_name'] = $object->getPackageName();
		}
		if (null !== $object->getBenefitType()) {
			$data['benefit_type'] = $object->getBenefitType();
		}
		if (null !== $object->getCapType()) {
			$data['cap_type'] = $object->getCapType();
		}
		if (null !== $object->getGstFlag()) {
			$data['gst_flag'] = $object->getGstFlag();
		}
		if (null !== $object->getTaxMethod()) {
			$data['tax_method'] = $object->getTaxMethod();
		}
		if (null !== $object->getSpProfileTableName()) {
			$data['sp_profile_table_name'] = $object->getSpProfileTableName();
		}
		if (null !== $object->getEmployeeContributionFlag()) {
			$data['employee_contribution_flag'] = $object->getEmployeeContributionFlag();
		}
		if (null !== $object->getEmbedded()) {
			$data['_embedded'] = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
		}

		return $data;
	}
}
