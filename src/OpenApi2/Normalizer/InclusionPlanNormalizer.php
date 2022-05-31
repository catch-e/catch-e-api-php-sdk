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

class InclusionPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InclusionPlan' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InclusionPlan' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InclusionPlan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('inclusion_plan_id', $data) && null !== $data['inclusion_plan_id']) {
            $object->setInclusionPlanId($data['inclusion_plan_id']);
        } elseif (\array_key_exists('inclusion_plan_id', $data) && null === $data['inclusion_plan_id']) {
            $object->setInclusionPlanId(null);
        }
        if (\array_key_exists('inclusion_code', $data) && null !== $data['inclusion_code']) {
            $object->setInclusionCode($data['inclusion_code']);
        } elseif (\array_key_exists('inclusion_code', $data) && null === $data['inclusion_code']) {
            $object->setInclusionCode(null);
        }
        if (\array_key_exists('inclusion_plan_code', $data) && null !== $data['inclusion_plan_code']) {
            $object->setInclusionPlanCode($data['inclusion_plan_code']);
        } elseif (\array_key_exists('inclusion_plan_code', $data) && null === $data['inclusion_plan_code']) {
            $object->setInclusionPlanCode(null);
        }
        if (\array_key_exists('inclusion_plan_code_qualified', $data) && null !== $data['inclusion_plan_code_qualified']) {
            $object->setInclusionPlanCodeQualified($data['inclusion_plan_code_qualified']);
        } elseif (\array_key_exists('inclusion_plan_code_qualified', $data) && null === $data['inclusion_plan_code_qualified']) {
            $object->setInclusionPlanCodeQualified(null);
        }
        if (\array_key_exists('plan_name', $data) && null !== $data['plan_name']) {
            $object->setPlanName($data['plan_name']);
        } elseif (\array_key_exists('plan_name', $data) && null === $data['plan_name']) {
            $object->setPlanName(null);
        }
        if (\array_key_exists('retail_price_gross', $data) && null !== $data['retail_price_gross']) {
            $object->setRetailPriceGross($data['retail_price_gross']);
        } elseif (\array_key_exists('retail_price_gross', $data) && null === $data['retail_price_gross']) {
            $object->setRetailPriceGross(null);
        }
        if (\array_key_exists('retail_price_net', $data) && null !== $data['retail_price_net']) {
            $object->setRetailPriceNet($data['retail_price_net']);
        } elseif (\array_key_exists('retail_price_net', $data) && null === $data['retail_price_net']) {
            $object->setRetailPriceNet(null);
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
        if (\array_key_exists('effective_date', $data) && null !== $data['effective_date']) {
            $object->setEffectiveDate(\DateTime::createFromFormat('Y-m-d', $data['effective_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('effective_date', $data) && null === $data['effective_date']) {
            $object->setEffectiveDate(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
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
        if (null !== $object->getInclusionPlanId()) {
            $data['inclusion_plan_id'] = $object->getInclusionPlanId();
        }
        if (null !== $object->getInclusionCode()) {
            $data['inclusion_code'] = $object->getInclusionCode();
        }
        if (null !== $object->getInclusionPlanCode()) {
            $data['inclusion_plan_code'] = $object->getInclusionPlanCode();
        }
        if (null !== $object->getInclusionPlanCodeQualified()) {
            $data['inclusion_plan_code_qualified'] = $object->getInclusionPlanCodeQualified();
        }
        if (null !== $object->getPlanName()) {
            $data['plan_name'] = $object->getPlanName();
        }
        if (null !== $object->getRetailPriceGross()) {
            $data['retail_price_gross'] = $object->getRetailPriceGross();
        }
        if (null !== $object->getRetailPriceNet()) {
            $data['retail_price_net'] = $object->getRetailPriceNet();
        }
        if (null !== $object->getCostPriceNet()) {
            $data['cost_price_net'] = $object->getCostPriceNet();
        }
        if (null !== $object->getMarginNet()) {
            $data['margin_net'] = $object->getMarginNet();
        }
        if (null !== $object->getEffectiveDate()) {
            $data['effective_date'] = $object->getEffectiveDate()->format('Y-m-d');
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
