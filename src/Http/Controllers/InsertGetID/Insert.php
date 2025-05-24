<?php

namespace Jazer\Crud\Http\Controllers\InsertGetID;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Insert extends Controller
{
    public static function insert(Request $request) {
        $dataid     = DB::connection($request['connection'])
                    ->table($request["table"])
                    ->insertGetId($request['columns']); 

        if($dataid) {
            return [
                "success"   => true,
                "message"   => "Inserted successfully.",
                 "dataid"    => $dataid
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Insertion not successful.",
                "dataid"    => null
            ];
        }

      }
}