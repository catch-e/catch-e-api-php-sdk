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

class QuoteBudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteBudget' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteBudget' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteBudget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('posting_class_id', $data) && null !== $data['posting_class_id']) {
            $object->setPostingClassId($data['posting_class_id']);
        } elseif (\array_key_exists('posting_class_id', $data) && null === $data['posting_class_id']) {
            $object->setPostingClassId(null);
        }
        if (\array_key_exists('amount_net', $data) && null !== $data['amount_net']) {
            $object->setAmountNet($data['amount_net']);
        } elseif (\array_key_exists('amount_net', $data) && null === $data['amount_net']) {
            $object->setAmountNet(null);
        }
        if (\array_key_exists('amount_gst', $data) && null !== $data['amount_gst']) {
            $object->setAmountGst($data['amount_gst']);
        } elseif (\array_key_exists('amount_gst', $data) && null === $data['amount_gst']) {
            $object->setAmountGst(null);
        }
        if (\array_key_exists('total_amount_net', $data) && null !== $data['total_amount_net']) {
            $object->setTotalAmountNet($data['total_amount_net']);
        } elseif (\array_key_exists('total_amount_net', $data) && null === $data['total_amount_net']) {
            $object->setTotalAmountNet(null);
        }
        if (\array_key_exists('total_amount_gst', $data) && null !== $data['total_amount_gst']) {
            $object->setTotalAmountGst($data['total_amount_gst']);
        } elseif (\array_key_exists('total_amount_gst', $data) && null === $data['total_amount_gst']) {
            $object->setTotalAmountGst(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
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
        $data['posting_class_id'] = $object->getPostingClassId();
        $data['amount_net'] = $object->getAmountNet();
        $data['amount_gst'] = $object->getAmountGst();
        if (null !== $object->getTotalAmountNet()) {
            $data['total_amount_net'] = $object->getTotalAmountNet();
        }
        if (null !== $object->getTotalAmountGst()) {
            $data['total_amount_gst'] = $object->getTotalAmountGst();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }

        return $data;
    }
}
