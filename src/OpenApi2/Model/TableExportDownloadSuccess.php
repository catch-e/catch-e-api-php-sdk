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

class TableExportDownloadSuccess
{
    /**
     * @var null|string
     */
    protected $tableExportId;
    /**
     * @var null|string
     */
    protected $uri;
    /**
     * @var null|\DateTime
     */
    protected $uriExpiry;

    public function getTableExportId(): ?string
    {
        return $this->tableExportId;
    }

    public function setTableExportId(?string $tableExportId): self
    {
        $this->tableExportId = $tableExportId;

        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    public function getUriExpiry(): ?\DateTime
    {
        return $this->uriExpiry;
    }

    public function setUriExpiry(?\DateTime $uriExpiry): self
    {
        $this->uriExpiry = $uriExpiry;

        return $this;
    }
}
