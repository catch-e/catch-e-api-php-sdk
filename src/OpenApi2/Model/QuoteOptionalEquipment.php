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

class QuoteOptionalEquipment
{
    /**
     * @var null|string
     */
    protected $optionalEquipmentId;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|float
     */
    protected $costPriceNet;
    /**
     * @var null|float
     */
    protected $listPriceNet;
    /**
     * @var null|float
     */
    protected $discountNet;
    /**
     * @var null|float
     */
    protected $gst;
    /**
     * @var null|float
     */
    protected $residualRate;
    /**
     * @var null|float
     */
    protected $residualAmount;

    public function getOptionalEquipmentId(): ?string
    {
        return $this->optionalEquipmentId;
    }

    public function setOptionalEquipmentId(?string $optionalEquipmentId): self
    {
        $this->optionalEquipmentId = $optionalEquipmentId;

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

    public function getCostPriceNet(): ?float
    {
        return $this->costPriceNet;
    }

    public function setCostPriceNet(?float $costPriceNet): self
    {
        $this->costPriceNet = $costPriceNet;

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

    public function getDiscountNet(): ?float
    {
        return $this->discountNet;
    }

    public function setDiscountNet(?float $discountNet): self
    {
        $this->discountNet = $discountNet;

        return $this;
    }

    public function getGst(): ?float
    {
        return $this->gst;
    }

    public function setGst(?float $gst): self
    {
        $this->gst = $gst;

        return $this;
    }

    public function getResidualRate(): ?float
    {
        return $this->residualRate;
    }

    public function setResidualRate(?float $residualRate): self
    {
        $this->residualRate = $residualRate;

        return $this;
    }

    public function getResidualAmount(): ?float
    {
        return $this->residualAmount;
    }

    public function setResidualAmount(?float $residualAmount): self
    {
        $this->residualAmount = $residualAmount;

        return $this;
    }
}
