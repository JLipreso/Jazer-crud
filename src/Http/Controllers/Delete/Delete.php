<?php

namespace Jazer\Crud\Http\Controllers\Delete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Delete extends Controller
{
    public static function delete(Request $request) {
        $deleted = DB::connection($request['conn'])->table($request["table"])->where(json_decode($request['where']))->delete();
        if($deleted) {
            return [
                "success"   => true,
                "message"   => "Deleted successfully"
            ];
        }
        else {
            return [
                "success"   => false,
                "message"   => "Fail to deleted"
            ];
        }
    }
}