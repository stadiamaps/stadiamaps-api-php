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
        $config = Configuration::getDefaultConfiguration()->setApiKey('api_key', getenv('API_KEY'));
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
    public function testAutocomplete()
    {
        $result = $this->apiInstance->autocomplete($this->address);
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for place
     *
     * Retrieve details of a place using its GID.
     *
     * @throws ApiException
     */
    public function testPlace()
    {
        $result = $this->apiInstance->place([$this->kultuurikatel['gid']]);
        self::assertCount(1, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
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
        $result = $this->apiInstance->reverse($this->kultuurikatel['coords'][1], $this->kultuurikatel['coords'][0]);
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
        self::assertEquals('address', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for reverse with an uncommon layer
     *
     * @throws ApiException
     */
    public function testReverseUncommonLayer()
    {
        $result = $this->apiInstance->reverse($this->kultuurikatel['coords'][0], $this->kultuurikatel['coords'][1]);
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('marinearea', $result->getFeatures()[0]->getProperties()->getLayer());
    }

    /**
     * Test case for search
     *
     * Search for location and other info using a place name or address (forward geocoding).
     *
     * @throws ApiException
     */
    public function testSearch()
    {
        $result = $this->apiInstance->search($this->address);
        self::assertNotCount(0, $result->getFeatures());
        self::assertEquals('Estonia', $result->getFeatures()[0]->getProperties()->getCountry());
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
        $result = $this->apiInstance->searchStructured($this->address, null, null, null, null, null, null, "EE");
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
            new SearchBulkQuery(array(
                "endpoint" => "/v1/search",
                "query" => new SearchQuery(array("text" => $this->address)))),
            new SearchStructuredBulkQuery(array(
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
