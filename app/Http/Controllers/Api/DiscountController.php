<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //index
    public function index() {
        //get data discount
        $discount = \App\Models\Discount::all();

        return response()->json([
            'status' => 'success',
            'data' => $discount,
        ],200);
    }

    //store
    public function store(Request $request) {
        {
            //validate request
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                // 'type' => 'required',
                'value' => 'required',
            ]);

            //create discount
            $discount = \App\Models\Discount::create($request->all());

            return response()->json([
                'status' => 'success',
                'data' => $discount,
            ],201);
        }
    }
}
