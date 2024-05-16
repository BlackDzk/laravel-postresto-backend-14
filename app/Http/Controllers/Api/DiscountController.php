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
}
