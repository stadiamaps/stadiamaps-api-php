<?php
/**
 * MapMatchTraceOptions
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MapMatchTraceOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MapMatchTraceOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'mapMatchTraceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search_radius' => 'int',
        'gps_accuracy' => 'float',
        'breakage_distance' => 'float',
        'interpolation_distance' => 'float',
        'turn_penalty_factor' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search_radius' => null,
        'gps_accuracy' => 'double',
        'breakage_distance' => 'double',
        'interpolation_distance' => 'double',
        'turn_penalty_factor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search_radius' => false,
        'gps_accuracy' => false,
        'breakage_distance' => false,
        'interpolation_distance' => false,
        'turn_penalty_factor' => false
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
        'search_radius' => 'search_radius',
        'gps_accuracy' => 'gps_accuracy',
        'breakage_distance' => 'breakage_distance',
        'interpolation_distance' => 'interpolation_distance',
        'turn_penalty_factor' => 'turn_penalty_factor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_radius' => 'setSearchRadius',
        'gps_accuracy' => 'setGpsAccuracy',
        'breakage_distance' => 'setBreakageDistance',
        'interpolation_distance' => 'setInterpolationDistance',
        'turn_penalty_factor' => 'setTurnPenaltyFactor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_radius' => 'getSearchRadius',
        'gps_accuracy' => 'getGpsAccuracy',
        'breakage_distance' => 'getBreakageDistance',
        'interpolation_distance' => 'getInterpolationDistance',
        'turn_penalty_factor' => 'getTurnPenaltyFactor'
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
        $this->setIfExists('search_radius', $data ?? [], null);
        $this->setIfExists('gps_accuracy', $data ?? [], null);
        $this->setIfExists('breakage_distance', $data ?? [], null);
        $this->setIfExists('interpolation_distance', $data ?? [], null);
        $this->setIfExists('turn_penalty_factor', $data ?? [], null);
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
     * Gets search_radius
     *
     * @return int|null
     */
    public function getSearchRadius()
    {
        return $this->container['search_radius'];
    }

    /**
     * Sets search_radius
     *
     * @param int|null $search_radius The search radius, in meters, when trying to match each trace point.
     *
     * @return self
     */
    public function setSearchRadius($search_radius)
    {
        if (is_null($search_radius)) {
            throw new \InvalidArgumentException('non-nullable search_radius cannot be null');
        }
        $this->container['search_radius'] = $search_radius;

        return $this;
    }

    /**
     * Gets gps_accuracy
     *
     * @return float|null
     */
    public function getGpsAccuracy()
    {
        return $this->container['gps_accuracy'];
    }

    /**
     * Sets gps_accuracy
     *
     * @param float|null $gps_accuracy The accuracy of the GPS, in meters.
     *
     * @return self
     */
    public function setGpsAccuracy($gps_accuracy)
    {
        if (is_null($gps_accuracy)) {
            throw new \InvalidArgumentException('non-nullable gps_accuracy cannot be null');
        }
        $this->container['gps_accuracy'] = $gps_accuracy;

        return $this;
    }

    /**
     * Gets breakage_distance
     *
     * @return float|null
     */
    public function getBreakageDistance()
    {
        return $this->container['breakage_distance'];
    }

    /**
     * Sets breakage_distance
     *
     * @param float|null $breakage_distance The breaking distance, in meters, between trace points.
     *
     * @return self
     */
    public function setBreakageDistance($breakage_distance)
    {
        if (is_null($breakage_distance)) {
            throw new \InvalidArgumentException('non-nullable breakage_distance cannot be null');
        }
        $this->container['breakage_distance'] = $breakage_distance;

        return $this;
    }

    /**
     * Gets interpolation_distance
     *
     * @return float|null
     */
    public function getInterpolationDistance()
    {
        return $this->container['interpolation_distance'];
    }

    /**
     * Sets interpolation_distance
     *
     * @param float|null $interpolation_distance The interpolation distance, in meters, beyond which trace points are merged together.
     *
     * @return self
     */
    public function setInterpolationDistance($interpolation_distance)
    {
        if (is_null($interpolation_distance)) {
            throw new \InvalidArgumentException('non-nullable interpolation_distance cannot be null');
        }
        $this->container['interpolation_distance'] = $interpolation_distance;

        return $this;
    }

    /**
     * Gets turn_penalty_factor
     *
     * @return int|null
     */
    public function getTurnPenaltyFactor()
    {
        return $this->container['turn_penalty_factor'];
    }

    /**
     * Sets turn_penalty_factor
     *
     * @param int|null $turn_penalty_factor Penalizes turns from one road segment to next. For a pedestrian trace, you may see a back-and-forth motion along the streets of your path with the default settings. Try increasing the turn penalty factor to 500 to reduce jitter in the output. Note that if GPS accuracy is already good, increasing this above the default will usually negatively affect the quality of map matching.
     *
     * @return self
     */
    public function setTurnPenaltyFactor($turn_penalty_factor)
    {
        if (is_null($turn_penalty_factor)) {
            throw new \InvalidArgumentException('non-nullable turn_penalty_factor cannot be null');
        }
        $this->container['turn_penalty_factor'] = $turn_penalty_factor;

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


