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

class Attachment
{
    /**
     * Attachment Id.
     *
     * @var null|string
     */
    protected $attachmentId;
    /**
     * Target table the attachment is associated with.
     *
     * @var null|string
     */
    protected $tableName;
    /**
     * The unique id of the record in the target table the attachment is associated with.
     *
     * @var null|string
     */
    protected $recordId;
    /**
     * @var null|string
     */
    protected $filename;
    /**
     * @var null|string
     */
    protected $extension;
    /**
     * @var null|string
     */
    protected $md5;
    /**
     * File size in bytes.
     *
     * @var null|int
     */
    protected $fileSize;
    /**
     * Notes.
     *
     * @var null|string
     */
    protected $notes;
    /**
     * @var null|string
     */
    protected $userId;
    /**
     * @var null|\DateTime
     */
    protected $created;
    /**
     * @var null|bool
     */
    protected $duplicateCheck;
    /**
     * Status flag.
     *
     * @var null|string
     */
    protected $statusFlag = 'active';
    /**
     * @var null|AttachmentLinks
     */
    protected $links;

    /**
     * Attachment Id.
     */
    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    /**
     * Attachment Id.
     */
    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;

        return $this;
    }

    /**
     * Target table the attachment is associated with.
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * Target table the attachment is associated with.
     */
    public function setTableName(?string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * The unique id of the record in the target table the attachment is associated with.
     */
    public function getRecordId(): ?string
    {
        return $this->recordId;
    }

    /**
     * The unique id of the record in the target table the attachment is associated with.
     */
    public function setRecordId(?string $recordId): self
    {
        $this->recordId = $recordId;

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getMd5(): ?string
    {
        return $this->md5;
    }

    public function setMd5(?string $md5): self
    {
        $this->md5 = $md5;

        return $this;
    }

    /**
     * File size in bytes.
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * File size in bytes.
     */
    public function setFileSize(?int $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Notes.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * Notes.
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

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

    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    public function setCreated(?\DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getDuplicateCheck(): ?bool
    {
        return $this->duplicateCheck;
    }

    public function setDuplicateCheck(?bool $duplicateCheck): self
    {
        $this->duplicateCheck = $duplicateCheck;

        return $this;
    }

    /**
     * Status flag.
     */
    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    /**
     * Status flag.
     */
    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    public function getLinks(): ?AttachmentLinks
    {
        return $this->links;
    }

    public function setLinks(?AttachmentLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
