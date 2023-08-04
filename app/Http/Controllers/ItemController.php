<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;
use DB;
class ItemController extends Controller
{
    function index(Request $request){
        $item = DB::table('items')->get();

        if($item->count() > 0){
            return response()->json(
            [
                'status'=> 200,
                'item' => $item
            ], 200);
        }else{
            return response()->json(
                [
                    'status'=> 404,
                    'item' => 'No Records Found'
                ], 404);
        }
    }
}
