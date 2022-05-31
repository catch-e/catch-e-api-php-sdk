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

class GbLocksTableNameUniqueIdGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\GbLocksTableNameUniqueIdGetResponse200Item' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\GbLocksTableNameUniqueIdGetResponse200Item' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\GbLocksTableNameUniqueIdGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lock_key', $data) && null !== $data['lock_key']) {
            $object->setLockKey($data['lock_key']);
        } elseif (\array_key_exists('lock_key', $data) && null === $data['lock_key']) {
            $object->setLockKey(null);
        }
        if (\array_key_exists('session_id', $data) && null !== $data['session_id']) {
            $object->setSessionId($data['session_id']);
        } elseif (\array_key_exists('session_id', $data) && null === $data['session_id']) {
            $object->setSessionId(null);
        }
        if (\array_key_exists('table_name', $data) && null !== $data['table_name']) {
            $object->setTableName($data['table_name']);
        } elseif (\array_key_exists('table_name', $data) && null === $data['table_name']) {
            $object->setTableName(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('timeout', $data) && null !== $data['timeout']) {
            $object->setTimeout($data['timeout']);
        } elseif (\array_key_exists('timeout', $data) && null === $data['timeout']) {
            $object->setTimeout(null);
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
        if (null !== $object->getLockKey()) {
            $data['lock_key'] = $object->getLockKey();
        }
        if (null !== $object->getSessionId()) {
            $data['session_id'] = $object->getSessionId();
        }
        if (null !== $object->getTableName()) {
            $data['table_name'] = $object->getTableName();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if (null !== $object->getTimeout()) {
            $data['timeout'] = $object->getTimeout();
        }

        return $data;
    }
}
