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

namespace CatchE\OpenApi2\Exception;

class CreateQuoteWebServiceUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(\CatchE\OpenApi2\Model\UnprocessableEntity $unprocessableEntity)
    {
        parent::__construct('Common errors

1. **ANNUAL_KILOMETRES_INVALID** - Input field invalid evaluates to zero. 
2. **ANNUAL_KILOMETRES_MISSING** - Input field missing
3. **BAD_CONTRACT_TYPE_DEFAULT** - Bad setup in Catch-e. Contract Type “Status” may be \'inactive\'.
4. **BAD_QUOTE_TEMPLATE** - Data set up issue
5. **CLIENT_CODE_MISSING** - Input field missing
6. **CLIENT_CODE_INVALID** - Client cannot be read
7. **INVALID_COST_CENTRE** - Client Cost Centre cannot be read or is not \'active\'
8. **INVALID_DIVISION** - Client Division cannot be read or is not \'active\'
9. **DEAL_TYPE_INVALID** - Input field invalid, must be either \'dealer-non-sourced\', \'dealer-sourced\', \'private-sale\',
    \'refinance\', \'sale-and-leaseback\', or \'generic-quote\'
10. **DEAL_TYPE_MISSING** - Input field missing
11. **DRIVER_ANNUAL_SALARY_INVALID** - Input field invalid evaluates to zero
12. **DRIVER_ANNUAL_SALARY_MISSING** - Input field missing
13. **DRIVER_EXTERNAL_CODE_INVALID** - Input field is blank
14. **DRIVER_EXTERNAL_CODE_MISSING** - Input field missing
15. **DRIVER_SURNAME_INVALID** - Input field is blank
16. **DRIVER_SURNAME_MISSING** - Input field missing
17. **FAILED_CREATING_DRIVER** - Driver record insert failed
18. **FAILED_UPDATING_DRIVER** - Driver record update failed
19. **FBT_VALUE_INVALID** - Must be a non-zero currency value
20. **FINANCIER_CODE_INVALID** - An invalid supplier_code_financier has been set. The code must map to a Supplier 
    with a "Supplier Type" set to \'Financier\' on the [Suppliers / Account](https://help.catch-e.net.au/mediawiki/index.php/Suppliers:Account) tab.
21. **INCLUSION_PLAN_{CODE}_INVALID** - No match found for nominated Inclusion Plan Code
22. **INCLUSION_SELECTION_INVALID** - No match has been found for against the Inclusion for one or more nominated plans
23. **INSURER_LOCATION_POSTCODE_INVALID** - Input field not an int
24. **INSURER_LOCATION_POSTCODE_MISSING** - Input field missing
25. **LIST_PRICE_GROSS_INVALID** - Input field invalid evaluates to zero
26. **LIST_PRICE_GST_MISSING** - Input field missing, this only occurs if the list_price_net has been included
27. **LIST_PRICE_NET_INVALID** - Input field invalid evaluates to zero
28. **LIST_PRICE_NET_MISSING** - Input field missing, this only occurs if the list_price_gst has been included
29. **LOADING_TYPE_DRIVER_RESTRICTION_INVALID** - Input field invalid
30. **LOADING_TYPE_LICENCE_INVALID** - Input field invalid
31. **LOADING_TYPE_PAST_CLAIMS_INVALID** - Input field invalid
32. **LTI_PLAN_CODE_INVALID** - If ‘product_lti_plan_code’ not found.
33. **LTI_PLAN_CODE_MISSING** - If more than one active “Plan” is found and ‘product_lti_plan_code’ not passed.
34. **LTI_TOP_UP_BENEFIT_NAME_INVALID** - If ‘product_lti_top_up_benefit_name’ not found.
35. **LTI_TOP_UP_BENEFIT_NAME_MISSING** - If more than one active “Top Up Benefit” is found and ‘product_lti_top_up_benefit_name’ not passed.
36. **MISSING_FIELD_ANNUAL_KILOMETRES** - Input field missing
37. **MISSING_FIELD_LEASE_PERIOD** - Input field missing
38. **PLATE_YEAR_INVALID** - Not within valid range 1900-2099
39. **NEW_USED_INVALID** - Input field invalid
40. **ODOMETER_INVALID** - Input field evaluates to zero, this is only applicable if NEW_USED is not \'new\', e.g. \'used\' or \'demonstrator\'
41. **ODOMETER_MISSING** - Input field missing, this only applicable if NEW_USED is not \'new\' e.g. \'used\' or \'demonstrator\'
42. **OPPORTUNITY_ID_INVALID** - Input field is empty
43. **OPPORTUNITY_ID_MISSING** - Input field missing
44. **OPPORTUNITY_NUMBER_INVALID** - Input field is empty
45. **OPPORTUNITY_NUMBER_MISSING** - Input field missing
46. **PARENT_QUOTE_ID_INVALID** - Quote cannot be read
47. **PAY_CYCLE_CODE_INVALID** - The Pay Cycle Code is invalid.
48. **POSTING_MAP_CODE_INVALID** - Invalid contract type
49. **PROCUREMENT_FLAG_INVALID** - Input field invalid
50. **QUOTE_SAVE_FAILED** - Failed saving quote in Catch-e database
51. **QUOTE_VALIDATION_FAILED**
    There is a data set up issue. This error returns an additional details of the error (see example below).

    ```
    {
      "validation_messages": {
        "web_service_error": {
          "CATCH_E_ERROR_QUOTE_VALIDATION_FAILED": "Validation failed due to the following error(s):
          1. Procurement fee must contain a value."
        }
      },
      "type": "http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html",
      "title": "Unprocessable Entity",
      "status": 422,
      "detail": "Failed Validation"
    }
    ```

    In this example, the default [[gb_controls]procurement_fee](https://help.catch-e.net.au/mediawiki/index.php/Global_Controls) = \'0\', but the [[gb_controls]procurement_fee_allow_zero_flag](https://help.catch-e.net.au/mediawiki/index.php/Global_Controls) = \'no\'.
    To fix this, update [[gb_controls]procurement_fee](https://help.catch-e.net.au/mediawiki/index.php/Global_Controls) to contain a value or set the input field procurement_flag = \'no\' or remove it from the request. 
51. **QUOTE_VALIDATION_FAILED** - Previous FBT Value must be 0 or a positive number.
52. **READING_ENCRYPTED_FIELDS** - Error reading encrypted fields on callback
53. **STATE_REGISTERED_INVALID** - Input field invalid.
  - When [[gb_controls]country_code](https://help.catch-e.net.au/mediawiki/index.php/Global_Controls) is \'AUS\' then it must be either \'NSW\', \'VIC\', \'QLD\', \'ACT\', \'TAS\', \'SA\', \'WA\', or \'NT\'
  - When [[gb_controls]country_code](https://help.catch-e.net.au/mediawiki/index.php/Global_Controls) is \'NZ\' then it must be \'NZ\'. "
54. **STATE_REGISTERED_MISSING** - Input field missing
55. **STATE_REGISTERED_MISSING** - Input field missing
56. **TERM_INVALID** - Input field invalid evaluates to zero
57. **TERM_MISSING** - Input field missing
58. **UPDATING_OPPORTUNITY** - Failed to update Salesforce database
59. **USER_ID_CLIENT_MANAGER_INVALID** - Input field contains unknown account manager
60. **USER_ID_CLIENT_MANAGER_MISSING** - Input field missing
61. **VARIANT_ID_INVALID** - Input field invalid record not found
62. **VARIANT_ID_MISSING** - Input field missing
', $unprocessableEntity);
    }
}
