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

class ContractPayoutsEstimate
{
    /**
     * @var null|float
     */
    protected $calculatedValueNet;
    /**
     * @var null|float
     */
    protected $calculatedValueGst;
    /**
     * @var null|int
     */
    protected $remainingBillings;

    public function getCalculatedValueNet(): ?float
    {
        return $this->calculatedValueNet;
    }

    public function setCalculatedValueNet(?float $calculatedValueNet): self
    {
        $this->calculatedValueNet = $calculatedValueNet;

        return $this;
    }

    public function getCalculatedValueGst(): ?float
    {
        return $this->calculatedValueGst;
    }

    public function setCalculatedValueGst(?float $calculatedValueGst): self
    {
        $this->calculatedValueGst = $calculatedValueGst;

        return $this;
    }

    public function getRemainingBillings(): ?int
    {
        return $this->remainingBillings;
    }

    public function setRemainingBillings(?int $remainingBillings): self
    {
        $this->remainingBillings = $remainingBillings;

        return $this;
    }
}
