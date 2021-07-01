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

class PackageItemsDefaultsGet
{
	/**
	 * @var mixed|null
	 */
	protected $links;
	/**
	 * @var PackageItemsDefaultsGetEmbedded|null
	 */
	protected $embedded;

	/**
	 * @return mixed
	 */
	public function getLinks()
	{
		return $this->links;
	}

	/**
	 * @param mixed $links
	 */
	public function setLinks($links): self
	{
		$this->links = $links;

		return $this;
	}

	public function getEmbedded(): ?PackageItemsDefaultsGetEmbedded
	{
		return $this->embedded;
	}

	public function setEmbedded(?PackageItemsDefaultsGetEmbedded $embedded): self
	{
		$this->embedded = $embedded;

		return $this;
	}
}
