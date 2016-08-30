<?php
namespace PierceTech\Pushbullet;

use Illuminate\Support\ServiceProvider;

use PierceTech\Pushbulleteer\Models\Settings;
use Pushbullet\Pushbullet as PushbulletClient;

class PushbulletServiceProvider extends ServiceProvider {

    /**
     * Register services
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Register boot service
     *
     * @return void
     */
    public function boot()
    {

    }

}
