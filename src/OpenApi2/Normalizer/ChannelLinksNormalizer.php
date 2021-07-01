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

class ChannelLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\ChannelLinks' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\ChannelLinks' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\ChannelLinks();
		if (\array_key_exists('self', $data) && null !== $data['self']) {
			$object->setSelf($this->denormalizer->denormalize($data['self'], 'CatchE\\OpenApi2\\Model\\ChannelLinksSelf', 'json', $context));
		} elseif (\array_key_exists('self', $data) && null === $data['self']) {
			$object->setSelf(null);
		}
		if (\array_key_exists('company', $data) && null !== $data['company']) {
			$object->setCompany($this->denormalizer->denormalize($data['company'], 'CatchE\\OpenApi2\\Model\\ChannelLinksCompany', 'json', $context));
		} elseif (\array_key_exists('company', $data) && null === $data['company']) {
			$object->setCompany(null);
		}
		if (\array_key_exists('channel_group', $data) && null !== $data['channel_group']) {
			$object->setChannelGroup($this->denormalizer->denormalize($data['channel_group'], 'CatchE\\OpenApi2\\Model\\ChannelLinksChannelGroup', 'json', $context));
		} elseif (\array_key_exists('channel_group', $data) && null === $data['channel_group']) {
			$object->setChannelGroup(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getSelf()) {
			$data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
		}
		if (null !== $object->getCompany()) {
			$data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
		}
		if (null !== $object->getChannelGroup()) {
			$data['channel_group'] = $this->normalizer->normalize($object->getChannelGroup(), 'json', $context);
		}

		return $data;
	}
}
