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

class DriverBankAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\DriverBankAccount' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\DriverBankAccount' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\DriverBankAccount();
		if (\array_key_exists('driver_bank_account_id', $data) && null !== $data['driver_bank_account_id']) {
			$object->setDriverBankAccountId($data['driver_bank_account_id']);
		} elseif (\array_key_exists('driver_bank_account_id', $data) && null === $data['driver_bank_account_id']) {
			$object->setDriverBankAccountId(null);
		}
		if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
			$object->setDriverId($data['driver_id']);
		} elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
			$object->setDriverId(null);
		}
		if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
			$object->setSupplierId($data['supplier_id']);
		} elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
			$object->setSupplierId(null);
		}
		if (\array_key_exists('account_name', $data) && null !== $data['account_name']) {
			$object->setAccountName($data['account_name']);
		} elseif (\array_key_exists('account_name', $data) && null === $data['account_name']) {
			$object->setAccountName(null);
		}
		if (\array_key_exists('bsb', $data) && null !== $data['bsb']) {
			$object->setBsb($data['bsb']);
		} elseif (\array_key_exists('bsb', $data) && null === $data['bsb']) {
			$object->setBsb(null);
		}
		if (\array_key_exists('account_number', $data) && null !== $data['account_number']) {
			$object->setAccountNumber($data['account_number']);
		} elseif (\array_key_exists('account_number', $data) && null === $data['account_number']) {
			$object->setAccountNumber(null);
		}
		if (\array_key_exists('claims_default_flag', $data) && null !== $data['claims_default_flag']) {
			$object->setClaimsDefaultFlag($data['claims_default_flag']);
		} elseif (\array_key_exists('claims_default_flag', $data) && null === $data['claims_default_flag']) {
			$object->setClaimsDefaultFlag(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}
		if (\array_key_exists('_embedded', $data) && null !== $data['_embedded']) {
			$object->setEmbedded($this->denormalizer->denormalize($data['_embedded'], 'CatchE\\OpenApi2\\Model\\DriverBankAccountEmbedded', 'json', $context));
		} elseif (\array_key_exists('_embedded', $data) && null === $data['_embedded']) {
			$object->setEmbedded(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getDriverBankAccountId()) {
			$data['driver_bank_account_id'] = $object->getDriverBankAccountId();
		}
		if (null !== $object->getDriverId()) {
			$data['driver_id'] = $object->getDriverId();
		}
		if (null !== $object->getSupplierId()) {
			$data['supplier_id'] = $object->getSupplierId();
		}
		if (null !== $object->getAccountName()) {
			$data['account_name'] = $object->getAccountName();
		}
		if (null !== $object->getBsb()) {
			$data['bsb'] = $object->getBsb();
		}
		if (null !== $object->getAccountNumber()) {
			$data['account_number'] = $object->getAccountNumber();
		}
		if (null !== $object->getClaimsDefaultFlag()) {
			$data['claims_default_flag'] = $object->getClaimsDefaultFlag();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}
		if (null !== $object->getEmbedded()) {
			$data['_embedded'] = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
		}

		return $data;
	}
}
