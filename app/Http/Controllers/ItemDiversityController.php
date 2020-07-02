<?php

namespace App\Http\Controllers;

use App\Models\ItemDiversity;
use Illuminate\Http\Request;

class ItemDiversityController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ItemDiversity::all();
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
        $data = $request->all();
        $item_diversity = new ItemDiversity($data);
        $item_diversity->diversity_id = $data['diversity_id'];
        $item_diversity->save();
        return $item_diversity;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemDiversity  $itemDiversity
     * @return \Illuminate\Http\Response
     */
    public function show(ItemDiversity $itemDiversity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemDiversity  $itemDiversity
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemDiversity $itemDiversity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemDiversity  $itemDiversity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemDiversity $itemDiversity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemDiversity  $itemDiversity
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemDiversity $itemDiversity)
    {
        //
    }
}
