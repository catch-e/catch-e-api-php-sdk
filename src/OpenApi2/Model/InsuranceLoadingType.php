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

class InsuranceLoadingType
{
    /**
     * @var null|string
     */
    protected $insuranceLoadingTypeId;
    /**
     * @var null|string
     */
    protected $loadingType;
    /**
     * @var null|string
     */
    protected $loadingCode;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|int
     */
    protected $loadingCategory;

    public function getInsuranceLoadingTypeId(): ?string
    {
        return $this->insuranceLoadingTypeId;
    }

    public function setInsuranceLoadingTypeId(?string $insuranceLoadingTypeId): self
    {
        $this->insuranceLoadingTypeId = $insuranceLoadingTypeId;

        return $this;
    }

    public function getLoadingType(): ?string
    {
        return $this->loadingType;
    }

    public function setLoadingType(?string $loadingType): self
    {
        $this->loadingType = $loadingType;

        return $this;
    }

    public function getLoadingCode(): ?string
    {
        return $this->loadingCode;
    }

    public function setLoadingCode(?string $loadingCode): self
    {
        $this->loadingCode = $loadingCode;

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

    public function getLoadingCategory(): ?int
    {
        return $this->loadingCategory;
    }

    public function setLoadingCategory(?int $loadingCategory): self
    {
        $this->loadingCategory = $loadingCategory;

        return $this;
    }
}
