<?php
/**
 * NodeType
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
 * NodeType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NodeType
{
    /**
     * Possible values of this enum
     */
    public const STREET_INTERSECTION = 'street_intersection';

    public const GATE = 'gate';

    public const BOLLARD = 'bollard';

    public const TOLL_BOOTH = 'toll_booth';

    public const MULTI_USE_TRANSIT_STOP = 'multi_use_transit_stop';

    public const BIKE_SHARE = 'bike_share';

    public const PARKING = 'parking';

    public const MOTOR_WAY_JUNCTION = 'motor_way_junction';

    public const BORDER_CONTROL = 'border_control';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STREET_INTERSECTION,
            self::GATE,
            self::BOLLARD,
            self::TOLL_BOOTH,
            self::MULTI_USE_TRANSIT_STOP,
            self::BIKE_SHARE,
            self::PARKING,
            self::MOTOR_WAY_JUNCTION,
            self::BORDER_CONTROL
        ];
    }
}


