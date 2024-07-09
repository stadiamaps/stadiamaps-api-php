<?php
/**
 * RoutingApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace OpenAPI\Client\Test\Api;

use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\RoutingApi;
use OpenAPI\Client\ApiException;
use GuzzleHttp;
use OpenAPI\Client\Model\CostingModel;
use OpenAPI\Client\Model\DistanceUnit;
use OpenAPI\Client\Model\IsochroneRequest;
use OpenAPI\Client\Model\MapMatchRequest;
use OpenAPI\Client\Model\MatrixRequest;
use OpenAPI\Client\Model\NearestRoadsRequest;
use OpenAPI\Client\Model\OptimizedRouteRequest;
use OpenAPI\Client\Model\RouteRequest;
use OpenAPI\Client\Model\RoutingWaypoint;
use OpenAPI\Client\Model\TraceAttributesRequest;
use OpenAPI\Client\Model\ValhallaLongUnits;
use PHPUnit\Framework\TestCase;

/**
 * Tests the routing API
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RoutingApiTest extends TestCase
{
    private RoutingApi $apiInstance;
    private array $locationA = array('lon' => -76.306572, 'lat' => 40.042072, 'type' => RoutingWaypoint::TYPE__BREAK);
    private array $locationB = array('lon' => -76.781559, 'lat' => 39.992115, 'type' => RoutingWaypoint::TYPE__BREAK);
    private array $locationC = array('lon' => -76.6956, 'lat' => 39.984519);

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
        $this->apiInstance = new RoutingApi(
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
     * Test case for isochrone
     *
     * Calculate areas of equal travel time from a location.
     *
     */
    public function testIsochrone()
    {
        $req = new IsochroneRequest(array('id' => 'kesklinn',
            'locations' => [
                [
                    'lat' => 59.436884,
                    'lon' => 24.742595
                ]
            ],
            'costing' => 'pedestrian',
            'contours' => [
                array(
                    'time' => 5,
                    'color' => 'aabbcc'
                )
            ],
            'polygons' => true));
        $result = $this->apiInstance->isochrone($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals("FeatureCollection", $result->getType());
        self::assertNotCount(0, $result->getFeatures());
    }

    /**
     * Test case for mapMatch
     *
     * Match a recorded route to the road network.
     *
     * @throws ApiException
     */
    public function testMapMatch()
    {
        $req = new MapMatchRequest(array('id' => 'mapMatch',
            'encoded_polyline' => '_grbgAh~{nhF?lBAzBFvBHxBEtBKdB?fB@dBZdBb@hBh@jBb@x@\|@x@pB\x@v@hBl@nBPbCXtBn@|@z@ZbAEbAa@~@q@z@QhA]pAUpAVhAPlAWtASpAAdA[dASdAQhAIlARjANnAZhAf@n@`A?lB^nCRbA\xB`@vBf@tBTbCFbARzBZvBThBRnBNrBP`CHbCF`CNdCb@vBX`ARlAJfADhA@dAFdAP`AR`Ah@hBd@bBl@rBV|B?vB]tBCvBBhAF`CFnBXtAVxAVpAVtAb@|AZ`Bd@~BJfA@fAHdADhADhABjAGzAInAAjAB|BNbCR|BTjBZtB`@lBh@lB\|Bl@rBXtBN`Al@g@t@?nAA~AKvACvAAlAMdAU`Ac@hAShAI`AJ`AIdAi@bAu@|@k@p@]p@a@bAc@z@g@~@Ot@Bz@f@X`BFtBXdCLbAf@zBh@fBb@xAb@nATjAKjAW`BI|AEpAHjAPdAAfAGdAFjAv@p@XlAVnA?~A?jAInAPtAVxAXnAf@tBDpBJpBXhBJfBDpAZ|Ax@pAz@h@~@lA|@bAnAd@hAj@tAR~AKxAc@xAShA]hAIdAAjA]~A[v@BhB?dBSv@Ct@CvAI~@Oz@Pv@dAz@lAj@~A^`B^|AXvAVpAXdBh@~Ap@fCh@hB\zBN`Aj@xBFdA@jALbAPbAJdAHdAJbAHbAHfAJhALbA\lBTvBAdC@bC@jCKjASbC?`CM`CDpB\xAj@tB\fA\bAVfAJdAJbAXz@L|BO`AOdCDdA@~B\z@l@v@l@v@l@r@j@t@b@x@b@r@z@jBVfCJdAJdANbCPfCF|BRhBS~BS`AYbAe@~BQdA',
            'costing' => CostingModel::PEDESTRIAN,
            'units' => DistanceUnit::MI));
        $result = $this->apiInstance->mapMatch($req);
        self::assertEquals(0, $result->getTrip()->getStatus());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getTrip()->getUnits());
        self::assertNotCount(0, $result->getTrip()->getLegs());
        self::assertNotCount(0, $result->getTrip()->getLegs()[0]->getManeuvers());
    }

    /**
     * Test case for nearestRoads
     *
     * Find the nearest roads to the set of input locations.
     *
     * @throws ApiException
     */
    public function testNearestRoads()
    {
        $req = new NearestRoadsRequest(array("locations" => [array("lat" => 59.436884, "lon" => 24.742595)], "verbose" => true));
        $result = $this->apiInstance->nearestRoads($req);
        self::assertNotCount(0, $result[0]->getEdges());
    }

    /**
     * Test case for optimizedRoute
     *
     * Calculate an optimized route between a known start and end point..
     *
     * @throws ApiException
     */
    public function testOptimizedRoute()
    {
        $req = new OptimizedRouteRequest(array(
            'id' => 'optimizedRoute',
            'locations' => [$this->locationA, $this->locationB, $this->locationC, $this->locationA],
            'costing' => CostingModel::AUTO,
            'costing_options' => array(CostingModel::AUTO => array('use_highways' => 0.3)),
            'units' => DistanceUnit::MI
        ));
        $result = $this->apiInstance->optimizedRoute($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals(0, $result->getTrip()->getStatus());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getTrip()->getUnits());
        self::assertCount(3, $result->getTrip()->getLegs());
        self::assertNotCount(0, $result->getTrip()->getLegs()[0]->getManeuvers());
    }

    /**
     * Test case for route
     *
     * Get turn by turn routing instructions between two or more locations.
     *
     */
    public function testRoute()
    {
        $req = new RouteRequest(array(
            'id' => 'route',
            'locations' => [$this->locationA, $this->locationB],
            'costing' => CostingModel::AUTO,
            'costing_options' => array(CostingModel::AUTO => array('use_highways' => 0.3)),
            'units' => DistanceUnit::MI
        ));
        $result = $this->apiInstance->optimizedRoute($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals(0, $result->getTrip()->getStatus());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getTrip()->getUnits());
        self::assertCount(1, $result->getTrip()->getLegs());
        self::assertCount(0, $result->getAlternates() ?? []);
        self::assertNotCount(0, $result->getTrip()->getLegs()[0]->getManeuvers());
    }

    /**
     * Test case for timeDistanceMatrix
     *
     * Calculate a time distance matrix for use in an optimizer.
     *
     * @throws ApiException
     */
    public function testTimeDistanceMatrix()
    {
        $req = new MatrixRequest(array(
            'id' => 'matrix',
            'sources' => [
                array('lat' => 58.891957, 'lon' => 22.726262),
                array('lat' => 59.1558, 'lon' => 23.762758),
            ],
            'targets' => [
                array('lat' => 59.176153, 'lon' => 23.846605),
                array('lat' => 59.562853, 'lon' => 23.096114),
            ],
            'costing' => CostingModel::BICYCLE,
        ));
        $result = $this->apiInstance->timeDistanceMatrix($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertSameSize($req->getSources(), $result->getSources());
        self::assertSameSize($req->getTargets(), $result->getTargets());
        self::assertNotCount(0, $result->getSourcesToTargets());
        self::assertEquals(ValhallaLongUnits::KILOMETERS, $result->getUnits());
    }

    /**
     * Test case for traceAttributes
     *
     * Trace the attributes of roads visited on a route..
     *
     * @throws ApiException
     */
    public function testTraceAttributes()
    {
        $req = new TraceAttributesRequest(array(
            'id' => 'traceAttributes',
            'encoded_polyline' => '_grbgAh~{nhF?lBAzBFvBHxBEtBKdB?fB@dBZdBb@hBh@jBb@x@\|@x@pB\x@v@hBl@nBPbCXtBn@|@z@ZbAEbAa@~@q@z@QhA]pAUpAVhAPlAWtASpAAdA[dASdAQhAIlARjANnAZhAf@n@`A?lB^nCRbA\xB`@vBf@tBTbCFbARzBZvBThBRnBNrBP`CHbCF`CNdCb@vBX`ARlAJfADhA@dAFdAP`AR`Ah@hBd@bBl@rBV|B?vB]tBCvBBhAF`CFnBXtAVxAVpAVtAb@|AZ`Bd@~BJfA@fAHdADhADhABjAGzAInAAjAB|BNbCR|BTjBZtB`@lBh@lB\|Bl@rBXtBN`Al@g@t@?nAA~AKvACvAAlAMdAU`Ac@hAShAI`AJ`AIdAi@bAu@|@k@p@]p@a@bAc@z@g@~@Ot@Bz@f@X`BFtBXdCLbAf@zBh@fBb@xAb@nATjAKjAW`BI|AEpAHjAPdAAfAGdAFjAv@p@XlAVnA?~A?jAInAPtAVxAXnAf@tBDpBJpBXhBJfBDpAZ|Ax@pAz@h@~@lA|@bAnAd@hAj@tAR~AKxAc@xAShA]hAIdAAjA]~A[v@BhB?dBSv@Ct@CvAI~@Oz@Pv@dAz@lAj@~A^`B^|AXvAVpAXdBh@~Ap@fCh@hB\zBN`Aj@xBFdA@jALbAPbAJdAHdAJbAHbAHfAJhALbA\lBTvBAdC@bC@jCKjASbC?`CM`CDpB\xAj@tB\fA\bAVfAJdAJbAXz@L|BO`AOdCDdA@~B\z@l@v@l@v@l@r@j@t@b@x@b@r@z@jBVfCJdAJdANbCPfCF|BRhBS~BS`AYbAe@~BQdA',
            'shape_match' => TraceAttributesRequest::SHAPE_MATCH_MAP_SNAP,
            'costing' => CostingModel::PEDESTRIAN,
            'units' => DistanceUnit::MI
        ));
        $result = $this->apiInstance->traceAttributes($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getUnits());
        self::assertNotCount(0, $result->getEdges());
        self::assertNotCount(0, $result->getAdmins());
        self::assertNotCount(0, $result->getMatchedPoints());
        self::assertNotEmpty($result->getShape());
    }
}
