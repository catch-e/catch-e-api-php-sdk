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

class VariantModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\VariantModel' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\VariantModel' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\VariantModel();
		if (\array_key_exists('model_id', $data) && null !== $data['model_id']) {
			$object->setModelId($data['model_id']);
		} elseif (\array_key_exists('model_id', $data) && null === $data['model_id']) {
			$object->setModelId(null);
		}
		if (\array_key_exists('make_id', $data) && null !== $data['make_id']) {
			$object->setMakeId($data['make_id']);
		} elseif (\array_key_exists('make_id', $data) && null === $data['make_id']) {
			$object->setMakeId(null);
		}
		if (\array_key_exists('model_code', $data) && null !== $data['model_code']) {
			$object->setModelCode($data['model_code']);
		} elseif (\array_key_exists('model_code', $data) && null === $data['model_code']) {
			$object->setModelCode(null);
		}
		if (\array_key_exists('description', $data) && null !== $data['description']) {
			$object->setDescription($data['description']);
		} elseif (\array_key_exists('description', $data) && null === $data['description']) {
			$object->setDescription(null);
		}
		if (\array_key_exists('data_source_id', $data) && null !== $data['data_source_id']) {
			$object->setDataSourceId($data['data_source_id']);
		} elseif (\array_key_exists('data_source_id', $data) && null === $data['data_source_id']) {
			$object->setDataSourceId(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getModelId()) {
			$data['model_id'] = $object->getModelId();
		}
		if (null !== $object->getMakeId()) {
			$data['make_id'] = $object->getMakeId();
		}
		if (null !== $object->getModelCode()) {
			$data['model_code'] = $object->getModelCode();
		}
		if (null !== $object->getDescription()) {
			$data['description'] = $object->getDescription();
		}
		if (null !== $object->getDataSourceId()) {
			$data['data_source_id'] = $object->getDataSourceId();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}

		return $data;
	}
}
