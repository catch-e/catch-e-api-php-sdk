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

namespace CatchE\OpenApi2\Endpoint;

class RequestGlassVehicleDataImport extends \CatchE\OpenApi2\Runtime\Client\BaseEndpoint implements \CatchE\OpenApi2\Runtime\Client\Endpoint
{
    use \CatchE\OpenApi2\Runtime\Client\EndpointTrait;

    /**
     * The import of Glass data generally creates new records and updates existing records where required.
     *
     * This API will initiate a Glass vehicle data import process. The process is asynchronous. The API will return the associated import_id immediately on success.
     *
     * This API can support both FTP and SFTP protocol endpoints.
     *
     * This method requires the **VehicleData:ImportGlass** permission to be associated with your role.
     *
     * ## Audit Records
     *
     * The import records created and changed in the gb_audit_import file. Reports and queries can be run over this file using the timestamp of each import to identify new records created and existing records updated. Contact Catch-e for the sample queries named:
     *
     * Variants created and updated
     * Variant residuals updated
     * Other tables updated
     *
     * ## Validation
     *
     * The import process will validate the 'NVIC' code for each row in each file. NVIC codes must be 6 characters. If any of the NVIC code fields are not 6 characters long the file will fail. No vehicles will be imported in this instance. Catch-e support will be notified.
     *
     * ## Set Up
     *
     * Clients using Glass data require the following gb_controls to be as follows:
     *
     * | Module | Name | Value |
     * |--------|------|-------|
     * |gb|data_source_default|s:5:"glass";|
     * |gb|quotes_data_source_override|s:5:"glass";|
     *
     * Client specific values must be configured for the following gb_controls:
     *
     * | Module | Name | Notes |
     * |--------|------|-------|
     * |qt|glass_import_photos_flag|
     * |qt|glass_sftp_connection|Use if client has SFTP credentials
     * |qt|glass_ftp_connection|Use if client has legacy FTP credentials
     *
     * If both SFTP and FTP connection controls are specified, the SFTP control will take precedence.
     *
     * ## Required files in Glass (monthly) archive
     *
     * | Key | |
     * |-----|-|
     * |**CVG**|Commercial Vehicles up to 10 years old includes 4WDs and vans with a load carrying capacity of less than 3510kg.|
     * |**PVG**|Passenger Vehicles up to 10 years old inclusive|
     * |**N12**|Contains only new vehicles and prices released in the current year with NVIC and contains no alphanumeric prices.|
     * |**U12**|Contains all vehicles with second hand prices with no alphanumeric prices and contains NVIC.|
     *
     * Same rules apply to PVG, HCV and CVG files. OCG AND OLC prefixes are NOT used.
     *
     * In some circumstances a client's Glass's ftp site may contain both Service 11 and Service 14 data files. The difference is Service 11 files with the file extension .U12 contain used vehicle values, whereas Service 14 files with the file extension .U12 do not.
     *
     * Where both files are present the Catch-e default is to import Service 11 .U12 data.
     *
     *
     * | Filename | Inclusion  Notes |
     * |----------|------------------|
     * |**CVG11xxx.N12**|Required if client wants new vehicles and pricing|
     * |**CVG14xxx.N12**|Required if client wants new vehicles and no pricing|
     * |**CVG14xxx.U12**|Required if client wants all vehicles and no pricing|
     * |**CVG73xxx.GRN**|CO2 Emission Data Pack|
     * |**CVG78xxx.FUE**|Fuel code long description|
     * |**CVG78xxx.STR**|Steering code long description|
     * |**CVG83xxx.OCD**|Optional equipment|
     * |**CVG86xxx.SPE**|Vehicle Specifications e.g. RELEASE, DISCON, DRV, TORQUE, KW etc|
     * |**CVG87xxx.SPE**|Vehicle Specifications e.g. VEHICLE SEGMENT, COUNTRY OF, ORIGIN, FUEL H/WAY, FUEL CITY etc|
     * |**CVG89xxx.OPT**|Standard equipment|
     * |**CVG93xxx.SUS**|Suspension|
     * |**CVG99xxx.BDY**|Body code long description|
     * |**CVG99xxx.MAK**|qt_makes|
     * |**CVG11xxx.U12**|(Optional)  All vehicles and second-hand pricing|
     * |**CVG75xxx.SPE**|(Optional)  Vehicle Specifications e.g. KW_RPM, NM_RPM, No. OF DOORS, GRD CLEARANCE etc|
     *
     * @param array $formParameters {
     *
     *     @var string $import_type
     *     @var string $file_name (Optional) File name
     *
     * If not supplied, value will default to:
     *
     **%My%**eis.zip
     *
     * Where **%My%** is dynamically replaced with current Month and Year.
     * For example, Sep20eis.zip.
     *     @var \Psr\Http\Message\StreamInterface|resource|string $data (Optional) Data file to import. If specified, the file_name parameter is ignored.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Audit-User-Id (Optional) User Id to use for audit purposes. This header requires the **Audit:UserIdOverride** permission to be associated with your role.
     * }
     */
    public function __construct(array $formParameters = [], array $headerParameters = [])
    {
        $this->formParameters = $formParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/qt/interface/vehicle-data/glass';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getMultipartBody($streamFactory);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['Bearer Token'];
    }

    protected function getFormOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getFormOptionsResolver();
        $optionsResolver->setDefined(['import_type', 'file_name', 'data']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('import_type', ['string']);
        $optionsResolver->setAllowedTypes('file_name', ['string']);
        $optionsResolver->setAllowedTypes('data', ['string', 'resource', '\\Psr\\Http\\Message\\StreamInterface']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Audit-User-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Audit-User-Id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnauthorizedException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportForbiddenException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotFoundException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotAcceptableException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnsupportedMediaTypeException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnprocessableEntityException
     * @throws \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportInternalServerErrorException
     *
     * @return null|\CatchE\OpenApi2\Model\Error|\CatchE\OpenApi2\Model\VehicleDataRequestGlassImportSuccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\VehicleDataRequestGlassImportSuccess', 'json');
        }
        if (401 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnauthorizedException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Unauthorized', 'json'));
        }
        if (403 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportForbiddenException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Forbidden', 'json'));
        }
        if (404 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotFoundException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotFound', 'json'));
        }
        if (406 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportNotAcceptableException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\NotAcceptable', 'json'));
        }
        if (415 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnsupportedMediaTypeException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnsupportedMediaType', 'json'));
        }
        if (422 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportUnprocessableEntityException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\UnprocessableEntity', 'json'));
        }
        if (500 === $status) {
            throw new \CatchE\OpenApi2\Exception\RequestGlassVehicleDataImportInternalServerErrorException($serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\InternalError', 'json'));
        }

        return $serializer->deserialize($body, 'CatchE\\OpenApi2\\Model\\Error', 'json');
    }
}
