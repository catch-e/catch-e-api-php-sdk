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

class VariantPhotoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\VariantPhoto' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\VariantPhoto' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\VariantPhoto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('photo_id', $data) && null !== $data['photo_id']) {
            $object->setPhotoId($data['photo_id']);
        } elseif (\array_key_exists('photo_id', $data) && null === $data['photo_id']) {
            $object->setPhotoId(null);
        }
        if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
            $object->setVariantId($data['variant_id']);
        } elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('photo_type', $data) && null !== $data['photo_type']) {
            $object->setPhotoType($data['photo_type']);
        } elseif (\array_key_exists('photo_type', $data) && null === $data['photo_type']) {
            $object->setPhotoType(null);
        }
        if (\array_key_exists('photo_code', $data) && null !== $data['photo_code']) {
            $object->setPhotoCode($data['photo_code']);
        } elseif (\array_key_exists('photo_code', $data) && null === $data['photo_code']) {
            $object->setPhotoCode(null);
        }
        if (\array_key_exists('photo_uri', $data) && null !== $data['photo_uri']) {
            $object->setPhotoUri($data['photo_uri']);
        } elseif (\array_key_exists('photo_uri', $data) && null === $data['photo_uri']) {
            $object->setPhotoUri(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('data_source_id', $data) && null !== $data['data_source_id']) {
            $object->setDataSourceId($data['data_source_id']);
        } elseif (\array_key_exists('data_source_id', $data) && null === $data['data_source_id']) {
            $object->setDataSourceId(null);
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
        if (null !== $object->getPhotoId()) {
            $data['photo_id'] = $object->getPhotoId();
        }
        if (null !== $object->getVariantId()) {
            $data['variant_id'] = $object->getVariantId();
        }
        if (null !== $object->getPhotoType()) {
            $data['photo_type'] = $object->getPhotoType();
        }
        if (null !== $object->getPhotoCode()) {
            $data['photo_code'] = $object->getPhotoCode();
        }
        if (null !== $object->getPhotoUri()) {
            $data['photo_uri'] = $object->getPhotoUri();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDataSourceId()) {
            $data['data_source_id'] = $object->getDataSourceId();
        }

        return $data;
    }
}
