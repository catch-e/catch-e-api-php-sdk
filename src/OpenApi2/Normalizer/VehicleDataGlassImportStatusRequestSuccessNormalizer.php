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

class VehicleDataGlassImportStatusRequestSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\VehicleDataGlassImportStatusRequestSuccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\VehicleDataGlassImportStatusRequestSuccess' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\VehicleDataGlassImportStatusRequestSuccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('import_id', $data) && null !== $data['import_id']) {
            $object->setImportId($data['import_id']);
        } elseif (\array_key_exists('import_id', $data) && null === $data['import_id']) {
            $object->setImportId(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('data_filename', $data) && null !== $data['data_filename']) {
            $object->setDataFilename($data['data_filename']);
        } elseif (\array_key_exists('data_filename', $data) && null === $data['data_filename']) {
            $object->setDataFilename(null);
        }
        if (\array_key_exists('data_file_created', $data) && null !== $data['data_file_created']) {
            $object->setDataFileCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['data_file_created']));
        } elseif (\array_key_exists('data_file_created', $data) && null === $data['data_file_created']) {
            $object->setDataFileCreated(null);
        }
        if (\array_key_exists('data_size', $data) && null !== $data['data_size']) {
            $object->setDataSize($data['data_size']);
        } elseif (\array_key_exists('data_size', $data) && null === $data['data_size']) {
            $object->setDataSize(null);
        }
        if (\array_key_exists('data_md5', $data) && null !== $data['data_md5']) {
            $object->setDataMd5($data['data_md5']);
        } elseif (\array_key_exists('data_md5', $data) && null === $data['data_md5']) {
            $object->setDataMd5(null);
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
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
        if (null !== $object->getImportId()) {
            $data['import_id'] = $object->getImportId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getDataFilename()) {
            $data['data_filename'] = $object->getDataFilename();
        }
        if (null !== $object->getDataFileCreated()) {
            $data['data_file_created'] = $object->getDataFileCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDataSize()) {
            $data['data_size'] = $object->getDataSize();
        }
        if (null !== $object->getDataMd5()) {
            $data['data_md5'] = $object->getDataMd5();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }

        return $data;
    }
}
