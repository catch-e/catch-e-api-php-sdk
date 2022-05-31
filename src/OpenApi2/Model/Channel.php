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

class Channel
{
    /**
     * @var null|string
     */
    protected $channelId;
    /**
     * @var null|string
     */
    protected $companyId;
    /**
     * @var null|string
     */
    protected $channelGroupId;
    /**
     * @var null|string
     */
    protected $channelCode;
    /**
     * @var null|string
     */
    protected $channel;
    /**
     * Bank Name.
     *
     * @var null|string
     */
    protected $bankAccountName;
    /**
     * Bank BSB.
     *
     * @var null|string
     */
    protected $bankBsb;
    /**
     * Bank Account number.
     *
     * @var null|string
     */
    protected $bankAccountNumber;
    /**
     * Status flag.
     *
     * @var null|string
     */
    protected $statusFlag = 'active';
    /**
     * @var null|ChannelLinks
     */
    protected $links;

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    public function setCompanyId(?string $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    public function getChannelGroupId(): ?string
    {
        return $this->channelGroupId;
    }

    public function setChannelGroupId(?string $channelGroupId): self
    {
        $this->channelGroupId = $channelGroupId;

        return $this;
    }

    public function getChannelCode(): ?string
    {
        return $this->channelCode;
    }

    public function setChannelCode(?string $channelCode): self
    {
        $this->channelCode = $channelCode;

        return $this;
    }

    public function getChannel(): ?string
    {
        return $this->channel;
    }

    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Bank Name.
     */
    public function getBankAccountName(): ?string
    {
        return $this->bankAccountName;
    }

    /**
     * Bank Name.
     */
    public function setBankAccountName(?string $bankAccountName): self
    {
        $this->bankAccountName = $bankAccountName;

        return $this;
    }

    /**
     * Bank BSB.
     */
    public function getBankBsb(): ?string
    {
        return $this->bankBsb;
    }

    /**
     * Bank BSB.
     */
    public function setBankBsb(?string $bankBsb): self
    {
        $this->bankBsb = $bankBsb;

        return $this;
    }

    /**
     * Bank Account number.
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * Bank Account number.
     */
    public function setBankAccountNumber(?string $bankAccountNumber): self
    {
        $this->bankAccountNumber = $bankAccountNumber;

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

    public function getLinks(): ?ChannelLinks
    {
        return $this->links;
    }

    public function setLinks(?ChannelLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
