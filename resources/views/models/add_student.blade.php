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
                        @include('models.s_personal')
                       
                    </div>
                    
                    
                    <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                        @include('models.s_address')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




