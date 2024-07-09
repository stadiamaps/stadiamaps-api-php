<?php
/**
 * Restrictions
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
 * Restrictions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Restrictions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'restrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'golf_cart' => 'bool',
        'truck' => 'bool',
        'pedestrian' => 'bool',
        'wheelchair' => 'bool',
        'taxi' => 'bool',
        'hov' => 'bool',
        'emergency' => 'bool',
        'motorcycle' => 'bool',
        'car' => 'bool',
        'moped' => 'bool',
        'bus' => 'bool',
        'bicycle' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'golf_cart' => null,
        'truck' => null,
        'pedestrian' => null,
        'wheelchair' => null,
        'taxi' => null,
        'hov' => null,
        'emergency' => null,
        'motorcycle' => null,
        'car' => null,
        'moped' => null,
        'bus' => null,
        'bicycle' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'golf_cart' => false,
        'truck' => false,
        'pedestrian' => false,
        'wheelchair' => false,
        'taxi' => false,
        'hov' => false,
        'emergency' => false,
        'motorcycle' => false,
        'car' => false,
        'moped' => false,
        'bus' => false,
        'bicycle' => false
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
        'golf_cart' => 'golf_cart',
        'truck' => 'truck',
        'pedestrian' => 'pedestrian',
        'wheelchair' => 'wheelchair',
        'taxi' => 'taxi',
        'hov' => 'HOV',
        'emergency' => 'emergency',
        'motorcycle' => 'motorcycle',
        'car' => 'car',
        'moped' => 'moped',
        'bus' => 'bus',
        'bicycle' => 'bicycle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'golf_cart' => 'setGolfCart',
        'truck' => 'setTruck',
        'pedestrian' => 'setPedestrian',
        'wheelchair' => 'setWheelchair',
        'taxi' => 'setTaxi',
        'hov' => 'setHov',
        'emergency' => 'setEmergency',
        'motorcycle' => 'setMotorcycle',
        'car' => 'setCar',
        'moped' => 'setMoped',
        'bus' => 'setBus',
        'bicycle' => 'setBicycle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'golf_cart' => 'getGolfCart',
        'truck' => 'getTruck',
        'pedestrian' => 'getPedestrian',
        'wheelchair' => 'getWheelchair',
        'taxi' => 'getTaxi',
        'hov' => 'getHov',
        'emergency' => 'getEmergency',
        'motorcycle' => 'getMotorcycle',
        'car' => 'getCar',
        'moped' => 'getMoped',
        'bus' => 'getBus',
        'bicycle' => 'getBicycle'
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
        $this->setIfExists('golf_cart', $data ?? [], null);
        $this->setIfExists('truck', $data ?? [], null);
        $this->setIfExists('pedestrian', $data ?? [], null);
        $this->setIfExists('wheelchair', $data ?? [], null);
        $this->setIfExists('taxi', $data ?? [], null);
        $this->setIfExists('hov', $data ?? [], null);
        $this->setIfExists('emergency', $data ?? [], null);
        $this->setIfExists('motorcycle', $data ?? [], null);
        $this->setIfExists('car', $data ?? [], null);
        $this->setIfExists('moped', $data ?? [], null);
        $this->setIfExists('bus', $data ?? [], null);
        $this->setIfExists('bicycle', $data ?? [], null);
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
     * Gets golf_cart
     *
     * @return bool|null
     */
    public function getGolfCart()
    {
        return $this->container['golf_cart'];
    }

    /**
     * Sets golf_cart
     *
     * @param bool|null $golf_cart golf_cart
     *
     * @return self
     */
    public function setGolfCart($golf_cart)
    {
        if (is_null($golf_cart)) {
            throw new \InvalidArgumentException('non-nullable golf_cart cannot be null');
        }
        $this->container['golf_cart'] = $golf_cart;

        return $this;
    }

    /**
     * Gets truck
     *
     * @return bool|null
     */
    public function getTruck()
    {
        return $this->container['truck'];
    }

    /**
     * Sets truck
     *
     * @param bool|null $truck truck
     *
     * @return self
     */
    public function setTruck($truck)
    {
        if (is_null($truck)) {
            throw new \InvalidArgumentException('non-nullable truck cannot be null');
        }
        $this->container['truck'] = $truck;

        return $this;
    }

    /**
     * Gets pedestrian
     *
     * @return bool|null
     */
    public function getPedestrian()
    {
        return $this->container['pedestrian'];
    }

    /**
     * Sets pedestrian
     *
     * @param bool|null $pedestrian pedestrian
     *
     * @return self
     */
    public function setPedestrian($pedestrian)
    {
        if (is_null($pedestrian)) {
            throw new \InvalidArgumentException('non-nullable pedestrian cannot be null');
        }
        $this->container['pedestrian'] = $pedestrian;

        return $this;
    }

    /**
     * Gets wheelchair
     *
     * @return bool|null
     */
    public function getWheelchair()
    {
        return $this->container['wheelchair'];
    }

    /**
     * Sets wheelchair
     *
     * @param bool|null $wheelchair wheelchair
     *
     * @return self
     */
    public function setWheelchair($wheelchair)
    {
        if (is_null($wheelchair)) {
            throw new \InvalidArgumentException('non-nullable wheelchair cannot be null');
        }
        $this->container['wheelchair'] = $wheelchair;

        return $this;
    }

    /**
     * Gets taxi
     *
     * @return bool|null
     */
    public function getTaxi()
    {
        return $this->container['taxi'];
    }

    /**
     * Sets taxi
     *
     * @param bool|null $taxi taxi
     *
     * @return self
     */
    public function setTaxi($taxi)
    {
        if (is_null($taxi)) {
            throw new \InvalidArgumentException('non-nullable taxi cannot be null');
        }
        $this->container['taxi'] = $taxi;

        return $this;
    }

    /**
     * Gets hov
     *
     * @return bool|null
     */
    public function getHov()
    {
        return $this->container['hov'];
    }

    /**
     * Sets hov
     *
     * @param bool|null $hov hov
     *
     * @return self
     */
    public function setHov($hov)
    {
        if (is_null($hov)) {
            throw new \InvalidArgumentException('non-nullable hov cannot be null');
        }
        $this->container['hov'] = $hov;

        return $this;
    }

    /**
     * Gets emergency
     *
     * @return bool|null
     */
    public function getEmergency()
    {
        return $this->container['emergency'];
    }

    /**
     * Sets emergency
     *
     * @param bool|null $emergency emergency
     *
     * @return self
     */
    public function setEmergency($emergency)
    {
        if (is_null($emergency)) {
            throw new \InvalidArgumentException('non-nullable emergency cannot be null');
        }
        $this->container['emergency'] = $emergency;

        return $this;
    }

    /**
     * Gets motorcycle
     *
     * @return bool|null
     */
    public function getMotorcycle()
    {
        return $this->container['motorcycle'];
    }

    /**
     * Sets motorcycle
     *
     * @param bool|null $motorcycle motorcycle
     *
     * @return self
     */
    public function setMotorcycle($motorcycle)
    {
        if (is_null($motorcycle)) {
            throw new \InvalidArgumentException('non-nullable motorcycle cannot be null');
        }
        $this->container['motorcycle'] = $motorcycle;

        return $this;
    }

    /**
     * Gets car
     *
     * @return bool|null
     */
    public function getCar()
    {
        return $this->container['car'];
    }

    /**
     * Sets car
     *
     * @param bool|null $car car
     *
     * @return self
     */
    public function setCar($car)
    {
        if (is_null($car)) {
            throw new \InvalidArgumentException('non-nullable car cannot be null');
        }
        $this->container['car'] = $car;

        return $this;
    }

    /**
     * Gets moped
     *
     * @return bool|null
     */
    public function getMoped()
    {
        return $this->container['moped'];
    }

    /**
     * Sets moped
     *
     * @param bool|null $moped moped
     *
     * @return self
     */
    public function setMoped($moped)
    {
        if (is_null($moped)) {
            throw new \InvalidArgumentException('non-nullable moped cannot be null');
        }
        $this->container['moped'] = $moped;

        return $this;
    }

    /**
     * Gets bus
     *
     * @return bool|null
     */
    public function getBus()
    {
        return $this->container['bus'];
    }

    /**
     * Sets bus
     *
     * @param bool|null $bus bus
     *
     * @return self
     */
    public function setBus($bus)
    {
        if (is_null($bus)) {
            throw new \InvalidArgumentException('non-nullable bus cannot be null');
        }
        $this->container['bus'] = $bus;

        return $this;
    }

    /**
     * Gets bicycle
     *
     * @return bool|null
     */
    public function getBicycle()
    {
        return $this->container['bicycle'];
    }

    /**
     * Sets bicycle
     *
     * @param bool|null $bicycle bicycle
     *
     * @return self
     */
    public function setBicycle($bicycle)
    {
        if (is_null($bicycle)) {
            throw new \InvalidArgumentException('non-nullable bicycle cannot be null');
        }
        $this->container['bicycle'] = $bicycle;

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


