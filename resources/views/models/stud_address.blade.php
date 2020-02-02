<div class="modal fade bd-example-modal-lg" id="studentModal1"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                

                    
                    
                    
                    
                        <form action="/Address"  method="POST" id="studAddress" name="studAddress" >
                            <input type="hidden" name="stud_id" id="stud_id" value="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="exampleFormControlInput1" class="lbl col-4">Building No</label>
                                        <input type="text" class="form-control col-6" id="build_no" name="building_no">
                                        @if($errors->has('building_no'))
                                        <p class="alert alert-danger">{{$errors->first('building_no')}}</p>
                                        @endif
                                    </div>
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
                                        <select class="form-control col-6" name="area" >
                                            <option selected="">Select...</option>
                                            @foreach($stud_area as $stud)
                                            <option value="{{$stud->id}}">{{$stud->area}}</option>
                                            @endforeach

                                        </select>
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
                                        <select class="form-control col-6" name="locality">
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
                                        <select class="form-control col-6" name="city" >
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
                                        <select class="form-control col-6" name="state" >
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
                                        <select class="form-control col-6" name="pin_code" >
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
                            <div class="alert alert-success d-none" id="msg_div">
                                <span id="message"></span>
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




