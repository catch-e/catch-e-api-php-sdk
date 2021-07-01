<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

class FieldToValidate
{
	/**
	 * Type of field to validate.
	 *
	 * @var string|null
	 */
	protected $fieldType;
	/**
	 * Value of the field.
	 *
	 * @var string|null
	 */
	protected $fieldValue;

	/**
	 * Type of field to validate.
	Note - Phone number and mobile numbers must follow E164 pattern.
	 */
	public function getFieldType(): ?string
	{
		return $this->fieldType;
	}

	/**
	 * Type of field to validate.
	Note - Phone number and mobile numbers must follow E164 pattern.
	 */
	public function setFieldType(?string $fieldType): self
	{
		$this->fieldType = $fieldType;

		return $this;
	}

	/**
	 * Value of the field.
	 */
	public function getFieldValue(): ?string
	{
		return $this->fieldValue;
	}

	/**
	 * Value of the field.
	 */
	public function setFieldValue(?string $fieldValue): self
	{
		$this->fieldValue = $fieldValue;

		return $this;
	}
}
