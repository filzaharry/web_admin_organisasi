<!-- Modal -->
<div class="modal fade" id="editModal{{ $a->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{route('edit-user-level', [$a->id])}}">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="modalLabel">
                    Hapus Level User</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Nama Level</label>
                            @error('namalevel')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="text" class="form-control" name="namalevel" value="{{ $a->nama_level_user}}">
                        </div>
                    </div>
                  

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn bg-gradient-primary">Simpan Perubahan</button>
            </div>
        </form>
        </div>
    </div>
</div>
