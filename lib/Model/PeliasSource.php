<?php
/**
 * PeliasSource
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
 * PeliasSource Class Doc Comment
 *
 * @category Class
 * @description Our database contains info from multiple sources. These identifiers can be used to either limit search results or to determine the relevance of a result.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PeliasSource
{
    /**
     * Possible values of this enum
     */
    public const OPENSTREETMAP = 'openstreetmap';

    public const OPENADDRESSES = 'openaddresses';

    public const WHOSONFIRST = 'whosonfirst';

    public const GEONAMES = 'geonames';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPENSTREETMAP,
            self::OPENADDRESSES,
            self::WHOSONFIRST,
            self::GEONAMES
        ];
    }
}


