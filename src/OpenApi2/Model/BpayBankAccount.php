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

class BpayBankAccount
{
	/**
	 * @var string|null
	 */
	protected $bankAccountBpayMappingId;
	/**
	 * @var string|null
	 */
	protected $bankAccountId;
	/**
	 * @var string|null
	 */
	protected $accountName;
	/**
	 * @var string|null
	 */
	protected $accountNameShort;

	public function getBankAccountBpayMappingId(): ?string
	{
		return $this->bankAccountBpayMappingId;
	}

	public function setBankAccountBpayMappingId(?string $bankAccountBpayMappingId): self
	{
		$this->bankAccountBpayMappingId = $bankAccountBpayMappingId;

		return $this;
	}

	public function getBankAccountId(): ?string
	{
		return $this->bankAccountId;
	}

	public function setBankAccountId(?string $bankAccountId): self
	{
		$this->bankAccountId = $bankAccountId;

		return $this;
	}

	public function getAccountName(): ?string
	{
		return $this->accountName;
	}

	public function setAccountName(?string $accountName): self
	{
		$this->accountName = $accountName;

		return $this;
	}

	public function getAccountNameShort(): ?string
	{
		return $this->accountNameShort;
	}

	public function setAccountNameShort(?string $accountNameShort): self
	{
		$this->accountNameShort = $accountNameShort;

		return $this;
	}
}
