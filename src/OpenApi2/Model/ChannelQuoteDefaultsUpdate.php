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

class ChannelQuoteDefaultsUpdate
{
    /**
     * Channel id.
     *
     * @var null|string
     */
    protected $channelId = '0';
    /**
     * Novated management fees.
     *
     * @var null|float
     */
    protected $novatedManagementFee = 0;
    /**
     * Operating management fees.
     *
     * @var null|float
     */
    protected $operatingManagementFee = 0;
    /**
     * Financier.
     *
     * @var null|string
     */
    protected $supplierIdFinancier = '0';
    /**
     * Novated commision rate.
     *
     * @var null|float
     */
    protected $novatedCommissionRate = 0;
    /**
     * @var null|string
     */
    protected $contractPayCycleFromQuoteFlag = 'no';
    /**
     * @var null|string
     */
    protected $financeBudgetTermDeferredFlag = 'no';
    /**
     * @var null|int
     */
    protected $periodsDeferred = 0;
    /**
     * @var null|string
     */
    protected $reportFinancePaymentsFlag = 'no';

    /**
     * Channel id.
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * Channel id.
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Novated management fees.
     */
    public function getNovatedManagementFee(): ?float
    {
        return $this->novatedManagementFee;
    }

    /**
     * Novated management fees.
     */
    public function setNovatedManagementFee(?float $novatedManagementFee): self
    {
        $this->novatedManagementFee = $novatedManagementFee;

        return $this;
    }

    /**
     * Operating management fees.
     */
    public function getOperatingManagementFee(): ?float
    {
        return $this->operatingManagementFee;
    }

    /**
     * Operating management fees.
     */
    public function setOperatingManagementFee(?float $operatingManagementFee): self
    {
        $this->operatingManagementFee = $operatingManagementFee;

        return $this;
    }

    /**
     * Financier.
     */
    public function getSupplierIdFinancier(): ?string
    {
        return $this->supplierIdFinancier;
    }

    /**
     * Financier.
     */
    public function setSupplierIdFinancier(?string $supplierIdFinancier): self
    {
        $this->supplierIdFinancier = $supplierIdFinancier;

        return $this;
    }

    /**
     * Novated commision rate.
     */
    public function getNovatedCommissionRate(): ?float
    {
        return $this->novatedCommissionRate;
    }

    /**
     * Novated commision rate.
     */
    public function setNovatedCommissionRate(?float $novatedCommissionRate): self
    {
        $this->novatedCommissionRate = $novatedCommissionRate;

        return $this;
    }

    public function getContractPayCycleFromQuoteFlag(): ?string
    {
        return $this->contractPayCycleFromQuoteFlag;
    }

    public function setContractPayCycleFromQuoteFlag(?string $contractPayCycleFromQuoteFlag): self
    {
        $this->contractPayCycleFromQuoteFlag = $contractPayCycleFromQuoteFlag;

        return $this;
    }

    public function getFinanceBudgetTermDeferredFlag(): ?string
    {
        return $this->financeBudgetTermDeferredFlag;
    }

    public function setFinanceBudgetTermDeferredFlag(?string $financeBudgetTermDeferredFlag): self
    {
        $this->financeBudgetTermDeferredFlag = $financeBudgetTermDeferredFlag;

        return $this;
    }

    public function getPeriodsDeferred(): ?int
    {
        return $this->periodsDeferred;
    }

    public function setPeriodsDeferred(?int $periodsDeferred): self
    {
        $this->periodsDeferred = $periodsDeferred;

        return $this;
    }

    public function getReportFinancePaymentsFlag(): ?string
    {
        return $this->reportFinancePaymentsFlag;
    }

    public function setReportFinancePaymentsFlag(?string $reportFinancePaymentsFlag): self
    {
        $this->reportFinancePaymentsFlag = $reportFinancePaymentsFlag;

        return $this;
    }
}
