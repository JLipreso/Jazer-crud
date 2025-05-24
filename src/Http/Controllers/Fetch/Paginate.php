<?php

namespace Jazer\Users\Http\Controllers\Fetch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Paginate extends Controller
{
    public static function fetch(Request $request) {

        $orderby    = json_decode($request['orderby']);
        $where      = json_decode($request['where']);

        $source     = DB::connection($request['connection'])
                    ->table($request['table'])
                    ->where($where)
                    ->orderBy($orderby[0], $orderby[1])
                    ->paginate($request['per_page']);

        return $source;
    }
}