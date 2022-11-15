<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeverageController extends Controller
{
    //
    public function index(){
        $data = Beverage::all();
        return view ('beverage', compact('data'));
    }

    public function store(Request $request)
    {

        $count = DB::table('baskets')->where('product_id', $request->id)->get()->count();

        if($count == 0){
            DB::table('baskets')->insert([
                'product_id' => $request->id,
                'qty' => 1
            ]);
        }else{
            $qty = DB::table('baskets')->where('product_id', $request->id)->select('qty')->value('qty');
            DB::table('baskets')->where('product_id', $request->id)->update([
                'product_id' => $request->id,
                'qty' => $qty + 1
            ]);
        }
        return redirect()->back();

    }
}
