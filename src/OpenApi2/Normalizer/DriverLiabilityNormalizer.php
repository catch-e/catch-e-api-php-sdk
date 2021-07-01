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

class DriverLiabilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\DriverLiability' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\DriverLiability' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\DriverLiability();
		if (\array_key_exists('driver_liability_id', $data) && null !== $data['driver_liability_id']) {
			$object->setDriverLiabilityId($data['driver_liability_id']);
		} elseif (\array_key_exists('driver_liability_id', $data) && null === $data['driver_liability_id']) {
			$object->setDriverLiabilityId(null);
		}
		if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
			$object->setDriverId($data['driver_id']);
		} elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
			$object->setDriverId(null);
		}
		if (\array_key_exists('finance_liability_type_id', $data) && null !== $data['finance_liability_type_id']) {
			$object->setFinanceLiabilityTypeId($data['finance_liability_type_id']);
		} elseif (\array_key_exists('finance_liability_type_id', $data) && null === $data['finance_liability_type_id']) {
			$object->setFinanceLiabilityTypeId(null);
		}
		if (\array_key_exists('finance_liability_financier_id', $data) && null !== $data['finance_liability_financier_id']) {
			$object->setFinanceLiabilityFinancierId($data['finance_liability_financier_id']);
		} elseif (\array_key_exists('finance_liability_financier_id', $data) && null === $data['finance_liability_financier_id']) {
			$object->setFinanceLiabilityFinancierId(null);
		}
		if (\array_key_exists('driver_asset_id', $data) && null !== $data['driver_asset_id']) {
			$object->setDriverAssetId($data['driver_asset_id']);
		} elseif (\array_key_exists('driver_asset_id', $data) && null === $data['driver_asset_id']) {
			$object->setDriverAssetId(null);
		}
		if (\array_key_exists('amount', $data) && null !== $data['amount']) {
			$object->setAmount($data['amount']);
		} elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
			$object->setAmount(null);
		}
		if (\array_key_exists('monthly_payment_amount', $data) && null !== $data['monthly_payment_amount']) {
			$object->setMonthlyPaymentAmount($data['monthly_payment_amount']);
		} elseif (\array_key_exists('monthly_payment_amount', $data) && null === $data['monthly_payment_amount']) {
			$object->setMonthlyPaymentAmount(null);
		}
		if (\array_key_exists('liability_payout_flag', $data) && null !== $data['liability_payout_flag']) {
			$object->setLiabilityPayoutFlag($data['liability_payout_flag']);
		} elseif (\array_key_exists('liability_payout_flag', $data) && null === $data['liability_payout_flag']) {
			$object->setLiabilityPayoutFlag(null);
		}
		if (\array_key_exists('liability_end_date', $data) && null !== $data['liability_end_date']) {
			$object->setLiabilityEndDate($data['liability_end_date']);
		} elseif (\array_key_exists('liability_end_date', $data) && null === $data['liability_end_date']) {
			$object->setLiabilityEndDate(null);
		}
		if (\array_key_exists('liability_limit_amount', $data) && null !== $data['liability_limit_amount']) {
			$object->setLiabilityLimitAmount($data['liability_limit_amount']);
		} elseif (\array_key_exists('liability_limit_amount', $data) && null === $data['liability_limit_amount']) {
			$object->setLiabilityLimitAmount(null);
		}
		if (\array_key_exists('finance_liability_type_name', $data) && null !== $data['finance_liability_type_name']) {
			$object->setFinanceLiabilityTypeName($data['finance_liability_type_name']);
		} elseif (\array_key_exists('finance_liability_type_name', $data) && null === $data['finance_liability_type_name']) {
			$object->setFinanceLiabilityTypeName(null);
		}
		if (\array_key_exists('finance_liability_financier_name', $data) && null !== $data['finance_liability_financier_name']) {
			$object->setFinanceLiabilityFinancierName($data['finance_liability_financier_name']);
		} elseif (\array_key_exists('finance_liability_financier_name', $data) && null === $data['finance_liability_financier_name']) {
			$object->setFinanceLiabilityFinancierName(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getDriverLiabilityId()) {
			$data['driver_liability_id'] = $object->getDriverLiabilityId();
		}
		if (null !== $object->getDriverId()) {
			$data['driver_id'] = $object->getDriverId();
		}
		if (null !== $object->getFinanceLiabilityTypeId()) {
			$data['finance_liability_type_id'] = $object->getFinanceLiabilityTypeId();
		}
		if (null !== $object->getFinanceLiabilityFinancierId()) {
			$data['finance_liability_financier_id'] = $object->getFinanceLiabilityFinancierId();
		}
		if (null !== $object->getDriverAssetId()) {
			$data['driver_asset_id'] = $object->getDriverAssetId();
		}
		if (null !== $object->getAmount()) {
			$data['amount'] = $object->getAmount();
		}
		if (null !== $object->getMonthlyPaymentAmount()) {
			$data['monthly_payment_amount'] = $object->getMonthlyPaymentAmount();
		}
		if (null !== $object->getLiabilityPayoutFlag()) {
			$data['liability_payout_flag'] = $object->getLiabilityPayoutFlag();
		}
		if (null !== $object->getLiabilityEndDate()) {
			$data['liability_end_date'] = $object->getLiabilityEndDate();
		}
		if (null !== $object->getLiabilityLimitAmount()) {
			$data['liability_limit_amount'] = $object->getLiabilityLimitAmount();
		}
		if (null !== $object->getFinanceLiabilityTypeName()) {
			$data['finance_liability_type_name'] = $object->getFinanceLiabilityTypeName();
		}
		if (null !== $object->getFinanceLiabilityFinancierName()) {
			$data['finance_liability_financier_name'] = $object->getFinanceLiabilityFinancierName();
		}

		return $data;
	}
}
