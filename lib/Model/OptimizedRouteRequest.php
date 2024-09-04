<?php
/**
 * OptimizedRouteRequest
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
 * OptimizedRouteRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OptimizedRouteRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'optimizedRouteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'units' => '\OpenAPI\Client\Model\DistanceUnit',
        'language' => '\OpenAPI\Client\Model\ValhallaLanguages',
        'directions_type' => 'string',
        'format' => 'string',
        'banner_instructions' => 'bool',
        'voice_instructions' => 'bool',
        'filters' => '\OpenAPI\Client\Model\AnnotationFilters',
        'id' => 'string',
        'locations' => '\OpenAPI\Client\Model\Coordinate[]',
        'costing' => '\OpenAPI\Client\Model\MatrixCostingModel',
        'costing_options' => '\OpenAPI\Client\Model\CostingOptions'
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
        'format' => null,
        'banner_instructions' => null,
        'voice_instructions' => null,
        'filters' => null,
        'id' => null,
        'locations' => null,
        'costing' => null,
        'costing_options' => null
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
        'format' => false,
        'banner_instructions' => false,
        'voice_instructions' => false,
        'filters' => false,
        'id' => false,
        'locations' => false,
        'costing' => false,
        'costing_options' => false
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
        'format' => 'format',
        'banner_instructions' => 'banner_instructions',
        'voice_instructions' => 'voice_instructions',
        'filters' => 'filters',
        'id' => 'id',
        'locations' => 'locations',
        'costing' => 'costing',
        'costing_options' => 'costing_options'
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
        'format' => 'setFormat',
        'banner_instructions' => 'setBannerInstructions',
        'voice_instructions' => 'setVoiceInstructions',
        'filters' => 'setFilters',
        'id' => 'setId',
        'locations' => 'setLocations',
        'costing' => 'setCosting',
        'costing_options' => 'setCostingOptions'
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
        'format' => 'getFormat',
        'banner_instructions' => 'getBannerInstructions',
        'voice_instructions' => 'getVoiceInstructions',
        'filters' => 'getFilters',
        'id' => 'getId',
        'locations' => 'getLocations',
        'costing' => 'getCosting',
        'costing_options' => 'getCostingOptions'
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
    public const FORMAT_JSON = 'json';
    public const FORMAT_OSRM = 'osrm';

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
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JSON,
            self::FORMAT_OSRM,
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
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('banner_instructions', $data ?? [], null);
        $this->setIfExists('voice_instructions', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('locations', $data ?? [], null);
        $this->setIfExists('costing', $data ?? [], null);
        $this->setIfExists('costing_options', $data ?? [], null);
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

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
        }
        if ((count($this->container['locations']) < 3)) {
            $invalidProperties[] = "invalid value for 'locations', number of items must be greater than or equal to 3.";
        }

        if ($this->container['costing'] === null) {
            $invalidProperties[] = "'costing' can't be null";
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
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format The output response format. The default JSON format is extremely compact and ideal for web or data-constrained use cases where you want to fetch additional attributes on demand in small chunks. The OSRM format is much richer and is configurable with significantly more info for turn-by-turn navigation use cases.
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets banner_instructions
     *
     * @return bool|null
     */
    public function getBannerInstructions()
    {
        return $this->container['banner_instructions'];
    }

    /**
     * Sets banner_instructions
     *
     * @param bool|null $banner_instructions Optionally includes helpful banners with timing information for turn-by-turn navigation. This is only available in the OSRM format.
     *
     * @return self
     */
    public function setBannerInstructions($banner_instructions)
    {
        if (is_null($banner_instructions)) {
            throw new \InvalidArgumentException('non-nullable banner_instructions cannot be null');
        }
        $this->container['banner_instructions'] = $banner_instructions;

        return $this;
    }

    /**
     * Gets voice_instructions
     *
     * @return bool|null
     */
    public function getVoiceInstructions()
    {
        return $this->container['voice_instructions'];
    }

    /**
     * Sets voice_instructions
     *
     * @param bool|null $voice_instructions Optionally includes voice instructions with timing information for turn-by-turn navigation. This is only available in the OSRM format.
     *
     * @return self
     */
    public function setVoiceInstructions($voice_instructions)
    {
        if (is_null($voice_instructions)) {
            throw new \InvalidArgumentException('non-nullable voice_instructions cannot be null');
        }
        $this->container['voice_instructions'] = $voice_instructions;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \OpenAPI\Client\Model\AnnotationFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \OpenAPI\Client\Model\AnnotationFilters|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

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
     * @param \OpenAPI\Client\Model\Coordinate[] $locations The list of locations. The first and last are assumed to be the start and end points, and all intermediate points are locations that you want to visit along the way.
     *
     * @return self
     */
    public function setLocations($locations)
    {
        if (is_null($locations)) {
            throw new \InvalidArgumentException('non-nullable locations cannot be null');
        }


        if ((count($locations) < 3)) {
            throw new \InvalidArgumentException('invalid length for $locations when calling OptimizedRouteRequest., number of items must be greater than or equal to 3.');
        }
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets costing
     *
     * @return \OpenAPI\Client\Model\MatrixCostingModel
     */
    public function getCosting()
    {
        return $this->container['costing'];
    }

    /**
     * Sets costing
     *
     * @param \OpenAPI\Client\Model\MatrixCostingModel $costing costing
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


