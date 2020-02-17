<div class="modal fade" id="relModal" tabindex="-1" role="dialog" aria-labelledby="relModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="relModalLabel">New Religion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post" id="addRel">
                    <input type="hidden" name="rel_action" id="rel_action" value="rel" />
                    @csrf
                    <div class="form-group row">
                        <label for="n_rel" class="col-4 col-form-label">Religion</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm search" id="religion" name="religion" placeholder="Enter Religion" value="" autocomplete="off">
                            <div id="relResultsBox" style="display: none">
                                <div id="relResults"></div>
                            </div>
                        </div>

                    </div>    
                    <div class="form-group row">
                        <button type="submit" name="add_rel" class="btn btn-info btn-sm offset-4" id="add_rel">Add New Religion</button>
                    </div>
                </form> 
                <div id="rel-messages"></div>

            </div>

        </div>
    </div>
</div>



