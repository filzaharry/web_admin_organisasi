<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="modalLabel">
                    Hapus Data ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus {{$a->username}} ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="{{ route('delete-user', [$a->id]) }}" class="btn bg-gradient-primary">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
