<?php
/**
 * GeospatialApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace OpenAPI\Client\Test\Api;

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\GeospatialApi;
use OpenAPI\Client\ApiException;
use GuzzleHttp;
use OpenAPI\Client\Model\HeightRequest;
use PHPUnit\Framework\TestCase;

/**
 * Tests the geospatial API
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeospatialApiTest extends TestCase
{
    private GeospatialApi $apiInstance;
    private array $seoul = array('lon' => 126.99, 'lat' => 37.56);

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
        $this->apiInstance = new GeospatialApi(
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
     * Test case for elevation
     *
     * Get the elevation profile along a polyline or at a point.
     *
     * @throws ApiException
     */
    public function testElevation()
    {
        $req = new HeightRequest(array('id' => 'Seoul', 'shape' => [$this->seoul]));
        $result = $this->apiInstance->elevation($req);
        self::assertEquals($req['id'], $result->getId());
        self::assertNotCount(0, $result->getHeight());
        self::assertGreaterThanOrEqual(0, $result->getHeight()[0]);
    }

    /**
     * Test case for ranged elevation
     *
     * Get the elevation profile along a polyline or at a point.
     *
     * @throws ApiException
     */
    public function testRangedElevation()
    {
        $req = new HeightRequest(array('id' => 'Seoul', 'shape' => [$this->seoul], 'range' => true));
        $result = $this->apiInstance->elevation($req);
        self::assertEquals($req['id'], $result->getId());
        self::assertNotCount(0, $result->getRangeHeight());
        self::assertEquals(0, $result->getRangeHeight()[0][0]);
        self::assertGreaterThan(0, $result->getRangeHeight()[0][1]);
    }

    /**
     * Test case for tzLookup
     *
     * Get the current time zone information for any point on earth.
     *
     * @throws ApiException
     */
    public function testTzLookup()
    {
        $result = $this->apiInstance->tzLookup($this->seoul['lat'], $this->seoul['lon']);
        self::assertEquals('Asia/Seoul', $result->getTzId());
    }
}
