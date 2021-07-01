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

class ContactTypeAllocationGet
{
	/**
	 * Contact id to allocate.
	 *
	 * @var string|null
	 */
	protected $contactId;
	/**
	 * Contact type id for the contact.
	 *
	 * @var string|null
	 */
	protected $contactTypeId;
	/**
	 * @var ContactTypeAllocationGetLinks|null
	 */
	protected $links;

	/**
	 * Contact id to allocate.
	 */
	public function getContactId(): ?string
	{
		return $this->contactId;
	}

	/**
	 * Contact id to allocate.
	 */
	public function setContactId(?string $contactId): self
	{
		$this->contactId = $contactId;

		return $this;
	}

	/**
	 * Contact type id for the contact.
	 */
	public function getContactTypeId(): ?string
	{
		return $this->contactTypeId;
	}

	/**
	 * Contact type id for the contact.
	 */
	public function setContactTypeId(?string $contactTypeId): self
	{
		$this->contactTypeId = $contactTypeId;

		return $this;
	}

	public function getLinks(): ?ContactTypeAllocationGetLinks
	{
		return $this->links;
	}

	public function setLinks(?ContactTypeAllocationGetLinks $links): self
	{
		$this->links = $links;

		return $this;
	}
}
