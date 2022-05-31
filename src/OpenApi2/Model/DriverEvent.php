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

class DriverEvent
{
    /**
     * Only drivers linked to client or client group may be entered.
     *
     * @var null|string
     */
    protected $driverId;
    /**
     * Date of driver change.
     *
     * @var null|\DateTime
     */
    protected $eventDate = 'current system date';
    /**
     * Description.
     *
     * @var null|string
     */
    protected $description;
    /**
     * Vehicle odometer.
     *
     * @var null|int
     */
    protected $odometer;
    /**
     * Foreign key to fm_contract_event_actions table.
     *
     * @var null|string
     */
    protected $contractEventActionId;
    /**
     * Due date.
     *
     * @var null|\DateTime
     */
    protected $dueDate;
    /**
     * [gl_posting_classes]completed_flag_default where posting_class_code = 'DRIVER'.
     *
     * @var null|string
     */
    protected $completedFlag = 'no';
    /**
     * Override odometer validation warning?
     *
     * @var null|string
     */
    protected $overrideWarningsFlag = 'no';

    /**
     * Only drivers linked to client or client group may be entered.
     */
    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    /**
     * Only drivers linked to client or client group may be entered.
     */
    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * Date of driver change.
     */
    public function getEventDate(): ?\DateTime
    {
        return $this->eventDate;
    }

    /**
     * Date of driver change.
     */
    public function setEventDate(?\DateTime $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Vehicle odometer.
     */
    public function getOdometer(): ?int
    {
        return $this->odometer;
    }

    /**
     * Vehicle odometer.
     */
    public function setOdometer(?int $odometer): self
    {
        $this->odometer = $odometer;

        return $this;
    }

    /**
     * Foreign key to fm_contract_event_actions table.
     */
    public function getContractEventActionId(): ?string
    {
        return $this->contractEventActionId;
    }

    /**
     * Foreign key to fm_contract_event_actions table.
     */
    public function setContractEventActionId(?string $contractEventActionId): self
    {
        $this->contractEventActionId = $contractEventActionId;

        return $this;
    }

    /**
     * Due date.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Due date.
     */
    public function setDueDate(?\DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * [gl_posting_classes]completed_flag_default where posting_class_code = 'DRIVER'.
     */
    public function getCompletedFlag(): ?string
    {
        return $this->completedFlag;
    }

    /**
     * [gl_posting_classes]completed_flag_default where posting_class_code = 'DRIVER'.
     */
    public function setCompletedFlag(?string $completedFlag): self
    {
        $this->completedFlag = $completedFlag;

        return $this;
    }

    /**
     * Override odometer validation warning?
     */
    public function getOverrideWarningsFlag(): ?string
    {
        return $this->overrideWarningsFlag;
    }

    /**
     * Override odometer validation warning?
     */
    public function setOverrideWarningsFlag(?string $overrideWarningsFlag): self
    {
        $this->overrideWarningsFlag = $overrideWarningsFlag;

        return $this;
    }
}
