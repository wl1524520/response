<?php

namespace Wl1524520\Response;

use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/helpers/response.php' => app_path('response.php'),
        ], 'wanglu-response');
    }
}