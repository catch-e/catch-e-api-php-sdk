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

class SpEmployeeDriverIdPayCycleDetailsGetResponse200
{
    /**
     * @var null|string
     */
    protected $payCycleCode;
    /**
     * @var null|string
     */
    protected $payCycle;
    /**
     * @var null|\DateTime
     */
    protected $payrollDate;

    public function getPayCycleCode(): ?string
    {
        return $this->payCycleCode;
    }

    public function setPayCycleCode(?string $payCycleCode): self
    {
        $this->payCycleCode = $payCycleCode;

        return $this;
    }

    public function getPayCycle(): ?string
    {
        return $this->payCycle;
    }

    public function setPayCycle(?string $payCycle): self
    {
        $this->payCycle = $payCycle;

        return $this;
    }

    public function getPayrollDate(): ?\DateTime
    {
        return $this->payrollDate;
    }

    public function setPayrollDate(?\DateTime $payrollDate): self
    {
        $this->payrollDate = $payrollDate;

        return $this;
    }
}
