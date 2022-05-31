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

class FmDriverAssetsGetResponse200
{
    /**
     * @var null|FmDriverAssetsGetResponse200Links
     */
    protected $links;
    /**
     * @var null|FmDriverAssetsGetResponse200Embedded
     */
    protected $embedded;
    /**
     * @var null|int
     */
    protected $pageCount;
    /**
     * @var null|int
     */
    protected $pageSize;
    /**
     * @var null|int
     */
    protected $totalItems;
    /**
     * @var null|int
     */
    protected $page;

    public function getLinks(): ?FmDriverAssetsGetResponse200Links
    {
        return $this->links;
    }

    public function setLinks(?FmDriverAssetsGetResponse200Links $links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getEmbedded(): ?FmDriverAssetsGetResponse200Embedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?FmDriverAssetsGetResponse200Embedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }

    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    public function setPageCount(?int $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }

    public function setTotalItems(?int $totalItems): self
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(?int $page): self
    {
        $this->page = $page;

        return $this;
    }
}
