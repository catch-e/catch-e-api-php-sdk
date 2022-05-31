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

class AttachmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\Attachment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\Attachment' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\Attachment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attachment_id', $data) && null !== $data['attachment_id']) {
            $object->setAttachmentId($data['attachment_id']);
        } elseif (\array_key_exists('attachment_id', $data) && null === $data['attachment_id']) {
            $object->setAttachmentId(null);
        }
        if (\array_key_exists('table_name', $data) && null !== $data['table_name']) {
            $object->setTableName($data['table_name']);
        } elseif (\array_key_exists('table_name', $data) && null === $data['table_name']) {
            $object->setTableName(null);
        }
        if (\array_key_exists('record_id', $data) && null !== $data['record_id']) {
            $object->setRecordId($data['record_id']);
        } elseif (\array_key_exists('record_id', $data) && null === $data['record_id']) {
            $object->setRecordId(null);
        }
        if (\array_key_exists('filename', $data) && null !== $data['filename']) {
            $object->setFilename($data['filename']);
        } elseif (\array_key_exists('filename', $data) && null === $data['filename']) {
            $object->setFilename(null);
        }
        if (\array_key_exists('extension', $data) && null !== $data['extension']) {
            $object->setExtension($data['extension']);
        } elseif (\array_key_exists('extension', $data) && null === $data['extension']) {
            $object->setExtension(null);
        }
        if (\array_key_exists('md5', $data) && null !== $data['md5']) {
            $object->setMd5($data['md5']);
        } elseif (\array_key_exists('md5', $data) && null === $data['md5']) {
            $object->setMd5(null);
        }
        if (\array_key_exists('file_size', $data) && null !== $data['file_size']) {
            $object->setFileSize($data['file_size']);
        } elseif (\array_key_exists('file_size', $data) && null === $data['file_size']) {
            $object->setFileSize(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('user_id', $data) && null !== $data['user_id']) {
            $object->setUserId($data['user_id']);
        } elseif (\array_key_exists('user_id', $data) && null === $data['user_id']) {
            $object->setUserId(null);
        }
        if (\array_key_exists('created', $data) && null !== $data['created']) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
        } elseif (\array_key_exists('created', $data) && null === $data['created']) {
            $object->setCreated(null);
        }
        if (\array_key_exists('duplicate_check', $data) && null !== $data['duplicate_check']) {
            $object->setDuplicateCheck($data['duplicate_check']);
        } elseif (\array_key_exists('duplicate_check', $data) && null === $data['duplicate_check']) {
            $object->setDuplicateCheck(null);
        }
        if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
            $object->setStatusFlag($data['status_flag']);
        } elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
            $object->setStatusFlag(null);
        }
        if (\array_key_exists('_links', $data) && null !== $data['_links']) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'CatchE\\OpenApi2\\Model\\AttachmentLinks', 'json', $context));
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
        if (null !== $object->getAttachmentId()) {
            $data['attachment_id'] = $object->getAttachmentId();
        }
        if (null !== $object->getTableName()) {
            $data['table_name'] = $object->getTableName();
        }
        if (null !== $object->getRecordId()) {
            $data['record_id'] = $object->getRecordId();
        }
        if (null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        if (null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        if (null !== $object->getMd5()) {
            $data['md5'] = $object->getMd5();
        }
        if (null !== $object->getFileSize()) {
            $data['file_size'] = $object->getFileSize();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDuplicateCheck()) {
            $data['duplicate_check'] = $object->getDuplicateCheck();
        }
        if (null !== $object->getStatusFlag()) {
            $data['status_flag'] = $object->getStatusFlag();
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }
}
