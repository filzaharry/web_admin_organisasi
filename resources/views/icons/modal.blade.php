<!-- Modal Delete-->
<div class="modal fade" id="delete{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="modalLabel">
                    Detail Ikon</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"style="font-size: 20px">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('edit-icon', [$a->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-static mb-4">
                                <label class="ms-0">Nama Ikon</label>
                                <input type="text" class="form-control" name="name" value="{{ $a->name }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn bg-gradient-primary">
                        
                            <i class="material-icons">mode_edit</i>
                        
                    </button>


            </form>
            <a href="{{ route('delete-icon', [$a->id]) }}" class="btn bg-gradient-secondary">
                
                    <i class="material-icons">delete</i>
                
            </a>
        </div>
    </div>
</div>
</div>
