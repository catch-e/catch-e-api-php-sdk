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

class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\Company' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\Company' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\Company();
		if (\array_key_exists('company_id', $data) && null !== $data['company_id']) {
			$object->setCompanyId($data['company_id']);
		} elseif (\array_key_exists('company_id', $data) && null === $data['company_id']) {
			$object->setCompanyId(null);
		}
		if (\array_key_exists('name', $data) && null !== $data['name']) {
			$object->setName($data['name']);
		} elseif (\array_key_exists('name', $data) && null === $data['name']) {
			$object->setName(null);
		}
		if (\array_key_exists('address1', $data) && null !== $data['address1']) {
			$object->setAddress1($data['address1']);
		} elseif (\array_key_exists('address1', $data) && null === $data['address1']) {
			$object->setAddress1(null);
		}
		if (\array_key_exists('address2', $data) && null !== $data['address2']) {
			$object->setAddress2($data['address2']);
		} elseif (\array_key_exists('address2', $data) && null === $data['address2']) {
			$object->setAddress2(null);
		}
		if (\array_key_exists('city', $data) && null !== $data['city']) {
			$object->setCity($data['city']);
		} elseif (\array_key_exists('city', $data) && null === $data['city']) {
			$object->setCity(null);
		}
		if (\array_key_exists('state', $data) && null !== $data['state']) {
			$object->setState($data['state']);
		} elseif (\array_key_exists('state', $data) && null === $data['state']) {
			$object->setState(null);
		}
		if (\array_key_exists('postcode', $data) && null !== $data['postcode']) {
			$object->setPostcode($data['postcode']);
		} elseif (\array_key_exists('postcode', $data) && null === $data['postcode']) {
			$object->setPostcode(null);
		}
		if (\array_key_exists('phone', $data) && null !== $data['phone']) {
			$object->setPhone($data['phone']);
		} elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
			$object->setPhone(null);
		}
		if (\array_key_exists('fax', $data) && null !== $data['fax']) {
			$object->setFax($data['fax']);
		} elseif (\array_key_exists('fax', $data) && null === $data['fax']) {
			$object->setFax(null);
		}
		if (\array_key_exists('mobile', $data) && null !== $data['mobile']) {
			$object->setMobile($data['mobile']);
		} elseif (\array_key_exists('mobile', $data) && null === $data['mobile']) {
			$object->setMobile(null);
		}
		if (\array_key_exists('email_finance', $data) && null !== $data['email_finance']) {
			$object->setEmailFinance($data['email_finance']);
		} elseif (\array_key_exists('email_finance', $data) && null === $data['email_finance']) {
			$object->setEmailFinance(null);
		}
		if (\array_key_exists('postal_address1', $data) && null !== $data['postal_address1']) {
			$object->setPostalAddress1($data['postal_address1']);
		} elseif (\array_key_exists('postal_address1', $data) && null === $data['postal_address1']) {
			$object->setPostalAddress1(null);
		}
		if (\array_key_exists('postal_address2', $data) && null !== $data['postal_address2']) {
			$object->setPostalAddress2($data['postal_address2']);
		} elseif (\array_key_exists('postal_address2', $data) && null === $data['postal_address2']) {
			$object->setPostalAddress2(null);
		}
		if (\array_key_exists('postal_city', $data) && null !== $data['postal_city']) {
			$object->setPostalCity($data['postal_city']);
		} elseif (\array_key_exists('postal_city', $data) && null === $data['postal_city']) {
			$object->setPostalCity(null);
		}
		if (\array_key_exists('postal_state', $data) && null !== $data['postal_state']) {
			$object->setPostalState($data['postal_state']);
		} elseif (\array_key_exists('postal_state', $data) && null === $data['postal_state']) {
			$object->setPostalState(null);
		}
		if (\array_key_exists('postal_postcode', $data) && null !== $data['postal_postcode']) {
			$object->setPostalPostcode($data['postal_postcode']);
		} elseif (\array_key_exists('postal_postcode', $data) && null === $data['postal_postcode']) {
			$object->setPostalPostcode(null);
		}
		if (\array_key_exists('abn', $data) && null !== $data['abn']) {
			$object->setAbn($data['abn']);
		} elseif (\array_key_exists('abn', $data) && null === $data['abn']) {
			$object->setAbn(null);
		}
		if (\array_key_exists('default_flag', $data) && null !== $data['default_flag']) {
			$object->setDefaultFlag($data['default_flag']);
		} elseif (\array_key_exists('default_flag', $data) && null === $data['default_flag']) {
			$object->setDefaultFlag(null);
		}
		if (\array_key_exists('_links', $data) && null !== $data['_links']) {
			$object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\CompanyLinks', 'json', $context));
		} elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
			$object->setLinks(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getCompanyId()) {
			$data['company_id'] = $object->getCompanyId();
		}
		if (null !== $object->getName()) {
			$data['name'] = $object->getName();
		}
		if (null !== $object->getAddress1()) {
			$data['address1'] = $object->getAddress1();
		}
		if (null !== $object->getAddress2()) {
			$data['address2'] = $object->getAddress2();
		}
		if (null !== $object->getCity()) {
			$data['city'] = $object->getCity();
		}
		if (null !== $object->getState()) {
			$data['state'] = $object->getState();
		}
		if (null !== $object->getPostcode()) {
			$data['postcode'] = $object->getPostcode();
		}
		if (null !== $object->getPhone()) {
			$data['phone'] = $object->getPhone();
		}
		if (null !== $object->getFax()) {
			$data['fax'] = $object->getFax();
		}
		if (null !== $object->getMobile()) {
			$data['mobile'] = $object->getMobile();
		}
		if (null !== $object->getEmailFinance()) {
			$data['email_finance'] = $object->getEmailFinance();
		}
		if (null !== $object->getPostalAddress1()) {
			$data['postal_address1'] = $object->getPostalAddress1();
		}
		if (null !== $object->getPostalAddress2()) {
			$data['postal_address2'] = $object->getPostalAddress2();
		}
		if (null !== $object->getPostalCity()) {
			$data['postal_city'] = $object->getPostalCity();
		}
		if (null !== $object->getPostalState()) {
			$data['postal_state'] = $object->getPostalState();
		}
		if (null !== $object->getPostalPostcode()) {
			$data['postal_postcode'] = $object->getPostalPostcode();
		}
		if (null !== $object->getAbn()) {
			$data['abn'] = $object->getAbn();
		}
		if (null !== $object->getDefaultFlag()) {
			$data['default_flag'] = $object->getDefaultFlag();
		}
		if (null !== $object->getLinks()) {
			$data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
		}

		return $data;
	}
}
