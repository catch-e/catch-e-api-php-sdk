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

class CreateCard
{
    /**
     * @var null|string
     */
    protected $contractId;
    /**
     * @var null|string
     */
    protected $cardNumber;
    /**
     * @var null|string
     */
    protected $accountNumber;
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * @var null|string
     */
    protected $postingFlag = 'yes';
    /**
     * @var null|string
     */
    protected $rechargeFlag = 'no';
    /**
     * @var null|string
     */
    protected $clientIdRecharge;
    /**
     * @var null|string
     */
    protected $historyOnlyFlag = 'no';
    /**
     * @var null|\DateTime
     */
    protected $activatedDate;
    /**
     * @var null|\DateTime
     */
    protected $inactivatedDate;
    /**
     * @var null|\DateTime
     */
    protected $expiryDate;
    /**
     * @var null|string
     */
    protected $cardSubStatusId;
    /**
     * @var null|string
     */
    protected $notes;
    /**
     * @var null|string
     */
    protected $statusFlag = 'active';

    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    public function setContractId(?string $contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function setSupplierId(?string $supplierId): self
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    public function getPostingFlag(): ?string
    {
        return $this->postingFlag;
    }

    public function setPostingFlag(?string $postingFlag): self
    {
        $this->postingFlag = $postingFlag;

        return $this;
    }

    public function getRechargeFlag(): ?string
    {
        return $this->rechargeFlag;
    }

    public function setRechargeFlag(?string $rechargeFlag): self
    {
        $this->rechargeFlag = $rechargeFlag;

        return $this;
    }

    public function getClientIdRecharge(): ?string
    {
        return $this->clientIdRecharge;
    }

    public function setClientIdRecharge(?string $clientIdRecharge): self
    {
        $this->clientIdRecharge = $clientIdRecharge;

        return $this;
    }

    public function getHistoryOnlyFlag(): ?string
    {
        return $this->historyOnlyFlag;
    }

    public function setHistoryOnlyFlag(?string $historyOnlyFlag): self
    {
        $this->historyOnlyFlag = $historyOnlyFlag;

        return $this;
    }

    public function getActivatedDate(): ?\DateTime
    {
        return $this->activatedDate;
    }

    public function setActivatedDate(?\DateTime $activatedDate): self
    {
        $this->activatedDate = $activatedDate;

        return $this;
    }

    public function getInactivatedDate(): ?\DateTime
    {
        return $this->inactivatedDate;
    }

    public function setInactivatedDate(?\DateTime $inactivatedDate): self
    {
        $this->inactivatedDate = $inactivatedDate;

        return $this;
    }

    public function getExpiryDate(): ?\DateTime
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(?\DateTime $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    public function getCardSubStatusId(): ?string
    {
        return $this->cardSubStatusId;
    }

    public function setCardSubStatusId(?string $cardSubStatusId): self
    {
        $this->cardSubStatusId = $cardSubStatusId;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

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
