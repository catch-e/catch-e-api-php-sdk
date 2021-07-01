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

class GbUniqueIdsTableNameGetResponse200
{
	/**
	 * @var string|null
	 */
	protected $tableName;
	/**
	 * @var string|null
	 */
	protected $uniqueId;
	/**
	 * @var GbUniqueIdsTableNameGetResponse200Links|null
	 */
	protected $links;

	public function getTableName(): ?string
	{
		return $this->tableName;
	}

	public function setTableName(?string $tableName): self
	{
		$this->tableName = $tableName;

		return $this;
	}

	public function getUniqueId(): ?string
	{
		return $this->uniqueId;
	}

	public function setUniqueId(?string $uniqueId): self
	{
		$this->uniqueId = $uniqueId;

		return $this;
	}

	public function getLinks(): ?GbUniqueIdsTableNameGetResponse200Links
	{
		return $this->links;
	}

	public function setLinks(?GbUniqueIdsTableNameGetResponse200Links $links): self
	{
		$this->links = $links;

		return $this;
	}
}
