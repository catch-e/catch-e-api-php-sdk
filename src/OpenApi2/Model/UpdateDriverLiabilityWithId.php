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

class UpdateDriverLiabilityWithId
{
    /**
     * @var null|string
     */
    protected $driverLiabilityId;
    /**
     * Finance Liability Type Id.
     *
     * @var null|string
     */
    protected $financeLiabilityTypeId;
    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     *
     * @var null|string
     */
    protected $financeLiabilityFinancierId;
    /**
     * Optional - defaults to NULL if not specified.
     *
     * @var null|string
     */
    protected $driverAssetId;
    /**
     * Amount.
     *
     * @var null|float
     */
    protected $amount;
    /**
     * Monthly Payment Amount.
     *
     * @var null|float
     */
    protected $monthlyPaymentAmount;
    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     *
     * @var null|string
     */
    protected $liabilityPayoutFlag;
    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     *
     * @var null|string
     */
    protected $liabilityEndDate;
    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     *
     * @var null|float
     */
    protected $liabilityLimitAmount;

    public function getDriverLiabilityId(): ?string
    {
        return $this->driverLiabilityId;
    }

    public function setDriverLiabilityId(?string $driverLiabilityId): self
    {
        $this->driverLiabilityId = $driverLiabilityId;

        return $this;
    }

    /**
     * Finance Liability Type Id.
     */
    public function getFinanceLiabilityTypeId(): ?string
    {
        return $this->financeLiabilityTypeId;
    }

    /**
     * Finance Liability Type Id.
     */
    public function setFinanceLiabilityTypeId(?string $financeLiabilityTypeId): self
    {
        $this->financeLiabilityTypeId = $financeLiabilityTypeId;

        return $this;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function getFinanceLiabilityFinancierId(): ?string
    {
        return $this->financeLiabilityFinancierId;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function setFinanceLiabilityFinancierId(?string $financeLiabilityFinancierId): self
    {
        $this->financeLiabilityFinancierId = $financeLiabilityFinancierId;

        return $this;
    }

    /**
     * Optional - defaults to NULL if not specified.
     */
    public function getDriverAssetId(): ?string
    {
        return $this->driverAssetId;
    }

    /**
     * Optional - defaults to NULL if not specified.
     */
    public function setDriverAssetId(?string $driverAssetId): self
    {
        $this->driverAssetId = $driverAssetId;

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
     * Monthly Payment Amount.
     */
    public function getMonthlyPaymentAmount(): ?float
    {
        return $this->monthlyPaymentAmount;
    }

    /**
     * Monthly Payment Amount.
     */
    public function setMonthlyPaymentAmount(?float $monthlyPaymentAmount): self
    {
        $this->monthlyPaymentAmount = $monthlyPaymentAmount;

        return $this;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function getLiabilityPayoutFlag(): ?string
    {
        return $this->liabilityPayoutFlag;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function setLiabilityPayoutFlag(?string $liabilityPayoutFlag): self
    {
        $this->liabilityPayoutFlag = $liabilityPayoutFlag;

        return $this;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function getLiabilityEndDate(): ?string
    {
        return $this->liabilityEndDate;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function setLiabilityEndDate(?string $liabilityEndDate): self
    {
        $this->liabilityEndDate = $liabilityEndDate;

        return $this;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function getLiabilityLimitAmount(): ?float
    {
        return $this->liabilityLimitAmount;
    }

    /**
     * Optional or forced depending on fm_finance_liability_types configuration.
     */
    public function setLiabilityLimitAmount(?float $liabilityLimitAmount): self
    {
        $this->liabilityLimitAmount = $liabilityLimitAmount;

        return $this;
    }
}
