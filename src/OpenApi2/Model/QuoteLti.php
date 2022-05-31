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

class QuoteLti
{
    /**
     * @var null|string
     */
    protected $ltiPlanId;
    /**
     * @var null|string
     */
    protected $ltiTopUpBenefitId;
    /**
     * @var null|string
     */
    protected $externalQuotationNumber;
    /**
     * @var null|float
     */
    protected $retailPriceNet;
    /**
     * @var null|float
     */
    protected $retailPriceGross;
    /**
     * @var null|float
     */
    protected $costPriceNet;
    /**
     * @var null|float
     */
    protected $marginNet;
    /**
     * @var null|float
     */
    protected $retailPriceGst;
    /**
     * @var null|float
     */
    protected $retailPriceStampDuty;
    /**
     * @var null|\DateTime
     */
    protected $requestDate;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getLtiPlanId(): ?string
    {
        return $this->ltiPlanId;
    }

    public function setLtiPlanId(?string $ltiPlanId): self
    {
        $this->ltiPlanId = $ltiPlanId;

        return $this;
    }

    public function getLtiTopUpBenefitId(): ?string
    {
        return $this->ltiTopUpBenefitId;
    }

    public function setLtiTopUpBenefitId(?string $ltiTopUpBenefitId): self
    {
        $this->ltiTopUpBenefitId = $ltiTopUpBenefitId;

        return $this;
    }

    public function getExternalQuotationNumber(): ?string
    {
        return $this->externalQuotationNumber;
    }

    public function setExternalQuotationNumber(?string $externalQuotationNumber): self
    {
        $this->externalQuotationNumber = $externalQuotationNumber;

        return $this;
    }

    public function getRetailPriceNet(): ?float
    {
        return $this->retailPriceNet;
    }

    public function setRetailPriceNet(?float $retailPriceNet): self
    {
        $this->retailPriceNet = $retailPriceNet;

        return $this;
    }

    public function getRetailPriceGross(): ?float
    {
        return $this->retailPriceGross;
    }

    public function setRetailPriceGross(?float $retailPriceGross): self
    {
        $this->retailPriceGross = $retailPriceGross;

        return $this;
    }

    public function getCostPriceNet(): ?float
    {
        return $this->costPriceNet;
    }

    public function setCostPriceNet(?float $costPriceNet): self
    {
        $this->costPriceNet = $costPriceNet;

        return $this;
    }

    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }

    public function setMarginNet(?float $marginNet): self
    {
        $this->marginNet = $marginNet;

        return $this;
    }

    public function getRetailPriceGst(): ?float
    {
        return $this->retailPriceGst;
    }

    public function setRetailPriceGst(?float $retailPriceGst): self
    {
        $this->retailPriceGst = $retailPriceGst;

        return $this;
    }

    public function getRetailPriceStampDuty(): ?float
    {
        return $this->retailPriceStampDuty;
    }

    public function setRetailPriceStampDuty(?float $retailPriceStampDuty): self
    {
        $this->retailPriceStampDuty = $retailPriceStampDuty;

        return $this;
    }

    public function getRequestDate(): ?\DateTime
    {
        return $this->requestDate;
    }

    public function setRequestDate(?\DateTime $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    public function getIncludedFlag(): ?string
    {
        return $this->includedFlag;
    }

    public function setIncludedFlag(?string $includedFlag): self
    {
        $this->includedFlag = $includedFlag;

        return $this;
    }
}
