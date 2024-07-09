# # LocateDetailedEdge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sidewalk_left** | **bool** | Is there a sidewalk to the left of the edge? | [optional]
**sidewalk_right** | **bool** | Is there a sidewalk to the right of the edge? | [optional]
**lane_count** | **int** |  | [optional]
**stop_sign** | **bool** | Is there a stop sign at end of the directed edge? | [optional]
**sac_scale** | **string** |  | [optional]
**yield_sign** | **bool** | Is there a yield sign at end of the directed edge? | [optional]
**not_thru** | **bool** | Does the edge lead to a \&quot;no-through\&quot; region? | [optional]
**forward** | **bool** | Is the edge info forward? If false, then reverse is implied. | [optional]
**end_node** | [**\OpenAPI\Client\Model\NodeId**](NodeId.md) |  | [optional]
**truck_route** | **bool** | Is the edge part of a truck route/network? | [optional]
**speeds** | [**\OpenAPI\Client\Model\Speeds**](Speeds.md) |  | [optional]
**bike_network** | **bool** | Is the edge part of a bicycle network? | [optional]
**round_about** | **bool** | Is the edge part of a roundabout? | [optional]
**traffic_signal** | **bool** | Is there a traffic signal at the end of the directed edge? | [optional]
**access_restriction** | **bool** | Is there a general restriction or access condition? | [optional]
**destination_only** | **bool** | Is the edge destination only? If so, it will not be routed through. | [optional]
**geo_attributes** | [**\OpenAPI\Client\Model\GeoAttributes**](GeoAttributes.md) |  | [optional]
**start_restriction** | [**\OpenAPI\Client\Model\Restrictions**](Restrictions.md) |  | [optional]
**cycle_lane** | **string** | Indication of the type of cycle lane (if any) present along an edge. | [optional]
**end_restriction** | [**\OpenAPI\Client\Model\Restrictions**](Restrictions.md) |  | [optional]
**seasonal** | **bool** | Is access seasonal (ex. no access in winter)? | [optional]
**country_crossing** | **bool** | Does the edge cross into a new country? | [optional]
**part_of_complex_restriction** | **bool** | Is the edge part of a complex restriction? | [optional]
**has_sign** | **bool** | Do exit signs exist for the edge? | [optional]
**access** | [**\OpenAPI\Client\Model\Restrictions**](Restrictions.md) |  | [optional]
**bridge** | **bool** | Is the edge part of a bridge? | [optional]
**classification** | [**\OpenAPI\Client\Model\HighwayClassification**](HighwayClassification.md) |  | [optional]
**toll** | **bool** | Is the edge a toll road? | [optional]
**tunnel** | **bool** | Is the edge a tunnel? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
