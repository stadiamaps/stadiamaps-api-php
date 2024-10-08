<?php
/**
 * RoutingWaypoint
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
 * RoutingWaypoint Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RoutingWaypoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'routingWaypoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lat' => 'float',
        'lon' => 'float',
        'type' => 'string',
        'heading' => 'int',
        'heading_tolerance' => 'int',
        'minimum_reachability' => 'int',
        'radius' => 'int',
        'rank_candidates' => 'bool',
        'preferred_side' => 'string',
        'node_snap_tolerance' => 'int',
        'street_side_tolerance' => 'int',
        'street_side_max_distance' => 'int',
        'search_filter' => '\OpenAPI\Client\Model\RoutingWaypointAllOfSearchFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lat' => 'double',
        'lon' => 'double',
        'type' => null,
        'heading' => null,
        'heading_tolerance' => null,
        'minimum_reachability' => null,
        'radius' => null,
        'rank_candidates' => null,
        'preferred_side' => null,
        'node_snap_tolerance' => null,
        'street_side_tolerance' => null,
        'street_side_max_distance' => null,
        'search_filter' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lat' => false,
        'lon' => false,
        'type' => false,
        'heading' => false,
        'heading_tolerance' => false,
        'minimum_reachability' => false,
        'radius' => false,
        'rank_candidates' => false,
        'preferred_side' => false,
        'node_snap_tolerance' => false,
        'street_side_tolerance' => false,
        'street_side_max_distance' => false,
        'search_filter' => false
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
        'lat' => 'lat',
        'lon' => 'lon',
        'type' => 'type',
        'heading' => 'heading',
        'heading_tolerance' => 'heading_tolerance',
        'minimum_reachability' => 'minimum_reachability',
        'radius' => 'radius',
        'rank_candidates' => 'rank_candidates',
        'preferred_side' => 'preferred_side',
        'node_snap_tolerance' => 'node_snap_tolerance',
        'street_side_tolerance' => 'street_side_tolerance',
        'street_side_max_distance' => 'street_side_max_distance',
        'search_filter' => 'search_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lat' => 'setLat',
        'lon' => 'setLon',
        'type' => 'setType',
        'heading' => 'setHeading',
        'heading_tolerance' => 'setHeadingTolerance',
        'minimum_reachability' => 'setMinimumReachability',
        'radius' => 'setRadius',
        'rank_candidates' => 'setRankCandidates',
        'preferred_side' => 'setPreferredSide',
        'node_snap_tolerance' => 'setNodeSnapTolerance',
        'street_side_tolerance' => 'setStreetSideTolerance',
        'street_side_max_distance' => 'setStreetSideMaxDistance',
        'search_filter' => 'setSearchFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lat' => 'getLat',
        'lon' => 'getLon',
        'type' => 'getType',
        'heading' => 'getHeading',
        'heading_tolerance' => 'getHeadingTolerance',
        'minimum_reachability' => 'getMinimumReachability',
        'radius' => 'getRadius',
        'rank_candidates' => 'getRankCandidates',
        'preferred_side' => 'getPreferredSide',
        'node_snap_tolerance' => 'getNodeSnapTolerance',
        'street_side_tolerance' => 'getStreetSideTolerance',
        'street_side_max_distance' => 'getStreetSideMaxDistance',
        'search_filter' => 'getSearchFilter'
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

    public const TYPE__BREAK = 'break';
    public const TYPE_THROUGH = 'through';
    public const TYPE_VIA = 'via';
    public const TYPE_BREAK_THROUGH = 'break_through';
    public const PREFERRED_SIDE_SAME = 'same';
    public const PREFERRED_SIDE_OPPOSITE = 'opposite';
    public const PREFERRED_SIDE_EITHER = 'either';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__BREAK,
            self::TYPE_THROUGH,
            self::TYPE_VIA,
            self::TYPE_BREAK_THROUGH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreferredSideAllowableValues()
    {
        return [
            self::PREFERRED_SIDE_SAME,
            self::PREFERRED_SIDE_OPPOSITE,
            self::PREFERRED_SIDE_EITHER,
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
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('lon', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'break');
        $this->setIfExists('heading', $data ?? [], null);
        $this->setIfExists('heading_tolerance', $data ?? [], 60);
        $this->setIfExists('minimum_reachability', $data ?? [], 50);
        $this->setIfExists('radius', $data ?? [], 0);
        $this->setIfExists('rank_candidates', $data ?? [], true);
        $this->setIfExists('preferred_side', $data ?? [], null);
        $this->setIfExists('node_snap_tolerance', $data ?? [], 5);
        $this->setIfExists('street_side_tolerance', $data ?? [], 5);
        $this->setIfExists('street_side_max_distance', $data ?? [], 1000);
        $this->setIfExists('search_filter', $data ?? [], null);
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

        if ($this->container['lat'] === null) {
            $invalidProperties[] = "'lat' can't be null";
        }
        if (($this->container['lat'] > 90)) {
            $invalidProperties[] = "invalid value for 'lat', must be smaller than or equal to 90.";
        }

        if (($this->container['lat'] < -90)) {
            $invalidProperties[] = "invalid value for 'lat', must be bigger than or equal to -90.";
        }

        if ($this->container['lon'] === null) {
            $invalidProperties[] = "'lon' can't be null";
        }
        if (($this->container['lon'] > 180)) {
            $invalidProperties[] = "invalid value for 'lon', must be smaller than or equal to 180.";
        }

        if (($this->container['lon'] < -180)) {
            $invalidProperties[] = "invalid value for 'lon', must be bigger than or equal to -180.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['heading']) && ($this->container['heading'] > 360)) {
            $invalidProperties[] = "invalid value for 'heading', must be smaller than or equal to 360.";
        }

        if (!is_null($this->container['heading']) && ($this->container['heading'] < 0)) {
            $invalidProperties[] = "invalid value for 'heading', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['heading_tolerance']) && ($this->container['heading_tolerance'] > 360)) {
            $invalidProperties[] = "invalid value for 'heading_tolerance', must be smaller than or equal to 360.";
        }

        if (!is_null($this->container['heading_tolerance']) && ($this->container['heading_tolerance'] < 0)) {
            $invalidProperties[] = "invalid value for 'heading_tolerance', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['minimum_reachability']) && ($this->container['minimum_reachability'] < 0)) {
            $invalidProperties[] = "invalid value for 'minimum_reachability', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['radius']) && ($this->container['radius'] < 0)) {
            $invalidProperties[] = "invalid value for 'radius', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPreferredSideAllowableValues();
        if (!is_null($this->container['preferred_side']) && !in_array($this->container['preferred_side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'preferred_side', must be one of '%s'",
                $this->container['preferred_side'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['node_snap_tolerance']) && ($this->container['node_snap_tolerance'] < 0)) {
            $invalidProperties[] = "invalid value for 'node_snap_tolerance', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_side_tolerance']) && ($this->container['street_side_tolerance'] < 0)) {
            $invalidProperties[] = "invalid value for 'street_side_tolerance', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street_side_max_distance']) && ($this->container['street_side_max_distance'] < 0)) {
            $invalidProperties[] = "invalid value for 'street_side_max_distance', must be bigger than or equal to 0.";
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
     * Gets lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param float $lat The latitude of a point in the shape.
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            throw new \InvalidArgumentException('non-nullable lat cannot be null');
        }

        if (($lat > 90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling RoutingWaypoint., must be smaller than or equal to 90.');
        }
        if (($lat < -90)) {
            throw new \InvalidArgumentException('invalid value for $lat when calling RoutingWaypoint., must be bigger than or equal to -90.');
        }

        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param float $lon The longitude of a point in the shape.
     *
     * @return self
     */
    public function setLon($lon)
    {
        if (is_null($lon)) {
            throw new \InvalidArgumentException('non-nullable lon cannot be null');
        }

        if (($lon > 180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling RoutingWaypoint., must be smaller than or equal to 180.');
        }
        if (($lon < -180)) {
            throw new \InvalidArgumentException('invalid value for $lon when calling RoutingWaypoint., must be bigger than or equal to -180.');
        }

        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type A `break` represents the start or end of a leg, and allows reversals. A `through` location is an intermediate waypoint that must be visited between `break`s, but at which reversals are not allowed. A `via` is similar to a `through` except that reversals are allowed. A `break_through` is similar to a `break` in that it can be the start/end of a leg, but does not allow reversals.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets heading
     *
     * @return int|null
     */
    public function getHeading()
    {
        return $this->container['heading'];
    }

    /**
     * Sets heading
     *
     * @param int|null $heading The preferred direction of travel when starting the route, in integer clockwise degrees from north. North is 0, south is 180, east is 90, and west is 270.
     *
     * @return self
     */
    public function setHeading($heading)
    {
        if (is_null($heading)) {
            throw new \InvalidArgumentException('non-nullable heading cannot be null');
        }

        if (($heading > 360)) {
            throw new \InvalidArgumentException('invalid value for $heading when calling RoutingWaypoint., must be smaller than or equal to 360.');
        }
        if (($heading < 0)) {
            throw new \InvalidArgumentException('invalid value for $heading when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['heading'] = $heading;

        return $this;
    }

    /**
     * Gets heading_tolerance
     *
     * @return int|null
     */
    public function getHeadingTolerance()
    {
        return $this->container['heading_tolerance'];
    }

    /**
     * Sets heading_tolerance
     *
     * @param int|null $heading_tolerance The tolerance (in degrees) determining whether a street is considered the same direction.
     *
     * @return self
     */
    public function setHeadingTolerance($heading_tolerance)
    {
        if (is_null($heading_tolerance)) {
            throw new \InvalidArgumentException('non-nullable heading_tolerance cannot be null');
        }

        if (($heading_tolerance > 360)) {
            throw new \InvalidArgumentException('invalid value for $heading_tolerance when calling RoutingWaypoint., must be smaller than or equal to 360.');
        }
        if (($heading_tolerance < 0)) {
            throw new \InvalidArgumentException('invalid value for $heading_tolerance when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['heading_tolerance'] = $heading_tolerance;

        return $this;
    }

    /**
     * Gets minimum_reachability
     *
     * @return int|null
     */
    public function getMinimumReachability()
    {
        return $this->container['minimum_reachability'];
    }

    /**
     * Sets minimum_reachability
     *
     * @param int|null $minimum_reachability The minimum number of nodes that must be reachable for a given edge to consider that edge as belonging to a connected region. If a candidate edge has fewer connections, it will be considered a disconnected island.
     *
     * @return self
     */
    public function setMinimumReachability($minimum_reachability)
    {
        if (is_null($minimum_reachability)) {
            throw new \InvalidArgumentException('non-nullable minimum_reachability cannot be null');
        }

        if (($minimum_reachability < 0)) {
            throw new \InvalidArgumentException('invalid value for $minimum_reachability when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['minimum_reachability'] = $minimum_reachability;

        return $this;
    }

    /**
     * Gets radius
     *
     * @return int|null
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param int|null $radius The distance (in meters) to look for candidate edges around the location for purposes of snapping locations to the route graph. If there are no candidates within this distance, the closest candidate within a reasonable search distance will be used. This is subject to clamping by internal limits.
     *
     * @return self
     */
    public function setRadius($radius)
    {
        if (is_null($radius)) {
            throw new \InvalidArgumentException('non-nullable radius cannot be null');
        }

        if (($radius < 0)) {
            throw new \InvalidArgumentException('invalid value for $radius when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['radius'] = $radius;

        return $this;
    }

    /**
     * Gets rank_candidates
     *
     * @return bool|null
     */
    public function getRankCandidates()
    {
        return $this->container['rank_candidates'];
    }

    /**
     * Sets rank_candidates
     *
     * @param bool|null $rank_candidates If true, candidates will be ranked according to their distance from the target location as well as other factors. If false, candidates will only be ranked using their distance from the target.
     *
     * @return self
     */
    public function setRankCandidates($rank_candidates)
    {
        if (is_null($rank_candidates)) {
            throw new \InvalidArgumentException('non-nullable rank_candidates cannot be null');
        }
        $this->container['rank_candidates'] = $rank_candidates;

        return $this;
    }

    /**
     * Gets preferred_side
     *
     * @return string|null
     */
    public function getPreferredSide()
    {
        return $this->container['preferred_side'];
    }

    /**
     * Sets preferred_side
     *
     * @param string|null $preferred_side If the location is not offset from the road centerline or is closest to an intersection, this option has no effect. Otherwise, the preferred side of street is used to determine whether or not the location should be visited from the same, opposite or either side of the road with respect to the side of the road the given locale drives on.
     *
     * @return self
     */
    public function setPreferredSide($preferred_side)
    {
        if (is_null($preferred_side)) {
            throw new \InvalidArgumentException('non-nullable preferred_side cannot be null');
        }
        $allowedValues = $this->getPreferredSideAllowableValues();
        if (!in_array($preferred_side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'preferred_side', must be one of '%s'",
                    $preferred_side,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preferred_side'] = $preferred_side;

        return $this;
    }

    /**
     * Gets node_snap_tolerance
     *
     * @return int|null
     */
    public function getNodeSnapTolerance()
    {
        return $this->container['node_snap_tolerance'];
    }

    /**
     * Sets node_snap_tolerance
     *
     * @param int|null $node_snap_tolerance During edge correlation this is the tolerance (in meters) used to determine whether or not to snap to the intersection rather than along the street, if the snap location is within this distance from the intersection, the intersection is used instead.
     *
     * @return self
     */
    public function setNodeSnapTolerance($node_snap_tolerance)
    {
        if (is_null($node_snap_tolerance)) {
            throw new \InvalidArgumentException('non-nullable node_snap_tolerance cannot be null');
        }

        if (($node_snap_tolerance < 0)) {
            throw new \InvalidArgumentException('invalid value for $node_snap_tolerance when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['node_snap_tolerance'] = $node_snap_tolerance;

        return $this;
    }

    /**
     * Gets street_side_tolerance
     *
     * @return int|null
     */
    public function getStreetSideTolerance()
    {
        return $this->container['street_side_tolerance'];
    }

    /**
     * Sets street_side_tolerance
     *
     * @param int|null $street_side_tolerance A tolerance in meters from the edge centerline used for determining the side of the street that the location is on. If the distance to the centerline is less than this tolerance, no side will be inferred. Otherwise, the left or right side will be selected depending on the direction of travel.
     *
     * @return self
     */
    public function setStreetSideTolerance($street_side_tolerance)
    {
        if (is_null($street_side_tolerance)) {
            throw new \InvalidArgumentException('non-nullable street_side_tolerance cannot be null');
        }

        if (($street_side_tolerance < 0)) {
            throw new \InvalidArgumentException('invalid value for $street_side_tolerance when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['street_side_tolerance'] = $street_side_tolerance;

        return $this;
    }

    /**
     * Gets street_side_max_distance
     *
     * @return int|null
     */
    public function getStreetSideMaxDistance()
    {
        return $this->container['street_side_max_distance'];
    }

    /**
     * Sets street_side_max_distance
     *
     * @param int|null $street_side_max_distance A tolerance in meters from the edge centerline used for determining the side of the street that the location is on. If the distance to the centerline is greater than this tolerance, no side will be inferred. Otherwise, the left or right side will be selected depending on the direction of travel.
     *
     * @return self
     */
    public function setStreetSideMaxDistance($street_side_max_distance)
    {
        if (is_null($street_side_max_distance)) {
            throw new \InvalidArgumentException('non-nullable street_side_max_distance cannot be null');
        }

        if (($street_side_max_distance < 0)) {
            throw new \InvalidArgumentException('invalid value for $street_side_max_distance when calling RoutingWaypoint., must be bigger than or equal to 0.');
        }

        $this->container['street_side_max_distance'] = $street_side_max_distance;

        return $this;
    }

    /**
     * Gets search_filter
     *
     * @return \OpenAPI\Client\Model\RoutingWaypointAllOfSearchFilter|null
     */
    public function getSearchFilter()
    {
        return $this->container['search_filter'];
    }

    /**
     * Sets search_filter
     *
     * @param \OpenAPI\Client\Model\RoutingWaypointAllOfSearchFilter|null $search_filter search_filter
     *
     * @return self
     */
    public function setSearchFilter($search_filter)
    {
        if (is_null($search_filter)) {
            throw new \InvalidArgumentException('non-nullable search_filter cannot be null');
        }
        $this->container['search_filter'] = $search_filter;

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


