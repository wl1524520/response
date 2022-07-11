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
            // 响应文件
            $this->publishes([__DIR__.'/../helpers/response.php' => app_path('response.php')], 'wanglu-response');

            // 自定义异常返回
            $this->publishes([
                __DIR__.'/../exceptions/InternalException.php' => app_path('Exceptions/InternalException.php'),
                __DIR__.'/../exceptions/InvalidRequestException.php' => app_path('Exceptions/InvalidRequestException.php'),
            ], 'wanglu-exceptions');
        }
    }
}