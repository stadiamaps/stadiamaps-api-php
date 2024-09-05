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
use OpenAPI\Client\Model\AnnotationFilters;
use OpenAPI\Client\Model\AutoCostingOptions;
use OpenAPI\Client\Model\Contour;
use OpenAPI\Client\Model\Coordinate;
use OpenAPI\Client\Model\CostingModel;
use OpenAPI\Client\Model\CostingOptions;
use OpenAPI\Client\Model\DistanceUnit;
use OpenAPI\Client\Model\IsochroneRequest;
use OpenAPI\Client\Model\MapMatchRequest;
use OpenAPI\Client\Model\MatrixRequest;
use OpenAPI\Client\Model\MatrixWaypoint;
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
     * @throws ApiException
     */
    public function testIsochrone()
    {
        $req = (new IsochroneRequest())
            ->setId('kesklinn')
            ->setLocations([(new Coordinate())->setLat(59.436884)->setLon(24.742595)])
            ->setCosting(CostingModel::PEDESTRIAN)
            ->setContours([(new Contour())->setTime(5)->setColor('aabbcc')])
            ->setPolygons(true);
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
        $req = (new MapMatchRequest())
            ->setId('mapMatch')
            ->setEncodedPolyline('_grbgAh~{nhF?lBAzBFvBHxBEtBKdB?fB@dBZdBb@hBh@jBb@x@\|@x@pB\x@v@hBl@nBPbCXtBn@|@z@ZbAEbAa@~@q@z@QhA]pAUpAVhAPlAWtASpAAdA[dASdAQhAIlARjANnAZhAf@n@`A?lB^nCRbA\xB`@vBf@tBTbCFbARzBZvBThBRnBNrBP`CHbCF`CNdCb@vBX`ARlAJfADhA@dAFdAP`AR`Ah@hBd@bBl@rBV|B?vB]tBCvBBhAF`CFnBXtAVxAVpAVtAb@|AZ`Bd@~BJfA@fAHdADhADhABjAGzAInAAjAB|BNbCR|BTjBZtB`@lBh@lB\|Bl@rBXtBN`Al@g@t@?nAA~AKvACvAAlAMdAU`Ac@hAShAI`AJ`AIdAi@bAu@|@k@p@]p@a@bAc@z@g@~@Ot@Bz@f@X`BFtBXdCLbAf@zBh@fBb@xAb@nATjAKjAW`BI|AEpAHjAPdAAfAGdAFjAv@p@XlAVnA?~A?jAInAPtAVxAXnAf@tBDpBJpBXhBJfBDpAZ|Ax@pAz@h@~@lA|@bAnAd@hAj@tAR~AKxAc@xAShA]hAIdAAjA]~A[v@BhB?dBSv@Ct@CvAI~@Oz@Pv@dAz@lAj@~A^`B^|AXvAVpAXdBh@~Ap@fCh@hB\zBN`Aj@xBFdA@jALbAPbAJdAHdAJbAHbAHfAJhALbA\lBTvBAdC@bC@jCKjASbC?`CM`CDpB\xAj@tB\fA\bAVfAJdAJbAXz@L|BO`AOdCDdA@~B\z@l@v@l@v@l@r@j@t@b@x@b@r@z@jBVfCJdAJdANbCPfCF|BRhBS~BS`AYbAe@~BQdA')
            ->setCosting(CostingModel::PEDESTRIAN)
            ->setUnits(DistanceUnit::MI);
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
        $req = (new NearestRoadsRequest())
            ->setLocations([(new Coordinate())->setLat(59.436884)->setLon(24.742595)])
            ->setVerbose(true);
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
        $req = (new OptimizedRouteRequest())
            ->setId('optimizedRoute')
            ->setLocations([new Coordinate($this->locationA), new Coordinate($this->locationB), new Coordinate($this->locationC), new Coordinate($this->locationA)])
            ->setCosting(CostingModel::AUTO)
            ->setUnits(DistanceUnit::MI)
            ->setCostingOptions((new CostingOptions())
                ->setAuto((new AutoCostingOptions())->setUseHighways(0.3)));
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
     * @throws ApiException
     */
    public function testRoute()
    {
        $req = (new RouteRequest())
            ->setId('route')
            ->setLocations([$this->locationA, $this->locationB])
            ->setCosting(CostingModel::AUTO)
            ->setUnits(DistanceUnit::MI)
            ->setCostingOptions((new CostingOptions())
                ->setAuto((new AutoCostingOptions())
                    ->setUseHighways(0.3)));
        $result = $this->apiInstance->route($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals(0, $result->getTrip()->getStatus());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getTrip()->getUnits());
        self::assertCount(1, $result->getTrip()->getLegs());
        self::assertCount(0, $result->getAlternates() ?? []);
        self::assertNotCount(0, $result->getTrip()->getLegs()[0]->getManeuvers());
    }

    /**
     * Test case for route
     *
     * Get turn by turn routing instructions between two or more locations
     * using the OSRM response format.
     *
     * @throws ApiException
     */
    public function testRouteWithNavigationAids()
    {
        $req = (new RouteRequest())
            ->setId('route')
            ->setLocations([$this->locationA, $this->locationB])
            ->setCosting(CostingModel::AUTO)
            ->setUnits(DistanceUnit::MI)
            ->setFormat(RouteRequest::FORMAT_OSRM)
            ->setBannerInstructions(true)
            ->setCostingOptions((new CostingOptions())
                ->setAuto((new AutoCostingOptions())->setUseHighways(0.3)))
            ->setFilters((new AnnotationFilters())
                ->setAction(AnnotationFilters::ACTION__INCLUDE)
                ->setAttributes(['shape_attributes.speed_limit']));

        $result = $this->apiInstance->route($req);
        self::assertEquals('Ok', $result->getCode());
        self::assertCount(1, $result->getRoutes());
        $hasBannerInstructions = false;
        foreach ($result->getRoutes()[0]->getLegs()[0]->getSteps() as $step) {
            if (count($step->getBannerInstructions()) > 0) {
                $hasBannerInstructions = true;
            }
        }
        self::assertTrue($hasBannerInstructions);
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
        $req = (new MatrixRequest())
            ->setId('matrix')
            ->setSources([
                (new MatrixWaypoint())->setLat(58.891957)->setLon(22.726262),
                (new MatrixWaypoint())->setLat(59.1558)->setLon(23.762758),
            ])
            ->setTargets([
                (new MatrixWaypoint())->setLat(59.176153)->setLon(23.846605),
                (new MatrixWaypoint())->setLat(59.562853)->setLon(23.096114),
            ])
            ->setCosting(CostingModel::BICYCLE);
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
        $req = (new TraceAttributesRequest())
            ->setId('traceAttributes')
            ->setEncodedPolyline('_grbgAh~{nhF?lBAzBFvBHxBEtBKdB?fB@dBZdBb@hBh@jBb@x@\|@x@pB\x@v@hBl@nBPbCXtBn@|@z@ZbAEbAa@~@q@z@QhA]pAUpAVhAPlAWtASpAAdA[dASdAQhAIlARjANnAZhAf@n@`A?lB^nCRbA\xB`@vBf@tBTbCFbARzBZvBThBRnBNrBP`CHbCF`CNdCb@vBX`ARlAJfADhA@dAFdAP`AR`Ah@hBd@bBl@rBV|B?vB]tBCvBBhAF`CFnBXtAVxAVpAVtAb@|AZ`Bd@~BJfA@fAHdADhADhABjAGzAInAAjAB|BNbCR|BTjBZtB`@lBh@lB\|Bl@rBXtBN`Al@g@t@?nAA~AKvACvAAlAMdAU`Ac@hAShAI`AJ`AIdAi@bAu@|@k@p@]p@a@bAc@z@g@~@Ot@Bz@f@X`BFtBXdCLbAf@zBh@fBb@xAb@nATjAKjAW`BI|AEpAHjAPdAAfAGdAFjAv@p@XlAVnA?~A?jAInAPtAVxAXnAf@tBDpBJpBXhBJfBDpAZ|Ax@pAz@h@~@lA|@bAnAd@hAj@tAR~AKxAc@xAShA]hAIdAAjA]~A[v@BhB?dBSv@Ct@CvAI~@Oz@Pv@dAz@lAj@~A^`B^|AXvAVpAXdBh@~Ap@fCh@hB\zBN`Aj@xBFdA@jALbAPbAJdAHdAJbAHbAHfAJhALbA\lBTvBAdC@bC@jCKjASbC?`CM`CDpB\xAj@tB\fA\bAVfAJdAJbAXz@L|BO`AOdCDdA@~B\z@l@v@l@v@l@r@j@t@b@x@b@r@z@jBVfCJdAJdANbCPfCF|BRhBS~BS`AYbAe@~BQdA')
            ->setShapeMatch(TraceAttributesRequest::SHAPE_MATCH_WALK_OR_SNAP)
            ->setCosting(CostingModel::PEDESTRIAN)
            ->setUnits(DistanceUnit::MI);
        $result = $this->apiInstance->traceAttributes($req);
        self::assertEquals($req->getId(), $result->getId());
        self::assertEquals(ValhallaLongUnits::MILES, $result->getUnits());
        self::assertNotCount(0, $result->getEdges());
        self::assertNotCount(0, $result->getAdmins());
        self::assertNotCount(0, $result->getMatchedPoints());
        self::assertNotEmpty($result->getShape());
    }
}
