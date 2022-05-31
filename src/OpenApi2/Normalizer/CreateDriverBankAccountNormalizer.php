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

class CreateDriverBankAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\CreateDriverBankAccount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\CreateDriverBankAccount' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\CreateDriverBankAccount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
            $object->setDriverId($data['driver_id']);
        } elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
            $object->setDriverId(null);
        }
        if (\array_key_exists('supplier_id', $data) && null !== $data['supplier_id']) {
            $object->setSupplierId($data['supplier_id']);
        } elseif (\array_key_exists('supplier_id', $data) && null === $data['supplier_id']) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('account_name', $data) && null !== $data['account_name']) {
            $object->setAccountName($data['account_name']);
        } elseif (\array_key_exists('account_name', $data) && null === $data['account_name']) {
            $object->setAccountName(null);
        }
        if (\array_key_exists('bsb', $data) && null !== $data['bsb']) {
            $object->setBsb($data['bsb']);
        } elseif (\array_key_exists('bsb', $data) && null === $data['bsb']) {
            $object->setBsb(null);
        }
        if (\array_key_exists('account_number', $data) && null !== $data['account_number']) {
            $object->setAccountNumber($data['account_number']);
        } elseif (\array_key_exists('account_number', $data) && null === $data['account_number']) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('claims_default_flag', $data) && null !== $data['claims_default_flag']) {
            $object->setClaimsDefaultFlag($data['claims_default_flag']);
        } elseif (\array_key_exists('claims_default_flag', $data) && null === $data['claims_default_flag']) {
            $object->setClaimsDefaultFlag(null);
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
        $data['driver_id'] = $object->getDriverId();
        $data['supplier_id'] = $object->getSupplierId();
        if (null !== $object->getAccountName()) {
            $data['account_name'] = $object->getAccountName();
        }
        $data['bsb'] = $object->getBsb();
        $data['account_number'] = $object->getAccountNumber();
        if (null !== $object->getClaimsDefaultFlag()) {
            $data['claims_default_flag'] = $object->getClaimsDefaultFlag();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
