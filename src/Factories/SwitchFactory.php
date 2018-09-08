<?php

namespace rutgerkirkels\DomoticzPHP\Factories;

use rutgerkirkels\DomoticzPHP\Devices\Switches\Dimmer;
use rutgerkirkels\DomoticzPHP\Devices\Switches\DoorBell;
use rutgerkirkels\DomoticzPHP\Devices\Switches\DoorContact;
use rutgerkirkels\DomoticzPHP\Devices\Switches\MotionSensor;
use rutgerkirkels\DomoticzPHP\Devices\Switches\OnOff;

/**
 * Class SwitchFactory
 * @package rutgerkirkels\DomoticzPHP\Factories
 */
class SwitchFactory extends AbstractDeviceFactory
{
    public $data;

    public function __construct(object $deviceData)
    {
        switch ($deviceData->SwitchType) {

            case 'On/Off':
                $this->data = new OnOff($deviceData);
                break;

            case 'Dimmer':
                $this->data = new Dimmer($deviceData);
                break;

            case 'Door Contact':
                $this->data = new DoorContact($deviceData);
                break;

            case 'Motion Sensor':
                $this->data = new MotionSensor($deviceData);
                break;

            case 'Doorbell':
                $this->data = new DoorBell($deviceData);
                break;
        }
    }

}