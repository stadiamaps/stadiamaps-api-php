<?php
/**
 * LocateDetailedEdge
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
 * The version of the OpenAPI document: 6.6.2
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
 * LocateDetailedEdge Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LocateDetailedEdge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'locateDetailedEdge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sidewalk_left' => 'bool',
        'sidewalk_right' => 'bool',
        'lane_count' => 'int',
        'stop_sign' => 'bool',
        'sac_scale' => 'string',
        'yield_sign' => 'bool',
        'not_thru' => 'bool',
        'forward' => 'bool',
        'end_node' => '\OpenAPI\Client\Model\NodeId',
        'truck_route' => 'bool',
        'speeds' => '\OpenAPI\Client\Model\Speeds',
        'bike_network' => 'bool',
        'round_about' => 'bool',
        'traffic_signal' => 'bool',
        'access_restriction' => 'bool',
        'destination_only' => 'bool',
        'geo_attributes' => '\OpenAPI\Client\Model\GeoAttributes',
        'start_restriction' => '\OpenAPI\Client\Model\Restrictions',
        'cycle_lane' => 'string',
        'end_restriction' => '\OpenAPI\Client\Model\Restrictions',
        'seasonal' => 'bool',
        'country_crossing' => 'bool',
        'part_of_complex_restriction' => 'bool',
        'has_sign' => 'bool',
        'access' => '\OpenAPI\Client\Model\Restrictions',
        'bridge' => 'bool',
        'classification' => '\OpenAPI\Client\Model\HighwayClassification',
        'toll' => 'bool',
        'tunnel' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sidewalk_left' => null,
        'sidewalk_right' => null,
        'lane_count' => null,
        'stop_sign' => null,
        'sac_scale' => null,
        'yield_sign' => null,
        'not_thru' => null,
        'forward' => null,
        'end_node' => null,
        'truck_route' => null,
        'speeds' => null,
        'bike_network' => null,
        'round_about' => null,
        'traffic_signal' => null,
        'access_restriction' => null,
        'destination_only' => null,
        'geo_attributes' => null,
        'start_restriction' => null,
        'cycle_lane' => null,
        'end_restriction' => null,
        'seasonal' => null,
        'country_crossing' => null,
        'part_of_complex_restriction' => null,
        'has_sign' => null,
        'access' => null,
        'bridge' => null,
        'classification' => null,
        'toll' => null,
        'tunnel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sidewalk_left' => false,
        'sidewalk_right' => false,
        'lane_count' => false,
        'stop_sign' => false,
        'sac_scale' => false,
        'yield_sign' => false,
        'not_thru' => false,
        'forward' => false,
        'end_node' => false,
        'truck_route' => false,
        'speeds' => false,
        'bike_network' => false,
        'round_about' => false,
        'traffic_signal' => false,
        'access_restriction' => false,
        'destination_only' => false,
        'geo_attributes' => false,
        'start_restriction' => false,
        'cycle_lane' => false,
        'end_restriction' => false,
        'seasonal' => false,
        'country_crossing' => false,
        'part_of_complex_restriction' => false,
        'has_sign' => false,
        'access' => false,
        'bridge' => false,
        'classification' => false,
        'toll' => false,
        'tunnel' => false
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
        'sidewalk_left' => 'sidewalk_left',
        'sidewalk_right' => 'sidewalk_right',
        'lane_count' => 'lane_count',
        'stop_sign' => 'stop_sign',
        'sac_scale' => 'sac_scale',
        'yield_sign' => 'yield_sign',
        'not_thru' => 'not_thru',
        'forward' => 'forward',
        'end_node' => 'end_node',
        'truck_route' => 'truck_route',
        'speeds' => 'speeds',
        'bike_network' => 'bike_network',
        'round_about' => 'round_about',
        'traffic_signal' => 'traffic_signal',
        'access_restriction' => 'access_restriction',
        'destination_only' => 'destination_only',
        'geo_attributes' => 'geo_attributes',
        'start_restriction' => 'start_restriction',
        'cycle_lane' => 'cycle_lane',
        'end_restriction' => 'end_restriction',
        'seasonal' => 'seasonal',
        'country_crossing' => 'country_crossing',
        'part_of_complex_restriction' => 'part_of_complex_restriction',
        'has_sign' => 'has_sign',
        'access' => 'access',
        'bridge' => 'bridge',
        'classification' => 'classification',
        'toll' => 'toll',
        'tunnel' => 'tunnel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sidewalk_left' => 'setSidewalkLeft',
        'sidewalk_right' => 'setSidewalkRight',
        'lane_count' => 'setLaneCount',
        'stop_sign' => 'setStopSign',
        'sac_scale' => 'setSacScale',
        'yield_sign' => 'setYieldSign',
        'not_thru' => 'setNotThru',
        'forward' => 'setForward',
        'end_node' => 'setEndNode',
        'truck_route' => 'setTruckRoute',
        'speeds' => 'setSpeeds',
        'bike_network' => 'setBikeNetwork',
        'round_about' => 'setRoundAbout',
        'traffic_signal' => 'setTrafficSignal',
        'access_restriction' => 'setAccessRestriction',
        'destination_only' => 'setDestinationOnly',
        'geo_attributes' => 'setGeoAttributes',
        'start_restriction' => 'setStartRestriction',
        'cycle_lane' => 'setCycleLane',
        'end_restriction' => 'setEndRestriction',
        'seasonal' => 'setSeasonal',
        'country_crossing' => 'setCountryCrossing',
        'part_of_complex_restriction' => 'setPartOfComplexRestriction',
        'has_sign' => 'setHasSign',
        'access' => 'setAccess',
        'bridge' => 'setBridge',
        'classification' => 'setClassification',
        'toll' => 'setToll',
        'tunnel' => 'setTunnel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sidewalk_left' => 'getSidewalkLeft',
        'sidewalk_right' => 'getSidewalkRight',
        'lane_count' => 'getLaneCount',
        'stop_sign' => 'getStopSign',
        'sac_scale' => 'getSacScale',
        'yield_sign' => 'getYieldSign',
        'not_thru' => 'getNotThru',
        'forward' => 'getForward',
        'end_node' => 'getEndNode',
        'truck_route' => 'getTruckRoute',
        'speeds' => 'getSpeeds',
        'bike_network' => 'getBikeNetwork',
        'round_about' => 'getRoundAbout',
        'traffic_signal' => 'getTrafficSignal',
        'access_restriction' => 'getAccessRestriction',
        'destination_only' => 'getDestinationOnly',
        'geo_attributes' => 'getGeoAttributes',
        'start_restriction' => 'getStartRestriction',
        'cycle_lane' => 'getCycleLane',
        'end_restriction' => 'getEndRestriction',
        'seasonal' => 'getSeasonal',
        'country_crossing' => 'getCountryCrossing',
        'part_of_complex_restriction' => 'getPartOfComplexRestriction',
        'has_sign' => 'getHasSign',
        'access' => 'getAccess',
        'bridge' => 'getBridge',
        'classification' => 'getClassification',
        'toll' => 'getToll',
        'tunnel' => 'getTunnel'
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

    public const SAC_SCALE_NONE = 'none';
    public const SAC_SCALE_HIKING = 'hiking';
    public const SAC_SCALE_MOUNTAIN_HIKING = 'mountain hiking';
    public const SAC_SCALE_DEMANDING_MOUNTAIN_HIKING = 'demanding mountain hiking';
    public const SAC_SCALE_ALPINE_HIKING = 'alpine hiking';
    public const SAC_SCALE_DEMANDING_ALPINE_HIKING = 'demanding alpine hiking';
    public const SAC_SCALE_DIFFICULT_ALPINE_HIKING = 'difficult alpine hiking';
    public const CYCLE_LANE_NONE = 'none';
    public const CYCLE_LANE_SHARED = 'shared';
    public const CYCLE_LANE_DEDICATED = 'dedicated';
    public const CYCLE_LANE_SEPARATED = 'separated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSacScaleAllowableValues()
    {
        return [
            self::SAC_SCALE_NONE,
            self::SAC_SCALE_HIKING,
            self::SAC_SCALE_MOUNTAIN_HIKING,
            self::SAC_SCALE_DEMANDING_MOUNTAIN_HIKING,
            self::SAC_SCALE_ALPINE_HIKING,
            self::SAC_SCALE_DEMANDING_ALPINE_HIKING,
            self::SAC_SCALE_DIFFICULT_ALPINE_HIKING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCycleLaneAllowableValues()
    {
        return [
            self::CYCLE_LANE_NONE,
            self::CYCLE_LANE_SHARED,
            self::CYCLE_LANE_DEDICATED,
            self::CYCLE_LANE_SEPARATED,
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
        $this->setIfExists('sidewalk_left', $data ?? [], null);
        $this->setIfExists('sidewalk_right', $data ?? [], null);
        $this->setIfExists('lane_count', $data ?? [], null);
        $this->setIfExists('stop_sign', $data ?? [], null);
        $this->setIfExists('sac_scale', $data ?? [], null);
        $this->setIfExists('yield_sign', $data ?? [], null);
        $this->setIfExists('not_thru', $data ?? [], null);
        $this->setIfExists('forward', $data ?? [], null);
        $this->setIfExists('end_node', $data ?? [], null);
        $this->setIfExists('truck_route', $data ?? [], null);
        $this->setIfExists('speeds', $data ?? [], null);
        $this->setIfExists('bike_network', $data ?? [], null);
        $this->setIfExists('round_about', $data ?? [], null);
        $this->setIfExists('traffic_signal', $data ?? [], null);
        $this->setIfExists('access_restriction', $data ?? [], null);
        $this->setIfExists('destination_only', $data ?? [], null);
        $this->setIfExists('geo_attributes', $data ?? [], null);
        $this->setIfExists('start_restriction', $data ?? [], null);
        $this->setIfExists('cycle_lane', $data ?? [], null);
        $this->setIfExists('end_restriction', $data ?? [], null);
        $this->setIfExists('seasonal', $data ?? [], null);
        $this->setIfExists('country_crossing', $data ?? [], null);
        $this->setIfExists('part_of_complex_restriction', $data ?? [], null);
        $this->setIfExists('has_sign', $data ?? [], null);
        $this->setIfExists('access', $data ?? [], null);
        $this->setIfExists('bridge', $data ?? [], null);
        $this->setIfExists('classification', $data ?? [], null);
        $this->setIfExists('toll', $data ?? [], null);
        $this->setIfExists('tunnel', $data ?? [], null);
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

        $allowedValues = $this->getSacScaleAllowableValues();
        if (!is_null($this->container['sac_scale']) && !in_array($this->container['sac_scale'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sac_scale', must be one of '%s'",
                $this->container['sac_scale'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCycleLaneAllowableValues();
        if (!is_null($this->container['cycle_lane']) && !in_array($this->container['cycle_lane'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cycle_lane', must be one of '%s'",
                $this->container['cycle_lane'],
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
     * Gets sidewalk_left
     *
     * @return bool|null
     */
    public function getSidewalkLeft()
    {
        return $this->container['sidewalk_left'];
    }

    /**
     * Sets sidewalk_left
     *
     * @param bool|null $sidewalk_left Is there a sidewalk to the left of the edge?
     *
     * @return self
     */
    public function setSidewalkLeft($sidewalk_left)
    {
        if (is_null($sidewalk_left)) {
            throw new \InvalidArgumentException('non-nullable sidewalk_left cannot be null');
        }
        $this->container['sidewalk_left'] = $sidewalk_left;

        return $this;
    }

    /**
     * Gets sidewalk_right
     *
     * @return bool|null
     */
    public function getSidewalkRight()
    {
        return $this->container['sidewalk_right'];
    }

    /**
     * Sets sidewalk_right
     *
     * @param bool|null $sidewalk_right Is there a sidewalk to the right of the edge?
     *
     * @return self
     */
    public function setSidewalkRight($sidewalk_right)
    {
        if (is_null($sidewalk_right)) {
            throw new \InvalidArgumentException('non-nullable sidewalk_right cannot be null');
        }
        $this->container['sidewalk_right'] = $sidewalk_right;

        return $this;
    }

    /**
     * Gets lane_count
     *
     * @return int|null
     */
    public function getLaneCount()
    {
        return $this->container['lane_count'];
    }

    /**
     * Sets lane_count
     *
     * @param int|null $lane_count lane_count
     *
     * @return self
     */
    public function setLaneCount($lane_count)
    {
        if (is_null($lane_count)) {
            throw new \InvalidArgumentException('non-nullable lane_count cannot be null');
        }
        $this->container['lane_count'] = $lane_count;

        return $this;
    }

    /**
     * Gets stop_sign
     *
     * @return bool|null
     */
    public function getStopSign()
    {
        return $this->container['stop_sign'];
    }

    /**
     * Sets stop_sign
     *
     * @param bool|null $stop_sign Is there a stop sign at end of the directed edge?
     *
     * @return self
     */
    public function setStopSign($stop_sign)
    {
        if (is_null($stop_sign)) {
            throw new \InvalidArgumentException('non-nullable stop_sign cannot be null');
        }
        $this->container['stop_sign'] = $stop_sign;

        return $this;
    }

    /**
     * Gets sac_scale
     *
     * @return string|null
     */
    public function getSacScale()
    {
        return $this->container['sac_scale'];
    }

    /**
     * Sets sac_scale
     *
     * @param string|null $sac_scale sac_scale
     *
     * @return self
     */
    public function setSacScale($sac_scale)
    {
        if (is_null($sac_scale)) {
            throw new \InvalidArgumentException('non-nullable sac_scale cannot be null');
        }
        $allowedValues = $this->getSacScaleAllowableValues();
        if (!in_array($sac_scale, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sac_scale', must be one of '%s'",
                    $sac_scale,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sac_scale'] = $sac_scale;

        return $this;
    }

    /**
     * Gets yield_sign
     *
     * @return bool|null
     */
    public function getYieldSign()
    {
        return $this->container['yield_sign'];
    }

    /**
     * Sets yield_sign
     *
     * @param bool|null $yield_sign Is there a yield sign at end of the directed edge?
     *
     * @return self
     */
    public function setYieldSign($yield_sign)
    {
        if (is_null($yield_sign)) {
            throw new \InvalidArgumentException('non-nullable yield_sign cannot be null');
        }
        $this->container['yield_sign'] = $yield_sign;

        return $this;
    }

    /**
     * Gets not_thru
     *
     * @return bool|null
     */
    public function getNotThru()
    {
        return $this->container['not_thru'];
    }

    /**
     * Sets not_thru
     *
     * @param bool|null $not_thru Does the edge lead to a \"no-through\" region?
     *
     * @return self
     */
    public function setNotThru($not_thru)
    {
        if (is_null($not_thru)) {
            throw new \InvalidArgumentException('non-nullable not_thru cannot be null');
        }
        $this->container['not_thru'] = $not_thru;

        return $this;
    }

    /**
     * Gets forward
     *
     * @return bool|null
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     * @param bool|null $forward Is the edge info forward? If false, then reverse is implied.
     *
     * @return self
     */
    public function setForward($forward)
    {
        if (is_null($forward)) {
            throw new \InvalidArgumentException('non-nullable forward cannot be null');
        }
        $this->container['forward'] = $forward;

        return $this;
    }

    /**
     * Gets end_node
     *
     * @return \OpenAPI\Client\Model\NodeId|null
     */
    public function getEndNode()
    {
        return $this->container['end_node'];
    }

    /**
     * Sets end_node
     *
     * @param \OpenAPI\Client\Model\NodeId|null $end_node end_node
     *
     * @return self
     */
    public function setEndNode($end_node)
    {
        if (is_null($end_node)) {
            throw new \InvalidArgumentException('non-nullable end_node cannot be null');
        }
        $this->container['end_node'] = $end_node;

        return $this;
    }

    /**
     * Gets truck_route
     *
     * @return bool|null
     */
    public function getTruckRoute()
    {
        return $this->container['truck_route'];
    }

    /**
     * Sets truck_route
     *
     * @param bool|null $truck_route Is the edge part of a truck route/network?
     *
     * @return self
     */
    public function setTruckRoute($truck_route)
    {
        if (is_null($truck_route)) {
            throw new \InvalidArgumentException('non-nullable truck_route cannot be null');
        }
        $this->container['truck_route'] = $truck_route;

        return $this;
    }

    /**
     * Gets speeds
     *
     * @return \OpenAPI\Client\Model\Speeds|null
     */
    public function getSpeeds()
    {
        return $this->container['speeds'];
    }

    /**
     * Sets speeds
     *
     * @param \OpenAPI\Client\Model\Speeds|null $speeds speeds
     *
     * @return self
     */
    public function setSpeeds($speeds)
    {
        if (is_null($speeds)) {
            throw new \InvalidArgumentException('non-nullable speeds cannot be null');
        }
        $this->container['speeds'] = $speeds;

        return $this;
    }

    /**
     * Gets bike_network
     *
     * @return bool|null
     */
    public function getBikeNetwork()
    {
        return $this->container['bike_network'];
    }

    /**
     * Sets bike_network
     *
     * @param bool|null $bike_network Is the edge part of a bicycle network?
     *
     * @return self
     */
    public function setBikeNetwork($bike_network)
    {
        if (is_null($bike_network)) {
            throw new \InvalidArgumentException('non-nullable bike_network cannot be null');
        }
        $this->container['bike_network'] = $bike_network;

        return $this;
    }

    /**
     * Gets round_about
     *
     * @return bool|null
     */
    public function getRoundAbout()
    {
        return $this->container['round_about'];
    }

    /**
     * Sets round_about
     *
     * @param bool|null $round_about Is the edge part of a roundabout?
     *
     * @return self
     */
    public function setRoundAbout($round_about)
    {
        if (is_null($round_about)) {
            throw new \InvalidArgumentException('non-nullable round_about cannot be null');
        }
        $this->container['round_about'] = $round_about;

        return $this;
    }

    /**
     * Gets traffic_signal
     *
     * @return bool|null
     */
    public function getTrafficSignal()
    {
        return $this->container['traffic_signal'];
    }

    /**
     * Sets traffic_signal
     *
     * @param bool|null $traffic_signal Is there a traffic signal at the end of the directed edge?
     *
     * @return self
     */
    public function setTrafficSignal($traffic_signal)
    {
        if (is_null($traffic_signal)) {
            throw new \InvalidArgumentException('non-nullable traffic_signal cannot be null');
        }
        $this->container['traffic_signal'] = $traffic_signal;

        return $this;
    }

    /**
     * Gets access_restriction
     *
     * @return bool|null
     */
    public function getAccessRestriction()
    {
        return $this->container['access_restriction'];
    }

    /**
     * Sets access_restriction
     *
     * @param bool|null $access_restriction Is there a general restriction or access condition?
     *
     * @return self
     */
    public function setAccessRestriction($access_restriction)
    {
        if (is_null($access_restriction)) {
            throw new \InvalidArgumentException('non-nullable access_restriction cannot be null');
        }
        $this->container['access_restriction'] = $access_restriction;

        return $this;
    }

    /**
     * Gets destination_only
     *
     * @return bool|null
     */
    public function getDestinationOnly()
    {
        return $this->container['destination_only'];
    }

    /**
     * Sets destination_only
     *
     * @param bool|null $destination_only Is the edge destination only? If so, it will not be routed through.
     *
     * @return self
     */
    public function setDestinationOnly($destination_only)
    {
        if (is_null($destination_only)) {
            throw new \InvalidArgumentException('non-nullable destination_only cannot be null');
        }
        $this->container['destination_only'] = $destination_only;

        return $this;
    }

    /**
     * Gets geo_attributes
     *
     * @return \OpenAPI\Client\Model\GeoAttributes|null
     */
    public function getGeoAttributes()
    {
        return $this->container['geo_attributes'];
    }

    /**
     * Sets geo_attributes
     *
     * @param \OpenAPI\Client\Model\GeoAttributes|null $geo_attributes geo_attributes
     *
     * @return self
     */
    public function setGeoAttributes($geo_attributes)
    {
        if (is_null($geo_attributes)) {
            throw new \InvalidArgumentException('non-nullable geo_attributes cannot be null');
        }
        $this->container['geo_attributes'] = $geo_attributes;

        return $this;
    }

    /**
     * Gets start_restriction
     *
     * @return \OpenAPI\Client\Model\Restrictions|null
     */
    public function getStartRestriction()
    {
        return $this->container['start_restriction'];
    }

    /**
     * Sets start_restriction
     *
     * @param \OpenAPI\Client\Model\Restrictions|null $start_restriction start_restriction
     *
     * @return self
     */
    public function setStartRestriction($start_restriction)
    {
        if (is_null($start_restriction)) {
            throw new \InvalidArgumentException('non-nullable start_restriction cannot be null');
        }
        $this->container['start_restriction'] = $start_restriction;

        return $this;
    }

    /**
     * Gets cycle_lane
     *
     * @return string|null
     */
    public function getCycleLane()
    {
        return $this->container['cycle_lane'];
    }

    /**
     * Sets cycle_lane
     *
     * @param string|null $cycle_lane Indication of the type of cycle lane (if any) present along an edge.
     *
     * @return self
     */
    public function setCycleLane($cycle_lane)
    {
        if (is_null($cycle_lane)) {
            throw new \InvalidArgumentException('non-nullable cycle_lane cannot be null');
        }
        $allowedValues = $this->getCycleLaneAllowableValues();
        if (!in_array($cycle_lane, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cycle_lane', must be one of '%s'",
                    $cycle_lane,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cycle_lane'] = $cycle_lane;

        return $this;
    }

    /**
     * Gets end_restriction
     *
     * @return \OpenAPI\Client\Model\Restrictions|null
     */
    public function getEndRestriction()
    {
        return $this->container['end_restriction'];
    }

    /**
     * Sets end_restriction
     *
     * @param \OpenAPI\Client\Model\Restrictions|null $end_restriction end_restriction
     *
     * @return self
     */
    public function setEndRestriction($end_restriction)
    {
        if (is_null($end_restriction)) {
            throw new \InvalidArgumentException('non-nullable end_restriction cannot be null');
        }
        $this->container['end_restriction'] = $end_restriction;

        return $this;
    }

    /**
     * Gets seasonal
     *
     * @return bool|null
     */
    public function getSeasonal()
    {
        return $this->container['seasonal'];
    }

    /**
     * Sets seasonal
     *
     * @param bool|null $seasonal Is access seasonal (ex. no access in winter)?
     *
     * @return self
     */
    public function setSeasonal($seasonal)
    {
        if (is_null($seasonal)) {
            throw new \InvalidArgumentException('non-nullable seasonal cannot be null');
        }
        $this->container['seasonal'] = $seasonal;

        return $this;
    }

    /**
     * Gets country_crossing
     *
     * @return bool|null
     */
    public function getCountryCrossing()
    {
        return $this->container['country_crossing'];
    }

    /**
     * Sets country_crossing
     *
     * @param bool|null $country_crossing Does the edge cross into a new country?
     *
     * @return self
     */
    public function setCountryCrossing($country_crossing)
    {
        if (is_null($country_crossing)) {
            throw new \InvalidArgumentException('non-nullable country_crossing cannot be null');
        }
        $this->container['country_crossing'] = $country_crossing;

        return $this;
    }

    /**
     * Gets part_of_complex_restriction
     *
     * @return bool|null
     */
    public function getPartOfComplexRestriction()
    {
        return $this->container['part_of_complex_restriction'];
    }

    /**
     * Sets part_of_complex_restriction
     *
     * @param bool|null $part_of_complex_restriction Is the edge part of a complex restriction?
     *
     * @return self
     */
    public function setPartOfComplexRestriction($part_of_complex_restriction)
    {
        if (is_null($part_of_complex_restriction)) {
            throw new \InvalidArgumentException('non-nullable part_of_complex_restriction cannot be null');
        }
        $this->container['part_of_complex_restriction'] = $part_of_complex_restriction;

        return $this;
    }

    /**
     * Gets has_sign
     *
     * @return bool|null
     */
    public function getHasSign()
    {
        return $this->container['has_sign'];
    }

    /**
     * Sets has_sign
     *
     * @param bool|null $has_sign Do exit signs exist for the edge?
     *
     * @return self
     */
    public function setHasSign($has_sign)
    {
        if (is_null($has_sign)) {
            throw new \InvalidArgumentException('non-nullable has_sign cannot be null');
        }
        $this->container['has_sign'] = $has_sign;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \OpenAPI\Client\Model\Restrictions|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \OpenAPI\Client\Model\Restrictions|null $access access
     *
     * @return self
     */
    public function setAccess($access)
    {
        if (is_null($access)) {
            throw new \InvalidArgumentException('non-nullable access cannot be null');
        }
        $this->container['access'] = $access;

        return $this;
    }

    /**
     * Gets bridge
     *
     * @return bool|null
     */
    public function getBridge()
    {
        return $this->container['bridge'];
    }

    /**
     * Sets bridge
     *
     * @param bool|null $bridge Is the edge part of a bridge?
     *
     * @return self
     */
    public function setBridge($bridge)
    {
        if (is_null($bridge)) {
            throw new \InvalidArgumentException('non-nullable bridge cannot be null');
        }
        $this->container['bridge'] = $bridge;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return \OpenAPI\Client\Model\HighwayClassification|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param \OpenAPI\Client\Model\HighwayClassification|null $classification classification
     *
     * @return self
     */
    public function setClassification($classification)
    {
        if (is_null($classification)) {
            throw new \InvalidArgumentException('non-nullable classification cannot be null');
        }
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets toll
     *
     * @return bool|null
     */
    public function getToll()
    {
        return $this->container['toll'];
    }

    /**
     * Sets toll
     *
     * @param bool|null $toll Is the edge a toll road?
     *
     * @return self
     */
    public function setToll($toll)
    {
        if (is_null($toll)) {
            throw new \InvalidArgumentException('non-nullable toll cannot be null');
        }
        $this->container['toll'] = $toll;

        return $this;
    }

    /**
     * Gets tunnel
     *
     * @return bool|null
     */
    public function getTunnel()
    {
        return $this->container['tunnel'];
    }

    /**
     * Sets tunnel
     *
     * @param bool|null $tunnel Is the edge a tunnel?
     *
     * @return self
     */
    public function setTunnel($tunnel)
    {
        if (is_null($tunnel)) {
            throw new \InvalidArgumentException('non-nullable tunnel cannot be null');
        }
        $this->container['tunnel'] = $tunnel;

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


