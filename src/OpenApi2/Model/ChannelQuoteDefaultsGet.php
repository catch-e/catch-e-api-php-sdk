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

class ChannelQuoteDefaultsGet
{
	/**
	 * Channel default id.
	 *
	 * @var string|null
	 */
	protected $channelDefaultId;
	/**
	 * Channel id.
	 *
	 * @var string|null
	 */
	protected $channelId;
	/**
	 * Novated management fees.
	 *
	 * @var float|null
	 */
	protected $novatedManagementFee;
	/**
	 * Operating management fees.
	 *
	 * @var float|null
	 */
	protected $operatingManagementFee;
	/**
	 * Financier.
	 *
	 * @var string|null
	 */
	protected $supplierIdFinancier;
	/**
	 * Novated commision rate.
	 *
	 * @var float|null
	 */
	protected $novatedCommissionRate;
	/**
	 * @var string|null
	 */
	protected $contractPayCycleFromQuoteFlag;
	/**
	 * @var string|null
	 */
	protected $financeBudgetTermDeferredFlag;
	/**
	 * @var ChannelQuoteDefaultsGetLinks|null
	 */
	protected $links;

	/**
	 * Channel default id.
	 */
	public function getChannelDefaultId(): ?string
	{
		return $this->channelDefaultId;
	}

	/**
	 * Channel default id.
	 */
	public function setChannelDefaultId(?string $channelDefaultId): self
	{
		$this->channelDefaultId = $channelDefaultId;

		return $this;
	}

	/**
	 * Channel id.
	 */
	public function getChannelId(): ?string
	{
		return $this->channelId;
	}

	/**
	 * Channel id.
	 */
	public function setChannelId(?string $channelId): self
	{
		$this->channelId = $channelId;

		return $this;
	}

	/**
	 * Novated management fees.
	 */
	public function getNovatedManagementFee(): ?float
	{
		return $this->novatedManagementFee;
	}

	/**
	 * Novated management fees.
	 */
	public function setNovatedManagementFee(?float $novatedManagementFee): self
	{
		$this->novatedManagementFee = $novatedManagementFee;

		return $this;
	}

	/**
	 * Operating management fees.
	 */
	public function getOperatingManagementFee(): ?float
	{
		return $this->operatingManagementFee;
	}

	/**
	 * Operating management fees.
	 */
	public function setOperatingManagementFee(?float $operatingManagementFee): self
	{
		$this->operatingManagementFee = $operatingManagementFee;

		return $this;
	}

	/**
	 * Financier.
	 */
	public function getSupplierIdFinancier(): ?string
	{
		return $this->supplierIdFinancier;
	}

	/**
	 * Financier.
	 */
	public function setSupplierIdFinancier(?string $supplierIdFinancier): self
	{
		$this->supplierIdFinancier = $supplierIdFinancier;

		return $this;
	}

	/**
	 * Novated commision rate.
	 */
	public function getNovatedCommissionRate(): ?float
	{
		return $this->novatedCommissionRate;
	}

	/**
	 * Novated commision rate.
	 */
	public function setNovatedCommissionRate(?float $novatedCommissionRate): self
	{
		$this->novatedCommissionRate = $novatedCommissionRate;

		return $this;
	}

	public function getContractPayCycleFromQuoteFlag(): ?string
	{
		return $this->contractPayCycleFromQuoteFlag;
	}

	public function setContractPayCycleFromQuoteFlag(?string $contractPayCycleFromQuoteFlag): self
	{
		$this->contractPayCycleFromQuoteFlag = $contractPayCycleFromQuoteFlag;

		return $this;
	}

	public function getFinanceBudgetTermDeferredFlag(): ?string
	{
		return $this->financeBudgetTermDeferredFlag;
	}

	public function setFinanceBudgetTermDeferredFlag(?string $financeBudgetTermDeferredFlag): self
	{
		$this->financeBudgetTermDeferredFlag = $financeBudgetTermDeferredFlag;

		return $this;
	}

	public function getLinks(): ?ChannelQuoteDefaultsGetLinks
	{
		return $this->links;
	}

	public function setLinks(?ChannelQuoteDefaultsGetLinks $links): self
	{
		$this->links = $links;

		return $this;
	}
}
