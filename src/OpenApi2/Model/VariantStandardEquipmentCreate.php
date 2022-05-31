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

class VariantStandardEquipmentCreate
{
    /**
     * @var null|string
     */
    protected $variantId;
    /**
     * @var null|string
     */
    protected $standardEquipmentId;

    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function getStandardEquipmentId(): ?string
    {
        return $this->standardEquipmentId;
    }

    public function setStandardEquipmentId(?string $standardEquipmentId): self
    {
        $this->standardEquipmentId = $standardEquipmentId;

        return $this;
    }
}
