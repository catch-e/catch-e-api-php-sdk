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

class FmDriverLiabilitiesGetResponse200
{
	/**
	 * @var FmDriverLiabilitiesGetResponse200Links|null
	 */
	protected $links;
	/**
	 * @var FmDriverLiabilitiesGetResponse200Embedded|null
	 */
	protected $embedded;
	/**
	 * @var int|null
	 */
	protected $pageCount;
	/**
	 * @var int|null
	 */
	protected $pageSize;
	/**
	 * @var int|null
	 */
	protected $totalItems;
	/**
	 * @var int|null
	 */
	protected $page;

	public function getLinks(): ?FmDriverLiabilitiesGetResponse200Links
	{
		return $this->links;
	}

	public function setLinks(?FmDriverLiabilitiesGetResponse200Links $links): self
	{
		$this->links = $links;

		return $this;
	}

	public function getEmbedded(): ?FmDriverLiabilitiesGetResponse200Embedded
	{
		return $this->embedded;
	}

	public function setEmbedded(?FmDriverLiabilitiesGetResponse200Embedded $embedded): self
	{
		$this->embedded = $embedded;

		return $this;
	}

	public function getPageCount(): ?int
	{
		return $this->pageCount;
	}

	public function setPageCount(?int $pageCount): self
	{
		$this->pageCount = $pageCount;

		return $this;
	}

	public function getPageSize(): ?int
	{
		return $this->pageSize;
	}

	public function setPageSize(?int $pageSize): self
	{
		$this->pageSize = $pageSize;

		return $this;
	}

	public function getTotalItems(): ?int
	{
		return $this->totalItems;
	}

	public function setTotalItems(?int $totalItems): self
	{
		$this->totalItems = $totalItems;

		return $this;
	}

	public function getPage(): ?int
	{
		return $this->page;
	}

	public function setPage(?int $page): self
	{
		$this->page = $page;

		return $this;
	}
}
