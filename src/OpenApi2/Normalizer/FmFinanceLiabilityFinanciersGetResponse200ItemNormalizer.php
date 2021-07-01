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

class FmFinanceLiabilityFinanciersGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\FmFinanceLiabilityFinanciersGetResponse200Item' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\FmFinanceLiabilityFinanciersGetResponse200Item' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\FmFinanceLiabilityFinanciersGetResponse200Item();
		if (\array_key_exists('finance_liability_financier_id', $data) && null !== $data['finance_liability_financier_id']) {
			$object->setFinanceLiabilityFinancierId($data['finance_liability_financier_id']);
		} elseif (\array_key_exists('finance_liability_financier_id', $data) && null === $data['finance_liability_financier_id']) {
			$object->setFinanceLiabilityFinancierId(null);
		}
		if (\array_key_exists('liability_financier_code', $data) && null !== $data['liability_financier_code']) {
			$object->setLiabilityFinancierCode($data['liability_financier_code']);
		} elseif (\array_key_exists('liability_financier_code', $data) && null === $data['liability_financier_code']) {
			$object->setLiabilityFinancierCode(null);
		}
		if (\array_key_exists('name', $data) && null !== $data['name']) {
			$object->setName($data['name']);
		} elseif (\array_key_exists('name', $data) && null === $data['name']) {
			$object->setName(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getFinanceLiabilityFinancierId()) {
			$data['finance_liability_financier_id'] = $object->getFinanceLiabilityFinancierId();
		}
		if (null !== $object->getLiabilityFinancierCode()) {
			$data['liability_financier_code'] = $object->getLiabilityFinancierCode();
		}
		if (null !== $object->getName()) {
			$data['name'] = $object->getName();
		}

		return $data;
	}
}
