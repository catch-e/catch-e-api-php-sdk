<?php
/**
 * Copyright 2021 Catch-e Pty Ltd.
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

class PingPong
{
	/**
	 * @var int|null
	 */
	protected $version;
	/**
	 * @var float|null
	 */
	protected $ack;
	/**
	 * @var string|null
	 */
	protected $authorizedName;
	/**
	 * @var string|null
	 */
	protected $clientId;
	/**
	 * @var string|null
	 */
	protected $environment;
	/**
	 * @var int|null
	 */
	protected $tokenExpiry;

	public function getVersion(): ?int
	{
		return $this->version;
	}

	public function setVersion(?int $version): self
	{
		$this->version = $version;

		return $this;
	}

	public function getAck(): ?float
	{
		return $this->ack;
	}

	public function setAck(?float $ack): self
	{
		$this->ack = $ack;

		return $this;
	}

	public function getAuthorizedName(): ?string
	{
		return $this->authorizedName;
	}

	public function setAuthorizedName(?string $authorizedName): self
	{
		$this->authorizedName = $authorizedName;

		return $this;
	}

	public function getClientId(): ?string
	{
		return $this->clientId;
	}

	public function setClientId(?string $clientId): self
	{
		$this->clientId = $clientId;

		return $this;
	}

	public function getEnvironment(): ?string
	{
		return $this->environment;
	}

	public function setEnvironment(?string $environment): self
	{
		$this->environment = $environment;

		return $this;
	}

	public function getTokenExpiry(): ?int
	{
		return $this->tokenExpiry;
	}

	public function setTokenExpiry(?int $tokenExpiry): self
	{
		$this->tokenExpiry = $tokenExpiry;

		return $this;
	}
}
