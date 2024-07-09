# # RoutingWaypointAllOfSearchFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exclude_tunnel** | **bool** | Excludes roads marked as tunnels | [optional] [default to false]
**exclude_bridge** | **bool** | Excludes roads marked as bridges | [optional] [default to false]
**exclude_ramp** | **bool** | Excludes roads marked as ramps | [optional] [default to false]
**exclude_closures** | **bool** | Excludes roads marked as closed | [optional] [default to true]
**min_road_class** | [**\OpenAPI\Client\Model\RoadClass**](RoadClass.md) | The lowest road class allowed | [optional]
**max_road_class** | [**\OpenAPI\Client\Model\RoadClass**](RoadClass.md) | The highest road class allowed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
