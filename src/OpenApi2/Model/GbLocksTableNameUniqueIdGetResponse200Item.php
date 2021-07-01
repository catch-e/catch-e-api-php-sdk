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

class GbLocksTableNameUniqueIdGetResponse200Item
{
	/**
	 * @var string|null
	 */
	protected $lockKey;
	/**
	 * @var string|null
	 */
	protected $sessionId;
	/**
	 * @var string|null
	 */
	protected $tableName;
	/**
	 * @var string|null
	 */
	protected $userId;
	/**
	 * @var string|null
	 */
	protected $created;
	/**
	 * @var string|null
	 */
	protected $timeout;

	public function getLockKey(): ?string
	{
		return $this->lockKey;
	}

	public function setLockKey(?string $lockKey): self
	{
		$this->lockKey = $lockKey;

		return $this;
	}

	public function getSessionId(): ?string
	{
		return $this->sessionId;
	}

	public function setSessionId(?string $sessionId): self
	{
		$this->sessionId = $sessionId;

		return $this;
	}

	public function getTableName(): ?string
	{
		return $this->tableName;
	}

	public function setTableName(?string $tableName): self
	{
		$this->tableName = $tableName;

		return $this;
	}

	public function getUserId(): ?string
	{
		return $this->userId;
	}

	public function setUserId(?string $userId): self
	{
		$this->userId = $userId;

		return $this;
	}

	public function getCreated(): ?string
	{
		return $this->created;
	}

	public function setCreated(?string $created): self
	{
		$this->created = $created;

		return $this;
	}

	public function getTimeout(): ?string
	{
		return $this->timeout;
	}

	public function setTimeout(?string $timeout): self
	{
		$this->timeout = $timeout;

		return $this;
	}
}
