# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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
