<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientCollection;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $clients = Client::with('diversities')->get();

        return new ClientCollection($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientInfo = $request->all();
        $client = new Client($clientInfo);
        $client->save();

        $clientInfo['id'] = $client->id;


        if (ClientDiversityController::store($clientInfo)) {
            return ClientController::index();
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return $client;
    }

    public function getClientItems(Client $client)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $clientInfo = $request->all();
        $client->update($clientInfo);
        $client->save();

        // dd($clientInfo);

        if (ClientDiversityController::update($clientInfo)) {
            return ClientController::index();
        };

        return ClientController::index();
        // use trait for try catch + rollback
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return ClientController::index();
    }
}
