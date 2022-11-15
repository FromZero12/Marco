<?php

namespace App\Http\Controllers;

use App\Models\basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index()
    {
        //
        $data = DB::query()
        ->fromSub(
            DB::table('food')
                ->select(['food.*'])
                ->union(
                    DB::table('beverages')
                        ->select(['beverages.*'])
                ),
            'inner'
        )
        ->join('baskets', 'baskets.product_id', '=', 'inner.food_id')
        ->select(['inner.*', 'baskets.*'])
        ->get();
        return view('basket', compact('data'));
    }


    public function minus(Request $request)
    {
        $qty = DB::table('baskets')->where('id', $request->id)->select('qty')->value('qty');

        if($qty == 1){
            DB::table('baskets')->where('id', $request->id)->delete();
        } else if($qty > 1){
            DB::table('baskets')->where('id', $request->id)->update([
                'qty' => $qty - 1
            ]);

        }
        return redirect()->back();
    }

    public function plus(Request $request){
        $qty = DB::table('baskets')->where('id', $request->id)->select('qty')->value('qty');
        DB::table('baskets')->where('id', $request->id)->update([
            'qty' => $qty + 1
        ]);
        return redirect()->back();
    }
}
