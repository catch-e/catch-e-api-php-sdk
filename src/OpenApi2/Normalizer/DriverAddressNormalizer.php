<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

use CatchE\OpenApi2\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DriverAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    use NormalizerAwareTrait;

    use CheckArray;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param null|mixed $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'CatchE\\OpenApi2\\Model\\DriverAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\DriverAddress' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CatchE\OpenApi2\Model\DriverAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address_1', $data) && null !== $data['address_1']) {
            $object->setAddress1($data['address_1']);
        } elseif (\array_key_exists('address_1', $data) && null === $data['address_1']) {
            $object->setAddress1(null);
        }
        if (\array_key_exists('address_2', $data) && null !== $data['address_2']) {
            $object->setAddress2($data['address_2']);
        } elseif (\array_key_exists('address_2', $data) && null === $data['address_2']) {
            $object->setAddress2(null);
        }
        if (\array_key_exists('area', $data) && null !== $data['area']) {
            $object->setArea($data['area']);
        } elseif (\array_key_exists('area', $data) && null === $data['area']) {
            $object->setArea(null);
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
        if (\array_key_exists('country_id', $data) && null !== $data['country_id']) {
            $object->setCountryId($data['country_id']);
        } elseif (\array_key_exists('country_id', $data) && null === $data['country_id']) {
            $object->setCountryId(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return null|array|\ArrayObject|bool|float|int|string
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddress1()) {
            $data['address_1'] = $object->getAddress1();
        }
        if (null !== $object->getAddress2()) {
            $data['address_2'] = $object->getAddress2();
        }
        if (null !== $object->getArea()) {
            $data['area'] = $object->getArea();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getPostcode()) {
            $data['postcode'] = $object->getPostcode();
        }
        if (null !== $object->getCountryId()) {
            $data['country_id'] = $object->getCountryId();
        }

        return $data;
    }
}
