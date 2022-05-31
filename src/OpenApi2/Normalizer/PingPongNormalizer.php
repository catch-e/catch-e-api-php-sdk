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

class PingPongNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\PingPong' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\PingPong' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\PingPong();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('version', $data) && null !== $data['version']) {
            $object->setVersion($data['version']);
        } elseif (\array_key_exists('version', $data) && null === $data['version']) {
            $object->setVersion(null);
        }
        if (\array_key_exists('ack', $data) && null !== $data['ack']) {
            $object->setAck($data['ack']);
        } elseif (\array_key_exists('ack', $data) && null === $data['ack']) {
            $object->setAck(null);
        }
        if (\array_key_exists('authorizedName', $data) && null !== $data['authorizedName']) {
            $object->setAuthorizedName($data['authorizedName']);
        } elseif (\array_key_exists('authorizedName', $data) && null === $data['authorizedName']) {
            $object->setAuthorizedName(null);
        }
        if (\array_key_exists('clientId', $data) && null !== $data['clientId']) {
            $object->setClientId($data['clientId']);
        } elseif (\array_key_exists('clientId', $data) && null === $data['clientId']) {
            $object->setClientId(null);
        }
        if (\array_key_exists('environment', $data) && null !== $data['environment']) {
            $object->setEnvironment($data['environment']);
        } elseif (\array_key_exists('environment', $data) && null === $data['environment']) {
            $object->setEnvironment(null);
        }
        if (\array_key_exists('tokenExpiry', $data) && null !== $data['tokenExpiry']) {
            $object->setTokenExpiry($data['tokenExpiry']);
        } elseif (\array_key_exists('tokenExpiry', $data) && null === $data['tokenExpiry']) {
            $object->setTokenExpiry(null);
        }
        if (\array_key_exists('auditOrigin', $data) && null !== $data['auditOrigin']) {
            $object->setAuditOrigin($data['auditOrigin']);
        } elseif (\array_key_exists('auditOrigin', $data) && null === $data['auditOrigin']) {
            $object->setAuditOrigin(null);
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
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        if (null !== $object->getAck()) {
            $data['ack'] = $object->getAck();
        }
        if (null !== $object->getAuthorizedName()) {
            $data['authorizedName'] = $object->getAuthorizedName();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        if (null !== $object->getTokenExpiry()) {
            $data['tokenExpiry'] = $object->getTokenExpiry();
        }
        if (null !== $object->getAuditOrigin()) {
            $data['auditOrigin'] = $object->getAuditOrigin();
        }

        return $data;
    }
}
