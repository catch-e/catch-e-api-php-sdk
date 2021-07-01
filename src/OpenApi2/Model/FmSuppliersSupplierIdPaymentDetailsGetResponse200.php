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

class FmSuppliersSupplierIdPaymentDetailsGetResponse200
{
	/**
	 * @var string|null
	 */
	protected $bpayBillerCode;
	/**
	 * @var string|null
	 */
	protected $financialInstitutionName;
	/**
	 * @var string|null
	 */
	protected $bsb;
	/**
	 * @var string|null
	 */
	protected $accountNumber;

	public function getBpayBillerCode(): ?string
	{
		return $this->bpayBillerCode;
	}

	public function setBpayBillerCode(?string $bpayBillerCode): self
	{
		$this->bpayBillerCode = $bpayBillerCode;

		return $this;
	}

	public function getFinancialInstitutionName(): ?string
	{
		return $this->financialInstitutionName;
	}

	public function setFinancialInstitutionName(?string $financialInstitutionName): self
	{
		$this->financialInstitutionName = $financialInstitutionName;

		return $this;
	}

	public function getBsb(): ?string
	{
		return $this->bsb;
	}

	public function setBsb(?string $bsb): self
	{
		$this->bsb = $bsb;

		return $this;
	}

	public function getAccountNumber(): ?string
	{
		return $this->accountNumber;
	}

	public function setAccountNumber(?string $accountNumber): self
	{
		$this->accountNumber = $accountNumber;

		return $this;
	}
}
