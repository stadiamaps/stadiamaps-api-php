# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## Version 5.0.0 - 2026-04-10

### Added

[Traffic-influenced routing](https://stadiamaps.com/products/routing-navigation/traffic-influenced-routing/)
is now available for cars, busses, taxis, and trucks!
Traffic-influenced routing profiles come in two variants:

- Adaptive traffic profiles use either current conditions or predictive data,
  automatically selecting the best one given your request parameters.
- Premium traffic profiles use both current conditions and predictive data
  to give you the best ETAs, isochrones, and routes.

We've also expanded the routing API with even more flexibility:

- Time-dependent routing: the new traffic profiles assume "departing now" by default.
  But you can also specify departure or arrival at a specific time.
  For time/distance matrix calculations, you can even specify this at the individual source/target level.
- Penalties (routing is allowed, but discouraged, so that these features can be avoided)
  - Private access roads
  - Alleys
  - (Rail) ferries
  - Elevator use
  - Use of residential, service, or other undesirable roads by heavy vehicles
- Hard exclusions
  - Cash-only tolls
  - Unpaved roads
- Time vs distance preference: you can specify a percentage weight between the two instead of the default (time-based) or purely shortest
- Truck axle restrictions

Finally, we've launched version 2 of our time zone API!
There is no significant difference in the functionality,
but we've rectified a long-standing point of confusion with how we communicated offsets from standard time.

### Changed

The most notable breaking change is that nearest roads requests now have their own costing model type.
To migrate, simply switch to the new type.
No endpoint functionality has changed.

We have also removed some properties from routing endpoint models which had no effect.
For example, the Nearest Roads API does not return directions,
but it still accepted a directions type parameter.
Most existing code should continue to work as-is.

## Version 4.0.1 - 2025-06-12

### Fixed

- Add two missing OSRM maneuver types which were mistakenly omitted.

## Version 4.0.0 - 2025-06-11

### Added

- Support for the v2 `search` (forward geocoding) endpoint! The new API includes better structure, more details, and better address formatting.

```diff
- $result = $this->apiInstance->search("Telliskivi 60a/3, Tallinn, Estonia");
+ $result = $this->apiInstance->searchV2("Telliskivi 60a/3, Tallinn, Estonia");
```

For an overview of the structural changes we've made in the V2 API,
refer to the [migration guide](https://docs.stadiamaps.com/geocoding-search-autocomplete/v2-api-migration-guide/).

### Fixed

- **Breaking change:** The `maneuvers` property on route responses was previously marked as required.
  However, it is possible to explicitly request routes with this field removed.
  These would fail validation and the whole request would end with an exception
  in the API client.
  This has been fixed in this version, so the property is optional.

## Version 3.3.0 - 2025-06-03

### Added

- New fields to the time zone API responses including localized timestamps in several standard formats.

### Fixed

- Fix a bug which caused structured search bulk requests to incorrectly spell the `postalcode` field.

## Version 3.2.0 - 2025-04-21

# Added

- Add documentation for the geocoding metadata `query` field.

## Fixed

- Removed boundary circle properties that were mistakenly added.
  They did not behave as expected, so this is a bug fix despite being a code-breaking change if you used it.
- Added missing water layers to context.

## Version 3.1.0 - 2025-04-07

### Added

* Support for the v2 reverse geocoding endpoint! The new API includes better structure, more details, and better address formatting.

```diff
- $result = $this->apiInstance->reverse(59.444351, 24.750645);
+ $result = $this->apiInstance->reverseV2(59.444351, 24.750645);
```

For an overview of the structural changes we've made in the V2 API,
refer to the [migration guide](https://docs.stadiamaps.com/geocoding-search-autocomplete/v2-api-migration-guide/).

### Fixed

* Added the `wheelchair` property to the OSM addendum model (it was in the API response, but not explicitly modeled).
* Fix the types of the Natural Earth and Karmashapes identifiers

## Version 3.0.0 - 2025-04-07

### Added

- Support for the v2 autocomplete and place details APIs!
- **BREAKING:** We have renamed the Place Details method to clarify its purpose.

If you want to keep using the v1 endpoint, you can amend your code like so:

```diff
- $result = $this->apiInstance->place([$this->kultuurikatel['gid']]);
+ $result = $this->apiInstance->placeDetails([$this->kultuurikatel['gid']]);
```

To upgrade to the v2 Place Details endpoint, which features improved address formatting,
use the new V2 method:

```diff
- $result = $this->apiInstance->place([$this->kultuurikatel['gid']]);
+ $result = $this->apiInstance->placeDetailsV2([$this->kultuurikatel['gid']]);
```

For an overview of the structural changes we've made in the V2 API,
refer to the [migration guide](https://docs.stadiamaps.com/geocoding-search-autocomplete/v2-api-migration-guide/).

## Version 2.0.0 - 2025-01-26

### Added

- BREAKING: Renamed models containing Valhalla and Pelias in their names to be generic. These now have rout(e|ing) or geocod(e|ing) prefixes.
- Explicitly documented more properties on the geocoding feature model.
- Adds support for the `foursquare` data source.
- Documents the `elevation_interval` parameter on certain routing requests.

## Version 1.3.0 - 2024-09-04

### Added

- Support for the OSRM format and navigation aids

## Version 1.2.1 - 2024-08-16

### Fixed

- Improve modeling of bulk geocoding

## Version 1.2.0 - 2024-08-15

### Fixed

- Isochrone request models now support all costing models

## Version 1.1.0 - 2024-07-31

### Added

- Add support for bulk geocoding

## Version 1.0.0 - 2027-07-09

Initial release!
