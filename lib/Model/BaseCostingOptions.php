<?php
/**
 * BaseCostingOptions
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
 * The version of the OpenAPI document: 6.6.0
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
 * BaseCostingOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BaseCostingOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'baseCostingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maneuver_penalty' => 'int',
        'gate_cost' => 'int',
        'gate_penalty' => 'int',
        'country_crossing_cost' => 'int',
        'country_crossing_penalty' => 'int',
        'service_penalty' => 'int',
        'service_factor' => 'float',
        'use_living_streets' => 'float',
        'use_ferry' => 'float',
        'ignore_restrictions' => 'bool',
        'ignore_non_vehicular_restrictions' => 'bool',
        'ignore_oneways' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'maneuver_penalty' => null,
        'gate_cost' => null,
        'gate_penalty' => null,
        'country_crossing_cost' => null,
        'country_crossing_penalty' => null,
        'service_penalty' => null,
        'service_factor' => 'double',
        'use_living_streets' => 'double',
        'use_ferry' => 'double',
        'ignore_restrictions' => null,
        'ignore_non_vehicular_restrictions' => null,
        'ignore_oneways' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'maneuver_penalty' => false,
        'gate_cost' => false,
        'gate_penalty' => false,
        'country_crossing_cost' => false,
        'country_crossing_penalty' => false,
        'service_penalty' => false,
        'service_factor' => false,
        'use_living_streets' => false,
        'use_ferry' => false,
        'ignore_restrictions' => false,
        'ignore_non_vehicular_restrictions' => false,
        'ignore_oneways' => false
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
        'maneuver_penalty' => 'maneuver_penalty',
        'gate_cost' => 'gate_cost',
        'gate_penalty' => 'gate_penalty',
        'country_crossing_cost' => 'country_crossing_cost',
        'country_crossing_penalty' => 'country_crossing_penalty',
        'service_penalty' => 'service_penalty',
        'service_factor' => 'service_factor',
        'use_living_streets' => 'use_living_streets',
        'use_ferry' => 'use_ferry',
        'ignore_restrictions' => 'ignore_restrictions',
        'ignore_non_vehicular_restrictions' => 'ignore_non_vehicular_restrictions',
        'ignore_oneways' => 'ignore_oneways'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maneuver_penalty' => 'setManeuverPenalty',
        'gate_cost' => 'setGateCost',
        'gate_penalty' => 'setGatePenalty',
        'country_crossing_cost' => 'setCountryCrossingCost',
        'country_crossing_penalty' => 'setCountryCrossingPenalty',
        'service_penalty' => 'setServicePenalty',
        'service_factor' => 'setServiceFactor',
        'use_living_streets' => 'setUseLivingStreets',
        'use_ferry' => 'setUseFerry',
        'ignore_restrictions' => 'setIgnoreRestrictions',
        'ignore_non_vehicular_restrictions' => 'setIgnoreNonVehicularRestrictions',
        'ignore_oneways' => 'setIgnoreOneways'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maneuver_penalty' => 'getManeuverPenalty',
        'gate_cost' => 'getGateCost',
        'gate_penalty' => 'getGatePenalty',
        'country_crossing_cost' => 'getCountryCrossingCost',
        'country_crossing_penalty' => 'getCountryCrossingPenalty',
        'service_penalty' => 'getServicePenalty',
        'service_factor' => 'getServiceFactor',
        'use_living_streets' => 'getUseLivingStreets',
        'use_ferry' => 'getUseFerry',
        'ignore_restrictions' => 'getIgnoreRestrictions',
        'ignore_non_vehicular_restrictions' => 'getIgnoreNonVehicularRestrictions',
        'ignore_oneways' => 'getIgnoreOneways'
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
        $this->setIfExists('maneuver_penalty', $data ?? [], 5);
        $this->setIfExists('gate_cost', $data ?? [], 15);
        $this->setIfExists('gate_penalty', $data ?? [], 300);
        $this->setIfExists('country_crossing_cost', $data ?? [], 600);
        $this->setIfExists('country_crossing_penalty', $data ?? [], 0);
        $this->setIfExists('service_penalty', $data ?? [], null);
        $this->setIfExists('service_factor', $data ?? [], 1);
        $this->setIfExists('use_living_streets', $data ?? [], null);
        $this->setIfExists('use_ferry', $data ?? [], 0.5);
        $this->setIfExists('ignore_restrictions', $data ?? [], null);
        $this->setIfExists('ignore_non_vehicular_restrictions', $data ?? [], null);
        $this->setIfExists('ignore_oneways', $data ?? [], null);
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

        if (!is_null($this->container['use_living_streets']) && ($this->container['use_living_streets'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_living_streets', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_living_streets']) && ($this->container['use_living_streets'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_living_streets', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_ferry']) && ($this->container['use_ferry'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_ferry', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_ferry']) && ($this->container['use_ferry'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_ferry', must be bigger than or equal to 0.";
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
     * Gets maneuver_penalty
     *
     * @return int|null
     */
    public function getManeuverPenalty()
    {
        return $this->container['maneuver_penalty'];
    }

    /**
     * Sets maneuver_penalty
     *
     * @param int|null $maneuver_penalty A penalty (in seconds) applied when transitioning between roads (determined by name).
     *
     * @return self
     */
    public function setManeuverPenalty($maneuver_penalty)
    {
        if (is_null($maneuver_penalty)) {
            throw new \InvalidArgumentException('non-nullable maneuver_penalty cannot be null');
        }
        $this->container['maneuver_penalty'] = $maneuver_penalty;

        return $this;
    }

    /**
     * Gets gate_cost
     *
     * @return int|null
     */
    public function getGateCost()
    {
        return $this->container['gate_cost'];
    }

    /**
     * Sets gate_cost
     *
     * @param int|null $gate_cost The estimated cost (in seconds) when a gate is encountered.
     *
     * @return self
     */
    public function setGateCost($gate_cost)
    {
        if (is_null($gate_cost)) {
            throw new \InvalidArgumentException('non-nullable gate_cost cannot be null');
        }
        $this->container['gate_cost'] = $gate_cost;

        return $this;
    }

    /**
     * Gets gate_penalty
     *
     * @return int|null
     */
    public function getGatePenalty()
    {
        return $this->container['gate_penalty'];
    }

    /**
     * Sets gate_penalty
     *
     * @param int|null $gate_penalty A penalty (in seconds) applied to the route cost when a gate is encountered. This penalty can be used to reduce the likelihood of suggesting a route with gates unless absolutely necessary.
     *
     * @return self
     */
    public function setGatePenalty($gate_penalty)
    {
        if (is_null($gate_penalty)) {
            throw new \InvalidArgumentException('non-nullable gate_penalty cannot be null');
        }
        $this->container['gate_penalty'] = $gate_penalty;

        return $this;
    }

    /**
     * Gets country_crossing_cost
     *
     * @return int|null
     */
    public function getCountryCrossingCost()
    {
        return $this->container['country_crossing_cost'];
    }

    /**
     * Sets country_crossing_cost
     *
     * @param int|null $country_crossing_cost The estimated cost (in seconds) when encountering an international border.
     *
     * @return self
     */
    public function setCountryCrossingCost($country_crossing_cost)
    {
        if (is_null($country_crossing_cost)) {
            throw new \InvalidArgumentException('non-nullable country_crossing_cost cannot be null');
        }
        $this->container['country_crossing_cost'] = $country_crossing_cost;

        return $this;
    }

    /**
     * Gets country_crossing_penalty
     *
     * @return int|null
     */
    public function getCountryCrossingPenalty()
    {
        return $this->container['country_crossing_penalty'];
    }

    /**
     * Sets country_crossing_penalty
     *
     * @param int|null $country_crossing_penalty A penalty applied to transitions to international border crossings. This penalty can be used to reduce the likelihood of suggesting a route with border crossings unless absolutely necessary.
     *
     * @return self
     */
    public function setCountryCrossingPenalty($country_crossing_penalty)
    {
        if (is_null($country_crossing_penalty)) {
            throw new \InvalidArgumentException('non-nullable country_crossing_penalty cannot be null');
        }
        $this->container['country_crossing_penalty'] = $country_crossing_penalty;

        return $this;
    }

    /**
     * Gets service_penalty
     *
     * @return int|null
     */
    public function getServicePenalty()
    {
        return $this->container['service_penalty'];
    }

    /**
     * Sets service_penalty
     *
     * @param int|null $service_penalty A penalty applied to transitions to service roads. This penalty can be used to reduce the likelihood of suggesting a route with service roads unless absolutely necessary. The default penalty is 15 for cars, busses, motor scooters, and motorcycles; and zero for others.
     *
     * @return self
     */
    public function setServicePenalty($service_penalty)
    {
        if (is_null($service_penalty)) {
            throw new \InvalidArgumentException('non-nullable service_penalty cannot be null');
        }
        $this->container['service_penalty'] = $service_penalty;

        return $this;
    }

    /**
     * Gets service_factor
     *
     * @return float|null
     */
    public function getServiceFactor()
    {
        return $this->container['service_factor'];
    }

    /**
     * Sets service_factor
     *
     * @param float|null $service_factor A factor that multiplies the cost when service roads are encountered. The default is 1.2 for cars and busses, and 1 for trucks, motor scooters, and motorcycles.
     *
     * @return self
     */
    public function setServiceFactor($service_factor)
    {
        if (is_null($service_factor)) {
            throw new \InvalidArgumentException('non-nullable service_factor cannot be null');
        }
        $this->container['service_factor'] = $service_factor;

        return $this;
    }

    /**
     * Gets use_living_streets
     *
     * @return float|null
     */
    public function getUseLivingStreets()
    {
        return $this->container['use_living_streets'];
    }

    /**
     * Sets use_living_streets
     *
     * @param float|null $use_living_streets A measure of willingness to take living streets. Values near 0 attempt to avoid them, and values near 1 will favour them. Note that as some routes may be impossible without living streets, 0 does not guarantee avoidance of them. The default value is 0 for trucks; 0.1 for other motor vehicles; 0.5 for bicycles; and 0.6 for pedestrians.
     *
     * @return self
     */
    public function setUseLivingStreets($use_living_streets)
    {
        if (is_null($use_living_streets)) {
            throw new \InvalidArgumentException('non-nullable use_living_streets cannot be null');
        }

        if (($use_living_streets > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_living_streets when calling BaseCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_living_streets < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_living_streets when calling BaseCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_living_streets'] = $use_living_streets;

        return $this;
    }

    /**
     * Gets use_ferry
     *
     * @return float|null
     */
    public function getUseFerry()
    {
        return $this->container['use_ferry'];
    }

    /**
     * Sets use_ferry
     *
     * @param float|null $use_ferry A measure of willingness to take ferries. Values near 0 attempt to avoid ferries, and values near 1 will favour them. Note that as some routes may be impossible without ferries, 0 does not guarantee avoidance of them.
     *
     * @return self
     */
    public function setUseFerry($use_ferry)
    {
        if (is_null($use_ferry)) {
            throw new \InvalidArgumentException('non-nullable use_ferry cannot be null');
        }

        if (($use_ferry > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_ferry when calling BaseCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_ferry < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_ferry when calling BaseCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_ferry'] = $use_ferry;

        return $this;
    }

    /**
     * Gets ignore_restrictions
     *
     * @return bool|null
     */
    public function getIgnoreRestrictions()
    {
        return $this->container['ignore_restrictions'];
    }

    /**
     * Sets ignore_restrictions
     *
     * @param bool|null $ignore_restrictions If set to true, ignores any restrictions (eg: turn and conditional restrictions). Useful for matching GPS traces to the road network regardless of restrictions.
     *
     * @return self
     */
    public function setIgnoreRestrictions($ignore_restrictions)
    {
        if (is_null($ignore_restrictions)) {
            throw new \InvalidArgumentException('non-nullable ignore_restrictions cannot be null');
        }
        $this->container['ignore_restrictions'] = $ignore_restrictions;

        return $this;
    }

    /**
     * Gets ignore_non_vehicular_restrictions
     *
     * @return bool|null
     */
    public function getIgnoreNonVehicularRestrictions()
    {
        return $this->container['ignore_non_vehicular_restrictions'];
    }

    /**
     * Sets ignore_non_vehicular_restrictions
     *
     * @param bool|null $ignore_non_vehicular_restrictions If set to true, ignores most restrictions (eg: turn and conditional restrictions), but still respects restrictions that impact vehicle safety such as weight and size.
     *
     * @return self
     */
    public function setIgnoreNonVehicularRestrictions($ignore_non_vehicular_restrictions)
    {
        if (is_null($ignore_non_vehicular_restrictions)) {
            throw new \InvalidArgumentException('non-nullable ignore_non_vehicular_restrictions cannot be null');
        }
        $this->container['ignore_non_vehicular_restrictions'] = $ignore_non_vehicular_restrictions;

        return $this;
    }

    /**
     * Gets ignore_oneways
     *
     * @return bool|null
     */
    public function getIgnoreOneways()
    {
        return $this->container['ignore_oneways'];
    }

    /**
     * Sets ignore_oneways
     *
     * @param bool|null $ignore_oneways If set to true, ignores directional restrictions on roads. Useful for matching GPS traces to the road network regardless of restrictions.
     *
     * @return self
     */
    public function setIgnoreOneways($ignore_oneways)
    {
        if (is_null($ignore_oneways)) {
            throw new \InvalidArgumentException('non-nullable ignore_oneways cannot be null');
        }
        $this->container['ignore_oneways'] = $ignore_oneways;

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


