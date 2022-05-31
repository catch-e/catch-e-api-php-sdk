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

class QuoteMaintenanceService
{
    /**
     * @var null|string
     */
    protected $maintenanceServiceProfileId;
    /**
     * @var null|float
     */
    protected $serviceKms;
    /**
     * @var null|float
     */
    protected $serviceMths;
    /**
     * @var null|string
     */
    protected $includedFlag = 'yes';

    public function getMaintenanceServiceProfileId(): ?string
    {
        return $this->maintenanceServiceProfileId;
    }

    public function setMaintenanceServiceProfileId(?string $maintenanceServiceProfileId): self
    {
        $this->maintenanceServiceProfileId = $maintenanceServiceProfileId;

        return $this;
    }

    public function getServiceKms(): ?float
    {
        return $this->serviceKms;
    }

    public function setServiceKms(?float $serviceKms): self
    {
        $this->serviceKms = $serviceKms;

        return $this;
    }

    public function getServiceMths(): ?float
    {
        return $this->serviceMths;
    }

    public function setServiceMths(?float $serviceMths): self
    {
        $this->serviceMths = $serviceMths;

        return $this;
    }

    public function getIncludedFlag(): ?string
    {
        return $this->includedFlag;
    }

    public function setIncludedFlag(?string $includedFlag): self
    {
        $this->includedFlag = $includedFlag;

        return $this;
    }
}
