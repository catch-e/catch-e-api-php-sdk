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

class PayoutStatusesGetLinks
{
    /**
     * @var null|PayoutStatusesGetLinksSelf
     */
    protected $self;
    /**
     * @var null|PayoutStatusesGetLinksFirst
     */
    protected $first;
    /**
     * @var null|PayoutStatusesGetLinksLast
     */
    protected $last;

    public function getSelf(): ?PayoutStatusesGetLinksSelf
    {
        return $this->self;
    }

    public function setSelf(?PayoutStatusesGetLinksSelf $self): self
    {
        $this->self = $self;

        return $this;
    }

    public function getFirst(): ?PayoutStatusesGetLinksFirst
    {
        return $this->first;
    }

    public function setFirst(?PayoutStatusesGetLinksFirst $first): self
    {
        $this->first = $first;

        return $this;
    }

    public function getLast(): ?PayoutStatusesGetLinksLast
    {
        return $this->last;
    }

    public function setLast(?PayoutStatusesGetLinksLast $last): self
    {
        $this->last = $last;

        return $this;
    }
}
