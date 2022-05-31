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

class PayeePaymentMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\PayeePaymentMethod' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\PayeePaymentMethod' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\PayeePaymentMethod();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('payee_payment_method_id', $data) && null !== $data['payee_payment_method_id']) {
            $object->setPayeePaymentMethodId($data['payee_payment_method_id']);
        } elseif (\array_key_exists('payee_payment_method_id', $data) && null === $data['payee_payment_method_id']) {
            $object->setPayeePaymentMethodId(null);
        }
        if (\array_key_exists('payee_id', $data) && null !== $data['payee_id']) {
            $object->setPayeeId($data['payee_id']);
        } elseif (\array_key_exists('payee_id', $data) && null === $data['payee_id']) {
            $object->setPayeeId(null);
        }
        if (\array_key_exists('payment_method_id', $data) && null !== $data['payment_method_id']) {
            $object->setPaymentMethodId($data['payment_method_id']);
        } elseif (\array_key_exists('payment_method_id', $data) && null === $data['payment_method_id']) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('process_type', $data) && null !== $data['process_type']) {
            $object->setProcessType($data['process_type']);
        } elseif (\array_key_exists('process_type', $data) && null === $data['process_type']) {
            $object->setProcessType(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
        }
        if (\array_key_exists('_embedded', $data) && null !== $data['_embedded']) {
            $object->setEmbedded($this->denormalizer->denormalize($data['_embedded'], 'CatchE\\OpenApi2\\Model\\PayeePaymentMethodEmbedded', 'json', $context));
        } elseif (\array_key_exists('_embedded', $data) && null === $data['_embedded']) {
            $object->setEmbedded(null);
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
        if (null !== $object->getPayeePaymentMethodId()) {
            $data['payee_payment_method_id'] = $object->getPayeePaymentMethodId();
        }
        if (null !== $object->getPayeeId()) {
            $data['payee_id'] = $object->getPayeeId();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data['payment_method_id'] = $object->getPaymentMethodId();
        }
        if (null !== $object->getProcessType()) {
            $data['process_type'] = $object->getProcessType();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }
        if (null !== $object->getEmbedded()) {
            $data['_embedded'] = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
        }

        return $data;
    }
}
