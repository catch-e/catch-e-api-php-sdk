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

class GetDecsDisbursementsBatchSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\GetDecsDisbursementsBatchSuccess' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\GetDecsDisbursementsBatchSuccess' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\GetDecsDisbursementsBatchSuccess();
		if (\array_key_exists('becs_id', $data) && null !== $data['becs_id']) {
			$object->setBecsId($data['becs_id']);
		} elseif (\array_key_exists('becs_id', $data) && null === $data['becs_id']) {
			$object->setBecsId(null);
		}
		if (\array_key_exists('uri', $data) && null !== $data['uri']) {
			$object->setUri($data['uri']);
		} elseif (\array_key_exists('uri', $data) && null === $data['uri']) {
			$object->setUri(null);
		}
		if (\array_key_exists('uri_expiry', $data) && null !== $data['uri_expiry']) {
			$object->setUriExpiry(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['uri_expiry']));
		} elseif (\array_key_exists('uri_expiry', $data) && null === $data['uri_expiry']) {
			$object->setUriExpiry(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getBecsId()) {
			$data['becs_id'] = $object->getBecsId();
		}
		if (null !== $object->getUri()) {
			$data['uri'] = $object->getUri();
		}
		if (null !== $object->getUriExpiry()) {
			$data['uri_expiry'] = $object->getUriExpiry()->format('Y-m-d\\TH:i:sP');
		}

		return $data;
	}
}
