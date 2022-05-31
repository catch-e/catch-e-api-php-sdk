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

class UpdateDriverAssetWithIdNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\UpdateDriverAssetWithId' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\UpdateDriverAssetWithId' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\UpdateDriverAssetWithId();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('driver_asset_id', $data) && null !== $data['driver_asset_id']) {
            $object->setDriverAssetId($data['driver_asset_id']);
        } elseif (\array_key_exists('driver_asset_id', $data) && null === $data['driver_asset_id']) {
            $object->setDriverAssetId(null);
        }
        if (\array_key_exists('finance_asset_type_id', $data) && null !== $data['finance_asset_type_id']) {
            $object->setFinanceAssetTypeId($data['finance_asset_type_id']);
        } elseif (\array_key_exists('finance_asset_type_id', $data) && null === $data['finance_asset_type_id']) {
            $object->setFinanceAssetTypeId(null);
        }
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
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
        if (null !== $object->getDriverAssetId()) {
            $data['driver_asset_id'] = $object->getDriverAssetId();
        }
        if (null !== $object->getFinanceAssetTypeId()) {
            $data['finance_asset_type_id'] = $object->getFinanceAssetTypeId();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }

        return $data;
    }
}
