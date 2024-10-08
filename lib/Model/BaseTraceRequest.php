<?php
/**
 * BaseTraceRequest
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
 * BaseTraceRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BaseTraceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'baseTraceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'units' => '\OpenAPI\Client\Model\DistanceUnit',
        'language' => '\OpenAPI\Client\Model\ValhallaLanguages',
        'directions_type' => 'string',
        'id' => 'string',
        'shape' => '\OpenAPI\Client\Model\MapMatchWaypoint[]',
        'encoded_polyline' => 'string',
        'costing' => '\OpenAPI\Client\Model\MapMatchCostingModel',
        'costing_options' => '\OpenAPI\Client\Model\CostingOptions',
        'shape_match' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'units' => null,
        'language' => null,
        'directions_type' => null,
        'id' => null,
        'shape' => null,
        'encoded_polyline' => null,
        'costing' => null,
        'costing_options' => null,
        'shape_match' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'units' => false,
        'language' => false,
        'directions_type' => false,
        'id' => false,
        'shape' => false,
        'encoded_polyline' => false,
        'costing' => false,
        'costing_options' => false,
        'shape_match' => false
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
        'units' => 'units',
        'language' => 'language',
        'directions_type' => 'directions_type',
        'id' => 'id',
        'shape' => 'shape',
        'encoded_polyline' => 'encoded_polyline',
        'costing' => 'costing',
        'costing_options' => 'costing_options',
        'shape_match' => 'shape_match'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'units' => 'setUnits',
        'language' => 'setLanguage',
        'directions_type' => 'setDirectionsType',
        'id' => 'setId',
        'shape' => 'setShape',
        'encoded_polyline' => 'setEncodedPolyline',
        'costing' => 'setCosting',
        'costing_options' => 'setCostingOptions',
        'shape_match' => 'setShapeMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'units' => 'getUnits',
        'language' => 'getLanguage',
        'directions_type' => 'getDirectionsType',
        'id' => 'getId',
        'shape' => 'getShape',
        'encoded_polyline' => 'getEncodedPolyline',
        'costing' => 'getCosting',
        'costing_options' => 'getCostingOptions',
        'shape_match' => 'getShapeMatch'
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

    public const DIRECTIONS_TYPE_NONE = 'none';
    public const DIRECTIONS_TYPE_MANEUVERS = 'maneuvers';
    public const DIRECTIONS_TYPE_INSTRUCTIONS = 'instructions';
    public const SHAPE_MATCH_EDGE_WALK = 'edge_walk';
    public const SHAPE_MATCH_MAP_SNAP = 'map_snap';
    public const SHAPE_MATCH_WALK_OR_SNAP = 'walk_or_snap';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionsTypeAllowableValues()
    {
        return [
            self::DIRECTIONS_TYPE_NONE,
            self::DIRECTIONS_TYPE_MANEUVERS,
            self::DIRECTIONS_TYPE_INSTRUCTIONS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeMatchAllowableValues()
    {
        return [
            self::SHAPE_MATCH_EDGE_WALK,
            self::SHAPE_MATCH_MAP_SNAP,
            self::SHAPE_MATCH_WALK_OR_SNAP,
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
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('directions_type', $data ?? [], 'instructions');
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('shape', $data ?? [], null);
        $this->setIfExists('encoded_polyline', $data ?? [], null);
        $this->setIfExists('costing', $data ?? [], null);
        $this->setIfExists('costing_options', $data ?? [], null);
        $this->setIfExists('shape_match', $data ?? [], null);
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

        $allowedValues = $this->getDirectionsTypeAllowableValues();
        if (!is_null($this->container['directions_type']) && !in_array($this->container['directions_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'directions_type', must be one of '%s'",
                $this->container['directions_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['costing'] === null) {
            $invalidProperties[] = "'costing' can't be null";
        }
        $allowedValues = $this->getShapeMatchAllowableValues();
        if (!is_null($this->container['shape_match']) && !in_array($this->container['shape_match'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shape_match', must be one of '%s'",
                $this->container['shape_match'],
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
     * Gets units
     *
     * @return \OpenAPI\Client\Model\DistanceUnit|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\DistanceUnit|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \OpenAPI\Client\Model\ValhallaLanguages|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \OpenAPI\Client\Model\ValhallaLanguages|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets directions_type
     *
     * @return string|null
     */
    public function getDirectionsType()
    {
        return $this->container['directions_type'];
    }

    /**
     * Sets directions_type
     *
     * @param string|null $directions_type The level of directional narrative to include. Locations and times will always be returned, but narrative generation verbosity can be controlled with this parameter.
     *
     * @return self
     */
    public function setDirectionsType($directions_type)
    {
        if (is_null($directions_type)) {
            throw new \InvalidArgumentException('non-nullable directions_type cannot be null');
        }
        $allowedValues = $this->getDirectionsTypeAllowableValues();
        if (!in_array($directions_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'directions_type', must be one of '%s'",
                    $directions_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['directions_type'] = $directions_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id An identifier to disambiguate requests (echoed by the server).
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return \OpenAPI\Client\Model\MapMatchWaypoint[]|null
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param \OpenAPI\Client\Model\MapMatchWaypoint[]|null $shape REQUIRED if `encoded_polyline` is not present. Note that `break` type locations are only supported when `shape_match` is set to `map_match`.
     *
     * @return self
     */
    public function setShape($shape)
    {
        if (is_null($shape)) {
            throw new \InvalidArgumentException('non-nullable shape cannot be null');
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets encoded_polyline
     *
     * @return string|null
     */
    public function getEncodedPolyline()
    {
        return $this->container['encoded_polyline'];
    }

    /**
     * Sets encoded_polyline
     *
     * @param string|null $encoded_polyline REQUIRED if `shape` is not present. An encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm). Note that the polyline must be encoded with 6 digits of precision rather than the usual 5.
     *
     * @return self
     */
    public function setEncodedPolyline($encoded_polyline)
    {
        if (is_null($encoded_polyline)) {
            throw new \InvalidArgumentException('non-nullable encoded_polyline cannot be null');
        }
        $this->container['encoded_polyline'] = $encoded_polyline;

        return $this;
    }

    /**
     * Gets costing
     *
     * @return \OpenAPI\Client\Model\MapMatchCostingModel
     */
    public function getCosting()
    {
        return $this->container['costing'];
    }

    /**
     * Sets costing
     *
     * @param \OpenAPI\Client\Model\MapMatchCostingModel $costing costing
     *
     * @return self
     */
    public function setCosting($costing)
    {
        if (is_null($costing)) {
            throw new \InvalidArgumentException('non-nullable costing cannot be null');
        }
        $this->container['costing'] = $costing;

        return $this;
    }

    /**
     * Gets costing_options
     *
     * @return \OpenAPI\Client\Model\CostingOptions|null
     */
    public function getCostingOptions()
    {
        return $this->container['costing_options'];
    }

    /**
     * Sets costing_options
     *
     * @param \OpenAPI\Client\Model\CostingOptions|null $costing_options costing_options
     *
     * @return self
     */
    public function setCostingOptions($costing_options)
    {
        if (is_null($costing_options)) {
            throw new \InvalidArgumentException('non-nullable costing_options cannot be null');
        }
        $this->container['costing_options'] = $costing_options;

        return $this;
    }

    /**
     * Gets shape_match
     *
     * @return string|null
     */
    public function getShapeMatch()
    {
        return $this->container['shape_match'];
    }

    /**
     * Sets shape_match
     *
     * @param string|null $shape_match Three snapping modes provide some control over how the map matching occurs. `edge_walk` is fast, but requires extremely precise data that matches the route graph almost perfectly. `map_snap` can handle significantly noisier data, but is very expensive. `walk_or_snap`, the default, tries to use edge walking first and falls back to map matching if edge walking fails. In general, you should not need to change this parameter unless you want to trace a multi-leg route with multiple `break` locations in the `shape`.
     *
     * @return self
     */
    public function setShapeMatch($shape_match)
    {
        if (is_null($shape_match)) {
            throw new \InvalidArgumentException('non-nullable shape_match cannot be null');
        }
        $allowedValues = $this->getShapeMatchAllowableValues();
        if (!in_array($shape_match, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shape_match', must be one of '%s'",
                    $shape_match,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shape_match'] = $shape_match;

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


