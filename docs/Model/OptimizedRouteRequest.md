# # OptimizedRouteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | [**\OpenAPI\Client\Model\DistanceUnit**](DistanceUnit.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\ValhallaLanguages**](ValhallaLanguages.md) |  | [optional]
**directions_type** | **string** | The level of directional narrative to include. Locations and times will always be returned, but narrative generation verbosity can be controlled with this parameter. | [optional] [default to 'instructions']
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**locations** | [**\OpenAPI\Client\Model\Coordinate[]**](Coordinate.md) | The list of locations. The first and last are assumed to be the start and end points, and all intermediate points are locations that you want to visit along the way. |
**costing** | [**\OpenAPI\Client\Model\MatrixCostingModel**](MatrixCostingModel.md) |  |
**costing_options** | [**\OpenAPI\Client\Model\CostingOptions**](CostingOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
