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

class AutoPostClaimsSuccess
{
    /**
     * @var null|string[]
     */
    protected $processedClaims;
    /**
     * @var null|mixed
     */
    protected $exceptions;
    /**
     * @var null|mixed
     */
    protected $links;

    /**
     * @return null|string[]
     */
    public function getProcessedClaims(): ?array
    {
        return $this->processedClaims;
    }

    /**
     * @param null|string[] $processedClaims
     */
    public function setProcessedClaims(?array $processedClaims): self
    {
        $this->processedClaims = $processedClaims;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * @param mixed $exceptions
     */
    public function setExceptions($exceptions): self
    {
        $this->exceptions = $exceptions;

        return $this;
    }

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
}
