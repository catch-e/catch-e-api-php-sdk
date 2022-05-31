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

namespace CatchE\OpenApi2\Model;

class BespokeField
{
    /**
     * @var null|string
     */
    protected $bespokeFieldId;
    /**
     * @var null|string
     */
    protected $tableName;
    /**
     * @var null|string
     */
    protected $fieldName;
    /**
     * @var null|string
     */
    protected $labelPosition;
    /**
     * @var null|string
     */
    protected $inputType;
    /**
     * @var null|int
     */
    protected $inputSize;
    /**
     * @var null|int
     */
    protected $inputMaxlength;
    /**
     * @var null|int
     */
    protected $inputRows;
    /**
     * @var null|int
     */
    protected $fieldOrder;
    /**
     * @var null|int
     */
    protected $columnNumber;
    /**
     * @var null|string
     */
    protected $defaultValue;
    /**
     * @var null|string
     */
    protected $validationRegularExpression;
    /**
     * @var null|string
     */
    protected $validationErrorMessage;

    public function getBespokeFieldId(): ?string
    {
        return $this->bespokeFieldId;
    }

    public function setBespokeFieldId(?string $bespokeFieldId): self
    {
        $this->bespokeFieldId = $bespokeFieldId;

        return $this;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(?string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getLabelPosition(): ?string
    {
        return $this->labelPosition;
    }

    public function setLabelPosition(?string $labelPosition): self
    {
        $this->labelPosition = $labelPosition;

        return $this;
    }

    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    public function setInputType(?string $inputType): self
    {
        $this->inputType = $inputType;

        return $this;
    }

    public function getInputSize(): ?int
    {
        return $this->inputSize;
    }

    public function setInputSize(?int $inputSize): self
    {
        $this->inputSize = $inputSize;

        return $this;
    }

    public function getInputMaxlength(): ?int
    {
        return $this->inputMaxlength;
    }

    public function setInputMaxlength(?int $inputMaxlength): self
    {
        $this->inputMaxlength = $inputMaxlength;

        return $this;
    }

    public function getInputRows(): ?int
    {
        return $this->inputRows;
    }

    public function setInputRows(?int $inputRows): self
    {
        $this->inputRows = $inputRows;

        return $this;
    }

    public function getFieldOrder(): ?int
    {
        return $this->fieldOrder;
    }

    public function setFieldOrder(?int $fieldOrder): self
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    public function getColumnNumber(): ?int
    {
        return $this->columnNumber;
    }

    public function setColumnNumber(?int $columnNumber): self
    {
        $this->columnNumber = $columnNumber;

        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function getValidationRegularExpression(): ?string
    {
        return $this->validationRegularExpression;
    }

    public function setValidationRegularExpression(?string $validationRegularExpression): self
    {
        $this->validationRegularExpression = $validationRegularExpression;

        return $this;
    }

    public function getValidationErrorMessage(): ?string
    {
        return $this->validationErrorMessage;
    }

    public function setValidationErrorMessage(?string $validationErrorMessage): self
    {
        $this->validationErrorMessage = $validationErrorMessage;

        return $this;
    }
}
