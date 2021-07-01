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

class PackageItemCyclesGet
{
	/**
	 * @var string|null
	 */
	protected $packageItemId;
	/**
	 * @var string|null
	 */
	protected $payCycleId;
	/**
	 * @var \DateTime|null
	 */
	protected $startDate;
	/**
	 * @var string|null
	 */
	protected $payCycleType;
	/**
	 * @var string|null
	 */
	protected $compressFlag;
	/**
	 * @var string|null
	 */
	protected $inertiaFlag;
	/**
	 * Cycles.
	 *
	 * @var int|null
	 */
	protected $cycles;

	public function getPackageItemId(): ?string
	{
		return $this->packageItemId;
	}

	public function setPackageItemId(?string $packageItemId): self
	{
		$this->packageItemId = $packageItemId;

		return $this;
	}

	public function getPayCycleId(): ?string
	{
		return $this->payCycleId;
	}

	public function setPayCycleId(?string $payCycleId): self
	{
		$this->payCycleId = $payCycleId;

		return $this;
	}

	public function getStartDate(): ?\DateTime
	{
		return $this->startDate;
	}

	public function setStartDate(?\DateTime $startDate): self
	{
		$this->startDate = $startDate;

		return $this;
	}

	public function getPayCycleType(): ?string
	{
		return $this->payCycleType;
	}

	public function setPayCycleType(?string $payCycleType): self
	{
		$this->payCycleType = $payCycleType;

		return $this;
	}

	public function getCompressFlag(): ?string
	{
		return $this->compressFlag;
	}

	public function setCompressFlag(?string $compressFlag): self
	{
		$this->compressFlag = $compressFlag;

		return $this;
	}

	public function getInertiaFlag(): ?string
	{
		return $this->inertiaFlag;
	}

	public function setInertiaFlag(?string $inertiaFlag): self
	{
		$this->inertiaFlag = $inertiaFlag;

		return $this;
	}

	/**
	 * Cycles.
	 */
	public function getCycles(): ?int
	{
		return $this->cycles;
	}

	/**
	 * Cycles.
	 */
	public function setCycles(?int $cycles): self
	{
		$this->cycles = $cycles;

		return $this;
	}
}
