<?php

namespace App\Http\Controllers;

use App\master_mtongue;
use Illuminate\Http\Request;

class MasterMtongueController extends Controller
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
        $mt=new master_mtongue();
        $mt->mtongue=request('mtongue');
        $mt->save();
        return response()->json(['success' => 'Mother Tongue saved successfully.']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_mtongue  $master_mtongue
     * @return \Illuminate\Http\Response
     */
    public function show(master_mtongue $master_mtongue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_mtongue  $master_mtongue
     * @return \Illuminate\Http\Response
     */
    public function edit(master_mtongue $master_mtongue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_mtongue  $master_mtongue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_mtongue $master_mtongue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_mtongue  $master_mtongue
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_mtongue $master_mtongue)
    {
        //
    }
}
