# # TraceAttributesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edges** | [**\OpenAPI\Client\Model\TraceEdge[]**](TraceEdge.md) | The list of edges matched along the path. | [optional]
**admins** | [**\OpenAPI\Client\Model\AdminRegion[]**](AdminRegion.md) | The set of administrative regions matched along the path. Rather than repeating this information for every end node, the admins in this list are referenced by index. | [optional]
**matched_points** | [**\OpenAPI\Client\Model\MatchedPoint[]**](MatchedPoint.md) | List of match results when using the map_snap shape match algorithm. There is a one-to-one correspondence with the input set of latitude, longitude coordinates and this list of match results. | [optional]
**osm_changeset** | **int** |  | [optional]
**shape** | **string** | The encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm) of the matched path. | [optional]
**confidence_score** | **float** |  | [optional]
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**units** | [**\OpenAPI\Client\Model\ValhallaLongUnits**](ValhallaLongUnits.md) |  | [optional]
**alternate_paths** | [**\OpenAPI\Client\Model\TraceAttributesBaseResponse[]**](TraceAttributesBaseResponse.md) | Alternate paths, if any, that were not classified as the best match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
