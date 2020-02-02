@extends('add_student')

@section('studForm')
<form action="javascript:void(0)"  method="POST" id="studForm" name="studForm" >
    <input type="hidden" name="stud_id" id="stud_id">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" id="form_elements">
                <label for="exampleFormControlInput1" class="lbl col-4">First Name:</label>
                <input type="text" class="form-control col-6" id="first_name" name="first_name" autocomplete="off">
                @if($errors->has('first_name'))
                <p class="alert alert-danger">{{$errors->first('first_name')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" class="lbl col-4">Last Name:</label>
                <input type="text" class="form-control col-6" id="last_name" name="last_name" autocomplete="off">
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
                <!--<a href=""><span>Add Class</span></a>-->
                <select class="form-control col-6" name="class" id="exampleFormControlSelect">
                    <option selected="">Select...</option>
                    @foreach($stud_class as $stud)
                    <option value="{{$stud->id}}">{{$stud->standard}}</option>
                    @endforeach
                </select>
                @if($errors->has('class'))
                <p class="alert alert-danger">{{$errors->first('class')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="lbl col-4">Section</label>
                <select class="form-control col-6" name="section" id="exampleFormControlSelect1">
                    <option selected="">Select...</option>
                    @foreach($stud_sec as $stud)
                    <option value="{{$stud->id}}">{{$stud->sections}}</option>
                    @endforeach

                </select>
                @if($errors->has('section'))
                <p class="alert alert-danger">{{$errors->first('section')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1" class="lbl col-4">Phone Number:</label>
                <input type="text" class="form-control col-6" id="pho_no" name="pho_no" autocomplete="off">
                @if($errors->has('pho_no'))
                <p class="alert alert-danger">{{$errors->first('pho_no')}}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="alert alert-success" id="msg_div">
        <span id="message"></span>
    </div>
    <div class="row">

        <div class="form-group  btn-submit">
            <button type="submit" class="btn btn-primary" id="saveBtn" name="submit">Submit</button>
        </div>

    </div>
</form>
@endsection