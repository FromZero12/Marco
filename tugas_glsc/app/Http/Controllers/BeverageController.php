<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    //
    public function index(){
        $data = Beverage::all();
        return view ('beverage', compact('data'));
    }
}
