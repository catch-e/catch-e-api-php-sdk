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

class VariantOptionalEquipment
{
    /**
     * @var null|string
     */
    protected $optionalEquipmentId;
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|float
     */
    protected $listPriceNet;
    /**
     * @var null|float
     */
    protected $listPriceGst;
    /**
     * @var null|float
     */
    protected $costPriceNet;
    /**
     * @var null|string
     */
    protected $optionType = 'factory';
    /**
     * @var null|string
     */
    protected $dealerFit = 'yes';
    /**
     * @var null|string
     */
    protected $includeByDefaultFlag = 'no';
    /**
     * @var null|string
     */
    protected $equipmentCode;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|string
     */
    protected $fbtExemptFlag = 'no';
    /**
     * @var null|string
     */
    protected $dataSourceId;

    public function getOptionalEquipmentId(): ?string
    {
        return $this->optionalEquipmentId;
    }

    public function setOptionalEquipmentId(?string $optionalEquipmentId): self
    {
        $this->optionalEquipmentId = $optionalEquipmentId;

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

    public function getListPriceNet(): ?float
    {
        return $this->listPriceNet;
    }

    public function setListPriceNet(?float $listPriceNet): self
    {
        $this->listPriceNet = $listPriceNet;

        return $this;
    }

    public function getListPriceGst(): ?float
    {
        return $this->listPriceGst;
    }

    public function setListPriceGst(?float $listPriceGst): self
    {
        $this->listPriceGst = $listPriceGst;

        return $this;
    }

    public function getCostPriceNet(): ?float
    {
        return $this->costPriceNet;
    }

    public function setCostPriceNet(?float $costPriceNet): self
    {
        $this->costPriceNet = $costPriceNet;

        return $this;
    }

    public function getOptionType(): ?string
    {
        return $this->optionType;
    }

    public function setOptionType(?string $optionType): self
    {
        $this->optionType = $optionType;

        return $this;
    }

    public function getDealerFit(): ?string
    {
        return $this->dealerFit;
    }

    public function setDealerFit(?string $dealerFit): self
    {
        $this->dealerFit = $dealerFit;

        return $this;
    }

    public function getIncludeByDefaultFlag(): ?string
    {
        return $this->includeByDefaultFlag;
    }

    public function setIncludeByDefaultFlag(?string $includeByDefaultFlag): self
    {
        $this->includeByDefaultFlag = $includeByDefaultFlag;

        return $this;
    }

    public function getEquipmentCode(): ?string
    {
        return $this->equipmentCode;
    }

    public function setEquipmentCode(?string $equipmentCode): self
    {
        $this->equipmentCode = $equipmentCode;

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

    public function getFbtExemptFlag(): ?string
    {
        return $this->fbtExemptFlag;
    }

    public function setFbtExemptFlag(?string $fbtExemptFlag): self
    {
        $this->fbtExemptFlag = $fbtExemptFlag;

        return $this;
    }

    public function getDataSourceId(): ?string
    {
        return $this->dataSourceId;
    }

    public function setDataSourceId(?string $dataSourceId): self
    {
        $this->dataSourceId = $dataSourceId;

        return $this;
    }
}
