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

class SalaryPackagingFinancialInstitution
{
    /**
     * @var null|string
     */
    protected $financialInstitutionId;
    /**
     * @var null|string
     */
    protected $financialInstitutionNumber;
    /**
     * @var null|string
     */
    protected $financialInstitutionCode;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|SalaryPackagingFinancialInstitutionLinks
     */
    protected $links;

    public function getFinancialInstitutionId(): ?string
    {
        return $this->financialInstitutionId;
    }

    public function setFinancialInstitutionId(?string $financialInstitutionId): self
    {
        $this->financialInstitutionId = $financialInstitutionId;

        return $this;
    }

    public function getFinancialInstitutionNumber(): ?string
    {
        return $this->financialInstitutionNumber;
    }

    public function setFinancialInstitutionNumber(?string $financialInstitutionNumber): self
    {
        $this->financialInstitutionNumber = $financialInstitutionNumber;

        return $this;
    }

    public function getFinancialInstitutionCode(): ?string
    {
        return $this->financialInstitutionCode;
    }

    public function setFinancialInstitutionCode(?string $financialInstitutionCode): self
    {
        $this->financialInstitutionCode = $financialInstitutionCode;

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

    public function getLinks(): ?SalaryPackagingFinancialInstitutionLinks
    {
        return $this->links;
    }

    public function setLinks(?SalaryPackagingFinancialInstitutionLinks $links): self
    {
        $this->links = $links;

        return $this;
    }
}
