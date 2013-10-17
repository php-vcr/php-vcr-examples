<?php

namespace VCR;

/**
* Checks cdyne.com for local weather information.
*
* @link http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL
*/
class WeatherApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetTemperatureByInvalidZip()
    {
        $weatherApi = new WeatherApi();
        $weatherApi->getTemperature(null);
    }

    /**
     * @vcr soap_weather_api_temperature
     */
    public function testGetTemperatureByZip()
    {
        $weatherApi = new WeatherApi();
        $actual = $weatherApi->getTemperature('10013'); // somewhere in New York

        $this->assertInternalType('integer', $actual);
    }

}