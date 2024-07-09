# # MatrixDistance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance** | **float** | The distance (in &#x60;units&#x60;) between the location in &#x60;sources&#x60; at &#x60;from_index&#x60; and the location in &#x60;targets&#x60; at &#x60;to_index&#x60;. This value may be 0 in the case that the source and destination are the same, and &#x60;null&#x60; if no route was found between the locations. |
**time** | **int** | The travel time (in seconds) between the location in &#x60;sources&#x60; at &#x60;from_index&#x60; and the location in &#x60;targets&#x60; at &#x60;to_index&#x60;. This value may be 0 in the case that the source and destination are the same, and &#x60;null&#x60; if no route was found between the locations. |
**from_index** | **int** | The index of the start location in the &#x60;sources&#x60; array. |
**to_index** | **int** | The index of the end location in the &#x60;targets&#x60; array. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
