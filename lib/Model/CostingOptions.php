<?php
/**
 * CostingOptions
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
 * CostingOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CostingOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'costingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto' => '\OpenAPI\Client\Model\AutoCostingOptions',
        'bus' => '\OpenAPI\Client\Model\AutoCostingOptions',
        'taxi' => '\OpenAPI\Client\Model\AutoCostingOptions',
        'truck' => '\OpenAPI\Client\Model\TruckCostingOptions',
        'bicycle' => '\OpenAPI\Client\Model\BicycleCostingOptions',
        'motor_scooter' => '\OpenAPI\Client\Model\MotorScooterCostingOptions',
        'motorcycle' => '\OpenAPI\Client\Model\MotorcycleCostingOptions',
        'pedestrian' => '\OpenAPI\Client\Model\PedestrianCostingOptions',
        'low_speed_vehicle' => '\OpenAPI\Client\Model\LowSpeedVehicleCostingOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto' => null,
        'bus' => null,
        'taxi' => null,
        'truck' => null,
        'bicycle' => null,
        'motor_scooter' => null,
        'motorcycle' => null,
        'pedestrian' => null,
        'low_speed_vehicle' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auto' => false,
        'bus' => false,
        'taxi' => false,
        'truck' => false,
        'bicycle' => false,
        'motor_scooter' => false,
        'motorcycle' => false,
        'pedestrian' => false,
        'low_speed_vehicle' => false
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
        'auto' => 'auto',
        'bus' => 'bus',
        'taxi' => 'taxi',
        'truck' => 'truck',
        'bicycle' => 'bicycle',
        'motor_scooter' => 'motor_scooter',
        'motorcycle' => 'motorcycle',
        'pedestrian' => 'pedestrian',
        'low_speed_vehicle' => 'low_speed_vehicle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto' => 'setAuto',
        'bus' => 'setBus',
        'taxi' => 'setTaxi',
        'truck' => 'setTruck',
        'bicycle' => 'setBicycle',
        'motor_scooter' => 'setMotorScooter',
        'motorcycle' => 'setMotorcycle',
        'pedestrian' => 'setPedestrian',
        'low_speed_vehicle' => 'setLowSpeedVehicle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto' => 'getAuto',
        'bus' => 'getBus',
        'taxi' => 'getTaxi',
        'truck' => 'getTruck',
        'bicycle' => 'getBicycle',
        'motor_scooter' => 'getMotorScooter',
        'motorcycle' => 'getMotorcycle',
        'pedestrian' => 'getPedestrian',
        'low_speed_vehicle' => 'getLowSpeedVehicle'
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
        $this->setIfExists('auto', $data ?? [], null);
        $this->setIfExists('bus', $data ?? [], null);
        $this->setIfExists('taxi', $data ?? [], null);
        $this->setIfExists('truck', $data ?? [], null);
        $this->setIfExists('bicycle', $data ?? [], null);
        $this->setIfExists('motor_scooter', $data ?? [], null);
        $this->setIfExists('motorcycle', $data ?? [], null);
        $this->setIfExists('pedestrian', $data ?? [], null);
        $this->setIfExists('low_speed_vehicle', $data ?? [], null);
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
     * Gets auto
     *
     * @return \OpenAPI\Client\Model\AutoCostingOptions|null
     */
    public function getAuto()
    {
        return $this->container['auto'];
    }

    /**
     * Sets auto
     *
     * @param \OpenAPI\Client\Model\AutoCostingOptions|null $auto auto
     *
     * @return self
     */
    public function setAuto($auto)
    {
        if (is_null($auto)) {
            throw new \InvalidArgumentException('non-nullable auto cannot be null');
        }
        $this->container['auto'] = $auto;

        return $this;
    }

    /**
     * Gets bus
     *
     * @return \OpenAPI\Client\Model\AutoCostingOptions|null
     */
    public function getBus()
    {
        return $this->container['bus'];
    }

    /**
     * Sets bus
     *
     * @param \OpenAPI\Client\Model\AutoCostingOptions|null $bus bus
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
     * Gets taxi
     *
     * @return \OpenAPI\Client\Model\AutoCostingOptions|null
     */
    public function getTaxi()
    {
        return $this->container['taxi'];
    }

    /**
     * Sets taxi
     *
     * @param \OpenAPI\Client\Model\AutoCostingOptions|null $taxi taxi
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
     * Gets truck
     *
     * @return \OpenAPI\Client\Model\TruckCostingOptions|null
     */
    public function getTruck()
    {
        return $this->container['truck'];
    }

    /**
     * Sets truck
     *
     * @param \OpenAPI\Client\Model\TruckCostingOptions|null $truck truck
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
     * Gets bicycle
     *
     * @return \OpenAPI\Client\Model\BicycleCostingOptions|null
     */
    public function getBicycle()
    {
        return $this->container['bicycle'];
    }

    /**
     * Sets bicycle
     *
     * @param \OpenAPI\Client\Model\BicycleCostingOptions|null $bicycle bicycle
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
     * Gets motor_scooter
     *
     * @return \OpenAPI\Client\Model\MotorScooterCostingOptions|null
     */
    public function getMotorScooter()
    {
        return $this->container['motor_scooter'];
    }

    /**
     * Sets motor_scooter
     *
     * @param \OpenAPI\Client\Model\MotorScooterCostingOptions|null $motor_scooter motor_scooter
     *
     * @return self
     */
    public function setMotorScooter($motor_scooter)
    {
        if (is_null($motor_scooter)) {
            throw new \InvalidArgumentException('non-nullable motor_scooter cannot be null');
        }
        $this->container['motor_scooter'] = $motor_scooter;

        return $this;
    }

    /**
     * Gets motorcycle
     *
     * @return \OpenAPI\Client\Model\MotorcycleCostingOptions|null
     */
    public function getMotorcycle()
    {
        return $this->container['motorcycle'];
    }

    /**
     * Sets motorcycle
     *
     * @param \OpenAPI\Client\Model\MotorcycleCostingOptions|null $motorcycle motorcycle
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
     * Gets pedestrian
     *
     * @return \OpenAPI\Client\Model\PedestrianCostingOptions|null
     */
    public function getPedestrian()
    {
        return $this->container['pedestrian'];
    }

    /**
     * Sets pedestrian
     *
     * @param \OpenAPI\Client\Model\PedestrianCostingOptions|null $pedestrian pedestrian
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
     * Gets low_speed_vehicle
     *
     * @return \OpenAPI\Client\Model\LowSpeedVehicleCostingOptions|null
     */
    public function getLowSpeedVehicle()
    {
        return $this->container['low_speed_vehicle'];
    }

    /**
     * Sets low_speed_vehicle
     *
     * @param \OpenAPI\Client\Model\LowSpeedVehicleCostingOptions|null $low_speed_vehicle low_speed_vehicle
     *
     * @return self
     */
    public function setLowSpeedVehicle($low_speed_vehicle)
    {
        if (is_null($low_speed_vehicle)) {
            throw new \InvalidArgumentException('non-nullable low_speed_vehicle cannot be null');
        }
        $this->container['low_speed_vehicle'] = $low_speed_vehicle;

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


