<div id="message"></div>
<form action="javascript:void(0)"  method="POST" id="studForm" name="studForm" >
    <input type="hidden" name="stud_id" id="stud_id" value="">
    @csrf
    <div class="form-row">
        <div class="col-5">
            <div class="form-group row required">
                <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="first_name"  name="first_name" placeholder="First name" value="" autocomplete="off">
                </div>
            </div>    
            <div class="form-group row">
                <label for="last_name" class="col-sm-4 col-form-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="last_name"  name="last_name" placeholder="Last name" value="" autocomplete="off">
                </div>
            </div>    
            <div class="form-group row required">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-6">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender"  value="M" checked="true"> Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender"  value="F"> Female
                        </label>
                    </div>
                </div>
            </div>   


            <div class="form-group row required">
                <label for="dob" class="col-sm-4 col-form-label">Date of Birth</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control form-control-sm dob datepicker" name="dob" id="dob" placeholder="yyyy-mm-dd" value="" autocomplete="off">
                </div>
            </div> 
            <div class="form-group row">
                <label for="b_group" class="col-sm-4 col-form-label">Blood Group</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm" name="b_group" id="b_group">
                        <option value="" class="text-muted">Select</option>
                        @foreach($stud_bg as $stud)
                        <option value="{{$stud->id}}">{{$stud->b_group}}</option>
                        @endforeach
                    </select>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#bloodgroupModal" class="small float-right text-info" >Add Blood Group</a>
                </div>
            </div> 



        </div>
        <div class="col-5">
            <div class="form-group row required">
                <label for="m_tongue" class="col-sm-4  col-form-label">Mother Tongue</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm" name="tongue" id="tongue">
                        <option value="" class="text-muted">Select</option>
                        @foreach($stud_mt as $stud)
                        <option value="{{$stud->id}}">{{$stud->mtongue}}</option>
                        @endforeach
                    </select>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#mtongueModal" class="small float-right text-info" >Add Mother Tongue</a>
                </div>
            </div>



            <div class="form-group row">
                <label for="religion" class="col-sm-4 col-form-label">Religion</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm" name="religion" id="religion">
                        <option value="" class="text-muted">Select</option>
                        @foreach($stud_rel as $stud)
                        <option value="{{$stud->id}}">{{$stud->religion}}</option>
                        @endforeach
                    </select>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#relModal" class="small float-right text-info" >Add Religion</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="caste" class="col-sm-4 col-form-label">Caste</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm caste" name="caste" id="caste">
                        <option value="" class="text-muted">Select</option>
                        @foreach($stud_caste as $stud)
                        <option value="{{$stud->id}}">{{$stud->caste}}</option>
                        @endforeach
                    </select>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#casteModal" class="small float-right text-info" >Add Caste</a>
                </div>
            </div>

            <div class="form-group row">
                <label for="community" class="col-sm-4 col-form-label">Community</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm comm" name="community" id="community">
                        <option value="" class="text-muted">Select</option>
                        @foreach($stud_com as $stud)
                        <option value="{{$stud->id}}">{{$stud->comm}}</option>
                        @endforeach
                    </select>
                    <a href="javascript:void(0)"  data-toggle="modal" data-target="#commModal" class="small float-right text-info" >Add Community</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="aadhar" class="col-sm-4 col-form-label">Aadhar</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="aadhar"  name="aadhar" placeholder="Aadhar No." value="" autocomplete="off">
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <input type="hidden" class="btn btn-primary" id="button_action" name="button_action" value="">
        <div class="form-group  btn-submit">
            <button type="submit" class="btn btn-primary" id="saveBtn" name="submit" value="">Save & continue</button>
        </div>

    </div>
</form>

@include('models.add_bloodGroup')
@include('models.add_mtongue')
@include('models.add_religion')
@include('models.add_caste')
@include('models.add_community')