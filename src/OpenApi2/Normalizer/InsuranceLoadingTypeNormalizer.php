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

class InsuranceLoadingTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InsuranceLoadingType' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InsuranceLoadingType' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InsuranceLoadingType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('insurance_loading_type_id', $data) && null !== $data['insurance_loading_type_id']) {
            $object->setInsuranceLoadingTypeId($data['insurance_loading_type_id']);
        } elseif (\array_key_exists('insurance_loading_type_id', $data) && null === $data['insurance_loading_type_id']) {
            $object->setInsuranceLoadingTypeId(null);
        }
        if (\array_key_exists('loading_type', $data) && null !== $data['loading_type']) {
            $object->setLoadingType($data['loading_type']);
        } elseif (\array_key_exists('loading_type', $data) && null === $data['loading_type']) {
            $object->setLoadingType(null);
        }
        if (\array_key_exists('loading_code', $data) && null !== $data['loading_code']) {
            $object->setLoadingCode($data['loading_code']);
        } elseif (\array_key_exists('loading_code', $data) && null === $data['loading_code']) {
            $object->setLoadingCode(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('loading_category', $data) && null !== $data['loading_category']) {
            $object->setLoadingCategory($data['loading_category']);
        } elseif (\array_key_exists('loading_category', $data) && null === $data['loading_category']) {
            $object->setLoadingCategory(null);
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
        if (null !== $object->getInsuranceLoadingTypeId()) {
            $data['insurance_loading_type_id'] = $object->getInsuranceLoadingTypeId();
        }
        if (null !== $object->getLoadingType()) {
            $data['loading_type'] = $object->getLoadingType();
        }
        if (null !== $object->getLoadingCode()) {
            $data['loading_code'] = $object->getLoadingCode();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getLoadingCategory()) {
            $data['loading_category'] = $object->getLoadingCategory();
        }

        return $data;
    }
}
