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

class ContactAllocationGet
{
	/**
	 * Contact Id.
	 *
	 * @var string|null
	 */
	protected $contactId;
	/**
	 * Table name.
	 *
	 * @var string|null
	 */
	protected $tableName;
	/**
	 * Record id from the table. E.g. client id from fm_clients table.
	 *
	 * @var string|null
	 */
	protected $recordId;
	/**
	 * Status.
	 *
	 * @var string|null
	 */
	protected $statusFlag;

	/**
	 * Contact Id.
	 */
	public function getContactId(): ?string
	{
		return $this->contactId;
	}

	/**
	 * Contact Id.
	 */
	public function setContactId(?string $contactId): self
	{
		$this->contactId = $contactId;

		return $this;
	}

	/**
	 * Table name.
	 */
	public function getTableName(): ?string
	{
		return $this->tableName;
	}

	/**
	 * Table name.
	 */
	public function setTableName(?string $tableName): self
	{
		$this->tableName = $tableName;

		return $this;
	}

	/**
	 * Record id from the table. E.g. client id from fm_clients table.
	 */
	public function getRecordId(): ?string
	{
		return $this->recordId;
	}

	/**
	 * Record id from the table. E.g. client id from fm_clients table.
	 */
	public function setRecordId(?string $recordId): self
	{
		$this->recordId = $recordId;

		return $this;
	}

	/**
	 * Status.
	 */
	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	/**
	 * Status.
	 */
	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}
}
