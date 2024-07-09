<?php
/**
 * EuEndpointApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace OpenAPI\Client\Test\Api;

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\GeocodingApi;
use OpenAPI\Client\ApiException;
use GuzzleHttp;
use PHPUnit\Framework\TestCase;

/**
 * Tests the API using the EU endpoint
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EuEndpointApiTest extends TestCase
{
    private GeocodingApi $apiInstance;
    private string $address = 'Põhja pst 27';

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $config = Configuration::getDefaultConfiguration()->setApiKey('api_key', getenv('API_KEY'))->setHost('https://api-eu.stadiamaps.com');
        $this->apiInstance = new GeocodingApi(
            new GuzzleHttp\Client(),
            $config
        );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for autocomplete
     *
     * Search and geocode quickly based on partial input.
     *
     * @throws ApiException
     */
    public function testEuAutocomplete()
    {
        $result = $this->apiInstance->autocomplete($this->address);
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }
}