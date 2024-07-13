# Stadia Maps PHP SDK

The Stadia Maps Geospatial APIs provide you with the data you need to build awesome applications.

For more information, please visit [https://docs.stadiamaps.com](https://docs.stadiamaps.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add something like this to `composer.json`:

```json
{
  "require": {
    "stadiamaps/stadiamaps-api-php": "1.*"
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

// Configure API key authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');

$apiInstance = new OpenAPI\Client\Api\GeocodingApi(
    new GuzzleHttp\Client(),
    $config
);

$text = '1600 Pennsylvania Ave NW'; // The place name (address, venue name, etc.) to search for.

try {
    $result = $apiInstance->autocomplete($text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->autocomplete: ', $e->getMessage(), PHP_EOL;
}
```
