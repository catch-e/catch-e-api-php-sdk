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

class AuthenticateSuccess
{
    /**
     * @var null|string
     */
    protected $accessToken;
    /**
     * Token expiry time in seconds.
     *
     * @var null|int
     */
    protected $expiresIn;
    /**
     * @var null|string
     */
    protected $tokenType;

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Token expiry time in seconds.
     */
    public function getExpiresIn(): ?int
    {
        return $this->expiresIn;
    }

    /**
     * Token expiry time in seconds.
     */
    public function setExpiresIn(?int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    public function setTokenType(?string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
