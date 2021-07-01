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

class FmFinanceLiabilityTypesGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\FmFinanceLiabilityTypesGetResponse200Item' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\FmFinanceLiabilityTypesGetResponse200Item' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\FmFinanceLiabilityTypesGetResponse200Item();
		if (\array_key_exists('finance_liability_type_id', $data) && null !== $data['finance_liability_type_id']) {
			$object->setFinanceLiabilityTypeId($data['finance_liability_type_id']);
		} elseif (\array_key_exists('finance_liability_type_id', $data) && null === $data['finance_liability_type_id']) {
			$object->setFinanceLiabilityTypeId(null);
		}
		if (\array_key_exists('name', $data) && null !== $data['name']) {
			$object->setName($data['name']);
		} elseif (\array_key_exists('name', $data) && null === $data['name']) {
			$object->setName(null);
		}
		if (\array_key_exists('sequence_link_finance_asset_type_id', $data) && null !== $data['sequence_link_finance_asset_type_id']) {
			$object->setSequenceLinkFinanceAssetTypeId($data['sequence_link_finance_asset_type_id']);
		} elseif (\array_key_exists('sequence_link_finance_asset_type_id', $data) && null === $data['sequence_link_finance_asset_type_id']) {
			$object->setSequenceLinkFinanceAssetTypeId(null);
		}
		if (\array_key_exists('financier_required_flag', $data) && null !== $data['financier_required_flag']) {
			$object->setFinancierRequiredFlag($data['financier_required_flag']);
		} elseif (\array_key_exists('financier_required_flag', $data) && null === $data['financier_required_flag']) {
			$object->setFinancierRequiredFlag(null);
		}
		if (\array_key_exists('payout_required_flag', $data) && null !== $data['payout_required_flag']) {
			$object->setPayoutRequiredFlag($data['payout_required_flag']);
		} elseif (\array_key_exists('payout_required_flag', $data) && null === $data['payout_required_flag']) {
			$object->setPayoutRequiredFlag(null);
		}
		if (\array_key_exists('end_date_required_flag', $data) && null !== $data['end_date_required_flag']) {
			$object->setEndDateRequiredFlag($data['end_date_required_flag']);
		} elseif (\array_key_exists('end_date_required_flag', $data) && null === $data['end_date_required_flag']) {
			$object->setEndDateRequiredFlag(null);
		}
		if (\array_key_exists('limit_amount_required_flag', $data) && null !== $data['limit_amount_required_flag']) {
			$object->setLimitAmountRequiredFlag($data['limit_amount_required_flag']);
		} elseif (\array_key_exists('limit_amount_required_flag', $data) && null === $data['limit_amount_required_flag']) {
			$object->setLimitAmountRequiredFlag(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getFinanceLiabilityTypeId()) {
			$data['finance_liability_type_id'] = $object->getFinanceLiabilityTypeId();
		}
		if (null !== $object->getName()) {
			$data['name'] = $object->getName();
		}
		if (null !== $object->getSequenceLinkFinanceAssetTypeId()) {
			$data['sequence_link_finance_asset_type_id'] = $object->getSequenceLinkFinanceAssetTypeId();
		}
		if (null !== $object->getFinancierRequiredFlag()) {
			$data['financier_required_flag'] = $object->getFinancierRequiredFlag();
		}
		if (null !== $object->getPayoutRequiredFlag()) {
			$data['payout_required_flag'] = $object->getPayoutRequiredFlag();
		}
		if (null !== $object->getEndDateRequiredFlag()) {
			$data['end_date_required_flag'] = $object->getEndDateRequiredFlag();
		}
		if (null !== $object->getLimitAmountRequiredFlag()) {
			$data['limit_amount_required_flag'] = $object->getLimitAmountRequiredFlag();
		}

		return $data;
	}
}
