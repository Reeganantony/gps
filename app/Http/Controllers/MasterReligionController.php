<?php

namespace App\Http\Controllers;

use App\master_religion;
use Illuminate\Http\Request;

class MasterReligionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rel = new master_religion();
        $rel->religion = request('religion');
        $rel->save();
        return response()->json(['success' => 'Religion saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_religion  $master_religion
     * @return \Illuminate\Http\Response
     */
    public function show(master_religion $master_religion) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_religion  $master_religion
     * @return \Illuminate\Http\Response
     */
    public function edit(master_religion $master_religion) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_religion  $master_religion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_religion $master_religion) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_religion  $master_religion
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_religion $master_religion) {
        //
    }

}
