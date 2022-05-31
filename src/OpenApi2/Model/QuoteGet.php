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

class QuoteGet
{
    /**
     * @var null|string
     */
    protected $quoteId;
    /**
     * @var null|QuoteGetEmbedded
     */
    protected $embedded;
    /**
     * @var null|QuoteGetLinks
     */
    protected $links;

    public function getQuoteId(): ?string
    {
        return $this->quoteId;
    }

    public function setQuoteId(?string $quoteId): self
    {
        $this->quoteId = $quoteId;

        return $this;
    }

    public function getEmbedded(): ?QuoteGetEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?QuoteGetEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }

    public function getLinks(): ?QuoteGetLinks
    {
        return $this->links;
    }

    public function setLinks(?QuoteGetLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
