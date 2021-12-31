<!-- Modal Edit -->
<div class="modal fade" id="editModal{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('edit-akses', [$a->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="modalLabel">
                        Ubah Data Menu "{{ $a->nama_menu }}"" Pada Level
                        "{{ $a->level }}"</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <label class="form-check-label">Hak Akses</label>
                    <div class="row m-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="read" @if ($a->akses == 1) checked @endif
                                name='read' value='1'>
                            <label class="form-check-label" for="read">Lihat</label>
                        </div>

                        
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="create" @if ($a->tambah == 1) checked @endif
                                name='create' value='1'>
                            <label class="form-check-label" for="create">Tambah</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="edit" @if ($a->edit == 1) checked @endif
                                name='edit' value='1'>
                            <label class="form-check-label" for="edit">Ubah</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="delete" @if ($a->hapus == 1) checked @endif
                                name='delete' value='1'>
                            <label class="form-check-label" for="delete">Hapus</label>
                        </div>
                        
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn bg-gradient-primary">Simpan
                        Perubahan</button>
                </div>
        </form>
    </div>
</div>
