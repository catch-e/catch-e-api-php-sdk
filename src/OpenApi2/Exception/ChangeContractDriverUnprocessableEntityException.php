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

class ChangeContractDriverUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct(\CatchE\OpenApi2\Model\UnprocessableEntity $unprocessableEntity)
    {
        parent::__construct('Unprocessable Entity

Warning Messages
* **driverAlreadyAllocated** - Driver already allocated to this contract
* **odometerInvalidBasedOnEstimate** - Based on a system estimate, this odometer is not valid

Validation Messages
* **noRecordFound** - No record matching the input was found
* **invalidDate** - You must enter a valid date as YYYY-MM-DD, or 0000-00-00
* **driverNotLinkedToClient** - The input driver is not associated with the contract client
* **driverNameCannotBeBlank** - Driver surname and given name are both blank
* **odometerRequiresNonZeroDate** - event_date cannot be 0000-00-00
', $unprocessableEntity);
    }
}
