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

class InsurerLocation
{
    /**
     * @var null|string
     */
    protected $insurerLocationId;
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|string
     */
    protected $policyOwnerType;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|string
     */
    protected $locationCategory;
    /**
     * @var null|float
     */
    protected $excessRate;
    /**
     * @var null|\DateTime
     */
    protected $date;

    public function getInsurerLocationId(): ?string
    {
        return $this->insurerLocationId;
    }

    public function setInsurerLocationId(?string $insurerLocationId): self
    {
        $this->insurerLocationId = $insurerLocationId;

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

    public function getPolicyOwnerType(): ?string
    {
        return $this->policyOwnerType;
    }

    public function setPolicyOwnerType(?string $policyOwnerType): self
    {
        $this->policyOwnerType = $policyOwnerType;

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

    public function getLocationCategory(): ?string
    {
        return $this->locationCategory;
    }

    public function setLocationCategory(?string $locationCategory): self
    {
        $this->locationCategory = $locationCategory;

        return $this;
    }

    public function getExcessRate(): ?float
    {
        return $this->excessRate;
    }

    public function setExcessRate(?float $excessRate): self
    {
        $this->excessRate = $excessRate;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
