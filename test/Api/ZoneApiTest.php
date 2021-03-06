<?php
/**
 * ZoneApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 *
 */


namespace Upcloud\ApiClient;

use \Upcloud\ApiClient\Configuration;
use \Upcloud\ApiClient\ApiException;
use \Upcloud\ApiClient\ObjectSerializer;
use \Upcloud\ApiClient\Upcloud\ZoneApi;

/**
 * ZoneApiTest Class Doc Comment
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */
class ZoneApiTest extends \PHPUnit_Framework_TestCase
{
    public $api;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->api = new ZoneApi;
        $this->api->getConfig()->setUsername(getenv("UPCLOUD_API_TEST_USER"));
        $this->api->getConfig()->setPassword(getenv("UPCLOUD_API_TEST_PASSWORD"));
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for listZones
     *
     * List available zones.
     *
     */
    public function testListZones()
    {
        $zoneList = $this->api->listZones()["zones"]["zone"];
        $this->assertTrue(count($zoneList) > 0);
    }
}
