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

class Inclusion
{
    /**
     * @var null|string
     */
    protected $inclusionId;
    /**
     * @var null|string
     */
    protected $inclusionCode;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|string
     */
    protected $editFlag;
    /**
     * @var null|string
     */
    protected $provider;
    /**
     * @var null|string
     */
    protected $statusFlag;

    public function getInclusionId(): ?string
    {
        return $this->inclusionId;
    }

    public function setInclusionId(?string $inclusionId): self
    {
        $this->inclusionId = $inclusionId;

        return $this;
    }

    public function getInclusionCode(): ?string
    {
        return $this->inclusionCode;
    }

    public function setInclusionCode(?string $inclusionCode): self
    {
        $this->inclusionCode = $inclusionCode;

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

    public function getEditFlag(): ?string
    {
        return $this->editFlag;
    }

    public function setEditFlag(?string $editFlag): self
    {
        $this->editFlag = $editFlag;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

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
