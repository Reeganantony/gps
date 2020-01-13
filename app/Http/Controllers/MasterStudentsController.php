<?php

namespace App\Http\Controllers;

use App\master_students;
use App\master_standards;
use App\master_sections;
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
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delete">Delete</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('home');
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

        return view('student.create',compact('stud_sec','stud_data','stud_class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
//        request()->validate([
////            id'=>['required','min:3','max:255'],
//            'id' => 'required',
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'gender' => 'required'
//        ]);

//        $data = $request->all();
//        $check = master_students::insert($data);
//        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
//        if($check){ 
//        $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
//        }
//        return Response()->json($arr);
        $stud = new master_students();
        $stud->id = request('id');
        $stud->first_name = request('first_name');
        $stud->last_name = request('last_name');
        $stud->gender = request('gender');
        $stud->class_id = request('class');
        $stud->sec_id = request('section');
        $stud->pho_no = request('pho_no');
        $stud->save();
        $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);
        if($stud){ 
        $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        }
        return Response()->json($arr);
//         
//        return redirect(route('student.create'));
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
    public function edit(master_students $master_students) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master_students $master_students) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master_students  $master_students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        demo::find($id)->delete();
     
        return response()->json(['success'=>'Product deleted successfully.']);    }

}
