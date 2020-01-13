@extends('layout')

@section('head')
<link href="/css/style.css" rel="stylesheet" />
@endsection

@section('content')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">

                        <a type="button" class="btn btn-primary float-right" href="javascript:void(0)" id="createNewStudent"><i class="fa fa-plus-circle" style="margin-right: 5px;"aria-hidden="true"></i>
                            New Student</a>
                        @extends('models.add_student')
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
                            <table class="table table-bordered data-table">
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
<!-- page script -->


@endsection

