<?php

namespace App\Http\Controllers;



use App\Imports\ItemImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\Item\LoadRequest;

class ItemController extends Controller
{
    public function __construct()
    {
       
    }
    public function index()
    {
        $items=Item::paginate(20);
        return view('items.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('items.upload');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoadRequest $request)
    {
        $validated=$request->validated();
        Excel::import(new ItemImport, $request->file('file'));
        
        return to_route('admin.items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id="")
    {
        return view('items.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function admin(){
        return view('admin.index');
    }
}
