<?php
namespace PierceTech\Pushbullet;

use Pushbullet\Pushbullet as PushbulletClient;

class Pushbullet {

    /**
     * @var Pushbullet
     */
    private $pushbullet;

    /**
     * Constructor
     *
     * @param string
     * @return void
     */
    public function __constructor(PushbulletClient $pushbullet)
    {
        $this->pushbullet = $pushbullet;
    }

    /**
     * All devices
     *
     * @return PushbulletClient
     */
    public function allDevices()
    {
        die(var_dump($this->pushbullet));
        return $this->pushbullet->allDevices();
    }
}
