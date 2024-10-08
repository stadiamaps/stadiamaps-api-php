<?php
/**
 * RoutingWaypointAllOfSearchFilter
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
 * RoutingWaypointAllOfSearchFilter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoutingWaypointAllOfSearchFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routingWaypoint_allOf_search_filter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exclude_tunnel' => 'bool',
        'exclude_bridge' => 'bool',
        'exclude_ramp' => 'bool',
        'exclude_closures' => 'bool',
        'min_road_class' => '\OpenAPI\Client\Model\RoadClass',
        'max_road_class' => '\OpenAPI\Client\Model\RoadClass'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exclude_tunnel' => null,
        'exclude_bridge' => null,
        'exclude_ramp' => null,
        'exclude_closures' => null,
        'min_road_class' => null,
        'max_road_class' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exclude_tunnel' => false,
        'exclude_bridge' => false,
        'exclude_ramp' => false,
        'exclude_closures' => false,
        'min_road_class' => false,
        'max_road_class' => false
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
        'exclude_tunnel' => 'exclude_tunnel',
        'exclude_bridge' => 'exclude_bridge',
        'exclude_ramp' => 'exclude_ramp',
        'exclude_closures' => 'exclude_closures',
        'min_road_class' => 'min_road_class',
        'max_road_class' => 'max_road_class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exclude_tunnel' => 'setExcludeTunnel',
        'exclude_bridge' => 'setExcludeBridge',
        'exclude_ramp' => 'setExcludeRamp',
        'exclude_closures' => 'setExcludeClosures',
        'min_road_class' => 'setMinRoadClass',
        'max_road_class' => 'setMaxRoadClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exclude_tunnel' => 'getExcludeTunnel',
        'exclude_bridge' => 'getExcludeBridge',
        'exclude_ramp' => 'getExcludeRamp',
        'exclude_closures' => 'getExcludeClosures',
        'min_road_class' => 'getMinRoadClass',
        'max_road_class' => 'getMaxRoadClass'
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
        $this->setIfExists('exclude_tunnel', $data ?? [], false);
        $this->setIfExists('exclude_bridge', $data ?? [], false);
        $this->setIfExists('exclude_ramp', $data ?? [], false);
        $this->setIfExists('exclude_closures', $data ?? [], true);
        $this->setIfExists('min_road_class', $data ?? [], null);
        $this->setIfExists('max_road_class', $data ?? [], null);
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
     * Gets exclude_tunnel
     *
     * @return bool|null
     */
    public function getExcludeTunnel()
    {
        return $this->container['exclude_tunnel'];
    }

    /**
     * Sets exclude_tunnel
     *
     * @param bool|null $exclude_tunnel Excludes roads marked as tunnels
     *
     * @return self
     */
    public function setExcludeTunnel($exclude_tunnel)
    {
        if (is_null($exclude_tunnel)) {
            throw new \InvalidArgumentException('non-nullable exclude_tunnel cannot be null');
        }
        $this->container['exclude_tunnel'] = $exclude_tunnel;

        return $this;
    }

    /**
     * Gets exclude_bridge
     *
     * @return bool|null
     */
    public function getExcludeBridge()
    {
        return $this->container['exclude_bridge'];
    }

    /**
     * Sets exclude_bridge
     *
     * @param bool|null $exclude_bridge Excludes roads marked as bridges
     *
     * @return self
     */
    public function setExcludeBridge($exclude_bridge)
    {
        if (is_null($exclude_bridge)) {
            throw new \InvalidArgumentException('non-nullable exclude_bridge cannot be null');
        }
        $this->container['exclude_bridge'] = $exclude_bridge;

        return $this;
    }

    /**
     * Gets exclude_ramp
     *
     * @return bool|null
     */
    public function getExcludeRamp()
    {
        return $this->container['exclude_ramp'];
    }

    /**
     * Sets exclude_ramp
     *
     * @param bool|null $exclude_ramp Excludes roads marked as ramps
     *
     * @return self
     */
    public function setExcludeRamp($exclude_ramp)
    {
        if (is_null($exclude_ramp)) {
            throw new \InvalidArgumentException('non-nullable exclude_ramp cannot be null');
        }
        $this->container['exclude_ramp'] = $exclude_ramp;

        return $this;
    }

    /**
     * Gets exclude_closures
     *
     * @return bool|null
     */
    public function getExcludeClosures()
    {
        return $this->container['exclude_closures'];
    }

    /**
     * Sets exclude_closures
     *
     * @param bool|null $exclude_closures Excludes roads marked as closed
     *
     * @return self
     */
    public function setExcludeClosures($exclude_closures)
    {
        if (is_null($exclude_closures)) {
            throw new \InvalidArgumentException('non-nullable exclude_closures cannot be null');
        }
        $this->container['exclude_closures'] = $exclude_closures;

        return $this;
    }

    /**
     * Gets min_road_class
     *
     * @return \OpenAPI\Client\Model\RoadClass|null
     */
    public function getMinRoadClass()
    {
        return $this->container['min_road_class'];
    }

    /**
     * Sets min_road_class
     *
     * @param \OpenAPI\Client\Model\RoadClass|null $min_road_class The lowest road class allowed
     *
     * @return self
     */
    public function setMinRoadClass($min_road_class)
    {
        if (is_null($min_road_class)) {
            throw new \InvalidArgumentException('non-nullable min_road_class cannot be null');
        }
        $this->container['min_road_class'] = $min_road_class;

        return $this;
    }

    /**
     * Gets max_road_class
     *
     * @return \OpenAPI\Client\Model\RoadClass|null
     */
    public function getMaxRoadClass()
    {
        return $this->container['max_road_class'];
    }

    /**
     * Sets max_road_class
     *
     * @param \OpenAPI\Client\Model\RoadClass|null $max_road_class The highest road class allowed
     *
     * @return self
     */
    public function setMaxRoadClass($max_road_class)
    {
        if (is_null($max_road_class)) {
            throw new \InvalidArgumentException('non-nullable max_road_class cannot be null');
        }
        $this->container['max_road_class'] = $max_road_class;

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


