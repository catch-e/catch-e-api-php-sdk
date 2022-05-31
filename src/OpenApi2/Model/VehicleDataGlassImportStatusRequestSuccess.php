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

class VehicleDataGlassImportStatusRequestSuccess
{
    /**
     * @var null|string
     */
    protected $importId;
    /**
     * @var null|string
     */
    protected $status;
    /**
     * @var null|string
     */
    protected $dataFilename;
    /**
     * @var null|\DateTime
     */
    protected $dataFileCreated;
    /**
     * @var null|int
     */
    protected $dataSize;
    /**
     * @var null|string
     */
    protected $dataMd5;
    /**
     * @var null|string
     */
    protected $comment;
    /**
     * @var null|string
     */
    protected $userId;

    public function getImportId(): ?string
    {
        return $this->importId;
    }

    public function setImportId(?string $importId): self
    {
        $this->importId = $importId;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDataFilename(): ?string
    {
        return $this->dataFilename;
    }

    public function setDataFilename(?string $dataFilename): self
    {
        $this->dataFilename = $dataFilename;

        return $this;
    }

    public function getDataFileCreated(): ?\DateTime
    {
        return $this->dataFileCreated;
    }

    public function setDataFileCreated(?\DateTime $dataFileCreated): self
    {
        $this->dataFileCreated = $dataFileCreated;

        return $this;
    }

    public function getDataSize(): ?int
    {
        return $this->dataSize;
    }

    public function setDataSize(?int $dataSize): self
    {
        $this->dataSize = $dataSize;

        return $this;
    }

    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
