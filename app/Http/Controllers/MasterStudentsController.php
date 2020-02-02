<?php

namespace App\Http\Controllers;

use App\master_students;
use App\master_standards;
use App\master_sections;
use App\master_address;
use App\master_area;
use App\master_city;
use App\master_locality;
use App\master_pincode;
use App\master_state;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MasterStudentsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        
        if ($request->ajax()) {
            $data = master_students::latest()->get();
            return Datatables::of($data)
                    
                    ->make(true);
        }
          

        return view('layout',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $stud_class = master_standards::all();
        $stud_sec = master_sections::all();
        $stud_data = master_students::all();
        $stud_area = master_area::all();
        $stud_locality = master_locality::all();
        $stud_city = master_city::all();
        $stud_state = master_state::all();
        $stud_pincode = master_pincode::all();
        return view('student.create', compact('stud_sec', 'stud_data', 'stud_class', 'stud_area', 'stud_locality', 'stud_city', 'stud_state', 'stud_pincode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

//        request()->validate([
//
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'gender' => 'required'
//        ]);
        $stud = new master_students();
        $stud->first_name = request('first_name');
        $stud->last_name = request('last_name');
        $stud->gender = request('gender');
        $stud->class_id = request('class');
        $stud->sec_id = request('section');
        $stud->pho_no = request('pho_no');
        $stud->save();

        return response()->json(['success' => 'Student saved successfully.', 'id' => $stud->id]
        );
        
//        master_students::updateOrCreate(
//                ['first_name' => request()->first_name], 
//                ['last_name' => request()->last_name],
//                ['gender' => request()->gender], 
//                ['class_id' => request()->class_id],
//                ['sec_id' => request()->sec_id], 
//                ['pho_no' => request()->pho_no]
//                );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function show(master_students $master_students) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $stud = master_students::find($id);
        return response()->json($stud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $master_students) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $stud = master_students::find($id);
        $stud->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }

}
