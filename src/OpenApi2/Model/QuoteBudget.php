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

class QuoteBudget
{
    /**
     * @var null|string
     */
    protected $postingClassId;
    /**
     * @var null|float
     */
    protected $amountNet;
    /**
     * @var null|float
     */
    protected $amountGst;
    /**
     * @var null|float
     */
    protected $totalAmountNet;
    /**
     * @var null|float
     */
    protected $totalAmountGst;
    /**
     * @var null|string
     */
    protected $notes;

    public function getPostingClassId(): ?string
    {
        return $this->postingClassId;
    }

    public function setPostingClassId(?string $postingClassId): self
    {
        $this->postingClassId = $postingClassId;

        return $this;
    }

    public function getAmountNet(): ?float
    {
        return $this->amountNet;
    }

    public function setAmountNet(?float $amountNet): self
    {
        $this->amountNet = $amountNet;

        return $this;
    }

    public function getAmountGst(): ?float
    {
        return $this->amountGst;
    }

    public function setAmountGst(?float $amountGst): self
    {
        $this->amountGst = $amountGst;

        return $this;
    }

    public function getTotalAmountNet(): ?float
    {
        return $this->totalAmountNet;
    }

    public function setTotalAmountNet(?float $totalAmountNet): self
    {
        $this->totalAmountNet = $totalAmountNet;

        return $this;
    }

    public function getTotalAmountGst(): ?float
    {
        return $this->totalAmountGst;
    }

    public function setTotalAmountGst(?float $totalAmountGst): self
    {
        $this->totalAmountGst = $totalAmountGst;

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
}
