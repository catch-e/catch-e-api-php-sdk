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

class QuotePatchInsuranceLoadingTypesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypes' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypes' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\QuotePatchInsuranceLoadingTypes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('past_claims', $data) && null !== $data['past_claims']) {
            $object->setPastClaims($this->denormalizer->denormalize($data['past_claims'], 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypesPastClaims', 'json', $context));
        } elseif (\array_key_exists('past_claims', $data) && null === $data['past_claims']) {
            $object->setPastClaims(null);
        }
        if (\array_key_exists('licence', $data) && null !== $data['licence']) {
            $object->setLicence($this->denormalizer->denormalize($data['licence'], 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypesLicence', 'json', $context));
        } elseif (\array_key_exists('licence', $data) && null === $data['licence']) {
            $object->setLicence(null);
        }
        if (\array_key_exists('driver_restriction', $data) && null !== $data['driver_restriction']) {
            $object->setDriverRestriction($this->denormalizer->denormalize($data['driver_restriction'], 'CatchE\\OpenApi2\\Model\\QuotePatchInsuranceLoadingTypesDriverRestriction', 'json', $context));
        } elseif (\array_key_exists('driver_restriction', $data) && null === $data['driver_restriction']) {
            $object->setDriverRestriction(null);
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
        if (null !== $object->getPastClaims()) {
            $data['past_claims'] = $this->normalizer->normalize($object->getPastClaims(), 'json', $context);
        }
        if (null !== $object->getLicence()) {
            $data['licence'] = $this->normalizer->normalize($object->getLicence(), 'json', $context);
        }
        if (null !== $object->getDriverRestriction()) {
            $data['driver_restriction'] = $this->normalizer->normalize($object->getDriverRestriction(), 'json', $context);
        }

        return $data;
    }
}
