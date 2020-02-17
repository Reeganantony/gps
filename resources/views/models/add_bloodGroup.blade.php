<div class="modal fade" id="bloodgroupModal" tabindex="-1" role="dialog" aria-labelledby="bloodgroupModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="casteModalLabel">New Blood Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="POST" id="addblood" name="stud_bg">
                    <input type="hidden" name="caste_action" id="caste_action" value="caste" />
                    @csrf
                    <div class="form-group row">
                        <label for="n_caste" class="col-4 col-form-label">Blood Group</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm search" id="b_group" name="b_group" placeholder="Enter Blood group" value="" autocomplete="off">

                        </div>

                    </div>    
                    <div class="form-group row">
                        <button type="submit" name="add_bgroup" class="btn btn-info btn-sm offset-4" id="add_bgroup">Add Blood Group</button>
                    </div>
                </form> 
                <div id="bloodGroup-messages"></div>

            </div>

        </div>
    </div>
</div>



