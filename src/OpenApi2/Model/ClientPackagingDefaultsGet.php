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

class ClientPackagingDefaultsGet
{
    /**
     * Client Packaging Default Id.
     *
     * @var null|string
     */
    protected $clientPackagingDefaultId;
    /**
     * Client Id.
     *
     * @var null|string
     */
    protected $clientId;
    /**
     * @var null|string
     */
    protected $bankAccountEnabledFlag;
    /**
     * Financial Institution.
     *
     * @var null|string
     */
    protected $financialInstitutionId;
    /**
     * Bank Account Name.
     *
     * @var null|string
     */
    protected $bankAccountName;
    /**
     * Abbreviated Bank Account Name.
     *
     * @var null|string
     */
    protected $bankAccountNameShort;
    /**
     * Bank APCA (BSB).
     *
     * @var null|string
     */
    protected $apcaNumber;
    /**
     * Disbursements (ABA) Description.
     *
     * @var null|string
     */
    protected $abaDescription;
    /**
     * Add balancing row to Disbursements (ABA) files.
     *
     * @var null|string
     */
    protected $abaSelfBalancingFlag = 'yes';
    /**
     * @var null|ClientPackagingDefaultsGetLinks
     */
    protected $links;

    /**
     * Client Packaging Default Id.
     */
    public function getClientPackagingDefaultId(): ?string
    {
        return $this->clientPackagingDefaultId;
    }

    /**
     * Client Packaging Default Id.
     */
    public function setClientPackagingDefaultId(?string $clientPackagingDefaultId): self
    {
        $this->clientPackagingDefaultId = $clientPackagingDefaultId;

        return $this;
    }

    /**
     * Client Id.
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * Client Id.
     */
    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

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

    public function getLinks(): ?ClientPackagingDefaultsGetLinks
    {
        return $this->links;
    }

    public function setLinks(?ClientPackagingDefaultsGetLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
