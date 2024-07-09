# # HeightRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**shape** | [**\OpenAPI\Client\Model\Coordinate[]**](Coordinate.md) | REQUIRED if &#x60;encoded_polyline&#x60; is not present. | [optional]
**encoded_polyline** | **string** | REQUIRED if &#x60;shape&#x60; is not present. An encoded polyline (https://developers.google.com/maps/documentation/utilities/polylinealgorithm). | [optional]
**shape_format** | **string** | Specifies whether the polyline is encoded with 6 digit precision (polyline6) or 5 digit precision (polyline5). | [optional] [default to 'polyline6']
**range** | **bool** | Controls whether or not the returned array is one-dimensional (height only) or two-dimensional (with a range and height). The range dimension can be used to generate a graph or steepness gradient along a route. | [optional] [default to false]
**height_precision** | **int** | The decimal precision (number of digits after the point) of the output. When 0, integer values are returned. Valid values are 0, 1, and 2. | [optional] [default to 0]
**resample_distance** | **int** | The distance at which the input polyline should be sampled to provide uniform distances between points. If not set, the input shape will be used as-is. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
