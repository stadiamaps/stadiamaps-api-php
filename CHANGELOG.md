# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
