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

class UpdateDriverBankAccountsMultipleItem
{
	/**
	 * Driver bank account id.
	 *
	 * @var string|null
	 */
	protected $driverBankAccountId;
	/**
	 * (Optional) Account name.
	 *
	 * @var string|null
	 */
	protected $accountName;
	/**
	 * (Optional) Claims default flag. If 'yes' other bank accounts for the associated driver will be set to 'no'.
	 *
	 * @var string|null
	 */
	protected $claimsDefaultFlag;
	/**
	 * (Optional) Status flag.
	 *
	 * @var string|null
	 */
	protected $statusFlag;

	/**
	 * Driver bank account id.
	 */
	public function getDriverBankAccountId(): ?string
	{
		return $this->driverBankAccountId;
	}

	/**
	 * Driver bank account id.
	 */
	public function setDriverBankAccountId(?string $driverBankAccountId): self
	{
		$this->driverBankAccountId = $driverBankAccountId;

		return $this;
	}

	/**
	 * (Optional) Account name.
	 */
	public function getAccountName(): ?string
	{
		return $this->accountName;
	}

	/**
	 * (Optional) Account name.
	 */
	public function setAccountName(?string $accountName): self
	{
		$this->accountName = $accountName;

		return $this;
	}

	/**
	 * (Optional) Claims default flag. If 'yes' other bank accounts for the associated driver will be set to 'no'.
	 */
	public function getClaimsDefaultFlag(): ?string
	{
		return $this->claimsDefaultFlag;
	}

	/**
	 * (Optional) Claims default flag. If 'yes' other bank accounts for the associated driver will be set to 'no'.
	 */
	public function setClaimsDefaultFlag(?string $claimsDefaultFlag): self
	{
		$this->claimsDefaultFlag = $claimsDefaultFlag;

		return $this;
	}

	/**
	 * (Optional) Status flag.
	 */
	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	/**
	 * (Optional) Status flag.
	 */
	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}
}
