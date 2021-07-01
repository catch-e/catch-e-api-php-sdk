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

class ContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\Contact' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\Contact' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\Contact();
		if (\array_key_exists('contact_id', $data) && null !== $data['contact_id']) {
			$object->setContactId($data['contact_id']);
		} elseif (\array_key_exists('contact_id', $data) && null === $data['contact_id']) {
			$object->setContactId(null);
		}
		if (\array_key_exists('contact_job_title_id', $data) && null !== $data['contact_job_title_id']) {
			$object->setContactJobTitleId($data['contact_job_title_id']);
		} elseif (\array_key_exists('contact_job_title_id', $data) && null === $data['contact_job_title_id']) {
			$object->setContactJobTitleId(null);
		}
		if (\array_key_exists('salutation', $data) && null !== $data['salutation']) {
			$object->setSalutation($data['salutation']);
		} elseif (\array_key_exists('salutation', $data) && null === $data['salutation']) {
			$object->setSalutation(null);
		}
		if (\array_key_exists('given_name', $data) && null !== $data['given_name']) {
			$object->setGivenName($data['given_name']);
		} elseif (\array_key_exists('given_name', $data) && null === $data['given_name']) {
			$object->setGivenName(null);
		}
		if (\array_key_exists('surname', $data) && null !== $data['surname']) {
			$object->setSurname($data['surname']);
		} elseif (\array_key_exists('surname', $data) && null === $data['surname']) {
			$object->setSurname(null);
		}
		if (\array_key_exists('phone', $data) && null !== $data['phone']) {
			$object->setPhone($data['phone']);
		} elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
			$object->setPhone(null);
		}
		if (\array_key_exists('mobile', $data) && null !== $data['mobile']) {
			$object->setMobile($data['mobile']);
		} elseif (\array_key_exists('mobile', $data) && null === $data['mobile']) {
			$object->setMobile(null);
		}
		if (\array_key_exists('email', $data) && null !== $data['email']) {
			$object->setEmail($data['email']);
		} elseif (\array_key_exists('email', $data) && null === $data['email']) {
			$object->setEmail(null);
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
		if (\array_key_exists('area', $data) && null !== $data['area']) {
			$object->setArea($data['area']);
		} elseif (\array_key_exists('area', $data) && null === $data['area']) {
			$object->setArea(null);
		}
		if (\array_key_exists('state_id', $data) && null !== $data['state_id']) {
			$object->setStateId($data['state_id']);
		} elseif (\array_key_exists('state_id', $data) && null === $data['state_id']) {
			$object->setStateId(null);
		}
		if (\array_key_exists('postcode', $data) && null !== $data['postcode']) {
			$object->setPostcode($data['postcode']);
		} elseif (\array_key_exists('postcode', $data) && null === $data['postcode']) {
			$object->setPostcode(null);
		}
		if (\array_key_exists('country_id', $data) && null !== $data['country_id']) {
			$object->setCountryId($data['country_id']);
		} elseif (\array_key_exists('country_id', $data) && null === $data['country_id']) {
			$object->setCountryId(null);
		}
		if (\array_key_exists('note', $data) && null !== $data['note']) {
			$object->setNote($data['note']);
		} elseif (\array_key_exists('note', $data) && null === $data['note']) {
			$object->setNote(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}
		if (\array_key_exists('allocations', $data) && null !== $data['allocations']) {
			$values = [];
			foreach ($data['allocations'] as $value) {
				$values[] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\ContactAllocationGet', 'json', $context);
			}
			$object->setAllocations($values);
		} elseif (\array_key_exists('allocations', $data) && null === $data['allocations']) {
			$object->setAllocations(null);
		}
		if (\array_key_exists('contact_type_allocations', $data) && null !== $data['contact_type_allocations']) {
			$values_1 = [];
			foreach ($data['contact_type_allocations'] as $value_1) {
				$values_1[] = $this->denormalizer->denormalize($value_1, 'CatchE\\OpenApi2\\Model\\ContactTypeAllocationCreate', 'json', $context);
			}
			$object->setContactTypeAllocations($values_1);
		} elseif (\array_key_exists('contact_type_allocations', $data) && null === $data['contact_type_allocations']) {
			$object->setContactTypeAllocations(null);
		}
		if (\array_key_exists('_links', $data) && null !== $data['_links']) {
			$object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\ContactLinks', 'json', $context));
		} elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
			$object->setLinks(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getContactId()) {
			$data['contact_id'] = $object->getContactId();
		}
		if (null !== $object->getContactJobTitleId()) {
			$data['contact_job_title_id'] = $object->getContactJobTitleId();
		}
		if (null !== $object->getSalutation()) {
			$data['salutation'] = $object->getSalutation();
		}
		if (null !== $object->getGivenName()) {
			$data['given_name'] = $object->getGivenName();
		}
		if (null !== $object->getSurname()) {
			$data['surname'] = $object->getSurname();
		}
		if (null !== $object->getPhone()) {
			$data['phone'] = $object->getPhone();
		}
		if (null !== $object->getMobile()) {
			$data['mobile'] = $object->getMobile();
		}
		if (null !== $object->getEmail()) {
			$data['email'] = $object->getEmail();
		}
		if (null !== $object->getAddress1()) {
			$data['address1'] = $object->getAddress1();
		}
		if (null !== $object->getAddress2()) {
			$data['address2'] = $object->getAddress2();
		}
		if (null !== $object->getArea()) {
			$data['area'] = $object->getArea();
		}
		if (null !== $object->getStateId()) {
			$data['state_id'] = $object->getStateId();
		}
		if (null !== $object->getPostcode()) {
			$data['postcode'] = $object->getPostcode();
		}
		if (null !== $object->getCountryId()) {
			$data['country_id'] = $object->getCountryId();
		}
		if (null !== $object->getNote()) {
			$data['note'] = $object->getNote();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}
		if (null !== $object->getAllocations()) {
			$values = [];
			foreach ($object->getAllocations() as $value) {
				$values[] = $this->normalizer->normalize($value, 'json', $context);
			}
			$data['allocations'] = $values;
		}
		if (null !== $object->getContactTypeAllocations()) {
			$values_1 = [];
			foreach ($object->getContactTypeAllocations() as $value_1) {
				$values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
			}
			$data['contact_type_allocations'] = $values_1;
		}
		if (null !== $object->getLinks()) {
			$data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
		}

		return $data;
	}
}
