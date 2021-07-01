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

class CreateDriverAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\CreateDriverAsset' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\CreateDriverAsset' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\CreateDriverAsset();
		if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
			$object->setDriverId($data['driver_id']);
		} elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
			$object->setDriverId(null);
		}
		if (\array_key_exists('finance_asset_type_id', $data) && null !== $data['finance_asset_type_id']) {
			$object->setFinanceAssetTypeId($data['finance_asset_type_id']);
		} elseif (\array_key_exists('finance_asset_type_id', $data) && null === $data['finance_asset_type_id']) {
			$object->setFinanceAssetTypeId(null);
		}
		if (\array_key_exists('amount', $data) && null !== $data['amount']) {
			$object->setAmount($data['amount']);
		} elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
			$object->setAmount(null);
		}
		if (\array_key_exists('description', $data) && null !== $data['description']) {
			$object->setDescription($data['description']);
		} elseif (\array_key_exists('description', $data) && null === $data['description']) {
			$object->setDescription(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getDriverId()) {
			$data['driver_id'] = $object->getDriverId();
		}
		if (null !== $object->getFinanceAssetTypeId()) {
			$data['finance_asset_type_id'] = $object->getFinanceAssetTypeId();
		}
		if (null !== $object->getAmount()) {
			$data['amount'] = $object->getAmount();
		}
		if (null !== $object->getDescription()) {
			$data['description'] = $object->getDescription();
		}

		return $data;
	}
}
