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
    public static function store($clientInfo)
    {
        foreach ($clientInfo['diversity'] as $cd) {
            // dd($clientInfo);
            $clientDiversity = new ClientDiversity();
            $clientDiversity->client_id = $clientInfo['id'];
            $clientDiversity->diversity_id = $cd['id'];
            $clientDiversity->save();
        }
        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientDiversity  $clientDiversty
     * @return \Illuminate\Http\Response
     */
    public function show(ClientDiversity $clientDiversity)
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
    public static function update($clientInfo)
    {
        ClientDiversity::where('client_id', $clientInfo['id'])->delete();
        self::store($clientInfo);

        return true;
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
