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

class BespokeFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\BespokeField' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\BespokeField' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\BespokeField();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bespoke_field_id', $data) && null !== $data['bespoke_field_id']) {
            $object->setBespokeFieldId($data['bespoke_field_id']);
        } elseif (\array_key_exists('bespoke_field_id', $data) && null === $data['bespoke_field_id']) {
            $object->setBespokeFieldId(null);
        }
        if (\array_key_exists('table_name', $data) && null !== $data['table_name']) {
            $object->setTableName($data['table_name']);
        } elseif (\array_key_exists('table_name', $data) && null === $data['table_name']) {
            $object->setTableName(null);
        }
        if (\array_key_exists('field_name', $data) && null !== $data['field_name']) {
            $object->setFieldName($data['field_name']);
        } elseif (\array_key_exists('field_name', $data) && null === $data['field_name']) {
            $object->setFieldName(null);
        }
        if (\array_key_exists('label_position', $data) && null !== $data['label_position']) {
            $object->setLabelPosition($data['label_position']);
        } elseif (\array_key_exists('label_position', $data) && null === $data['label_position']) {
            $object->setLabelPosition(null);
        }
        if (\array_key_exists('input_type', $data) && null !== $data['input_type']) {
            $object->setInputType($data['input_type']);
        } elseif (\array_key_exists('input_type', $data) && null === $data['input_type']) {
            $object->setInputType(null);
        }
        if (\array_key_exists('input_size', $data) && null !== $data['input_size']) {
            $object->setInputSize($data['input_size']);
        } elseif (\array_key_exists('input_size', $data) && null === $data['input_size']) {
            $object->setInputSize(null);
        }
        if (\array_key_exists('input_maxlength', $data) && null !== $data['input_maxlength']) {
            $object->setInputMaxlength($data['input_maxlength']);
        } elseif (\array_key_exists('input_maxlength', $data) && null === $data['input_maxlength']) {
            $object->setInputMaxlength(null);
        }
        if (\array_key_exists('input_rows', $data) && null !== $data['input_rows']) {
            $object->setInputRows($data['input_rows']);
        } elseif (\array_key_exists('input_rows', $data) && null === $data['input_rows']) {
            $object->setInputRows(null);
        }
        if (\array_key_exists('field_order', $data) && null !== $data['field_order']) {
            $object->setFieldOrder($data['field_order']);
        } elseif (\array_key_exists('field_order', $data) && null === $data['field_order']) {
            $object->setFieldOrder(null);
        }
        if (\array_key_exists('column_number', $data) && null !== $data['column_number']) {
            $object->setColumnNumber($data['column_number']);
        } elseif (\array_key_exists('column_number', $data) && null === $data['column_number']) {
            $object->setColumnNumber(null);
        }
        if (\array_key_exists('default_value', $data) && null !== $data['default_value']) {
            $object->setDefaultValue($data['default_value']);
        } elseif (\array_key_exists('default_value', $data) && null === $data['default_value']) {
            $object->setDefaultValue(null);
        }
        if (\array_key_exists('validation_regular_expression', $data) && null !== $data['validation_regular_expression']) {
            $object->setValidationRegularExpression($data['validation_regular_expression']);
        } elseif (\array_key_exists('validation_regular_expression', $data) && null === $data['validation_regular_expression']) {
            $object->setValidationRegularExpression(null);
        }
        if (\array_key_exists('validation_error_message', $data) && null !== $data['validation_error_message']) {
            $object->setValidationErrorMessage($data['validation_error_message']);
        } elseif (\array_key_exists('validation_error_message', $data) && null === $data['validation_error_message']) {
            $object->setValidationErrorMessage(null);
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
        if (null !== $object->getBespokeFieldId()) {
            $data['bespoke_field_id'] = $object->getBespokeFieldId();
        }
        if (null !== $object->getTableName()) {
            $data['table_name'] = $object->getTableName();
        }
        if (null !== $object->getFieldName()) {
            $data['field_name'] = $object->getFieldName();
        }
        if (null !== $object->getLabelPosition()) {
            $data['label_position'] = $object->getLabelPosition();
        }
        if (null !== $object->getInputType()) {
            $data['input_type'] = $object->getInputType();
        }
        if (null !== $object->getInputSize()) {
            $data['input_size'] = $object->getInputSize();
        }
        if (null !== $object->getInputMaxlength()) {
            $data['input_maxlength'] = $object->getInputMaxlength();
        }
        if (null !== $object->getInputRows()) {
            $data['input_rows'] = $object->getInputRows();
        }
        if (null !== $object->getFieldOrder()) {
            $data['field_order'] = $object->getFieldOrder();
        }
        if (null !== $object->getColumnNumber()) {
            $data['column_number'] = $object->getColumnNumber();
        }
        if (null !== $object->getDefaultValue()) {
            $data['default_value'] = $object->getDefaultValue();
        }
        if (null !== $object->getValidationRegularExpression()) {
            $data['validation_regular_expression'] = $object->getValidationRegularExpression();
        }
        if (null !== $object->getValidationErrorMessage()) {
            $data['validation_error_message'] = $object->getValidationErrorMessage();
        }

        return $data;
    }
}
