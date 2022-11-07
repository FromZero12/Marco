<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function index()
    {
        //
        $data = Food::all();
        return view('food', compact('data'));
    }

}
