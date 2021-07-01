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

class ChannelGroup
{
	/**
	 * @var string|null
	 */
	protected $channelGroupId;
	/**
	 * @var string|null
	 */
	protected $channelGroupCode;
	/**
	 * @var string|null
	 */
	protected $name;
	/**
	 * @var string|null
	 */
	protected $statusFlag;
	/**
	 * @var ChannelGroupLinks|null
	 */
	protected $links;

	public function getChannelGroupId(): ?string
	{
		return $this->channelGroupId;
	}

	public function setChannelGroupId(?string $channelGroupId): self
	{
		$this->channelGroupId = $channelGroupId;

		return $this;
	}

	public function getChannelGroupCode(): ?string
	{
		return $this->channelGroupCode;
	}

	public function setChannelGroupCode(?string $channelGroupCode): self
	{
		$this->channelGroupCode = $channelGroupCode;

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

	public function getStatusFlag(): ?string
	{
		return $this->statusFlag;
	}

	public function setStatusFlag(?string $statusFlag): self
	{
		$this->statusFlag = $statusFlag;

		return $this;
	}

	public function getLinks(): ?ChannelGroupLinks
	{
		return $this->links;
	}

	public function setLinks(?ChannelGroupLinks $links): self
	{
		$this->links = $links;

		return $this;
	}
}
