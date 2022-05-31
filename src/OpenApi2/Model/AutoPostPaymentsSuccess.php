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

class AutoPostPaymentsSuccess
{
    /**
     * @var null|string[]
     */
    protected $processedContracts;
    /**
     * @var null|\DateTime
     */
    protected $datedToDate;
    /**
     * @var null|float
     */
    protected $controlTotal;
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
    public function getProcessedContracts(): ?array
    {
        return $this->processedContracts;
    }

    /**
     * @param null|string[] $processedContracts
     */
    public function setProcessedContracts(?array $processedContracts): self
    {
        $this->processedContracts = $processedContracts;

        return $this;
    }

    public function getDatedToDate(): ?\DateTime
    {
        return $this->datedToDate;
    }

    public function setDatedToDate(?\DateTime $datedToDate): self
    {
        $this->datedToDate = $datedToDate;

        return $this;
    }

    public function getControlTotal(): ?float
    {
        return $this->controlTotal;
    }

    public function setControlTotal(?float $controlTotal): self
    {
        $this->controlTotal = $controlTotal;

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
