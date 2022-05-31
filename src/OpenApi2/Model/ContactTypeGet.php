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

class ContactTypeGet
{
    /**
     * @var null|string
     */
    protected $contactTypeId;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|string
     */
    protected $statusFlag;
    /**
     * @var null|ContactTypeGetLinks
     */
    protected $links;

    public function getContactTypeId(): ?string
    {
        return $this->contactTypeId;
    }

    public function setContactTypeId(?string $contactTypeId): self
    {
        $this->contactTypeId = $contactTypeId;

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

    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    public function getLinks(): ?ContactTypeGetLinks
    {
        return $this->links;
    }

    public function setLinks(?ContactTypeGetLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
