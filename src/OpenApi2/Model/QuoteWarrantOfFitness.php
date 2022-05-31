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

class QuoteWarrantOfFitness
{
    /**
     * @var null|float
     */
    protected $annualWarrantOfFitness;
    /**
     * @var null|float
     */
    protected $renewals;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getAnnualWarrantOfFitness(): ?float
    {
        return $this->annualWarrantOfFitness;
    }

    public function setAnnualWarrantOfFitness(?float $annualWarrantOfFitness): self
    {
        $this->annualWarrantOfFitness = $annualWarrantOfFitness;

        return $this;
    }

    public function getRenewals(): ?float
    {
        return $this->renewals;
    }

    public function setRenewals(?float $renewals): self
    {
        $this->renewals = $renewals;

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
