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
                                        <th> Student Id </th>
                                        <th> First Name </th>
                                        <th> Last Name </th>
                                        <th> Gender </th>
                                        <th> DOB </th>
                                        <th> Blood Group </th>
                                        <th> Mother Tongue</th>
<!--                                        <th> Religion </th>
                                        <th> Caste </th>
                                        <th> Community</th>
                                        --><th> Address</th>

                                        <th style="width: 20" colspan="2">Operations</th>
                                    </tr>

                                </thead>

                                <tbody id="">
                                   
                                    @foreach($stud_data as $stud_info)
                                     @foreach($stud_add as $stud)
                                    <tr id="user_id_{{ $stud_info->id }}">
                                        <td>{{ $stud_info->id  }}</td>
                                        <td>{{ $stud_info->first_name }}</td>
                                        <td>{{ $stud_info->last_name }}</td>
                                        <td>{{ $stud_info->gender }}</td>
                                        <td>{{ $stud_info->dob }}</td>
                                        <td>{{ $stud_info->bgroup_id }}</td>
                                        <td>{{ $stud_info->mtongue_id }}</td>
<!--                                        <td>{{ $stud_info->religion_id }}</td>
                                        <td>{{ $stud_info->caste_id }}</td>
                                        <td>{{ $stud_info->comm_id }}</td>
                                        <td>{{ $stud_info->aadar_no }}</td>-->
                                        <td>{{ $stud->building_no  }}
                                        {{ $stud->building_name }}
                                       {{ $stud->street }}
                                       {{ $stud->area }}
                                        {{ $stud->road }}
                                        {{ $stud->locality }}
                                       {{ $stud->city }}
                                      {{ $stud->state }}
                                        {{ $stud->pin_code }}</td>
                                        
                                        <td colspan="2">
                                            <a href="javascript:void(0)" id="edit-user" data-id="{{ $stud_info->id }}" class="btn btn-info mr-2 edit-user" >Edit</a>
                                            <a href="javascript:void(0)" id="delete-user" data-id="{{ $stud_info->id }}" class="btn btn-danger delete-user">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
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

