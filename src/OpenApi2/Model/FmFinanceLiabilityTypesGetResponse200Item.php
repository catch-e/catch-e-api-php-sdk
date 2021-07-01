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

class FmFinanceLiabilityTypesGetResponse200Item
{
	/**
	 * @var string|null
	 */
	protected $financeLiabilityTypeId;
	/**
	 * @var string|null
	 */
	protected $name;
	/**
	 * @var string|null
	 */
	protected $sequenceLinkFinanceAssetTypeId;
	/**
	 * @var string|null
	 */
	protected $financierRequiredFlag;
	/**
	 * @var string|null
	 */
	protected $payoutRequiredFlag;
	/**
	 * @var string|null
	 */
	protected $endDateRequiredFlag;
	/**
	 * @var string|null
	 */
	protected $limitAmountRequiredFlag;

	public function getFinanceLiabilityTypeId(): ?string
	{
		return $this->financeLiabilityTypeId;
	}

	public function setFinanceLiabilityTypeId(?string $financeLiabilityTypeId): self
	{
		$this->financeLiabilityTypeId = $financeLiabilityTypeId;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;

		return $this;
	}

	public function getSequenceLinkFinanceAssetTypeId(): ?string
	{
		return $this->sequenceLinkFinanceAssetTypeId;
	}

	public function setSequenceLinkFinanceAssetTypeId(?string $sequenceLinkFinanceAssetTypeId): self
	{
		$this->sequenceLinkFinanceAssetTypeId = $sequenceLinkFinanceAssetTypeId;

		return $this;
	}

	public function getFinancierRequiredFlag(): ?string
	{
		return $this->financierRequiredFlag;
	}

	public function setFinancierRequiredFlag(?string $financierRequiredFlag): self
	{
		$this->financierRequiredFlag = $financierRequiredFlag;

		return $this;
	}

	public function getPayoutRequiredFlag(): ?string
	{
		return $this->payoutRequiredFlag;
	}

	public function setPayoutRequiredFlag(?string $payoutRequiredFlag): self
	{
		$this->payoutRequiredFlag = $payoutRequiredFlag;

		return $this;
	}

	public function getEndDateRequiredFlag(): ?string
	{
		return $this->endDateRequiredFlag;
	}

	public function setEndDateRequiredFlag(?string $endDateRequiredFlag): self
	{
		$this->endDateRequiredFlag = $endDateRequiredFlag;

		return $this;
	}

	public function getLimitAmountRequiredFlag(): ?string
	{
		return $this->limitAmountRequiredFlag;
	}

	public function setLimitAmountRequiredFlag(?string $limitAmountRequiredFlag): self
	{
		$this->limitAmountRequiredFlag = $limitAmountRequiredFlag;

		return $this;
	}
}
