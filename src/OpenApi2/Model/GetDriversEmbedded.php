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

class GetDriversEmbedded
{
    /**
     * @var null|Driver[]
     */
    protected $fmDrivers;

    /**
     * @return null|Driver[]
     */
    public function getFmDrivers(): ?array
    {
        return $this->fmDrivers;
    }

    /**
     * @param null|Driver[] $fmDrivers
     */
    public function setFmDrivers(?array $fmDrivers): self
    {
        $this->fmDrivers = $fmDrivers;

        return $this;
    }
}
