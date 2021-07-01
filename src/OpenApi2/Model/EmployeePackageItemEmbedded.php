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

class EmployeePackageItemEmbedded
{
	/**
	 * @var SalaryPackagingDisbursementCycle|null
	 */
	protected $disbursementCycle;
	/**
	 * @var Driver|null
	 */
	protected $driver;
	/**
	 * @var DriverBankAccount|null
	 */
	protected $driverBankAccount;
	/**
	 * @var PackageItem|null
	 */
	protected $packageItem;
	/**
	 * @var Supplier|null
	 */
	protected $supplier;

	public function getDisbursementCycle(): ?SalaryPackagingDisbursementCycle
	{
		return $this->disbursementCycle;
	}

	public function setDisbursementCycle(?SalaryPackagingDisbursementCycle $disbursementCycle): self
	{
		$this->disbursementCycle = $disbursementCycle;

		return $this;
	}

	public function getDriver(): ?Driver
	{
		return $this->driver;
	}

	public function setDriver(?Driver $driver): self
	{
		$this->driver = $driver;

		return $this;
	}

	public function getDriverBankAccount(): ?DriverBankAccount
	{
		return $this->driverBankAccount;
	}

	public function setDriverBankAccount(?DriverBankAccount $driverBankAccount): self
	{
		$this->driverBankAccount = $driverBankAccount;

		return $this;
	}

	public function getPackageItem(): ?PackageItem
	{
		return $this->packageItem;
	}

	public function setPackageItem(?PackageItem $packageItem): self
	{
		$this->packageItem = $packageItem;

		return $this;
	}

	public function getSupplier(): ?Supplier
	{
		return $this->supplier;
	}

	public function setSupplier(?Supplier $supplier): self
	{
		$this->supplier = $supplier;

		return $this;
	}
}
