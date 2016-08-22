<?php
namespace PierceTech\Pushbullet;

use Illuminate\Support\ServiceProvider;

class PushbulletServiceProvider extends ServiceProvider {

    /**
     * Register services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Pushbullet', Pushbullet::class);
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
