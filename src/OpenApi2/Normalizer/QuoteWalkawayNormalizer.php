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

class QuoteWalkawayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuoteWalkaway' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuoteWalkaway' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuoteWalkaway();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('walkaway_plan_id', $data) && null !== $data['walkaway_plan_id']) {
            $object->setWalkawayPlanId($data['walkaway_plan_id']);
        } elseif (\array_key_exists('walkaway_plan_id', $data) && null === $data['walkaway_plan_id']) {
            $object->setWalkawayPlanId(null);
        }
        if (\array_key_exists('retail_price_net', $data) && null !== $data['retail_price_net']) {
            $object->setRetailPriceNet($data['retail_price_net']);
        } elseif (\array_key_exists('retail_price_net', $data) && null === $data['retail_price_net']) {
            $object->setRetailPriceNet(null);
        }
        if (\array_key_exists('retail_price_gross', $data) && null !== $data['retail_price_gross']) {
            $object->setRetailPriceGross($data['retail_price_gross']);
        } elseif (\array_key_exists('retail_price_gross', $data) && null === $data['retail_price_gross']) {
            $object->setRetailPriceGross(null);
        }
        if (\array_key_exists('cost_price_net', $data) && null !== $data['cost_price_net']) {
            $object->setCostPriceNet($data['cost_price_net']);
        } elseif (\array_key_exists('cost_price_net', $data) && null === $data['cost_price_net']) {
            $object->setCostPriceNet(null);
        }
        if (\array_key_exists('margin_net', $data) && null !== $data['margin_net']) {
            $object->setMarginNet($data['margin_net']);
        } elseif (\array_key_exists('margin_net', $data) && null === $data['margin_net']) {
            $object->setMarginNet(null);
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
        $data['walkaway_plan_id'] = $object->getWalkawayPlanId();
        if (null !== $object->getRetailPriceNet()) {
            $data['retail_price_net'] = $object->getRetailPriceNet();
        }
        if (null !== $object->getRetailPriceGross()) {
            $data['retail_price_gross'] = $object->getRetailPriceGross();
        }
        if (null !== $object->getCostPriceNet()) {
            $data['cost_price_net'] = $object->getCostPriceNet();
        }
        if (null !== $object->getMarginNet()) {
            $data['margin_net'] = $object->getMarginNet();
        }
        $data['included_flag'] = $object->getIncludedFlag();

        return $data;
    }
}
