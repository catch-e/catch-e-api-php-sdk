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

class QuoteInsuranceLoadingTypes
{
    /**
     * @var null|QuoteInsuranceLoadingType
     */
    protected $pastClaims;
    /**
     * @var null|QuoteInsuranceLoadingType
     */
    protected $licence;
    /**
     * @var null|QuoteInsuranceLoadingType
     */
    protected $driverRestriction;

    public function getPastClaims(): ?QuoteInsuranceLoadingType
    {
        return $this->pastClaims;
    }

    public function setPastClaims(?QuoteInsuranceLoadingType $pastClaims): self
    {
        $this->pastClaims = $pastClaims;

        return $this;
    }

    public function getLicence(): ?QuoteInsuranceLoadingType
    {
        return $this->licence;
    }

    public function setLicence(?QuoteInsuranceLoadingType $licence): self
    {
        $this->licence = $licence;

        return $this;
    }

    public function getDriverRestriction(): ?QuoteInsuranceLoadingType
    {
        return $this->driverRestriction;
    }

    public function setDriverRestriction(?QuoteInsuranceLoadingType $driverRestriction): self
    {
        $this->driverRestriction = $driverRestriction;

        return $this;
    }
}
