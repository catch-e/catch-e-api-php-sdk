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

class EricInsuranceGetPricingSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\EricInsuranceGetPricingSuccess' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\EricInsuranceGetPricingSuccess' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\EricInsuranceGetPricingSuccess();
		if (\array_key_exists('quote_id', $data) && null !== $data['quote_id']) {
			$object->setQuoteId($data['quote_id']);
		} elseif (\array_key_exists('quote_id', $data) && null === $data['quote_id']) {
			$object->setQuoteId(null);
		}
		if (\array_key_exists('eric_quote_id', $data) && null !== $data['eric_quote_id']) {
			$object->setEricQuoteId($data['eric_quote_id']);
		} elseif (\array_key_exists('eric_quote_id', $data) && null === $data['eric_quote_id']) {
			$object->setEricQuoteId(null);
		}
		if (\array_key_exists('eric_quotation_reference_number', $data) && null !== $data['eric_quotation_reference_number']) {
			$object->setEricQuotationReferenceNumber($data['eric_quotation_reference_number']);
		} elseif (\array_key_exists('eric_quotation_reference_number', $data) && null === $data['eric_quotation_reference_number']) {
			$object->setEricQuotationReferenceNumber(null);
		}
		if (\array_key_exists('inclusion_plan_total', $data) && null !== $data['inclusion_plan_total']) {
			$object->setInclusionPlanTotal($data['inclusion_plan_total']);
		} elseif (\array_key_exists('inclusion_plan_total', $data) && null === $data['inclusion_plan_total']) {
			$object->setInclusionPlanTotal(null);
		}
		if (\array_key_exists('quoted_inclusions', $data) && null !== $data['quoted_inclusions']) {
			$values = [];
			foreach ($data['quoted_inclusions'] as $value) {
				$values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\EricInsuranceQuotedInclusion', 'json', $context);
			}
			$object->setQuotedInclusions($values);
		} elseif (\array_key_exists('quoted_inclusions', $data) && null === $data['quoted_inclusions']) {
			$object->setQuotedInclusions(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getQuoteId()) {
			$data['quote_id'] = $object->getQuoteId();
		}
		if (null !== $object->getEricQuoteId()) {
			$data['eric_quote_id'] = $object->getEricQuoteId();
		}
		if (null !== $object->getEricQuotationReferenceNumber()) {
			$data['eric_quotation_reference_number'] = $object->getEricQuotationReferenceNumber();
		}
		if (null !== $object->getInclusionPlanTotal()) {
			$data['inclusion_plan_total'] = $object->getInclusionPlanTotal();
		}
		if (null !== $object->getQuotedInclusions()) {
			$values = [];
			foreach ($object->getQuotedInclusions() as $value) {
				$values[] = $this->normalizer->normalize($value, 'json', $context);
			}
			$data['quoted_inclusions'] = $values;
		}

		return $data;
	}
}
