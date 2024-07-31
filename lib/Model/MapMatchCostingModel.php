<?php
/**
 * MapMatchCostingModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stadia Maps Geospatial APIs
 *
 * The Stadia Maps Geospatial APIs provide you with the data you need to build awesome applications.
 *
 * The version of the OpenAPI document: 6.6.0
 * Contact: support@stadiamaps.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MapMatchCostingModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MapMatchCostingModel
{
    /**
     * Possible values of this enum
     */
    public const AUTO = 'auto';

    public const BUS = 'bus';

    public const TAXI = 'taxi';

    public const TRUCK = 'truck';

    public const BICYCLE = 'bicycle';

    public const BIKESHARE = 'bikeshare';

    public const MOTOR_SCOOTER = 'motor_scooter';

    public const MOTORCYCLE = 'motorcycle';

    public const PEDESTRIAN = 'pedestrian';

    public const LOW_SPEED_VEHICLE = 'low_speed_vehicle';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO,
            self::BUS,
            self::TAXI,
            self::TRUCK,
            self::BICYCLE,
            self::BIKESHARE,
            self::MOTOR_SCOOTER,
            self::MOTORCYCLE,
            self::PEDESTRIAN,
            self::LOW_SPEED_VEHICLE
        ];
    }
}


