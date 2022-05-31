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

class QuoteOptionalEquipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteOptionalEquipment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteOptionalEquipment' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteOptionalEquipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('optional_equipment_id', $data) && null !== $data['optional_equipment_id']) {
            $object->setOptionalEquipmentId($data['optional_equipment_id']);
        } elseif (\array_key_exists('optional_equipment_id', $data) && null === $data['optional_equipment_id']) {
            $object->setOptionalEquipmentId(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('cost_price_net', $data) && null !== $data['cost_price_net']) {
            $object->setCostPriceNet($data['cost_price_net']);
        } elseif (\array_key_exists('cost_price_net', $data) && null === $data['cost_price_net']) {
            $object->setCostPriceNet(null);
        }
        if (\array_key_exists('list_price_net', $data) && null !== $data['list_price_net']) {
            $object->setListPriceNet($data['list_price_net']);
        } elseif (\array_key_exists('list_price_net', $data) && null === $data['list_price_net']) {
            $object->setListPriceNet(null);
        }
        if (\array_key_exists('discount_net', $data) && null !== $data['discount_net']) {
            $object->setDiscountNet($data['discount_net']);
        } elseif (\array_key_exists('discount_net', $data) && null === $data['discount_net']) {
            $object->setDiscountNet(null);
        }
        if (\array_key_exists('gst', $data) && null !== $data['gst']) {
            $object->setGst($data['gst']);
        } elseif (\array_key_exists('gst', $data) && null === $data['gst']) {
            $object->setGst(null);
        }
        if (\array_key_exists('residual_rate', $data) && null !== $data['residual_rate']) {
            $object->setResidualRate($data['residual_rate']);
        } elseif (\array_key_exists('residual_rate', $data) && null === $data['residual_rate']) {
            $object->setResidualRate(null);
        }
        if (\array_key_exists('residual_amount', $data) && null !== $data['residual_amount']) {
            $object->setResidualAmount($data['residual_amount']);
        } elseif (\array_key_exists('residual_amount', $data) && null === $data['residual_amount']) {
            $object->setResidualAmount(null);
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
        $data['optional_equipment_id'] = $object->getOptionalEquipmentId();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getCostPriceNet()) {
            $data['cost_price_net'] = $object->getCostPriceNet();
        }
        if (null !== $object->getListPriceNet()) {
            $data['list_price_net'] = $object->getListPriceNet();
        }
        if (null !== $object->getDiscountNet()) {
            $data['discount_net'] = $object->getDiscountNet();
        }
        if (null !== $object->getGst()) {
            $data['gst'] = $object->getGst();
        }
        if (null !== $object->getResidualRate()) {
            $data['residual_rate'] = $object->getResidualRate();
        }
        if (null !== $object->getResidualAmount()) {
            $data['residual_amount'] = $object->getResidualAmount();
        }

        return $data;
    }
}
