# OpenAPI\Client\GeospatialApi

All URIs are relative to https://api.stadiamaps.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**elevation()**](GeospatialApi.md#elevation) | **POST** /elevation/v1 | Get the elevation profile along a polyline or at a point. |
| [**tzLookup()**](GeospatialApi.md#tzLookup) | **GET** /tz/lookup/v1 | Get the current time zone information for any point on earth. |


## `elevation()`

```php
elevation($height_request): \OpenAPI\Client\Model\HeightResponse
```

Get the elevation profile along a polyline or at a point.

The Stadia elevation API allows you to get the elevation of any point on earth. You can pass either a simple set of points or a Google encoded polyline string. This pairs well with our routing APIs, so you can generate an elevation profile for your next bike or run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeospatialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$height_request = new \OpenAPI\Client\Model\HeightRequest(); // \OpenAPI\Client\Model\HeightRequest

try {
    $result = $apiInstance->elevation($height_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeospatialApi->elevation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **height_request** | [**\OpenAPI\Client\Model\HeightRequest**](../Model/HeightRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\HeightResponse**](../Model/HeightResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tzLookup()`

```php
tzLookup($lat, $lng, $timestamp): \OpenAPI\Client\Model\TzResponse
```

Get the current time zone information for any point on earth.

The Stadia TZ API provides time zone information, as well as information about any special offset (such as DST) in effect based on the latest IANA TZDB. Note that this API may not be accurate for timestamps in the past and does not claim to report precise nautical times in the open ocean beyond territorial waters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GeospatialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lat = 3.4; // float | The latitude of the point you are interested in.
$lng = 3.4; // float | The longitude of the point you are interested in.
$timestamp = 56; // int | The UNIX timestamp at which the UTC and DST offsets will be calculated. This defaults to the present time. This endpoint is not necessarily guaranteed to be accurate for timestamps that occurred in the past. Time zone geographic boundaries change over time, so if the point you are querying for was previously in a different time zone, historical results will not be accurate. If, however, the point has been in the same geographic time zone for a very long time (ex: `America/New_York`), the historical data may be accurate for 100+ years in the past (depending on how far back the IANA TZDB rules have been specified).

try {
    $result = $apiInstance->tzLookup($lat, $lng, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeospatialApi->tzLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lat** | **float**| The latitude of the point you are interested in. | |
| **lng** | **float**| The longitude of the point you are interested in. | |
| **timestamp** | **int**| The UNIX timestamp at which the UTC and DST offsets will be calculated. This defaults to the present time. This endpoint is not necessarily guaranteed to be accurate for timestamps that occurred in the past. Time zone geographic boundaries change over time, so if the point you are querying for was previously in a different time zone, historical results will not be accurate. If, however, the point has been in the same geographic time zone for a very long time (ex: &#x60;America/New_York&#x60;), the historical data may be accurate for 100+ years in the past (depending on how far back the IANA TZDB rules have been specified). | [optional] |

### Return type

[**\OpenAPI\Client\Model\TzResponse**](../Model/TzResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
