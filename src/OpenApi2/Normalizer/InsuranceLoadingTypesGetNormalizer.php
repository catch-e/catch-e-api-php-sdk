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

class InsuranceLoadingTypesGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InsuranceLoadingTypesGet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InsuranceLoadingTypesGet' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InsuranceLoadingTypesGet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_links', $data) && null !== $data['_links']) {
            $object->setLinks($data['_links']);
        } elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
            $object->setLinks(null);
        }
        if (\array_key_exists('_embedded', $data) && null !== $data['_embedded']) {
            $object->setEmbedded($this->denormalizer->denormalize($data['_embedded'], 'CatchE\\OpenApi2\\Model\\InsuranceLoadingTypesGetEmbedded', 'json', $context));
        } elseif (\array_key_exists('_embedded', $data) && null === $data['_embedded']) {
            $object->setEmbedded(null);
        }
        if (\array_key_exists('page_count', $data) && null !== $data['page_count']) {
            $object->setPageCount($data['page_count']);
        } elseif (\array_key_exists('page_count', $data) && null === $data['page_count']) {
            $object->setPageCount(null);
        }
        if (\array_key_exists('page_size', $data) && null !== $data['page_size']) {
            $object->setPageSize($data['page_size']);
        } elseif (\array_key_exists('page_size', $data) && null === $data['page_size']) {
            $object->setPageSize(null);
        }
        if (\array_key_exists('total_items', $data) && null !== $data['total_items']) {
            $object->setTotalItems($data['total_items']);
        } elseif (\array_key_exists('total_items', $data) && null === $data['total_items']) {
            $object->setTotalItems(null);
        }
        if (\array_key_exists('page', $data) && null !== $data['page']) {
            $object->setPage($data['page']);
        } elseif (\array_key_exists('page', $data) && null === $data['page']) {
            $object->setPage(null);
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
        if (null !== $object->getLinks()) {
            $data['_links'] = $object->getLinks();
        }
        if (null !== $object->getEmbedded()) {
            $data['_embedded'] = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
        }
        if (null !== $object->getPageCount()) {
            $data['page_count'] = $object->getPageCount();
        }
        if (null !== $object->getPageSize()) {
            $data['page_size'] = $object->getPageSize();
        }
        if (null !== $object->getTotalItems()) {
            $data['total_items'] = $object->getTotalItems();
        }
        if (null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }

        return $data;
    }
}
