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

class InclusionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\Inclusion' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\Inclusion' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\Inclusion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inclusion_id', $data) && null !== $data['inclusion_id']) {
            $object->setInclusionId($data['inclusion_id']);
        } elseif (\array_key_exists('inclusion_id', $data) && null === $data['inclusion_id']) {
            $object->setInclusionId(null);
        }
        if (\array_key_exists('inclusion_code', $data) && null !== $data['inclusion_code']) {
            $object->setInclusionCode($data['inclusion_code']);
        } elseif (\array_key_exists('inclusion_code', $data) && null === $data['inclusion_code']) {
            $object->setInclusionCode(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('edit_flag', $data) && null !== $data['edit_flag']) {
            $object->setEditFlag($data['edit_flag']);
        } elseif (\array_key_exists('edit_flag', $data) && null === $data['edit_flag']) {
            $object->setEditFlag(null);
        }
        if (\array_key_exists('provider', $data) && null !== $data['provider']) {
            $object->setProvider($data['provider']);
        } elseif (\array_key_exists('provider', $data) && null === $data['provider']) {
            $object->setProvider(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
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
        if (null !== $object->getInclusionId()) {
            $data['inclusion_id'] = $object->getInclusionId();
        }
        if (null !== $object->getInclusionCode()) {
            $data['inclusion_code'] = $object->getInclusionCode();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getEditFlag()) {
            $data['edit_flag'] = $object->getEditFlag();
        }
        if (null !== $object->getProvider()) {
            $data['provider'] = $object->getProvider();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
