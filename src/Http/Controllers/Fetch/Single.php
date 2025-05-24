<?php

namespace Jazer\Crud\Http\Controllers\Fetch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Single extends Controller
{
    public static function fetch(Request $request) {
        $orderby = json_decode($request['orderby']);
        return DB::connection($request['connection'])->table($request['table'])
            ->where(json_decode($request['where']))
            ->first();
    }
}


