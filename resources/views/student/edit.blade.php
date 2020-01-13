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
                    <div class="col-sm-6">
                        <h1>Update Students</h1>
                    </div>      
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                       <div class="col">
                            <form action="/transport"  method="POST" id="form_reg" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form_elements">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Student Id:</label>
                                            <input type="text" class="form-control col-6" id="stud_id" name="id"><!------{{$errors->has('id')?'alert alert-danger':''}}
                                            <!--<p class="help is-danger">{{$errors->first('id')}}</p>-->
                                            @if($errors->has('id'))
                                            <p class="alert alert-danger">{{$errors->first('id')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group" id="form_elements">
                                            <label for="exampleFormControlInput1" class="lbl col-4">First Name:</label>
                                            <input type="text" class="form-control col-6" id="first_name" name="first_name">
                                            @if($errors->has('first_name'))
                                            <p class="alert alert-danger">{{$errors->first('first_name')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Last Name:</label>
                                            <input type="text" class="form-control col-6" id="last_name" name="last_name">
                                            @if($errors->has('last_name'))
                                            <p class="alert alert-danger">{{$errors->first('last_name')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group radio_btn">

                                            <legend class="col-form-label col-4 pt-0 lbl">Gender</legend>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                                                    <label for="exampleFormControlInput1" class="lbl col-3">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                                                    <label for="exampleFormControlInput1" class="lbl col-3">Female</label>
                                                </div>
                                                @if($errors->has('gender'))
                                                <p class="alert alert-danger">{{$errors->first('gender')}}</p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="lbl col-4">Class</label>
                                            <select class="form-control col-6" name="class" id="exampleFormControlSelect1">
                                                <option selected="">Select...</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                                <option value="VI">VI</option>
                                                <option value="VII">VII</option>
                                                <option value="VIII">VIII</option>
                                                <option value="IX">IX</option>
                                                <option value="X">X</option>
                                            </select>
                                            @if($errors->has('class'))
                                            <p class="alert alert-danger">{{$errors->first('class')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="lbl col-4">Section</label>
                                            <select class="form-control col-6" name="section" id="exampleFormControlSelect1">
                                                <option selected="">Select...</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>

                                            </select>
                                            @if($errors->has('section'))
                                            <p class="alert alert-danger">{{$errors->first('section')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Phone Number:</label>
                                            <input type="text" class="form-control col-6" id="pho_no" name="pho_no">
                                            @if($errors->has('pho_no'))
                                            <p class="alert alert-danger">{{$errors->first('pho_no')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Building No</label>
                                            <input type="text" class="form-control col-6" id="build_no" name="building_no">
                                            @if($errors->has('building_no'))
                                            <p class="alert alert-danger">{{$errors->first('building_no')}}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">


                                        <div class="form-group form_elements">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Building Name</label>
                                            <input type="text" class="form-control col-6" id="build_name" name="building_name">
                                            @if($errors->has('building_name'))
                                            <p class="alert alert-danger">{{$errors->first('building_name')}}</p>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="lbl col-4">Street</label>
                                            <input type="text" class="form-control col-6" id="street" placeholder="street" name="street">
                                            @if($errors->has('street'))
                                            <p class="alert alert-danger">{{$errors->first('street')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">Area</label>
                                            <input type="text" class="form-control col-6" id="area" placeholder="Area" name="area">
                                            @if($errors->has('area'))
                                            <p class="alert alert-danger">{{$errors->first('area')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">Road</label>
                                            <input type="text" class="form-control col-6" id="road" placeholder="road" name="road">
                                            @if($errors->has('road'))
                                            <p class="alert alert-danger">{{$errors->first('road')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">Locality</label>
                                            <input type="text" class="form-control col-6" id="locality" placeholder="locality" name="locality">
                                            @if($errors->has('locality'))
                                            <p class="alert alert-danger">{{$errors->first('locality')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">City</label>
                                            <input type="text" class="form-control col-6" id="city" placeholder="City" name="city">
                                            @if($errors->has('city'))
                                            <p class="alert alert-danger">{{$errors->first('city')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">State</label>
                                            <input type="text" class="form-control col-6" id="state" placeholder="State" name="state">
                                            @if($errors->has('state'))
                                            <p class="alert alert-danger">{{$errors->first('state')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="lbl col-4">Zip/Postel code</label>
                                            <input type="text" class="form-control col-6" id="pin_code" placeholder="Zip/Postel code" name="pin_code">
                                            <!--                                @if($errors->has('pin'))
                                                                            <p class="alert alert-danger">{{$errors->first('pin')}}</p>
                                                                            @endif-->

                                            @error('pin_code')
                                            <p class="alert alert-danger">{{$errors->first('pin_code')}}</p>
                                            @enderror
                                        </div>
                                    </div>         
                                </div>
                                <div class="row">

                                    <div class="form-group  btn-submit">
                                        <button type="submit" class="btn btn-primary" id="btn" name="submit">Submit</button>
                                    </div>

                                </div>
                            </form>




                        </div>

                    </div><!--
                </div>
            </div>-->
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

@endsection

@extends('models.add_student')