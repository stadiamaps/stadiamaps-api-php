# # LocateEdge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**edge_id** | [**\OpenAPI\Client\Model\NodeId**](NodeId.md) |  | [optional]
**way_id** | **int** | The OSM way ID associated with this edge (absent in verbose response; see the edge info). | [optional]
**correlated_lat** | **float** |  |
**correlated_lon** | **float** |  |
**percent_along** | **float** |  |
**side_of_street** | **string** |  |
**linear_reference** | **string** | A base64-encoded [OpenLR location reference](https://www.openlr-association.com/fileadmin/user_upload/openlr-whitepaper_v1.5.pdf), for a graph edge of the road network matched by the query. | [optional]
**outbound_reach** | **int** |  | [optional]
**heading** | **float** |  | [optional]
**inbound_reach** | **int** |  | [optional]
**distance** | **float** |  | [optional]
**predicted_speeds** | **int[]** | Predicted speed information based on historical data. If available, this will include 2016 entries. Each entry represents 5 minutes, where the first entry represents midnight on Monday, the second entry represents 00:05 on Monday, etc. | [optional]
**edge_info** | [**\OpenAPI\Client\Model\LocateEdgeInfo**](LocateEdgeInfo.md) |  | [optional]
**edge** | [**\OpenAPI\Client\Model\LocateDetailedEdge**](LocateDetailedEdge.md) |  | [optional]
**warnings** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
