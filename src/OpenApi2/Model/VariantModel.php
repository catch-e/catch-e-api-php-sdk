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

class VariantModel
{
	/**
	 * Model Id.
	 *
	 * @var string|null
	 */
	protected $modelId;
	/**
	 * Make Id.
	 *
	 * @var string|null
	 */
	protected $makeId;
	/**
	 * Model Code.
	 *
	 * @var string|null
	 */
	protected $modelCode;
	/**
	 * Model Description.
	 *
	 * @var string|null
	 */
	protected $description;
	/**
	 * @var string|null
	 */
	protected $dataSourceId;
	/**
	 * @var string|null
	 */
	protected $statusFlag;

	/**
	 * Model Id.
	 */
	public function getModelId(): ?string
	{
		return $this->modelId;
	}

	/**
	 * Model Id.
	 */
	public function setModelId(?string $modelId): self
	{
		$this->modelId = $modelId;

		return $this;
	}

	/**
	 * Make Id.
	 */
	public function getMakeId(): ?string
	{
		return $this->makeId;
	}

	/**
	 * Make Id.
	 */
	public function setMakeId(?string $makeId): self
	{
		$this->makeId = $makeId;

		return $this;
	}

	/**
	 * Model Code.
	 */
	public function getModelCode(): ?string
	{
		return $this->modelCode;
	}

	/**
	 * Model Code.
	 */
	public function setModelCode(?string $modelCode): self
	{
		$this->modelCode = $modelCode;

		return $this;
	}

	/**
	 * Model Description.
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * Model Description.
	 */
	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getDataSourceId(): ?string
	{
		return $this->dataSourceId;
	}

	public function setDataSourceId(?string $dataSourceId): self
	{
		$this->dataSourceId = $dataSourceId;

		return $this;
	}

	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}
}
