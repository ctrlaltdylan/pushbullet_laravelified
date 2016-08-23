<?php
namespace PierceTech\Pushbullet;

use Pushbullet\Pushbullet as PushbulletClient;

class Pushbullet {

    /**
     * @var Pushbullet
     */
    private $pushbullet;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * Constructor
     *
     * @param string
     * @return void
     */
    public function __constructor($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->pushbullet = new PushBulletClient($accessToken);
    }

    /**
     * All devices
     *
     * @return PushbulletClient
     */
    public function allDevices()
    {
        return $this->pushbullet->allDevices();
    }
}
