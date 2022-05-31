<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

class Contact
{
    /**
     * @var null|string
     */
    protected $contactId;
    /**
     * @var null|string
     */
    protected $contactJobTitleId;
    /**
     * @var null|string
     */
    protected $salutation;
    /**
     * @var null|string
     */
    protected $givenName;
    /**
     * @var null|string
     */
    protected $surname;
    /**
     * Phone number should follow e164 format.
     *
     * @var null|string
     */
    protected $phone;
    /**
     * Mobile number should follow e164 format.
     *
     * @var null|string
     */
    protected $mobile;
    /**
     * @var null|string
     */
    protected $email;
    /**
     * @var null|string
     */
    protected $address1;
    /**
     * @var null|string
     */
    protected $address2;
    /**
     * @var null|string
     */
    protected $area;
    /**
     * @var null|string
     */
    protected $stateId;
    /**
     * @var null|string
     */
    protected $postcode;
    /**
     * @var null|string
     */
    protected $countryId;
    /**
     * @var null|string
     */
    protected $note;
    /**
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|ContactAllocationGet[]
     */
    protected $allocations;
    /**
     * @var null|ContactTypeAllocationCreate[]
     */
    protected $contactTypeAllocations;
    /**
     * @var null|ContactLinks
     */
    protected $links;

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    public function getContactJobTitleId(): ?string
    {
        return $this->contactJobTitleId;
    }

    public function setContactJobTitleId(?string $contactJobTitleId): self
    {
        $this->contactJobTitleId = $contactJobTitleId;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): self
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Phone number should follow e164 format.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Phone number should follow e164 format.
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Mobile number should follow e164 format.
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * Mobile number should follow e164 format.
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getStateId(): ?string
    {
        return $this->stateId;
    }

    public function setStateId(?string $stateId): self
    {
        $this->stateId = $stateId;

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

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    /**
     * @return null|ContactAllocationGet[]
     */
    public function getAllocations(): ?array
    {
        return $this->allocations;
    }

    /**
     * @param null|ContactAllocationGet[] $allocations
     */
    public function setAllocations(?array $allocations): self
    {
        $this->allocations = $allocations;

        return $this;
    }

    /**
     * @return null|ContactTypeAllocationCreate[]
     */
    public function getContactTypeAllocations(): ?array
    {
        return $this->contactTypeAllocations;
    }

    /**
     * @param null|ContactTypeAllocationCreate[] $contactTypeAllocations
     */
    public function setContactTypeAllocations(?array $contactTypeAllocations): self
    {
        $this->contactTypeAllocations = $contactTypeAllocations;

        return $this;
    }

    public function getLinks(): ?ContactLinks
    {
        return $this->links;
    }

    public function setLinks(?ContactLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
