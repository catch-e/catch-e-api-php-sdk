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

class InsertContractBudgetBudgetsItem
{
	/**
	 * Net amount to insert.
	 *
	 * @var float|null
	 */
	protected $amountNet = 0;
	/**
	 * GST amount to insert.If not passed and amount_net = 0.00 or not passed, this is set to 0.00. If amount_net is passed, GST is calculated from amount_gst using Global Controls.
	 *
	 * @var float|null
	 */
	protected $amountGst = 0;

	/**
	 * Net amount to insert.
	 */
	public function getAmountNet(): ?float
	{
		return $this->amountNet;
	}

	/**
	 * Net amount to insert.
	 */
	public function setAmountNet(?float $amountNet): self
	{
		$this->amountNet = $amountNet;

		return $this;
	}

	/**
	 * GST amount to insert.If not passed and amount_net = 0.00 or not passed, this is set to 0.00. If amount_net is passed, GST is calculated from amount_gst using Global Controls.
	 */
	public function getAmountGst(): ?float
	{
		return $this->amountGst;
	}

	/**
	 * GST amount to insert.If not passed and amount_net = 0.00 or not passed, this is set to 0.00. If amount_net is passed, GST is calculated from amount_gst using Global Controls.
	 */
	public function setAmountGst(?float $amountGst): self
	{
		$this->amountGst = $amountGst;

		return $this;
	}
}
