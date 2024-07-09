# # RouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | [**\OpenAPI\Client\Model\DistanceUnit**](DistanceUnit.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\ValhallaLanguages**](ValhallaLanguages.md) |  | [optional]
**directions_type** | **string** | The level of directional narrative to include. Locations and times will always be returned, but narrative generation verbosity can be controlled with this parameter. | [optional] [default to 'instructions']
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**locations** | [**\OpenAPI\Client\Model\RoutingWaypoint[]**](RoutingWaypoint.md) |  |
**costing** | [**\OpenAPI\Client\Model\CostingModel**](CostingModel.md) |  |
**costing_options** | [**\OpenAPI\Client\Model\CostingOptions**](CostingOptions.md) |  | [optional]
**exclude_locations** | [**\OpenAPI\Client\Model\RoutingWaypoint[]**](RoutingWaypoint.md) | This has the same format as the locations list. Locations are mapped to the closed road(s), and these road(s) are excluded from the route path computation. | [optional]
**exclude_polygons** | **float[][][]** | One or multiple exterior rings of polygons in the form of nested JSON arrays. Roads intersecting these rings will be avoided during path finding. Open rings will be closed automatically. If you only need to avoid a few specific roads, it&#39;s much more efficient to use &#x60;exclude_locations&#x60;. | [optional]
**alternates** | **int** | How many alternate routes are desired. Note that fewer or no alternates may be returned. Alternates are not yet supported on routes with more than 2 locations or on time-dependent routes. | [optional]
**elevation_interval** | **float** | If greater than zero, attempts to include elevation along the route at regular intervals. The \&quot;native\&quot; internal resolution is 30m, so we recommend you use this when possible. This number is interpreted as either meters or feet depending on the unit parameter. Elevation for route sections containing a bridge or tunnel is interpolated linearly. This doesn&#39;t always match the true elevation of the bridge/tunnel, but it prevents sharp artifacts from the surrounding terrain. This functionality is unique to the route endpoint and is not available via the elevation API. | [optional] [default to 0.0]
**roundabout_exits** | **bool** | Determines whether the output should include roundabout exit instructions. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
