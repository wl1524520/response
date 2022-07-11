<?php

namespace Wl1524520\Response;

class WangResponse
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/helpers/response.php' => app_path('response.php'),
        ]);
    }
}