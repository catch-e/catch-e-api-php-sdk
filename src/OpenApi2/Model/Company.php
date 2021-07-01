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

class Company
{
	/**
	 * @var string|null
	 */
	protected $companyId;
	/**
	 * @var string|null
	 */
	protected $name;
	/**
	 * @var string|null
	 */
	protected $address1;
	/**
	 * @var string|null
	 */
	protected $address2;
	/**
	 * @var string|null
	 */
	protected $city;
	/**
	 * @var string|null
	 */
	protected $state;
	/**
	 * @var string|null
	 */
	protected $postcode;
	/**
	 * @var string|null
	 */
	protected $phone;
	/**
	 * @var string|null
	 */
	protected $fax;
	/**
	 * @var string|null
	 */
	protected $mobile;
	/**
	 * @var string|null
	 */
	protected $emailFinance;
	/**
	 * @var string|null
	 */
	protected $postalAddress1;
	/**
	 * @var string|null
	 */
	protected $postalAddress2;
	/**
	 * @var string|null
	 */
	protected $postalCity;
	/**
	 * @var string|null
	 */
	protected $postalState;
	/**
	 * @var string|null
	 */
	protected $postalPostcode;
	/**
	 * @var string|null
	 */
	protected $abn;
	/**
	 * @var string|null
	 */
	protected $defaultFlag;
	/**
	 * @var CompanyLinks|null
	 */
	protected $links;

	public function getCompanyId(): ?string
	{
		return $this->companyId;
	}

	public function setCompanyId(?string $companyId): self
	{
		$this->companyId = $companyId;

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

	public function getAddress1(): ?string
	{
		return $this->address1;
	}

	public function setAddress1(?string $address1): self
	{
		$this->address1 = $address1;

		return $this;
	}

	public function getAddress2(): ?string
	{
		return $this->address2;
	}

	public function setAddress2(?string $address2): self
	{
		$this->address2 = $address2;

		return $this;
	}

	public function getCity(): ?string
	{
		return $this->city;
	}

	public function setCity(?string $city): self
	{
		$this->city = $city;

		return $this;
	}

	public function getState(): ?string
	{
		return $this->state;
	}

	public function setState(?string $state): self
	{
		$this->state = $state;

		return $this;
	}

	public function getPostcode(): ?string
	{
		return $this->postcode;
	}

	public function setPostcode(?string $postcode): self
	{
		$this->postcode = $postcode;

		return $this;
	}

	public function getPhone(): ?string
	{
		return $this->phone;
	}

	public function setPhone(?string $phone): self
	{
		$this->phone = $phone;

		return $this;
	}

	public function getFax(): ?string
	{
		return $this->fax;
	}

	public function setFax(?string $fax): self
	{
		$this->fax = $fax;

		return $this;
	}

	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	public function setMobile(?string $mobile): self
	{
		$this->mobile = $mobile;

		return $this;
	}

	public function getEmailFinance(): ?string
	{
		return $this->emailFinance;
	}

	public function setEmailFinance(?string $emailFinance): self
	{
		$this->emailFinance = $emailFinance;

		return $this;
	}

	public function getPostalAddress1(): ?string
	{
		return $this->postalAddress1;
	}

	public function setPostalAddress1(?string $postalAddress1): self
	{
		$this->postalAddress1 = $postalAddress1;

		return $this;
	}

	public function getPostalAddress2(): ?string
	{
		return $this->postalAddress2;
	}

	public function setPostalAddress2(?string $postalAddress2): self
	{
		$this->postalAddress2 = $postalAddress2;

		return $this;
	}

	public function getPostalCity(): ?string
	{
		return $this->postalCity;
	}

	public function setPostalCity(?string $postalCity): self
	{
		$this->postalCity = $postalCity;

		return $this;
	}

	public function getPostalState(): ?string
	{
		return $this->postalState;
	}

	public function setPostalState(?string $postalState): self
	{
		$this->postalState = $postalState;

		return $this;
	}

	public function getPostalPostcode(): ?string
	{
		return $this->postalPostcode;
	}

	public function setPostalPostcode(?string $postalPostcode): self
	{
		$this->postalPostcode = $postalPostcode;

		return $this;
	}

	public function getAbn(): ?string
	{
		return $this->abn;
	}

	public function setAbn(?string $abn): self
	{
		$this->abn = $abn;

		return $this;
	}

	public function getDefaultFlag(): ?string
	{
		return $this->defaultFlag;
	}

	public function setDefaultFlag(?string $defaultFlag): self
	{
		$this->defaultFlag = $defaultFlag;

		return $this;
	}

	public function getLinks(): ?CompanyLinks
	{
		return $this->links;
	}

	public function setLinks(?CompanyLinks $links): self
	{
		$this->links = $links;

		return $this;
	}
}
