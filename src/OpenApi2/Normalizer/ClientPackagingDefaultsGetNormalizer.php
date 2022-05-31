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

class ClientPackagingDefaultsGetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\ClientPackagingDefaultsGet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\ClientPackagingDefaultsGet' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\ClientPackagingDefaultsGet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_packaging_default_id', $data) && null !== $data['client_packaging_default_id']) {
            $object->setClientPackagingDefaultId($data['client_packaging_default_id']);
        } elseif (\array_key_exists('client_packaging_default_id', $data) && null === $data['client_packaging_default_id']) {
            $object->setClientPackagingDefaultId(null);
        }
        if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
            $object->setClientId($data['client_id']);
        } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('bank_account_enabled_flag', $data) && null !== $data['bank_account_enabled_flag']) {
            $object->setBankAccountEnabledFlag($data['bank_account_enabled_flag']);
        } elseif (\array_key_exists('bank_account_enabled_flag', $data) && null === $data['bank_account_enabled_flag']) {
            $object->setBankAccountEnabledFlag(null);
        }
        if (\array_key_exists('financial_institution_id', $data) && null !== $data['financial_institution_id']) {
            $object->setFinancialInstitutionId($data['financial_institution_id']);
        } elseif (\array_key_exists('financial_institution_id', $data) && null === $data['financial_institution_id']) {
            $object->setFinancialInstitutionId(null);
        }
        if (\array_key_exists('bank_account_name', $data) && null !== $data['bank_account_name']) {
            $object->setBankAccountName($data['bank_account_name']);
        } elseif (\array_key_exists('bank_account_name', $data) && null === $data['bank_account_name']) {
            $object->setBankAccountName(null);
        }
        if (\array_key_exists('bank_account_name_short', $data) && null !== $data['bank_account_name_short']) {
            $object->setBankAccountNameShort($data['bank_account_name_short']);
        } elseif (\array_key_exists('bank_account_name_short', $data) && null === $data['bank_account_name_short']) {
            $object->setBankAccountNameShort(null);
        }
        if (\array_key_exists('apca_number', $data) && null !== $data['apca_number']) {
            $object->setApcaNumber($data['apca_number']);
        } elseif (\array_key_exists('apca_number', $data) && null === $data['apca_number']) {
            $object->setApcaNumber(null);
        }
        if (\array_key_exists('aba_description', $data) && null !== $data['aba_description']) {
            $object->setAbaDescription($data['aba_description']);
        } elseif (\array_key_exists('aba_description', $data) && null === $data['aba_description']) {
            $object->setAbaDescription(null);
        }
        if (\array_key_exists('aba_self_balancing_flag', $data) && null !== $data['aba_self_balancing_flag']) {
            $object->setAbaSelfBalancingFlag($data['aba_self_balancing_flag']);
        } elseif (\array_key_exists('aba_self_balancing_flag', $data) && null === $data['aba_self_balancing_flag']) {
            $object->setAbaSelfBalancingFlag(null);
        }
        if (\array_key_exists('_links', $data) && null !== $data['_links']) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\ClientPackagingDefaultsGetLinks', 'json', $context));
        } elseif (\array_key_exists('_links', $data) && null === $data['_links']) {
            $object->setLinks(null);
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
        if (null !== $object->getClientPackagingDefaultId()) {
            $data['client_packaging_default_id'] = $object->getClientPackagingDefaultId();
        }
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getBankAccountEnabledFlag()) {
            $data['bank_account_enabled_flag'] = $object->getBankAccountEnabledFlag();
        }
        if (null !== $object->getFinancialInstitutionId()) {
            $data['financial_institution_id'] = $object->getFinancialInstitutionId();
        }
        if (null !== $object->getBankAccountName()) {
            $data['bank_account_name'] = $object->getBankAccountName();
        }
        if (null !== $object->getBankAccountNameShort()) {
            $data['bank_account_name_short'] = $object->getBankAccountNameShort();
        }
        if (null !== $object->getApcaNumber()) {
            $data['apca_number'] = $object->getApcaNumber();
        }
        if (null !== $object->getAbaDescription()) {
            $data['aba_description'] = $object->getAbaDescription();
        }
        if (null !== $object->getAbaSelfBalancingFlag()) {
            $data['aba_self_balancing_flag'] = $object->getAbaSelfBalancingFlag();
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }
}
