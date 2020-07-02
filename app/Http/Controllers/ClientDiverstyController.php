<?php

namespace App\Http\Controllers;

use App\Models\ClientDiversity;
use Illuminate\Http\Request;

class ClientDiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $item_diversity = new ClientDiversity ($data);
        $item_diversity->diversity_id = $data['diversity_id'];
        $item_diversity->save();
        return $item_diversity;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientDiversity  $clientDiversty
     * @return \Illuminate\Http\Response
     */
    public function show(ClientDiversity $clientDiversiy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientDiversity  $clientDiversty
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientDiversity $clientDiversity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientDiversity  $clientDiversty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientDiversity $clientDiversity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientDiversty  $clientDiversty
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientDiversity $clientDiversity)
    {
        //
    }
}
