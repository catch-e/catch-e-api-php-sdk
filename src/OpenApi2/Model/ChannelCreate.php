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

class ChannelCreate
{
    /**
     * Company Id.
     *
     * @var null|string
     */
    protected $companyId;
    /**
     * Optional Channel Group Id.
     *
     * @var null|string
     */
    protected $channelGroupId;
    /**
     * A unique code for the channel.
     *
     * @var null|string
     */
    protected $channelCode = '';
    /**
     * A name for the channel.
     *
     * @var null|string
     */
    protected $channel = '';
    /**
     * Bank Name.
     *
     * @var null|string
     */
    protected $bankAccountName = '';
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
     * Company Id.
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    /**
     * Company Id.
     */
    public function setCompanyId(?string $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Optional Channel Group Id.
     */
    public function getChannelGroupId(): ?string
    {
        return $this->channelGroupId;
    }

    /**
     * Optional Channel Group Id.
     */
    public function setChannelGroupId(?string $channelGroupId): self
    {
        $this->channelGroupId = $channelGroupId;

        return $this;
    }

    /**
     * A unique code for the channel.
     */
    public function getChannelCode(): ?string
    {
        return $this->channelCode;
    }

    /**
     * A unique code for the channel.
     */
    public function setChannelCode(?string $channelCode): self
    {
        $this->channelCode = $channelCode;

        return $this;
    }

    /**
     * A name for the channel.
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * A name for the channel.
     */
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
}
