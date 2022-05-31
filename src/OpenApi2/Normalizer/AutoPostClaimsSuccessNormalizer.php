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

class AutoPostClaimsSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\AutoPostClaimsSuccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\AutoPostClaimsSuccess' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\AutoPostClaimsSuccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('processed_claims', $data) && null !== $data['processed_claims']) {
            $values = [];
            foreach ($data['processed_claims'] as $value) {
                $values[] = $value;
            }
            $object->setProcessedClaims($values);
        } elseif (\array_key_exists('processed_claims', $data) && null === $data['processed_claims']) {
            $object->setProcessedClaims(null);
        }
        if (\array_key_exists('exceptions', $data) && null !== $data['exceptions']) {
            $object->setExceptions($data['exceptions']);
        } elseif (\array_key_exists('exceptions', $data) && null === $data['exceptions']) {
            $object->setExceptions(null);
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
        if (null !== $object->getProcessedClaims()) {
            $values = [];
            foreach ($object->getProcessedClaims() as $value) {
                $values[] = $value;
            }
            $data['processed_claims'] = $values;
        }
        if (null !== $object->getExceptions()) {
            $data['exceptions'] = $object->getExceptions();
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $object->getLinks();
        }

        return $data;
    }
}
