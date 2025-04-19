# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
