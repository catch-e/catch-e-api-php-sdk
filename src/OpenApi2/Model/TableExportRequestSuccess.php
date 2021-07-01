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

class TableExportRequestSuccess
{
	/**
	 * @var string|null
	 */
	protected $tableExportId;
	/**
	 * @var string|null
	 */
	protected $format;
	/**
	 * @var string|null
	 */
	protected $sampleRowsOnlyFlag;

	public function getTableExportId(): ?string
	{
		return $this->tableExportId;
	}

	public function setTableExportId(?string $tableExportId): self
	{
		$this->tableExportId = $tableExportId;

		return $this;
	}

	public function getFormat(): ?string
	{
		return $this->format;
	}

	public function setFormat(?string $format): self
	{
		$this->format = $format;

		return $this;
	}

	public function getSampleRowsOnlyFlag(): ?string
	{
		return $this->sampleRowsOnlyFlag;
	}

	public function setSampleRowsOnlyFlag(?string $sampleRowsOnlyFlag): self
	{
		$this->sampleRowsOnlyFlag = $sampleRowsOnlyFlag;

		return $this;
	}
}
