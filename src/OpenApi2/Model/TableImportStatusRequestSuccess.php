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

class TableImportStatusRequestSuccess
{
	/**
	 * @var string|null
	 */
	protected $tableImportId;
	/**
	 * @var string|null
	 */
	protected $tableName;
	/**
	 * @var string|null
	 */
	protected $sha256Checksum;
	/**
	 * @var string|null
	 */
	protected $status;
	/**
	 * (Optional) Number of rows marked valid.
	 *
	 * @var int|null
	 */
	protected $rowsValid;
	/**
	 * (Optional) Number of rows marked invalid.
	 *
	 * @var int|null
	 */
	protected $rowsInvalid;
	/**
	 * (Optional) Number of rows marked imported.
	 *
	 * @var int|null
	 */
	protected $rowsImported;
	/**
	 * (Optional) Number of rows marked updated on import.
	 *
	 * @var int|null
	 */
	protected $rowsUpdated;
	/**
	 * (Optional) Number of rows marked inserted on import.
	 *
	 * @var int|null
	 */
	protected $rowsInserted;
	/**
	 * (Optional) URI to error report if import status is invalid.
	 *
	 * @var string|null
	 */
	protected $errorReportUri;
	/**
	 * (Optional) Exception message thrown from job.
	 *
	 * @var string|null
	 */
	protected $exception;
	/**
	 * (Optional) Row processed when exception thrown.
	 *
	 * @var int|null
	 */
	protected $stoppedOnRow;
	/**
	 * (Optional) Users locking the import process.
	 *
	 * @var string[]|null
	 */
	protected $lockingUsers;

	public function getTableImportId(): ?string
	{
		return $this->tableImportId;
	}

	public function setTableImportId(?string $tableImportId): self
	{
		$this->tableImportId = $tableImportId;

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

	public function getSha256Checksum(): ?string
	{
		return $this->sha256Checksum;
	}

	public function setSha256Checksum(?string $sha256Checksum): self
	{
		$this->sha256Checksum = $sha256Checksum;

		return $this;
	}

	public function getStatus(): ?string
	{
		return $this->status;
	}

	public function setStatus(?string $status): self
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * (Optional) Number of rows marked valid.
	 */
	public function getRowsValid(): ?int
	{
		return $this->rowsValid;
	}

	/**
	 * (Optional) Number of rows marked valid.
	 */
	public function setRowsValid(?int $rowsValid): self
	{
		$this->rowsValid = $rowsValid;

		return $this;
	}

	/**
	 * (Optional) Number of rows marked invalid.
	 */
	public function getRowsInvalid(): ?int
	{
		return $this->rowsInvalid;
	}

	/**
	 * (Optional) Number of rows marked invalid.
	 */
	public function setRowsInvalid(?int $rowsInvalid): self
	{
		$this->rowsInvalid = $rowsInvalid;

		return $this;
	}

	/**
	 * (Optional) Number of rows marked imported.
	 */
	public function getRowsImported(): ?int
	{
		return $this->rowsImported;
	}

	/**
	 * (Optional) Number of rows marked imported.
	 */
	public function setRowsImported(?int $rowsImported): self
	{
		$this->rowsImported = $rowsImported;

		return $this;
	}

	/**
	 * (Optional) Number of rows marked updated on import.
	 */
	public function getRowsUpdated(): ?int
	{
		return $this->rowsUpdated;
	}

	/**
	 * (Optional) Number of rows marked updated on import.
	 */
	public function setRowsUpdated(?int $rowsUpdated): self
	{
		$this->rowsUpdated = $rowsUpdated;

		return $this;
	}

	/**
	 * (Optional) Number of rows marked inserted on import.
	 */
	public function getRowsInserted(): ?int
	{
		return $this->rowsInserted;
	}

	/**
	 * (Optional) Number of rows marked inserted on import.
	 */
	public function setRowsInserted(?int $rowsInserted): self
	{
		$this->rowsInserted = $rowsInserted;

		return $this;
	}

	/**
	 * (Optional) URI to error report if import status is invalid.
	 */
	public function getErrorReportUri(): ?string
	{
		return $this->errorReportUri;
	}

	/**
	 * (Optional) URI to error report if import status is invalid.
	 */
	public function setErrorReportUri(?string $errorReportUri): self
	{
		$this->errorReportUri = $errorReportUri;

		return $this;
	}

	/**
	 * (Optional) Exception message thrown from job.
	 */
	public function getException(): ?string
	{
		return $this->exception;
	}

	/**
	 * (Optional) Exception message thrown from job.
	 */
	public function setException(?string $exception): self
	{
		$this->exception = $exception;

		return $this;
	}

	/**
	 * (Optional) Row processed when exception thrown.
	 */
	public function getStoppedOnRow(): ?int
	{
		return $this->stoppedOnRow;
	}

	/**
	 * (Optional) Row processed when exception thrown.
	 */
	public function setStoppedOnRow(?int $stoppedOnRow): self
	{
		$this->stoppedOnRow = $stoppedOnRow;

		return $this;
	}

	/**
	 * (Optional) Users locking the import process.
	 *
	 * @return string[]|null
	 */
	public function getLockingUsers(): ?array
	{
		return $this->lockingUsers;
	}

	/**
	 * (Optional) Users locking the import process.
	 *
	 * @param string[]|null $lockingUsers
	 */
	public function setLockingUsers(?array $lockingUsers): self
	{
		$this->lockingUsers = $lockingUsers;

		return $this;
	}
}
