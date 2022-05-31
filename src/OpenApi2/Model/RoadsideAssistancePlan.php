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

class RoadsideAssistancePlan
{
    /**
     * @var null|string
     */
    protected $roadsideAssistancePlanId;
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|string
     */
    protected $roadsideAssistancePlanCode;
    /**
     * @var null|string
     */
    protected $roadsideAssistancePlanName;
    /**
     * @var null|float
     */
    protected $premium;
    /**
     * @var null|float
     */
    protected $cost;
    /**
     * @var null|string
     */
    protected $statusFlag;

    public function getRoadsideAssistancePlanId(): ?string
    {
        return $this->roadsideAssistancePlanId;
    }

    public function setRoadsideAssistancePlanId(?string $roadsideAssistancePlanId): self
    {
        $this->roadsideAssistancePlanId = $roadsideAssistancePlanId;

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

    public function getRoadsideAssistancePlanCode(): ?string
    {
        return $this->roadsideAssistancePlanCode;
    }

    public function setRoadsideAssistancePlanCode(?string $roadsideAssistancePlanCode): self
    {
        $this->roadsideAssistancePlanCode = $roadsideAssistancePlanCode;

        return $this;
    }

    public function getRoadsideAssistancePlanName(): ?string
    {
        return $this->roadsideAssistancePlanName;
    }

    public function setRoadsideAssistancePlanName(?string $roadsideAssistancePlanName): self
    {
        $this->roadsideAssistancePlanName = $roadsideAssistancePlanName;

        return $this;
    }

    public function getPremium(): ?float
    {
        return $this->premium;
    }

    public function setPremium(?float $premium): self
    {
        $this->premium = $premium;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

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
}
