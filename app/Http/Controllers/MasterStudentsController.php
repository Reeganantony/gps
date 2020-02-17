<?php

namespace App\Http\Controllers;

use App\master_student;
use App\master_community;
use App\master_caste;
use App\master_bgroup;
use App\master_mtongue;
use App\master_religion;
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


//        if ($request->ajax()) {
//            $data = master_students::latest()->get();
//            return Datatables::of($data)
//                            ->make(true);
//        }
//
//
        return view('layout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        
     $stud_caste = master_caste::all();
        $stud_rel = master_religion::all();
        $stud_mt = master_mtongue::all();
        $stud_bg = master_bgroup::all();
        $stud_com = master_community::all();
        $stud_data = master_student::all();
        $stud_area = master_area::all();
        $stud_locality = master_locality::all();
        $stud_city = master_city::all();
        $stud_state = master_state::all();
        $stud_pincode = master_pincode::all();
        $stud_add = master_address::all();
        $tasks = master_student::with('bgroupstudent')->get();
        $mtngs = master_student::with('mtngstudent')->get();
        $rel_stud = master_student::with('relstudent')->get();
        $caste_stud = master_student::with('castetudent')->get();
        $comm_stud = master_student::with('commstudent')->get();
        $address = master_address::with('tbl_student')->get();
        $addres_area = master_address::with('area_student')->get();
        $i = 0;
        return view('student.create', 
                
                
                compact('i','address','tasks','mtngs','rel_stud', 'stud_add','caste_stud','comm_stud', 'stud_data', 'stud_caste', 'stud_rel', 'stud_area', 'stud_mt', 'stud_bg', 'stud_com', 'stud_locality', 'stud_city', 'stud_state', 'stud_pincode'));
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
//        


        if ($request->input('button_action') === 'create-student') {
            $stud = new master_student();
            $stud->first_name = request('first_name');
            $stud->last_name = request('last_name');
            $stud->gender = request('gender');
            $stud->dob = request('dob');
            $stud->bgroup_id = request('b_group');
            $stud->mtongue_id = request('tongue');
            $stud->religion_id = request('religion');
            $stud->caste_id = request('caste');
            $stud->comm_id = request('community');
            $stud->aadar_no = request('aadhar');

            $stud->save();
        } else if ($request->input('button_action') === 'edit-student') {
            $stud = master_student::find($request->input('stud_id'));
            $stud->first_name = request('first_name');
            $stud->last_name = request('last_name');
            $stud->gender = request('gender');
            $stud->dob = request('dob');
            $stud->bgroup_id = request('b_group');
            $stud->mtongue_id = request('tongue');
            $stud->religion_id = request('religion');
            $stud->caste_id = request('caste');
            $stud->comm_id = request('community');
            $stud->aadar_no = request('aadhar');
            $stud->save();
        } else {
            alert('hello');
        }
        return response()->json(['success' => 'Student saved successfully.', 'id' => $stud->id]
        );
//         master_students::updateOrCreate([                 
//                     
//                    'first_name' => $request->get('first_name'),
//                    'last_name' => $request->get('last_name'),
//                    'gender' => $request->get('gender'),
//                    'class_id' => $request->get('class_id'),
//                    'sec_id' => $request->get('sec_id'),
//                    'pho_no' => $request->get('pho_no')
//        ]);
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
        $stud = master_student::find($id);
        return response()->json($stud);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function update($id) {
//        $stud = master_students::find($id);
//        $stud->first_name = request('first_name');
//        $stud->last_name = request('last_name');
//        $stud->gender = request('gender');
//        $stud->class_id = request('class');
//        $stud->sec_id = request('section');
//        $stud->pho_no = request('pho_no');
//        $stud->save();
//
//        return response()->json(['success' => 'Student saved successfully.', 'id' => $stud->id]
//        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $stud = master_student::find($id);
        $stud->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }

}
