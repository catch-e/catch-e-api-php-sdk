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

class Variant
{
    /**
     * @var null|string
     */
    protected $variantId;
    /**
     * @var null|string
     */
    protected $modelId;
    /**
     * @var null|float
     */
    protected $modelYear;
    /**
     * @var null|string
     */
    protected $variantCode;
    /**
     * @var null|float
     */
    protected $modelMonth;
    /**
     * @var null|float
     */
    protected $buildYear;
    /**
     * @var null|string
     */
    protected $description;
    /**
     * @var null|string
     */
    protected $shortDescription;
    /**
     * @var null|string
     */
    protected $series;
    /**
     * @var null|string
     */
    protected $serviceProfileId;
    /**
     * @var null|string
     */
    protected $vehicleTypeId;
    /**
     * @var null|string
     */
    protected $bodyTypeId;
    /**
     * @var null|string
     */
    protected $configuration;
    /**
     * @var null|string
     */
    protected $variantName;
    /**
     * @var null|string
     */
    protected $variantSubName;
    /**
     * @var null|string
     */
    protected $transmission;
    /**
     * @var null|float
     */
    protected $gears;
    /**
     * @var null|string
     */
    protected $gearLocation;
    /**
     * @var null|float
     */
    protected $doors;
    /**
     * @var null|float
     */
    protected $seats;
    /**
     * @var null|float
     */
    protected $engineCc;
    /**
     * @var null|string
     */
    protected $engineLitres;
    /**
     * @var null|float
     */
    protected $cylinders;
    /**
     * @var null|float
     */
    protected $valvesPerCylinder;
    /**
     * @var null|string
     */
    protected $driveType;
    /**
     * @var null|string
     */
    protected $engineCycle;
    /**
     * @var null|string
     */
    protected $engineType;
    /**
     * @var null|string
     */
    protected $engineConfiguration;
    /**
     * @var null|string
     */
    protected $fuelDelivery;
    /**
     * @var null|string
     */
    protected $cam;
    /**
     * @var null|string
     */
    protected $steering;
    /**
     * @var null|string
     */
    protected $induction;
    /**
     * @var null|string
     */
    protected $fuelTypeTranslationId;
    /**
     * @var null|float
     */
    protected $powerKw;
    /**
     * @var null|float
     */
    protected $powerRpm;
    /**
     * @var null|float
     */
    protected $torque;
    /**
     * @var null|float
     */
    protected $torqueRpm;
    /**
     * @var null|float
     */
    protected $wheelBase;
    /**
     * @var null|float
     */
    protected $weight;
    /**
     * @var null|float
     */
    protected $payload;
    /**
     * @var null|float
     */
    protected $towingCapacity;
    /**
     * @var null|float
     */
    protected $kerbWeight;
    /**
     * @var null|string
     */
    protected $country;
    /**
     * @var null|float
     */
    protected $fuelCapacity;
    /**
     * @var null|string
     */
    protected $frontTyreSize;
    /**
     * @var null|string
     */
    protected $rearTyreSize;
    /**
     * @var null|string
     */
    protected $engineCode;
    /**
     * @var null|string
     */
    protected $manufacturerModelCode;
    /**
     * @var null|float
     */
    protected $acceleration;
    /**
     * @var null|float
     */
    protected $fuelMetro;
    /**
     * @var null|float
     */
    protected $fuelCountry;
    /**
     * @var null|float
     */
    protected $fuelCombined;
    /**
     * @var null|float
     */
    protected $co2Emissions;
    /**
     * @var null|float
     */
    protected $warrantyYears;
    /**
     * @var null|float
     */
    protected $warrantyKms;
    /**
     * @var null|float
     */
    protected $serviceKms;
    /**
     * @var null|float
     */
    protected $serviceMths;
    /**
     * @var null|float
     */
    protected $listPriceGross;
    /**
     * @var null|float
     */
    protected $listPriceNet;
    /**
     * @var null|float
     */
    protected $listPriceGst;
    /**
     * @var null|float
     */
    protected $averageWholesaleNet;
    /**
     * @var null|float
     */
    protected $averageRetailNet;
    /**
     * @var null|float
     */
    protected $goodWholesaleNet;
    /**
     * @var null|float
     */
    protected $goodRetailNet;
    /**
     * @var null|float
     */
    protected $greenhouseRating;
    /**
     * @var null|float
     */
    protected $airPollutionRating;
    /**
     * @var null|float
     */
    protected $overallGreenStarRating;
    /**
     * @var null|float
     */
    protected $ancapRating;
    /**
     * @var null|string
     */
    protected $vfactsClass;
    /**
     * @var null|string
     */
    protected $vfactsSegment;
    /**
     * @var null|string
     */
    protected $currentVehicleFlag = 'N';
    /**
     * @var null|string
     */
    protected $variantCodePrevious;
    /**
     * @var null|string
     */
    protected $variantCodeNext;
    /**
     * @var null|string
     */
    protected $externalReference;
    /**
     * @var null|string
     */
    protected $dataSourceId;
    /**
     * @var null|string
     */
    protected $statusFlag = 'pending';

