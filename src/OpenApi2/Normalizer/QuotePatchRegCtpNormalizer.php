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

class QuotePatchRegCtpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuotePatchRegCtp' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuotePatchRegCtp' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuotePatchRegCtp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('annual_reg', $data) && null !== $data['annual_reg']) {
            $object->setAnnualReg($data['annual_reg']);
        } elseif (\array_key_exists('annual_reg', $data) && null === $data['annual_reg']) {
            $object->setAnnualReg(null);
        }
        if (\array_key_exists('annual_ctp', $data) && null !== $data['annual_ctp']) {
            $object->setAnnualCtp($data['annual_ctp']);
        } elseif (\array_key_exists('annual_ctp', $data) && null === $data['annual_ctp']) {
            $object->setAnnualCtp(null);
        }
        if (\array_key_exists('annual_plates', $data) && null !== $data['annual_plates']) {
            $object->setAnnualPlates($data['annual_plates']);
        } elseif (\array_key_exists('annual_plates', $data) && null === $data['annual_plates']) {
            $object->setAnnualPlates(null);
        }
        if (\array_key_exists('renewals', $data) && null !== $data['renewals']) {
            $object->setRenewals($data['renewals']);
        } elseif (\array_key_exists('renewals', $data) && null === $data['renewals']) {
            $object->setRenewals(null);
        }
        if (\array_key_exists('monthly_amount_net', $data) && null !== $data['monthly_amount_net']) {
            $object->setMonthlyAmountNet($data['monthly_amount_net']);
        } elseif (\array_key_exists('monthly_amount_net', $data) && null === $data['monthly_amount_net']) {
            $object->setMonthlyAmountNet(null);
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
        if (null !== $object->getAnnualReg()) {
            $data['annual_reg'] = $object->getAnnualReg();
        }
        if (null !== $object->getAnnualCtp()) {
            $data['annual_ctp'] = $object->getAnnualCtp();
        }
        if (null !== $object->getAnnualPlates()) {
            $data['annual_plates'] = $object->getAnnualPlates();
        }
        if (null !== $object->getRenewals()) {
            $data['renewals'] = $object->getRenewals();
        }
        if (null !== $object->getMonthlyAmountNet()) {
            $data['monthly_amount_net'] = $object->getMonthlyAmountNet();
        }
        if (null !== $object->getIncludedFlag()) {
            $data['included_flag'] = $object->getIncludedFlag();
        }

        return $data;
    }
}
