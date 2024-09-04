<?php
/**
 * IsochroneRequest
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
 * IsochroneRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IsochroneRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'isochroneRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'locations' => '\OpenAPI\Client\Model\Coordinate[]',
        'costing' => '\OpenAPI\Client\Model\IsochroneCostingModel',
        'costing_options' => '\OpenAPI\Client\Model\CostingOptions',
        'contours' => '\OpenAPI\Client\Model\Contour[]',
        'polygons' => 'bool',
        'denoise' => 'float',
        'generalize' => 'float',
        'show_locations' => 'bool'
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
        'locations' => null,
        'costing' => null,
        'costing_options' => null,
        'contours' => null,
        'polygons' => null,
        'denoise' => 'double',
        'generalize' => 'double',
        'show_locations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'locations' => false,
        'costing' => false,
        'costing_options' => false,
        'contours' => false,
        'polygons' => false,
        'denoise' => false,
        'generalize' => false,
        'show_locations' => false
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
        'locations' => 'locations',
        'costing' => 'costing',
        'costing_options' => 'costing_options',
        'contours' => 'contours',
        'polygons' => 'polygons',
        'denoise' => 'denoise',
        'generalize' => 'generalize',
        'show_locations' => 'show_locations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'locations' => 'setLocations',
        'costing' => 'setCosting',
        'costing_options' => 'setCostingOptions',
        'contours' => 'setContours',
        'polygons' => 'setPolygons',
        'denoise' => 'setDenoise',
        'generalize' => 'setGeneralize',
        'show_locations' => 'setShowLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'locations' => 'getLocations',
        'costing' => 'getCosting',
        'costing_options' => 'getCostingOptions',
        'contours' => 'getContours',
        'polygons' => 'getPolygons',
        'denoise' => 'getDenoise',
        'generalize' => 'getGeneralize',
        'show_locations' => 'getShowLocations'
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
        $this->setIfExists('locations', $data ?? [], null);
        $this->setIfExists('costing', $data ?? [], null);
        $this->setIfExists('costing_options', $data ?? [], null);
        $this->setIfExists('contours', $data ?? [], null);
        $this->setIfExists('polygons', $data ?? [], false);
        $this->setIfExists('denoise', $data ?? [], 1);
        $this->setIfExists('generalize', $data ?? [], 200.0);
        $this->setIfExists('show_locations', $data ?? [], false);
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

        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
        }
        if ($this->container['costing'] === null) {
            $invalidProperties[] = "'costing' can't be null";
        }
        if ($this->container['contours'] === null) {
            $invalidProperties[] = "'contours' can't be null";
        }
        if ((count($this->container['contours']) > 4)) {
            $invalidProperties[] = "invalid value for 'contours', number of items must be less than or equal to 4.";
        }

        if ((count($this->container['contours']) < 1)) {
            $invalidProperties[] = "invalid value for 'contours', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['denoise']) && ($this->container['denoise'] > 1)) {
            $invalidProperties[] = "invalid value for 'denoise', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['denoise']) && ($this->container['denoise'] < 0)) {
            $invalidProperties[] = "invalid value for 'denoise', must be bigger than or equal to 0.";
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
     * Gets locations
     *
     * @return \OpenAPI\Client\Model\Coordinate[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \OpenAPI\Client\Model\Coordinate[] $locations locations
     *
     * @return self
     */
    public function setLocations($locations)
    {
        if (is_null($locations)) {
            throw new \InvalidArgumentException('non-nullable locations cannot be null');
        }
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets costing
     *
     * @return \OpenAPI\Client\Model\IsochroneCostingModel
     */
    public function getCosting()
    {
        return $this->container['costing'];
    }

    /**
     * Sets costing
     *
     * @param \OpenAPI\Client\Model\IsochroneCostingModel $costing costing
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
     * Gets contours
     *
     * @return \OpenAPI\Client\Model\Contour[]
     */
    public function getContours()
    {
        return $this->container['contours'];
    }

    /**
     * Sets contours
     *
     * @param \OpenAPI\Client\Model\Contour[] $contours contours
     *
     * @return self
     */
    public function setContours($contours)
    {
        if (is_null($contours)) {
            throw new \InvalidArgumentException('non-nullable contours cannot be null');
        }

        if ((count($contours) > 4)) {
            throw new \InvalidArgumentException('invalid value for $contours when calling IsochroneRequest., number of items must be less than or equal to 4.');
        }
        if ((count($contours) < 1)) {
            throw new \InvalidArgumentException('invalid length for $contours when calling IsochroneRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['contours'] = $contours;

        return $this;
    }

    /**
     * Gets polygons
     *
     * @return bool|null
     */
    public function getPolygons()
    {
        return $this->container['polygons'];
    }

    /**
     * Sets polygons
     *
     * @param bool|null $polygons If true, the generated GeoJSON will use polygons. The default is to use LineStrings. Polygon output makes it easier to render overlapping areas in some visualization tools (such as MapLibre renderers).
     *
     * @return self
     */
    public function setPolygons($polygons)
    {
        if (is_null($polygons)) {
            throw new \InvalidArgumentException('non-nullable polygons cannot be null');
        }
        $this->container['polygons'] = $polygons;

        return $this;
    }

    /**
     * Gets denoise
     *
     * @return float|null
     */
    public function getDenoise()
    {
        return $this->container['denoise'];
    }

    /**
     * Sets denoise
     *
     * @param float|null $denoise A value in the range [0, 1] which will be used to smooth out or remove smaller contours. A value of 1 will only return the largest contour for a given time value. A value of 0.5 drops any contours that are less than half the area of the largest contour in the set of contours for that same time value.
     *
     * @return self
     */
    public function setDenoise($denoise)
    {
        if (is_null($denoise)) {
            throw new \InvalidArgumentException('non-nullable denoise cannot be null');
        }

        if (($denoise > 1)) {
            throw new \InvalidArgumentException('invalid value for $denoise when calling IsochroneRequest., must be smaller than or equal to 1.');
        }
        if (($denoise < 0)) {
            throw new \InvalidArgumentException('invalid value for $denoise when calling IsochroneRequest., must be bigger than or equal to 0.');
        }

        $this->container['denoise'] = $denoise;

        return $this;
    }

    /**
     * Gets generalize
     *
     * @return float|null
     */
    public function getGeneralize()
    {
        return $this->container['generalize'];
    }

    /**
     * Sets generalize
     *
     * @param float|null $generalize The value in meters to be used as a tolerance for Douglas-Peucker generalization.
     *
     * @return self
     */
    public function setGeneralize($generalize)
    {
        if (is_null($generalize)) {
            throw new \InvalidArgumentException('non-nullable generalize cannot be null');
        }
        $this->container['generalize'] = $generalize;

        return $this;
    }

    /**
     * Gets show_locations
     *
     * @return bool|null
     */
    public function getShowLocations()
    {
        return $this->container['show_locations'];
    }

    /**
     * Sets show_locations
     *
     * @param bool|null $show_locations If true, then the output GeoJSON will include the input locations as two MultiPoint features: one for the exact input coordinates, and a second for the route network node location that the point was snapped to.
     *
     * @return self
     */
    public function setShowLocations($show_locations)
    {
        if (is_null($show_locations)) {
            throw new \InvalidArgumentException('non-nullable show_locations cannot be null');
        }
        $this->container['show_locations'] = $show_locations;

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


