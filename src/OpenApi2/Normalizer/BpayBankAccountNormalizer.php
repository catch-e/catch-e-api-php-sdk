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

class BpayBankAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\BpayBankAccount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\BpayBankAccount' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\BpayBankAccount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bank_account_bpay_mapping_id', $data) && null !== $data['bank_account_bpay_mapping_id']) {
            $object->setBankAccountBpayMappingId($data['bank_account_bpay_mapping_id']);
        } elseif (\array_key_exists('bank_account_bpay_mapping_id', $data) && null === $data['bank_account_bpay_mapping_id']) {
            $object->setBankAccountBpayMappingId(null);
        }
        if (\array_key_exists('bank_account_id', $data) && null !== $data['bank_account_id']) {
            $object->setBankAccountId($data['bank_account_id']);
        } elseif (\array_key_exists('bank_account_id', $data) && null === $data['bank_account_id']) {
            $object->setBankAccountId(null);
        }
        if (\array_key_exists('account_name', $data) && null !== $data['account_name']) {
            $object->setAccountName($data['account_name']);
        } elseif (\array_key_exists('account_name', $data) && null === $data['account_name']) {
            $object->setAccountName(null);
        }
        if (\array_key_exists('account_name_short', $data) && null !== $data['account_name_short']) {
            $object->setAccountNameShort($data['account_name_short']);
        } elseif (\array_key_exists('account_name_short', $data) && null === $data['account_name_short']) {
            $object->setAccountNameShort(null);
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
        if (null !== $object->getBankAccountBpayMappingId()) {
            $data['bank_account_bpay_mapping_id'] = $object->getBankAccountBpayMappingId();
        }
        if (null !== $object->getBankAccountId()) {
            $data['bank_account_id'] = $object->getBankAccountId();
        }
        if (null !== $object->getAccountName()) {
            $data['account_name'] = $object->getAccountName();
        }
        if (null !== $object->getAccountNameShort()) {
            $data['account_name_short'] = $object->getAccountNameShort();
        }

        return $data;
    }
}
