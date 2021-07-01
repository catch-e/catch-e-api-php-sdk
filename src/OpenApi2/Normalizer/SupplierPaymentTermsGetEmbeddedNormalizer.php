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

class SupplierPaymentTermsGetEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\SupplierPaymentTermsGetEmbedded' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\SupplierPaymentTermsGetEmbedded' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\SupplierPaymentTermsGetEmbedded();
		if (\array_key_exists('fm_supplier_payment_terms', $data) && null !== $data['fm_supplier_payment_terms']) {
			$values = [];
			foreach ($data['fm_supplier_payment_terms'] as $value) {
				$values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\SupplierPaymentTerm', 'json', $context);
			}
			$object->setFmSupplierPaymentTerms($values);
		} elseif (\array_key_exists('fm_supplier_payment_terms', $data) && null === $data['fm_supplier_payment_terms']) {
			$object->setFmSupplierPaymentTerms(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getFmSupplierPaymentTerms()) {
			$values = [];
			foreach ($object->getFmSupplierPaymentTerms() as $value) {
				$values[] = $this->normalizer->normalize($value, 'json', $context);
			}
			$data['fm_supplier_payment_terms'] = $values;
		}

		return $data;
	}
}
