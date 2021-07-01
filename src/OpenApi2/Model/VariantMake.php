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

class VariantMake
{
	/**
	 * Make Id.
	 *
	 * @var string|null
	 */
	protected $makeId;
	/**
	 * Make Code.
	 *
	 * @var string|null
	 */
	protected $makeCode;
	/**
	 * Name.
	 *
	 * @var string|null
	 */
	protected $name;
	/**
	 * Make type.
	 *
	 * @var string|null
	 */
	protected $makeType;
	/**
	 * @var string|null
	 */
	protected $dataSourceId;
	/**
	 * @var string|null
	 */
	protected $statusFlag;

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
	 * Make Code.
	 */
	public function getMakeCode(): ?string
	{
		return $this->makeCode;
	}

	/**
	 * Make Code.
	 */
	public function setMakeCode(?string $makeCode): self
	{
		$this->makeCode = $makeCode;

		return $this;
	}

	/**
	 * Name.
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * Name.
	 */
	public function setName(?string $name): self
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Make type.
	 */
	public function getMakeType(): ?string
	{
		return $this->makeType;
	}

	/**
	 * Make type.
	 */
	public function setMakeType(?string $makeType): self
	{
		$this->makeType = $makeType;

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
