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

class AuthenticateSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\AuthenticateSuccess' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\AuthenticateSuccess' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\AuthenticateSuccess();
		if (\array_key_exists('access_token', $data) && null !== $data['access_token']) {
			$object->setAccessToken($data['access_token']);
		} elseif (\array_key_exists('access_token', $data) && null === $data['access_token']) {
			$object->setAccessToken(null);
		}
		if (\array_key_exists('expires_in', $data) && null !== $data['expires_in']) {
			$object->setExpiresIn($data['expires_in']);
		} elseif (\array_key_exists('expires_in', $data) && null === $data['expires_in']) {
			$object->setExpiresIn(null);
		}
		if (\array_key_exists('token_type', $data) && null !== $data['token_type']) {
			$object->setTokenType($data['token_type']);
		} elseif (\array_key_exists('token_type', $data) && null === $data['token_type']) {
			$object->setTokenType(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getAccessToken()) {
			$data['access_token'] = $object->getAccessToken();
		}
		if (null !== $object->getExpiresIn()) {
			$data['expires_in'] = $object->getExpiresIn();
		}
		if (null !== $object->getTokenType()) {
			$data['token_type'] = $object->getTokenType();
		}

		return $data;
	}
}
