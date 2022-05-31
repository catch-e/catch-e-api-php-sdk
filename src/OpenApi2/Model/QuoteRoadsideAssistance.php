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

class QuoteRoadsideAssistance
{
    /**
     * @var null|string
     */
    protected $roadsideAssistancePlanId;
    /**
     * @var null|float
     */
    protected $premium;
    /**
     * @var null|float
     */
    protected $cost;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getRoadsideAssistancePlanId(): ?string
    {
        return $this->roadsideAssistancePlanId;
    }

    public function setRoadsideAssistancePlanId(?string $roadsideAssistancePlanId): self
    {
        $this->roadsideAssistancePlanId = $roadsideAssistancePlanId;

        return $this;
    }

    public function getPremium(): ?float
    {
        return $this->premium;
    }

    public function setPremium(?float $premium): self
    {
        $this->premium = $premium;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

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
