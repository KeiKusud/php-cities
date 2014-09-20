<?php
/**
 * Created by IntelliJ IDEA.
 * User: kusudakei
 * Date: 9/20/14
 * Time: 9:55 PM
 */
class CitiesResponseTest extends PHPUnit_Framework_TestCase
{
    public function testCitiesListContainsAmsterdam()
    {
        $uri = "http://localhost:8001";
        $response = http_get($uri, null, $info);

        $this->assertEquals("application/json", $info["content_type"]);
        $this->assertContains("Amsterdam", $response);
    }
}
?>