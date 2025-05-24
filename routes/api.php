<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'crud'], function () {
        Route::group(['prefix' => 'v1'], function () {
            Route::get('insertgetid', [Jazer\Crud\Http\Controllers\InsertGetID\Insert::class, 'insert']);
            Route::get('fetchall', [Jazer\Crud\Http\Controllers\Fetch\All::class, 'fetch']);
            Route::get('fetchpaginate', [Jazer\Crud\Http\Controllers\Fetch\Paginate::class, 'fetch']);
            Route::get('fetchsingle', [Jazer\Crud\Http\Controllers\Fetch\Single::class, 'fetch']);
            Route::get('update', [Jazer\Crud\Http\Controllers\Update\Update::class, 'update']);
            Route::get('delete', [Jazer\Crud\Http\Controllers\Delete\Delete::class, 'delete']);
        });
    });
});

