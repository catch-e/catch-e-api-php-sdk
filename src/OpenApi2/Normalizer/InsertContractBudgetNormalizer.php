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

class InsertContractBudgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return 'CatchE\\OpenApi2\\Model\\InsertContractBudget' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'CatchE\\OpenApi2\\Model\\InsertContractBudget' === get_class($data);
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
        $object = new \CatchE\OpenApi2\Model\InsertContractBudget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contract_id', $data) && null !== $data['contract_id']) {
            $object->setContractId($data['contract_id']);
        } elseif (\array_key_exists('contract_id', $data) && null === $data['contract_id']) {
            $object->setContractId(null);
        }
        if (\array_key_exists('billing_period', $data) && null !== $data['billing_period']) {
            $object->setBillingPeriod($data['billing_period']);
        } elseif (\array_key_exists('billing_period', $data) && null === $data['billing_period']) {
            $object->setBillingPeriod(null);
        }
        if (\array_key_exists('payment_method', $data) && null !== $data['payment_method']) {
            $object->setPaymentMethod($data['payment_method']);
        } elseif (\array_key_exists('payment_method', $data) && null === $data['payment_method']) {
            $object->setPaymentMethod(null);
        }
        if (\array_key_exists('billing_date', $data) && null !== $data['billing_date']) {
            $object->setBillingDate(\DateTime::createFromFormat('Y-m-d', $data['billing_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('billing_date', $data) && null === $data['billing_date']) {
            $object->setBillingDate(null);
        }
        if (\array_key_exists('budgets', $data) && null !== $data['budgets']) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['budgets'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'CatchE\\OpenApi2\\Model\\InsertContractBudgetBudgetsItem', 'json', $context);
            }
            $object->setBudgets($values);
        } elseif (\array_key_exists('budgets', $data) && null === $data['budgets']) {
            $object->setBudgets(null);
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
        $data['contract_id'] = $object->getContractId();
        $data['billing_period'] = $object->getBillingPeriod();
        if (null !== $object->getPaymentMethod()) {
            $data['payment_method'] = $object->getPaymentMethod();
        }
        if (null !== $object->getBillingDate()) {
            $data['billing_date'] = $object->getBillingDate()->format('Y-m-d');
        }
        if (null !== $object->getBudgets()) {
            $values = [];
            foreach ($object->getBudgets() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['budgets'] = $values;
        }

        return $data;
    }
}
