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

class CreateDriverAsset
{
    /**
     * Driver Id.
     *
     * @var null|string
     */
    protected $driverId;
    /**
     * Finance Asset Type Id.
     *
     * @var null|string
     */
    protected $financeAssetTypeId;
    /**
     * Amount.
     *
     * @var null|float
     */
    protected $amount;
    /**
     * @var null|string
     */
    protected $description;

    /**
     * Driver Id.
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    /**
     * Driver Id.
     */
    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
