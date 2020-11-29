<?php

namespace Nasn\Asn;

use Illuminate\Support\ServiceProvider;

class AsnServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'plugins.loaded_list');
    }

    public function register()
    {
        
    }
}
