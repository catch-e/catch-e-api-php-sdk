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

class ChannelUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\ChannelUpdate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\ChannelUpdate' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\ChannelUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('company_id', $data) && null !== $data['company_id']) {
            $object->setCompanyId($data['company_id']);
        } elseif (\array_key_exists('company_id', $data) && null === $data['company_id']) {
            $object->setCompanyId(null);
        }
        if (\array_key_exists('channel_group_id', $data) && null !== $data['channel_group_id']) {
            $object->setChannelGroupId($data['channel_group_id']);
        } elseif (\array_key_exists('channel_group_id', $data) && null === $data['channel_group_id']) {
            $object->setChannelGroupId(null);
        }
        if (\array_key_exists('channel_code', $data) && null !== $data['channel_code']) {
            $object->setChannelCode($data['channel_code']);
        } elseif (\array_key_exists('channel_code', $data) && null === $data['channel_code']) {
            $object->setChannelCode(null);
        }
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($data['channel']);
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('bank_account_name', $data) && null !== $data['bank_account_name']) {
            $object->setBankAccountName($data['bank_account_name']);
        } elseif (\array_key_exists('bank_account_name', $data) && null === $data['bank_account_name']) {
            $object->setBankAccountName(null);
        }
        if (\array_key_exists('bank_bsb', $data) && null !== $data['bank_bsb']) {
            $object->setBankBsb($data['bank_bsb']);
        } elseif (\array_key_exists('bank_bsb', $data) && null === $data['bank_bsb']) {
            $object->setBankBsb(null);
        }
        if (\array_key_exists('bank_account_number', $data) && null !== $data['bank_account_number']) {
            $object->setBankAccountNumber($data['bank_account_number']);
        } elseif (\array_key_exists('bank_account_number', $data) && null === $data['bank_account_number']) {
            $object->setBankAccountNumber(null);
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
        if (null !== $object->getCompanyId()) {
            $data['company_id'] = $object->getCompanyId();
        }
        if (null !== $object->getChannelGroupId()) {
            $data['channel_group_id'] = $object->getChannelGroupId();
        }
        if (null !== $object->getChannelCode()) {
            $data['channel_code'] = $object->getChannelCode();
        }
        if (null !== $object->getChannel()) {
            $data['channel'] = $object->getChannel();
        }
        if (null !== $object->getBankAccountName()) {
            $data['bank_account_name'] = $object->getBankAccountName();
        }
        if (null !== $object->getBankBsb()) {
            $data['bank_bsb'] = $object->getBankBsb();
        }
        if (null !== $object->getBankAccountNumber()) {
            $data['bank_account_number'] = $object->getBankAccountNumber();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }

        return $data;
    }
}
