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

class Country
{
    /**
     * @var null|string
     */
    protected $countryId;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|string
     */
    protected $isoCode2;
    /**
     * @var null|string
     */
    protected $isoCode3;

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIsoCode2(): ?string
    {
        return $this->isoCode2;
    }

    public function setIsoCode2(?string $isoCode2): self
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    public function getIsoCode3(): ?string
    {
        return $this->isoCode3;
    }

    public function setIsoCode3(?string $isoCode3): self
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }
}
