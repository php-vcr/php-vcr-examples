<?php

namespace VCR;

/**
* Checks cdyne.com for local weather information.
*
* @link http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL
*/
class WeatherApi
{
    const CDYNE_WSDL = 'http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL';

    public function getTemperature($zip)
    {
        if (empty($zip)) {
            throw new \InvalidArgumentException('Invalid zip provided.');
        }

        $client = new \SoapClient(self::CDYNE_WSDL, array('soap_version'   => SOAP_1_2));
        $response = $client->GetCityWeatherByZIP(array('ZIP' => $zip));

        return (int) $response->GetCityWeatherByZIPResult->Temperature;
    }

}