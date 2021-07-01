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

class DriverLiability
{
	/**
	 * @var string|null
	 */
	protected $driverLiabilityId;
	/**
	 * @var string|null
	 */
	protected $driverId;
	/**
	 * @var string|null
	 */
	protected $financeLiabilityTypeId;
	/**
	 * @var string|null
	 */
	protected $financeLiabilityFinancierId;
	/**
	 * @var string|null
	 */
	protected $driverAssetId;
	/**
	 * @var float|null
	 */
	protected $amount;
	/**
	 * @var float|null
	 */
	protected $monthlyPaymentAmount;
	/**
	 * @var string|null
	 */
	protected $liabilityPayoutFlag;
	/**
	 * @var string|null
	 */
	protected $liabilityEndDate;
	/**
	 * @var float|null
	 */
	protected $liabilityLimitAmount;
	/**
	 * @var string|null
	 */
	protected $financeLiabilityTypeName;
	/**
	 * @var string|null
	 */
	protected $financeLiabilityFinancierName;

	public function getDriverLiabilityId(): ?string
	{
		return $this->driverLiabilityId;
	}

	public function setDriverLiabilityId(?string $driverLiabilityId): self
	{
		$this->driverLiabilityId = $driverLiabilityId;

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

	public function getFinanceLiabilityTypeId(): ?string
	{
		return $this->financeLiabilityTypeId;
	}

	public function setFinanceLiabilityTypeId(?string $financeLiabilityTypeId): self
	{
		$this->financeLiabilityTypeId = $financeLiabilityTypeId;

		return $this;
	}

	public function getFinanceLiabilityFinancierId(): ?string
	{
		return $this->financeLiabilityFinancierId;
	}

	public function setFinanceLiabilityFinancierId(?string $financeLiabilityFinancierId): self
	{
		$this->financeLiabilityFinancierId = $financeLiabilityFinancierId;

		return $this;
	}

	public function getDriverAssetId(): ?string
	{
		return $this->driverAssetId;
	}

	public function setDriverAssetId(?string $driverAssetId): self
	{
		$this->driverAssetId = $driverAssetId;

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

	public function getMonthlyPaymentAmount(): ?float
	{
		return $this->monthlyPaymentAmount;
	}

	public function setMonthlyPaymentAmount(?float $monthlyPaymentAmount): self
	{
		$this->monthlyPaymentAmount = $monthlyPaymentAmount;

		return $this;
	}

	public function getLiabilityPayoutFlag(): ?string
	{
		return $this->liabilityPayoutFlag;
	}

	public function setLiabilityPayoutFlag(?string $liabilityPayoutFlag): self
	{
		$this->liabilityPayoutFlag = $liabilityPayoutFlag;

		return $this;
	}

	public function getLiabilityEndDate(): ?string
	{
		return $this->liabilityEndDate;
	}

	public function setLiabilityEndDate(?string $liabilityEndDate): self
	{
		$this->liabilityEndDate = $liabilityEndDate;

		return $this;
	}

	public function getLiabilityLimitAmount(): ?float
	{
		return $this->liabilityLimitAmount;
	}

	public function setLiabilityLimitAmount(?float $liabilityLimitAmount): self
	{
		$this->liabilityLimitAmount = $liabilityLimitAmount;

		return $this;
	}

	public function getFinanceLiabilityTypeName(): ?string
	{
		return $this->financeLiabilityTypeName;
	}

	public function setFinanceLiabilityTypeName(?string $financeLiabilityTypeName): self
	{
		$this->financeLiabilityTypeName = $financeLiabilityTypeName;

		return $this;
	}

	public function getFinanceLiabilityFinancierName(): ?string
	{
		return $this->financeLiabilityFinancierName;
	}

	public function setFinanceLiabilityFinancierName(?string $financeLiabilityFinancierName): self
	{
		$this->financeLiabilityFinancierName = $financeLiabilityFinancierName;

		return $this;
	}
}
