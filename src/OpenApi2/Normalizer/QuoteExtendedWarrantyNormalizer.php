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

class QuoteExtendedWarrantyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteExtendedWarranty' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteExtendedWarranty' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteExtendedWarranty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('warranty_plan_id', $data) && null !== $data['warranty_plan_id']) {
            $object->setWarrantyPlanId($data['warranty_plan_id']);
        } elseif (\array_key_exists('warranty_plan_id', $data) && null === $data['warranty_plan_id']) {
            $object->setWarrantyPlanId(null);
        }
        if (\array_key_exists('warranty_category_id', $data) && null !== $data['warranty_category_id']) {
            $object->setWarrantyCategoryId($data['warranty_category_id']);
        } elseif (\array_key_exists('warranty_category_id', $data) && null === $data['warranty_category_id']) {
            $object->setWarrantyCategoryId(null);
        }
        if (\array_key_exists('months', $data) && null !== $data['months']) {
            $object->setMonths($data['months']);
        } elseif (\array_key_exists('months', $data) && null === $data['months']) {
            $object->setMonths(null);
        }
        if (\array_key_exists('kilometres', $data) && null !== $data['kilometres']) {
            $object->setKilometres($data['kilometres']);
        } elseif (\array_key_exists('kilometres', $data) && null === $data['kilometres']) {
            $object->setKilometres(null);
        }
        if (\array_key_exists('rate', $data) && null !== $data['rate']) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && null === $data['rate']) {
            $object->setRate(null);
        }
        if (\array_key_exists('retail_price_net', $data) && null !== $data['retail_price_net']) {
            $object->setRetailPriceNet($data['retail_price_net']);
        } elseif (\array_key_exists('retail_price_net', $data) && null === $data['retail_price_net']) {
            $object->setRetailPriceNet(null);
        }
        if (\array_key_exists('cost', $data) && null !== $data['cost']) {
            $object->setCost($data['cost']);
        } elseif (\array_key_exists('cost', $data) && null === $data['cost']) {
            $object->setCost(null);
        }
        if (\array_key_exists('margin_net', $data) && null !== $data['margin_net']) {
            $object->setMarginNet($data['margin_net']);
        } elseif (\array_key_exists('margin_net', $data) && null === $data['margin_net']) {
            $object->setMarginNet(null);
        }
        if (\array_key_exists('financed_flag', $data) && null !== $data['financed_flag']) {
            $object->setFinancedFlag($data['financed_flag']);
        } elseif (\array_key_exists('financed_flag', $data) && null === $data['financed_flag']) {
            $object->setFinancedFlag(null);
        }
        if (\array_key_exists('included_flag', $data) && null !== $data['included_flag']) {
            $object->setIncludedFlag($data['included_flag']);
        } elseif (\array_key_exists('included_flag', $data) && null === $data['included_flag']) {
            $object->setIncludedFlag(null);
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
        $data['warranty_plan_id'] = $object->getWarrantyPlanId();
        $data['warranty_category_id'] = $object->getWarrantyCategoryId();
        if (null !== $object->getMonths()) {
            $data['months'] = $object->getMonths();
        }
        if (null !== $object->getKilometres()) {
            $data['kilometres'] = $object->getKilometres();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if (null !== $object->getRetailPriceNet()) {
            $data['retail_price_net'] = $object->getRetailPriceNet();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getMarginNet()) {
            $data['margin_net'] = $object->getMarginNet();
        }
        $data['financed_flag'] = $object->getFinancedFlag();
        $data['included_flag'] = $object->getIncludedFlag();

        return $data;
    }
}
