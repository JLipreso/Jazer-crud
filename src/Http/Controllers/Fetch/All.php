<?php

namespace Jazer\Crud\Http\Controllers\Fetch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class All extends Controller
{
    public static function fetch(Request $request) {

        $orderby = json_decode($request['orderby']);
        return DB::connection($request['connection'])->table($request['table'])
                ->where(json_decode($request['where']))
                ->orderBy($orderby[0], $orderby[1])
                ->get(); 
    }
}