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

class VariantStandardEquipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\VariantStandardEquipment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\VariantStandardEquipment' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\VariantStandardEquipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('standard_equipment_id', $data) && null !== $data['standard_equipment_id']) {
            $object->setStandardEquipmentId($data['standard_equipment_id']);
        } elseif (\array_key_exists('standard_equipment_id', $data) && null === $data['standard_equipment_id']) {
            $object->setStandardEquipmentId(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
            $object->setVariantId($data['variant_id']);
        } elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('_links', $data) && null !== $data['_links']) {
            $object->setLinks($data['_links']);
        } elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
            $object->setLinks(null);
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
        $data['standard_equipment_id'] = $object->getStandardEquipmentId();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['variant_id'] = $object->getVariantId();
        if (null !== $object->getLinks()) {
            $data['_links'] = $object->getLinks();
        }

        return $data;
    }
}
