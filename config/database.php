<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_CRUD_IP', config('crudsconfig.conn_crud_ip')),
        'port'          => env('CONN_CRUD_PT', config('crudsconfig.conn_crud_pt')),
        'database'      => env('CONN_CRUD_DB', config('crudsconfig.conn_crud_db')),
        'username'      => env('CONN_CRUD_UN', config('crudsconfig.conn_crud_un')),
        'password'      => env('CONN_CRUD_PW', config('crudsconfig.conn_crud_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];