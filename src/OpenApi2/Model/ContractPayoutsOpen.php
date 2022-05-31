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

class ContractPayoutsOpen
{
    /**
     * @var null|float
     */
    protected $priceToPurchaseNet;
    /**
     * @var null|float
     */
    protected $earlyTerminationFeeNet;
    /**
     * @var null|float
     */
    protected $totalLossNet;
    /**
     * Override warning validation. If not specified, defaults to 'no'.
     *
     * @var null|string
     */
    protected $overrideWarningsFlag;

    public function getPriceToPurchaseNet(): ?float
    {
        return $this->priceToPurchaseNet;
    }

    public function setPriceToPurchaseNet(?float $priceToPurchaseNet): self
    {
        $this->priceToPurchaseNet = $priceToPurchaseNet;

        return $this;
    }

    public function getEarlyTerminationFeeNet(): ?float
    {
        return $this->earlyTerminationFeeNet;
    }

    public function setEarlyTerminationFeeNet(?float $earlyTerminationFeeNet): self
    {
        $this->earlyTerminationFeeNet = $earlyTerminationFeeNet;

        return $this;
    }

    public function getTotalLossNet(): ?float
    {
        return $this->totalLossNet;
    }

    public function setTotalLossNet(?float $totalLossNet): self
    {
        $this->totalLossNet = $totalLossNet;

        return $this;
    }

    /**
     * Override warning validation. If not specified, defaults to 'no'.
     */
    public function getOverrideWarningsFlag(): ?string
    {
        return $this->overrideWarningsFlag;
    }

    /**
     * Override warning validation. If not specified, defaults to 'no'.
     */
    public function setOverrideWarningsFlag(?string $overrideWarningsFlag): self
    {
        $this->overrideWarningsFlag = $overrideWarningsFlag;

        return $this;
    }
}
