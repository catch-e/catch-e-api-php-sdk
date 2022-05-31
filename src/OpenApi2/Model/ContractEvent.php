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

class ContractEvent
{
    /**
     * @var null|string
     */
    protected $contractEventId;
    /**
     * @var null|string
     */
    protected $contractId;
    /**
     * @var null|string
     */
    protected $postingClassId;
    /**
     * @var null|string
     */
    protected $attachmentId;
    /**
     * @var null|\DateTime
     */
    protected $eventDate;
    /**
     * @var null|string
     */
    protected $tableName;
    /**
     * @var null|string
     */
    protected $recordId;
    /**
     * @var null|string
     */
    protected $eventValue;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|string
     */
    protected $contractEventValueId;
    /**
     * @var null|string
     */
    protected $contractEventDescriptionId;
    /**
     * @var null|string
     */
    protected $contractEventActionId;
    /**
     * @var null|\DateTime
     */
    protected $dueDate;
    /**
     * @var null|string
     */
    protected $completedFlag;
    /**
     * @var null|string
     */
    protected $eventAmount;
    /**
     * @var null|string
     */
    protected $messageType;
    /**
     * @var null|string
     */
    protected $userId;
    /**
     * @var null|mixed
     */
    protected $lastEdit;
    /**
     * @var null|string
     */
    protected $statusFlag;

    public function getContractEventId(): ?string
    {
        return $this->contractEventId;
    }

    public function setContractEventId(?string $contractEventId): self
    {
        $this->contractEventId = $contractEventId;

        return $this;
    }

    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    public function setContractId(?string $contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function getPostingClassId(): ?string
    {
        return $this->postingClassId;
    }

    public function setPostingClassId(?string $postingClassId): self
    {
        $this->postingClassId = $postingClassId;

        return $this;
    }

    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;

        return $this;
    }

    public function getEventDate(): ?\DateTime
    {
        return $this->eventDate;
    }

    public function setEventDate(?\DateTime $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(?string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getRecordId(): ?string
    {
        return $this->recordId;
    }

    public function setRecordId(?string $recordId): self
    {
        $this->recordId = $recordId;

        return $this;
    }

    public function getEventValue(): ?string
    {
        return $this->eventValue;
    }

    public function setEventValue(?string $eventValue): self
    {
        $this->eventValue = $eventValue;

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

    public function getContractEventValueId(): ?string
    {
        return $this->contractEventValueId;
    }

    public function setContractEventValueId(?string $contractEventValueId): self
    {
        $this->contractEventValueId = $contractEventValueId;

        return $this;
    }

    public function getContractEventDescriptionId(): ?string
    {
        return $this->contractEventDescriptionId;
    }

    public function setContractEventDescriptionId(?string $contractEventDescriptionId): self
    {
        $this->contractEventDescriptionId = $contractEventDescriptionId;

        return $this;
    }

    public function getContractEventActionId(): ?string
    {
        return $this->contractEventActionId;
    }

    public function setContractEventActionId(?string $contractEventActionId): self
    {
        $this->contractEventActionId = $contractEventActionId;

        return $this;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function getCompletedFlag(): ?string
    {
        return $this->completedFlag;
    }

    public function setCompletedFlag(?string $completedFlag): self
    {
        $this->completedFlag = $completedFlag;

        return $this;
    }

    public function getEventAmount(): ?string
    {
        return $this->eventAmount;
    }

    public function setEventAmount(?string $eventAmount): self
    {
        $this->eventAmount = $eventAmount;

        return $this;
    }

    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    public function setMessageType(?string $messageType): self
    {
        $this->messageType = $messageType;

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

    /**
     * @return mixed
     */
    public function getLastEdit()
    {
        return $this->lastEdit;
    }

    /**
     * @param mixed $lastEdit
     */
    public function setLastEdit($lastEdit): self
    {
        $this->lastEdit = $lastEdit;

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
