<?php
/**
 * RoutingResponseWaypoint
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
 * The version of the OpenAPI document: 6.6.2
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
 * RoutingResponseWaypoint Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoutingResponseWaypoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routingResponseWaypoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lat' => 'float',
        'lon' => 'float',
        'type' => 'string',
        'original_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lat' => 'double',
        'lon' => 'double',
        'type' => null,
        'original_index' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lat' => false,
        'lon' => false,
        'type' => false,
        'original_index' => false
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
        'lat' => 'lat',
        'lon' => 'lon',
        'type' => 'type',
        'original_index' => 'original_index'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lat' => 'setLat',
        'lon' => 'setLon',
        'type' => 'setType',
        'original_index' => 'setOriginalIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lat' => 'getLat',
        'lon' => 'getLon',
        'type' => 'getType',
        'original_index' => 'getOriginalIndex'
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

    public const TYPE__BREAK = 'break';
    public const TYPE_THROUGH = 'through';
    public const TYPE_VIA = 'via';
    public const TYPE_BREAK_THROUGH = 'break_through';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__BREAK,
            self::TYPE_THROUGH,
            self::TYPE_VIA,
            self::TYPE_BREAK_THROUGH,
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
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('lon', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'break');
        $this->setIfExists('original_index', $data ?? [], null);
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

        if ($this->container['lat'] === null) {
            $invalidProperties[] = "'lat' can't be null";
        }
        if (($this->container['lat'] > 90)) {
            $invalidProperties[] = "invalid value for 'lat', must be smaller than or equal to 90.";
        }

        if (($this->container['lat'] < -90)) {
            $invalidProperties[] = "invalid value for 'lat', must be bigger than or equal to -90.";
        }

        if ($this->container['lon'] === null) {
            $invalidProperties[] = "'lon' can't be null";
        }
        if (($this->container['lon'] > 180)) {
            $invalidProperties[] = "invalid value for 'lon', must be smaller than or equal to 180.";
        }

        if (($this->container['lon'] < -180)) {
            $invalidProperties[] = "invalid value for 'lon', must be bigger than or equal to -180.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['original_index']) && ($this->container['original_index'] < 0)) {
            $invalidProperties[] = "invalid value for 'original_index', must be bigger than or equal to 0.";
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
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat The latitude of a point in the shape.
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            throw new \InvalidArgumentException('non-nullable lat cannot be null');
        }

        if (($lat > 90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling RoutingResponseWaypoint., must be smaller than or equal to 90.');
        }
        if (($lat < -90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling RoutingResponseWaypoint., must be bigger than or equal to -90.');
        }

        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param float $lon The longitude of a point in the shape.
     *
     * @return self
     */
    public function setLon($lon)
    {
        if (is_null($lon)) {
            throw new \InvalidArgumentException('non-nullable lon cannot be null');
        }

        if (($lon > 180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling RoutingResponseWaypoint., must be smaller than or equal to 180.');
        }
        if (($lon < -180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling RoutingResponseWaypoint., must be bigger than or equal to -180.');
        }

        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type A `break` represents the start or end of a leg, and allows reversals. A `through` location is an intermediate waypoint that must be visited between `break`s, but at which reversals are not allowed. A `via` is similar to a `through` except that reversals are allowed. A `break_through` is similar to a `break` in that it can be the start/end of a leg, but does not allow reversals.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets original_index
     *
     * @return int|null
     */
    public function getOriginalIndex()
    {
        return $this->container['original_index'];
    }

    /**
     * Sets original_index
     *
     * @param int|null $original_index The original index of the location (locations may be reordered for optimized routes)
     *
     * @return self
     */
    public function setOriginalIndex($original_index)
    {
        if (is_null($original_index)) {
            throw new \InvalidArgumentException('non-nullable original_index cannot be null');
        }

        if (($original_index < 0)) {
            throw new \InvalidArgumentException('invalid value for $original_index when calling RoutingResponseWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['original_index'] = $original_index;

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


