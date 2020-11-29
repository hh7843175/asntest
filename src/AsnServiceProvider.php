<?php

namespace Nasn\Asn;

use Illuminate\Support\ServiceProvider;

class AsnServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'plugins.loaded_list');
    }
}
