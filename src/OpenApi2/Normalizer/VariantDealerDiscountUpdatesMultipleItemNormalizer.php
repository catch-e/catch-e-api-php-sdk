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

class VariantDealerDiscountUpdatesMultipleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\VariantDealerDiscountUpdatesMultipleItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\VariantDealerDiscountUpdatesMultipleItem' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\VariantDealerDiscountUpdatesMultipleItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('variant_dealer_discount_id', $data) && null !== $data['variant_dealer_discount_id']) {
            $object->setVariantDealerDiscountId($data['variant_dealer_discount_id']);
        } elseif (\array_key_exists('variant_dealer_discount_id', $data) && null === $data['variant_dealer_discount_id']) {
            $object->setVariantDealerDiscountId(null);
        }
        if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
            $object->setVariantId($data['variant_id']);
        } elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
            $object->setVariantId(null);
        }
        if (\array_key_exists('dealer_discount_type_id', $data) && null !== $data['dealer_discount_type_id']) {
            $object->setDealerDiscountTypeId($data['dealer_discount_type_id']);
        } elseif (\array_key_exists('dealer_discount_type_id', $data) && null === $data['dealer_discount_type_id']) {
            $object->setDealerDiscountTypeId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('discount', $data) && null !== $data['discount']) {
            $object->setDiscount($data['discount']);
        } elseif (\array_key_exists('discount', $data) && null === $data['discount']) {
            $object->setDiscount(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
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
        if (null !== $object->getVariantDealerDiscountId()) {
            $data['variant_dealer_discount_id'] = $object->getVariantDealerDiscountId();
        }
        if (null !== $object->getVariantId()) {
            $data['variant_id'] = $object->getVariantId();
        }
        if (null !== $object->getDealerDiscountTypeId()) {
            $data['dealer_discount_type_id'] = $object->getDealerDiscountTypeId();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }

        return $data;
    }
}
