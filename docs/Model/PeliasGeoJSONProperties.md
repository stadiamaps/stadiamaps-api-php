# # PeliasGeoJSONProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gid** | **string** | A scoped GID for this result. This can be passed to the place endpoint. Note that these are not always stable. For Geonames and Who&#39;s on First, these are usually stable, but for other sources like OSM, no stability is guaranteed. | [optional]
**source_id** | **string** | An ID referencing the original data source (specified via source) for the result. These IDs are specific to the source that they originated from. For example, in the case of OSM, these typically look like way/123 or point/123. | [optional]
**label** | **string** | A full, human-readable label. However, you may not necessarily want to use this; be sure to read the docs for name, locality, and region before making a decision. This field is mostly localized. The order of components is generally locally correct (ex: for an address in South Korea, the house number appears after the street name). However, components will use a request language equivalent if one exists (ex: Seoul instead of 서울 if lang&#x3D;en). | [optional]
**layer** | [**\OpenAPI\Client\Model\PeliasLayer**](PeliasLayer.md) |  | [optional]
**name** | **string** | The name of the place, the street address including house number, or label of similar relevance. If your app is localized to a specific region, you may get better display results by combining name, locality OR region (or neither?), and postal code together in the local format. Experiment with what works best for your use case. | [optional]
**accuracy** | **string** | The accuracy of the geographic coordinates in the result. This value is a property of the result itself and won&#39;t change based on the query. A point result means that the record can reasonably be represented by a single geographic point. Addresses, venues, or interpolated addresses usually have point accuracy. Larger areas, such as a city or country, cannot be represented by a single point, so a centroid is given instead. | [optional]
**addendum** | [**\OpenAPI\Client\Model\PeliasGeoJSONPropertiesAddendum**](PeliasGeoJSONPropertiesAddendum.md) |  | [optional]
**continent** | **string** |  | [optional]
**continent_gid** | **string** |  | [optional]
**country** | **string** |  | [optional]
**country_gid** | **string** |  | [optional]
**neighbourhood** | **string** |  | [optional]
**neighbourhood_gid** | **string** |  | [optional]
**borough** | **string** |  | [optional]
**borough_gid** | **string** |  | [optional]
**postalcode** | **string** |  | [optional]
**street** | **string** |  | [optional]
**housenumber** | **string** |  | [optional]
**locality** | **string** | The city, village, town, etc. that the place / address is part of. Note that values may not always match postal or local conventions perfectly. | [optional]
**locality_gid** | **string** |  | [optional]
**county** | **string** | Administrative divisions between localities and regions. Useful for disambiguating nearby results with similar names. | [optional]
**region** | **string** | Typically the first administrative division within a country. For example, a US state or a Canadian province. | [optional]
**region_a** | **string** | The abbreviation for the region. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