    public function getVariantId(): ?string
    {
        return $this->variantId;
    }

    public function setVariantId(?string $variantId): self
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function getModelId(): ?string
    {
        return $this->modelId;
    }

    public function setModelId(?string $modelId): self
    {
        $this->modelId = $modelId;

        return $this;
    }

    public function getModelYear(): ?float
    {
        return $this->modelYear;
    }

    public function setModelYear(?float $modelYear): self
    {
        $this->modelYear = $modelYear;

        return $this;
    }

    public function getVariantCode(): ?string
    {
        return $this->variantCode;
    }

    public function setVariantCode(?string $variantCode): self
    {
        $this->variantCode = $variantCode;

        return $this;
    }

    public function getModelMonth(): ?float
    {
        return $this->modelMonth;
    }

    public function setModelMonth(?float $modelMonth): self
    {
        $this->modelMonth = $modelMonth;

        return $this;
    }

    public function getBuildYear(): ?float
    {
        return $this->buildYear;
    }

    public function setBuildYear(?float $buildYear): self
    {
        $this->buildYear = $buildYear;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getServiceProfileId(): ?string
    {
        return $this->serviceProfileId;
    }

    public function setServiceProfileId(?string $serviceProfileId): self
    {
        $this->serviceProfileId = $serviceProfileId;

        return $this;
    }

    public function getVehicleTypeId(): ?string
    {
        return $this->vehicleTypeId;
    }

    public function setVehicleTypeId(?string $vehicleTypeId): self
    {
        $this->vehicleTypeId = $vehicleTypeId;

        return $this;
    }

    public function getBodyTypeId(): ?string
    {
        return $this->bodyTypeId;
    }

    public function setBodyTypeId(?string $bodyTypeId): self
    {
        $this->bodyTypeId = $bodyTypeId;

        return $this;
    }

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;

        return $this;
    }

    public function getVariantName(): ?string
    {
        return $this->variantName;
    }

    public function setVariantName(?string $variantName): self
    {
        $this->variantName = $variantName;

        return $this;
    }

    public function getVariantSubName(): ?string
    {
        return $this->variantSubName;
    }

    public function setVariantSubName(?string $variantSubName): self
    {
        $this->variantSubName = $variantSubName;

        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->transmission;
    }

    public function setTransmission(?string $transmission): self
    {
        $this->transmission = $transmission;

        return $this;
    }

    public function getGears(): ?float
    {
        return $this->gears;
    }

    public function setGears(?float $gears): self
    {
        $this->gears = $gears;

        return $this;
    }

    public function getGearLocation(): ?string
    {
        return $this->gearLocation;
    }

    public function setGearLocation(?string $gearLocation): self
    {
        $this->gearLocation = $gearLocation;

        return $this;
    }

