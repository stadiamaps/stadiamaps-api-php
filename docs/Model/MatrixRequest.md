# # MatrixRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | [**\OpenAPI\Client\Model\DistanceUnit**](DistanceUnit.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\ValhallaLanguages**](ValhallaLanguages.md) |  | [optional]
**directions_type** | **string** | The level of directional narrative to include. Locations and times will always be returned, but narrative generation verbosity can be controlled with this parameter. | [optional] [default to 'instructions']
**id** | **string** | An identifier to disambiguate requests (echoed by the server). | [optional]
**sources** | [**\OpenAPI\Client\Model\MatrixWaypoint[]**](MatrixWaypoint.md) | The list of starting locations |
**targets** | [**\OpenAPI\Client\Model\MatrixWaypoint[]**](MatrixWaypoint.md) | The list of ending locations |
**costing** | [**\OpenAPI\Client\Model\MatrixCostingModel**](MatrixCostingModel.md) |  |
**costing_options** | [**\OpenAPI\Client\Model\CostingOptions**](CostingOptions.md) |  | [optional]
**matrix_locations** | **int** | Only applicable to one-to-many or many-to-one requests. This defaults to all locations. When specified explicitly, this option allows a partial result to be returned. This is basically equivalent to \&quot;find the closest/best locations out of the full set.\&quot; This can have a dramatic improvement for large requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
