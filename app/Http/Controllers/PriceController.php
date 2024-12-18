<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PriceController extends Controller
{
    public function index(){
        return view('price.index');

    }
    public function show(Request $request){
        $barcode=$request->input('barcode');
        //dd($barcode);
        $item=Item::where('barcode',$barcode)->first();
        //dd($item);
        if ($item==null){
            return to_route('main');
        }else{

            return view('price.show',['item'=>$item]);
        }
    }
    public function barcode($id){
        $item=Item::where('barcode',$id)->first();
        //dd($item);
        if ($item==null){
            return to_route('main');
        }else{

            return view('price.show',['item'=>$item]);
        }

    }
}
