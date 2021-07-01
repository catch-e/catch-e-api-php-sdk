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

class ContactCreate
{
	/**
	 * Optional Contact Job Title Id.
	 *
	 * @var string|null
	 */
	protected $contactJobTitleId;
	/**
	 * Salutation.
	 *
	 * @var string|null
	 */
	protected $salutation;
	/**
	 * Given name.
	 *
	 * @var string|null
	 */
	protected $givenName = '';
	/**
	 * Surname.
	 *
	 * @var string|null
	 */
	protected $surname = '';
	/**
	 * Phone number must follow e164 format.
	 *
	 * @var string|null
	 */
	protected $phone = '';
	/**
	 * Mobile number must follow e164 format.
	 *
	 * @var string|null
	 */
	protected $mobile = '';
	/**
	 * Email address.
	 *
	 * @var string|null
	 */
	protected $email = '';
	/**
	 * Address Line 1.
	 *
	 * @var string|null
	 */
	protected $address1 = '';
	/**
	 * Address Line 2.
	 *
	 * @var string|null
	 */
	protected $address2 = '';
	/**
	 * @var string|null
	 */
	protected $area = '';
	/**
	 * State id.
	 *
	 * @var string|null
	 */
	protected $stateId;
	/**
	 * Post code.
	 *
	 * @var string|null
	 */
	protected $postcode = '';
	/**
	 * Country ID.
	 *
	 * @var string|null
	 */
	protected $countryId;
	/**
	 * Note.
	 *
	 * @var string|null
	 */
	protected $note;
	/**
	 * Status.
	 *
	 * @var string|null
	 */
	protected $statusFlag = 'active';
	/**
	 * @var ContactAllocation[]|null
	 */
	protected $allocations;
	/**
	 * @var string[]|null
	 */
	protected $contactTypeAllocations;

	/**
	 * Optional Contact Job Title Id.
	 */
	public function getContactJobTitleId(): ?string
	{
		return $this->contactJobTitleId;
	}

	/**
	 * Optional Contact Job Title Id.
	 */
	public function setContactJobTitleId(?string $contactJobTitleId): self
	{
		$this->contactJobTitleId = $contactJobTitleId;

		return $this;
	}

	/**
	 * Salutation.
	 */
	public function getSalutation(): ?string
	{
		return $this->salutation;
	}

	/**
	 * Salutation.
	 */
	public function setSalutation(?string $salutation): self
	{
		$this->salutation = $salutation;

		return $this;
	}

	/**
	 * Given name.
	 */
	public function getGivenName(): ?string
	{
		return $this->givenName;
	}

	/**
	 * Given name.
	 */
	public function setGivenName(?string $givenName): self
	{
		$this->givenName = $givenName;

		return $this;
	}

	/**
	 * Surname.
	 */
	public function getSurname(): ?string
	{
		return $this->surname;
	}

	/**
	 * Surname.
	 */
	public function setSurname(?string $surname): self
	{
		$this->surname = $surname;

		return $this;
	}

	/**
	 * Phone number must follow e164 format.
	 */
	public function getPhone(): ?string
	{
		return $this->phone;
	}

	/**
	 * Phone number must follow e164 format.
	 */
	public function setPhone(?string $phone): self
	{
		$this->phone = $phone;

		return $this;
	}

	/**
	 * Mobile number must follow e164 format.
	 */
	public function getMobile(): ?string
	{
		return $this->mobile;
	}

	/**
	 * Mobile number must follow e164 format.
	 */
	public function setMobile(?string $mobile): self
	{
		$this->mobile = $mobile;

		return $this;
	}

	/**
	 * Email address.
	 */
	public function getEmail(): ?string
	{
		return $this->email;
	}

	/**
	 * Email address.
	 */
	public function setEmail(?string $email): self
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Address Line 1.
	 */
	public function getAddress1(): ?string
	{
		return $this->address1;
	}

	/**
	 * Address Line 1.
	 */
	public function setAddress1(?string $address1): self
	{
		$this->address1 = $address1;

		return $this;
	}

	/**
	 * Address Line 2.
	 */
	public function getAddress2(): ?string
	{
		return $this->address2;
	}

	/**
	 * Address Line 2.
	 */
	public function setAddress2(?string $address2): self
	{
		$this->address2 = $address2;

		return $this;
	}

	public function getArea(): ?string
	{
		return $this->area;
	}

	public function setArea(?string $area): self
	{
		$this->area = $area;

		return $this;
	}

	/**
	 * State id.
	 */
	public function getStateId(): ?string
	{
		return $this->stateId;
	}

	/**
	 * State id.
	 */
	public function setStateId(?string $stateId): self
	{
		$this->stateId = $stateId;

		return $this;
	}

	/**
	 * Post code.
	 */
	public function getPostcode(): ?string
	{
		return $this->postcode;
	}

	/**
	 * Post code.
	 */
	public function setPostcode(?string $postcode): self
	{
		$this->postcode = $postcode;

		return $this;
	}

	/**
	 * Country ID.
	 */
	public function getCountryId(): ?string
	{
		return $this->countryId;
	}

	/**
	 * Country ID.
	 */
	public function setCountryId(?string $countryId): self
	{
		$this->countryId = $countryId;

		return $this;
	}

	/**
	 * Note.
	 */
	public function getNote(): ?string
	{
		return $this->note;
	}

	/**
	 * Note.
	 */
	public function setNote(?string $note): self
	{
		$this->note = $note;

		return $this;
	}

	/**
	 * Status.
	 */
	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	/**
	 * Status.
	 */
	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}

	/**
	 * @return ContactAllocation[]|null
	 */
	public function getAllocations(): ?array
	{
		return $this->allocations;
	}

	/**
	 * @param ContactAllocation[]|null $allocations
	 */
	public function setAllocations(?array $allocations): self
	{
		$this->allocations = $allocations;

		return $this;
	}

	/**
	 * @return string[]|null
	 */
	public function getContactTypeAllocations(): ?array
	{
		return $this->contactTypeAllocations;
	}

	/**
	 * @param string[]|null $contactTypeAllocations
	 */
	public function setContactTypeAllocations(?array $contactTypeAllocations): self
	{
		$this->contactTypeAllocations = $contactTypeAllocations;

		return $this;
	}
}
