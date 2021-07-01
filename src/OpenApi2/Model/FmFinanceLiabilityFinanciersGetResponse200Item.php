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

class FmFinanceLiabilityFinanciersGetResponse200Item
{
	/**
	 * @var string|null
	 */
	protected $financeLiabilityFinancierId;
	/**
	 * @var string|null
	 */
	protected $liabilityFinancierCode;
	/**
	 * @var string|null
	 */
	protected $name;

	public function getFinanceLiabilityFinancierId(): ?string
	{
		return $this->financeLiabilityFinancierId;
	}

	public function setFinanceLiabilityFinancierId(?string $financeLiabilityFinancierId): self
	{
		$this->financeLiabilityFinancierId = $financeLiabilityFinancierId;

		return $this;
	}

	public function getLiabilityFinancierCode(): ?string
	{
		return $this->liabilityFinancierCode;
	}

	public function setLiabilityFinancierCode(?string $liabilityFinancierCode): self
	{
		$this->liabilityFinancierCode = $liabilityFinancierCode;

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
