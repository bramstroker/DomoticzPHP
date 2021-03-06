<?php

namespace rutgerkirkels\DomoticzPHP\Factories;

use rutgerkirkels\DomoticzPHP\Devices\Thermostat\SetPoint;

class ThermostatFactory extends AbstractDeviceFactory
{
    protected $data;

    public function __construct($deviceData)
    {
        switch ($deviceData->SubType) {

            case 'SetPoint':
                $this->data =  new SetPoint($deviceData);
                break;


            default:

        }
    }
}