<?php

namespace Jazer\Crud\Http\Provider;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'crud'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../../config/config.php' => config_path('jazercrudconfig.php')
        ], 'jazercrudconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../../../routes/api.php');

        config(['database.connections.conn_crud' => config('crud.database_connection')]);
    }
}
