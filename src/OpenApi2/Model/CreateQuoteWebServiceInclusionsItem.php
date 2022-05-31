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

class CreateQuoteWebServiceInclusionsItem
{
    /**
     * Setting this will apply the defined inclusion to the quote.
     * If there is only one available plan, the inclusion_plan_code field is not required as the default plan will be used.
     *
     * @var null|string
     */
    protected $inclusionCode;
    /**
     * If there are multiple plans available for an inclusion, the plan to use must also be defined.
     * eg: LIPLAN2 would populate this plan into the quote.
     *
     * @var null|string
     */
    protected $inclusionPlanCode;

    /**
     * Setting this will apply the defined inclusion to the quote.
     * If there is only one available plan, the inclusion_plan_code field is not required as the default plan will be used.
     */
    public function getInclusionCode(): ?string
    {
        return $this->inclusionCode;
    }

    /**
     * Setting this will apply the defined inclusion to the quote.
     * If there is only one available plan, the inclusion_plan_code field is not required as the default plan will be used.
     */
    public function setInclusionCode(?string $inclusionCode): self
    {
        $this->inclusionCode = $inclusionCode;

        return $this;
    }

    /**
     * If there are multiple plans available for an inclusion, the plan to use must also be defined.
     * eg: LIPLAN2 would populate this plan into the quote.
     */
    public function getInclusionPlanCode(): ?string
    {
        return $this->inclusionPlanCode;
    }

    /**
     * If there are multiple plans available for an inclusion, the plan to use must also be defined.
     * eg: LIPLAN2 would populate this plan into the quote.
     */
    public function setInclusionPlanCode(?string $inclusionPlanCode): self
    {
        $this->inclusionPlanCode = $inclusionPlanCode;

        return $this;
    }
}
