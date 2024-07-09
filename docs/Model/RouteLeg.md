# # RouteLeg

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maneuvers** | [**\OpenAPI\Client\Model\RouteManeuver[]**](RouteManeuver.md) |  |
**shape** | **string** | An encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm) with 6 digits of decimal precision. |
**summary** | [**\OpenAPI\Client\Model\RouteSummary**](RouteSummary.md) |  |
**elevation_interval** | **float** | The sampling distance between elevation values along the route. This echoes the request parameter having the same name. | [optional]
**elevation** | **float[]** | An array of elevation values sampled every &#x60;elevation_interval&#x60;. Units are either metric or imperial depending on the value of &#x60;units&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
