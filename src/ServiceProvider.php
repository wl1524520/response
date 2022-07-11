<?php

namespace Wl1524520\Response;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->registerPublishing();
    }

    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../helpers/response.php' => app_path('response.php')], 'response-file');
        }
    }
}