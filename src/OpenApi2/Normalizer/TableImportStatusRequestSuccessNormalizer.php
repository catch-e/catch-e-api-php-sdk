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

class TableImportStatusRequestSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\TableImportStatusRequestSuccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\TableImportStatusRequestSuccess' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\TableImportStatusRequestSuccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('table_import_id', $data) && null !== $data['table_import_id']) {
            $object->setTableImportId($data['table_import_id']);
        } elseif (\array_key_exists('table_import_id', $data) && null === $data['table_import_id']) {
            $object->setTableImportId(null);
        }
        if (\array_key_exists('table_name', $data) && null !== $data['table_name']) {
            $object->setTableName($data['table_name']);
        } elseif (\array_key_exists('table_name', $data) && null === $data['table_name']) {
            $object->setTableName(null);
        }
        if (\array_key_exists('sha256_checksum', $data) && null !== $data['sha256_checksum']) {
            $object->setSha256Checksum($data['sha256_checksum']);
        } elseif (\array_key_exists('sha256_checksum', $data) && null === $data['sha256_checksum']) {
            $object->setSha256Checksum(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('rows_valid', $data) && null !== $data['rows_valid']) {
            $object->setRowsValid($data['rows_valid']);
        } elseif (\array_key_exists('rows_valid', $data) && null === $data['rows_valid']) {
            $object->setRowsValid(null);
        }
        if (\array_key_exists('rows_invalid', $data) && null !== $data['rows_invalid']) {
            $object->setRowsInvalid($data['rows_invalid']);
        } elseif (\array_key_exists('rows_invalid', $data) && null === $data['rows_invalid']) {
            $object->setRowsInvalid(null);
        }
        if (\array_key_exists('rows_imported', $data) && null !== $data['rows_imported']) {
            $object->setRowsImported($data['rows_imported']);
        } elseif (\array_key_exists('rows_imported', $data) && null === $data['rows_imported']) {
            $object->setRowsImported(null);
        }
        if (\array_key_exists('rows_updated', $data) && null !== $data['rows_updated']) {
            $object->setRowsUpdated($data['rows_updated']);
        } elseif (\array_key_exists('rows_updated', $data) && null === $data['rows_updated']) {
            $object->setRowsUpdated(null);
        }
        if (\array_key_exists('rows_inserted', $data) && null !== $data['rows_inserted']) {
            $object->setRowsInserted($data['rows_inserted']);
        } elseif (\array_key_exists('rows_inserted', $data) && null === $data['rows_inserted']) {
            $object->setRowsInserted(null);
        }
        if (\array_key_exists('error_report_uri', $data) && null !== $data['error_report_uri']) {
            $object->setErrorReportUri($data['error_report_uri']);
        } elseif (\array_key_exists('error_report_uri', $data) && null === $data['error_report_uri']) {
            $object->setErrorReportUri(null);
        }
        if (\array_key_exists('exception', $data) && null !== $data['exception']) {
            $object->setException($data['exception']);
        } elseif (\array_key_exists('exception', $data) && null === $data['exception']) {
            $object->setException(null);
        }
        if (\array_key_exists('stopped_on_row', $data) && null !== $data['stopped_on_row']) {
            $object->setStoppedOnRow($data['stopped_on_row']);
        } elseif (\array_key_exists('stopped_on_row', $data) && null === $data['stopped_on_row']) {
            $object->setStoppedOnRow(null);
        }
        if (\array_key_exists('locking_users', $data) && null !== $data['locking_users']) {
            $values = [];
            foreach ($data['locking_users'] as $value) {
                $values[] = $value;
            }
            $object->setLockingUsers($values);
        } elseif (\array_key_exists('locking_users', $data) && null === $data['locking_users']) {
            $object->setLockingUsers(null);
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
        if (null !== $object->getTableImportId()) {
            $data['table_import_id'] = $object->getTableImportId();
        }
        if (null !== $object->getTableName()) {
            $data['table_name'] = $object->getTableName();
        }
        if (null !== $object->getSha256Checksum()) {
            $data['sha256_checksum'] = $object->getSha256Checksum();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getRowsValid()) {
            $data['rows_valid'] = $object->getRowsValid();
        }
        if (null !== $object->getRowsInvalid()) {
            $data['rows_invalid'] = $object->getRowsInvalid();
        }
        if (null !== $object->getRowsImported()) {
            $data['rows_imported'] = $object->getRowsImported();
        }
        if (null !== $object->getRowsUpdated()) {
            $data['rows_updated'] = $object->getRowsUpdated();
        }
        if (null !== $object->getRowsInserted()) {
            $data['rows_inserted'] = $object->getRowsInserted();
        }
        if (null !== $object->getErrorReportUri()) {
            $data['error_report_uri'] = $object->getErrorReportUri();
        }
        if (null !== $object->getException()) {
            $data['exception'] = $object->getException();
        }
        if (null !== $object->getStoppedOnRow()) {
            $data['stopped_on_row'] = $object->getStoppedOnRow();
        }
        if (null !== $object->getLockingUsers()) {
            $values = [];
            foreach ($object->getLockingUsers() as $value) {
                $values[] = $value;
            }
            $data['locking_users'] = $values;
        }

        return $data;
    }
}
