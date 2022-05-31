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

class ContactTypeAllocationGetLinks
{
    /**
     * @var null|ContactTypeAllocationGetLinksContact
     */
    protected $contact;
    /**
     * @var null|ContactTypeAllocationGetLinksContactType
     */
    protected $contactType;

    public function getContact(): ?ContactTypeAllocationGetLinksContact
    {
        return $this->contact;
    }

    public function setContact(?ContactTypeAllocationGetLinksContact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getContactType(): ?ContactTypeAllocationGetLinksContactType
    {
        return $this->contactType;
    }

    public function setContactType(?ContactTypeAllocationGetLinksContactType $contactType): self
    {
        $this->contactType = $contactType;

        return $this;
    }
}
