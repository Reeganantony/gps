<div class="modal fade" id="mtongueModal" tabindex="-1" role="dialog" aria-labelledby="mtongueModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mtongueModalLabel">New Mother Tongue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post" id="addMTongue">
                    <input type="hidden" name="mtongue_action" id="mtongue_action" value="mtongue" />
                    @csrf
                    <div class="form-group row">
                        <label for="n_mtongue" class="col-4 col-form-label">Mother Tongue</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm search" id="mtongue" name="mtongue" placeholder="Enter Mother Tongue" value="" autocomplete="off">
                            <div id="mtongueResultsBox" style="display: none">
                                <div id="mtongueResults"></div>
                            </div>
                        </div>

                    </div>    
                    <div class="form-group row">
                        <button type="submit" name="m_tongue" class="btn btn-info btn-sm offset-4" id="m_tongue">Add New Mother Tongue</button>
                    </div>
                </form> 
                <div id="mtongue-messages"></div>

            </div>

        </div>
    </div>
</div>



