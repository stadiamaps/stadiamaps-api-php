# OpenAPIClient-php

The Stadia Maps Geospatial APIs provide you with the data you need to build awesome applications.

For more information, please visit [https://www.stadiamaps.com](https://www.stadiamaps.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.stadiamaps.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GeocodingApi* | [**autocomplete**](docs/Api/GeocodingApi.md#autocomplete) | **GET** /geocoding/v1/autocomplete | Search and geocode quickly based on partial input.
*GeocodingApi* | [**place**](docs/Api/GeocodingApi.md#place) | **GET** /geocoding/v1/place | Retrieve details of a place using its GID.
*GeocodingApi* | [**reverse**](docs/Api/GeocodingApi.md#reverse) | **GET** /geocoding/v1/reverse | Find places and addresses near geographic coordinates (reverse geocoding).
*GeocodingApi* | [**search**](docs/Api/GeocodingApi.md#search) | **GET** /geocoding/v1/search | Search for location and other info using a place name or address (forward geocoding).
*GeocodingApi* | [**searchStructured**](docs/Api/GeocodingApi.md#searchstructured) | **GET** /geocoding/v1/search/structured | Find locations matching components (structured forward geocoding).
*GeospatialApi* | [**elevation**](docs/Api/GeospatialApi.md#elevation) | **POST** /elevation/v1 | Get the elevation profile along a polyline or at a point.
*GeospatialApi* | [**tzLookup**](docs/Api/GeospatialApi.md#tzlookup) | **GET** /tz/lookup/v1 | Get the current time zone information for any point on earth.
*RoutingApi* | [**isochrone**](docs/Api/RoutingApi.md#isochrone) | **POST** /isochrone/v1 | Calculate areas of equal travel time from a location.
*RoutingApi* | [**mapMatch**](docs/Api/RoutingApi.md#mapmatch) | **POST** /map_match/v1 | Match a recorded route to the road network.
*RoutingApi* | [**nearestRoads**](docs/Api/RoutingApi.md#nearestroads) | **POST** /nearest_roads/v1 | Find the nearest roads to the set of input locations.
*RoutingApi* | [**optimizedRoute**](docs/Api/RoutingApi.md#optimizedroute) | **POST** /optimized_route/v1 | Calculate an optimized route between a known start and end point.
*RoutingApi* | [**route**](docs/Api/RoutingApi.md#route) | **POST** /route/v1 | Get turn by turn routing instructions between two or more locations.
*RoutingApi* | [**timeDistanceMatrix**](docs/Api/RoutingApi.md#timedistancematrix) | **POST** /matrix/v1 | Calculate a time distance matrix for use in an optimizer.
*RoutingApi* | [**traceAttributes**](docs/Api/RoutingApi.md#traceattributes) | **POST** /trace_attributes/v1 | Trace the attributes of roads visited on a route.

## Models

- [Access](docs/Model/Access.md)
- [AdminRegion](docs/Model/AdminRegion.md)
- [Administrative](docs/Model/Administrative.md)
- [AutoCostingOptions](docs/Model/AutoCostingOptions.md)
- [BaseCostingOptions](docs/Model/BaseCostingOptions.md)
- [BaseTraceRequest](docs/Model/BaseTraceRequest.md)
- [BicycleCostingOptions](docs/Model/BicycleCostingOptions.md)
- [BikeNetwork](docs/Model/BikeNetwork.md)
- [Contour](docs/Model/Contour.md)
- [Coordinate](docs/Model/Coordinate.md)
- [CostingModel](docs/Model/CostingModel.md)
- [CostingOptions](docs/Model/CostingOptions.md)
- [DirectionsOptions](docs/Model/DirectionsOptions.md)
- [DistanceUnit](docs/Model/DistanceUnit.md)
- [EdgeSign](docs/Model/EdgeSign.md)
- [EdgeUse](docs/Model/EdgeUse.md)
- [EndNode](docs/Model/EndNode.md)
- [GeoAttributes](docs/Model/GeoAttributes.md)
- [GeoJSONGeometry](docs/Model/GeoJSONGeometry.md)
- [GeoJSONGeometryBase](docs/Model/GeoJSONGeometryBase.md)
- [GeoJSONLineString](docs/Model/GeoJSONLineString.md)
- [GeoJSONPoint](docs/Model/GeoJSONPoint.md)
- [GeoJSONPolygon](docs/Model/GeoJSONPolygon.md)
- [GeocodingObject](docs/Model/GeocodingObject.md)
- [HeightRequest](docs/Model/HeightRequest.md)
- [HeightResponse](docs/Model/HeightResponse.md)
- [HighwayClassification](docs/Model/HighwayClassification.md)
- [IntersectingEdge](docs/Model/IntersectingEdge.md)
- [IsochroneCostingModel](docs/Model/IsochroneCostingModel.md)
- [IsochroneFeature](docs/Model/IsochroneFeature.md)
- [IsochroneProperties](docs/Model/IsochroneProperties.md)
- [IsochroneRequest](docs/Model/IsochroneRequest.md)
- [IsochroneResponse](docs/Model/IsochroneResponse.md)
- [LocateDetailedEdge](docs/Model/LocateDetailedEdge.md)
- [LocateEdge](docs/Model/LocateEdge.md)
- [LocateEdgeInfo](docs/Model/LocateEdgeInfo.md)
- [LocateNode](docs/Model/LocateNode.md)
- [LocateObject](docs/Model/LocateObject.md)
- [LowSpeedVehicleCostingOptions](docs/Model/LowSpeedVehicleCostingOptions.md)
- [ManeuverSign](docs/Model/ManeuverSign.md)
- [ManeuverSignElement](docs/Model/ManeuverSignElement.md)
- [MapMatchCostingModel](docs/Model/MapMatchCostingModel.md)
- [MapMatchRequest](docs/Model/MapMatchRequest.md)
- [MapMatchRouteResponse](docs/Model/MapMatchRouteResponse.md)
- [MapMatchTraceOptions](docs/Model/MapMatchTraceOptions.md)
- [MapMatchWaypoint](docs/Model/MapMatchWaypoint.md)
- [MatchedPoint](docs/Model/MatchedPoint.md)
- [MatrixCostingModel](docs/Model/MatrixCostingModel.md)
- [MatrixDistance](docs/Model/MatrixDistance.md)
- [MatrixRequest](docs/Model/MatrixRequest.md)
- [MatrixResponse](docs/Model/MatrixResponse.md)
- [MatrixWaypoint](docs/Model/MatrixWaypoint.md)
- [MotorScooterCostingOptions](docs/Model/MotorScooterCostingOptions.md)
- [MotorcycleCostingOptions](docs/Model/MotorcycleCostingOptions.md)
- [NearestRoadsRequest](docs/Model/NearestRoadsRequest.md)
- [NodeId](docs/Model/NodeId.md)
- [NodeType](docs/Model/NodeType.md)
- [OptimizedRouteRequest](docs/Model/OptimizedRouteRequest.md)
- [PedestrianCostingOptions](docs/Model/PedestrianCostingOptions.md)
- [PeliasGeoJSONFeature](docs/Model/PeliasGeoJSONFeature.md)
- [PeliasGeoJSONProperties](docs/Model/PeliasGeoJSONProperties.md)
- [PeliasGeoJSONPropertiesAddendum](docs/Model/PeliasGeoJSONPropertiesAddendum.md)
- [PeliasGeoJSONPropertiesAddendumOsm](docs/Model/PeliasGeoJSONPropertiesAddendumOsm.md)
- [PeliasLayer](docs/Model/PeliasLayer.md)
- [PeliasResponse](docs/Model/PeliasResponse.md)
- [PeliasSource](docs/Model/PeliasSource.md)
- [Restrictions](docs/Model/Restrictions.md)
- [RoadClass](docs/Model/RoadClass.md)
- [RouteLeg](docs/Model/RouteLeg.md)
- [RouteManeuver](docs/Model/RouteManeuver.md)
- [RouteRequest](docs/Model/RouteRequest.md)
- [RouteResponse](docs/Model/RouteResponse.md)
- [RouteResponseAlternatesInner](docs/Model/RouteResponseAlternatesInner.md)
- [RouteSummary](docs/Model/RouteSummary.md)
- [RouteTrip](docs/Model/RouteTrip.md)
- [RoutingResponseWaypoint](docs/Model/RoutingResponseWaypoint.md)
- [RoutingWaypoint](docs/Model/RoutingWaypoint.md)
- [RoutingWaypointAllOfSearchFilter](docs/Model/RoutingWaypointAllOfSearchFilter.md)
- [SimpleRoutingWaypoint](docs/Model/SimpleRoutingWaypoint.md)
- [Speeds](docs/Model/Speeds.md)
- [TraceAttributeFilterOptions](docs/Model/TraceAttributeFilterOptions.md)
- [TraceAttributeKey](docs/Model/TraceAttributeKey.md)
- [TraceAttributesBaseResponse](docs/Model/TraceAttributesBaseResponse.md)
- [TraceAttributesRequest](docs/Model/TraceAttributesRequest.md)
- [TraceAttributesResponse](docs/Model/TraceAttributesResponse.md)
- [TraceEdge](docs/Model/TraceEdge.md)
- [TravelMode](docs/Model/TravelMode.md)
- [Traversability](docs/Model/Traversability.md)
- [TruckCostingOptions](docs/Model/TruckCostingOptions.md)
- [TzResponse](docs/Model/TzResponse.md)
- [ValhallaLanguages](docs/Model/ValhallaLanguages.md)
- [ValhallaLongUnits](docs/Model/ValhallaLongUnits.md)
- [Warning](docs/Model/Warning.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@stadiamaps.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `6.5.0`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
