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

class ChildQuotesGetEmbedded
{
    /**
     * @var null|string
     */
    protected $quoteId;
    /**
     * @var null|mixed
     */
    protected $childQuotes;

    public function getQuoteId(): ?string
    {
        return $this->quoteId;
    }

    public function setQuoteId(?string $quoteId): self
    {
        $this->quoteId = $quoteId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildQuotes()
    {
        return $this->childQuotes;
    }

    /**
     * @param mixed $childQuotes
     */
    public function setChildQuotes($childQuotes): self
    {
        $this->childQuotes = $childQuotes;

        return $this;
    }
}
