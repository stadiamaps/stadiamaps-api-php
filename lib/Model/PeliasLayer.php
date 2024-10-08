<?php
/**
 * PeliasLayer
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
 * PeliasLayer Class Doc Comment
 *
 * @category Class
 * @description Our database is organized into several layers (in the GIS sense of the term) as follows:  - &#x60;venue&#x60;: Points of interest, businesses, and things with walls - &#x60;address&#x60;: Places with a street address - &#x60;street&#x60;: Streets, roads, highways - &#x60;county&#x60;: Places that issue passports, nations, nation-states - &#x60;macroregion&#x60;: A related group of regions (mostly in Europe) - &#x60;region&#x60;: The first administrative division within a country (usually states and provinces) - &#x60;macrocounty&#x60;: A related group of counties (mostly in Europe) - &#x60;county&#x60;: Official governmental areas; usually bigger than a locality, but almost always smaller than a region - &#x60;locality&#x60;: Towns, hamlets, cities, etc. - &#x60;localadmin&#x60;: Local administrative boundaries - &#x60;borough&#x60;: Local administrative boundaries within cities (not widely used, but present in places such as NYC and Mexico City) - &#x60;neighbourhood&#x60;: Social communities and neighborhoods (note the British spelling in the API!) - &#x60;postalcode&#x60;: Postal codes used by mail services (note: not used for reverse geocoding) - &#x60;coarse&#x60;: An alias for simultaneously using all administrative layers (everything except &#x60;venue&#x60; and &#x60;address&#x60;) - &#x60;marinearea&#x60;: Places with fishes and boats. - &#x60;ocean&#x60;: A really big marine area.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PeliasLayer
{
    /**
     * Possible values of this enum
     */
    public const VENUE = 'venue';

    public const ADDRESS = 'address';

    public const STREET = 'street';

    public const COUNTRY = 'country';

    public const MACROREGION = 'macroregion';

    public const REGION = 'region';

    public const MACROCOUNTY = 'macrocounty';

    public const COUNTY = 'county';

    public const LOCALITY = 'locality';

    public const LOCALADMIN = 'localadmin';

    public const BOROUGH = 'borough';

    public const NEIGHBOURHOOD = 'neighbourhood';

    public const POSTALCODE = 'postalcode';

    public const COARSE = 'coarse';

    public const DEPENDENCY = 'dependency';

    public const MACROHOOD = 'macrohood';

    public const MARINEAREA = 'marinearea';

    public const DISPUTED = 'disputed';

    public const EMPIRE = 'empire';

    public const CONTINENT = 'continent';

    public const OCEAN = 'ocean';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENUE,
            self::ADDRESS,
            self::STREET,
            self::COUNTRY,
            self::MACROREGION,
            self::REGION,
            self::MACROCOUNTY,
            self::COUNTY,
            self::LOCALITY,
            self::LOCALADMIN,
            self::BOROUGH,
            self::NEIGHBOURHOOD,
            self::POSTALCODE,
            self::COARSE,
            self::DEPENDENCY,
            self::MACROHOOD,
            self::MARINEAREA,
            self::DISPUTED,
            self::EMPIRE,
            self::CONTINENT,
            self::OCEAN
        ];
    }
}


