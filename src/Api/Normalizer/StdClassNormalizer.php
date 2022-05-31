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

namespace CatchE\Api\Normalizer;

use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StdClassNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'stdClass' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'stdClass' === get_class($data);
    }

    /**
     * @param array<mixed> $context
     * @param mixed        $data
     * @param mixed        $class
     * @param null|mixed   $format
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return (object) $data;
    }

    /**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param mixed        $object  Object to normalize
     * @param string       $format  Format the normalization result will be encoded as
     * @param array<mixed> $context Context options for the normalizer
     *
     * @throws InvalidArgumentException   Occurs when the object given is not a supported type for the normalizer
     * @throws CircularReferenceException Occurs when the normalizer detects a circular reference when no circular
     *                                    reference handler can fix it
     * @throws LogicException             Occurs when the normalizer is not called in an expected context
     * @throws ExceptionInterface         Occurs for all the other cases of errors
     *
     * @return null|array<mixed>
     */
    public function normalize($object, $format = null, array $context = [])
    {
        return get_object_vars($object);
    }
}
