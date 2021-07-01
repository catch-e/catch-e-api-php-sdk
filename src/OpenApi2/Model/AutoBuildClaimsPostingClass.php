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

class AutoBuildClaimsPostingClass
{
	/**
	 * @var string|null
	 */
	protected $postingClassId;
	/**
	 * @var string|null
	 */
	protected $postingClassCode;
	/**
	 * @var string|null
	 */
	protected $name;

	public function getPostingClassId(): ?string
	{
		return $this->postingClassId;
	}

	public function setPostingClassId(?string $postingClassId): self
	{
		$this->postingClassId = $postingClassId;

		return $this;
	}

	public function getPostingClassCode(): ?string
	{
		return $this->postingClassCode;
	}

	public function setPostingClassCode(?string $postingClassCode): self
	{
		$this->postingClassCode = $postingClassCode;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;

		return $this;
	}
}
