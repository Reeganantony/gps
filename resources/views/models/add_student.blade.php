<div class="modal fade bd-example-modal-lg" id="studentModal"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav class="nav nav-tabs" id="studTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-personal-tab" data-toggle="tab" href="#nav-personal" role="tab" aria-controls="nav-personal" aria-selected="true">Student</a>
                    <a class="nav-item nav-link" id="nav-family-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address</a>

                </nav>
                <div class="tab-content pt-4 bg-light p-3" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">

                        <form action="javascript:void(0)"  method="POST" id="studForm" name="studForm" >
                            <input type="hidden" name="stud_id1" id="stud_id1" value="">
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
                                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" >
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
                                        <select class="form-control col-6" name="class" id="class_id">
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
                                        <select class="form-control col-6" name="section" id="sec_id">
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
                            <div class="alert alert-success d-none" id="msg_div">
                                <span id="message"></span>
                            </div>
                            <div class="row">

                                <div class="form-group  btn-submit">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" name="submit">Save & continue</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    
                    
                    <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                        <form action="javascript:void(0)"  method="POST" id="studAddress" name="studAddress" >
                            <input type="hidden" name="stud_id" id="stud_id" value="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="exampleFormControlInput1" class="lbl col-4">Building No</label>
                                        <input type="text" class="form-control col-6" id="building_no" name="building_no">
                                        @if($errors->has('building_no'))
                                        <p class="alert alert-danger">{{$errors->first('building_no')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group form_elements">
                                        <label for="exampleFormControlInput1" class="lbl col-4">Building Name</label>
                                        <input type="text" class="form-control col-6" id="building_name" name="building_name">
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
                                        <select class="form-control col-6" name="area" id="area">
                                            <option selected="">Select...</option>
                                            @foreach($stud_area as $stud)
                                            <option value="{{$stud->id}}">{{$stud->area}}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('area'))
                                        <p class="alert alert-danger">{{$errors->first('area')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="lbl col-4">Road</label>
                                        <input type="text" class="form-control col-6" id="road" placeholder="road" name="road">
                                        @if($errors->has('road'))
                                        <p class="alert alert-danger">{{$errors->first('road')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="lbl col-4">Locality</label>
                                        <select class="form-control col-6" name="locality" id="locality">
                                            <option selected="">Select...</option>
                                            @foreach($stud_locality as $stud)
                                            <option value="{{$stud->id}}">{{$stud->locality}}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('locality'))
                                        <p class="alert alert-danger">{{$errors->first('locality')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="lbl col-4">City</label>
                                        <select class="form-control col-6" name="city" id="city">
                                            <option selected="">Select...</option>
                                            @foreach($stud_city as $stud)
                                            <option value="{{$stud->id}}">{{$stud->city}}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('city'))
                                        <p class="alert alert-danger">{{$errors->first('city')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="lbl col-4">State</label>
                                        <select class="form-control col-6" name="state" id="state">
                                            <option selected="">Select...</option>
                                            @foreach($stud_state as $stud)
                                            <option value="{{$stud->id}}">{{$stud->state}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('state'))
                                        <p class="alert alert-danger">{{$errors->first('state')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="lbl col-4">Zip/Postel code</label>
                                        <select class="form-control col-6" name="pin_code" id="pin_code" >
                                            <option selected="">Select...</option>
                                            @foreach($stud_pincode as $stud)
                                            <option value="{{$stud->id}}">{{$stud->pin_code}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('pin'))
                                        <p class="alert alert-danger">{{$errors->first('pin')}}</p>
                                        @endif
                                        @error('pin_code')
                                        <p class="alert alert-danger">{{$errors->first('pin_code')}}</p>
                                        @enderror
                                    </div>
                                </div>         
                            </div>
                            <div class="alert alert-success d-none" id="msg_div1">
                                <span id="res-message"></span>
                            </div>
                            <div class="row">
                                <div class="form-group  btn-submit">
                                    <button type="submit" class="btn btn-primary" id="submitBtn" name="submitBtn">Save & continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




