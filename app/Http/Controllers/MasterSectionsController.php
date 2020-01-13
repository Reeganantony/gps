<?php

namespace App\Http\Controllers;

use App\master_sections;
use Illuminate\Http\Request;

class MasterSectionsController extends Controller
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
        $stud_sec = master_sections::all();
        return view('student.create',  compact('stud_sec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_sections  $master_sections
     * @return \Illuminate\Http\Response
     */
    public function show(master_sections $master_sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_sections  $master_sections
     * @return \Illuminate\Http\Response
     */
    public function edit(master_sections $master_sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_sections  $master_sections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_sections $master_sections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_sections  $master_sections
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_sections $master_sections)
    {
        //
    }
}
