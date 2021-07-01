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

class FmDriverAssetsGetResponse200Links
{
	/**
	 * @var FmDriverAssetsGetResponse200LinksSelf|null
	 */
	protected $self;
	/**
	 * @var FmDriverAssetsGetResponse200LinksFirst|null
	 */
	protected $first;
	/**
	 * @var FmDriverAssetsGetResponse200LinksLast|null
	 */
	protected $last;

	public function getSelf(): ?FmDriverAssetsGetResponse200LinksSelf
	{
		return $this->self;
	}

	public function setSelf(?FmDriverAssetsGetResponse200LinksSelf $self): self
	{
		$this->self = $self;

		return $this;
	}

	public function getFirst(): ?FmDriverAssetsGetResponse200LinksFirst
	{
		return $this->first;
	}

	public function setFirst(?FmDriverAssetsGetResponse200LinksFirst $first): self
	{
		$this->first = $first;

		return $this;
	}

	public function getLast(): ?FmDriverAssetsGetResponse200LinksLast
	{
		return $this->last;
	}

	public function setLast(?FmDriverAssetsGetResponse200LinksLast $last): self
	{
		$this->last = $last;

		return $this;
	}
}
