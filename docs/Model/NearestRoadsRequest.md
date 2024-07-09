# # NearestRoadsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | [**\OpenAPI\Client\Model\DistanceUnit**](DistanceUnit.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\ValhallaLanguages**](ValhallaLanguages.md) |  | [optional]
**directions_type** | **string** | The level of directional narrative to include. Locations and times will always be returned, but narrative generation verbosity can be controlled with this parameter. | [optional] [default to 'instructions']
**locations** | [**\OpenAPI\Client\Model\Coordinate[]**](Coordinate.md) |  |
**costing** | [**\OpenAPI\Client\Model\CostingModel**](CostingModel.md) |  | [optional]
**costing_options** | [**\OpenAPI\Client\Model\CostingOptions**](CostingOptions.md) |  | [optional]
**verbose** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
