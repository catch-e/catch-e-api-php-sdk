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

class QuoteInsuranceDisclosure
{
    /**
     * @var null|string
     */
    protected $insuranceDisclosuresId;
    /**
     * @var null|string
     */
    protected $value;

    public function getInsuranceDisclosuresId(): ?string
    {
        return $this->insuranceDisclosuresId;
    }

    public function setInsuranceDisclosuresId(?string $insuranceDisclosuresId): self
    {
        $this->insuranceDisclosuresId = $insuranceDisclosuresId;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
