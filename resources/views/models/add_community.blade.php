<div class="modal fade" id="commModal"  tabindex="-1" role="dialog" aria-labelledby="commModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commModalLabel">Add New Community</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" method="post" id="addComm">
                    <input type="hidden" name="comm_action" id="comm_action" value="comm" />
                    @csrf
                    <div class="form-group row">
                        <label for="n_comm" class="col-4 col-form-label">Community</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm search" id="comm" name="comm" placeholder="Enter Community Name" value="" autocomplete="off">
                            <div id="commResultsBox" style="display: none">
                                <div id="commResults"></div>
                            </div>
                        </div>

                    </div>    
                    <div class="form-group row">
                        <button type="submit" name="add_comm" class="btn btn-info btn-sm offset-4" id="add_comm">Add New Community</button>
                    </div>
                </form>
                <div id="comm-messages"></div>
            </div>
        </div>
    </div>
</div>