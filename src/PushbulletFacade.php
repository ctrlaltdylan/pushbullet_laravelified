<?php
namespace PierceTech\Pushbullet;

use Illuminate\Support\Facades\Facade;

class PushbulletFacade extends Facade {

    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pushbulleteer';
    }
}
