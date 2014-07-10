<?php namespace Szykra\Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider {


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('flash', function()
        {
            return $this->app->make('Szykra\Notifications\FlashNotifier');
        });

        $this->app->bind('Szykra\Notifications\NotifyBuilder', 'Szykra\Notifications\BootstrapAlertBuilder');
    }

}