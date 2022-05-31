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

class SalaryPackagingDisbursementCycle
{
    /**
     * @var null|string
     */
    protected $disbursementCycleId;
    /**
     * @var null|string
     */
    protected $disbursementCycleCode;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|float
     */
    protected $payCyclesPerYear;

    public function getDisbursementCycleId(): ?string
    {
        return $this->disbursementCycleId;
    }

    public function setDisbursementCycleId(?string $disbursementCycleId): self
    {
        $this->disbursementCycleId = $disbursementCycleId;

        return $this;
    }

    public function getDisbursementCycleCode(): ?string
    {
        return $this->disbursementCycleCode;
    }

    public function setDisbursementCycleCode(?string $disbursementCycleCode): self
    {
        $this->disbursementCycleCode = $disbursementCycleCode;

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

    public function getPayCyclesPerYear(): ?float
    {
        return $this->payCyclesPerYear;
    }

    public function setPayCyclesPerYear(?float $payCyclesPerYear): self
    {
        $this->payCyclesPerYear = $payCyclesPerYear;

        return $this;
    }
}
