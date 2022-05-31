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

class GetDrivers
{
    /**
     * @var null|mixed
     */
    protected $links;
    /**
     * @var null|GetDriversEmbedded
     */
    protected $embedded;

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getEmbedded(): ?GetDriversEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?GetDriversEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }
}
