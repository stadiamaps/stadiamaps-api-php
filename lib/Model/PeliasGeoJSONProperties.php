<?php
/**
 * PeliasGeoJSONProperties
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PeliasGeoJSONProperties Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PeliasGeoJSONProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'peliasGeoJSONProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gid' => 'string',
        'source_id' => 'string',
        'label' => 'string',
        'layer' => '\OpenAPI\Client\Model\PeliasLayer',
        'name' => 'string',
        'accuracy' => 'string',
        'addendum' => '\OpenAPI\Client\Model\PeliasGeoJSONPropertiesAddendum',
        'continent' => 'string',
        'continent_gid' => 'string',
        'country' => 'string',
        'country_gid' => 'string',
        'neighbourhood' => 'string',
        'neighbourhood_gid' => 'string',
        'borough' => 'string',
        'borough_gid' => 'string',
        'postalcode' => 'string',
        'street' => 'string',
        'housenumber' => 'string',
        'locality' => 'string',
        'locality_gid' => 'string',
        'county' => 'string',
        'region' => 'string',
        'region_a' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gid' => null,
        'source_id' => null,
        'label' => null,
        'layer' => null,
        'name' => null,
        'accuracy' => null,
        'addendum' => null,
        'continent' => null,
        'continent_gid' => null,
        'country' => null,
        'country_gid' => null,
        'neighbourhood' => null,
        'neighbourhood_gid' => null,
        'borough' => null,
        'borough_gid' => null,
        'postalcode' => null,
        'street' => null,
        'housenumber' => null,
        'locality' => null,
        'locality_gid' => null,
        'county' => null,
        'region' => null,
        'region_a' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gid' => false,
        'source_id' => false,
        'label' => false,
        'layer' => false,
        'name' => false,
        'accuracy' => false,
        'addendum' => false,
        'continent' => false,
        'continent_gid' => false,
        'country' => false,
        'country_gid' => false,
        'neighbourhood' => false,
        'neighbourhood_gid' => false,
        'borough' => false,
        'borough_gid' => false,
        'postalcode' => false,
        'street' => false,
        'housenumber' => false,
        'locality' => false,
        'locality_gid' => false,
        'county' => false,
        'region' => false,
        'region_a' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gid' => 'gid',
        'source_id' => 'source_id',
        'label' => 'label',
        'layer' => 'layer',
        'name' => 'name',
        'accuracy' => 'accuracy',
        'addendum' => 'addendum',
        'continent' => 'continent',
        'continent_gid' => 'continent_gid',
        'country' => 'country',
        'country_gid' => 'country_gid',
        'neighbourhood' => 'neighbourhood',
        'neighbourhood_gid' => 'neighbourhood_gid',
        'borough' => 'borough',
        'borough_gid' => 'borough_gid',
        'postalcode' => 'postalcode',
        'street' => 'street',
        'housenumber' => 'housenumber',
        'locality' => 'locality',
        'locality_gid' => 'locality_gid',
        'county' => 'county',
        'region' => 'region',
        'region_a' => 'region_a'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gid' => 'setGid',
        'source_id' => 'setSourceId',
        'label' => 'setLabel',
        'layer' => 'setLayer',
        'name' => 'setName',
        'accuracy' => 'setAccuracy',
        'addendum' => 'setAddendum',
        'continent' => 'setContinent',
        'continent_gid' => 'setContinentGid',
        'country' => 'setCountry',
        'country_gid' => 'setCountryGid',
        'neighbourhood' => 'setNeighbourhood',
        'neighbourhood_gid' => 'setNeighbourhoodGid',
        'borough' => 'setBorough',
        'borough_gid' => 'setBoroughGid',
        'postalcode' => 'setPostalcode',
        'street' => 'setStreet',
        'housenumber' => 'setHousenumber',
        'locality' => 'setLocality',
        'locality_gid' => 'setLocalityGid',
        'county' => 'setCounty',
        'region' => 'setRegion',
        'region_a' => 'setRegionA'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gid' => 'getGid',
        'source_id' => 'getSourceId',
        'label' => 'getLabel',
        'layer' => 'getLayer',
        'name' => 'getName',
        'accuracy' => 'getAccuracy',
        'addendum' => 'getAddendum',
        'continent' => 'getContinent',
        'continent_gid' => 'getContinentGid',
        'country' => 'getCountry',
        'country_gid' => 'getCountryGid',
        'neighbourhood' => 'getNeighbourhood',
        'neighbourhood_gid' => 'getNeighbourhoodGid',
        'borough' => 'getBorough',
        'borough_gid' => 'getBoroughGid',
        'postalcode' => 'getPostalcode',
        'street' => 'getStreet',
        'housenumber' => 'getHousenumber',
        'locality' => 'getLocality',
        'locality_gid' => 'getLocalityGid',
        'county' => 'getCounty',
        'region' => 'getRegion',
        'region_a' => 'getRegionA'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const ACCURACY_POINT = 'point';
    public const ACCURACY_CENTROID = 'centroid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccuracyAllowableValues()
    {
        return [
            self::ACCURACY_POINT,
            self::ACCURACY_CENTROID,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gid', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('layer', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('accuracy', $data ?? [], null);
        $this->setIfExists('addendum', $data ?? [], null);
        $this->setIfExists('continent', $data ?? [], null);
        $this->setIfExists('continent_gid', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('country_gid', $data ?? [], null);
        $this->setIfExists('neighbourhood', $data ?? [], null);
        $this->setIfExists('neighbourhood_gid', $data ?? [], null);
        $this->setIfExists('borough', $data ?? [], null);
        $this->setIfExists('borough_gid', $data ?? [], null);
        $this->setIfExists('postalcode', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('housenumber', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('locality_gid', $data ?? [], null);
        $this->setIfExists('county', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('region_a', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccuracyAllowableValues();
        if (!is_null($this->container['accuracy']) && !in_array($this->container['accuracy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'accuracy', must be one of '%s'",
                $this->container['accuracy'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets gid
     *
     * @return string|null
     */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
     * Sets gid
     *
     * @param string|null $gid A scoped GID for this result. This can be passed to the place endpoint. Note that these are not always stable. For Geonames and Who's on First, these are usually stable, but for other sources like OSM, no stability is guaranteed.
     *
     * @return self
     */
    public function setGid($gid)
    {
        if (is_null($gid)) {
            throw new \InvalidArgumentException('non-nullable gid cannot be null');
        }
        $this->container['gid'] = $gid;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id An ID referencing the original data source (specified via source) for the result. These IDs are specific to the source that they originated from. For example, in the case of OSM, these typically look like way/123 or point/123.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label A full, human-readable label. However, you may not necessarily want to use this; be sure to read the docs for name, locality, and region before making a decision. This field is mostly localized. The order of components is generally locally correct (ex: for an address in South Korea, the house number appears after the street name). However, components will use a request language equivalent if one exists (ex: Seoul instead of 서울 if lang=en).
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets layer
     *
     * @return \OpenAPI\Client\Model\PeliasLayer|null
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Sets layer
     *
     * @param \OpenAPI\Client\Model\PeliasLayer|null $layer layer
     *
     * @return self
     */
    public function setLayer($layer)
    {
        if (is_null($layer)) {
            throw new \InvalidArgumentException('non-nullable layer cannot be null');
        }
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the place, the street address including house number, or label of similar relevance. If your app is localized to a specific region, you may get better display results by combining name, locality OR region (or neither?), and postal code together in the local format. Experiment with what works best for your use case.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets accuracy
     *
     * @return string|null
     */
    public function getAccuracy()
    {
        return $this->container['accuracy'];
    }

    /**
     * Sets accuracy
     *
     * @param string|null $accuracy The accuracy of the geographic coordinates in the result. This value is a property of the result itself and won't change based on the query. A point result means that the record can reasonably be represented by a single geographic point. Addresses, venues, or interpolated addresses usually have point accuracy. Larger areas, such as a city or country, cannot be represented by a single point, so a centroid is given instead.
     *
     * @return self
     */
    public function setAccuracy($accuracy)
    {
        if (is_null($accuracy)) {
            throw new \InvalidArgumentException('non-nullable accuracy cannot be null');
        }
        $allowedValues = $this->getAccuracyAllowableValues();
        if (!in_array($accuracy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'accuracy', must be one of '%s'",
                    $accuracy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accuracy'] = $accuracy;

        return $this;
    }

    /**
     * Gets addendum
     *
     * @return \OpenAPI\Client\Model\PeliasGeoJSONPropertiesAddendum|null
     */
    public function getAddendum()
    {
        return $this->container['addendum'];
    }

    /**
     * Sets addendum
     *
     * @param \OpenAPI\Client\Model\PeliasGeoJSONPropertiesAddendum|null $addendum addendum
     *
     * @return self
     */
    public function setAddendum($addendum)
    {
        if (is_null($addendum)) {
            throw new \InvalidArgumentException('non-nullable addendum cannot be null');
        }
        $this->container['addendum'] = $addendum;

        return $this;
    }

    /**
     * Gets continent
     *
     * @return string|null
     */
    public function getContinent()
    {
        return $this->container['continent'];
    }

    /**
     * Sets continent
     *
     * @param string|null $continent continent
     *
     * @return self
     */
    public function setContinent($continent)
    {
        if (is_null($continent)) {
            throw new \InvalidArgumentException('non-nullable continent cannot be null');
        }
        $this->container['continent'] = $continent;

        return $this;
    }

    /**
     * Gets continent_gid
     *
     * @return string|null
     */
    public function getContinentGid()
    {
        return $this->container['continent_gid'];
    }

    /**
     * Sets continent_gid
     *
     * @param string|null $continent_gid continent_gid
     *
     * @return self
     */
    public function setContinentGid($continent_gid)
    {
        if (is_null($continent_gid)) {
            throw new \InvalidArgumentException('non-nullable continent_gid cannot be null');
        }
        $this->container['continent_gid'] = $continent_gid;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_gid
     *
     * @return string|null
     */
    public function getCountryGid()
    {
        return $this->container['country_gid'];
    }

    /**
     * Sets country_gid
     *
     * @param string|null $country_gid country_gid
     *
     * @return self
     */
    public function setCountryGid($country_gid)
    {
        if (is_null($country_gid)) {
            throw new \InvalidArgumentException('non-nullable country_gid cannot be null');
        }
        $this->container['country_gid'] = $country_gid;

        return $this;
    }

    /**
     * Gets neighbourhood
     *
     * @return string|null
     */
    public function getNeighbourhood()
    {
        return $this->container['neighbourhood'];
    }

    /**
     * Sets neighbourhood
     *
     * @param string|null $neighbourhood neighbourhood
     *
     * @return self
     */
    public function setNeighbourhood($neighbourhood)
    {
        if (is_null($neighbourhood)) {
            throw new \InvalidArgumentException('non-nullable neighbourhood cannot be null');
        }
        $this->container['neighbourhood'] = $neighbourhood;

        return $this;
    }

    /**
     * Gets neighbourhood_gid
     *
     * @return string|null
     */
    public function getNeighbourhoodGid()
    {
        return $this->container['neighbourhood_gid'];
    }

    /**
     * Sets neighbourhood_gid
     *
     * @param string|null $neighbourhood_gid neighbourhood_gid
     *
     * @return self
     */
    public function setNeighbourhoodGid($neighbourhood_gid)
    {
        if (is_null($neighbourhood_gid)) {
            throw new \InvalidArgumentException('non-nullable neighbourhood_gid cannot be null');
        }
        $this->container['neighbourhood_gid'] = $neighbourhood_gid;

        return $this;
    }

    /**
     * Gets borough
     *
     * @return string|null
     */
    public function getBorough()
    {
        return $this->container['borough'];
    }

    /**
     * Sets borough
     *
     * @param string|null $borough borough
     *
     * @return self
     */
    public function setBorough($borough)
    {
        if (is_null($borough)) {
            throw new \InvalidArgumentException('non-nullable borough cannot be null');
        }
        $this->container['borough'] = $borough;

        return $this;
    }

    /**
     * Gets borough_gid
     *
     * @return string|null
     */
    public function getBoroughGid()
    {
        return $this->container['borough_gid'];
    }

    /**
     * Sets borough_gid
     *
     * @param string|null $borough_gid borough_gid
     *
     * @return self
     */
    public function setBoroughGid($borough_gid)
    {
        if (is_null($borough_gid)) {
            throw new \InvalidArgumentException('non-nullable borough_gid cannot be null');
        }
        $this->container['borough_gid'] = $borough_gid;

        return $this;
    }

    /**
     * Gets postalcode
     *
     * @return string|null
     */
    public function getPostalcode()
    {
        return $this->container['postalcode'];
    }

    /**
     * Sets postalcode
     *
     * @param string|null $postalcode postalcode
     *
     * @return self
     */
    public function setPostalcode($postalcode)
    {
        if (is_null($postalcode)) {
            throw new \InvalidArgumentException('non-nullable postalcode cannot be null');
        }
        $this->container['postalcode'] = $postalcode;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets housenumber
     *
     * @return string|null
     */
    public function getHousenumber()
    {
        return $this->container['housenumber'];
    }

    /**
     * Sets housenumber
     *
     * @param string|null $housenumber housenumber
     *
     * @return self
     */
    public function setHousenumber($housenumber)
    {
        if (is_null($housenumber)) {
            throw new \InvalidArgumentException('non-nullable housenumber cannot be null');
        }
        $this->container['housenumber'] = $housenumber;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality The city, village, town, etc. that the place / address is part of. Note that values may not always match postal or local conventions perfectly.
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets locality_gid
     *
     * @return string|null
     */
    public function getLocalityGid()
    {
        return $this->container['locality_gid'];
    }

    /**
     * Sets locality_gid
     *
     * @param string|null $locality_gid locality_gid
     *
     * @return self
     */
    public function setLocalityGid($locality_gid)
    {
        if (is_null($locality_gid)) {
            throw new \InvalidArgumentException('non-nullable locality_gid cannot be null');
        }
        $this->container['locality_gid'] = $locality_gid;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county Administrative divisions between localities and regions. Useful for disambiguating nearby results with similar names.
     *
     * @return self
     */
    public function setCounty($county)
    {
        if (is_null($county)) {
            throw new \InvalidArgumentException('non-nullable county cannot be null');
        }
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region Typically the first administrative division within a country. For example, a US state or a Canadian province.
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_a
     *
     * @return string|null
     */
    public function getRegionA()
    {
        return $this->container['region_a'];
    }

    /**
     * Sets region_a
     *
     * @param string|null $region_a The abbreviation for the region.
     *
     * @return self
     */
    public function setRegionA($region_a)
    {
        if (is_null($region_a)) {
            throw new \InvalidArgumentException('non-nullable region_a cannot be null');
        }
        $this->container['region_a'] = $region_a;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


