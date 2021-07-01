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

class CurrentEndpointDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\CurrentEndpointDetails' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\CurrentEndpointDetails' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\CurrentEndpointDetails();
		if (\array_key_exists('message', $data) && null !== $data['message']) {
			$object->setMessage($data['message']);
		} elseif (\array_key_exists('message', $data) && null === $data['message']) {
			$object->setMessage(null);
		}
		if (\array_key_exists('version', $data) && null !== $data['version']) {
			$object->setVersion($data['version']);
		} elseif (\array_key_exists('version', $data) && null === $data['version']) {
			$object->setVersion(null);
		}
		if (\array_key_exists('environment', $data) && null !== $data['environment']) {
			$object->setEnvironment($data['environment']);
		} elseif (\array_key_exists('environment', $data) && null === $data['environment']) {
			$object->setEnvironment(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getMessage()) {
			$data['message'] = $object->getMessage();
		}
		if (null !== $object->getVersion()) {
			$data['version'] = $object->getVersion();
		}
		if (null !== $object->getEnvironment()) {
			$data['environment'] = $object->getEnvironment();
		}

		return $data;
	}
}
