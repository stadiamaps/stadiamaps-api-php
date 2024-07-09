# # MatrixResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**sources** | [**\OpenAPI\Client\Model\Coordinate[]**](Coordinate.md) | The list of starting locations determined by snapping to the nearest appropriate point on the road network for the costing model. All locations appear in the same order as the input. |
**targets** | [**\OpenAPI\Client\Model\Coordinate[]**](Coordinate.md) | The list of ending locations determined by snapping to the nearest appropriate point on the road network for the costing model. All locations appear in the same order as the input. |
**sources_to_targets** | **\OpenAPI\Client\Model\MatrixDistance[][]** | The matrix of starting and ending locations, along with the computed distance and travel time. The array is row-ordered. This means that the time and distance from the first location to all others forms the first row of the array, followed by the time and distance from the second source location to all target locations, etc. |
**warnings** | [**\OpenAPI\Client\Model\Warning[]**](Warning.md) |  | [optional]
**units** | [**\OpenAPI\Client\Model\ValhallaLongUnits**](ValhallaLongUnits.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
