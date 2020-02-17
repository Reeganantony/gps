<?php

namespace App\Http\Controllers;

use App\master_bgroup;
use Illuminate\Http\Request;

class MasterBgroupController extends Controller
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
        $bgp = new master_bgroup();
        $bgp->b_group = request('b_group');
        $bgp->save();

        return response()->json(['success' => 'Blood Group saved successfully.']
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_bgroup  $master_bgroup
     * @return \Illuminate\Http\Response
     */
    public function show(master_bgroup $master_bgroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_bgroup  $master_bgroup
     * @return \Illuminate\Http\Response
     */
    public function edit(master_bgroup $master_bgroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_bgroup  $master_bgroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_bgroup $master_bgroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_bgroup  $master_bgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_bgroup $master_bgroup)
    {
        //
    }
}
