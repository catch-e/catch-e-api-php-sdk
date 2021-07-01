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

class ContractBudgetsUpdateBudgetsItem
{
	/**
	 * Net amount to update.
	 *
	 * @var float|null
	 */
	protected $amountNet;
	/**
	 * Gst amount to update.
	 *
	 * @var float|null
	 */
	protected $amountGst;

	/**
	 * Net amount to update.
	 */
	public function getAmountNet(): ?float
	{
		return $this->amountNet;
	}

	/**
	 * Net amount to update.
	 */
	public function setAmountNet(?float $amountNet): self
	{
		$this->amountNet = $amountNet;

		return $this;
	}

	/**
	 * Gst amount to update.
	 */
	public function getAmountGst(): ?float
	{
		return $this->amountGst;
	}

	/**
	 * Gst amount to update.
	 */
	public function setAmountGst(?float $amountGst): self
	{
		$this->amountGst = $amountGst;

		return $this;
	}
}
