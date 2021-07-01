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

class ContactJobTitleGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ContactJobTitleGet' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ContactJobTitleGet' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ContactJobTitleGet();
		if (\array_key_exists('contact_job_title_id', $data) && null !== $data['contact_job_title_id']) {
			$object->setContactJobTitleId($data['contact_job_title_id']);
		} elseif (\array_key_exists('contact_job_title_id', $data) && null === $data['contact_job_title_id']) {
			$object->setContactJobTitleId(null);
		}
		if (\array_key_exists('description', $data) && null !== $data['description']) {
			$object->setDescription($data['description']);
		} elseif (\array_key_exists('description', $data) && null === $data['description']) {
			$object->setDescription(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}
		if (\array_key_exists('_links', $data) && null !== $data['_links']) {
			$object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\ContactJobTitleGetLinks', 'json', $context));
		} elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
			$object->setLinks(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getContactJobTitleId()) {
			$data['contact_job_title_id'] = $object->getContactJobTitleId();
		}
		if (null !== $object->getDescription()) {
			$data['description'] = $object->getDescription();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}
		if (null !== $object->getLinks()) {
			$data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
		}

		return $data;
	}
}
