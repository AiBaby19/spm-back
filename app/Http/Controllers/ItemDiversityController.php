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
    public static function store($clientInfo)
    {
        foreach ($clientInfo['diversity'] as $cd) {
            $itemDiversity = new ItemDiversity();
            $itemDiversity->item_id = $clientInfo['id'];
            $itemDiversity->diversity_id = $cd['id'];
            $itemDiversity->save();
        }

        return true;
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
