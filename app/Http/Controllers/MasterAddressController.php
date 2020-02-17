<?php

namespace App\Http\Controllers;

use App\master_address;
use Illuminate\Http\Request;

class MasterAddressController extends Controller {

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
        if ($request->input('button_action1') === 'create-address') {
            $address = new master_address();
            $address->building_no = request('building_no');
            $address->building_name = request('building_name');
            $address->street = request('street');
            $address->area = request('area');
            $address->road = request('road');
            $address->locality = request('locality');
            $address->city = request('city');
            $address->state = request('state');
            $address->pin_code = request('pin_code');
            $address->student_id = request('stud_id1');
            $address->save();
        } else if ($request->input('button_action1') === 'edit-address') {
            $address = master_address::find($request->get('stud_id1'));     
            $address->building_no = request('building_no');
            $address->building_name = request('building_name');
            $address->street = request('street');
            $address->area = request('area');
            $address->road = request('road');
            $address->locality = request('locality');
            $address->city = request('city');
            $address->state = request('state');
            $address->pin_code = request('pin_code');
            $address->student_id = request('stud_id1');
            $address->save();
        }
        return response()->json(['success' => 'Student Address saved successfully.']
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_address  $master_address
     * @return \Illuminate\Http\Response
     */
    public function show(master_address $master_address) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_address  $master_address
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $stud = master_address::find($id);
        return response()->json($stud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_address  $master_address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_address $master_address) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_address  $master_address
     * @return \Illuminate\Http\Response
     */
    public function destroy(master_address $master_address) {
        //
    }

}
