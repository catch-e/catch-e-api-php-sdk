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

class UpdateSupplierFinancierNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\UpdateSupplierFinancier' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\UpdateSupplierFinancier' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\UpdateSupplierFinancier();
		if (\array_key_exists('supplier_id_residual_insurer', $data) && null !== $data['supplier_id_residual_insurer']) {
			$object->setSupplierIdResidualInsurer($data['supplier_id_residual_insurer']);
		} elseif (\array_key_exists('supplier_id_residual_insurer', $data) && null === $data['supplier_id_residual_insurer']) {
			$object->setSupplierIdResidualInsurer(null);
		}
		if (\array_key_exists('residual_fee_rate', $data) && null !== $data['residual_fee_rate']) {
			$object->setResidualFeeRate($data['residual_fee_rate']);
		} elseif (\array_key_exists('residual_fee_rate', $data) && null === $data['residual_fee_rate']) {
			$object->setResidualFeeRate(null);
		}
		if (\array_key_exists('residual_cash_pool_rate', $data) && null !== $data['residual_cash_pool_rate']) {
			$object->setResidualCashPoolRate($data['residual_cash_pool_rate']);
		} elseif (\array_key_exists('residual_cash_pool_rate', $data) && null === $data['residual_cash_pool_rate']) {
			$object->setResidualCashPoolRate(null);
		}
		if (\array_key_exists('establishment_fee_funded_flag', $data) && null !== $data['establishment_fee_funded_flag']) {
			$object->setEstablishmentFeeFundedFlag($data['establishment_fee_funded_flag']);
		} elseif (\array_key_exists('establishment_fee_funded_flag', $data) && null === $data['establishment_fee_funded_flag']) {
			$object->setEstablishmentFeeFundedFlag(null);
		}
		if (\array_key_exists('finance_method', $data) && null !== $data['finance_method']) {
			$object->setFinanceMethod($data['finance_method']);
		} elseif (\array_key_exists('finance_method', $data) && null === $data['finance_method']) {
			$object->setFinanceMethod(null);
		}
		if (\array_key_exists('payments_arrears_interest_flag', $data) && null !== $data['payments_arrears_interest_flag']) {
			$object->setPaymentsArrearsInterestFlag($data['payments_arrears_interest_flag']);
		} elseif (\array_key_exists('payments_arrears_interest_flag', $data) && null === $data['payments_arrears_interest_flag']) {
			$object->setPaymentsArrearsInterestFlag(null);
		}
		if (\array_key_exists('external_code', $data) && null !== $data['external_code']) {
			$object->setExternalCode($data['external_code']);
		} elseif (\array_key_exists('external_code', $data) && null === $data['external_code']) {
			$object->setExternalCode(null);
		}
		if (\array_key_exists('aftermarket_separate_supply_flag', $data) && null !== $data['aftermarket_separate_supply_flag']) {
			$object->setAftermarketSeparateSupplyFlag($data['aftermarket_separate_supply_flag']);
		} elseif (\array_key_exists('aftermarket_separate_supply_flag', $data) && null === $data['aftermarket_separate_supply_flag']) {
			$object->setAftermarketSeparateSupplyFlag(null);
		}
		if (\array_key_exists('discount_margin', $data) && null !== $data['discount_margin']) {
			$object->setDiscountMargin($data['discount_margin']);
		} elseif (\array_key_exists('discount_margin', $data) && null === $data['discount_margin']) {
			$object->setDiscountMargin(null);
		}
		if (\array_key_exists('residual_value_as_future_value_flag', $data) && null !== $data['residual_value_as_future_value_flag']) {
			$object->setResidualValueAsFutureValueFlag($data['residual_value_as_future_value_flag']);
		} elseif (\array_key_exists('residual_value_as_future_value_flag', $data) && null === $data['residual_value_as_future_value_flag']) {
			$object->setResidualValueAsFutureValueFlag(null);
		}
		if (\array_key_exists('no_of_additional_monthly_rentals', $data) && null !== $data['no_of_additional_monthly_rentals']) {
			$object->setNoOfAdditionalMonthlyRentals($data['no_of_additional_monthly_rentals']);
		} elseif (\array_key_exists('no_of_additional_monthly_rentals', $data) && null === $data['no_of_additional_monthly_rentals']) {
			$object->setNoOfAdditionalMonthlyRentals(null);
		}
		if (\array_key_exists('gst_on_payout_flag', $data) && null !== $data['gst_on_payout_flag']) {
			$object->setGstOnPayoutFlag($data['gst_on_payout_flag']);
		} elseif (\array_key_exists('gst_on_payout_flag', $data) && null === $data['gst_on_payout_flag']) {
			$object->setGstOnPayoutFlag(null);
		}
		if (\array_key_exists('financier_value_mandatory_flag', $data) && null !== $data['financier_value_mandatory_flag']) {
			$object->setFinancierValueMandatoryFlag($data['financier_value_mandatory_flag']);
		} elseif (\array_key_exists('financier_value_mandatory_flag', $data) && null === $data['financier_value_mandatory_flag']) {
			$object->setFinancierValueMandatoryFlag(null);
		}
		if (\array_key_exists('payout_email', $data) && null !== $data['payout_email']) {
			$object->setPayoutEmail($data['payout_email']);
		} elseif (\array_key_exists('payout_email', $data) && null === $data['payout_email']) {
			$object->setPayoutEmail(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getSupplierIdResidualInsurer()) {
			$data['supplier_id_residual_insurer'] = $object->getSupplierIdResidualInsurer();
		}
		if (null !== $object->getResidualFeeRate()) {
			$data['residual_fee_rate'] = $object->getResidualFeeRate();
		}
		if (null !== $object->getResidualCashPoolRate()) {
			$data['residual_cash_pool_rate'] = $object->getResidualCashPoolRate();
		}
		if (null !== $object->getEstablishmentFeeFundedFlag()) {
			$data['establishment_fee_funded_flag'] = $object->getEstablishmentFeeFundedFlag();
		}
		if (null !== $object->getFinanceMethod()) {
			$data['finance_method'] = $object->getFinanceMethod();
		}
		if (null !== $object->getPaymentsArrearsInterestFlag()) {
			$data['payments_arrears_interest_flag'] = $object->getPaymentsArrearsInterestFlag();
		}
		if (null !== $object->getExternalCode()) {
			$data['external_code'] = $object->getExternalCode();
		}
		if (null !== $object->getAftermarketSeparateSupplyFlag()) {
			$data['aftermarket_separate_supply_flag'] = $object->getAftermarketSeparateSupplyFlag();
		}
		if (null !== $object->getDiscountMargin()) {
			$data['discount_margin'] = $object->getDiscountMargin();
		}
		if (null !== $object->getResidualValueAsFutureValueFlag()) {
			$data['residual_value_as_future_value_flag'] = $object->getResidualValueAsFutureValueFlag();
		}
		if (null !== $object->getNoOfAdditionalMonthlyRentals()) {
			$data['no_of_additional_monthly_rentals'] = $object->getNoOfAdditionalMonthlyRentals();
		}
		if (null !== $object->getGstOnPayoutFlag()) {
			$data['gst_on_payout_flag'] = $object->getGstOnPayoutFlag();
		}
		if (null !== $object->getFinancierValueMandatoryFlag()) {
			$data['financier_value_mandatory_flag'] = $object->getFinancierValueMandatoryFlag();
		}
		if (null !== $object->getPayoutEmail()) {
			$data['payout_email'] = $object->getPayoutEmail();
		}

		return $data;
	}
}
