<?php
/**
 * RoadClass
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
 * The version of the OpenAPI document: 7.0.0
 * Contact: support@stadiamaps.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RoadClass Class Doc Comment
 *
 * @category Class
 * @description Class of road (ranked in descending order)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RoadClass
{
    /**
     * Possible values of this enum
     */
    public const MOTORWAY = 'motorway';

    public const TRUNK = 'trunk';

    public const PRIMARY = 'primary';

    public const SECONDARY = 'secondary';

    public const TERTIARY = 'tertiary';

    public const UNCLASSIFIED = 'unclassified';

    public const RESIDENTIAL = 'residential';

    public const SERVICE_OTHER = 'service_other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MOTORWAY,
            self::TRUNK,
            self::PRIMARY,
            self::SECONDARY,
            self::TERTIARY,
            self::UNCLASSIFIED,
            self::RESIDENTIAL,
            self::SERVICE_OTHER
        ];
    }
}


