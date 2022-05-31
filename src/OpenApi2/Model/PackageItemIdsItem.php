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

class PackageItemIdsItem
{
    /**
     * Package Item Id.
     *
     * @var null|string
     */
    protected $packageItemId;
    /**
     * Package name.
     *
     * @var null|string
     */
    protected $packageName;

    /**
     * Package Item Id.
     */
    public function getPackageItemId(): ?string
    {
        return $this->packageItemId;
    }

    /**
     * Package Item Id.
     */
    public function setPackageItemId(?string $packageItemId): self
    {
        $this->packageItemId = $packageItemId;

        return $this;
    }

    /**
     * Package name.
     */
    public function getPackageName(): ?string
    {
        return $this->packageName;
    }

    /**
     * Package name.
     */
    public function setPackageName(?string $packageName): self
    {
        $this->packageName = $packageName;

        return $this;
    }
}
