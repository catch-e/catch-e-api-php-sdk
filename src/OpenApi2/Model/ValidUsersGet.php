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

class ValidUsersGet
{
    /**
     * @var null|mixed
     */
    protected $links;
    /**
     * @var null|ValidUsersGetEmbedded
     */
    protected $embedded;
    /**
     * @var null|float
     */
    protected $pageCount;
    /**
     * @var null|float
     */
    protected $pageSize;
    /**
     * @var null|float
     */
    protected $totalItems;
    /**
     * @var null|float
     */
    protected $page;

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getEmbedded(): ?ValidUsersGetEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?ValidUsersGetEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }

    public function getPageCount(): ?float
    {
        return $this->pageCount;
    }

    public function setPageCount(?float $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getPageSize(): ?float
    {
        return $this->pageSize;
    }

    public function setPageSize(?float $pageSize): self
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    public function getTotalItems(): ?float
    {
        return $this->totalItems;
    }

    public function setTotalItems(?float $totalItems): self
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    public function getPage(): ?float
    {
        return $this->page;
    }

    public function setPage(?float $page): self
    {
        $this->page = $page;

        return $this;
    }
}
