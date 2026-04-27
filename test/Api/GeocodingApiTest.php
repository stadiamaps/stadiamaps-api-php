<?php
/**
 * GeocodingApiTest
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
use OpenAPI\Client\Model\BulkRequest;
use OpenAPI\Client\Model\SearchBulkQuery;
use OpenAPI\Client\Model\SearchQuery;
use OpenAPI\Client\Model\SearchStructuredBulkQuery;
use OpenAPI\Client\Model\SearchStructuredQuery;
use PHPUnit\Framework\TestCase;

/**
 * Tests the geocoding API
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeocodingApiTest extends TestCase
{
    private GeocodingApi $apiInstance;
    private string $address = 'Põhja pst 27';
    private array $kultuurikatel = array('coords' => [24.750645, 59.444351], 'gid' => 'openstreetmap:address:way/109867749');

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
        $config = Configuration::getDefaultConfiguration()->setApiKey('api_key', getenv('STADIA_API_KEY'));
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
     * Test case for autocomplete V1
     *
     * Search and geocode quickly based on partial input.
     *
     * @throws ApiException
     */
    public function testAutocompleteV1()
    {
        $result = $this->apiInstance->autocomplete($this->address, lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for autocomplete V2
     *
     * Search and geocode quickly based on partial input.
     *
     * @throws ApiException
     */
    public function testAutocompleteV2()
    {
        $result = $this->apiInstance->autocompleteV2($this->address, lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertNull($result->getFeatures()[0]->getProperties()->getContext());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for place details V1
     *
     * Retrieve details of a place using its GID.
     *
     * @throws ApiException
     */
    public function testPlaceDetailsV1()
    {
        $result = $this->apiInstance->placeDetails([$this->kultuurikatel['gid']], lang: 'en');
        self::assertCount(1, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for place details V2
     *
     * Retrieve details of a place using its GID.
     *
     * @throws ApiException
     */
    public function testPlaceDetailsV2()
    {
        $result = $this->apiInstance->placeDetailsV2([$this->kultuurikatel['gid']], lang: 'en');
        self::assertCount(1, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getContext()->getWhosonfirst()->getCountry()->getName());
        self::assertEquals('EST', $result->getFeatures()[0]->getProperties()->getContext()->getIso3166A3());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for reverse
     *
     * Find places and addresses near geographic coordinates (reverse geocoding).
     *
     * @throws ApiException
     */
    public function testReverse()
    {
        $result = $this->apiInstance->reverse($this->kultuurikatel['coords'][1], $this->kultuurikatel['coords'][0], lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
    }

    /**
     * Test case for reverse V2
     *
     * Find places and addresses near geographic coordinates (reverse geocoding).
     *
     * @throws ApiException
     */
    public function testReverseV2()
    {
        $result = $this->apiInstance->reverseV2($this->kultuurikatel['coords'][1], $this->kultuurikatel['coords'][0], lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('EST', $result->getFeatures()[0]->getProperties()->getContext()->getIso3166A3());
    }

    /**
     * Test case for reverse with an uncommon layer
     *
     * @throws ApiException
     */
    public function testReverseUncommonLayer()
    {
        $result = $this->apiInstance->reverse($this->kultuurikatel['coords'][0], $this->kultuurikatel['coords'][1], lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('marinearea', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for reverse V2 with an uncommon layer
     *
     * @throws ApiException
     */
    public function testReverseUncommonLayerV2()
    {
        $result = $this->apiInstance->reverseV2($this->kultuurikatel['coords'][0], $this->kultuurikatel['coords'][1], lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('marinearea', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for search V1
     *
     * Search for location and other info using a place name or address (forward geocoding).
     *
     * @throws ApiException
     */
    public function testSearch()
    {
        $result = $this->apiInstance->search($this->address, lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for search V2
     *
     * Search for location and other info using a place name or address (forward geocoding).
     *
     * @throws ApiException
     */
    public function testSearchV2()
    {
        $result = $this->apiInstance->searchV2($this->address, lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getContext()->getWhosonfirst()->getCountry()->getName());
        self::assertEquals('EST', $result->getFeatures()[0]->getProperties()->getContext()->getIso3166A3());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for searchStructured
     *
     * Find locations matching components (structured forward geocoding).
     *
     * @throws ApiException
     */
    public function testSearchStructured()
    {
        $result = $this->apiInstance->searchStructured($this->address, country: "EE", lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());

        // Granular parameters
        $result = $this->apiInstance->searchStructured(street: "Põhja pst", house_number: "27", country: "EE", lang: 'en');
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for searchBulk
     *
     * Find locations matching components (multiple requests processed server-side).
     *
     * @throws ApiException
     */
    public function testSearchBulk()
    {
        $requests = array(
            new BulkRequest(array(
                "endpoint" => "/v1/search",
                "query" => new SearchQuery(array("text" => $this->address)))),
            new BulkRequest(array(
                "endpoint" => "/v1/search/structured",
                "query" => new SearchStructuredQuery(array("address" => $this->address, "country" => "EE", "layers" => ["coarse", "address"]))))
        );
        $result = $this->apiInstance->searchBulk($requests);
        self::assertCount(2, $result);

        foreach ($result as $item) {
            self::assertEquals(200, $item->getStatus());
            self::assertEquals('Estonia', $item->getResponse()->getFeatures()[0]->getProperties()->getCountry());
            self::assertEquals('address', $item->getResponse()->getFeatures()[0]->getProperties()->getLayer());
        }
    }
}
