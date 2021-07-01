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

class PackageItem
{
	/**
	 * Package Item Id.
	 *
	 * @var string|null
	 */
	protected $packageItemId;
	/**
	 * Posting Map Id.
	 *
	 * @var string|null
	 */
	protected $postingMapId;
	/**
	 * Package Item Code.
	 *
	 * @var string|null
	 */
	protected $packageItemCode;
	/**
	 * Module.
	 *
	 * @var string|null
	 */
	protected $module;
	/**
	 * Package name.
	 *
	 * @var string|null
	 */
	protected $packageName;
	/**
	 * Benefit type.
	 *
	 * @var string|null
	 */
	protected $benefitType;
	/**
	 * Cap type.
	 *
	 * @var string|null
	 */
	protected $capType;
	/**
	 * GST flag.
	 *
	 * @var string|null
	 */
	protected $gstFlag;
	/**
	 * Tax method.
	 *
	 * @var string|null
	 */
	protected $taxMethod;
	/**
	 * @var string|null
	 */
	protected $spProfileTableName;
	/**
	 * Employee Contribution Flag.
	 *
	 * @var string|null
	 */
	protected $employeeContributionFlag = 'no';
	/**
	 * @var PackageItemEmbedded|null
	 */
	protected $embedded;

	/**
	 * Package Item Id.
	 */
	public function getPackageItemId(): ?string
	{
		return $this->packageItemId;
	}

	/**
	 * Package Item Id.
	 */
	public function setPackageItemId(?string $packageItemId): self
	{
		$this->packageItemId = $packageItemId;

		return $this;
	}

	/**
	 * Posting Map Id.
	 */
	public function getPostingMapId(): ?string
	{
		return $this->postingMapId;
	}

	/**
	 * Posting Map Id.
	 */
	public function setPostingMapId(?string $postingMapId): self
	{
		$this->postingMapId = $postingMapId;

		return $this;
	}

	/**
	 * Package Item Code.
	 */
	public function getPackageItemCode(): ?string
	{
		return $this->packageItemCode;
	}

	/**
	 * Package Item Code.
	 */
	public function setPackageItemCode(?string $packageItemCode): self
	{
		$this->packageItemCode = $packageItemCode;

		return $this;
	}

	/**
	 * Module.
	 */
	public function getModule(): ?string
	{
		return $this->module;
	}

	/**
	 * Module.
	 */
	public function setModule(?string $module): self
	{
		$this->module = $module;

		return $this;
	}

	/**
	 * Package name.
	 */
	public function getPackageName(): ?string
	{
		return $this->packageName;
	}

	/**
	 * Package name.
	 */
	public function setPackageName(?string $packageName): self
	{
		$this->packageName = $packageName;

		return $this;
	}

	/**
	 * Benefit type.
	 */
	public function getBenefitType(): ?string
	{
		return $this->benefitType;
	}

	/**
	 * Benefit type.
	 */
	public function setBenefitType(?string $benefitType): self
	{
		$this->benefitType = $benefitType;

		return $this;
	}

	/**
	 * Cap type.
	 */
	public function getCapType(): ?string
	{
		return $this->capType;
	}

	/**
	 * Cap type.
	 */
	public function setCapType(?string $capType): self
	{
		$this->capType = $capType;

		return $this;
	}

	/**
	 * GST flag.
	 */
	public function getGstFlag(): ?string
	{
		return $this->gstFlag;
	}

	/**
	 * GST flag.
	 */
	public function setGstFlag(?string $gstFlag): self
	{
		$this->gstFlag = $gstFlag;

		return $this;
	}

	/**
	 * Tax method.
	 */
	public function getTaxMethod(): ?string
	{
		return $this->taxMethod;
	}

	/**
	 * Tax method.
	 */
	public function setTaxMethod(?string $taxMethod): self
	{
		$this->taxMethod = $taxMethod;

		return $this;
	}

	public function getSpProfileTableName(): ?string
	{
		return $this->spProfileTableName;
	}

	public function setSpProfileTableName(?string $spProfileTableName): self
	{
		$this->spProfileTableName = $spProfileTableName;

		return $this;
	}

	/**
	 * Employee Contribution Flag.
	 */
	public function getEmployeeContributionFlag(): ?string
	{
		return $this->employeeContributionFlag;
	}

	/**
	 * Employee Contribution Flag.
	 */
	public function setEmployeeContributionFlag(?string $employeeContributionFlag): self
	{
		$this->employeeContributionFlag = $employeeContributionFlag;

		return $this;
	}

	public function getEmbedded(): ?PackageItemEmbedded
	{
		return $this->embedded;
	}

	public function setEmbedded(?PackageItemEmbedded $embedded): self
	{
		$this->embedded = $embedded;

		return $this;
	}
}
