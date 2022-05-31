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

class SignonTokenCreate
{
    /**
     * User login.
     *
     * @var null|string
     */
    protected $userLogin;
    /**
     * (Optional) Token timeout in seconds. If specified, the issued signon token will expire after the specified number of seconds.
     *
     * @var null|int
     */
    protected $tokenTimeout;
    /**
     * (Optional) If set to 'yes', the specified user login must be associated with a role that has its single_signon_flag set to 'yes'.
     *
     * @var null|string
     */
    protected $singleSignonRoleFlag = 'no';
    /**
     * (Optional) Screen width in pixels.
     *
     * @var null|int
     */
    protected $screenWidth;
    /**
     * (Optional) Screen height in pixels.
     *
     * @var null|int
     */
    protected $screenHeight;
    /**
     * (Optional) If specified, a gb_users record for defined role will be generated. The entity association is inferred from the user_login value.
     *
     * @var null|string
     */
    protected $createGbUserWithThisRole;

    /**
     * User login.
     */
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }

    /**
     * User login.
     */
    public function setUserLogin(?string $userLogin): self
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * (Optional) Token timeout in seconds. If specified, the issued signon token will expire after the specified number of seconds.
     */
    public function getTokenTimeout(): ?int
    {
        return $this->tokenTimeout;
    }

    /**
     * (Optional) Token timeout in seconds. If specified, the issued signon token will expire after the specified number of seconds.
     */
    public function setTokenTimeout(?int $tokenTimeout): self
    {
        $this->tokenTimeout = $tokenTimeout;

        return $this;
    }

    /**
     * (Optional) If set to 'yes', the specified user login must be associated with a role that has its single_signon_flag set to 'yes'.
     */
    public function getSingleSignonRoleFlag(): ?string
    {
        return $this->singleSignonRoleFlag;
    }

    /**
     * (Optional) If set to 'yes', the specified user login must be associated with a role that has its single_signon_flag set to 'yes'.
     */
    public function setSingleSignonRoleFlag(?string $singleSignonRoleFlag): self
    {
        $this->singleSignonRoleFlag = $singleSignonRoleFlag;

        return $this;
    }

    /**
     * (Optional) Screen width in pixels.
     */
    public function getScreenWidth(): ?int
    {
        return $this->screenWidth;
    }

    /**
     * (Optional) Screen width in pixels.
     */
    public function setScreenWidth(?int $screenWidth): self
    {
        $this->screenWidth = $screenWidth;

        return $this;
    }

    /**
     * (Optional) Screen height in pixels.
     */
    public function getScreenHeight(): ?int
    {
        return $this->screenHeight;
    }

    /**
     * (Optional) Screen height in pixels.
     */
    public function setScreenHeight(?int $screenHeight): self
    {
        $this->screenHeight = $screenHeight;

        return $this;
    }

    /**
     * (Optional) If specified, a gb_users record for defined role will be generated. The entity association is inferred from the user_login value.
     */
    public function getCreateGbUserWithThisRole(): ?string
    {
        return $this->createGbUserWithThisRole;
    }

    /**
     * (Optional) If specified, a gb_users record for defined role will be generated. The entity association is inferred from the user_login value.
     */
    public function setCreateGbUserWithThisRole(?string $createGbUserWithThisRole): self
    {
        $this->createGbUserWithThisRole = $createGbUserWithThisRole;

        return $this;
    }
}
