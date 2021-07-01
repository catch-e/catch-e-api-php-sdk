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

class PackageItemDefaults
{
	/**
	 * Package item default Id.
	 *
	 * @var string|null
	 */
	protected $packageItemDefaultId;
	/**
	 * Package item id.
	 *
	 * @var string|null
	 */
	protected $packageItemId;
	/**
	 * Pay cycle type default.
	 *
	 * @var string|null
	 */
	protected $payCycleTypeDefault;
	/**
	 * Total deduction default.
	 *
	 * @var float|null
	 */
	protected $totalDeductionDefault;
	/**
	 * Compress flag default.
	 *
	 * @var string|null
	 */
	protected $compressFlagDefault;
	/**
	 * Inertia flag default.
	 *
	 * @var string|null
	 */
	protected $inertiaFlagDefault;
	/**
	 * Cycles default.
	 *
	 * @var int|null
	 */
	protected $cyclesDefault;
	/**
	 * Disbursement type default.
	 *
	 * @var string|null
	 */
	protected $disbursementTypeDefault;
	/**
	 * Supplier Id default.
	 *
	 * @var string|null
	 */
	protected $supplierIdDefault;
	/**
	 * Supplier Id edit flag.
	 *
	 * @var string|null
	 */
	protected $supplierIdEditFlag;
	/**
	 * Default substantiation flag.
	 *
	 * @var string|null
	 */
	protected $substantiationFlagDefault;

	/**
	 * Package item default Id.
	 */
	public function getPackageItemDefaultId(): ?string
	{
		return $this->packageItemDefaultId;
	}

	/**
	 * Package item default Id.
	 */
	public function setPackageItemDefaultId(?string $packageItemDefaultId): self
	{
		$this->packageItemDefaultId = $packageItemDefaultId;

		return $this;
	}

	/**
	 * Package item id.
	 */
	public function getPackageItemId(): ?string
	{
		return $this->packageItemId;
	}

	/**
	 * Package item id.
	 */
	public function setPackageItemId(?string $packageItemId): self
	{
		$this->packageItemId = $packageItemId;

		return $this;
	}

	/**
	 * Pay cycle type default.
	 */
	public function getPayCycleTypeDefault(): ?string
	{
		return $this->payCycleTypeDefault;
	}

	/**
	 * Pay cycle type default.
	 */
	public function setPayCycleTypeDefault(?string $payCycleTypeDefault): self
	{
		$this->payCycleTypeDefault = $payCycleTypeDefault;

		return $this;
	}

	/**
	 * Total deduction default.
	 */
	public function getTotalDeductionDefault(): ?float
	{
		return $this->totalDeductionDefault;
	}

	/**
	 * Total deduction default.
	 */
	public function setTotalDeductionDefault(?float $totalDeductionDefault): self
	{
		$this->totalDeductionDefault = $totalDeductionDefault;

		return $this;
	}

	/**
	 * Compress flag default.
	 */
	public function getCompressFlagDefault(): ?string
	{
		return $this->compressFlagDefault;
	}

	/**
	 * Compress flag default.
	 */
	public function setCompressFlagDefault(?string $compressFlagDefault): self
	{
		$this->compressFlagDefault = $compressFlagDefault;

		return $this;
	}

	/**
	 * Inertia flag default.
	 */
	public function getInertiaFlagDefault(): ?string
	{
		return $this->inertiaFlagDefault;
	}

	/**
	 * Inertia flag default.
	 */
	public function setInertiaFlagDefault(?string $inertiaFlagDefault): self
	{
		$this->inertiaFlagDefault = $inertiaFlagDefault;

		return $this;
	}

	/**
	 * Cycles default.
	 */
	public function getCyclesDefault(): ?int
	{
		return $this->cyclesDefault;
	}

	/**
	 * Cycles default.
	 */
	public function setCyclesDefault(?int $cyclesDefault): self
	{
		$this->cyclesDefault = $cyclesDefault;

		return $this;
	}

	/**
	 * Disbursement type default.
	 */
	public function getDisbursementTypeDefault(): ?string
	{
		return $this->disbursementTypeDefault;
	}

	/**
	 * Disbursement type default.
	 */
	public function setDisbursementTypeDefault(?string $disbursementTypeDefault): self
	{
		$this->disbursementTypeDefault = $disbursementTypeDefault;

		return $this;
	}

	/**
	 * Supplier Id default.
	 */
	public function getSupplierIdDefault(): ?string
	{
		return $this->supplierIdDefault;
	}

	/**
	 * Supplier Id default.
	 */
	public function setSupplierIdDefault(?string $supplierIdDefault): self
	{
		$this->supplierIdDefault = $supplierIdDefault;

		return $this;
	}

	/**
	 * Supplier Id edit flag.
	 */
	public function getSupplierIdEditFlag(): ?string
	{
		return $this->supplierIdEditFlag;
	}

	/**
	 * Supplier Id edit flag.
	 */
	public function setSupplierIdEditFlag(?string $supplierIdEditFlag): self
	{
		$this->supplierIdEditFlag = $supplierIdEditFlag;

		return $this;
	}

	/**
	 * Default substantiation flag.
	 */
	public function getSubstantiationFlagDefault(): ?string
	{
		return $this->substantiationFlagDefault;
	}

	/**
	 * Default substantiation flag.
	 */
	public function setSubstantiationFlagDefault(?string $substantiationFlagDefault): self
	{
		$this->substantiationFlagDefault = $substantiationFlagDefault;

		return $this;
	}
}
