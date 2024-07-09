# # MatchedPoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lat** | **float** | The latitude of the matched point. |
**lon** | **float** | The longitude of the matched point. |
**type** | **string** |  |
**edge_index** | **int** | The index of the edge in the list of &#x60;edges&#x60;. This key will be missing if the point is unmatched. | [optional]
**begin_route_discontinuity** | **bool** | If true, this match result is the begin location of a route discontinuity. | [optional] [default to false]
**end_route_discontinuity** | **bool** | If true, this match result is the end location of a route discontinuity. | [optional] [default to false]
**distance_along_edge** | **float** | The distance along the associated edge for this matched point, expressed as a value between 0 and 1. For example, if the matched point is halfway along the edge, then the value will be 0.5. This key will be absent if the point is unmatched. | [optional]
**distance_from_trace_point** | **float** | The distance in meters from the trace point to the matched point. This key will be absent if the point is unmatched. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
