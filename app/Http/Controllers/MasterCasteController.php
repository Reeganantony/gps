<?php

namespace App\Http\Controllers;

use App\master_caste;
use Illuminate\Http\Request;

class MasterCasteController extends Controller
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
        $caste = new master_caste();
        $caste->caste = request('caste');
        $caste->save();
        return response()->json(['success' => 'Caste saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_caste  $master_caste
     * @return \Illuminate\Http\Response
     */
    public function show(master_caste $master_caste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_caste  $master_caste
     * @return \Illuminate\Http\Response
     */
    public function edit(master_caste $master_caste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_caste  $master_caste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_caste $master_caste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_caste  $master_caste
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_caste $master_caste)
    {
        //
    }
}
