<div class="modal fade bd-example-modal-lg" id="ajaxModel"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content" >
            <div class="modal-header">
               <h4 class="modal-title" id="modelHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)"  method="POST" id="studForm" name="studForm" >
                     <input type="hidden" name="product_id" id="product_id">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!--                            <div class="form-group form_elements">
                                                            <label for="exampleFormControlInput1" class="lbl col-4">Student Id:</label>
                                                            <input type="text" class="form-control col-6" id="stud_id" name="id" autocomplete="off">----{{$errors->has('id')?'alert alert-danger':''}}
                                                            <!--<p class="help is-danger">{{$errors->first('id')}}</p>
                                                            @if($errors->has('id'))
                                                            <p class="alert alert-danger">{{$errors->first('id')}}</p>
                                                            @endif
                                                        </div>-->
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
                            <!--                            <div class="form-group ">
                                                            <label for="exampleFormControlInput1" class="lbl col-4">Building No</label>
                                                            <input type="text" class="form-control col-6" id="build_no" name="building_no">
                                                            @if($errors->has('building_no'))
                                                            <p class="alert alert-danger">{{$errors->first('building_no')}}</p>
                                                            @endif
                                                        </div>-->
                        </div>

                        <!--                        <div class="col-md-6">
                        
                        
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
                                                                                        @if($errors->has('pin'))
                                                                                        <p class="alert alert-danger">{{$errors->first('pin')}}</p>
                                                                                        @endif
                        
                                                        @error('pin_code')
                                                        <p class="alert alert-danger">{{$errors->first('pin_code')}}</p>
                                                        @enderror
                                                    </div>
                                                </div>         -->
                    </div>

                    <div class="row">
                        <div class="alert alert-success d-none" id="msg_div">
                            <span id="res_message"></span>
                        </div>
                        <div class="form-group  btn-submit">
                            <button type="submit" class="btn btn-primary" id="saveBtn" name="submit">Submit</button>
                        </div>

                    </div>
                </form>




            </div>

        </div>
    </div>
</div>



