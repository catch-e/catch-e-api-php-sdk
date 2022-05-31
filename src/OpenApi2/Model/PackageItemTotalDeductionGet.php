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

class PackageItemTotalDeductionGet
{
    /**
     * @var null|string
     */
    protected $packageItemId;
    /**
     * @var null|string
     */
    protected $packageItemPayCycleId;
    /**
     * @var null|string
     */
    protected $driverId;
    /**
     * @var null|string
     */
    protected $payCycleId;
    /**
     * @var null|string
     */
    protected $compressFlag;
    /**
     * @var null|string
     */
    protected $inertiaFlag;
    /**
     * Deduction Per Pay.
     *
     * @var null|float
     */
    protected $deductionPerPay;
    /**
     * Cycles.
     *
     * @var null|int
     */
    protected $cycles;
    /**
     * Total Deduction.
     *
     * @var null|float
     */
    protected $totalDeduction;

    public function getPackageItemId(): ?string
    {
        return $this->packageItemId;
    }

    public function setPackageItemId(?string $packageItemId): self
    {
        $this->packageItemId = $packageItemId;

        return $this;
    }

    public function getPackageItemPayCycleId(): ?string
    {
        return $this->packageItemPayCycleId;
    }

    public function setPackageItemPayCycleId(?string $packageItemPayCycleId): self
    {
        $this->packageItemPayCycleId = $packageItemPayCycleId;

        return $this;
    }

    public function getDriverId(): ?string
    {
        return $this->driverId;
    }

    public function setDriverId(?string $driverId): self
    {
        $this->driverId = $driverId;

        return $this;
    }

    public function getPayCycleId(): ?string
    {
        return $this->payCycleId;
    }

    public function setPayCycleId(?string $payCycleId): self
    {
        $this->payCycleId = $payCycleId;

        return $this;
    }

    public function getCompressFlag(): ?string
    {
        return $this->compressFlag;
    }

    public function setCompressFlag(?string $compressFlag): self
    {
        $this->compressFlag = $compressFlag;

        return $this;
    }

    public function getInertiaFlag(): ?string
    {
        return $this->inertiaFlag;
    }

    public function setInertiaFlag(?string $inertiaFlag): self
    {
        $this->inertiaFlag = $inertiaFlag;

        return $this;
    }

    /**
     * Deduction Per Pay.
     */
    public function getDeductionPerPay(): ?float
    {
        return $this->deductionPerPay;
    }

    /**
     * Deduction Per Pay.
     */
    public function setDeductionPerPay(?float $deductionPerPay): self
    {
        $this->deductionPerPay = $deductionPerPay;

        return $this;
    }

    /**
     * Cycles.
     */
    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    /**
     * Cycles.
     */
    public function setCycles(?int $cycles): self
    {
        $this->cycles = $cycles;

        return $this;
    }

    /**
     * Total Deduction.
     */
    public function getTotalDeduction(): ?float
    {
        return $this->totalDeduction;
    }

    /**
     * Total Deduction.
     */
    public function setTotalDeduction(?float $totalDeduction): self
    {
        $this->totalDeduction = $totalDeduction;

        return $this;
    }
}
