<?php
/**
 * IsochroneProperties
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
 * The version of the OpenAPI document: 6.6.3
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
 * IsochroneProperties Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IsochroneProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'isochroneProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fill_color' => 'string',
        'opacity' => 'float',
        'fill' => 'string',
        'fill_opacity' => 'float',
        'color' => 'string',
        'contour' => 'float',
        'metric' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fill_color' => null,
        'opacity' => 'float',
        'fill' => null,
        'fill_opacity' => 'float',
        'color' => null,
        'contour' => 'float',
        'metric' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fill_color' => false,
        'opacity' => false,
        'fill' => false,
        'fill_opacity' => false,
        'color' => false,
        'contour' => false,
        'metric' => false
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
        'fill_color' => 'fillColor',
        'opacity' => 'opacity',
        'fill' => 'fill',
        'fill_opacity' => 'fillOpacity',
        'color' => 'color',
        'contour' => 'contour',
        'metric' => 'metric'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fill_color' => 'setFillColor',
        'opacity' => 'setOpacity',
        'fill' => 'setFill',
        'fill_opacity' => 'setFillOpacity',
        'color' => 'setColor',
        'contour' => 'setContour',
        'metric' => 'setMetric'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fill_color' => 'getFillColor',
        'opacity' => 'getOpacity',
        'fill' => 'getFill',
        'fill_opacity' => 'getFillOpacity',
        'color' => 'getColor',
        'contour' => 'getContour',
        'metric' => 'getMetric'
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

    public const METRIC_TIME = 'time';
    public const METRIC_DISTANCE = 'distance';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMetricAllowableValues()
    {
        return [
            self::METRIC_TIME,
            self::METRIC_DISTANCE,
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
        $this->setIfExists('fill_color', $data ?? [], null);
        $this->setIfExists('opacity', $data ?? [], null);
        $this->setIfExists('fill', $data ?? [], null);
        $this->setIfExists('fill_opacity', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('contour', $data ?? [], null);
        $this->setIfExists('metric', $data ?? [], null);
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

        $allowedValues = $this->getMetricAllowableValues();
        if (!is_null($this->container['metric']) && !in_array($this->container['metric'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'metric', must be one of '%s'",
                $this->container['metric'],
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
     * Gets fill_color
     *
     * @return string|null
     */
    public function getFillColor()
    {
        return $this->container['fill_color'];
    }

    /**
     * Sets fill_color
     *
     * @param string|null $fill_color fill_color
     *
     * @return self
     */
    public function setFillColor($fill_color)
    {
        if (is_null($fill_color)) {
            throw new \InvalidArgumentException('non-nullable fill_color cannot be null');
        }
        $this->container['fill_color'] = $fill_color;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return float|null
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param float|null $opacity opacity
     *
     * @return self
     */
    public function setOpacity($opacity)
    {
        if (is_null($opacity)) {
            throw new \InvalidArgumentException('non-nullable opacity cannot be null');
        }
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets fill
     *
     * @return string|null
     */
    public function getFill()
    {
        return $this->container['fill'];
    }

    /**
     * Sets fill
     *
     * @param string|null $fill fill
     *
     * @return self
     */
    public function setFill($fill)
    {
        if (is_null($fill)) {
            throw new \InvalidArgumentException('non-nullable fill cannot be null');
        }
        $this->container['fill'] = $fill;

        return $this;
    }

    /**
     * Gets fill_opacity
     *
     * @return float|null
     */
    public function getFillOpacity()
    {
        return $this->container['fill_opacity'];
    }

    /**
     * Sets fill_opacity
     *
     * @param float|null $fill_opacity fill_opacity
     *
     * @return self
     */
    public function setFillOpacity($fill_opacity)
    {
        if (is_null($fill_opacity)) {
            throw new \InvalidArgumentException('non-nullable fill_opacity cannot be null');
        }
        $this->container['fill_opacity'] = $fill_opacity;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets contour
     *
     * @return float|null
     */
    public function getContour()
    {
        return $this->container['contour'];
    }

    /**
     * Sets contour
     *
     * @param float|null $contour contour
     *
     * @return self
     */
    public function setContour($contour)
    {
        if (is_null($contour)) {
            throw new \InvalidArgumentException('non-nullable contour cannot be null');
        }
        $this->container['contour'] = $contour;

        return $this;
    }

    /**
     * Gets metric
     *
     * @return string|null
     */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
     * Sets metric
     *
     * @param string|null $metric metric
     *
     * @return self
     */
    public function setMetric($metric)
    {
        if (is_null($metric)) {
            throw new \InvalidArgumentException('non-nullable metric cannot be null');
        }
        $allowedValues = $this->getMetricAllowableValues();
        if (!in_array($metric, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'metric', must be one of '%s'",
                    $metric,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['metric'] = $metric;

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


