use App\master_bgroup;
@extends('layout')

@section('head')
<link href="/css/style.css" rel="stylesheet" />
@endsection

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">

                        <a href="javascript:void(0)" data-toggle="modal" id="addStudent" data-target="#studentModal" class="btn btn-info float-right"><i class="fa fa-plus-circle" style="margin-right: 5px;"aria-hidden="true"></i>
                            New Student</a>
                        @include('models.add_student')

                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>      
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered data-table" id="student_tbl">
                                <thead>
                                    <tr>
                                        <th> S NO </th>
                                        <th> First Name </th>
                                        <th> Last Name </th>
                                        <th> Gender </th>
                                        <th> DOB </th>
                                        <th> Blood Group </th>
                                        <th> Mother Tongue</th>
                                        <th> Religion </th>
                                        <th> Caste </th>
                                        <th> Community</th>
                                        <th> Aadhar No</th>
                                        <th>Address</th>
                                        <th style="width: 20" colspan="2">Operations</th>
                                    </tr>

                                </thead>

                                <tbody id="">   

                                    @foreach($address as $stud_info)

                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $stud_info->tbl_student->first_name }}</td>
                                        <td>{{ $stud_info->tbl_student->last_name }}</td>
                                        <td>{{ $stud_info->tbl_student->gender }}</td>
                                        <td>{{ $stud_info->tbl_student->dob }}</td>
                                        <td>{{ $stud_info->tbl_student->bgroupstudent->b_group }}</td>
                                        <td>{{ $stud_info->tbl_student->mtngstudent->mtongue }}</td>
                                        <td>{{ $stud_info->tbl_student->relstudent->religion }}</td>
                                        <td>{{ $stud_info->tbl_student->castetudent->caste }}</td>
                                        <td>{{ $stud_info->tbl_student->commstudent->comm }}</td>
                                        <td>{{ $stud_info->tbl_student->aadar_no }}</td>

                                        <td>{{$stud_info->building_no}},
                                        {{$stud_info->building_name}},
                                        {{$stud_info->street}},
                                        {{$stud_info->area_student->area}},
                                        {{$stud_info->road}}
                                        </td>
                                        <td colspan="2">
                                            <a href="javascript:void(0)" id="edit-user" data-id="{{ $stud_info->tbl_student->id }}" class="btn btn-info mr-2 edit-user" >Edit</a>
                                            <a href="javascript:void(0)" id="delete-user" data-id="{{ $stud_info->tbl_student->id }}" class="btn btn-danger delete-user">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>


@endsection


