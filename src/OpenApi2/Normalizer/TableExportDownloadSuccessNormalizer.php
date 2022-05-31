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

class TableExportDownloadSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\TableExportDownloadSuccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\TableExportDownloadSuccess' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\TableExportDownloadSuccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('table_export_id', $data) && null !== $data['table_export_id']) {
            $object->setTableExportId($data['table_export_id']);
        } elseif (\array_key_exists('table_export_id', $data) && null === $data['table_export_id']) {
            $object->setTableExportId(null);
        }
        if (\array_key_exists('uri', $data) && null !== $data['uri']) {
            $object->setUri($data['uri']);
        } elseif (\array_key_exists('uri', $data) && null === $data['uri']) {
            $object->setUri(null);
        }
        if (\array_key_exists('uri_expiry', $data) && null !== $data['uri_expiry']) {
            $object->setUriExpiry(\DateTime::createFromFormat('Y-m-d', $data['uri_expiry'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('uri_expiry', $data) && null === $data['uri_expiry']) {
            $object->setUriExpiry(null);
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
        if (null !== $object->getTableExportId()) {
            $data['table_export_id'] = $object->getTableExportId();
        }
        if (null !== $object->getUri()) {
            $data['uri'] = $object->getUri();
        }
        if (null !== $object->getUriExpiry()) {
            $data['uri_expiry'] = $object->getUriExpiry()->format('Y-m-d');
        }

        return $data;
    }
}
