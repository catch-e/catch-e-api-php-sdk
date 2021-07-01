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

class ClientPackagingDefaultsSet
{
	/**
	 * @var string|null
	 */
	protected $bankAccountEnabledFlag = 'yes';
	/**
	 * Financial Institution.
	 *
	 * @var string|null
	 */
	protected $financialInstitutionId;
	/**
	 * Bank Account Name.
	 *
	 * @var string|null
	 */
	protected $bankAccountName;
	/**
	 * Abbreviated Bank Account Name.
	 *
	 * @var string|null
	 */
	protected $bankAccountNameShort;
	/**
	 * Bank APCA (BSB).
	 *
	 * @var string|null
	 */
	protected $apcaNumber;
	/**
	 * Disbursements (ABA) Description.
	 *
	 * @var string|null
	 */
	protected $abaDescription;
	/**
	 * Add balancing row to Disbursements (ABA) files.
	 *
	 * @var string|null
	 */
	protected $abaSelfBalancingFlag = 'yes';

	public function getBankAccountEnabledFlag(): ?string
	{
		return $this->bankAccountEnabledFlag;
	}

	public function setBankAccountEnabledFlag(?string $bankAccountEnabledFlag): self
	{
		$this->bankAccountEnabledFlag = $bankAccountEnabledFlag;

		return $this;
	}

	/**
	 * Financial Institution.
	 */
	public function getFinancialInstitutionId(): ?string
	{
		return $this->financialInstitutionId;
	}

	/**
	 * Financial Institution.
	 */
	public function setFinancialInstitutionId(?string $financialInstitutionId): self
	{
		$this->financialInstitutionId = $financialInstitutionId;

		return $this;
	}

	/**
	 * Bank Account Name.
	 */
	public function getBankAccountName(): ?string
	{
		return $this->bankAccountName;
	}

	/**
	 * Bank Account Name.
	 */
	public function setBankAccountName(?string $bankAccountName): self
	{
		$this->bankAccountName = $bankAccountName;

		return $this;
	}

	/**
	 * Abbreviated Bank Account Name.
	 */
	public function getBankAccountNameShort(): ?string
	{
		return $this->bankAccountNameShort;
	}

	/**
	 * Abbreviated Bank Account Name.
	 */
	public function setBankAccountNameShort(?string $bankAccountNameShort): self
	{
		$this->bankAccountNameShort = $bankAccountNameShort;

		return $this;
	}

	/**
	 * Bank APCA (BSB).
	 */
	public function getApcaNumber(): ?string
	{
		return $this->apcaNumber;
	}

	/**
	 * Bank APCA (BSB).
	 */
	public function setApcaNumber(?string $apcaNumber): self
	{
		$this->apcaNumber = $apcaNumber;

		return $this;
	}

	/**
	 * Disbursements (ABA) Description.
	 */
	public function getAbaDescription(): ?string
	{
		return $this->abaDescription;
	}

	/**
	 * Disbursements (ABA) Description.
	 */
	public function setAbaDescription(?string $abaDescription): self
	{
		$this->abaDescription = $abaDescription;

		return $this;
	}

	/**
	 * Add balancing row to Disbursements (ABA) files.
	 */
	public function getAbaSelfBalancingFlag(): ?string
	{
		return $this->abaSelfBalancingFlag;
	}

	/**
	 * Add balancing row to Disbursements (ABA) files.
	 */
	public function setAbaSelfBalancingFlag(?string $abaSelfBalancingFlag): self
	{
		$this->abaSelfBalancingFlag = $abaSelfBalancingFlag;

		return $this;
	}
}
