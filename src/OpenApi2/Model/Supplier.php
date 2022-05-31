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

class Supplier
{
    /**
     * @var null|string
     */
    protected $supplierId;
    /**
     * Payee Id.
     *
     * @var null|string
     */
    protected $payeeId;
    /**
     * @var null|string
     */
    protected $abaFormatType = 'supplier';
    /**
     * @var null|string
     */
    protected $abn;
    /**
     * @var null|string
     */
    protected $account;
    /**
     * @var null|string
     */
    protected $accountContact;
    /**
     * @var null|string
     */
    protected $accountEmail;
    /**
     * @var null|string
     */
    protected $accountPhone;
    /**
     * @var null|string
     */
    protected $address1;
    /**
     * @var null|string
     */
    protected $address2;
    /**
     * @var null|string
     */
    protected $allowDuplicateReferenceFlag = 'no';
    /**
     * @var null|string
     */
    protected $bankAccountNumber;
    /**
     * @var null|string
     */
    protected $bankAccountSuffix;
    /**
     * @var null|string
     */
    protected $bankBsb;
    /**
     * @var null|float
     */
    protected $bpayBillerCode;
    /**
     * @var null|string
     */
    protected $channelId;
    /**
     * @var null|string
     */
    protected $city;
    /**
     * @var null|string
     */
    protected $contact;
    /**
     * @var null|string
     */
    protected $countryId;
    /**
     * @var null|float
     */
    protected $creditLimit;
    /**
     * @var null|string
     */
    protected $discountDays;
    /**
     * @var null|float
     */
    protected $discountPromptPay;
    /**
     * @var null|float
     */
    protected $discountVolumn;
    /**
     * @var null|string
     */
    protected $dueDays;
    /**
     * @var null|string
     */
    protected $email;
    /**
     * @var null|string
     */
    protected $externalCode;
    /**
     * @var null|string
     */
    protected $externalRoleDiscloseTransactionsFlag;
    /**
     * @var null|string
     */
    protected $fax;
    /**
     * @var null|string
     */
    protected $glCode;
    /**
     * @var null|float
     */
    protected $insuranceBrokerFeeMonthly;
    /**
     * @var null|string
     */
    protected $interfaceType;
    /**
     * @var null|float
     */
    protected $labourPerHourRetail;
    /**
     * @var null|float
     */
    protected $labourPerHourRetailDiscount;
    /**
     * @var null|float
     */
    protected $labourRate;
    /**
     * @var null|\DateTime
     */
    protected $labourRateDate;
    /**
     * @var null|string
     */
    protected $mobile;
    /**
     * @var null|string
     */
    protected $name;
    /**
     * @var null|string
     */
    protected $note;
    /**
     * @var null|float
     */
    protected $oilPricePerLitre;
    /**
     * @var null|float
     */
    protected $partsDiscount;
    /**
     * @var null|string
     */
    protected $paymentDeliveryType;
    /**
     * @var null|string
     */
    protected $paymentDue;
    /**
     * Payment method Id.
     *
     * @var null|string
     */
    protected $paymentMethodId;
    /**
     * @var null|string
     */
    protected $phone;
    /**
     * @var null|string
     */
    protected $plExportFlag = 'yes';
    /**
     * @var null|string
     */
    protected $postcode;
    /**
     * @var null|string
     */
    protected $preferredSupplierFlag = 'no';
    /**
     * @var null|float
     */
    protected $procurementFee;
    /**
     * @var null|string
     */
    protected $rctiFlag = 'no';
    /**
     * @var null|string
     */
    protected $salutation;
    /**
     * @var null|string
     */
    protected $state;
    /**
     * @var null|string
     */
    protected $status;
    /**
     * @var null|float
     */
    protected $sundriesCost;
    /**
     * @var null|string
     */
    protected $supplierCode;
    /**
     * @var null|string
     */
    protected $supplierGroupId;
    /**
     * @var null|string
     */
    protected $supplierIdAgent;
    /**
     * @var null|string
     */
    protected $supplierPaymentTermId;
    /**
     * @var null|string
     */
    protected $supplierType;
    /**
     * @var null|string
     */
    protected $taxCode;
    /**
     * @var null|string
     */
    protected $taxCodeFreight;
    /**
     * @var null|string
     */
    protected $taxId;
    /**
     * @var null|string
     */
    protected $templateIdCoc;
    /**
     * @var null|string
     */
    protected $website;

    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }

    public function setSupplierId(?string $supplierId): self
    {
        $this->supplierId = $supplierId;

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

    public function getAbaFormatType(): ?string
    {
        return $this->abaFormatType;
    }

    public function setAbaFormatType(?string $abaFormatType): self
    {
        $this->abaFormatType = $abaFormatType;

        return $this;
    }

    public function getAbn(): ?string
    {
        return $this->abn;
    }

    public function setAbn(?string $abn): self
    {
        $this->abn = $abn;

        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getAccountContact(): ?string
    {
        return $this->accountContact;
    }

    public function setAccountContact(?string $accountContact): self
    {
        $this->accountContact = $accountContact;

        return $this;
    }

    public function getAccountEmail(): ?string
    {
        return $this->accountEmail;
    }

    public function setAccountEmail(?string $accountEmail): self
    {
        $this->accountEmail = $accountEmail;

        return $this;
    }

    public function getAccountPhone(): ?string
    {
        return $this->accountPhone;
    }

    public function setAccountPhone(?string $accountPhone): self
    {
        $this->accountPhone = $accountPhone;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getAllowDuplicateReferenceFlag(): ?string
    {
        return $this->allowDuplicateReferenceFlag;
    }

    public function setAllowDuplicateReferenceFlag(?string $allowDuplicateReferenceFlag): self
    {
        $this->allowDuplicateReferenceFlag = $allowDuplicateReferenceFlag;

        return $this;
    }

    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    public function setBankAccountNumber(?string $bankAccountNumber): self
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    public function getBankAccountSuffix(): ?string
    {
        return $this->bankAccountSuffix;
    }

    public function setBankAccountSuffix(?string $bankAccountSuffix): self
    {
        $this->bankAccountSuffix = $bankAccountSuffix;

        return $this;
    }

    public function getBankBsb(): ?string
    {
        return $this->bankBsb;
    }

    public function setBankBsb(?string $bankBsb): self
    {
        $this->bankBsb = $bankBsb;

        return $this;
    }

    public function getBpayBillerCode(): ?float
    {
        return $this->bpayBillerCode;
    }

    public function setBpayBillerCode(?float $bpayBillerCode): self
    {
        $this->bpayBillerCode = $bpayBillerCode;

        return $this;
    }

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCountryId(): ?string
    {
        return $this->countryId;
    }

    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }

    public function setCreditLimit(?float $creditLimit): self
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    public function getDiscountDays(): ?string
    {
        return $this->discountDays;
    }

    public function setDiscountDays(?string $discountDays): self
    {
        $this->discountDays = $discountDays;

        return $this;
    }

    public function getDiscountPromptPay(): ?float
    {
        return $this->discountPromptPay;
    }

    public function setDiscountPromptPay(?float $discountPromptPay): self
    {
        $this->discountPromptPay = $discountPromptPay;

        return $this;
    }

    public function getDiscountVolumn(): ?float
    {
        return $this->discountVolumn;
    }

    public function setDiscountVolumn(?float $discountVolumn): self
    {
        $this->discountVolumn = $discountVolumn;

        return $this;
    }

    public function getDueDays(): ?string
    {
        return $this->dueDays;
    }

    public function setDueDays(?string $dueDays): self
    {
        $this->dueDays = $dueDays;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getExternalCode(): ?string
    {
        return $this->externalCode;
    }

    public function setExternalCode(?string $externalCode): self
    {
        $this->externalCode = $externalCode;

        return $this;
    }

    public function getExternalRoleDiscloseTransactionsFlag(): ?string
    {
        return $this->externalRoleDiscloseTransactionsFlag;
    }

    public function setExternalRoleDiscloseTransactionsFlag(?string $externalRoleDiscloseTransactionsFlag): self
    {
        $this->externalRoleDiscloseTransactionsFlag = $externalRoleDiscloseTransactionsFlag;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getGlCode(): ?string
    {
        return $this->glCode;
    }

    public function setGlCode(?string $glCode): self
    {
        $this->glCode = $glCode;

        return $this;
    }

    public function getInsuranceBrokerFeeMonthly(): ?float
    {
        return $this->insuranceBrokerFeeMonthly;
    }

    public function setInsuranceBrokerFeeMonthly(?float $insuranceBrokerFeeMonthly): self
    {
        $this->insuranceBrokerFeeMonthly = $insuranceBrokerFeeMonthly;

        return $this;
    }

    public function getInterfaceType(): ?string
    {
        return $this->interfaceType;
    }

    public function setInterfaceType(?string $interfaceType): self
    {
        $this->interfaceType = $interfaceType;

        return $this;
    }

    public function getLabourPerHourRetail(): ?float
    {
        return $this->labourPerHourRetail;
    }

    public function setLabourPerHourRetail(?float $labourPerHourRetail): self
    {
        $this->labourPerHourRetail = $labourPerHourRetail;

        return $this;
    }

    public function getLabourPerHourRetailDiscount(): ?float
    {
        return $this->labourPerHourRetailDiscount;
    }

    public function setLabourPerHourRetailDiscount(?float $labourPerHourRetailDiscount): self
    {
        $this->labourPerHourRetailDiscount = $labourPerHourRetailDiscount;

        return $this;
    }

    public function getLabourRate(): ?float
    {
        return $this->labourRate;
    }

    public function setLabourRate(?float $labourRate): self
    {
        $this->labourRate = $labourRate;

        return $this;
    }

    public function getLabourRateDate(): ?\DateTime
    {
        return $this->labourRateDate;
    }

    public function setLabourRateDate(?\DateTime $labourRateDate): self
    {
        $this->labourRateDate = $labourRateDate;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getOilPricePerLitre(): ?float
    {
        return $this->oilPricePerLitre;
    }

    public function setOilPricePerLitre(?float $oilPricePerLitre): self
    {
        $this->oilPricePerLitre = $oilPricePerLitre;

        return $this;
    }

    public function getPartsDiscount(): ?float
    {
        return $this->partsDiscount;
    }

    public function setPartsDiscount(?float $partsDiscount): self
    {
        $this->partsDiscount = $partsDiscount;

        return $this;
    }

    public function getPaymentDeliveryType(): ?string
    {
        return $this->paymentDeliveryType;
    }

    public function setPaymentDeliveryType(?string $paymentDeliveryType): self
    {
        $this->paymentDeliveryType = $paymentDeliveryType;

        return $this;
    }

    public function getPaymentDue(): ?string
    {
        return $this->paymentDue;
    }

    public function setPaymentDue(?string $paymentDue): self
    {
        $this->paymentDue = $paymentDue;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPlExportFlag(): ?string
    {
        return $this->plExportFlag;
    }

    public function setPlExportFlag(?string $plExportFlag): self
    {
        $this->plExportFlag = $plExportFlag;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getPreferredSupplierFlag(): ?string
    {
        return $this->preferredSupplierFlag;
    }

    public function setPreferredSupplierFlag(?string $preferredSupplierFlag): self
    {
        $this->preferredSupplierFlag = $preferredSupplierFlag;

        return $this;
    }

    public function getProcurementFee(): ?float
    {
        return $this->procurementFee;
    }

    public function setProcurementFee(?float $procurementFee): self
    {
        $this->procurementFee = $procurementFee;

        return $this;
    }

    public function getRctiFlag(): ?string
    {
        return $this->rctiFlag;
    }

    public function setRctiFlag(?string $rctiFlag): self
    {
        $this->rctiFlag = $rctiFlag;

        return $this;
    }

    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    public function setSalutation(?string $salutation): self
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSundriesCost(): ?float
    {
        return $this->sundriesCost;
    }

    public function setSundriesCost(?float $sundriesCost): self
    {
        $this->sundriesCost = $sundriesCost;

        return $this;
    }

    public function getSupplierCode(): ?string
    {
        return $this->supplierCode;
    }

    public function setSupplierCode(?string $supplierCode): self
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    public function getSupplierGroupId(): ?string
    {
        return $this->supplierGroupId;
    }

    public function setSupplierGroupId(?string $supplierGroupId): self
    {
        $this->supplierGroupId = $supplierGroupId;

        return $this;
    }

    public function getSupplierIdAgent(): ?string
    {
        return $this->supplierIdAgent;
    }

    public function setSupplierIdAgent(?string $supplierIdAgent): self
    {
        $this->supplierIdAgent = $supplierIdAgent;

        return $this;
    }

    public function getSupplierPaymentTermId(): ?string
    {
        return $this->supplierPaymentTermId;
    }

    public function setSupplierPaymentTermId(?string $supplierPaymentTermId): self
    {
        $this->supplierPaymentTermId = $supplierPaymentTermId;

        return $this;
    }

    public function getSupplierType(): ?string
    {
        return $this->supplierType;
    }

    public function setSupplierType(?string $supplierType): self
    {
        $this->supplierType = $supplierType;

        return $this;
    }

    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;

        return $this;
    }

    public function getTaxCodeFreight(): ?string
    {
        return $this->taxCodeFreight;
    }

    public function setTaxCodeFreight(?string $taxCodeFreight): self
    {
        $this->taxCodeFreight = $taxCodeFreight;

        return $this;
    }

    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    public function setTaxId(?string $taxId): self
    {
        $this->taxId = $taxId;

        return $this;
    }

    public function getTemplateIdCoc(): ?string
    {
        return $this->templateIdCoc;
    }

    public function setTemplateIdCoc(?string $templateIdCoc): self
    {
        $this->templateIdCoc = $templateIdCoc;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }
}
