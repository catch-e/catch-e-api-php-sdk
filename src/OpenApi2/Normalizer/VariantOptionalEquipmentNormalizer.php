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

class VariantOptionalEquipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\VariantOptionalEquipment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\VariantOptionalEquipment' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\VariantOptionalEquipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('optional_equipment_id', $data) && null !== $data['optional_equipment_id']) {
            $object->setOptionalEquipmentId($data['optional_equipment_id']);
        } elseif (\array_key_exists('optional_equipment_id', $data) && null === $data['optional_equipment_id']) {
            $object->setOptionalEquipmentId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('list_price_net', $data) && null !== $data['list_price_net']) {
            $object->setListPriceNet($data['list_price_net']);
        } elseif (\array_key_exists('list_price_net', $data) && null === $data['list_price_net']) {
            $object->setListPriceNet(null);
        }
        if (\array_key_exists('list_price_gst', $data) && null !== $data['list_price_gst']) {
            $object->setListPriceGst($data['list_price_gst']);
        } elseif (\array_key_exists('list_price_gst', $data) && null === $data['list_price_gst']) {
            $object->setListPriceGst(null);
        }
        if (\array_key_exists('cost_price_net', $data) && null !== $data['cost_price_net']) {
            $object->setCostPriceNet($data['cost_price_net']);
        } elseif (\array_key_exists('cost_price_net', $data) && null === $data['cost_price_net']) {
            $object->setCostPriceNet(null);
        }
        if (\array_key_exists('option_type', $data) && null !== $data['option_type']) {
            $object->setOptionType($data['option_type']);
        } elseif (\array_key_exists('option_type', $data) && null === $data['option_type']) {
            $object->setOptionType(null);
        }
        if (\array_key_exists('dealer_fit', $data) && null !== $data['dealer_fit']) {
            $object->setDealerFit($data['dealer_fit']);
        } elseif (\array_key_exists('dealer_fit', $data) && null === $data['dealer_fit']) {
            $object->setDealerFit(null);
        }
        if (\array_key_exists('include_by_default_flag', $data) && null !== $data['include_by_default_flag']) {
            $object->setIncludeByDefaultFlag($data['include_by_default_flag']);
        } elseif (\array_key_exists('include_by_default_flag', $data) && null === $data['include_by_default_flag']) {
            $object->setIncludeByDefaultFlag(null);
        }
        if (\array_key_exists('equipment_code', $data) && null !== $data['equipment_code']) {
            $object->setEquipmentCode($data['equipment_code']);
        } elseif (\array_key_exists('equipment_code', $data) && null === $data['equipment_code']) {
            $object->setEquipmentCode(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('fbt_exempt_flag', $data) && null !== $data['fbt_exempt_flag']) {
            $object->setFbtExemptFlag($data['fbt_exempt_flag']);
        } elseif (\array_key_exists('fbt_exempt_flag', $data) && null === $data['fbt_exempt_flag']) {
            $object->setFbtExemptFlag(null);
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
        if (null !== $object->getOptionalEquipmentId()) {
            $data['optional_equipment_id'] = $object->getOptionalEquipmentId();
        }
        if (null !== $object->getSupplierId()) {
            $data['supplier_id'] = $object->getSupplierId();
        }
        if (null !== $object->getListPriceNet()) {
            $data['list_price_net'] = $object->getListPriceNet();
        }
        if (null !== $object->getListPriceGst()) {
            $data['list_price_gst'] = $object->getListPriceGst();
        }
        if (null !== $object->getCostPriceNet()) {
            $data['cost_price_net'] = $object->getCostPriceNet();
        }
        if (null !== $object->getOptionType()) {
            $data['option_type'] = $object->getOptionType();
        }
        if (null !== $object->getDealerFit()) {
            $data['dealer_fit'] = $object->getDealerFit();
        }
        if (null !== $object->getIncludeByDefaultFlag()) {
            $data['include_by_default_flag'] = $object->getIncludeByDefaultFlag();
        }
        if (null !== $object->getEquipmentCode()) {
            $data['equipment_code'] = $object->getEquipmentCode();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getFbtExemptFlag()) {
            $data['fbt_exempt_flag'] = $object->getFbtExemptFlag();
        }
        if (null !== $object->getDataSourceId()) {
            $data['data_source_id'] = $object->getDataSourceId();
        }

        return $data;
    }
}