    public function getDoors(): ?float
    {
        return $this->doors;
    }

    public function setDoors(?float $doors): self
    {
        $this->doors = $doors;

        return $this;
    }

    public function getSeats(): ?float
    {
        return $this->seats;
    }

    public function setSeats(?float $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getEngineCc(): ?float
    {
        return $this->engineCc;
    }

    public function setEngineCc(?float $engineCc): self
    {
        $this->engineCc = $engineCc;

        return $this;
    }

    public function getEngineLitres(): ?string
    {
        return $this->engineLitres;
    }

    public function setEngineLitres(?string $engineLitres): self
    {
        $this->engineLitres = $engineLitres;

        return $this;
    }

    public function getCylinders(): ?float
    {
        return $this->cylinders;
    }

    public function setCylinders(?float $cylinders): self
    {
        $this->cylinders = $cylinders;

        return $this;
    }

    public function getValvesPerCylinder(): ?float
    {
        return $this->valvesPerCylinder;
    }

    public function setValvesPerCylinder(?float $valvesPerCylinder): self
    {
        $this->valvesPerCylinder = $valvesPerCylinder;

        return $this;
    }

    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    public function setDriveType(?string $driveType): self
    {
        $this->driveType = $driveType;

        return $this;
    }

    public function getEngineCycle(): ?string
    {
        return $this->engineCycle;
    }

    public function setEngineCycle(?string $engineCycle): self
    {
        $this->engineCycle = $engineCycle;

        return $this;
    }

    public function getEngineType(): ?string
    {
        return $this->engineType;
    }

    public function setEngineType(?string $engineType): self
    {
        $this->engineType = $engineType;

        return $this;
    }

    public function getEngineConfiguration(): ?string
    {
        return $this->engineConfiguration;
    }

    public function setEngineConfiguration(?string $engineConfiguration): self
    {
        $this->engineConfiguration = $engineConfiguration;

        return $this;
    }

    public function getFuelDelivery(): ?string
    {
        return $this->fuelDelivery;
    }

    public function setFuelDelivery(?string $fuelDelivery): self
    {
        $this->fuelDelivery = $fuelDelivery;

        return $this;
    }

    public function getCam(): ?string
    {
        return $this->cam;
    }

    public function setCam(?string $cam): self
    {
        $this->cam = $cam;

        return $this;
    }

    public function getSteering(): ?string
    {
        return $this->steering;
    }

    public function setSteering(?string $steering): self
    {
        $this->steering = $steering;

        return $this;
    }

    public function getInduction(): ?string
    {
        return $this->induction;
    }

    public function setInduction(?string $induction): self
    {
        $this->induction = $induction;

        return $this;
    }

    public function getFuelTypeTranslationId(): ?string
    {
        return $this->fuelTypeTranslationId;
    }

    public function setFuelTypeTranslationId(?string $fuelTypeTranslationId): self
    {
        $this->fuelTypeTranslationId = $fuelTypeTranslationId;

        return $this;
    }

    public function getPowerKw(): ?float
    {
        return $this->powerKw;
    }

    public function setPowerKw(?float $powerKw): self
    {
        $this->powerKw = $powerKw;

        return $this;
    }

    public function getPowerRpm(): ?float
    {
        return $this->powerRpm;
    }

    public function setPowerRpm(?float $powerRpm): self
    {
        $this->powerRpm = $powerRpm;

        return $this;
    }

    public function getTorque(): ?float
    {
        return $this->torque;
    }

    public function setTorque(?float $torque): self
    {
        $this->torque = $torque;

        return $this;
    }

    public function getTorqueRpm(): ?float
    {
        return $this->torqueRpm;
    }

    public function setTorqueRpm(?float $torqueRpm): self
    {
        $this->torqueRpm = $torqueRpm;

        return $this;
    }

    public function getWheelBase(): ?float
    {
        return $this->wheelBase;
    }

    public function setWheelBase(?float $wheelBase): self
    {
        $this->wheelBase = $wheelBase;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getPayload(): ?float
    {
        return $this->payload;
    }

    public function setPayload(?float $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function getTowingCapacity(): ?float
    {
        return $this->towingCapacity;
    }

    public function setTowingCapacity(?float $towingCapacity): self
    {
        $this->towingCapacity = $towingCapacity;

        return $this;
    }

    public function getKerbWeight(): ?float
    {
        return $this->kerbWeight;
    }

    public function setKerbWeight(?float $kerbWeight): self
    {
        $this->kerbWeight = $kerbWeight;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getFuelCapacity(): ?float
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(?float $fuelCapacity): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    public function getFrontTyreSize(): ?string
    {
        return $this->frontTyreSize;
    }

    public function setFrontTyreSize(?string $frontTyreSize): self
    {
        $this->frontTyreSize = $frontTyreSize;

        return $this;
    }

    public function getRearTyreSize(): ?string
    {
        return $this->rearTyreSize;
    }

    public function setRearTyreSize(?string $rearTyreSize): self
    {
        $this->rearTyreSize = $rearTyreSize;

        return $this;
    }

    public function getEngineCode(): ?string
    {
        return $this->engineCode;
    }

    public function setEngineCode(?string $engineCode): self
    {
        $this->engineCode = $engineCode;

        return $this;
    }

    public function getManufacturerModelCode(): ?string
    {
        return $this->manufacturerModelCode;
    }

    public function setManufacturerModelCode(?string $manufacturerModelCode): self
    {
        $this->manufacturerModelCode = $manufacturerModelCode;

        return $this;
    }

    public function getAcceleration(): ?float
    {
        return $this->acceleration;
    }

    public function setAcceleration(?float $acceleration): self
    {
        $this->acceleration = $acceleration;

        return $this;
    }

    public function getFuelMetro(): ?float
    {
        return $this->fuelMetro;
    }

    public function setFuelMetro(?float $fuelMetro): self
    {
        $this->fuelMetro = $fuelMetro;

        return $this;
    }

    public function getFuelCountry(): ?float
    {
        return $this->fuelCountry;
    }

    public function setFuelCountry(?float $fuelCountry): self
    {
        $this->fuelCountry = $fuelCountry;

        return $this;
    }

    public function getFuelCombined(): ?float
    {
        return $this->fuelCombined;
    }

    public function setFuelCombined(?float $fuelCombined): self
    {
        $this->fuelCombined = $fuelCombined;

        return $this;
    }

    public function getCo2Emissions(): ?float
    {
        return $this->co2Emissions;
    }

    public function setCo2Emissions(?float $co2Emissions): self
    {
        $this->co2Emissions = $co2Emissions;

        return $this;
    }

    public function getWarrantyYears(): ?float
    {
        return $this->warrantyYears;
    }

    public function setWarrantyYears(?float $warrantyYears): self
    {
        $this->warrantyYears = $warrantyYears;

        return $this;
    }

    public function getWarrantyKms(): ?float
    {
        return $this->warrantyKms;
    }

    public function setWarrantyKms(?float $warrantyKms): self
    {
        $this->warrantyKms = $warrantyKms;

        return $this;
    }

    public function getServiceKms(): ?float
    {
        return $this->serviceKms;
    }

    public function setServiceKms(?float $serviceKms): self
    {
        $this->serviceKms = $serviceKms;

        return $this;
    }

    public function getServiceMths(): ?float
    {
        return $this->serviceMths;
    }

    public function setServiceMths(?float $serviceMths): self
    {
        $this->serviceMths = $serviceMths;

        return $this;
    }

    public function getListPriceGross(): ?float
    {
        return $this->listPriceGross;
    }

    public function setListPriceGross(?float $listPriceGross): self
    {
        $this->listPriceGross = $listPriceGross;

        return $this;
    }

    public function getListPriceNet(): ?float
    {
        return $this->listPriceNet;
    }

    public function setListPriceNet(?float $listPriceNet): self
    {
        $this->listPriceNet = $listPriceNet;

        return $this;
    }

    public function getListPriceGst(): ?float
    {
        return $this->listPriceGst;
    }

    public function setListPriceGst(?float $listPriceGst): self
    {
        $this->listPriceGst = $listPriceGst;

        return $this;
    }

    public function getAverageWholesaleNet(): ?float
    {
        return $this->averageWholesaleNet;
    }

    public function setAverageWholesaleNet(?float $averageWholesaleNet): self
    {
        $this->averageWholesaleNet = $averageWholesaleNet;

        return $this;
    }

    public function getAverageRetailNet(): ?float
    {
        return $this->averageRetailNet;
    }

    public function setAverageRetailNet(?float $averageRetailNet): self
    {
        $this->averageRetailNet = $averageRetailNet;

        return $this;
    }

    public function getGoodWholesaleNet(): ?float
    {
        return $this->goodWholesaleNet;
    }

    public function setGoodWholesaleNet(?float $goodWholesaleNet): self
    {
        $this->goodWholesaleNet = $goodWholesaleNet;

        return $this;
    }

    public function getGoodRetailNet(): ?float
    {
        return $this->goodRetailNet;
    }

    public function setGoodRetailNet(?float $goodRetailNet): self
    {
        $this->goodRetailNet = $goodRetailNet;

        return $this;
    }

    public function getGreenhouseRating(): ?float
    {
        return $this->greenhouseRating;
    }

    public function setGreenhouseRating(?float $greenhouseRating): self
    {
        $this->greenhouseRating = $greenhouseRating;

        return $this;
    }

    public function getAirPollutionRating(): ?float
    {
        return $this->airPollutionRating;
    }

    public function setAirPollutionRating(?float $airPollutionRating): self
    {
        $this->airPollutionRating = $airPollutionRating;

        return $this;
    }

    public function getOverallGreenStarRating(): ?float
    {
        return $this->overallGreenStarRating;
    }

    public function setOverallGreenStarRating(?float $overallGreenStarRating): self
    {
        $this->overallGreenStarRating = $overallGreenStarRating;

        return $this;
    }

    public function getAncapRating(): ?float
    {
        return $this->ancapRating;
    }

    public function setAncapRating(?float $ancapRating): self
    {
        $this->ancapRating = $ancapRating;

        return $this;
    }

    public function getVfactsClass(): ?string
    {
        return $this->vfactsClass;
    }

    public function setVfactsClass(?string $vfactsClass): self
    {
        $this->vfactsClass = $vfactsClass;

        return $this;
    }

    public function getVfactsSegment(): ?string
    {
        return $this->vfactsSegment;
    }

    public function setVfactsSegment(?string $vfactsSegment): self
    {
        $this->vfactsSegment = $vfactsSegment;

        return $this;
    }

    public function getCurrentVehicleFlag(): ?string
    {
        return $this->currentVehicleFlag;
    }

    public function setCurrentVehicleFlag(?string $currentVehicleFlag): self
    {
        $this->currentVehicleFlag = $currentVehicleFlag;

        return $this;
    }

    public function getVariantCodePrevious(): ?string
    {
        return $this->variantCodePrevious;
    }

    public function setVariantCodePrevious(?string $variantCodePrevious): self
    {
        $this->variantCodePrevious = $variantCodePrevious;

        return $this;
    }

    public function getVariantCodeNext(): ?string
    {
        return $this->variantCodeNext;
    }

    public function setVariantCodeNext(?string $variantCodeNext): self
    {
        $this->variantCodeNext = $variantCodeNext;

        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function setExternalReference(?string $externalReference): self
    {
        $this->externalReference = $externalReference;

        return $this;
    }

    public function getDataSourceId(): ?string
    {
        return $this->dataSourceId;
    }

    public function setDataSourceId(?string $dataSourceId): self
    {
        $this->dataSourceId = $dataSourceId;

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
