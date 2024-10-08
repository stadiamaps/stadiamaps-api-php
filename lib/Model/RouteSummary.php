<?php
/**
 * RouteSummary
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
 * RouteSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RouteSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time' => 'float',
        'length' => 'float',
        'min_lat' => 'float',
        'max_lat' => 'float',
        'min_lon' => 'float',
        'max_lon' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'time' => 'double',
        'length' => 'double',
        'min_lat' => 'double',
        'max_lat' => 'double',
        'min_lon' => 'double',
        'max_lon' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'time' => false,
        'length' => false,
        'min_lat' => false,
        'max_lat' => false,
        'min_lon' => false,
        'max_lon' => false
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
        'time' => 'time',
        'length' => 'length',
        'min_lat' => 'min_lat',
        'max_lat' => 'max_lat',
        'min_lon' => 'min_lon',
        'max_lon' => 'max_lon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time' => 'setTime',
        'length' => 'setLength',
        'min_lat' => 'setMinLat',
        'max_lat' => 'setMaxLat',
        'min_lon' => 'setMinLon',
        'max_lon' => 'setMaxLon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time' => 'getTime',
        'length' => 'getLength',
        'min_lat' => 'getMinLat',
        'max_lat' => 'getMaxLat',
        'min_lon' => 'getMinLon',
        'max_lon' => 'getMaxLon'
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
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('min_lat', $data ?? [], null);
        $this->setIfExists('max_lat', $data ?? [], null);
        $this->setIfExists('min_lon', $data ?? [], null);
        $this->setIfExists('max_lon', $data ?? [], null);
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

        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if ($this->container['min_lat'] === null) {
            $invalidProperties[] = "'min_lat' can't be null";
        }
        if ($this->container['max_lat'] === null) {
            $invalidProperties[] = "'max_lat' can't be null";
        }
        if ($this->container['min_lon'] === null) {
            $invalidProperties[] = "'min_lon' can't be null";
        }
        if ($this->container['max_lon'] === null) {
            $invalidProperties[] = "'max_lon' can't be null";
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
     * Gets time
     *
     * @return float
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param float $time The estimated travel time, in seconds
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length The estimated travel distance, in `units` (km or mi)
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets min_lat
     *
     * @return float
     */
    public function getMinLat()
    {
        return $this->container['min_lat'];
    }

    /**
     * Sets min_lat
     *
     * @param float $min_lat The minimum latitude of the bounding box containing the route.
     *
     * @return self
     */
    public function setMinLat($min_lat)
    {
        if (is_null($min_lat)) {
            throw new \InvalidArgumentException('non-nullable min_lat cannot be null');
        }
        $this->container['min_lat'] = $min_lat;

        return $this;
    }

    /**
     * Gets max_lat
     *
     * @return float
     */
    public function getMaxLat()
    {
        return $this->container['max_lat'];
    }

    /**
     * Sets max_lat
     *
     * @param float $max_lat The maximum latitude of the bounding box containing the route.
     *
     * @return self
     */
    public function setMaxLat($max_lat)
    {
        if (is_null($max_lat)) {
            throw new \InvalidArgumentException('non-nullable max_lat cannot be null');
        }
        $this->container['max_lat'] = $max_lat;

        return $this;
    }

    /**
     * Gets min_lon
     *
     * @return float
     */
    public function getMinLon()
    {
        return $this->container['min_lon'];
    }

    /**
     * Sets min_lon
     *
     * @param float $min_lon The minimum longitude of the bounding box containing the route.
     *
     * @return self
     */
    public function setMinLon($min_lon)
    {
        if (is_null($min_lon)) {
            throw new \InvalidArgumentException('non-nullable min_lon cannot be null');
        }
        $this->container['min_lon'] = $min_lon;

        return $this;
    }

    /**
     * Gets max_lon
     *
     * @return float
     */
    public function getMaxLon()
    {
        return $this->container['max_lon'];
    }

    /**
     * Sets max_lon
     *
     * @param float $max_lon The maximum longitude of the bounding box containing the route.
     *
     * @return self
     */
    public function setMaxLon($max_lon)
    {
        if (is_null($max_lon)) {
            throw new \InvalidArgumentException('non-nullable max_lon cannot be null');
        }
        $this->container['max_lon'] = $max_lon;

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


