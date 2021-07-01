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

class UpdateDriverAsset
{
	/**
	 * Finance Asset Type Id.
	 *
	 * @var string|null
	 */
	protected $financeAssetTypeId;
	/**
	 * Amount.
	 *
	 * @var float|null
	 */
	protected $amount;
	/**
	 * Asset Description.
	 *
	 * @var string|null
	 */
	protected $description;

	/**
	 * Finance Asset Type Id.
	 */
	public function getFinanceAssetTypeId(): ?string
	{
		return $this->financeAssetTypeId;
	}

	/**
	 * Finance Asset Type Id.
	 */
	public function setFinanceAssetTypeId(?string $financeAssetTypeId): self
	{
		$this->financeAssetTypeId = $financeAssetTypeId;

		return $this;
	}

	/**
	 * Amount.
	 */
	public function getAmount(): ?float
	{
		return $this->amount;
	}

	/**
	 * Amount.
	 */
	public function setAmount(?float $amount): self
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Asset Description.
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * Asset Description.
	 */
	public function setDescription(?string $description): self
	{
		$this->description = $description;

		return $this;
	}
}
