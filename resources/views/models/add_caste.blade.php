<div class="modal fade" id="casteModal" tabindex="-1" role="dialog" aria-labelledby="casteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="casteModalLabel">New Caste</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post" id="addCaste">
                    <input type="hidden" name="caste_action" id="caste_action" value="caste" />
                    @csrf
                    <div class="form-group row">
                        <label for="n_caste" class="col-4 col-form-label">Caste</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm search" id="caste" name="caste" placeholder="Enter Caste" value="" autocomplete="off">
                            <div id="casteResultsBox" style="display: none">
                                <div id="casteResults"></div>
                            </div>
                        </div>

                    </div>    
                    <div class="form-group row">
                        <button type="submit" name="add_caste" class="btn btn-info btn-sm offset-4" id="add_caste">Add New Caste</button>
                    </div>
                </form> 
                <div id="caste-messages"></div>

            </div>

        </div>
    </div>
</div>



