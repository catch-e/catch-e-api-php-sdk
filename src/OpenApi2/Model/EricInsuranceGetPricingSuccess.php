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

class EricInsuranceGetPricingSuccess
{
    /**
     * @var null|string
     */
    protected $quoteId;
    /**
     * @var null|string
     */
    protected $ericQuoteId;
    /**
     * @var null|string
     */
    protected $ericQuotationReferenceNumber;
    /**
     * @var null|float
     */
    protected $inclusionPlanTotal;
    /**
     * @var null|EricInsuranceQuotedInclusion[]
     */
    protected $quotedInclusions;

    public function getQuoteId(): ?string
    {
        return $this->quoteId;
    }

    public function setQuoteId(?string $quoteId): self
    {
        $this->quoteId = $quoteId;

        return $this;
    }

    public function getEricQuoteId(): ?string
    {
        return $this->ericQuoteId;
    }

    public function setEricQuoteId(?string $ericQuoteId): self
    {
        $this->ericQuoteId = $ericQuoteId;

        return $this;
    }

    public function getEricQuotationReferenceNumber(): ?string
    {
        return $this->ericQuotationReferenceNumber;
    }

    public function setEricQuotationReferenceNumber(?string $ericQuotationReferenceNumber): self
    {
        $this->ericQuotationReferenceNumber = $ericQuotationReferenceNumber;

        return $this;
    }

    public function getInclusionPlanTotal(): ?float
    {
        return $this->inclusionPlanTotal;
    }

    public function setInclusionPlanTotal(?float $inclusionPlanTotal): self
    {
        $this->inclusionPlanTotal = $inclusionPlanTotal;

        return $this;
    }

    /**
     * @return null|EricInsuranceQuotedInclusion[]
     */
    public function getQuotedInclusions(): ?array
    {
        return $this->quotedInclusions;
    }

    /**
     * @param null|EricInsuranceQuotedInclusion[] $quotedInclusions
     */
    public function setQuotedInclusions(?array $quotedInclusions): self
    {
        $this->quotedInclusions = $quotedInclusions;

        return $this;
    }
}
