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

namespace CatchE\Api\Generator\Parameter;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Generator\Parameter\BodyParameterGenerator as ParentBodyParameterGenerator;
use Jane\Component\OpenApi2\Guesser\GuessClass;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use PhpParser\Node;
use PhpParser\Parser;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class BodyParameterGenerator extends ParentBodyParameterGenerator
{
    /** @var GuessClass */
    private $guessClass;

    public function __construct(Parser $parser, DenormalizerInterface $denormalizer)
    {
        parent::__construct($parser, $denormalizer);

        $this->guessClass = new GuessClass(Schema::class, $denormalizer);
    }

    /**
     * {@inheritdoc}
     *
     * @param BodyParameter $parameter
     */
    public function generateMethodParameter($parameter, Context $context, string $reference): ?Node\Param
    {
        $name = $this->getInflector()->camelize($parameter->getName());

        list($class, $array) = $this->getClass($parameter, $context, $reference);
        $paramType = 1 === \count($class) ? $class[0] : null;

        if ($array) {
            $paramType = 'array';
        }

        return new Node\Param(new Node\Expr\Variable($name), null, null === $paramType ? $paramType : new Node\Name($paramType));
    }

    /**
     * {@inheritdoc}
     *
     * @param BodyParameter $parameter
     */
    public function generateMethodDocParameter($parameter, Context $context, string $reference): string
    {
        list($class, $array) = $this->getClass($parameter, $context, $reference);

        return sprintf(' * @param %s $%s %s', implode('|', $class), $this->getInflector()->camelize($parameter->getName()), $parameter->getDescription() ?: '');
    }

    protected function getClass(BodyParameter $parameter, Context $context, string $reference): array
    {
        $resolvedSchema = null;
        $jsonReference = null;
        $array = false;
        $schema = $parameter->getSchema();

        if ($schema instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->guessClass->resolve($schema, Schema::class);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType() && $schema->getItems() instanceof Reference) {
            list($jsonReference, $resolvedSchema) = $this->guessClass->resolve($schema->getItems(), Schema::class);
            $array = true;
        }

        if (null === $resolvedSchema) {
            if ($context->getRegistry()->hasClass($reference)) {
                return [['\\' . $context->getRegistry()->getSchema($reference)->getNamespace() . '\\Model\\' . $context->getRegistry()->getClass($reference)->getName()], false];
            }

            return [$this->convertParameterType($schema->getType(), $schema->getFormat()), null];
        }

        $class = $context->getRegistry()->getClass($jsonReference);

        // Happens when reference resolve to a none object
        if (null === $class) {
            return [$this->convertParameterType($resolvedSchema->getType(), $resolvedSchema->getFormat()), null];
        }

        $class = '\\' . $context->getRegistry()->getSchema($jsonReference)->getNamespace() . '\\Model\\' . $class->getName();

        if ($array) {
            $class .= '[]';
        }

        return [[$class], $array];
    }

    private function convertParameterType(string $type, ?string $format = null): array
    {
        if (null === $format) {
            $format = 'default';
        }

        $convertArray = [
            'string' => [
                'default' => ['string'],
                'binary' => ['string', 'resource', '\\' . StreamInterface::class],
            ],
            'number' => [
                'default' => ['float'],
            ],
            'boolean' => [
                'default' => ['bool'],
            ],
            'integer' => [
                'default' => ['int'],
            ],
            'array' => [
                'default' => ['array'],
            ],
            'object' => [
                'default' => ['array'],
            ],
            'file' => [
                'default' => ['string', 'resource', '\\' . StreamInterface::class],
            ],
        ];

        if (! isset($convertArray[$type]) || ! isset($convertArray[$type][$format])) {
            return ['mixed'];
        }

        return $convertArray[$type][$format];
    }
}
