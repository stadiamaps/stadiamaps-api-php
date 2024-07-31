<?php
/**
 * EdgeUse
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
 * EdgeUse Class Doc Comment
 *
 * @category Class
 * @description The use for the edge.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EdgeUse
{
    /**
     * Possible values of this enum
     */
    public const ROAD = 'road';

    public const RAMP = 'ramp';

    public const TURN_CHANNEL = 'turn_channel';

    public const TRACK = 'track';

    public const DRIVEWAY = 'driveway';

    public const ALLEY = 'alley';

    public const PARKING_AISLE = 'parking_aisle';

    public const EMERGENCY_ACCESS = 'emergency_access';

    public const DRIVE_THROUGH = 'drive_through';

    public const CULDESAC = 'culdesac';

    public const LIVING_STREET = 'living_street';

    public const SERVICE_ROAD = 'service_road';

    public const CYCLEWAY = 'cycleway';

    public const MOUNTAIN_BIKE = 'mountain_bike';

    public const SIDEWALK = 'sidewalk';

    public const FOOTWAY = 'footway';

    public const STEPS = 'steps';

    public const PATH = 'path';

    public const PEDESTRIAN = 'pedestrian';

    public const PEDESTRIAN_CROSSING = 'pedestrian_crossing';

    public const BRIDLEWAY = 'bridleway';

    public const REST_AREA = 'rest_area';

    public const SERVICE_AREA = 'service_area';

    public const OTHER = 'other';

    public const FERRY = 'ferry';

    public const RAIL_FERRY = 'rail-ferry';

    public const RAIL = 'rail';

    public const BUS = 'bus';

    public const EGRESS_CONNECTION = 'egress_connection';

    public const PLATFORM_CONNECTION = 'platform_connection';

    public const TRANSIT_CONNECTION = 'transit_connection';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ROAD,
            self::RAMP,
            self::TURN_CHANNEL,
            self::TRACK,
            self::DRIVEWAY,
            self::ALLEY,
            self::PARKING_AISLE,
            self::EMERGENCY_ACCESS,
            self::DRIVE_THROUGH,
            self::CULDESAC,
            self::LIVING_STREET,
            self::SERVICE_ROAD,
            self::CYCLEWAY,
            self::MOUNTAIN_BIKE,
            self::SIDEWALK,
            self::FOOTWAY,
            self::STEPS,
            self::PATH,
            self::PEDESTRIAN,
            self::PEDESTRIAN_CROSSING,
            self::BRIDLEWAY,
            self::REST_AREA,
            self::SERVICE_AREA,
            self::OTHER,
            self::FERRY,
            self::RAIL_FERRY,
            self::RAIL,
            self::BUS,
            self::EGRESS_CONNECTION,
            self::PLATFORM_CONNECTION,
            self::TRANSIT_CONNECTION
        ];
    }
}


