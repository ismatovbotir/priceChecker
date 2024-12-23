<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Search;
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
            Search::create(
                [
                    'found'=>false,
                    'barcode'=>$id,
                ]
            );
            return to_route('main');
        }else{
            Search::create(
                [
                    
                    'item_id'=>$item->id,
                    'barcode'=>$id,
                ]
            );

            return view('price.show',['item'=>$item]);
        }

    }
}



            // $table->boolean('found')->default(true);
            // $table->foreignId('item_id')->nullable();
            // $table->string('barcode')->nullable();
            // $table->foreignId('price_checker_id')->nullable();
            // $table->string('name')->default('Ц-1');