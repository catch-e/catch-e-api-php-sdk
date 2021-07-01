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

class SignonTokenCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\SignonTokenCreate' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\SignonTokenCreate' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\SignonTokenCreate();
		if (\array_key_exists('user_login', $data) && null !== $data['user_login']) {
			$object->setUserLogin($data['user_login']);
		} elseif (\array_key_exists('user_login', $data) && null === $data['user_login']) {
			$object->setUserLogin(null);
		}
		if (\array_key_exists('token_timeout', $data) && null !== $data['token_timeout']) {
			$object->setTokenTimeout($data['token_timeout']);
		} elseif (\array_key_exists('token_timeout', $data) && null === $data['token_timeout']) {
			$object->setTokenTimeout(null);
		}
		if (\array_key_exists('single_signon_role_flag', $data) && null !== $data['single_signon_role_flag']) {
			$object->setSingleSignonRoleFlag($data['single_signon_role_flag']);
		} elseif (\array_key_exists('single_signon_role_flag', $data) && null === $data['single_signon_role_flag']) {
			$object->setSingleSignonRoleFlag(null);
		}
		if (\array_key_exists('screen_width', $data) && null !== $data['screen_width']) {
			$object->setScreenWidth($data['screen_width']);
		} elseif (\array_key_exists('screen_width', $data) && null === $data['screen_width']) {
			$object->setScreenWidth(null);
		}
		if (\array_key_exists('screen_height', $data) && null !== $data['screen_height']) {
			$object->setScreenHeight($data['screen_height']);
		} elseif (\array_key_exists('screen_height', $data) && null === $data['screen_height']) {
			$object->setScreenHeight(null);
		}
		if (\array_key_exists('create_gb_user_with_this_role', $data) && null !== $data['create_gb_user_with_this_role']) {
			$object->setCreateGbUserWithThisRole($data['create_gb_user_with_this_role']);
		} elseif (\array_key_exists('create_gb_user_with_this_role', $data) && null === $data['create_gb_user_with_this_role']) {
			$object->setCreateGbUserWithThisRole(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getUserLogin()) {
			$data['user_login'] = $object->getUserLogin();
		}
		if (null !== $object->getTokenTimeout()) {
			$data['token_timeout'] = $object->getTokenTimeout();
		}
		if (null !== $object->getSingleSignonRoleFlag()) {
			$data['single_signon_role_flag'] = $object->getSingleSignonRoleFlag();
		}
		if (null !== $object->getScreenWidth()) {
			$data['screen_width'] = $object->getScreenWidth();
		}
		if (null !== $object->getScreenHeight()) {
			$data['screen_height'] = $object->getScreenHeight();
		}
		if (null !== $object->getCreateGbUserWithThisRole()) {
			$data['create_gb_user_with_this_role'] = $object->getCreateGbUserWithThisRole();
		}

		return $data;
	}
}