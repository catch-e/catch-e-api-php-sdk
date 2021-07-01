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

class VariantNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
	use DenormalizerAwareTrait;
	use NormalizerAwareTrait;
	use CheckArray;

	public function supportsDenormalization($data, $type, $format = null)
	{
		return 'CatchE\\OpenApi2\\Model\\Variant' === $type;
	}

	public function supportsNormalization($data, $format = null)
	{
		return is_object($data) && 'CatchE\\OpenApi2\\Model\\Variant' === get_class($data);
	}

	public function denormalize($data, $class, $format = null, array $context = [])
	{
		if (isset($data['$ref'])) {
			return new Reference($data['$ref'], $context['document-origin']);
		}
		if (isset($data['$recursiveRef'])) {
			return new Reference($data['$recursiveRef'], $context['document-origin']);
		}
		$object = new \CatchE\OpenApi2\Model\Variant();
		if (\array_key_exists('variant_id', $data) && null !== $data['variant_id']) {
			$object->setVariantId($data['variant_id']);
		} elseif (\array_key_exists('variant_id', $data) && null === $data['variant_id']) {
			$object->setVariantId(null);
		}
		if (\array_key_exists('model_id', $data) && null !== $data['model_id']) {
			$object->setModelId($data['model_id']);
		} elseif (\array_key_exists('model_id', $data) && null === $data['model_id']) {
			$object->setModelId(null);
		}
		if (\array_key_exists('model_year', $data) && null !== $data['model_year']) {
			$object->setModelYear($data['model_year']);
		} elseif (\array_key_exists('model_year', $data) && null === $data['model_year']) {
			$object->setModelYear(null);
		}
		if (\array_key_exists('variant_code', $data) && null !== $data['variant_code']) {
			$object->setVariantCode($data['variant_code']);
		} elseif (\array_key_exists('variant_code', $data) && null === $data['variant_code']) {
			$object->setVariantCode(null);
		}
		if (\array_key_exists('model_month', $data) && null !== $data['model_month']) {
			$object->setModelMonth($data['model_month']);
		} elseif (\array_key_exists('model_month', $data) && null === $data['model_month']) {
			$object->setModelMonth(null);
		}
		if (\array_key_exists('build_year', $data) && null !== $data['build_year']) {
			$object->setBuildYear($data['build_year']);
		} elseif (\array_key_exists('build_year', $data) && null === $data['build_year']) {
			$object->setBuildYear(null);
		}
		if (\array_key_exists('description', $data) && null !== $data['description']) {
			$object->setDescription($data['description']);
		} elseif (\array_key_exists('description', $data) && null === $data['description']) {
			$object->setDescription(null);
		}
		if (\array_key_exists('short_description', $data) && null !== $data['short_description']) {
			$object->setShortDescription($data['short_description']);
		} elseif (\array_key_exists('short_description', $data) && null === $data['short_description']) {
			$object->setShortDescription(null);
		}
		if (\array_key_exists('series', $data) && null !== $data['series']) {
			$object->setSeries($data['series']);
		} elseif (\array_key_exists('series', $data) && null === $data['series']) {
			$object->setSeries(null);
		}
		if (\array_key_exists('service_profile_id', $data) && null !== $data['service_profile_id']) {
			$object->setServiceProfileId($data['service_profile_id']);
		} elseif (\array_key_exists('service_profile_id', $data) && null === $data['service_profile_id']) {
			$object->setServiceProfileId(null);
		}
		if (\array_key_exists('vehicle_type_id', $data) && null !== $data['vehicle_type_id']) {
			$object->setVehicleTypeId($data['vehicle_type_id']);
		} elseif (\array_key_exists('vehicle_type_id', $data) && null === $data['vehicle_type_id']) {
			$object->setVehicleTypeId(null);
		}
		if (\array_key_exists('body_type_id', $data) && null !== $data['body_type_id']) {
			$object->setBodyTypeId($data['body_type_id']);
		} elseif (\array_key_exists('body_type_id', $data) && null === $data['body_type_id']) {
			$object->setBodyTypeId(null);
		}
		if (\array_key_exists('configuration', $data) && null !== $data['configuration']) {
			$object->setConfiguration($data['configuration']);
		} elseif (\array_key_exists('configuration', $data) && null === $data['configuration']) {
			$object->setConfiguration(null);
		}
		if (\array_key_exists('variant_name', $data) && null !== $data['variant_name']) {
			$object->setVariantName($data['variant_name']);
		} elseif (\array_key_exists('variant_name', $data) && null === $data['variant_name']) {
			$object->setVariantName(null);
		}
		if (\array_key_exists('variant_sub_name', $data) && null !== $data['variant_sub_name']) {
			$object->setVariantSubName($data['variant_sub_name']);
		} elseif (\array_key_exists('variant_sub_name', $data) && null === $data['variant_sub_name']) {
			$object->setVariantSubName(null);
		}
		if (\array_key_exists('transmission', $data) && null !== $data['transmission']) {
			$object->setTransmission($data['transmission']);
		} elseif (\array_key_exists('transmission', $data) && null === $data['transmission']) {
			$object->setTransmission(null);
		}
		if (\array_key_exists('gears', $data) && null !== $data['gears']) {
			$object->setGears($data['gears']);
		} elseif (\array_key_exists('gears', $data) && null === $data['gears']) {
			$object->setGears(null);
		}
		if (\array_key_exists('gear_location', $data) && null !== $data['gear_location']) {
			$object->setGearLocation($data['gear_location']);
		} elseif (\array_key_exists('gear_location', $data) && null === $data['gear_location']) {
			$object->setGearLocation(null);
		}
		if (\array_key_exists('doors', $data) && null !== $data['doors']) {
			$object->setDoors($data['doors']);
		} elseif (\array_key_exists('doors', $data) && null === $data['doors']) {
			$object->setDoors(null);
		}
		if (\array_key_exists('seats', $data) && null !== $data['seats']) {
			$object->setSeats($data['seats']);
		} elseif (\array_key_exists('seats', $data) && null === $data['seats']) {
			$object->setSeats(null);
		}
		if (\array_key_exists('engine_cc', $data) && null !== $data['engine_cc']) {
			$object->setEngineCc($data['engine_cc']);
		} elseif (\array_key_exists('engine_cc', $data) && null === $data['engine_cc']) {
			$object->setEngineCc(null);
		}
		if (\array_key_exists('engine_litres', $data) && null !== $data['engine_litres']) {
			$object->setEngineLitres($data['engine_litres']);
		} elseif (\array_key_exists('engine_litres', $data) && null === $data['engine_litres']) {
			$object->setEngineLitres(null);
		}
		if (\array_key_exists('cylinders', $data) && null !== $data['cylinders']) {
			$object->setCylinders($data['cylinders']);
		} elseif (\array_key_exists('cylinders', $data) && null === $data['cylinders']) {
			$object->setCylinders(null);
		}
		if (\array_key_exists('valves_per_cylinder', $data) && null !== $data['valves_per_cylinder']) {
			$object->setValvesPerCylinder($data['valves_per_cylinder']);
		} elseif (\array_key_exists('valves_per_cylinder', $data) && null === $data['valves_per_cylinder']) {
			$object->setValvesPerCylinder(null);
		}
		if (\array_key_exists('drive_type', $data) && null !== $data['drive_type']) {
			$object->setDriveType($data['drive_type']);
		} elseif (\array_key_exists('drive_type', $data) && null === $data['drive_type']) {
			$object->setDriveType(null);
		}
		if (\array_key_exists('engine_cycle', $data) && null !== $data['engine_cycle']) {
			$object->setEngineCycle($data['engine_cycle']);
		} elseif (\array_key_exists('engine_cycle', $data) && null === $data['engine_cycle']) {
			$object->setEngineCycle(null);
		}
		if (\array_key_exists('engine_type', $data) && null !== $data['engine_type']) {
			$object->setEngineType($data['engine_type']);
		} elseif (\array_key_exists('engine_type', $data) && null === $data['engine_type']) {
			$object->setEngineType(null);
		}
		if (\array_key_exists('engine_configuration', $data) && null !== $data['engine_configuration']) {
			$object->setEngineConfiguration($data['engine_configuration']);
		} elseif (\array_key_exists('engine_configuration', $data) && null === $data['engine_configuration']) {
			$object->setEngineConfiguration(null);
		}
		if (\array_key_exists('fuel_delivery', $data) && null !== $data['fuel_delivery']) {
			$object->setFuelDelivery($data['fuel_delivery']);
		} elseif (\array_key_exists('fuel_delivery', $data) && null === $data['fuel_delivery']) {
			$object->setFuelDelivery(null);
		}
		if (\array_key_exists('cam', $data) && null !== $data['cam']) {
			$object->setCam($data['cam']);
		} elseif (\array_key_exists('cam', $data) && null === $data['cam']) {
			$object->setCam(null);
		}
		if (\array_key_exists('steering', $data) && null !== $data['steering']) {
			$object->setSteering($data['steering']);
		} elseif (\array_key_exists('steering', $data) && null === $data['steering']) {
			$object->setSteering(null);
		}
		if (\array_key_exists('induction', $data) && null !== $data['induction']) {
			$object->setInduction($data['induction']);
		} elseif (\array_key_exists('induction', $data) && null === $data['induction']) {
			$object->setInduction(null);
		}
		if (\array_key_exists('fuel_type_translation_id', $data) && null !== $data['fuel_type_translation_id']) {
			$object->setFuelTypeTranslationId($data['fuel_type_translation_id']);
		} elseif (\array_key_exists('fuel_type_translation_id', $data) && null === $data['fuel_type_translation_id']) {
			$object->setFuelTypeTranslationId(null);
		}
		if (\array_key_exists('power_kw', $data) && null !== $data['power_kw']) {
			$object->setPowerKw($data['power_kw']);
		} elseif (\array_key_exists('power_kw', $data) && null === $data['power_kw']) {
			$object->setPowerKw(null);
		}
		if (\array_key_exists('power_rpm', $data) && null !== $data['power_rpm']) {
			$object->setPowerRpm($data['power_rpm']);
		} elseif (\array_key_exists('power_rpm', $data) && null === $data['power_rpm']) {
			$object->setPowerRpm(null);
		}
		if (\array_key_exists('torque', $data) && null !== $data['torque']) {
			$object->setTorque($data['torque']);
		} elseif (\array_key_exists('torque', $data) && null === $data['torque']) {
			$object->setTorque(null);
		}
		if (\array_key_exists('torque_rpm', $data) && null !== $data['torque_rpm']) {
			$object->setTorqueRpm($data['torque_rpm']);
		} elseif (\array_key_exists('torque_rpm', $data) && null === $data['torque_rpm']) {
			$object->setTorqueRpm(null);
		}
		if (\array_key_exists('wheel_base', $data) && null !== $data['wheel_base']) {
			$object->setWheelBase($data['wheel_base']);
		} elseif (\array_key_exists('wheel_base', $data) && null === $data['wheel_base']) {
			$object->setWheelBase(null);
		}
		if (\array_key_exists('weight', $data) && null !== $data['weight']) {
			$object->setWeight($data['weight']);
		} elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
			$object->setWeight(null);
		}
		if (\array_key_exists('payload', $data) && null !== $data['payload']) {
			$object->setPayload($data['payload']);
		} elseif (\array_key_exists('payload', $data) && null === $data['payload']) {
			$object->setPayload(null);
		}
		if (\array_key_exists('towing_capacity', $data) && null !== $data['towing_capacity']) {
			$object->setTowingCapacity($data['towing_capacity']);
		} elseif (\array_key_exists('towing_capacity', $data) && null === $data['towing_capacity']) {
			$object->setTowingCapacity(null);
		}
		if (\array_key_exists('kerb_weight', $data) && null !== $data['kerb_weight']) {
			$object->setKerbWeight($data['kerb_weight']);
		} elseif (\array_key_exists('kerb_weight', $data) && null === $data['kerb_weight']) {
			$object->setKerbWeight(null);
		}
		if (\array_key_exists('country', $data) && null !== $data['country']) {
			$object->setCountry($data['country']);
		} elseif (\array_key_exists('country', $data) && null === $data['country']) {
			$object->setCountry(null);
		}
		if (\array_key_exists('fuel_capacity', $data) && null !== $data['fuel_capacity']) {
			$object->setFuelCapacity($data['fuel_capacity']);
		} elseif (\array_key_exists('fuel_capacity', $data) && null === $data['fuel_capacity']) {
			$object->setFuelCapacity(null);
		}
		if (\array_key_exists('front_tyre_size', $data) && null !== $data['front_tyre_size']) {
			$object->setFrontTyreSize($data['front_tyre_size']);
		} elseif (\array_key_exists('front_tyre_size', $data) && null === $data['front_tyre_size']) {
			$object->setFrontTyreSize(null);
		}
		if (\array_key_exists('rear_tyre_size', $data) && null !== $data['rear_tyre_size']) {
			$object->setRearTyreSize($data['rear_tyre_size']);
		} elseif (\array_key_exists('rear_tyre_size', $data) && null === $data['rear_tyre_size']) {
			$object->setRearTyreSize(null);
		}
		if (\array_key_exists('engine_code', $data) && null !== $data['engine_code']) {
			$object->setEngineCode($data['engine_code']);
		} elseif (\array_key_exists('engine_code', $data) && null === $data['engine_code']) {
			$object->setEngineCode(null);
		}
		if (\array_key_exists('manufacturer_model_code', $data) && null !== $data['manufacturer_model_code']) {
			$object->setManufacturerModelCode($data['manufacturer_model_code']);
		} elseif (\array_key_exists('manufacturer_model_code', $data) && null === $data['manufacturer_model_code']) {
			$object->setManufacturerModelCode(null);
		}
		if (\array_key_exists('acceleration', $data) && null !== $data['acceleration']) {
			$object->setAcceleration($data['acceleration']);
		} elseif (\array_key_exists('acceleration', $data) && null === $data['acceleration']) {
			$object->setAcceleration(null);
		}
		if (\array_key_exists('fuel_metro', $data) && null !== $data['fuel_metro']) {
			$object->setFuelMetro($data['fuel_metro']);
		} elseif (\array_key_exists('fuel_metro', $data) && null === $data['fuel_metro']) {
			$object->setFuelMetro(null);
		}
		if (\array_key_exists('fuel_country', $data) && null !== $data['fuel_country']) {
			$object->setFuelCountry($data['fuel_country']);
		} elseif (\array_key_exists('fuel_country', $data) && null === $data['fuel_country']) {
			$object->setFuelCountry(null);
		}
		if (\array_key_exists('fuel_combined', $data) && null !== $data['fuel_combined']) {
			$object->setFuelCombined($data['fuel_combined']);
		} elseif (\array_key_exists('fuel_combined', $data) && null === $data['fuel_combined']) {
			$object->setFuelCombined(null);
		}
		if (\array_key_exists('co2_emissions', $data) && null !== $data['co2_emissions']) {
			$object->setCo2Emissions($data['co2_emissions']);
		} elseif (\array_key_exists('co2_emissions', $data) && null === $data['co2_emissions']) {
			$object->setCo2Emissions(null);
		}
		if (\array_key_exists('warranty_years', $data) && null !== $data['warranty_years']) {
			$object->setWarrantyYears($data['warranty_years']);
		} elseif (\array_key_exists('warranty_years', $data) && null === $data['warranty_years']) {
			$object->setWarrantyYears(null);
		}
		if (\array_key_exists('warranty_kms', $data) && null !== $data['warranty_kms']) {
			$object->setWarrantyKms($data['warranty_kms']);
		} elseif (\array_key_exists('warranty_kms', $data) && null === $data['warranty_kms']) {
			$object->setWarrantyKms(null);
		}
		if (\array_key_exists('service_kms', $data) && null !== $data['service_kms']) {
			$object->setServiceKms($data['service_kms']);
		} elseif (\array_key_exists('service_kms', $data) && null === $data['service_kms']) {
			$object->setServiceKms(null);
		}
		if (\array_key_exists('service_mths', $data) && null !== $data['service_mths']) {
			$object->setServiceMths($data['service_mths']);
		} elseif (\array_key_exists('service_mths', $data) && null === $data['service_mths']) {
			$object->setServiceMths(null);
		}
		if (\array_key_exists('list_price_gross', $data) && null !== $data['list_price_gross']) {
			$object->setListPriceGross($data['list_price_gross']);
		} elseif (\array_key_exists('list_price_gross', $data) && null === $data['list_price_gross']) {
			$object->setListPriceGross(null);
		}
		if (\array_key_exists('list_price_net', $data) && null !== $data['list_price_net']) {
			$object->setListPriceNet($data['list_price_net']);
		} elseif (\array_key_exists('list_price_net', $data) && null === $data['list_price_net']) {
			$object->setListPriceNet(null);
		}
		if (\array_key_exists('list_price_gst', $data) && null !== $data['list_price_gst']) {
			$object->setListPriceGst($data['list_price_gst']);
		} elseif (\array_key_exists('list_price_gst', $data) && null === $data['list_price_gst']) {
			$object->setListPriceGst(null);
		}
		if (\array_key_exists('average_wholesale_net', $data) && null !== $data['average_wholesale_net']) {
			$object->setAverageWholesaleNet($data['average_wholesale_net']);
		} elseif (\array_key_exists('average_wholesale_net', $data) && null === $data['average_wholesale_net']) {
			$object->setAverageWholesaleNet(null);
		}
		if (\array_key_exists('average_retail_net', $data) && null !== $data['average_retail_net']) {
			$object->setAverageRetailNet($data['average_retail_net']);
		} elseif (\array_key_exists('average_retail_net', $data) && null === $data['average_retail_net']) {
			$object->setAverageRetailNet(null);
		}
		if (\array_key_exists('good_wholesale_net', $data) && null !== $data['good_wholesale_net']) {
			$object->setGoodWholesaleNet($data['good_wholesale_net']);
		} elseif (\array_key_exists('good_wholesale_net', $data) && null === $data['good_wholesale_net']) {
			$object->setGoodWholesaleNet(null);
		}
		if (\array_key_exists('good_retail_net', $data) && null !== $data['good_retail_net']) {
			$object->setGoodRetailNet($data['good_retail_net']);
		} elseif (\array_key_exists('good_retail_net', $data) && null === $data['good_retail_net']) {
			$object->setGoodRetailNet(null);
		}
		if (\array_key_exists('greenhouse_rating', $data) && null !== $data['greenhouse_rating']) {
			$object->setGreenhouseRating($data['greenhouse_rating']);
		} elseif (\array_key_exists('greenhouse_rating', $data) && null === $data['greenhouse_rating']) {
			$object->setGreenhouseRating(null);
		}
		if (\array_key_exists('air_pollution_rating', $data) && null !== $data['air_pollution_rating']) {
			$object->setAirPollutionRating($data['air_pollution_rating']);
		} elseif (\array_key_exists('air_pollution_rating', $data) && null === $data['air_pollution_rating']) {
			$object->setAirPollutionRating(null);
		}
		if (\array_key_exists('overall_green_star_rating', $data) && null !== $data['overall_green_star_rating']) {
			$object->setOverallGreenStarRating($data['overall_green_star_rating']);
		} elseif (\array_key_exists('overall_green_star_rating', $data) && null === $data['overall_green_star_rating']) {
			$object->setOverallGreenStarRating(null);
		}
		if (\array_key_exists('ancap_rating', $data) && null !== $data['ancap_rating']) {
			$object->setAncapRating($data['ancap_rating']);
		} elseif (\array_key_exists('ancap_rating', $data) && null === $data['ancap_rating']) {
			$object->setAncapRating(null);
		}
		if (\array_key_exists('vfacts_class', $data) && null !== $data['vfacts_class']) {
			$object->setVfactsClass($data['vfacts_class']);
		} elseif (\array_key_exists('vfacts_class', $data) && null === $data['vfacts_class']) {
			$object->setVfactsClass(null);
		}
		if (\array_key_exists('vfacts_segment', $data) && null !== $data['vfacts_segment']) {
			$object->setVfactsSegment($data['vfacts_segment']);
		} elseif (\array_key_exists('vfacts_segment', $data) && null === $data['vfacts_segment']) {
			$object->setVfactsSegment(null);
		}
		if (\array_key_exists('current_vehicle_flag', $data) && null !== $data['current_vehicle_flag']) {
			$object->setCurrentVehicleFlag($data['current_vehicle_flag']);
		} elseif (\array_key_exists('current_vehicle_flag', $data) && null === $data['current_vehicle_flag']) {
			$object->setCurrentVehicleFlag(null);
		}
		if (\array_key_exists('variant_code_previous', $data) && null !== $data['variant_code_previous']) {
			$object->setVariantCodePrevious($data['variant_code_previous']);
		} elseif (\array_key_exists('variant_code_previous', $data) && null === $data['variant_code_previous']) {
			$object->setVariantCodePrevious(null);
		}
		if (\array_key_exists('variant_code_next', $data) && null !== $data['variant_code_next']) {
			$object->setVariantCodeNext($data['variant_code_next']);
		} elseif (\array_key_exists('variant_code_next', $data) && null === $data['variant_code_next']) {
			$object->setVariantCodeNext(null);
		}
		if (\array_key_exists('external_reference', $data) && null !== $data['external_reference']) {
			$object->setExternalReference($data['external_reference']);
		} elseif (\array_key_exists('external_reference', $data) && null === $data['external_reference']) {
			$object->setExternalReference(null);
		}
		if (\array_key_exists('data_source_id', $data) && null !== $data['data_source_id']) {
			$object->setDataSourceId($data['data_source_id']);
		} elseif (\array_key_exists('data_source_id', $data) && null === $data['data_source_id']) {
			$object->setDataSourceId(null);
		}
		if (\array_key_exists('status_flag', $data) && null !== $data['status_flag']) {
			$object->setStatusFlag($data['status_flag']);
		} elseif (\array_key_exists('status_flag', $data) && null === $data['status_flag']) {
			$object->setStatusFlag(null);
		}

		return $object;
	}

	public function normalize($object, $format = null, array $context = [])
	{
		$data = [];
		if (null !== $object->getVariantId()) {
			$data['variant_id'] = $object->getVariantId();
		}
		if (null !== $object->getModelId()) {
			$data['model_id'] = $object->getModelId();
		}
		if (null !== $object->getModelYear()) {
			$data['model_year'] = $object->getModelYear();
		}
		if (null !== $object->getVariantCode()) {
			$data['variant_code'] = $object->getVariantCode();
		}
		if (null !== $object->getModelMonth()) {
			$data['model_month'] = $object->getModelMonth();
		}
		if (null !== $object->getBuildYear()) {
			$data['build_year'] = $object->getBuildYear();
		}
		if (null !== $object->getDescription()) {
			$data['description'] = $object->getDescription();
		}
		if (null !== $object->getShortDescription()) {
			$data['short_description'] = $object->getShortDescription();
		}
		if (null !== $object->getSeries()) {
			$data['series'] = $object->getSeries();
		}
		if (null !== $object->getServiceProfileId()) {
			$data['service_profile_id'] = $object->getServiceProfileId();
		}
		if (null !== $object->getVehicleTypeId()) {
			$data['vehicle_type_id'] = $object->getVehicleTypeId();
		}
		if (null !== $object->getBodyTypeId()) {
			$data['body_type_id'] = $object->getBodyTypeId();
		}
		if (null !== $object->getConfiguration()) {
			$data['configuration'] = $object->getConfiguration();
		}
		if (null !== $object->getVariantName()) {
			$data['variant_name'] = $object->getVariantName();
		}
		if (null !== $object->getVariantSubName()) {
			$data['variant_sub_name'] = $object->getVariantSubName();
		}
		if (null !== $object->getTransmission()) {
			$data['transmission'] = $object->getTransmission();
		}
		if (null !== $object->getGears()) {
			$data['gears'] = $object->getGears();
		}
		if (null !== $object->getGearLocation()) {
			$data['gear_location'] = $object->getGearLocation();
		}
		if (null !== $object->getDoors()) {
			$data['doors'] = $object->getDoors();
		}
		if (null !== $object->getSeats()) {
			$data['seats'] = $object->getSeats();
		}
		if (null !== $object->getEngineCc()) {
			$data['engine_cc'] = $object->getEngineCc();
		}
		if (null !== $object->getEngineLitres()) {
			$data['engine_litres'] = $object->getEngineLitres();
		}
		if (null !== $object->getCylinders()) {
			$data['cylinders'] = $object->getCylinders();
		}
		if (null !== $object->getValvesPerCylinder()) {
			$data['valves_per_cylinder'] = $object->getValvesPerCylinder();
		}
		if (null !== $object->getDriveType()) {
			$data['drive_type'] = $object->getDriveType();
		}
		if (null !== $object->getEngineCycle()) {
			$data['engine_cycle'] = $object->getEngineCycle();
		}
		if (null !== $object->getEngineType()) {
			$data['engine_type'] = $object->getEngineType();
		}
		if (null !== $object->getEngineConfiguration()) {
			$data['engine_configuration'] = $object->getEngineConfiguration();
		}
		if (null !== $object->getFuelDelivery()) {
			$data['fuel_delivery'] = $object->getFuelDelivery();
		}
		if (null !== $object->getCam()) {
			$data['cam'] = $object->getCam();
		}
		if (null !== $object->getSteering()) {
			$data['steering'] = $object->getSteering();
		}
		if (null !== $object->getInduction()) {
			$data['induction'] = $object->getInduction();
		}
		if (null !== $object->getFuelTypeTranslationId()) {
			$data['fuel_type_translation_id'] = $object->getFuelTypeTranslationId();
		}
		if (null !== $object->getPowerKw()) {
			$data['power_kw'] = $object->getPowerKw();
		}
		if (null !== $object->getPowerRpm()) {
			$data['power_rpm'] = $object->getPowerRpm();
		}
		if (null !== $object->getTorque()) {
			$data['torque'] = $object->getTorque();
		}
		if (null !== $object->getTorqueRpm()) {
			$data['torque_rpm'] = $object->getTorqueRpm();
		}
		if (null !== $object->getWheelBase()) {
			$data['wheel_base'] = $object->getWheelBase();
		}
		if (null !== $object->getWeight()) {
			$data['weight'] = $object->getWeight();
		}
		if (null !== $object->getPayload()) {
			$data['payload'] = $object->getPayload();
		}
		if (null !== $object->getTowingCapacity()) {
			$data['towing_capacity'] = $object->getTowingCapacity();
		}
		if (null !== $object->getKerbWeight()) {
			$data['kerb_weight'] = $object->getKerbWeight();
		}
		if (null !== $object->getCountry()) {
			$data['country'] = $object->getCountry();
		}
		if (null !== $object->getFuelCapacity()) {
			$data['fuel_capacity'] = $object->getFuelCapacity();
		}
		if (null !== $object->getFrontTyreSize()) {
			$data['front_tyre_size'] = $object->getFrontTyreSize();
		}
		if (null !== $object->getRearTyreSize()) {
			$data['rear_tyre_size'] = $object->getRearTyreSize();
		}
		if (null !== $object->getEngineCode()) {
			$data['engine_code'] = $object->getEngineCode();
		}
		if (null !== $object->getManufacturerModelCode()) {
			$data['manufacturer_model_code'] = $object->getManufacturerModelCode();
		}
		if (null !== $object->getAcceleration()) {
			$data['acceleration'] = $object->getAcceleration();
		}
		if (null !== $object->getFuelMetro()) {
			$data['fuel_metro'] = $object->getFuelMetro();
		}
		if (null !== $object->getFuelCountry()) {
			$data['fuel_country'] = $object->getFuelCountry();
		}
		if (null !== $object->getFuelCombined()) {
			$data['fuel_combined'] = $object->getFuelCombined();
		}
		if (null !== $object->getCo2Emissions()) {
			$data['co2_emissions'] = $object->getCo2Emissions();
		}
		if (null !== $object->getWarrantyYears()) {
			$data['warranty_years'] = $object->getWarrantyYears();
		}
		if (null !== $object->getWarrantyKms()) {
			$data['warranty_kms'] = $object->getWarrantyKms();
		}
		if (null !== $object->getServiceKms()) {
			$data['service_kms'] = $object->getServiceKms();
		}
		if (null !== $object->getServiceMths()) {
			$data['service_mths'] = $object->getServiceMths();
		}
		if (null !== $object->getListPriceGross()) {
			$data['list_price_gross'] = $object->getListPriceGross();
		}
		if (null !== $object->getListPriceNet()) {
			$data['list_price_net'] = $object->getListPriceNet();
		}
		if (null !== $object->getListPriceGst()) {
			$data['list_price_gst'] = $object->getListPriceGst();
		}
		if (null !== $object->getAverageWholesaleNet()) {
			$data['average_wholesale_net'] = $object->getAverageWholesaleNet();
		}
		if (null !== $object->getAverageRetailNet()) {
			$data['average_retail_net'] = $object->getAverageRetailNet();
		}
		if (null !== $object->getGoodWholesaleNet()) {
			$data['good_wholesale_net'] = $object->getGoodWholesaleNet();
		}
		if (null !== $object->getGoodRetailNet()) {
			$data['good_retail_net'] = $object->getGoodRetailNet();
		}
		if (null !== $object->getGreenhouseRating()) {
			$data['greenhouse_rating'] = $object->getGreenhouseRating();
		}
		if (null !== $object->getAirPollutionRating()) {
			$data['air_pollution_rating'] = $object->getAirPollutionRating();
		}
		if (null !== $object->getOverallGreenStarRating()) {
			$data['overall_green_star_rating'] = $object->getOverallGreenStarRating();
		}
		if (null !== $object->getAncapRating()) {
			$data['ancap_rating'] = $object->getAncapRating();
		}
		if (null !== $object->getVfactsClass()) {
			$data['vfacts_class'] = $object->getVfactsClass();
		}
		if (null !== $object->getVfactsSegment()) {
			$data['vfacts_segment'] = $object->getVfactsSegment();
		}
		if (null !== $object->getCurrentVehicleFlag()) {
			$data['current_vehicle_flag'] = $object->getCurrentVehicleFlag();
		}
		if (null !== $object->getVariantCodePrevious()) {
			$data['variant_code_previous'] = $object->getVariantCodePrevious();
		}
		if (null !== $object->getVariantCodeNext()) {
			$data['variant_code_next'] = $object->getVariantCodeNext();
		}
		if (null !== $object->getExternalReference()) {
			$data['external_reference'] = $object->getExternalReference();
		}
		if (null !== $object->getDataSourceId()) {
			$data['data_source_id'] = $object->getDataSourceId();
		}
		if (null !== $object->getStatusFlag()) {
			$data['status_flag'] = $object->getStatusFlag();
		}

		return $data;
	}
}
