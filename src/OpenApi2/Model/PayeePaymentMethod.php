<?php
/**
 * Copyright 2022 Catch-e Pty Ltd.
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

class PayeePaymentMethod
{
    /**
     * Payee payment method Id.
     *
     * @var null|string
     */
    protected $payeePaymentMethodId;
    /**
     * Payee Id.
     *
     * @var null|string
     */
    protected $payeeId;
    /**
     * Payment method Id.
     *
     * @var null|string
     */
    protected $paymentMethodId;
    /**
     * Process type.
     *
     * @var null|string
     */
    protected $processType;
    /**
     * Status flag.
     *
     * @var null|string
     */
    protected $statusFlag = 'active';
    /**
     * @var null|PayeePaymentMethodEmbedded
     */
    protected $embedded;

    /**
     * Payee payment method Id.
     */
    public function getPayeePaymentMethodId(): ?string
    {
        return $this->payeePaymentMethodId;
    }

    /**
     * Payee payment method Id.
     */
    public function setPayeePaymentMethodId(?string $payeePaymentMethodId): self
    {
        $this->payeePaymentMethodId = $payeePaymentMethodId;

        return $this;
    }

    /**
     * Payee Id.
     */
    public function getPayeeId(): ?string
    {
        return $this->payeeId;
    }

    /**
     * Payee Id.
     */
    public function setPayeeId(?string $payeeId): self
    {
        $this->payeeId = $payeeId;

        return $this;
    }

    /**
     * Payment method Id.
     */
    public function getPaymentMethodId(): ?string
    {
        return $this->paymentMethodId;
    }

    /**
     * Payment method Id.
     */
    public function setPaymentMethodId(?string $paymentMethodId): self
    {
        $this->paymentMethodId = $paymentMethodId;

        return $this;
    }

    /**
     * Process type.
     */
    public function getProcessType(): ?string
    {
        return $this->processType;
    }

    /**
     * Process type.
     */
    public function setProcessType(?string $processType): self
    {
        $this->processType = $processType;

        return $this;
    }

    /**
     * Status flag.
     */
    public function getStatusFlag(): ?string
    {
        return $this->statusFlag;
    }

    /**
     * Status flag.
     */
    public function setStatusFlag(?string $statusFlag): self
    {
        $this->statusFlag = $statusFlag;

        return $this;
    }

    public function getEmbedded(): ?PayeePaymentMethodEmbedded
    {
        return $this->embedded;
    }

    public function setEmbedded(?PayeePaymentMethodEmbedded $embedded): self
    {
        $this->embedded = $embedded;

        return $this;
    }
}
