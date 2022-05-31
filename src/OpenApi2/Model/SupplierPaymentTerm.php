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

class SupplierPaymentTerm
{
    /**
     * @var null|string
     */
    protected $supplierPaymentTermId;
    /**
     * @var null|string
     */
    protected $paymentTerm;
    /**
     * @var null|string
     */
    protected $statusFlag;

    public function getSupplierPaymentTermId(): ?string
    {
        return $this->supplierPaymentTermId;
    }

    public function setSupplierPaymentTermId(?string $supplierPaymentTermId): self
    {
        $this->supplierPaymentTermId = $supplierPaymentTermId;

        return $this;
    }

    public function getPaymentTerm(): ?string
    {
        return $this->paymentTerm;
    }

    public function setPaymentTerm(?string $paymentTerm): self
    {
        $this->paymentTerm = $paymentTerm;

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
}
