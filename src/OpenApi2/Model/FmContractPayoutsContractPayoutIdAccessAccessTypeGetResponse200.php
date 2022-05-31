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

class FmContractPayoutsContractPayoutIdAccessAccessTypeGetResponse200
{
    /**
     * @var null|string
     */
    protected $edit;
    /**
     * @var null|string
     */
    protected $print;
    /**
     * @var null|string
     */
    protected $delete;

    public function getEdit(): ?string
    {
        return $this->edit;
    }

    public function setEdit(?string $edit): self
    {
        $this->edit = $edit;

        return $this;
    }

    public function getPrint(): ?string
    {
        return $this->print;
    }

    public function setPrint(?string $print): self
    {
        $this->print = $print;

        return $this;
    }

    public function getDelete(): ?string
    {
        return $this->delete;
    }

    public function setDelete(?string $delete): self
    {
        $this->delete = $delete;

        return $this;
    }
}
