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

class ChannelQuoteDefaultsGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGet' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGet' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ChannelQuoteDefaultsGet();
		if (\array_key_exists('channel_default_id', $data) && null !== $data['channel_default_id']) {
			$object->setChannelDefaultId($data['channel_default_id']);
		} elseif (\array_key_exists('channel_default_id', $data) && null === $data['channel_default_id']) {
			$object->setChannelDefaultId(null);
		}
		if (\array_key_exists('channel_id', $data) && null !== $data['channel_id']) {
			$object->setChannelId($data['channel_id']);
		} elseif (\array_key_exists('channel_id', $data) && null === $data['channel_id']) {
			$object->setChannelId(null);
		}
		if (\array_key_exists('novated_management_fee', $data) && null !== $data['novated_management_fee']) {
			$object->setNovatedManagementFee($data['novated_management_fee']);
		} elseif (\array_key_exists('novated_management_fee', $data) && null === $data['novated_management_fee']) {
			$object->setNovatedManagementFee(null);
		}
		if (\array_key_exists('operating_management_fee', $data) && null !== $data['operating_management_fee']) {
			$object->setOperatingManagementFee($data['operating_management_fee']);
		} elseif (\array_key_exists('operating_management_fee', $data) && null === $data['operating_management_fee']) {
			$object->setOperatingManagementFee(null);
		}
		if (\array_key_exists('supplier_id_financier', $data) && null !== $data['supplier_id_financier']) {
			$object->setSupplierIdFinancier($data['supplier_id_financier']);
		} elseif (\array_key_exists('supplier_id_financier', $data) && null === $data['supplier_id_financier']) {
			$object->setSupplierIdFinancier(null);
		}
		if (\array_key_exists('novated_commission_rate', $data) && null !== $data['novated_commission_rate']) {
			$object->setNovatedCommissionRate($data['novated_commission_rate']);
		} elseif (\array_key_exists('novated_commission_rate', $data) && null === $data['novated_commission_rate']) {
			$object->setNovatedCommissionRate(null);
		}
		if (\array_key_exists('contract_pay_cycle_from_quote_flag', $data) && null !== $data['contract_pay_cycle_from_quote_flag']) {
			$object->setContractPayCycleFromQuoteFlag($data['contract_pay_cycle_from_quote_flag']);
		} elseif (\array_key_exists('contract_pay_cycle_from_quote_flag', $data) && null === $data['contract_pay_cycle_from_quote_flag']) {
			$object->setContractPayCycleFromQuoteFlag(null);
		}
		if (\array_key_exists('finance_budget_term_deferred_flag', $data) && null !== $data['finance_budget_term_deferred_flag']) {
			$object->setFinanceBudgetTermDeferredFlag($data['finance_budget_term_deferred_flag']);
		} elseif (\array_key_exists('finance_budget_term_deferred_flag', $data) && null === $data['finance_budget_term_deferred_flag']) {
			$object->setFinanceBudgetTermDeferredFlag(null);
		}
		if (\array_key_exists('_links', $data) && null !== $data['_links']) {
			$object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\ChannelQuoteDefaultsGetLinks', 'json', $context));
		} elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
			$object->setLinks(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getChannelDefaultId()) {
			$data['channel_default_id'] = $object->getChannelDefaultId();
		}
		if (null !== $object->getChannelId()) {
			$data['channel_id'] = $object->getChannelId();
		}
		if (null !== $object->getNovatedManagementFee()) {
			$data['novated_management_fee'] = $object->getNovatedManagementFee();
		}
		if (null !== $object->getOperatingManagementFee()) {
			$data['operating_management_fee'] = $object->getOperatingManagementFee();
		}
		if (null !== $object->getSupplierIdFinancier()) {
			$data['supplier_id_financier'] = $object->getSupplierIdFinancier();
		}
		if (null !== $object->getNovatedCommissionRate()) {
			$data['novated_commission_rate'] = $object->getNovatedCommissionRate();
		}
		if (null !== $object->getContractPayCycleFromQuoteFlag()) {
			$data['contract_pay_cycle_from_quote_flag'] = $object->getContractPayCycleFromQuoteFlag();
		}
		if (null !== $object->getFinanceBudgetTermDeferredFlag()) {
			$data['finance_budget_term_deferred_flag'] = $object->getFinanceBudgetTermDeferredFlag();
		}
		if (null !== $object->getLinks()) {
			$data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
		}

		return $data;
	}
}
