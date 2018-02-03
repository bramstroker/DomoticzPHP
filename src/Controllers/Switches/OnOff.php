<?php

namespace rutgerkirkels\DomoticzPHP\Controllers\Switches;

use rutgerkirkels\DomoticzPHP\Client;
use rutgerkirkels\DomoticzPHP\Connector;
use rutgerkirkels\DomoticzPHP\Controllers\AbstractController;

/**
 * Class OnOff
 * @package rutgerkirkels\DomoticzPHP\Controllers\Switches
 */
class OnOff extends AbstractController
{
    /**
     * @var \rutgerkirkels\DomoticzPHP\Devices\Switches\OnOff
     */
    protected $device;
    protected $connector;

    public function __construct(\rutgerkirkels\DomoticzPHP\Devices\Switches\OnOff $device)
    {
        parent::__construct($device);
    }

    /**
     * @return bool
     */
    public function turnOn() {
        $turnedOn = $this->connector->executeCommand([
            'param' => 'switchlight',
            'idx' => $this->device->getIdx(),
            'switchcmd' => 'On'
        ]);

        if ($turnedOn) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function turnOff() {
        $turnedOff = $this->connector->executeCommand([
            'param' => 'switchlight',
            'idx' => $this->device->getIdx(),
            'switchcmd' => 'Off'
        ]);

        if ($turnedOff) {
            return true;
        }
        return false;
    }
}