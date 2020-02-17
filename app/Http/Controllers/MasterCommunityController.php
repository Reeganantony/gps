<?php

namespace App\Http\Controllers;

use App\master_community;
use Illuminate\Http\Request;

class MasterCommunityController extends Controller
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
        $comm = new master_community();
        $comm->comm = request('comm');
        $comm->save();
        return response()->json(['success' => 'Community saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_community  $master_community
     * @return \Illuminate\Http\Response
     */
    public function show(master_community $master_community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_community  $master_community
     * @return \Illuminate\Http\Response
     */
    public function edit(master_community $master_community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_community  $master_community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_community $master_community)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_community  $master_community
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_community $master_community)
    {
        //
    }
}
