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

class ContractBudgetsCreateFinalEntriesPreCheck
{
	/**
	 * @var string|null
	 */
	protected $contractTypeFinalisableFlag;
	/**
	 * @var string|null
	 */
	protected $contractFinalisableFlag;

	public function getContractTypeFinalisableFlag(): ?string
	{
		return $this->contractTypeFinalisableFlag;
	}

	public function setContractTypeFinalisableFlag(?string $contractTypeFinalisableFlag): self
	{
		$this->contractTypeFinalisableFlag = $contractTypeFinalisableFlag;

		return $this;
	}

	public function getContractFinalisableFlag(): ?string
	{
		return $this->contractFinalisableFlag;
	}

	public function setContractFinalisableFlag(?string $contractFinalisableFlag): self
	{
		$this->contractFinalisableFlag = $contractFinalisableFlag;

		return $this;
	}
}
