<?php
namespace PierceTech\Pushbullet;

use Pushbullet\Pushbullet as PushbulletClient;

class Pushbullet {

    /**
     * @var Pushbullet
     */
    protected $pushbullet;

    /**
     * Constructor
     *
     * @param string
     * @return void
     */
    public function __construct(PushbulletClient $pushbullet)
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
        return $this->pushbullet->allDevices();
    }

    /**
     * Set the Pushbullet Client
     * 
     * @param PushbulletClient $pushbullet [description]
     */
    public function setPushbullet(PushbulletClient $pushbullet)
    {
        $this->pushbullet = $pushbullet;

        return $this;
    }
}
