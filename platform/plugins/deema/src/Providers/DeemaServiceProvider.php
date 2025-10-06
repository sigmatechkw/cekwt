<?php

namespace Botble\Deema\Providers;

use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Deema\Providers\HookServiceProvider;

class DeemaServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {        
        
        if (! is_plugin_active('payment')) {
            return;
        }

        $this
            ->setNamespace('plugins/deema')
            ->loadHelpers()
            ->loadRoutes()
            ->loadAndPublishViews();
            
        $this->app->booted(function (): void {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
