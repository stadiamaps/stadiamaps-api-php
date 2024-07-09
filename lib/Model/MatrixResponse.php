<?php
/**
 * MatrixResponse
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
 * The version of the OpenAPI document: 6.5.0
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
 * MatrixResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MatrixResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'matrixResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'sources' => '\OpenAPI\Client\Model\Coordinate[]',
        'targets' => '\OpenAPI\Client\Model\Coordinate[]',
        'sources_to_targets' => '\OpenAPI\Client\Model\MatrixDistance[][]',
        'warnings' => '\OpenAPI\Client\Model\Warning[]',
        'units' => '\OpenAPI\Client\Model\ValhallaLongUnits'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'sources' => null,
        'targets' => null,
        'sources_to_targets' => null,
        'warnings' => null,
        'units' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'sources' => false,
        'targets' => false,
        'sources_to_targets' => false,
        'warnings' => false,
        'units' => false
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
        'id' => 'id',
        'sources' => 'sources',
        'targets' => 'targets',
        'sources_to_targets' => 'sources_to_targets',
        'warnings' => 'warnings',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sources' => 'setSources',
        'targets' => 'setTargets',
        'sources_to_targets' => 'setSourcesToTargets',
        'warnings' => 'setWarnings',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sources' => 'getSources',
        'targets' => 'getTargets',
        'sources_to_targets' => 'getSourcesToTargets',
        'warnings' => 'getWarnings',
        'units' => 'getUnits'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('sources', $data ?? [], null);
        $this->setIfExists('targets', $data ?? [], null);
        $this->setIfExists('sources_to_targets', $data ?? [], null);
        $this->setIfExists('warnings', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
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

        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
        }
        if ((count($this->container['sources']) < 1)) {
            $invalidProperties[] = "invalid value for 'sources', number of items must be greater than or equal to 1.";
        }

        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
        }
        if ((count($this->container['targets']) < 1)) {
            $invalidProperties[] = "invalid value for 'targets', number of items must be greater than or equal to 1.";
        }

        if ($this->container['sources_to_targets'] === null) {
            $invalidProperties[] = "'sources_to_targets' can't be null";
        }
        if ((count($this->container['sources_to_targets']) < 1)) {
            $invalidProperties[] = "invalid value for 'sources_to_targets', number of items must be greater than or equal to 1.";
        }

        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
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
     * Gets sources
     *
     * @return \OpenAPI\Client\Model\Coordinate[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \OpenAPI\Client\Model\Coordinate[] $sources The list of starting locations determined by snapping to the nearest appropriate point on the road network for the costing model. All locations appear in the same order as the input.
     *
     * @return self
     */
    public function setSources($sources)
    {
        if (is_null($sources)) {
            throw new \InvalidArgumentException('non-nullable sources cannot be null');
        }


        if ((count($sources) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sources when calling MatrixResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets targets
     *
     * @return \OpenAPI\Client\Model\Coordinate[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     *
     * @param \OpenAPI\Client\Model\Coordinate[] $targets The list of ending locations determined by snapping to the nearest appropriate point on the road network for the costing model. All locations appear in the same order as the input.
     *
     * @return self
     */
    public function setTargets($targets)
    {
        if (is_null($targets)) {
            throw new \InvalidArgumentException('non-nullable targets cannot be null');
        }


        if ((count($targets) < 1)) {
            throw new \InvalidArgumentException('invalid length for $targets when calling MatrixResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets sources_to_targets
     *
     * @return \OpenAPI\Client\Model\MatrixDistance[][]
     */
    public function getSourcesToTargets()
    {
        return $this->container['sources_to_targets'];
    }

    /**
     * Sets sources_to_targets
     *
     * @param \OpenAPI\Client\Model\MatrixDistance[][] $sources_to_targets The matrix of starting and ending locations, along with the computed distance and travel time. The array is row-ordered. This means that the time and distance from the first location to all others forms the first row of the array, followed by the time and distance from the second source location to all target locations, etc.
     *
     * @return self
     */
    public function setSourcesToTargets($sources_to_targets)
    {
        if (is_null($sources_to_targets)) {
            throw new \InvalidArgumentException('non-nullable sources_to_targets cannot be null');
        }


        if ((count($sources_to_targets) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sources_to_targets when calling MatrixResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['sources_to_targets'] = $sources_to_targets;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \OpenAPI\Client\Model\Warning[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \OpenAPI\Client\Model\Warning[]|null $warnings warnings
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            throw new \InvalidArgumentException('non-nullable warnings cannot be null');
        }
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \OpenAPI\Client\Model\ValhallaLongUnits
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\ValhallaLongUnits $units units
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


