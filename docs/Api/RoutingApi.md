# OpenAPI\Client\RoutingApi

All URIs are relative to https://api.stadiamaps.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**isochrone()**](RoutingApi.md#isochrone) | **POST** /isochrone/v1 | Calculate areas of equal travel time from a location. |
| [**mapMatch()**](RoutingApi.md#mapMatch) | **POST** /map_match/v1 | Match a recorded route to the road network. |
| [**nearestRoads()**](RoutingApi.md#nearestRoads) | **POST** /nearest_roads/v1 | Find the nearest roads to the set of input locations. |
| [**optimizedRoute()**](RoutingApi.md#optimizedRoute) | **POST** /optimized_route/v1 | Calculate an optimized route between a known start and end point. |
| [**route()**](RoutingApi.md#route) | **POST** /route/v1 | Get turn by turn routing instructions between two or more locations. |
| [**timeDistanceMatrix()**](RoutingApi.md#timeDistanceMatrix) | **POST** /matrix/v1 | Calculate a time distance matrix for use in an optimizer. |
| [**traceAttributes()**](RoutingApi.md#traceAttributes) | **POST** /trace_attributes/v1 | Trace the attributes of roads visited on a route. |


## `isochrone()`

```php
isochrone($isochrone_request): \OpenAPI\Client\Model\IsochroneResponse
```

Calculate areas of equal travel time from a location.

The isochrone API lets you compute or visualize areas of roughly equal travel time based on the routing graph. The resulting polygon can be rendered on a map and shaded much like elevation contours and used for exploring urban mobility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isochrone_request = new \OpenAPI\Client\Model\IsochroneRequest(); // \OpenAPI\Client\Model\IsochroneRequest

try {
    $result = $apiInstance->isochrone($isochrone_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->isochrone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isochrone_request** | [**\OpenAPI\Client\Model\IsochroneRequest**](../Model/IsochroneRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IsochroneResponse**](../Model/IsochroneResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mapMatch()`

```php
mapMatch($map_match_request): \OpenAPI\Client\Model\MapMatchRouteResponse
```

Match a recorded route to the road network.

The map matching API transforms a recorded route into navigation instructions like you would get from the `route` endpoint. The input can be in the form of either an encoded polyline, or (optionally) timestamped coordinates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$map_match_request = new \OpenAPI\Client\Model\MapMatchRequest(); // \OpenAPI\Client\Model\MapMatchRequest

try {
    $result = $apiInstance->mapMatch($map_match_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->mapMatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **map_match_request** | [**\OpenAPI\Client\Model\MapMatchRequest**](../Model/MapMatchRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MapMatchRouteResponse**](../Model/MapMatchRouteResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nearestRoads()`

```php
nearestRoads($nearest_roads_request): \OpenAPI\Client\Model\LocateObject[]
```

Find the nearest roads to the set of input locations.

The nearest roads API allows you query for detailed information about streets and intersections near the input locations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nearest_roads_request = new \OpenAPI\Client\Model\NearestRoadsRequest(); // \OpenAPI\Client\Model\NearestRoadsRequest

try {
    $result = $apiInstance->nearestRoads($nearest_roads_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->nearestRoads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nearest_roads_request** | [**\OpenAPI\Client\Model\NearestRoadsRequest**](../Model/NearestRoadsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocateObject[]**](../Model/LocateObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optimizedRoute()`

```php
optimizedRoute($optimized_route_request): \OpenAPI\Client\Model\RouteResponse
```

Calculate an optimized route between a known start and end point.

The optimized route API is a mix of the matrix and normal route API. For an optimized route, the start and end point are fixed, but the intermediate points will be re-ordered to form an optimal route visiting all nodes once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$optimized_route_request = new \OpenAPI\Client\Model\OptimizedRouteRequest(); // \OpenAPI\Client\Model\OptimizedRouteRequest

try {
    $result = $apiInstance->optimizedRoute($optimized_route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->optimizedRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **optimized_route_request** | [**\OpenAPI\Client\Model\OptimizedRouteRequest**](../Model/OptimizedRouteRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `route()`

```php
route($route_request): \OpenAPI\Client\Model\RouteResponse
```

Get turn by turn routing instructions between two or more locations.

The route (turn-by-turn) API computes routes between two or more locations. It supports a variety of tunable costing methods, and supports routing through intermediate waypoints and discontinuous multi-leg routes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_request = new \OpenAPI\Client\Model\RouteRequest(); // \OpenAPI\Client\Model\RouteRequest

try {
    $result = $apiInstance->route($route_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->route: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_request** | [**\OpenAPI\Client\Model\RouteRequest**](../Model/RouteRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RouteResponse**](../Model/RouteResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeDistanceMatrix()`

```php
timeDistanceMatrix($matrix_request): \OpenAPI\Client\Model\MatrixResponse
```

Calculate a time distance matrix for use in an optimizer.

The time distance matrix API lets you compare travel times between a set of possible start and end points. See https://docs.stadiamaps.com/limits/ for documentation of our latest limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$matrix_request = new \OpenAPI\Client\Model\MatrixRequest(); // \OpenAPI\Client\Model\MatrixRequest

try {
    $result = $apiInstance->timeDistanceMatrix($matrix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->timeDistanceMatrix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **matrix_request** | [**\OpenAPI\Client\Model\MatrixRequest**](../Model/MatrixRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MatrixResponse**](../Model/MatrixResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `traceAttributes()`

```php
traceAttributes($trace_attributes_request): \OpenAPI\Client\Model\TraceAttributesResponse
```

Trace the attributes of roads visited on a route.

The trace attributes endpoint retrieves detailed information along a route, returning details for each section along the path, as well as any intersections encountered. In addition to tracing a recording route, this is great for providing just-in-time info to navigation applications, enabling them to conserve resources by omitting info like speed limits upfront that may be irrelevant if the user goes off-route.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trace_attributes_request = new \OpenAPI\Client\Model\TraceAttributesRequest(); // \OpenAPI\Client\Model\TraceAttributesRequest

try {
    $result = $apiInstance->traceAttributes($trace_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->traceAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trace_attributes_request** | [**\OpenAPI\Client\Model\TraceAttributesRequest**](../Model/TraceAttributesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TraceAttributesResponse**](../Model/TraceAttributesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
