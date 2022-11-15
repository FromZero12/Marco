<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;

class SearchController extends Controller
{
    //
    public function handleSearch(Request $request){
        $beverage = DB::table('beverages')->where('name', 'LIKE', '%' . $request->titleSearch . '%')->select(['beverages.*']);
        $data = DB::table('food')->where('name', 'LIKE', '%' . $request->titleSearch . '%')->select(['food.*'])->union($beverage)->get();
        return view('search', compact('data'));
    }
}
