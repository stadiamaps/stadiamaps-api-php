<?php
/**
 * TraceAttributesResponse
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
 * TraceAttributesResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TraceAttributesResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'traceAttributesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'edges' => '\OpenAPI\Client\Model\TraceEdge[]',
        'admins' => '\OpenAPI\Client\Model\AdminRegion[]',
        'matched_points' => '\OpenAPI\Client\Model\MatchedPoint[]',
        'osm_changeset' => 'int',
        'shape' => 'string',
        'confidence_score' => 'float',
        'id' => 'string',
        'units' => '\OpenAPI\Client\Model\ValhallaLongUnits',
        'alternate_paths' => '\OpenAPI\Client\Model\TraceAttributesBaseResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'edges' => null,
        'admins' => null,
        'matched_points' => null,
        'osm_changeset' => null,
        'shape' => null,
        'confidence_score' => 'double',
        'id' => null,
        'units' => null,
        'alternate_paths' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'edges' => true,
        'admins' => false,
        'matched_points' => false,
        'osm_changeset' => false,
        'shape' => false,
        'confidence_score' => false,
        'id' => false,
        'units' => false,
        'alternate_paths' => false
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
        'edges' => 'edges',
        'admins' => 'admins',
        'matched_points' => 'matched_points',
        'osm_changeset' => 'osm_changeset',
        'shape' => 'shape',
        'confidence_score' => 'confidence_score',
        'id' => 'id',
        'units' => 'units',
        'alternate_paths' => 'alternate_paths'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'edges' => 'setEdges',
        'admins' => 'setAdmins',
        'matched_points' => 'setMatchedPoints',
        'osm_changeset' => 'setOsmChangeset',
        'shape' => 'setShape',
        'confidence_score' => 'setConfidenceScore',
        'id' => 'setId',
        'units' => 'setUnits',
        'alternate_paths' => 'setAlternatePaths'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'edges' => 'getEdges',
        'admins' => 'getAdmins',
        'matched_points' => 'getMatchedPoints',
        'osm_changeset' => 'getOsmChangeset',
        'shape' => 'getShape',
        'confidence_score' => 'getConfidenceScore',
        'id' => 'getId',
        'units' => 'getUnits',
        'alternate_paths' => 'getAlternatePaths'
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
        $this->setIfExists('edges', $data ?? [], null);
        $this->setIfExists('admins', $data ?? [], null);
        $this->setIfExists('matched_points', $data ?? [], null);
        $this->setIfExists('osm_changeset', $data ?? [], null);
        $this->setIfExists('shape', $data ?? [], null);
        $this->setIfExists('confidence_score', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('alternate_paths', $data ?? [], null);
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

        if (!is_null($this->container['confidence_score']) && ($this->container['confidence_score'] > 1)) {
            $invalidProperties[] = "invalid value for 'confidence_score', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['confidence_score']) && ($this->container['confidence_score'] < 0)) {
            $invalidProperties[] = "invalid value for 'confidence_score', must be bigger than or equal to 0.";
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
     * Gets edges
     *
     * @return \OpenAPI\Client\Model\TraceEdge[]|null
     */
    public function getEdges()
    {
        return $this->container['edges'];
    }

    /**
     * Sets edges
     *
     * @param \OpenAPI\Client\Model\TraceEdge[]|null $edges The list of edges matched along the path.
     *
     * @return self
     */
    public function setEdges($edges)
    {
        if (is_null($edges)) {
            array_push($this->openAPINullablesSetToNull, 'edges');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edges', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edges'] = $edges;

        return $this;
    }

    /**
     * Gets admins
     *
     * @return \OpenAPI\Client\Model\AdminRegion[]|null
     */
    public function getAdmins()
    {
        return $this->container['admins'];
    }

    /**
     * Sets admins
     *
     * @param \OpenAPI\Client\Model\AdminRegion[]|null $admins The set of administrative regions matched along the path. Rather than repeating this information for every end node, the admins in this list are referenced by index.
     *
     * @return self
     */
    public function setAdmins($admins)
    {
        if (is_null($admins)) {
            throw new \InvalidArgumentException('non-nullable admins cannot be null');
        }
        $this->container['admins'] = $admins;

        return $this;
    }

    /**
     * Gets matched_points
     *
     * @return \OpenAPI\Client\Model\MatchedPoint[]|null
     */
    public function getMatchedPoints()
    {
        return $this->container['matched_points'];
    }

    /**
     * Sets matched_points
     *
     * @param \OpenAPI\Client\Model\MatchedPoint[]|null $matched_points List of match results when using the map_snap shape match algorithm. There is a one-to-one correspondence with the input set of latitude, longitude coordinates and this list of match results.
     *
     * @return self
     */
    public function setMatchedPoints($matched_points)
    {
        if (is_null($matched_points)) {
            throw new \InvalidArgumentException('non-nullable matched_points cannot be null');
        }
        $this->container['matched_points'] = $matched_points;

        return $this;
    }

    /**
     * Gets osm_changeset
     *
     * @return int|null
     */
    public function getOsmChangeset()
    {
        return $this->container['osm_changeset'];
    }

    /**
     * Sets osm_changeset
     *
     * @param int|null $osm_changeset osm_changeset
     *
     * @return self
     */
    public function setOsmChangeset($osm_changeset)
    {
        if (is_null($osm_changeset)) {
            throw new \InvalidArgumentException('non-nullable osm_changeset cannot be null');
        }
        $this->container['osm_changeset'] = $osm_changeset;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return string|null
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param string|null $shape The encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm) of the matched path.
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
     * Gets confidence_score
     *
     * @return float|null
     */
    public function getConfidenceScore()
    {
        return $this->container['confidence_score'];
    }

    /**
     * Sets confidence_score
     *
     * @param float|null $confidence_score confidence_score
     *
     * @return self
     */
    public function setConfidenceScore($confidence_score)
    {
        if (is_null($confidence_score)) {
            throw new \InvalidArgumentException('non-nullable confidence_score cannot be null');
        }

        if (($confidence_score > 1)) {
            throw new \InvalidArgumentException('invalid value for $confidence_score when calling TraceAttributesResponse., must be smaller than or equal to 1.');
        }
        if (($confidence_score < 0)) {
            throw new \InvalidArgumentException('invalid value for $confidence_score when calling TraceAttributesResponse., must be bigger than or equal to 0.');
        }

        $this->container['confidence_score'] = $confidence_score;

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
     * Gets units
     *
     * @return \OpenAPI\Client\Model\ValhallaLongUnits|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\ValhallaLongUnits|null $units units
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
     * Gets alternate_paths
     *
     * @return \OpenAPI\Client\Model\TraceAttributesBaseResponse[]|null
     */
    public function getAlternatePaths()
    {
        return $this->container['alternate_paths'];
    }

    /**
     * Sets alternate_paths
     *
     * @param \OpenAPI\Client\Model\TraceAttributesBaseResponse[]|null $alternate_paths Alternate paths, if any, that were not classified as the best match.
     *
     * @return self
     */
    public function setAlternatePaths($alternate_paths)
    {
        if (is_null($alternate_paths)) {
            throw new \InvalidArgumentException('non-nullable alternate_paths cannot be null');
        }
        $this->container['alternate_paths'] = $alternate_paths;

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


