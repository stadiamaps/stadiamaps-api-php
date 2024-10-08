<?php
/**
 * OsrmRouteStep
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
 * OsrmRouteStep Class Doc Comment
 *
 * @category Class
 * @description A maneuver such as a turn or merge, followed by travel along a single road or path.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OsrmRouteStep implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'osrmRouteStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'distance' => 'float',
        'duration' => 'float',
        'geometry' => 'string',
        'weight' => 'float',
        'name' => 'string',
        'ref' => 'string',
        'pronunciation' => 'string',
        'destinations' => 'string',
        'exits' => 'string',
        'mode' => 'string',
        'maneuver' => '\OpenAPI\Client\Model\OsrmStepManeuver',
        'intersections' => '\OpenAPI\Client\Model\OsrmIntersection[]',
        'rotary_name' => 'string',
        'rotary_pronunciation' => 'string',
        'driving_side' => 'string',
        'voice_instructions' => '\OpenAPI\Client\Model\OsrmVoiceInstruction[]',
        'banner_instructions' => '\OpenAPI\Client\Model\OsrmBannerInstruction[]',
        'speed_limit_sign' => 'string',
        'speed_limit_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'distance' => 'double',
        'duration' => 'double',
        'geometry' => null,
        'weight' => 'double',
        'name' => null,
        'ref' => null,
        'pronunciation' => null,
        'destinations' => null,
        'exits' => null,
        'mode' => null,
        'maneuver' => null,
        'intersections' => null,
        'rotary_name' => null,
        'rotary_pronunciation' => null,
        'driving_side' => null,
        'voice_instructions' => null,
        'banner_instructions' => null,
        'speed_limit_sign' => null,
        'speed_limit_unit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'distance' => false,
        'duration' => false,
        'geometry' => false,
        'weight' => false,
        'name' => false,
        'ref' => false,
        'pronunciation' => false,
        'destinations' => false,
        'exits' => false,
        'mode' => false,
        'maneuver' => false,
        'intersections' => false,
        'rotary_name' => false,
        'rotary_pronunciation' => false,
        'driving_side' => false,
        'voice_instructions' => false,
        'banner_instructions' => false,
        'speed_limit_sign' => false,
        'speed_limit_unit' => false
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
        'distance' => 'distance',
        'duration' => 'duration',
        'geometry' => 'geometry',
        'weight' => 'weight',
        'name' => 'name',
        'ref' => 'ref',
        'pronunciation' => 'pronunciation',
        'destinations' => 'destinations',
        'exits' => 'exits',
        'mode' => 'mode',
        'maneuver' => 'maneuver',
        'intersections' => 'intersections',
        'rotary_name' => 'rotary_name',
        'rotary_pronunciation' => 'rotary_pronunciation',
        'driving_side' => 'driving_side',
        'voice_instructions' => 'voiceInstructions',
        'banner_instructions' => 'bannerInstructions',
        'speed_limit_sign' => 'speedLimitSign',
        'speed_limit_unit' => 'speedLimitUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'distance' => 'setDistance',
        'duration' => 'setDuration',
        'geometry' => 'setGeometry',
        'weight' => 'setWeight',
        'name' => 'setName',
        'ref' => 'setRef',
        'pronunciation' => 'setPronunciation',
        'destinations' => 'setDestinations',
        'exits' => 'setExits',
        'mode' => 'setMode',
        'maneuver' => 'setManeuver',
        'intersections' => 'setIntersections',
        'rotary_name' => 'setRotaryName',
        'rotary_pronunciation' => 'setRotaryPronunciation',
        'driving_side' => 'setDrivingSide',
        'voice_instructions' => 'setVoiceInstructions',
        'banner_instructions' => 'setBannerInstructions',
        'speed_limit_sign' => 'setSpeedLimitSign',
        'speed_limit_unit' => 'setSpeedLimitUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'distance' => 'getDistance',
        'duration' => 'getDuration',
        'geometry' => 'getGeometry',
        'weight' => 'getWeight',
        'name' => 'getName',
        'ref' => 'getRef',
        'pronunciation' => 'getPronunciation',
        'destinations' => 'getDestinations',
        'exits' => 'getExits',
        'mode' => 'getMode',
        'maneuver' => 'getManeuver',
        'intersections' => 'getIntersections',
        'rotary_name' => 'getRotaryName',
        'rotary_pronunciation' => 'getRotaryPronunciation',
        'driving_side' => 'getDrivingSide',
        'voice_instructions' => 'getVoiceInstructions',
        'banner_instructions' => 'getBannerInstructions',
        'speed_limit_sign' => 'getSpeedLimitSign',
        'speed_limit_unit' => 'getSpeedLimitUnit'
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

    public const DRIVING_SIDE_LEFT = 'left';
    public const DRIVING_SIDE_RIGHT = 'right';
    public const SPEED_LIMIT_SIGN_MUTCD = 'mutcd';
    public const SPEED_LIMIT_SIGN_VIENNA = 'vienna';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDrivingSideAllowableValues()
    {
        return [
            self::DRIVING_SIDE_LEFT,
            self::DRIVING_SIDE_RIGHT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpeedLimitSignAllowableValues()
    {
        return [
            self::SPEED_LIMIT_SIGN_MUTCD,
            self::SPEED_LIMIT_SIGN_VIENNA,
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
        $this->setIfExists('distance', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('geometry', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('pronunciation', $data ?? [], null);
        $this->setIfExists('destinations', $data ?? [], null);
        $this->setIfExists('exits', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('maneuver', $data ?? [], null);
        $this->setIfExists('intersections', $data ?? [], null);
        $this->setIfExists('rotary_name', $data ?? [], null);
        $this->setIfExists('rotary_pronunciation', $data ?? [], null);
        $this->setIfExists('driving_side', $data ?? [], null);
        $this->setIfExists('voice_instructions', $data ?? [], null);
        $this->setIfExists('banner_instructions', $data ?? [], null);
        $this->setIfExists('speed_limit_sign', $data ?? [], null);
        $this->setIfExists('speed_limit_unit', $data ?? [], null);
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

        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['geometry'] === null) {
            $invalidProperties[] = "'geometry' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['maneuver'] === null) {
            $invalidProperties[] = "'maneuver' can't be null";
        }
        $allowedValues = $this->getDrivingSideAllowableValues();
        if (!is_null($this->container['driving_side']) && !in_array($this->container['driving_side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'driving_side', must be one of '%s'",
                $this->container['driving_side'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpeedLimitSignAllowableValues();
        if (!is_null($this->container['speed_limit_sign']) && !in_array($this->container['speed_limit_sign'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'speed_limit_sign', must be one of '%s'",
                $this->container['speed_limit_sign'],
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
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance The distance traveled by the route, in meters.
     *
     * @return self
     */
    public function setDistance($distance)
    {
        if (is_null($distance)) {
            throw new \InvalidArgumentException('non-nullable distance cannot be null');
        }
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration The estimated travel time, in number of seconds.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets geometry
     *
     * @return string
     */
    public function getGeometry()
    {
        return $this->container['geometry'];
    }

    /**
     * Sets geometry
     *
     * @param string $geometry An encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm) with 6 digits of decimal precision.
     *
     * @return self
     */
    public function setGeometry($geometry)
    {
        if (is_null($geometry)) {
            throw new \InvalidArgumentException('non-nullable geometry cannot be null');
        }
        $this->container['geometry'] = $geometry;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the segment (ex: road) being traversed
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string|null $ref A reference number of code for the segment being traversed.
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            throw new \InvalidArgumentException('non-nullable ref cannot be null');
        }
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets pronunciation
     *
     * @return string|null
     */
    public function getPronunciation()
    {
        return $this->container['pronunciation'];
    }

    /**
     * Sets pronunciation
     *
     * @param string|null $pronunciation Pronunciation of the name (if available). The format of this varies by implementation/vendor.
     *
     * @return self
     */
    public function setPronunciation($pronunciation)
    {
        if (is_null($pronunciation)) {
            throw new \InvalidArgumentException('non-nullable pronunciation cannot be null');
        }
        $this->container['pronunciation'] = $pronunciation;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return string|null
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param string|null $destinations destinations
     *
     * @return self
     */
    public function setDestinations($destinations)
    {
        if (is_null($destinations)) {
            throw new \InvalidArgumentException('non-nullable destinations cannot be null');
        }
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets exits
     *
     * @return string|null
     */
    public function getExits()
    {
        return $this->container['exits'];
    }

    /**
     * Sets exits
     *
     * @param string|null $exits exits
     *
     * @return self
     */
    public function setExits($exits)
    {
        if (is_null($exits)) {
            throw new \InvalidArgumentException('non-nullable exits cannot be null');
        }
        $this->container['exits'] = $exits;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode The mode of travel.
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets maneuver
     *
     * @return \OpenAPI\Client\Model\OsrmStepManeuver
     */
    public function getManeuver()
    {
        return $this->container['maneuver'];
    }

    /**
     * Sets maneuver
     *
     * @param \OpenAPI\Client\Model\OsrmStepManeuver $maneuver maneuver
     *
     * @return self
     */
    public function setManeuver($maneuver)
    {
        if (is_null($maneuver)) {
            throw new \InvalidArgumentException('non-nullable maneuver cannot be null');
        }
        $this->container['maneuver'] = $maneuver;

        return $this;
    }

    /**
     * Gets intersections
     *
     * @return \OpenAPI\Client\Model\OsrmIntersection[]|null
     */
    public function getIntersections()
    {
        return $this->container['intersections'];
    }

    /**
     * Sets intersections
     *
     * @param \OpenAPI\Client\Model\OsrmIntersection[]|null $intersections intersections
     *
     * @return self
     */
    public function setIntersections($intersections)
    {
        if (is_null($intersections)) {
            throw new \InvalidArgumentException('non-nullable intersections cannot be null');
        }
        $this->container['intersections'] = $intersections;

        return $this;
    }

    /**
     * Gets rotary_name
     *
     * @return string|null
     */
    public function getRotaryName()
    {
        return $this->container['rotary_name'];
    }

    /**
     * Sets rotary_name
     *
     * @param string|null $rotary_name The name of the traffic circle.
     *
     * @return self
     */
    public function setRotaryName($rotary_name)
    {
        if (is_null($rotary_name)) {
            throw new \InvalidArgumentException('non-nullable rotary_name cannot be null');
        }
        $this->container['rotary_name'] = $rotary_name;

        return $this;
    }

    /**
     * Gets rotary_pronunciation
     *
     * @return string|null
     */
    public function getRotaryPronunciation()
    {
        return $this->container['rotary_pronunciation'];
    }

    /**
     * Sets rotary_pronunciation
     *
     * @param string|null $rotary_pronunciation Pronunciation of the rotary name (if available). The format of this varies by implementation/vendor.
     *
     * @return self
     */
    public function setRotaryPronunciation($rotary_pronunciation)
    {
        if (is_null($rotary_pronunciation)) {
            throw new \InvalidArgumentException('non-nullable rotary_pronunciation cannot be null');
        }
        $this->container['rotary_pronunciation'] = $rotary_pronunciation;

        return $this;
    }

    /**
     * Gets driving_side
     *
     * @return string|null
     */
    public function getDrivingSide()
    {
        return $this->container['driving_side'];
    }

    /**
     * Sets driving_side
     *
     * @param string|null $driving_side The side of the road on which driving is legal for this step.
     *
     * @return self
     */
    public function setDrivingSide($driving_side)
    {
        if (is_null($driving_side)) {
            throw new \InvalidArgumentException('non-nullable driving_side cannot be null');
        }
        $allowedValues = $this->getDrivingSideAllowableValues();
        if (!in_array($driving_side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'driving_side', must be one of '%s'",
                    $driving_side,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['driving_side'] = $driving_side;

        return $this;
    }

    /**
     * Gets voice_instructions
     *
     * @return \OpenAPI\Client\Model\OsrmVoiceInstruction[]|null
     */
    public function getVoiceInstructions()
    {
        return $this->container['voice_instructions'];
    }

    /**
     * Sets voice_instructions
     *
     * @param \OpenAPI\Client\Model\OsrmVoiceInstruction[]|null $voice_instructions A list of announcements which should be spoken at various points along the maneuver.
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
     * Gets banner_instructions
     *
     * @return \OpenAPI\Client\Model\OsrmBannerInstruction[]|null
     */
    public function getBannerInstructions()
    {
        return $this->container['banner_instructions'];
    }

    /**
     * Sets banner_instructions
     *
     * @param \OpenAPI\Client\Model\OsrmBannerInstruction[]|null $banner_instructions A list of announcements which should be displayed prominently on screen at various points along the maneuver.
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
     * Gets speed_limit_sign
     *
     * @return string|null
     */
    public function getSpeedLimitSign()
    {
        return $this->container['speed_limit_sign'];
    }

    /**
     * Sets speed_limit_sign
     *
     * @param string|null $speed_limit_sign The style of speed limit signs used along the step.
     *
     * @return self
     */
    public function setSpeedLimitSign($speed_limit_sign)
    {
        if (is_null($speed_limit_sign)) {
            throw new \InvalidArgumentException('non-nullable speed_limit_sign cannot be null');
        }
        $allowedValues = $this->getSpeedLimitSignAllowableValues();
        if (!in_array($speed_limit_sign, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'speed_limit_sign', must be one of '%s'",
                    $speed_limit_sign,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['speed_limit_sign'] = $speed_limit_sign;

        return $this;
    }

    /**
     * Gets speed_limit_unit
     *
     * @return string|null
     */
    public function getSpeedLimitUnit()
    {
        return $this->container['speed_limit_unit'];
    }

    /**
     * Sets speed_limit_unit
     *
     * @param string|null $speed_limit_unit The unit of measure that is used locally along the step. This may be different from the unit used in maxspeed annotations, and is provided so that apps can localize their display.
     *
     * @return self
     */
    public function setSpeedLimitUnit($speed_limit_unit)
    {
        if (is_null($speed_limit_unit)) {
            throw new \InvalidArgumentException('non-nullable speed_limit_unit cannot be null');
        }
        $this->container['speed_limit_unit'] = $speed_limit_unit;

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


