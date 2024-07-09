<?php
/**
 * TraceAttributeKey
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * TraceAttributeKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TraceAttributeKey
{
    /**
     * Possible values of this enum
     */
    public const EDGE_NAMES = 'edge.names';

    public const EDGE_LENGTH = 'edge.length';

    public const EDGE_SPEED = 'edge.speed';

    public const EDGE_ROAD_CLASS = 'edge.road_class';

    public const EDGE_BEGIN_HEADING = 'edge.begin_heading';

    public const EDGE_END_HEADING = 'edge.end_heading';

    public const EDGE_BEGIN_SHAPE_INDEX = 'edge.begin_shape_index';

    public const EDGE_END_SHAPE_INDEX = 'edge.end_shape_index';

    public const EDGE_TRAVERSABILITY = 'edge.traversability';

    public const EDGE_USE = 'edge.use';

    public const EDGE_TOLL = 'edge.toll';

    public const EDGE_UNPAVED = 'edge.unpaved';

    public const EDGE_TUNNEL = 'edge.tunnel';

    public const EDGE_BRIDGE = 'edge.bridge';

    public const EDGE_ROUNDABOUT = 'edge.roundabout';

    public const EDGE_INTERNAL_INTERSECTION = 'edge.internal_intersection';

    public const EDGE_DRIVE_ON_RIGHT = 'edge.drive_on_right';

    public const EDGE_SURFACE = 'edge.surface';

    public const EDGE_SIGN_EXIT_NUMBER = 'edge.sign.exit_number';

    public const EDGE_SIGN_EXIT_BRANCH = 'edge.sign.exit_branch';

    public const EDGE_SIGN_EXIT_TOWARD = 'edge.sign.exit_toward';

    public const EDGE_SIGN_EXIT_NAME = 'edge.sign.exit_name';

    public const EDGE_TRAVEL_MODE = 'edge.travel_mode';

    public const EDGE_VEHICLE_TYPE = 'edge.vehicle_type';

    public const EDGE_PEDESTRIAN_TYPE = 'edge.pedestrian_type';

    public const EDGE_BICYCLE_TYPE = 'edge.bicycle_type';

    public const EDGE_TRANSIT_TYPE = 'edge.transit_type';

    public const EDGE_ID = 'edge.id';

    public const EDGE_WAY_ID = 'edge.way_id';

    public const EDGE_WEIGHTED_GRADE = 'edge.weighted_grade';

    public const EDGE_MAX_UPWARD_GRADE = 'edge.max_upward_grade';

    public const EDGE_MAX_DOWNWARD_GRADE = 'edge.max_downward_grade';

    public const EDGE_MEAN_ELEVATION = 'edge.mean_elevation';

    public const EDGE_LANE_COUNT = 'edge.lane_count';

    public const EDGE_CYCLE_LANE = 'edge.cycle_lane';

    public const EDGE_BICYCLE_NETWORK = 'edge.bicycle_network';

    public const EDGE_SAC_SCALE = 'edge.sac_scale';

    public const EDGE_SIDEWALK = 'edge.sidewalk';

    public const EDGE_DENSITY = 'edge.density';

    public const EDGE_SPEED_LIMIT = 'edge.speed_limit';

    public const EDGE_TRUCK_SPEED = 'edge.truck_speed';

    public const EDGE_TRUCK_ROUTE = 'edge.truck_route';

    public const NODE_INTERSECTING_EDGE_BEGIN_HEADING = 'node.intersecting_edge.begin_heading';

    public const NODE_INTERSECTING_EDGE_FROM_EDGE_NAME_CONSISTENCY = 'node.intersecting_edge.from_edge_name_consistency';

    public const NODE_INTERSECTING_EDGE_TO_EDGE_NAME_CONSISTENCY = 'node.intersecting_edge.to_edge_name_consistency';

    public const NODE_INTERSECTING_EDGE_DRIVEABILITY = 'node.intersecting_edge.driveability';

    public const NODE_INTERSECTING_EDGE_CYCLABILITY = 'node.intersecting_edge.cyclability';

    public const NODE_INTERSECTING_EDGE_WALKABILITY = 'node.intersecting_edge.walkability';

    public const NODE_INTERSECTING_EDGE_USE = 'node.intersecting_edge.use';

    public const NODE_INTERSECTING_EDGE_ROAD_CLASS = 'node.intersecting_edge.road_class';

    public const NODE_ELAPSED_TIME = 'node.elapsed_time';

    public const NODE_ADMIN_INDEX = 'node.admin_index';

    public const NODE_TYPE = 'node.type';

    public const NODE_FORK = 'node.fork';

    public const NODE_TIME_ZONE = 'node.time_zone';

    public const OSM_CHANGESET = 'osm_changeset';

    public const SHAPE = 'shape';

    public const ADMIN_COUNTRY_CODE = 'admin.country_code';

    public const ADMIN_COUNTRY_TEXT = 'admin.country_text';

    public const ADMIN_STATE_CODE = 'admin.state_code';

    public const ADMIN_STATE_TEXT = 'admin.state_text';

    public const MATCHED_POINT = 'matched.point';

    public const MATCHED_TYPE = 'matched.type';

    public const MATCHED_EDGE_INDEX = 'matched.edge_index';

    public const MATCHED_BEGIN_ROUTE_DISCONTINUITY = 'matched.begin_route_discontinuity';

    public const MATCHED_END_ROUTE_DISCONTINUITY = 'matched.end_route_discontinuity';

    public const MATCHED_DISTANCE_ALONG_EDGE = 'matched.distance_along_edge';

    public const MATCHED_DISTANCE_FROM_TRACE_POINT = 'matched.distance_from_trace_point';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EDGE_NAMES,
            self::EDGE_LENGTH,
            self::EDGE_SPEED,
            self::EDGE_ROAD_CLASS,
            self::EDGE_BEGIN_HEADING,
            self::EDGE_END_HEADING,
            self::EDGE_BEGIN_SHAPE_INDEX,
            self::EDGE_END_SHAPE_INDEX,
            self::EDGE_TRAVERSABILITY,
            self::EDGE_USE,
            self::EDGE_TOLL,
            self::EDGE_UNPAVED,
            self::EDGE_TUNNEL,
            self::EDGE_BRIDGE,
            self::EDGE_ROUNDABOUT,
            self::EDGE_INTERNAL_INTERSECTION,
            self::EDGE_DRIVE_ON_RIGHT,
            self::EDGE_SURFACE,
            self::EDGE_SIGN_EXIT_NUMBER,
            self::EDGE_SIGN_EXIT_BRANCH,
            self::EDGE_SIGN_EXIT_TOWARD,
            self::EDGE_SIGN_EXIT_NAME,
            self::EDGE_TRAVEL_MODE,
            self::EDGE_VEHICLE_TYPE,
            self::EDGE_PEDESTRIAN_TYPE,
            self::EDGE_BICYCLE_TYPE,
            self::EDGE_TRANSIT_TYPE,
            self::EDGE_ID,
            self::EDGE_WAY_ID,
            self::EDGE_WEIGHTED_GRADE,
            self::EDGE_MAX_UPWARD_GRADE,
            self::EDGE_MAX_DOWNWARD_GRADE,
            self::EDGE_MEAN_ELEVATION,
            self::EDGE_LANE_COUNT,
            self::EDGE_CYCLE_LANE,
            self::EDGE_BICYCLE_NETWORK,
            self::EDGE_SAC_SCALE,
            self::EDGE_SIDEWALK,
            self::EDGE_DENSITY,
            self::EDGE_SPEED_LIMIT,
            self::EDGE_TRUCK_SPEED,
            self::EDGE_TRUCK_ROUTE,
            self::NODE_INTERSECTING_EDGE_BEGIN_HEADING,
            self::NODE_INTERSECTING_EDGE_FROM_EDGE_NAME_CONSISTENCY,
            self::NODE_INTERSECTING_EDGE_TO_EDGE_NAME_CONSISTENCY,
            self::NODE_INTERSECTING_EDGE_DRIVEABILITY,
            self::NODE_INTERSECTING_EDGE_CYCLABILITY,
            self::NODE_INTERSECTING_EDGE_WALKABILITY,
            self::NODE_INTERSECTING_EDGE_USE,
            self::NODE_INTERSECTING_EDGE_ROAD_CLASS,
            self::NODE_ELAPSED_TIME,
            self::NODE_ADMIN_INDEX,
            self::NODE_TYPE,
            self::NODE_FORK,
            self::NODE_TIME_ZONE,
            self::OSM_CHANGESET,
            self::SHAPE,
            self::ADMIN_COUNTRY_CODE,
            self::ADMIN_COUNTRY_TEXT,
            self::ADMIN_STATE_CODE,
            self::ADMIN_STATE_TEXT,
            self::MATCHED_POINT,
            self::MATCHED_TYPE,
            self::MATCHED_EDGE_INDEX,
            self::MATCHED_BEGIN_ROUTE_DISCONTINUITY,
            self::MATCHED_END_ROUTE_DISCONTINUITY,
            self::MATCHED_DISTANCE_ALONG_EDGE,
            self::MATCHED_DISTANCE_FROM_TRACE_POINT
        ];
    }
}


