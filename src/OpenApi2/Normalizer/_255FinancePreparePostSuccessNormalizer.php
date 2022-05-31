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

class _255FinancePreparePostSuccessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\_255FinancePreparePostSuccess' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\_255FinancePreparePostSuccess' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\_255FinancePreparePostSuccess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('interface_export_id', $data) && null !== $data['interface_export_id']) {
            $object->setInterfaceExportId($data['interface_export_id']);
        } elseif (\array_key_exists('interface_export_id', $data) && null === $data['interface_export_id']) {
            $object->setInterfaceExportId(null);
        }
        if (\array_key_exists('processed_contracts', $data) && null !== $data['processed_contracts']) {
            $values = [];
            foreach ($data['processed_contracts'] as $value) {
                $values[] = $value;
            }
            $object->setProcessedContracts($values);
        } elseif (\array_key_exists('processed_contracts', $data) && null === $data['processed_contracts']) {
            $object->setProcessedContracts(null);
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
        if (null !== $object->getInterfaceExportId()) {
            $data['interface_export_id'] = $object->getInterfaceExportId();
        }
        if (null !== $object->getProcessedContracts()) {
            $values = [];
            foreach ($object->getProcessedContracts() as $value) {
                $values[] = $value;
            }
            $data['processed_contracts'] = $values;
        }

        return $data;
    }
}
