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

class DriverAsset
{
	/**
	 * @var string|null
	 */
	protected $driverAssetId;
	/**
	 * @var string|null
	 */
	protected $driverId;
	/**
	 * @var string|null
	 */
	protected $financeAssetTypeId;
	/**
	 * @var float|null
	 */
	protected $amount;
	/**
	 * @var string|null
	 */
	protected $ownership;
	/**
	 * @var string|null
	 */
	protected $description;
	/**
	 * @var string|null
	 */
	protected $financeAssetTypeName;

	public function getDriverAssetId(): ?string
	{
		return $this->driverAssetId;
	}

	public function setDriverAssetId(?string $driverAssetId): self
	{
		$this->driverAssetId = $driverAssetId;

		return $this;
	}

	public function getDriverId(): ?string
	{
		return $this->driverId;
	}

	public function setDriverId(?string $driverId): self
	{
		$this->driverId = $driverId;

		return $this;
	}

	public function getFinanceAssetTypeId(): ?string
	{
		return $this->financeAssetTypeId;
	}

	public function setFinanceAssetTypeId(?string $financeAssetTypeId): self
	{
		$this->financeAssetTypeId = $financeAssetTypeId;

		return $this;
	}

	public function getAmount(): ?float
	{
		return $this->amount;
	}

	public function setAmount(?float $amount): self
	{
		$this->amount = $amount;

		return $this;
	}

	public function getOwnership(): ?string
	{
		return $this->ownership;
	}

	public function setOwnership(?string $ownership): self
	{
		$this->ownership = $ownership;

		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}

	public function getFinanceAssetTypeName(): ?string
	{
		return $this->financeAssetTypeName;
	}

	public function setFinanceAssetTypeName(?string $financeAssetTypeName): self
	{
		$this->financeAssetTypeName = $financeAssetTypeName;

		return $this;
	}
}
