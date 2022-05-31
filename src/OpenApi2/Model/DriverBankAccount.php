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

class DriverBankAccount
{
    /**
     * @var null|string
     */
    protected $driverBankAccountId;
    /**
     * @var null|string
     */
    protected $driverId;
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|string
     */
    protected $accountName;
    /**
     * @var null|string
     */
    protected $bsb;
    /**
     * @var null|string
     */
    protected $accountNumber;
    /**
     * @var null|string
     */
    protected $claimsDefaultFlag;
    /**
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|DriverBankAccountEmbedded
     */
    protected $embedded;

    public function getDriverBankAccountId(): ?string
    {
        return $this->driverBankAccountId;
    }

    public function setDriverBankAccountId(?string $driverBankAccountId): self
    {
        $this->driverBankAccountId = $driverBankAccountId;

        return $this;
    }

    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function setSupplierId(?string $supplierId): self
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

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

    public function getClaimsDefaultFlag(): ?string
    {
        return $this->claimsDefaultFlag;
    }

    public function setClaimsDefaultFlag(?string $claimsDefaultFlag): self
    {
        $this->claimsDefaultFlag = $claimsDefaultFlag;

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

    public function getEmbedded(): ?DriverBankAccountEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?DriverBankAccountEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }
}
