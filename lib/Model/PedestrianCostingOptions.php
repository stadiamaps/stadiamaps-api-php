<?php
/**
 * PedestrianCostingOptions
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
 * PedestrianCostingOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PedestrianCostingOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pedestrianCostingOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'walking_speed' => 'int',
        'walkway_factor' => 'float',
        'sidewalk_factor' => 'float',
        'alley_factor' => 'float',
        'driveway_factor' => 'float',
        'step_penalty' => 'int',
        'use_ferry' => 'float',
        'use_living_streets' => 'float',
        'use_tracks' => 'float',
        'use_hills' => 'float',
        'use_lit' => 'float',
        'service_penalty' => 'int',
        'service_factor' => 'float',
        'max_hiking_difficulty' => 'int',
        'bss_rent_cost' => 'int',
        'bss_rent_penalty' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'walking_speed' => null,
        'walkway_factor' => 'double',
        'sidewalk_factor' => 'double',
        'alley_factor' => 'double',
        'driveway_factor' => 'double',
        'step_penalty' => null,
        'use_ferry' => 'double',
        'use_living_streets' => 'double',
        'use_tracks' => 'double',
        'use_hills' => 'double',
        'use_lit' => 'double',
        'service_penalty' => null,
        'service_factor' => 'double',
        'max_hiking_difficulty' => null,
        'bss_rent_cost' => null,
        'bss_rent_penalty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'walking_speed' => false,
        'walkway_factor' => false,
        'sidewalk_factor' => false,
        'alley_factor' => false,
        'driveway_factor' => false,
        'step_penalty' => false,
        'use_ferry' => false,
        'use_living_streets' => false,
        'use_tracks' => false,
        'use_hills' => false,
        'use_lit' => false,
        'service_penalty' => false,
        'service_factor' => false,
        'max_hiking_difficulty' => false,
        'bss_rent_cost' => false,
        'bss_rent_penalty' => false
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
        'walking_speed' => 'walking_speed',
        'walkway_factor' => 'walkway_factor',
        'sidewalk_factor' => 'sidewalk_factor',
        'alley_factor' => 'alley_factor',
        'driveway_factor' => 'driveway_factor',
        'step_penalty' => 'step_penalty',
        'use_ferry' => 'use_ferry',
        'use_living_streets' => 'use_living_streets',
        'use_tracks' => 'use_tracks',
        'use_hills' => 'use_hills',
        'use_lit' => 'use_lit',
        'service_penalty' => 'service_penalty',
        'service_factor' => 'service_factor',
        'max_hiking_difficulty' => 'max_hiking_difficulty',
        'bss_rent_cost' => 'bss_rent_cost',
        'bss_rent_penalty' => 'bss_rent_penalty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'walking_speed' => 'setWalkingSpeed',
        'walkway_factor' => 'setWalkwayFactor',
        'sidewalk_factor' => 'setSidewalkFactor',
        'alley_factor' => 'setAlleyFactor',
        'driveway_factor' => 'setDrivewayFactor',
        'step_penalty' => 'setStepPenalty',
        'use_ferry' => 'setUseFerry',
        'use_living_streets' => 'setUseLivingStreets',
        'use_tracks' => 'setUseTracks',
        'use_hills' => 'setUseHills',
        'use_lit' => 'setUseLit',
        'service_penalty' => 'setServicePenalty',
        'service_factor' => 'setServiceFactor',
        'max_hiking_difficulty' => 'setMaxHikingDifficulty',
        'bss_rent_cost' => 'setBssRentCost',
        'bss_rent_penalty' => 'setBssRentPenalty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'walking_speed' => 'getWalkingSpeed',
        'walkway_factor' => 'getWalkwayFactor',
        'sidewalk_factor' => 'getSidewalkFactor',
        'alley_factor' => 'getAlleyFactor',
        'driveway_factor' => 'getDrivewayFactor',
        'step_penalty' => 'getStepPenalty',
        'use_ferry' => 'getUseFerry',
        'use_living_streets' => 'getUseLivingStreets',
        'use_tracks' => 'getUseTracks',
        'use_hills' => 'getUseHills',
        'use_lit' => 'getUseLit',
        'service_penalty' => 'getServicePenalty',
        'service_factor' => 'getServiceFactor',
        'max_hiking_difficulty' => 'getMaxHikingDifficulty',
        'bss_rent_cost' => 'getBssRentCost',
        'bss_rent_penalty' => 'getBssRentPenalty'
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
        $this->setIfExists('walking_speed', $data ?? [], null);
        $this->setIfExists('walkway_factor', $data ?? [], 1);
        $this->setIfExists('sidewalk_factor', $data ?? [], 1);
        $this->setIfExists('alley_factor', $data ?? [], 2);
        $this->setIfExists('driveway_factor', $data ?? [], 5);
        $this->setIfExists('step_penalty', $data ?? [], 30);
        $this->setIfExists('use_ferry', $data ?? [], 0.5);
        $this->setIfExists('use_living_streets', $data ?? [], null);
        $this->setIfExists('use_tracks', $data ?? [], null);
        $this->setIfExists('use_hills', $data ?? [], 0.5);
        $this->setIfExists('use_lit', $data ?? [], 0);
        $this->setIfExists('service_penalty', $data ?? [], null);
        $this->setIfExists('service_factor', $data ?? [], 1);
        $this->setIfExists('max_hiking_difficulty', $data ?? [], 1);
        $this->setIfExists('bss_rent_cost', $data ?? [], 120);
        $this->setIfExists('bss_rent_penalty', $data ?? [], 0);
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

        if (!is_null($this->container['walking_speed']) && ($this->container['walking_speed'] > 25)) {
            $invalidProperties[] = "invalid value for 'walking_speed', must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['walking_speed']) && ($this->container['walking_speed'] < 0)) {
            $invalidProperties[] = "invalid value for 'walking_speed', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_ferry']) && ($this->container['use_ferry'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_ferry', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_ferry']) && ($this->container['use_ferry'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_ferry', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_living_streets']) && ($this->container['use_living_streets'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_living_streets', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_living_streets']) && ($this->container['use_living_streets'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_living_streets', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_tracks']) && ($this->container['use_tracks'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_tracks', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_tracks']) && ($this->container['use_tracks'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_tracks', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_hills']) && ($this->container['use_hills'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_hills', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_hills']) && ($this->container['use_hills'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_hills', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['use_lit']) && ($this->container['use_lit'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_lit', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_lit']) && ($this->container['use_lit'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_lit', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['max_hiking_difficulty']) && ($this->container['max_hiking_difficulty'] > 6)) {
            $invalidProperties[] = "invalid value for 'max_hiking_difficulty', must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['max_hiking_difficulty']) && ($this->container['max_hiking_difficulty'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_hiking_difficulty', must be bigger than or equal to 1.";
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
     * Gets walking_speed
     *
     * @return int|null
     */
    public function getWalkingSpeed()
    {
        return $this->container['walking_speed'];
    }

    /**
     * Sets walking_speed
     *
     * @param int|null $walking_speed Walking speed in kph.
     *
     * @return self
     */
    public function setWalkingSpeed($walking_speed)
    {
        if (is_null($walking_speed)) {
            throw new \InvalidArgumentException('non-nullable walking_speed cannot be null');
        }

        if (($walking_speed > 25)) {
            throw new \InvalidArgumentException('invalid value for $walking_speed when calling PedestrianCostingOptions., must be smaller than or equal to 25.');
        }
        if (($walking_speed < 0)) {
            throw new \InvalidArgumentException('invalid value for $walking_speed when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['walking_speed'] = $walking_speed;

        return $this;
    }

    /**
     * Gets walkway_factor
     *
     * @return float|null
     */
    public function getWalkwayFactor()
    {
        return $this->container['walkway_factor'];
    }

    /**
     * Sets walkway_factor
     *
     * @param float|null $walkway_factor A factor that multiplies the cost when walkways are encountered.
     *
     * @return self
     */
    public function setWalkwayFactor($walkway_factor)
    {
        if (is_null($walkway_factor)) {
            throw new \InvalidArgumentException('non-nullable walkway_factor cannot be null');
        }
        $this->container['walkway_factor'] = $walkway_factor;

        return $this;
    }

    /**
     * Gets sidewalk_factor
     *
     * @return float|null
     */
    public function getSidewalkFactor()
    {
        return $this->container['sidewalk_factor'];
    }

    /**
     * Sets sidewalk_factor
     *
     * @param float|null $sidewalk_factor A factor that multiplies the cost when sidewalks are encountered.
     *
     * @return self
     */
    public function setSidewalkFactor($sidewalk_factor)
    {
        if (is_null($sidewalk_factor)) {
            throw new \InvalidArgumentException('non-nullable sidewalk_factor cannot be null');
        }
        $this->container['sidewalk_factor'] = $sidewalk_factor;

        return $this;
    }

    /**
     * Gets alley_factor
     *
     * @return float|null
     */
    public function getAlleyFactor()
    {
        return $this->container['alley_factor'];
    }

    /**
     * Sets alley_factor
     *
     * @param float|null $alley_factor A factor that multiplies the cost when alleys are encountered.
     *
     * @return self
     */
    public function setAlleyFactor($alley_factor)
    {
        if (is_null($alley_factor)) {
            throw new \InvalidArgumentException('non-nullable alley_factor cannot be null');
        }
        $this->container['alley_factor'] = $alley_factor;

        return $this;
    }

    /**
     * Gets driveway_factor
     *
     * @return float|null
     */
    public function getDrivewayFactor()
    {
        return $this->container['driveway_factor'];
    }

    /**
     * Sets driveway_factor
     *
     * @param float|null $driveway_factor A factor that multiplies the cost when driveways are encountered.
     *
     * @return self
     */
    public function setDrivewayFactor($driveway_factor)
    {
        if (is_null($driveway_factor)) {
            throw new \InvalidArgumentException('non-nullable driveway_factor cannot be null');
        }
        $this->container['driveway_factor'] = $driveway_factor;

        return $this;
    }

    /**
     * Gets step_penalty
     *
     * @return int|null
     */
    public function getStepPenalty()
    {
        return $this->container['step_penalty'];
    }

    /**
     * Sets step_penalty
     *
     * @param int|null $step_penalty A penalty (in seconds) added to each transition onto a path with steps or stairs.
     *
     * @return self
     */
    public function setStepPenalty($step_penalty)
    {
        if (is_null($step_penalty)) {
            throw new \InvalidArgumentException('non-nullable step_penalty cannot be null');
        }
        $this->container['step_penalty'] = $step_penalty;

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
            throw new \InvalidArgumentException('invalid value for $use_ferry when calling PedestrianCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_ferry < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_ferry when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_ferry'] = $use_ferry;

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
            throw new \InvalidArgumentException('invalid value for $use_living_streets when calling PedestrianCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_living_streets < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_living_streets when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_living_streets'] = $use_living_streets;

        return $this;
    }

    /**
     * Gets use_tracks
     *
     * @return float|null
     */
    public function getUseTracks()
    {
        return $this->container['use_tracks'];
    }

    /**
     * Sets use_tracks
     *
     * @param float|null $use_tracks A measure of willingness to take track roads. Values near 0 attempt to avoid them, and values near 1 will favour them. Note that as some routes may be impossible without track roads, 0 does not guarantee avoidance of them. The default value is 0 for automobiles, busses, and trucks; and 0.5 for all other costing modes.
     *
     * @return self
     */
    public function setUseTracks($use_tracks)
    {
        if (is_null($use_tracks)) {
            throw new \InvalidArgumentException('non-nullable use_tracks cannot be null');
        }

        if (($use_tracks > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_tracks when calling PedestrianCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_tracks < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_tracks when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_tracks'] = $use_tracks;

        return $this;
    }

    /**
     * Gets use_hills
     *
     * @return float|null
     */
    public function getUseHills()
    {
        return $this->container['use_hills'];
    }

    /**
     * Sets use_hills
     *
     * @param float|null $use_hills A measure of willingness to take tackle hills. Values near 0 attempt to avoid hills and steeper grades even if it means a longer route, and values near 1 indicates that the user does not fear them. Note that as some routes may be impossible without hills, 0 does not guarantee avoidance of them.
     *
     * @return self
     */
    public function setUseHills($use_hills)
    {
        if (is_null($use_hills)) {
            throw new \InvalidArgumentException('non-nullable use_hills cannot be null');
        }

        if (($use_hills > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_hills when calling PedestrianCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_hills < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_hills when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_hills'] = $use_hills;

        return $this;
    }

    /**
     * Gets use_lit
     *
     * @return float|null
     */
    public function getUseLit()
    {
        return $this->container['use_lit'];
    }

    /**
     * Sets use_lit
     *
     * @param float|null $use_lit A measure of preference for streets that are lit. 0 indicates indifference toward lit streets, and 1 indicates that unlit streets should be avoided. Note that even with values near 1, there is no guarantee that the returned route will include lit segments.
     *
     * @return self
     */
    public function setUseLit($use_lit)
    {
        if (is_null($use_lit)) {
            throw new \InvalidArgumentException('non-nullable use_lit cannot be null');
        }

        if (($use_lit > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_lit when calling PedestrianCostingOptions., must be smaller than or equal to 1.');
        }
        if (($use_lit < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_lit when calling PedestrianCostingOptions., must be bigger than or equal to 0.');
        }

        $this->container['use_lit'] = $use_lit;

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
     * Gets max_hiking_difficulty
     *
     * @return int|null
     */
    public function getMaxHikingDifficulty()
    {
        return $this->container['max_hiking_difficulty'];
    }

    /**
     * Sets max_hiking_difficulty
     *
     * @param int|null $max_hiking_difficulty The maximum difficulty of hiking trails allowed. This corresponds to the OSM `sac_scale`.
     *
     * @return self
     */
    public function setMaxHikingDifficulty($max_hiking_difficulty)
    {
        if (is_null($max_hiking_difficulty)) {
            throw new \InvalidArgumentException('non-nullable max_hiking_difficulty cannot be null');
        }

        if (($max_hiking_difficulty > 6)) {
            throw new \InvalidArgumentException('invalid value for $max_hiking_difficulty when calling PedestrianCostingOptions., must be smaller than or equal to 6.');
        }
        if (($max_hiking_difficulty < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_hiking_difficulty when calling PedestrianCostingOptions., must be bigger than or equal to 1.');
        }

        $this->container['max_hiking_difficulty'] = $max_hiking_difficulty;

        return $this;
    }

    /**
     * Gets bss_rent_cost
     *
     * @return int|null
     */
    public function getBssRentCost()
    {
        return $this->container['bss_rent_cost'];
    }

    /**
     * Sets bss_rent_cost
     *
     * @param int|null $bss_rent_cost The estimated cost (in seconds) to rent a bicycle from a sharing station in `bikeshare` mode.
     *
     * @return self
     */
    public function setBssRentCost($bss_rent_cost)
    {
        if (is_null($bss_rent_cost)) {
            throw new \InvalidArgumentException('non-nullable bss_rent_cost cannot be null');
        }
        $this->container['bss_rent_cost'] = $bss_rent_cost;

        return $this;
    }

    /**
     * Gets bss_rent_penalty
     *
     * @return int|null
     */
    public function getBssRentPenalty()
    {
        return $this->container['bss_rent_penalty'];
    }

    /**
     * Sets bss_rent_penalty
     *
     * @param int|null $bss_rent_penalty A penalty (in seconds) to rent a bicycle in `bikeshare` mode.
     *
     * @return self
     */
    public function setBssRentPenalty($bss_rent_penalty)
    {
        if (is_null($bss_rent_penalty)) {
            throw new \InvalidArgumentException('non-nullable bss_rent_penalty cannot be null');
        }
        $this->container['bss_rent_penalty'] = $bss_rent_penalty;

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


