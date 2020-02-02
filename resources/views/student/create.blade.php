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
                                        <th> Class </th>
                                        <th> Section </th>
                                        <th> Mobile Number</th>

                                        <th style="width: 20" colspan="2">Operations</th>
                                    </tr>

                                </thead>
                                <tbody id="">
                                    @foreach($stud_data as $stud_info)
                                    <tr id="user_id_{{ $stud_info->id }}">
                                        <td>{{ $stud_info->id  }}</td>
                                        <td>{{ $stud_info->first_name }}</td>
                                        <td>{{ $stud_info->last_name }}</td>
                                        <td>{{ $stud_info->gender }}</td>
                                        <td>{{ $stud_info->class_id }}</td>
                                        <td>{{ $stud_info->sec_id }}</td>
                                        <td>{{ $stud_info->pho_no }}</td>
                                        <td colspan="2">
                                            <a href="javascript:void(0)" id="edit-user" data-id="{{ $stud_info->id }}" class="btn btn-info mr-2 edit-user">Edit</a>
                                            <a href="javascript:void(0)" id="delete-user" data-id="{{ $stud_info->id }}" class="btn btn-danger delete-user">Delete</a>
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

