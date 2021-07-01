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

class PackageItemPayCycle
{
	/**
	 * Package Item Pay Cycle Id.
	 *
	 * @var string|null
	 */
	protected $packageItemPayCycleId;
	/**
	 * Package Item Id.
	 *
	 * @var string|null
	 */
	protected $packageItemId;
	/**
	 * Package Cycle Type.
	 *
	 * @var string|null
	 */
	protected $payCycleType;
	/**
	 * Pay Cycle Id.
	 *
	 * @var string|null
	 */
	protected $payCycleId;
	/**
	 * Pay Cycle Code.
	 *
	 * @var string|null
	 */
	protected $payCycleCode;
	/**
	 * Pay Cycles Per Year.
	 *
	 * @var float|null
	 */
	protected $payCyclesPerYear;
	/**
	 * Status Flag.
	 *
	 * @var string|null
	 */
	protected $statusFlag;
	/**
	 * @var PackageItemPayCycleEmbedded|null
	 */
	protected $embedded;

	/**
	 * Package Item Pay Cycle Id.
	 */
	public function getPackageItemPayCycleId(): ?string
	{
		return $this->packageItemPayCycleId;
	}

	/**
	 * Package Item Pay Cycle Id.
	 */
	public function setPackageItemPayCycleId(?string $packageItemPayCycleId): self
	{
		$this->packageItemPayCycleId = $packageItemPayCycleId;

		return $this;
	}

	/**
	 * Package Item Id.
	 */
	public function getPackageItemId(): ?string
	{
		return $this->packageItemId;
	}

	/**
	 * Package Item Id.
	 */
	public function setPackageItemId(?string $packageItemId): self
	{
		$this->packageItemId = $packageItemId;

		return $this;
	}

	/**
	 * Package Cycle Type.
	 */
	public function getPayCycleType(): ?string
	{
		return $this->payCycleType;
	}

	/**
	 * Package Cycle Type.
	 */
	public function setPayCycleType(?string $payCycleType): self
	{
		$this->payCycleType = $payCycleType;

		return $this;
	}

	/**
	 * Pay Cycle Id.
	 */
	public function getPayCycleId(): ?string
	{
		return $this->payCycleId;
	}

	/**
	 * Pay Cycle Id.
	 */
	public function setPayCycleId(?string $payCycleId): self
	{
		$this->payCycleId = $payCycleId;

		return $this;
	}

	/**
	 * Pay Cycle Code.
	 */
	public function getPayCycleCode(): ?string
	{
		return $this->payCycleCode;
	}

	/**
	 * Pay Cycle Code.
	 */
	public function setPayCycleCode(?string $payCycleCode): self
	{
		$this->payCycleCode = $payCycleCode;

		return $this;
	}

	/**
	 * Pay Cycles Per Year.
	 */
	public function getPayCyclesPerYear(): ?float
	{
		return $this->payCyclesPerYear;
	}

	/**
	 * Pay Cycles Per Year.
	 */
	public function setPayCyclesPerYear(?float $payCyclesPerYear): self
	{
		$this->payCyclesPerYear = $payCyclesPerYear;

		return $this;
	}

	/**
	 * Status Flag.
	 */
	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	/**
	 * Status Flag.
	 */
	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}

	public function getEmbedded(): ?PackageItemPayCycleEmbedded
	{
		return $this->embedded;
	}

	public function setEmbedded(?PackageItemPayCycleEmbedded $embedded): self
	{
		$this->embedded = $embedded;

		return $this;
	}
}
