<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemCollection;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        return new ItemCollection(Item::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemInfo = $request->all();
        $item = new Item($itemInfo);
        $item->catalog_number = $itemInfo['catalogNum'] ?? false;
        $item->has_vat = $itemInfo['hasVat'] ?? false;
        $item->save();

        return ItemController::index();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {

        $itemInfo = $request->all();
        // dd($itemInfo);
        $item->catalog_number = $itemInfo['catalogNum'];
        $item->has_vat = $itemInfo['hasVat'];
        $item->update($itemInfo);
        $item->save();
        return new ItemCollection(Item::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return ItemController::index();
    }
}
