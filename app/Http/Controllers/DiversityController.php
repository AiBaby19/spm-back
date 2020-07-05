<?php

namespace App\Http\Controllers;

use App\Http\Resources\DiversityCollection;
use App\Models\Diversity;
use Illuminate\Http\Request;

class DiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DiversityCollection(Diversity::all());
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
        $diversityInfo = $request->all();
        $diversity = new Diversity($diversityInfo);
        $diversity->save();
        return $diversity;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diversity  $diversity
     * @return \Illuminate\Http\Response
     */
    public function show(Diversity $diversity)
    {
        // dd($diversity->items, $diversity->clients);
        return $diversity;
    }

    public function findByClient(Diversity $diversity)
    {
        // dd($diversity);
        // $c_ids = dump($diversity->client_id);

        // $dv = Diversity::where(function ($q)'client_id', $id)->get();
        // dd($c_ids);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diversity  $diversity
     * @return \Illuminate\Http\Response
     */
    public function edit(Diversity $diversity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diversity  $diversity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diversity $diversity)
    {
        $diversityInfo = $request->all();
        $diversity->update($diversityInfo);
        $diversity->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diversity  $diversity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diversity $diversity)
    {
        $diversity->delete();
    }
}
