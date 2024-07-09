# OpenAPI\Client\GeocodingApi

All URIs are relative to https://api.stadiamaps.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autocomplete()**](GeocodingApi.md#autocomplete) | **GET** /geocoding/v1/autocomplete | Search and geocode quickly based on partial input. |
| [**place()**](GeocodingApi.md#place) | **GET** /geocoding/v1/place | Retrieve details of a place using its GID. |
| [**reverse()**](GeocodingApi.md#reverse) | **GET** /geocoding/v1/reverse | Find places and addresses near geographic coordinates (reverse geocoding). |
| [**search()**](GeocodingApi.md#search) | **GET** /geocoding/v1/search | Search for location and other info using a place name or address (forward geocoding). |
| [**searchStructured()**](GeocodingApi.md#searchStructured) | **GET** /geocoding/v1/search/structured | Find locations matching components (structured forward geocoding). |


## `autocomplete()`

```php
autocomplete($text, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang): \OpenAPI\Client\Model\PeliasResponse
```

Search and geocode quickly based on partial input.

Autocomplete enables interactive search-as-you-type user experiences, suggesting places as you type, along with information that will help your users find the correct place quickly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = 1600 Pennsylvania Ave NW; // string | The place name (address, venue name, etc.) to search for.
$focus_point_lat = 3.4; // float | The latitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lon`.
$focus_point_lon = 3.4; // float | The longitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lat`.
$boundary_rect_min_lat = 3.4; // float | Defines the min latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lat = 3.4; // float | Defines the max latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_min_lon = 3.4; // float | Defines the min longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lon = 3.4; // float | Defines the max longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_circle_lat = 3.4; // float | The latitude of the center of a circle to limit the search to. Requires `boundary.circle.lon`.
$boundary_circle_lon = 3.4; // float | The longitude of the center of a circle to limit the search to. Requires `boundary.circle.lat`.
$boundary_circle_radius = 3.4; // float | The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified.
$boundary_country = array('boundary_country_example'); // string[] | A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible.
$boundary_gid = 'boundary_gid_example'; // string | The Pelias GID of an area to limit the search to.
$layers = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasLayer()); // \OpenAPI\Client\Model\PeliasLayer[] | A list of layers to limit the search to.
$sources = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasSource()); // \OpenAPI\Client\Model\PeliasSource[] | A list of sources to limit the search to.
$size = 56; // int | The maximum number of results to return.
$lang = 'lang_example'; // string | A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a `langtag` (in RFC 5646 terms) can contain script, region, etc., only the `language` portion, an ISO 639 code, will be considered. So `en-US` and `en-GB` will both be treated as English.

try {
    $result = $apiInstance->autocomplete($text, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->autocomplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text** | **string**| The place name (address, venue name, etc.) to search for. | |
| **focus_point_lat** | **float**| The latitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lon&#x60;. | [optional] |
| **focus_point_lon** | **float**| The longitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lat&#x60;. | [optional] |
| **boundary_rect_min_lat** | **float**| Defines the min latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lat** | **float**| Defines the max latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_min_lon** | **float**| Defines the min longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lon** | **float**| Defines the max longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_circle_lat** | **float**| The latitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lon&#x60;. | [optional] |
| **boundary_circle_lon** | **float**| The longitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lat&#x60;. | [optional] |
| **boundary_circle_radius** | **float**| The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified. | [optional] |
| **boundary_country** | [**string[]**](../Model/string.md)| A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible. | [optional] |
| **boundary_gid** | **string**| The Pelias GID of an area to limit the search to. | [optional] |
| **layers** | [**\OpenAPI\Client\Model\PeliasLayer[]**](../Model/\OpenAPI\Client\Model\PeliasLayer.md)| A list of layers to limit the search to. | [optional] |
| **sources** | [**\OpenAPI\Client\Model\PeliasSource[]**](../Model/\OpenAPI\Client\Model\PeliasSource.md)| A list of sources to limit the search to. | [optional] |
| **size** | **int**| The maximum number of results to return. | [optional] |
| **lang** | **string**| A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a &#x60;langtag&#x60; (in RFC 5646 terms) can contain script, region, etc., only the &#x60;language&#x60; portion, an ISO 639 code, will be considered. So &#x60;en-US&#x60; and &#x60;en-GB&#x60; will both be treated as English. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeliasResponse**](../Model/PeliasResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `place()`

```php
place($ids, $lang): \OpenAPI\Client\Model\PeliasResponse
```

Retrieve details of a place using its GID.

Many search result components include an associated GID field (for example, an address may have a `localadmin_gid`). The place endpoint lets you look up these places directly by ID. Note that these IDs are not stable for all sources. See the [online documentation](https://docs.stadiamaps.com/geocoding-search-autocomplete/place-lookup/) for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | A list of Pelias GIDs to search for.
$lang = 'lang_example'; // string | A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a `langtag` (in RFC 5646 terms) can contain script, region, etc., only the `language` portion, an ISO 639 code, will be considered. So `en-US` and `en-GB` will both be treated as English.

try {
    $result = $apiInstance->place($ids, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->place: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| A list of Pelias GIDs to search for. | |
| **lang** | **string**| A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a &#x60;langtag&#x60; (in RFC 5646 terms) can contain script, region, etc., only the &#x60;language&#x60; portion, an ISO 639 code, will be considered. So &#x60;en-US&#x60; and &#x60;en-GB&#x60; will both be treated as English. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeliasResponse**](../Model/PeliasResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reverse()`

```php
reverse($point_lat, $point_lon, $boundary_circle_radius, $layers, $sources, $boundary_country, $boundary_gid, $size, $lang): \OpenAPI\Client\Model\PeliasResponse
```

Find places and addresses near geographic coordinates (reverse geocoding).

Reverse geocoding and search finds places and addresses near any geographic coordinates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$point_lat = 48.848268; // float | The latitude of the point at which to perform the search.
$point_lon = 2.294471; // float | The longitude of the point at which to perform the search.
$boundary_circle_radius = 3.4; // float | The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified.
$layers = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasLayer()); // \OpenAPI\Client\Model\PeliasLayer[] | A list of layers to limit the search to.
$sources = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasSource()); // \OpenAPI\Client\Model\PeliasSource[] | A list of sources to limit the search to.
$boundary_country = array('boundary_country_example'); // string[] | A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible.
$boundary_gid = 'boundary_gid_example'; // string | The Pelias GID of an area to limit the search to.
$size = 56; // int | The maximum number of results to return.
$lang = 'lang_example'; // string | A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a `langtag` (in RFC 5646 terms) can contain script, region, etc., only the `language` portion, an ISO 639 code, will be considered. So `en-US` and `en-GB` will both be treated as English.

try {
    $result = $apiInstance->reverse($point_lat, $point_lon, $boundary_circle_radius, $layers, $sources, $boundary_country, $boundary_gid, $size, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->reverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **point_lat** | **float**| The latitude of the point at which to perform the search. | |
| **point_lon** | **float**| The longitude of the point at which to perform the search. | |
| **boundary_circle_radius** | **float**| The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified. | [optional] |
| **layers** | [**\OpenAPI\Client\Model\PeliasLayer[]**](../Model/\OpenAPI\Client\Model\PeliasLayer.md)| A list of layers to limit the search to. | [optional] |
| **sources** | [**\OpenAPI\Client\Model\PeliasSource[]**](../Model/\OpenAPI\Client\Model\PeliasSource.md)| A list of sources to limit the search to. | [optional] |
| **boundary_country** | [**string[]**](../Model/string.md)| A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible. | [optional] |
| **boundary_gid** | **string**| The Pelias GID of an area to limit the search to. | [optional] |
| **size** | **int**| The maximum number of results to return. | [optional] |
| **lang** | **string**| A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a &#x60;langtag&#x60; (in RFC 5646 terms) can contain script, region, etc., only the &#x60;language&#x60; portion, an ISO 639 code, will be considered. So &#x60;en-US&#x60; and &#x60;en-GB&#x60; will both be treated as English. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeliasResponse**](../Model/PeliasResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($text, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang): \OpenAPI\Client\Model\PeliasResponse
```

Search for location and other info using a place name or address (forward geocoding).

The search endpoint lets you search for addresses, points of interest, and administrative areas. This is most commonly used for forward geocoding applications where you need to find the geographic coordinates of an address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$text = 1600 Pennsylvania Ave NW; // string | The place name (address, venue name, etc.) to search for.
$focus_point_lat = 3.4; // float | The latitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lon`.
$focus_point_lon = 3.4; // float | The longitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lat`.
$boundary_rect_min_lat = 3.4; // float | Defines the min latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lat = 3.4; // float | Defines the max latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_min_lon = 3.4; // float | Defines the min longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lon = 3.4; // float | Defines the max longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_circle_lat = 3.4; // float | The latitude of the center of a circle to limit the search to. Requires `boundary.circle.lon`.
$boundary_circle_lon = 3.4; // float | The longitude of the center of a circle to limit the search to. Requires `boundary.circle.lat`.
$boundary_circle_radius = 3.4; // float | The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified.
$boundary_country = array('boundary_country_example'); // string[] | A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible.
$boundary_gid = 'boundary_gid_example'; // string | The Pelias GID of an area to limit the search to.
$layers = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasLayer()); // \OpenAPI\Client\Model\PeliasLayer[] | A list of layers to limit the search to.
$sources = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasSource()); // \OpenAPI\Client\Model\PeliasSource[] | A list of sources to limit the search to.
$size = 56; // int | The maximum number of results to return.
$lang = 'lang_example'; // string | A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a `langtag` (in RFC 5646 terms) can contain script, region, etc., only the `language` portion, an ISO 639 code, will be considered. So `en-US` and `en-GB` will both be treated as English.

try {
    $result = $apiInstance->search($text, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text** | **string**| The place name (address, venue name, etc.) to search for. | |
| **focus_point_lat** | **float**| The latitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lon&#x60;. | [optional] |
| **focus_point_lon** | **float**| The longitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lat&#x60;. | [optional] |
| **boundary_rect_min_lat** | **float**| Defines the min latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lat** | **float**| Defines the max latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_min_lon** | **float**| Defines the min longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lon** | **float**| Defines the max longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_circle_lat** | **float**| The latitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lon&#x60;. | [optional] |
| **boundary_circle_lon** | **float**| The longitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lat&#x60;. | [optional] |
| **boundary_circle_radius** | **float**| The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified. | [optional] |
| **boundary_country** | [**string[]**](../Model/string.md)| A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible. | [optional] |
| **boundary_gid** | **string**| The Pelias GID of an area to limit the search to. | [optional] |
| **layers** | [**\OpenAPI\Client\Model\PeliasLayer[]**](../Model/\OpenAPI\Client\Model\PeliasLayer.md)| A list of layers to limit the search to. | [optional] |
| **sources** | [**\OpenAPI\Client\Model\PeliasSource[]**](../Model/\OpenAPI\Client\Model\PeliasSource.md)| A list of sources to limit the search to. | [optional] |
| **size** | **int**| The maximum number of results to return. | [optional] |
| **lang** | **string**| A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a &#x60;langtag&#x60; (in RFC 5646 terms) can contain script, region, etc., only the &#x60;language&#x60; portion, an ISO 639 code, will be considered. So &#x60;en-US&#x60; and &#x60;en-GB&#x60; will both be treated as English. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeliasResponse**](../Model/PeliasResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchStructured()`

```php
searchStructured($address, $neighbourhood, $borough, $locality, $county, $region, $postalcode, $country, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang): \OpenAPI\Client\Model\PeliasResponse
```

Find locations matching components (structured forward geocoding).

The structured search endpoint lets you search for addresses, points of interest, and administrative areas. Rather than a single string which the API must infer meaning from, the structured search endpoint allows you to specify the known components upfront, which is useful in many forward geocoding workflows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 11 Wall Street; // string | A street name, optionally with a house number.
$neighbourhood = Financial District; // string | Varies by area, but has a locally specific meaning (NOT always an official administrative unit).
$borough = Manhattan; // string | A unit within a city (not widely used, but present in places like NYC and Mexico City).
$locality = New York; // string | The city, village, town, etc. that the place/address is part of.
$county = New York County; // string | Administrative divisions between localities and regions. Not commonly used as input to structured geocoding.
$region = New York; // string | Typically the first administrative division within a country. For example, a US state or a Canadian province.
$postalcode = 10005; // string | A mail sorting code.
$country = USA; // string | A full name (ex: Canada), or a 2 or 3 character ISO code. Prefer ISO codes when possible.
$focus_point_lat = 3.4; // float | The latitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lon`.
$focus_point_lon = 3.4; // float | The longitude of the point to focus the search on. This will bias results toward the focus point. Requires `focus.point.lat`.
$boundary_rect_min_lat = 3.4; // float | Defines the min latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lat = 3.4; // float | Defines the max latitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_min_lon = 3.4; // float | Defines the min longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_rect_max_lon = 3.4; // float | Defines the max longitude component of a bounding box to limit the search to. Requires all other `boundary.rect` parameters to be specified.
$boundary_circle_lat = 3.4; // float | The latitude of the center of a circle to limit the search to. Requires `boundary.circle.lon`.
$boundary_circle_lon = 3.4; // float | The longitude of the center of a circle to limit the search to. Requires `boundary.circle.lat`.
$boundary_circle_radius = 3.4; // float | The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified.
$boundary_country = array('boundary_country_example'); // string[] | A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible.
$boundary_gid = 'boundary_gid_example'; // string | The Pelias GID of an area to limit the search to.
$layers = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasLayer()); // \OpenAPI\Client\Model\PeliasLayer[] | A list of layers to limit the search to.
$sources = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PeliasSource()); // \OpenAPI\Client\Model\PeliasSource[] | A list of sources to limit the search to.
$size = 56; // int | The maximum number of results to return.
$lang = 'lang_example'; // string | A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a `langtag` (in RFC 5646 terms) can contain script, region, etc., only the `language` portion, an ISO 639 code, will be considered. So `en-US` and `en-GB` will both be treated as English.

try {
    $result = $apiInstance->searchStructured($address, $neighbourhood, $borough, $locality, $county, $region, $postalcode, $country, $focus_point_lat, $focus_point_lon, $boundary_rect_min_lat, $boundary_rect_max_lat, $boundary_rect_min_lon, $boundary_rect_max_lon, $boundary_circle_lat, $boundary_circle_lon, $boundary_circle_radius, $boundary_country, $boundary_gid, $layers, $sources, $size, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->searchStructured: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| A street name, optionally with a house number. | [optional] |
| **neighbourhood** | **string**| Varies by area, but has a locally specific meaning (NOT always an official administrative unit). | [optional] |
| **borough** | **string**| A unit within a city (not widely used, but present in places like NYC and Mexico City). | [optional] |
| **locality** | **string**| The city, village, town, etc. that the place/address is part of. | [optional] |
| **county** | **string**| Administrative divisions between localities and regions. Not commonly used as input to structured geocoding. | [optional] |
| **region** | **string**| Typically the first administrative division within a country. For example, a US state or a Canadian province. | [optional] |
| **postalcode** | **string**| A mail sorting code. | [optional] |
| **country** | **string**| A full name (ex: Canada), or a 2 or 3 character ISO code. Prefer ISO codes when possible. | [optional] |
| **focus_point_lat** | **float**| The latitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lon&#x60;. | [optional] |
| **focus_point_lon** | **float**| The longitude of the point to focus the search on. This will bias results toward the focus point. Requires &#x60;focus.point.lat&#x60;. | [optional] |
| **boundary_rect_min_lat** | **float**| Defines the min latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lat** | **float**| Defines the max latitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_min_lon** | **float**| Defines the min longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_rect_max_lon** | **float**| Defines the max longitude component of a bounding box to limit the search to. Requires all other &#x60;boundary.rect&#x60; parameters to be specified. | [optional] |
| **boundary_circle_lat** | **float**| The latitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lon&#x60;. | [optional] |
| **boundary_circle_lon** | **float**| The longitude of the center of a circle to limit the search to. Requires &#x60;boundary.circle.lat&#x60;. | [optional] |
| **boundary_circle_radius** | **float**| The radius of the circle (in kilometers) to limit the search to. Defaults to 50km if unspecified. | [optional] |
| **boundary_country** | [**string[]**](../Model/string.md)| A list of countries to limit the search to. These may be either full names (ex: Canada), or an ISO 3116-1 alpha-2 or alpha-3 code. Prefer ISO codes when possible. | [optional] |
| **boundary_gid** | **string**| The Pelias GID of an area to limit the search to. | [optional] |
| **layers** | [**\OpenAPI\Client\Model\PeliasLayer[]**](../Model/\OpenAPI\Client\Model\PeliasLayer.md)| A list of layers to limit the search to. | [optional] |
| **sources** | [**\OpenAPI\Client\Model\PeliasSource[]**](../Model/\OpenAPI\Client\Model\PeliasSource.md)| A list of sources to limit the search to. | [optional] |
| **size** | **int**| The maximum number of results to return. | [optional] |
| **lang** | **string**| A BCP47 language tag which specifies a preference for localization of results. By default, results are in the default locale of the source data, but specifying a language will attempt to localize the results. Note that while a &#x60;langtag&#x60; (in RFC 5646 terms) can contain script, region, etc., only the &#x60;language&#x60; portion, an ISO 639 code, will be considered. So &#x60;en-US&#x60; and &#x60;en-GB&#x60; will both be treated as English. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeliasResponse**](../Model/PeliasResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
