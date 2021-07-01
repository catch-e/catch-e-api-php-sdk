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

class Forbidden
{
	/**
	 * @var string|null
	 */
	protected $type;
	/**
	 * @var string|null
	 */
	protected $title;
	/**
	 * @var int|null
	 */
	protected $status;
	/**
	 * @var string|null
	 */
	protected $detail;

	public function getType(): ?string
	{
		return $this->type;
	}

	public function setType(?string $type): self
	{
		$this->type = $type;

		return $this;
	}

	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(?string $title): self
	{
		$this->title = $title;

		return $this;
	}

	public function getStatus(): ?int
	{
		return $this->status;
	}

	public function setStatus(?int $status): self
	{
		$this->status = $status;

		return $this;
	}

	public function getDetail(): ?string
	{
		return $this->detail;
	}

	public function setDetail(?string $detail): self
	{
		$this->detail = $detail;

		return $this;
	}
}
