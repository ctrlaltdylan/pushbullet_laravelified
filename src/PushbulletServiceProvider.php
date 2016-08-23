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
        $this->app->singleton('pushbulleteer', function($app) {
            $settings = Settings::instance();

                if(empty($settings->access_token)) {
                        throw new \DomainException('A Pushbullet access token is required to interact with the Pushbullet service. Please authenticate your Pushbullet application in the Settings page.');
                }

                // Code to register $model->email to mailing list
                $pushbullet = new \PierceTech\Pushbullet\Pushbullet(PushbulletClient($settings->access_token));

            return $pushbullet;
        });
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
