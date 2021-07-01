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

namespace CatchE\OpenApi2\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UpdateDriversMultipleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\UpdateDriversMultipleItem' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\UpdateDriversMultipleItem' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\UpdateDriversMultipleItem();
		if (\array_key_exists('driver_id', $data) && null !== $data['driver_id']) {
			$object->setDriverId($data['driver_id']);
		} elseif (\array_key_exists('driver_id', $data) && null === $data['driver_id']) {
			$object->setDriverId(null);
		}
		if (\array_key_exists('accountant_contact_name', $data) && null !== $data['accountant_contact_name']) {
			$object->setAccountantContactName($data['accountant_contact_name']);
		} elseif (\array_key_exists('accountant_contact_name', $data) && null === $data['accountant_contact_name']) {
			$object->setAccountantContactName(null);
		}
		if (\array_key_exists('accountant_contact_phone', $data) && null !== $data['accountant_contact_phone']) {
			$object->setAccountantContactPhone($data['accountant_contact_phone']);
		} elseif (\array_key_exists('accountant_contact_phone', $data) && null === $data['accountant_contact_phone']) {
			$object->setAccountantContactPhone(null);
		}
		if (\array_key_exists('accountant_firm_name', $data) && null !== $data['accountant_firm_name']) {
			$object->setAccountantFirmName($data['accountant_firm_name']);
		} elseif (\array_key_exists('accountant_firm_name', $data) && null === $data['accountant_firm_name']) {
			$object->setAccountantFirmName(null);
		}
		if (\array_key_exists('address_id_home', $data) && null !== $data['address_id_home']) {
			$object->setAddressIdHome($data['address_id_home']);
		} elseif (\array_key_exists('address_id_home', $data) && null === $data['address_id_home']) {
			$object->setAddressIdHome(null);
		}
		if (\array_key_exists('address_id_post', $data) && null !== $data['address_id_post']) {
			$object->setAddressIdPost($data['address_id_post']);
		} elseif (\array_key_exists('address_id_post', $data) && null === $data['address_id_post']) {
			$object->setAddressIdPost(null);
		}
		if (\array_key_exists('allowances', $data) && null !== $data['allowances']) {
			$object->setAllowances($data['allowances']);
		} elseif (\array_key_exists('allowances', $data) && null === $data['allowances']) {
			$object->setAllowances(null);
		}
		if (\array_key_exists('annual_salary', $data) && null !== $data['annual_salary']) {
			$object->setAnnualSalary($data['annual_salary']);
		} elseif (\array_key_exists('annual_salary', $data) && null === $data['annual_salary']) {
			$object->setAnnualSalary(null);
		}
		if (\array_key_exists('asset_bank_accounts', $data) && null !== $data['asset_bank_accounts']) {
			$object->setAssetBankAccounts($data['asset_bank_accounts']);
		} elseif (\array_key_exists('asset_bank_accounts', $data) && null === $data['asset_bank_accounts']) {
			$object->setAssetBankAccounts(null);
		}
		if (\array_key_exists('asset_bank_accounts_description', $data) && null !== $data['asset_bank_accounts_description']) {
			$object->setAssetBankAccountsDescription($data['asset_bank_accounts_description']);
		} elseif (\array_key_exists('asset_bank_accounts_description', $data) && null === $data['asset_bank_accounts_description']) {
			$object->setAssetBankAccountsDescription(null);
		}
		if (\array_key_exists('asset_furniture', $data) && null !== $data['asset_furniture']) {
			$object->setAssetFurniture($data['asset_furniture']);
		} elseif (\array_key_exists('asset_furniture', $data) && null === $data['asset_furniture']) {
			$object->setAssetFurniture(null);
		}
		if (\array_key_exists('asset_furniture_description', $data) && null !== $data['asset_furniture_description']) {
			$object->setAssetFurnitureDescription($data['asset_furniture_description']);
		} elseif (\array_key_exists('asset_furniture_description', $data) && null === $data['asset_furniture_description']) {
			$object->setAssetFurnitureDescription(null);
		}
		if (\array_key_exists('asset_investment_properties', $data) && null !== $data['asset_investment_properties']) {
			$object->setAssetInvestmentProperties($data['asset_investment_properties']);
		} elseif (\array_key_exists('asset_investment_properties', $data) && null === $data['asset_investment_properties']) {
			$object->setAssetInvestmentProperties(null);
		}
		if (\array_key_exists('asset_investment_properties_description', $data) && null !== $data['asset_investment_properties_description']) {
			$object->setAssetInvestmentPropertiesDescription($data['asset_investment_properties_description']);
		} elseif (\array_key_exists('asset_investment_properties_description', $data) && null === $data['asset_investment_properties_description']) {
			$object->setAssetInvestmentPropertiesDescription(null);
		}
		if (\array_key_exists('asset_motor_vehicle', $data) && null !== $data['asset_motor_vehicle']) {
			$object->setAssetMotorVehicle($data['asset_motor_vehicle']);
		} elseif (\array_key_exists('asset_motor_vehicle', $data) && null === $data['asset_motor_vehicle']) {
			$object->setAssetMotorVehicle(null);
		}
		if (\array_key_exists('asset_motor_vehicle_description', $data) && null !== $data['asset_motor_vehicle_description']) {
			$object->setAssetMotorVehicleDescription($data['asset_motor_vehicle_description']);
		} elseif (\array_key_exists('asset_motor_vehicle_description', $data) && null === $data['asset_motor_vehicle_description']) {
			$object->setAssetMotorVehicleDescription(null);
		}
		if (\array_key_exists('asset_other_investments', $data) && null !== $data['asset_other_investments']) {
			$object->setAssetOtherInvestments($data['asset_other_investments']);
		} elseif (\array_key_exists('asset_other_investments', $data) && null === $data['asset_other_investments']) {
			$object->setAssetOtherInvestments(null);
		}
		if (\array_key_exists('asset_other_investments_description', $data) && null !== $data['asset_other_investments_description']) {
			$object->setAssetOtherInvestmentsDescription($data['asset_other_investments_description']);
		} elseif (\array_key_exists('asset_other_investments_description', $data) && null === $data['asset_other_investments_description']) {
			$object->setAssetOtherInvestmentsDescription(null);
		}
		if (\array_key_exists('asset_resident_property', $data) && null !== $data['asset_resident_property']) {
			$object->setAssetResidentProperty($data['asset_resident_property']);
		} elseif (\array_key_exists('asset_resident_property', $data) && null === $data['asset_resident_property']) {
			$object->setAssetResidentProperty(null);
		}
		if (\array_key_exists('asset_resident_property_description', $data) && null !== $data['asset_resident_property_description']) {
			$object->setAssetResidentPropertyDescription($data['asset_resident_property_description']);
		} elseif (\array_key_exists('asset_resident_property_description', $data) && null === $data['asset_resident_property_description']) {
			$object->setAssetResidentPropertyDescription(null);
		}
		if (\array_key_exists('asset_shares', $data) && null !== $data['asset_shares']) {
			$object->setAssetShares($data['asset_shares']);
		} elseif (\array_key_exists('asset_shares', $data) && null === $data['asset_shares']) {
			$object->setAssetShares(null);
		}
		if (\array_key_exists('asset_shares_description', $data) && null !== $data['asset_shares_description']) {
			$object->setAssetSharesDescription($data['asset_shares_description']);
		} elseif (\array_key_exists('asset_shares_description', $data) && null === $data['asset_shares_description']) {
			$object->setAssetSharesDescription(null);
		}
		if (\array_key_exists('asset_super', $data) && null !== $data['asset_super']) {
			$object->setAssetSuper($data['asset_super']);
		} elseif (\array_key_exists('asset_super', $data) && null === $data['asset_super']) {
			$object->setAssetSuper(null);
		}
		if (\array_key_exists('asset_super_description', $data) && null !== $data['asset_super_description']) {
			$object->setAssetSuperDescription($data['asset_super_description']);
		} elseif (\array_key_exists('asset_super_description', $data) && null === $data['asset_super_description']) {
			$object->setAssetSuperDescription(null);
		}
		if (\array_key_exists('ato_loan_flag', $data) && null !== $data['ato_loan_flag']) {
			$object->setAtoLoanFlag($data['ato_loan_flag']);
		} elseif (\array_key_exists('ato_loan_flag', $data) && null === $data['ato_loan_flag']) {
			$object->setAtoLoanFlag(null);
		}
		if (\array_key_exists('australian_resident', $data) && null !== $data['australian_resident']) {
			$object->setAustralianResident($data['australian_resident']);
		} elseif (\array_key_exists('australian_resident', $data) && null === $data['australian_resident']) {
			$object->setAustralianResident(null);
		}
		if (\array_key_exists('card_account_number', $data) && null !== $data['card_account_number']) {
			$object->setCardAccountNumber($data['card_account_number']);
		} elseif (\array_key_exists('card_account_number', $data) && null === $data['card_account_number']) {
			$object->setCardAccountNumber(null);
		}
		if (\array_key_exists('client_cost_centre_id', $data) && null !== $data['client_cost_centre_id']) {
			$object->setClientCostCentreId($data['client_cost_centre_id']);
		} elseif (\array_key_exists('client_cost_centre_id', $data) && null === $data['client_cost_centre_id']) {
			$object->setClientCostCentreId(null);
		}
		if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
			$object->setClientId($data['client_id']);
		} elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
			$object->setClientId(null);
		}
		if (\array_key_exists('contact_note', $data) && null !== $data['contact_note']) {
			$object->setContactNote($data['contact_note']);
		} elseif (\array_key_exists('contact_note', $data) && null === $data['contact_note']) {
			$object->setContactNote(null);
		}
		if (\array_key_exists('corporate_type_id_previous_employer', $data) && null !== $data['corporate_type_id_previous_employer']) {
			$object->setCorporateTypeIdPreviousEmployer($data['corporate_type_id_previous_employer']);
		} elseif (\array_key_exists('corporate_type_id_previous_employer', $data) && null === $data['corporate_type_id_previous_employer']) {
			$object->setCorporateTypeIdPreviousEmployer(null);
		}
		if (\array_key_exists('created', $data) && null !== $data['created']) {
			$object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
		} elseif (\array_key_exists('created', $data) && null === $data['created']) {
			$object->setCreated(null);
		}
		if (\array_key_exists('credit_check_authorised_flag', $data) && null !== $data['credit_check_authorised_flag']) {
			$object->setCreditCheckAuthorisedFlag($data['credit_check_authorised_flag']);
		} elseif (\array_key_exists('credit_check_authorised_flag', $data) && null === $data['credit_check_authorised_flag']) {
			$object->setCreditCheckAuthorisedFlag(null);
		}
		if (\array_key_exists('date_of_birth', $data) && null !== $data['date_of_birth']) {
			$object->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['date_of_birth'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('date_of_birth', $data) && null === $data['date_of_birth']) {
			$object->setDateOfBirth(null);
		}
		if (\array_key_exists('driver_claims_flag', $data) && null !== $data['driver_claims_flag']) {
			$object->setDriverClaimsFlag($data['driver_claims_flag']);
		} elseif (\array_key_exists('driver_claims_flag', $data) && null === $data['driver_claims_flag']) {
			$object->setDriverClaimsFlag(null);
		}
		if (\array_key_exists('driver_employment_type_id', $data) && null !== $data['driver_employment_type_id']) {
			$object->setDriverEmploymentTypeId($data['driver_employment_type_id']);
		} elseif (\array_key_exists('driver_employment_type_id', $data) && null === $data['driver_employment_type_id']) {
			$object->setDriverEmploymentTypeId(null);
		}
		if (\array_key_exists('driver_id_external', $data) && null !== $data['driver_id_external']) {
			$object->setDriverIdExternal($data['driver_id_external']);
		} elseif (\array_key_exists('driver_id_external', $data) && null === $data['driver_id_external']) {
			$object->setDriverIdExternal(null);
		}
		if (\array_key_exists('driver_lic_exp', $data) && null !== $data['driver_lic_exp']) {
			$object->setDriverLicExp($data['driver_lic_exp']);
		} elseif (\array_key_exists('driver_lic_exp', $data) && null === $data['driver_lic_exp']) {
			$object->setDriverLicExp(null);
		}
		if (\array_key_exists('driver_licence', $data) && null !== $data['driver_licence']) {
			$object->setDriverLicence($data['driver_licence']);
		} elseif (\array_key_exists('driver_licence', $data) && null === $data['driver_licence']) {
			$object->setDriverLicence(null);
		}
		if (\array_key_exists('driver_licence_state', $data) && null !== $data['driver_licence_state']) {
			$object->setDriverLicenceState($data['driver_licence_state']);
		} elseif (\array_key_exists('driver_licence_state', $data) && null === $data['driver_licence_state']) {
			$object->setDriverLicenceState(null);
		}
		if (\array_key_exists('driver_occupation_code_id', $data) && null !== $data['driver_occupation_code_id']) {
			$object->setDriverOccupationCodeId($data['driver_occupation_code_id']);
		} elseif (\array_key_exists('driver_occupation_code_id', $data) && null === $data['driver_occupation_code_id']) {
			$object->setDriverOccupationCodeId(null);
		}
		if (\array_key_exists('employee_alias', $data) && null !== $data['employee_alias']) {
			$object->setEmployeeAlias($data['employee_alias']);
		} elseif (\array_key_exists('employee_alias', $data) && null === $data['employee_alias']) {
			$object->setEmployeeAlias(null);
		}
		if (\array_key_exists('employee_area', $data) && null !== $data['employee_area']) {
			$object->setEmployeeArea($data['employee_area']);
		} elseif (\array_key_exists('employee_area', $data) && null === $data['employee_area']) {
			$object->setEmployeeArea(null);
		}
		if (\array_key_exists('employee_end', $data) && null !== $data['employee_end']) {
			$object->setEmployeeEnd(\DateTime::createFromFormat('Y-m-d', $data['employee_end'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('employee_end', $data) && null === $data['employee_end']) {
			$object->setEmployeeEnd(null);
		}
		if (\array_key_exists('employee_group', $data) && null !== $data['employee_group']) {
			$object->setEmployeeGroup($data['employee_group']);
		} elseif (\array_key_exists('employee_group', $data) && null === $data['employee_group']) {
			$object->setEmployeeGroup(null);
		}
		if (\array_key_exists('employee_no', $data) && null !== $data['employee_no']) {
			$object->setEmployeeNo($data['employee_no']);
		} elseif (\array_key_exists('employee_no', $data) && null === $data['employee_no']) {
			$object->setEmployeeNo(null);
		}
		if (\array_key_exists('employee_pay_office', $data) && null !== $data['employee_pay_office']) {
			$object->setEmployeePayOffice($data['employee_pay_office']);
		} elseif (\array_key_exists('employee_pay_office', $data) && null === $data['employee_pay_office']) {
			$object->setEmployeePayOffice(null);
		}
		if (\array_key_exists('employee_sl_acc', $data) && null !== $data['employee_sl_acc']) {
			$object->setEmployeeSlAcc($data['employee_sl_acc']);
		} elseif (\array_key_exists('employee_sl_acc', $data) && null === $data['employee_sl_acc']) {
			$object->setEmployeeSlAcc(null);
		}
		if (\array_key_exists('employee_start', $data) && null !== $data['employee_start']) {
			$object->setEmployeeStart(\DateTime::createFromFormat('Y-m-d', $data['employee_start'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('employee_start', $data) && null === $data['employee_start']) {
			$object->setEmployeeStart(null);
		}
		if (\array_key_exists('employee_super', $data) && null !== $data['employee_super']) {
			$object->setEmployeeSuper($data['employee_super']);
		} elseif (\array_key_exists('employee_super', $data) && null === $data['employee_super']) {
			$object->setEmployeeSuper(null);
		}
		if (\array_key_exists('employer_address_1', $data) && null !== $data['employer_address_1']) {
			$object->setEmployerAddress1($data['employer_address_1']);
		} elseif (\array_key_exists('employer_address_1', $data) && null === $data['employer_address_1']) {
			$object->setEmployerAddress1(null);
		}
		if (\array_key_exists('employer_address_2', $data) && null !== $data['employer_address_2']) {
			$object->setEmployerAddress2($data['employer_address_2']);
		} elseif (\array_key_exists('employer_address_2', $data) && null === $data['employer_address_2']) {
			$object->setEmployerAddress2(null);
		}
		if (\array_key_exists('employer_address_3', $data) && null !== $data['employer_address_3']) {
			$object->setEmployerAddress3($data['employer_address_3']);
		} elseif (\array_key_exists('employer_address_3', $data) && null === $data['employer_address_3']) {
			$object->setEmployerAddress3(null);
		}
		if (\array_key_exists('employer_address_postcode', $data) && null !== $data['employer_address_postcode']) {
			$object->setEmployerAddressPostcode($data['employer_address_postcode']);
		} elseif (\array_key_exists('employer_address_postcode', $data) && null === $data['employer_address_postcode']) {
			$object->setEmployerAddressPostcode(null);
		}
		if (\array_key_exists('employer_address_state', $data) && null !== $data['employer_address_state']) {
			$object->setEmployerAddressState($data['employer_address_state']);
		} elseif (\array_key_exists('employer_address_state', $data) && null === $data['employer_address_state']) {
			$object->setEmployerAddressState(null);
		}
		if (\array_key_exists('employer_super', $data) && null !== $data['employer_super']) {
			$object->setEmployerSuper($data['employer_super']);
		} elseif (\array_key_exists('employer_super', $data) && null === $data['employer_super']) {
			$object->setEmployerSuper(null);
		}
		if (\array_key_exists('expense_credit_card', $data) && null !== $data['expense_credit_card']) {
			$object->setExpenseCreditCard($data['expense_credit_card']);
		} elseif (\array_key_exists('expense_credit_card', $data) && null === $data['expense_credit_card']) {
			$object->setExpenseCreditCard(null);
		}
		if (\array_key_exists('expense_household', $data) && null !== $data['expense_household']) {
			$object->setExpenseHousehold($data['expense_household']);
		} elseif (\array_key_exists('expense_household', $data) && null === $data['expense_household']) {
			$object->setExpenseHousehold(null);
		}
		if (\array_key_exists('expense_mortgage', $data) && null !== $data['expense_mortgage']) {
			$object->setExpenseMortgage($data['expense_mortgage']);
		} elseif (\array_key_exists('expense_mortgage', $data) && null === $data['expense_mortgage']) {
			$object->setExpenseMortgage(null);
		}
		if (\array_key_exists('expense_other', $data) && null !== $data['expense_other']) {
			$object->setExpenseOther($data['expense_other']);
		} elseif (\array_key_exists('expense_other', $data) && null === $data['expense_other']) {
			$object->setExpenseOther(null);
		}
		if (\array_key_exists('expense_private_education_childcare', $data) && null !== $data['expense_private_education_childcare']) {
			$object->setExpensePrivateEducationChildcare($data['expense_private_education_childcare']);
		} elseif (\array_key_exists('expense_private_education_childcare', $data) && null === $data['expense_private_education_childcare']) {
			$object->setExpensePrivateEducationChildcare(null);
		}
		if (\array_key_exists('expense_rent', $data) && null !== $data['expense_rent']) {
			$object->setExpenseRent($data['expense_rent']);
		} elseif (\array_key_exists('expense_rent', $data) && null === $data['expense_rent']) {
			$object->setExpenseRent(null);
		}
		if (\array_key_exists('expense_vehicle', $data) && null !== $data['expense_vehicle']) {
			$object->setExpenseVehicle($data['expense_vehicle']);
		} elseif (\array_key_exists('expense_vehicle', $data) && null === $data['expense_vehicle']) {
			$object->setExpenseVehicle(null);
		}
		if (\array_key_exists('external_code', $data) && null !== $data['external_code']) {
			$object->setExternalCode($data['external_code']);
		} elseif (\array_key_exists('external_code', $data) && null === $data['external_code']) {
			$object->setExternalCode(null);
		}
		if (\array_key_exists('fbt_type', $data) && null !== $data['fbt_type']) {
			$object->setFbtType($data['fbt_type']);
		} elseif (\array_key_exists('fbt_type', $data) && null === $data['fbt_type']) {
			$object->setFbtType(null);
		}
		if (\array_key_exists('financier_applicant_reference', $data) && null !== $data['financier_applicant_reference']) {
			$object->setFinancierApplicantReference($data['financier_applicant_reference']);
		} elseif (\array_key_exists('financier_applicant_reference', $data) && null === $data['financier_applicant_reference']) {
			$object->setFinancierApplicantReference(null);
		}
		if (\array_key_exists('gender', $data) && null !== $data['gender']) {
			$object->setGender($data['gender']);
		} elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
			$object->setGender(null);
		}
		if (\array_key_exists('generated_password', $data) && null !== $data['generated_password']) {
			$object->setGeneratedPassword($data['generated_password']);
		} elseif (\array_key_exists('generated_password', $data) && null === $data['generated_password']) {
			$object->setGeneratedPassword(null);
		}
		if (\array_key_exists('given_name', $data) && null !== $data['given_name']) {
			$object->setGivenName($data['given_name']);
		} elseif (\array_key_exists('given_name', $data) && null === $data['given_name']) {
			$object->setGivenName(null);
		}
		if (\array_key_exists('home_car_postcode', $data) && null !== $data['home_car_postcode']) {
			$object->setHomeCarPostcode($data['home_car_postcode']);
		} elseif (\array_key_exists('home_car_postcode', $data) && null === $data['home_car_postcode']) {
			$object->setHomeCarPostcode(null);
		}
		if (\array_key_exists('home_email', $data) && null !== $data['home_email']) {
			$object->setHomeEmail($data['home_email']);
		} elseif (\array_key_exists('home_email', $data) && null === $data['home_email']) {
			$object->setHomeEmail(null);
		}
		if (\array_key_exists('home_fax', $data) && null !== $data['home_fax']) {
			$object->setHomeFax($data['home_fax']);
		} elseif (\array_key_exists('home_fax', $data) && null === $data['home_fax']) {
			$object->setHomeFax(null);
		}
		if (\array_key_exists('home_phone', $data) && null !== $data['home_phone']) {
			$object->setHomePhone($data['home_phone']);
		} elseif (\array_key_exists('home_phone', $data) && null === $data['home_phone']) {
			$object->setHomePhone(null);
		}
		if (\array_key_exists('home_postcode', $data) && null !== $data['home_postcode']) {
			$object->setHomePostcode($data['home_postcode']);
		} elseif (\array_key_exists('home_postcode', $data) && null === $data['home_postcode']) {
			$object->setHomePostcode(null);
		}
		if (\array_key_exists('home_state', $data) && null !== $data['home_state']) {
			$object->setHomeState($data['home_state']);
		} elseif (\array_key_exists('home_state', $data) && null === $data['home_state']) {
			$object->setHomeState(null);
		}
		if (\array_key_exists('home_street', $data) && null !== $data['home_street']) {
			$object->setHomeStreet($data['home_street']);
		} elseif (\array_key_exists('home_street', $data) && null === $data['home_street']) {
			$object->setHomeStreet(null);
		}
		if (\array_key_exists('home_street_no', $data) && null !== $data['home_street_no']) {
			$object->setHomeStreetNo($data['home_street_no']);
		} elseif (\array_key_exists('home_street_no', $data) && null === $data['home_street_no']) {
			$object->setHomeStreetNo(null);
		}
		if (\array_key_exists('home_street_type', $data) && null !== $data['home_street_type']) {
			$object->setHomeStreetType($data['home_street_type']);
		} elseif (\array_key_exists('home_street_type', $data) && null === $data['home_street_type']) {
			$object->setHomeStreetType(null);
		}
		if (\array_key_exists('home_suburb', $data) && null !== $data['home_suburb']) {
			$object->setHomeSuburb($data['home_suburb']);
		} elseif (\array_key_exists('home_suburb', $data) && null === $data['home_suburb']) {
			$object->setHomeSuburb(null);
		}
		if (\array_key_exists('home_unit_no', $data) && null !== $data['home_unit_no']) {
			$object->setHomeUnitNo($data['home_unit_no']);
		} elseif (\array_key_exists('home_unit_no', $data) && null === $data['home_unit_no']) {
			$object->setHomeUnitNo(null);
		}
		if (\array_key_exists('income_government_benefits', $data) && null !== $data['income_government_benefits']) {
			$object->setIncomeGovernmentBenefits($data['income_government_benefits']);
		} elseif (\array_key_exists('income_government_benefits', $data) && null === $data['income_government_benefits']) {
			$object->setIncomeGovernmentBenefits(null);
		}
		if (\array_key_exists('income_gross', $data) && null !== $data['income_gross']) {
			$object->setIncomeGross($data['income_gross']);
		} elseif (\array_key_exists('income_gross', $data) && null === $data['income_gross']) {
			$object->setIncomeGross(null);
		}
		if (\array_key_exists('income_investment', $data) && null !== $data['income_investment']) {
			$object->setIncomeInvestment($data['income_investment']);
		} elseif (\array_key_exists('income_investment', $data) && null === $data['income_investment']) {
			$object->setIncomeInvestment(null);
		}
		if (\array_key_exists('income_net', $data) && null !== $data['income_net']) {
			$object->setIncomeNet($data['income_net']);
		} elseif (\array_key_exists('income_net', $data) && null === $data['income_net']) {
			$object->setIncomeNet(null);
		}
		if (\array_key_exists('income_other', $data) && null !== $data['income_other']) {
			$object->setIncomeOther($data['income_other']);
		} elseif (\array_key_exists('income_other', $data) && null === $data['income_other']) {
			$object->setIncomeOther(null);
		}
		if (\array_key_exists('income_rental_net', $data) && null !== $data['income_rental_net']) {
			$object->setIncomeRentalNet($data['income_rental_net']);
		} elseif (\array_key_exists('income_rental_net', $data) && null === $data['income_rental_net']) {
			$object->setIncomeRentalNet(null);
		}
		if (\array_key_exists('income_spouse_gross', $data) && null !== $data['income_spouse_gross']) {
			$object->setIncomeSpouseGross($data['income_spouse_gross']);
		} elseif (\array_key_exists('income_spouse_gross', $data) && null === $data['income_spouse_gross']) {
			$object->setIncomeSpouseGross(null);
		}
		if (\array_key_exists('income_spouse_net', $data) && null !== $data['income_spouse_net']) {
			$object->setIncomeSpouseNet($data['income_spouse_net']);
		} elseif (\array_key_exists('income_spouse_net', $data) && null === $data['income_spouse_net']) {
			$object->setIncomeSpouseNet(null);
		}
		if (\array_key_exists('income_superannuation', $data) && null !== $data['income_superannuation']) {
			$object->setIncomeSuperannuation($data['income_superannuation']);
		} elseif (\array_key_exists('income_superannuation', $data) && null === $data['income_superannuation']) {
			$object->setIncomeSuperannuation(null);
		}
		if (\array_key_exists('insurance_broker_fee_exempt_flag', $data) && null !== $data['insurance_broker_fee_exempt_flag']) {
			$object->setInsuranceBrokerFeeExemptFlag($data['insurance_broker_fee_exempt_flag']);
		} elseif (\array_key_exists('insurance_broker_fee_exempt_flag', $data) && null === $data['insurance_broker_fee_exempt_flag']) {
			$object->setInsuranceBrokerFeeExemptFlag(null);
		}
		if (\array_key_exists('kyc_verified_flag', $data) && null !== $data['kyc_verified_flag']) {
			$object->setKycVerifiedFlag($data['kyc_verified_flag']);
		} elseif (\array_key_exists('kyc_verified_flag', $data) && null === $data['kyc_verified_flag']) {
			$object->setKycVerifiedFlag(null);
		}
		if (\array_key_exists('landlord_name', $data) && null !== $data['landlord_name']) {
			$object->setLandlordName($data['landlord_name']);
		} elseif (\array_key_exists('landlord_name', $data) && null === $data['landlord_name']) {
			$object->setLandlordName(null);
		}
		if (\array_key_exists('landlord_telephone', $data) && null !== $data['landlord_telephone']) {
			$object->setLandlordTelephone($data['landlord_telephone']);
		} elseif (\array_key_exists('landlord_telephone', $data) && null === $data['landlord_telephone']) {
			$object->setLandlordTelephone(null);
		}
		if (\array_key_exists('last_edit', $data) && null !== $data['last_edit']) {
			$object->setLastEdit(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['last_edit']));
		} elseif (\array_key_exists('last_edit', $data) && null === $data['last_edit']) {
			$object->setLastEdit(null);
		}
		if (\array_key_exists('liability_credit_card_limit', $data) && null !== $data['liability_credit_card_limit']) {
			$object->setLiabilityCreditCardLimit($data['liability_credit_card_limit']);
		} elseif (\array_key_exists('liability_credit_card_limit', $data) && null === $data['liability_credit_card_limit']) {
			$object->setLiabilityCreditCardLimit(null);
		}
		if (\array_key_exists('liability_credit_card_limit_description', $data) && null !== $data['liability_credit_card_limit_description']) {
			$object->setLiabilityCreditCardLimitDescription($data['liability_credit_card_limit_description']);
		} elseif (\array_key_exists('liability_credit_card_limit_description', $data) && null === $data['liability_credit_card_limit_description']) {
			$object->setLiabilityCreditCardLimitDescription(null);
		}
		if (\array_key_exists('liability_investment_mortgages', $data) && null !== $data['liability_investment_mortgages']) {
			$object->setLiabilityInvestmentMortgages($data['liability_investment_mortgages']);
		} elseif (\array_key_exists('liability_investment_mortgages', $data) && null === $data['liability_investment_mortgages']) {
			$object->setLiabilityInvestmentMortgages(null);
		}
		if (\array_key_exists('liability_investment_mortgages_description', $data) && null !== $data['liability_investment_mortgages_description']) {
			$object->setLiabilityInvestmentMortgagesDescription($data['liability_investment_mortgages_description']);
		} elseif (\array_key_exists('liability_investment_mortgages_description', $data) && null === $data['liability_investment_mortgages_description']) {
			$object->setLiabilityInvestmentMortgagesDescription(null);
		}
		if (\array_key_exists('liability_loans', $data) && null !== $data['liability_loans']) {
			$object->setLiabilityLoans($data['liability_loans']);
		} elseif (\array_key_exists('liability_loans', $data) && null === $data['liability_loans']) {
			$object->setLiabilityLoans(null);
		}
		if (\array_key_exists('liability_loans_description', $data) && null !== $data['liability_loans_description']) {
			$object->setLiabilityLoansDescription($data['liability_loans_description']);
		} elseif (\array_key_exists('liability_loans_description', $data) && null === $data['liability_loans_description']) {
			$object->setLiabilityLoansDescription(null);
		}
		if (\array_key_exists('liability_mortgages', $data) && null !== $data['liability_mortgages']) {
			$object->setLiabilityMortgages($data['liability_mortgages']);
		} elseif (\array_key_exists('liability_mortgages', $data) && null === $data['liability_mortgages']) {
			$object->setLiabilityMortgages(null);
		}
		if (\array_key_exists('liability_mortgages_description', $data) && null !== $data['liability_mortgages_description']) {
			$object->setLiabilityMortgagesDescription($data['liability_mortgages_description']);
		} elseif (\array_key_exists('liability_mortgages_description', $data) && null === $data['liability_mortgages_description']) {
			$object->setLiabilityMortgagesDescription(null);
		}
		if (\array_key_exists('liability_other', $data) && null !== $data['liability_other']) {
			$object->setLiabilityOther($data['liability_other']);
		} elseif (\array_key_exists('liability_other', $data) && null === $data['liability_other']) {
			$object->setLiabilityOther(null);
		}
		if (\array_key_exists('liability_other_description', $data) && null !== $data['liability_other_description']) {
			$object->setLiabilityOtherDescription($data['liability_other_description']);
		} elseif (\array_key_exists('liability_other_description', $data) && null === $data['liability_other_description']) {
			$object->setLiabilityOtherDescription(null);
		}
		if (\array_key_exists('liability_overdraft', $data) && null !== $data['liability_overdraft']) {
			$object->setLiabilityOverdraft($data['liability_overdraft']);
		} elseif (\array_key_exists('liability_overdraft', $data) && null === $data['liability_overdraft']) {
			$object->setLiabilityOverdraft(null);
		}
		if (\array_key_exists('liability_overdraft_description', $data) && null !== $data['liability_overdraft_description']) {
			$object->setLiabilityOverdraftDescription($data['liability_overdraft_description']);
		} elseif (\array_key_exists('liability_overdraft_description', $data) && null === $data['liability_overdraft_description']) {
			$object->setLiabilityOverdraftDescription(null);
		}
		if (\array_key_exists('liability_rent', $data) && null !== $data['liability_rent']) {
			$object->setLiabilityRent($data['liability_rent']);
		} elseif (\array_key_exists('liability_rent', $data) && null === $data['liability_rent']) {
			$object->setLiabilityRent(null);
		}
		if (\array_key_exists('liability_rent_description', $data) && null !== $data['liability_rent_description']) {
			$object->setLiabilityRentDescription($data['liability_rent_description']);
		} elseif (\array_key_exists('liability_rent_description', $data) && null === $data['liability_rent_description']) {
			$object->setLiabilityRentDescription(null);
		}
		if (\array_key_exists('licence_class', $data) && null !== $data['licence_class']) {
			$object->setLicenceClass($data['licence_class']);
		} elseif (\array_key_exists('licence_class', $data) && null === $data['licence_class']) {
			$object->setLicenceClass(null);
		}
		if (\array_key_exists('marital_status', $data) && null !== $data['marital_status']) {
			$object->setMaritalStatus($data['marital_status']);
		} elseif (\array_key_exists('marital_status', $data) && null === $data['marital_status']) {
			$object->setMaritalStatus(null);
		}
		if (\array_key_exists('middle_name', $data) && null !== $data['middle_name']) {
			$object->setMiddleName($data['middle_name']);
		} elseif (\array_key_exists('middle_name', $data) && null === $data['middle_name']) {
			$object->setMiddleName(null);
		}
		if (\array_key_exists('mobile', $data) && null !== $data['mobile']) {
			$object->setMobile($data['mobile']);
		} elseif (\array_key_exists('mobile', $data) && null === $data['mobile']) {
			$object->setMobile(null);
		}
		if (\array_key_exists('name_on_account', $data) && null !== $data['name_on_account']) {
			$object->setNameOnAccount($data['name_on_account']);
		} elseif (\array_key_exists('name_on_account', $data) && null === $data['name_on_account']) {
			$object->setNameOnAccount(null);
		}
		if (\array_key_exists('no_of_dependents', $data) && null !== $data['no_of_dependents']) {
			$object->setNoOfDependents($data['no_of_dependents']);
		} elseif (\array_key_exists('no_of_dependents', $data) && null === $data['no_of_dependents']) {
			$object->setNoOfDependents(null);
		}
		if (\array_key_exists('pay_cycle_id', $data) && null !== $data['pay_cycle_id']) {
			$object->setPayCycleId($data['pay_cycle_id']);
		} elseif (\array_key_exists('pay_cycle_id', $data) && null === $data['pay_cycle_id']) {
			$object->setPayCycleId(null);
		}
		if (\array_key_exists('preferred_name', $data) && null !== $data['preferred_name']) {
			$object->setPreferredName($data['preferred_name']);
		} elseif (\array_key_exists('preferred_name', $data) && null === $data['preferred_name']) {
			$object->setPreferredName(null);
		}
		if (\array_key_exists('previous_address_1', $data) && null !== $data['previous_address_1']) {
			$object->setPreviousAddress1($data['previous_address_1']);
		} elseif (\array_key_exists('previous_address_1', $data) && null === $data['previous_address_1']) {
			$object->setPreviousAddress1(null);
		}
		if (\array_key_exists('previous_address_2', $data) && null !== $data['previous_address_2']) {
			$object->setPreviousAddress2($data['previous_address_2']);
		} elseif (\array_key_exists('previous_address_2', $data) && null === $data['previous_address_2']) {
			$object->setPreviousAddress2(null);
		}
		if (\array_key_exists('previous_address_3', $data) && null !== $data['previous_address_3']) {
			$object->setPreviousAddress3($data['previous_address_3']);
		} elseif (\array_key_exists('previous_address_3', $data) && null === $data['previous_address_3']) {
			$object->setPreviousAddress3(null);
		}
		if (\array_key_exists('previous_address_country_id', $data) && null !== $data['previous_address_country_id']) {
			$object->setPreviousAddressCountryId($data['previous_address_country_id']);
		} elseif (\array_key_exists('previous_address_country_id', $data) && null === $data['previous_address_country_id']) {
			$object->setPreviousAddressCountryId(null);
		}
		if (\array_key_exists('previous_address_postcode', $data) && null !== $data['previous_address_postcode']) {
			$object->setPreviousAddressPostcode($data['previous_address_postcode']);
		} elseif (\array_key_exists('previous_address_postcode', $data) && null === $data['previous_address_postcode']) {
			$object->setPreviousAddressPostcode(null);
		}
		if (\array_key_exists('previous_address_state', $data) && null !== $data['previous_address_state']) {
			$object->setPreviousAddressState($data['previous_address_state']);
		} elseif (\array_key_exists('previous_address_state', $data) && null === $data['previous_address_state']) {
			$object->setPreviousAddressState(null);
		}
		if (\array_key_exists('previous_address_years_at_address', $data) && null !== $data['previous_address_years_at_address']) {
			$object->setPreviousAddressYearsAtAddress($data['previous_address_years_at_address']);
		} elseif (\array_key_exists('previous_address_years_at_address', $data) && null === $data['previous_address_years_at_address']) {
			$object->setPreviousAddressYearsAtAddress(null);
		}
		if (\array_key_exists('previous_employer_name', $data) && null !== $data['previous_employer_name']) {
			$object->setPreviousEmployerName($data['previous_employer_name']);
		} elseif (\array_key_exists('previous_employer_name', $data) && null === $data['previous_employer_name']) {
			$object->setPreviousEmployerName(null);
		}
		if (\array_key_exists('previous_employer_phone', $data) && null !== $data['previous_employer_phone']) {
			$object->setPreviousEmployerPhone($data['previous_employer_phone']);
		} elseif (\array_key_exists('previous_employer_phone', $data) && null === $data['previous_employer_phone']) {
			$object->setPreviousEmployerPhone(null);
		}
		if (\array_key_exists('previous_years_employed', $data) && null !== $data['previous_years_employed']) {
			$object->setPreviousYearsEmployed($data['previous_years_employed']);
		} elseif (\array_key_exists('previous_years_employed', $data) && null === $data['previous_years_employed']) {
			$object->setPreviousYearsEmployed(null);
		}
		if (\array_key_exists('report_delivery_type', $data) && null !== $data['report_delivery_type']) {
			$object->setReportDeliveryType($data['report_delivery_type']);
		} elseif (\array_key_exists('report_delivery_type', $data) && null === $data['report_delivery_type']) {
			$object->setReportDeliveryType(null);
		}
		if (\array_key_exists('residency_status', $data) && null !== $data['residency_status']) {
			$object->setResidencyStatus($data['residency_status']);
		} elseif (\array_key_exists('residency_status', $data) && null === $data['residency_status']) {
			$object->setResidencyStatus(null);
		}
		if (\array_key_exists('residential_status', $data) && null !== $data['residential_status']) {
			$object->setResidentialStatus($data['residential_status']);
		} elseif (\array_key_exists('residential_status', $data) && null === $data['residential_status']) {
			$object->setResidentialStatus(null);
		}
		if (\array_key_exists('salutation', $data) && null !== $data['salutation']) {
			$object->setSalutation($data['salutation']);
		} elseif (\array_key_exists('salutation', $data) && null === $data['salutation']) {
			$object->setSalutation(null);
		}
		if (\array_key_exists('start_at_address', $data) && null !== $data['start_at_address']) {
			$object->setStartAtAddress(\DateTime::createFromFormat('Y-m-d', $data['start_at_address'])->setTime(0, 0, 0));
		} elseif (\array_key_exists('start_at_address', $data) && null === $data['start_at_address']) {
			$object->setStartAtAddress(null);
		}
		if (\array_key_exists('stop_becs_flag', $data) && null !== $data['stop_becs_flag']) {
			$object->setStopBecsFlag($data['stop_becs_flag']);
		} elseif (\array_key_exists('stop_becs_flag', $data) && null === $data['stop_becs_flag']) {
			$object->setStopBecsFlag(null);
		}
		if (\array_key_exists('supplier_id_etag', $data) && null !== $data['supplier_id_etag']) {
			$object->setSupplierIdEtag($data['supplier_id_etag']);
		} elseif (\array_key_exists('supplier_id_etag', $data) && null === $data['supplier_id_etag']) {
			$object->setSupplierIdEtag(null);
		}
		if (\array_key_exists('supplier_id_financier', $data) && null !== $data['supplier_id_financier']) {
			$object->setSupplierIdFinancier($data['supplier_id_financier']);
		} elseif (\array_key_exists('supplier_id_financier', $data) && null === $data['supplier_id_financier']) {
			$object->setSupplierIdFinancier(null);
		}
		if (\array_key_exists('surname', $data) && null !== $data['surname']) {
			$object->setSurname($data['surname']);
		} elseif (\array_key_exists('surname', $data) && null === $data['surname']) {
			$object->setSurname(null);
		}
		if (\array_key_exists('tag_account_number', $data) && null !== $data['tag_account_number']) {
			$object->setTagAccountNumber($data['tag_account_number']);
		} elseif (\array_key_exists('tag_account_number', $data) && null === $data['tag_account_number']) {
			$object->setTagAccountNumber(null);
		}
		if (\array_key_exists('tag_number', $data) && null !== $data['tag_number']) {
			$object->setTagNumber($data['tag_number']);
		} elseif (\array_key_exists('tag_number', $data) && null === $data['tag_number']) {
			$object->setTagNumber(null);
		}
		if (\array_key_exists('user_id_package_advisor', $data) && null !== $data['user_id_package_advisor']) {
			$object->setUserIdPackageAdvisor($data['user_id_package_advisor']);
		} elseif (\array_key_exists('user_id_package_advisor', $data) && null === $data['user_id_package_advisor']) {
			$object->setUserIdPackageAdvisor(null);
		}
		if (\array_key_exists('work_contact_given', $data) && null !== $data['work_contact_given']) {
			$object->setWorkContactGiven($data['work_contact_given']);
		} elseif (\array_key_exists('work_contact_given', $data) && null === $data['work_contact_given']) {
			$object->setWorkContactGiven(null);
		}
		if (\array_key_exists('work_contact_position', $data) && null !== $data['work_contact_position']) {
			$object->setWorkContactPosition($data['work_contact_position']);
		} elseif (\array_key_exists('work_contact_position', $data) && null === $data['work_contact_position']) {
			$object->setWorkContactPosition(null);
		}
		if (\array_key_exists('work_contact_surname', $data) && null !== $data['work_contact_surname']) {
			$object->setWorkContactSurname($data['work_contact_surname']);
		} elseif (\array_key_exists('work_contact_surname', $data) && null === $data['work_contact_surname']) {
			$object->setWorkContactSurname(null);
		}
		if (\array_key_exists('work_fax', $data) && null !== $data['work_fax']) {
			$object->setWorkFax($data['work_fax']);
		} elseif (\array_key_exists('work_fax', $data) && null === $data['work_fax']) {
			$object->setWorkFax(null);
		}
		if (\array_key_exists('work_name', $data) && null !== $data['work_name']) {
			$object->setWorkName($data['work_name']);
		} elseif (\array_key_exists('work_name', $data) && null === $data['work_name']) {
			$object->setWorkName(null);
		}
		if (\array_key_exists('work_phone', $data) && null !== $data['work_phone']) {
			$object->setWorkPhone($data['work_phone']);
		} elseif (\array_key_exists('work_phone', $data) && null === $data['work_phone']) {
			$object->setWorkPhone(null);
		}
		if (\array_key_exists('work_phone_ext', $data) && null !== $data['work_phone_ext']) {
			$object->setWorkPhoneExt($data['work_phone_ext']);
		} elseif (\array_key_exists('work_phone_ext', $data) && null === $data['work_phone_ext']) {
			$object->setWorkPhoneExt(null);
		}
		if (\array_key_exists('work_position', $data) && null !== $data['work_position']) {
			$object->setWorkPosition($data['work_position']);
		} elseif (\array_key_exists('work_position', $data) && null === $data['work_position']) {
			$object->setWorkPosition(null);
		}
		if (\array_key_exists('work_postcode', $data) && null !== $data['work_postcode']) {
			$object->setWorkPostcode($data['work_postcode']);
		} elseif (\array_key_exists('work_postcode', $data) && null === $data['work_postcode']) {
			$object->setWorkPostcode(null);
		}
		if (\array_key_exists('work_state', $data) && null !== $data['work_state']) {
			$object->setWorkState($data['work_state']);
		} elseif (\array_key_exists('work_state', $data) && null === $data['work_state']) {
			$object->setWorkState(null);
		}
		if (\array_key_exists('work_street', $data) && null !== $data['work_street']) {
			$object->setWorkStreet($data['work_street']);
		} elseif (\array_key_exists('work_street', $data) && null === $data['work_street']) {
			$object->setWorkStreet(null);
		}
		if (\array_key_exists('work_street_no', $data) && null !== $data['work_street_no']) {
			$object->setWorkStreetNo($data['work_street_no']);
		} elseif (\array_key_exists('work_street_no', $data) && null === $data['work_street_no']) {
			$object->setWorkStreetNo(null);
		}
		if (\array_key_exists('work_street_type', $data) && null !== $data['work_street_type']) {
			$object->setWorkStreetType($data['work_street_type']);
		} elseif (\array_key_exists('work_street_type', $data) && null === $data['work_street_type']) {
			$object->setWorkStreetType(null);
		}
		if (\array_key_exists('work_suburb', $data) && null !== $data['work_suburb']) {
			$object->setWorkSuburb($data['work_suburb']);
		} elseif (\array_key_exists('work_suburb', $data) && null === $data['work_suburb']) {
			$object->setWorkSuburb(null);
		}
		if (\array_key_exists('work_type', $data) && null !== $data['work_type']) {
			$object->setWorkType($data['work_type']);
		} elseif (\array_key_exists('work_type', $data) && null === $data['work_type']) {
			$object->setWorkType(null);
		}
		if (\array_key_exists('work_unit_no', $data) && null !== $data['work_unit_no']) {
			$object->setWorkUnitNo($data['work_unit_no']);
		} elseif (\array_key_exists('work_unit_no', $data) && null === $data['work_unit_no']) {
			$object->setWorkUnitNo(null);
		}
		if (\array_key_exists('years_at_address', $data) && null !== $data['years_at_address']) {
			$object->setYearsAtAddress($data['years_at_address']);
		} elseif (\array_key_exists('years_at_address', $data) && null === $data['years_at_address']) {
			$object->setYearsAtAddress(null);
		}
		if (\array_key_exists('years_with_employer', $data) && null !== $data['years_with_employer']) {
			$object->setYearsWithEmployer($data['years_with_employer']);
		} elseif (\array_key_exists('years_with_employer', $data) && null === $data['years_with_employer']) {
			$object->setYearsWithEmployer(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getDriverId()) {
			$data['driver_id'] = $object->getDriverId();
		}
		if (null !== $object->getAccountantContactName()) {
			$data['accountant_contact_name'] = $object->getAccountantContactName();
		}
		if (null !== $object->getAccountantContactPhone()) {
			$data['accountant_contact_phone'] = $object->getAccountantContactPhone();
		}
		if (null !== $object->getAccountantFirmName()) {
			$data['accountant_firm_name'] = $object->getAccountantFirmName();
		}
		if (null !== $object->getAddressIdHome()) {
			$data['address_id_home'] = $object->getAddressIdHome();
		}
		if (null !== $object->getAddressIdPost()) {
			$data['address_id_post'] = $object->getAddressIdPost();
		}
		if (null !== $object->getAllowances()) {
			$data['allowances'] = $object->getAllowances();
		}
		if (null !== $object->getAnnualSalary()) {
			$data['annual_salary'] = $object->getAnnualSalary();
		}
		if (null !== $object->getAssetBankAccounts()) {
			$data['asset_bank_accounts'] = $object->getAssetBankAccounts();
		}
		if (null !== $object->getAssetBankAccountsDescription()) {
			$data['asset_bank_accounts_description'] = $object->getAssetBankAccountsDescription();
		}
		if (null !== $object->getAssetFurniture()) {
			$data['asset_furniture'] = $object->getAssetFurniture();
		}
		if (null !== $object->getAssetFurnitureDescription()) {
			$data['asset_furniture_description'] = $object->getAssetFurnitureDescription();
		}
		if (null !== $object->getAssetInvestmentProperties()) {
			$data['asset_investment_properties'] = $object->getAssetInvestmentProperties();
		}
		if (null !== $object->getAssetInvestmentPropertiesDescription()) {
			$data['asset_investment_properties_description'] = $object->getAssetInvestmentPropertiesDescription();
		}
		if (null !== $object->getAssetMotorVehicle()) {
			$data['asset_motor_vehicle'] = $object->getAssetMotorVehicle();
		}
		if (null !== $object->getAssetMotorVehicleDescription()) {
			$data['asset_motor_vehicle_description'] = $object->getAssetMotorVehicleDescription();
		}
		if (null !== $object->getAssetOtherInvestments()) {
			$data['asset_other_investments'] = $object->getAssetOtherInvestments();
		}
		if (null !== $object->getAssetOtherInvestmentsDescription()) {
			$data['asset_other_investments_description'] = $object->getAssetOtherInvestmentsDescription();
		}
		if (null !== $object->getAssetResidentProperty()) {
			$data['asset_resident_property'] = $object->getAssetResidentProperty();
		}
		if (null !== $object->getAssetResidentPropertyDescription()) {
			$data['asset_resident_property_description'] = $object->getAssetResidentPropertyDescription();
		}
		if (null !== $object->getAssetShares()) {
			$data['asset_shares'] = $object->getAssetShares();
		}
		if (null !== $object->getAssetSharesDescription()) {
			$data['asset_shares_description'] = $object->getAssetSharesDescription();
		}
		if (null !== $object->getAssetSuper()) {
			$data['asset_super'] = $object->getAssetSuper();
		}
		if (null !== $object->getAssetSuperDescription()) {
			$data['asset_super_description'] = $object->getAssetSuperDescription();
		}
		if (null !== $object->getAtoLoanFlag()) {
			$data['ato_loan_flag'] = $object->getAtoLoanFlag();
		}
		if (null !== $object->getAustralianResident()) {
			$data['australian_resident'] = $object->getAustralianResident();
		}
		if (null !== $object->getCardAccountNumber()) {
			$data['card_account_number'] = $object->getCardAccountNumber();
		}
		if (null !== $object->getClientCostCentreId()) {
			$data['client_cost_centre_id'] = $object->getClientCostCentreId();
		}
		if (null !== $object->getClientId()) {
			$data['client_id'] = $object->getClientId();
		}
		if (null !== $object->getContactNote()) {
			$data['contact_note'] = $object->getContactNote();
		}
		if (null !== $object->getCorporateTypeIdPreviousEmployer()) {
			$data['corporate_type_id_previous_employer'] = $object->getCorporateTypeIdPreviousEmployer();
		}
		if (null !== $object->getCreated()) {
			$data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
		}
		if (null !== $object->getCreditCheckAuthorisedFlag()) {
			$data['credit_check_authorised_flag'] = $object->getCreditCheckAuthorisedFlag();
		}
		if (null !== $object->getDateOfBirth()) {
			$data['date_of_birth'] = $object->getDateOfBirth()->format('Y-m-d');
		}
		if (null !== $object->getDriverClaimsFlag()) {
			$data['driver_claims_flag'] = $object->getDriverClaimsFlag();
		}
		if (null !== $object->getDriverEmploymentTypeId()) {
			$data['driver_employment_type_id'] = $object->getDriverEmploymentTypeId();
		}
		if (null !== $object->getDriverIdExternal()) {
			$data['driver_id_external'] = $object->getDriverIdExternal();
		}
		if (null !== $object->getDriverLicExp()) {
			$data['driver_lic_exp'] = $object->getDriverLicExp();
		}
		if (null !== $object->getDriverLicence()) {
			$data['driver_licence'] = $object->getDriverLicence();
		}
		if (null !== $object->getDriverLicenceState()) {
			$data['driver_licence_state'] = $object->getDriverLicenceState();
		}
		if (null !== $object->getDriverOccupationCodeId()) {
			$data['driver_occupation_code_id'] = $object->getDriverOccupationCodeId();
		}
		if (null !== $object->getEmployeeAlias()) {
			$data['employee_alias'] = $object->getEmployeeAlias();
		}
		if (null !== $object->getEmployeeArea()) {
			$data['employee_area'] = $object->getEmployeeArea();
		}
		if (null !== $object->getEmployeeEnd()) {
			$data['employee_end'] = $object->getEmployeeEnd()->format('Y-m-d');
		}
		if (null !== $object->getEmployeeGroup()) {
			$data['employee_group'] = $object->getEmployeeGroup();
		}
		if (null !== $object->getEmployeeNo()) {
			$data['employee_no'] = $object->getEmployeeNo();
		}
		if (null !== $object->getEmployeePayOffice()) {
			$data['employee_pay_office'] = $object->getEmployeePayOffice();
		}
		if (null !== $object->getEmployeeSlAcc()) {
			$data['employee_sl_acc'] = $object->getEmployeeSlAcc();
		}
		if (null !== $object->getEmployeeStart()) {
			$data['employee_start'] = $object->getEmployeeStart()->format('Y-m-d');
		}
		if (null !== $object->getEmployeeSuper()) {
			$data['employee_super'] = $object->getEmployeeSuper();
		}
		if (null !== $object->getEmployerAddress1()) {
			$data['employer_address_1'] = $object->getEmployerAddress1();
		}
		if (null !== $object->getEmployerAddress2()) {
			$data['employer_address_2'] = $object->getEmployerAddress2();
		}
		if (null !== $object->getEmployerAddress3()) {
			$data['employer_address_3'] = $object->getEmployerAddress3();
		}
		if (null !== $object->getEmployerAddressPostcode()) {
			$data['employer_address_postcode'] = $object->getEmployerAddressPostcode();
		}
		if (null !== $object->getEmployerAddressState()) {
			$data['employer_address_state'] = $object->getEmployerAddressState();
		}
		if (null !== $object->getEmployerSuper()) {
			$data['employer_super'] = $object->getEmployerSuper();
		}
		if (null !== $object->getExpenseCreditCard()) {
			$data['expense_credit_card'] = $object->getExpenseCreditCard();
		}
		if (null !== $object->getExpenseHousehold()) {
			$data['expense_household'] = $object->getExpenseHousehold();
		}
		if (null !== $object->getExpenseMortgage()) {
			$data['expense_mortgage'] = $object->getExpenseMortgage();
		}
		if (null !== $object->getExpenseOther()) {
			$data['expense_other'] = $object->getExpenseOther();
		}
		if (null !== $object->getExpensePrivateEducationChildcare()) {
			$data['expense_private_education_childcare'] = $object->getExpensePrivateEducationChildcare();
		}
		if (null !== $object->getExpenseRent()) {
			$data['expense_rent'] = $object->getExpenseRent();
		}
		if (null !== $object->getExpenseVehicle()) {
			$data['expense_vehicle'] = $object->getExpenseVehicle();
		}
		if (null !== $object->getExternalCode()) {
			$data['external_code'] = $object->getExternalCode();
		}
		if (null !== $object->getFbtType()) {
			$data['fbt_type'] = $object->getFbtType();
		}
		if (null !== $object->getFinancierApplicantReference()) {
			$data['financier_applicant_reference'] = $object->getFinancierApplicantReference();
		}
		if (null !== $object->getGender()) {
			$data['gender'] = $object->getGender();
		}
		if (null !== $object->getGeneratedPassword()) {
			$data['generated_password'] = $object->getGeneratedPassword();
		}
		if (null !== $object->getGivenName()) {
			$data['given_name'] = $object->getGivenName();
		}
		if (null !== $object->getHomeCarPostcode()) {
			$data['home_car_postcode'] = $object->getHomeCarPostcode();
		}
		if (null !== $object->getHomeEmail()) {
			$data['home_email'] = $object->getHomeEmail();
		}
		if (null !== $object->getHomeFax()) {
			$data['home_fax'] = $object->getHomeFax();
		}
		if (null !== $object->getHomePhone()) {
			$data['home_phone'] = $object->getHomePhone();
		}
		if (null !== $object->getHomePostcode()) {
			$data['home_postcode'] = $object->getHomePostcode();
		}
		if (null !== $object->getHomeState()) {
			$data['home_state'] = $object->getHomeState();
		}
		if (null !== $object->getHomeStreet()) {
			$data['home_street'] = $object->getHomeStreet();
		}
		if (null !== $object->getHomeStreetNo()) {
			$data['home_street_no'] = $object->getHomeStreetNo();
		}
		if (null !== $object->getHomeStreetType()) {
			$data['home_street_type'] = $object->getHomeStreetType();
		}
		if (null !== $object->getHomeSuburb()) {
			$data['home_suburb'] = $object->getHomeSuburb();
		}
		if (null !== $object->getHomeUnitNo()) {
			$data['home_unit_no'] = $object->getHomeUnitNo();
		}
		if (null !== $object->getIncomeGovernmentBenefits()) {
			$data['income_government_benefits'] = $object->getIncomeGovernmentBenefits();
		}
		if (null !== $object->getIncomeGross()) {
			$data['income_gross'] = $object->getIncomeGross();
		}
		if (null !== $object->getIncomeInvestment()) {
			$data['income_investment'] = $object->getIncomeInvestment();
		}
		if (null !== $object->getIncomeNet()) {
			$data['income_net'] = $object->getIncomeNet();
		}
		if (null !== $object->getIncomeOther()) {
			$data['income_other'] = $object->getIncomeOther();
		}
		if (null !== $object->getIncomeRentalNet()) {
			$data['income_rental_net'] = $object->getIncomeRentalNet();
		}
		if (null !== $object->getIncomeSpouseGross()) {
			$data['income_spouse_gross'] = $object->getIncomeSpouseGross();
		}
		if (null !== $object->getIncomeSpouseNet()) {
			$data['income_spouse_net'] = $object->getIncomeSpouseNet();
		}
		if (null !== $object->getIncomeSuperannuation()) {
			$data['income_superannuation'] = $object->getIncomeSuperannuation();
		}
		if (null !== $object->getInsuranceBrokerFeeExemptFlag()) {
			$data['insurance_broker_fee_exempt_flag'] = $object->getInsuranceBrokerFeeExemptFlag();
		}
		if (null !== $object->getKycVerifiedFlag()) {
			$data['kyc_verified_flag'] = $object->getKycVerifiedFlag();
		}
		if (null !== $object->getLandlordName()) {
			$data['landlord_name'] = $object->getLandlordName();
		}
		if (null !== $object->getLandlordTelephone()) {
			$data['landlord_telephone'] = $object->getLandlordTelephone();
		}
		if (null !== $object->getLastEdit()) {
			$data['last_edit'] = $object->getLastEdit()->format('Y-m-d\\TH:i:sP');
		}
		if (null !== $object->getLiabilityCreditCardLimit()) {
			$data['liability_credit_card_limit'] = $object->getLiabilityCreditCardLimit();
		}
		if (null !== $object->getLiabilityCreditCardLimitDescription()) {
			$data['liability_credit_card_limit_description'] = $object->getLiabilityCreditCardLimitDescription();
		}
		if (null !== $object->getLiabilityInvestmentMortgages()) {
			$data['liability_investment_mortgages'] = $object->getLiabilityInvestmentMortgages();
		}
		if (null !== $object->getLiabilityInvestmentMortgagesDescription()) {
			$data['liability_investment_mortgages_description'] = $object->getLiabilityInvestmentMortgagesDescription();
		}
		if (null !== $object->getLiabilityLoans()) {
			$data['liability_loans'] = $object->getLiabilityLoans();
		}
		if (null !== $object->getLiabilityLoansDescription()) {
			$data['liability_loans_description'] = $object->getLiabilityLoansDescription();
		}
		if (null !== $object->getLiabilityMortgages()) {
			$data['liability_mortgages'] = $object->getLiabilityMortgages();
		}
		if (null !== $object->getLiabilityMortgagesDescription()) {
			$data['liability_mortgages_description'] = $object->getLiabilityMortgagesDescription();
		}
		if (null !== $object->getLiabilityOther()) {
			$data['liability_other'] = $object->getLiabilityOther();
		}
		if (null !== $object->getLiabilityOtherDescription()) {
			$data['liability_other_description'] = $object->getLiabilityOtherDescription();
		}
		if (null !== $object->getLiabilityOverdraft()) {
			$data['liability_overdraft'] = $object->getLiabilityOverdraft();
		}
		if (null !== $object->getLiabilityOverdraftDescription()) {
			$data['liability_overdraft_description'] = $object->getLiabilityOverdraftDescription();
		}
		if (null !== $object->getLiabilityRent()) {
			$data['liability_rent'] = $object->getLiabilityRent();
		}
		if (null !== $object->getLiabilityRentDescription()) {
			$data['liability_rent_description'] = $object->getLiabilityRentDescription();
		}
		if (null !== $object->getLicenceClass()) {
			$data['licence_class'] = $object->getLicenceClass();
		}
		if (null !== $object->getMaritalStatus()) {
			$data['marital_status'] = $object->getMaritalStatus();
		}
		if (null !== $object->getMiddleName()) {
			$data['middle_name'] = $object->getMiddleName();
		}
		if (null !== $object->getMobile()) {
			$data['mobile'] = $object->getMobile();
		}
		if (null !== $object->getNameOnAccount()) {
			$data['name_on_account'] = $object->getNameOnAccount();
		}
		if (null !== $object->getNoOfDependents()) {
			$data['no_of_dependents'] = $object->getNoOfDependents();
		}
		if (null !== $object->getPayCycleId()) {
			$data['pay_cycle_id'] = $object->getPayCycleId();
		}
		if (null !== $object->getPreferredName()) {
			$data['preferred_name'] = $object->getPreferredName();
		}
		if (null !== $object->getPreviousAddress1()) {
			$data['previous_address_1'] = $object->getPreviousAddress1();
		}
		if (null !== $object->getPreviousAddress2()) {
			$data['previous_address_2'] = $object->getPreviousAddress2();
		}
		if (null !== $object->getPreviousAddress3()) {
			$data['previous_address_3'] = $object->getPreviousAddress3();
		}
		if (null !== $object->getPreviousAddressCountryId()) {
			$data['previous_address_country_id'] = $object->getPreviousAddressCountryId();
		}
		if (null !== $object->getPreviousAddressPostcode()) {
			$data['previous_address_postcode'] = $object->getPreviousAddressPostcode();
		}
		if (null !== $object->getPreviousAddressState()) {
			$data['previous_address_state'] = $object->getPreviousAddressState();
		}
		if (null !== $object->getPreviousAddressYearsAtAddress()) {
			$data['previous_address_years_at_address'] = $object->getPreviousAddressYearsAtAddress();
		}
		if (null !== $object->getPreviousEmployerName()) {
			$data['previous_employer_name'] = $object->getPreviousEmployerName();
		}
		if (null !== $object->getPreviousEmployerPhone()) {
			$data['previous_employer_phone'] = $object->getPreviousEmployerPhone();
		}
		if (null !== $object->getPreviousYearsEmployed()) {
			$data['previous_years_employed'] = $object->getPreviousYearsEmployed();
		}
		if (null !== $object->getReportDeliveryType()) {
			$data['report_delivery_type'] = $object->getReportDeliveryType();
		}
		if (null !== $object->getResidencyStatus()) {
			$data['residency_status'] = $object->getResidencyStatus();
		}
		if (null !== $object->getResidentialStatus()) {
			$data['residential_status'] = $object->getResidentialStatus();
		}
		if (null !== $object->getSalutation()) {
			$data['salutation'] = $object->getSalutation();
		}
		if (null !== $object->getStartAtAddress()) {
			$data['start_at_address'] = $object->getStartAtAddress()->format('Y-m-d');
		}
		if (null !== $object->getStopBecsFlag()) {
			$data['stop_becs_flag'] = $object->getStopBecsFlag();
		}
		if (null !== $object->getSupplierIdEtag()) {
			$data['supplier_id_etag'] = $object->getSupplierIdEtag();
		}
		if (null !== $object->getSupplierIdFinancier()) {
			$data['supplier_id_financier'] = $object->getSupplierIdFinancier();
		}
		if (null !== $object->getSurname()) {
			$data['surname'] = $object->getSurname();
		}
		if (null !== $object->getTagAccountNumber()) {
			$data['tag_account_number'] = $object->getTagAccountNumber();
		}
		if (null !== $object->getTagNumber()) {
			$data['tag_number'] = $object->getTagNumber();
		}
		if (null !== $object->getUserIdPackageAdvisor()) {
			$data['user_id_package_advisor'] = $object->getUserIdPackageAdvisor();
		}
		if (null !== $object->getWorkContactGiven()) {
			$data['work_contact_given'] = $object->getWorkContactGiven();
		}
		if (null !== $object->getWorkContactPosition()) {
			$data['work_contact_position'] = $object->getWorkContactPosition();
		}
		if (null !== $object->getWorkContactSurname()) {
			$data['work_contact_surname'] = $object->getWorkContactSurname();
		}
		if (null !== $object->getWorkFax()) {
			$data['work_fax'] = $object->getWorkFax();
		}
		if (null !== $object->getWorkName()) {
			$data['work_name'] = $object->getWorkName();
		}
		if (null !== $object->getWorkPhone()) {
			$data['work_phone'] = $object->getWorkPhone();
		}
		if (null !== $object->getWorkPhoneExt()) {
			$data['work_phone_ext'] = $object->getWorkPhoneExt();
		}
		if (null !== $object->getWorkPosition()) {
			$data['work_position'] = $object->getWorkPosition();
		}
		if (null !== $object->getWorkPostcode()) {
			$data['work_postcode'] = $object->getWorkPostcode();
		}
		if (null !== $object->getWorkState()) {
			$data['work_state'] = $object->getWorkState();
		}
		if (null !== $object->getWorkStreet()) {
			$data['work_street'] = $object->getWorkStreet();
		}
		if (null !== $object->getWorkStreetNo()) {
			$data['work_street_no'] = $object->getWorkStreetNo();
		}
		if (null !== $object->getWorkStreetType()) {
			$data['work_street_type'] = $object->getWorkStreetType();
		}
		if (null !== $object->getWorkSuburb()) {
			$data['work_suburb'] = $object->getWorkSuburb();
		}
		if (null !== $object->getWorkType()) {
			$data['work_type'] = $object->getWorkType();
		}
		if (null !== $object->getWorkUnitNo()) {
			$data['work_unit_no'] = $object->getWorkUnitNo();
		}
		if (null !== $object->getYearsAtAddress()) {
			$data['years_at_address'] = $object->getYearsAtAddress();
		}
		if (null !== $object->getYearsWithEmployer()) {
			$data['years_with_employer'] = $object->getYearsWithEmployer();
		}

		return $data;
	}
}
