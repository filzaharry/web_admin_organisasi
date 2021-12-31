<!-- Modal Edit-->
<div class="modal fade" id="editModal{{ $mm->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('edit-master', [$mm->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="modalLabel">
                        Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama Master
                            Menu</label>
                        @error('name')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="name" value="{{ $mm->nama_menu }}">
                    </div>

                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nomor Urut
                            Menu</label>
                        @error('sort')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <input type="number" class="form-control" name="sort" value="{{ $mm->sort }}">
                    </div>


                    <div class="input-group input-group-static mb-4">
                        <label for="icon" class="ms-0">Pilih Icon
                            Menu</label>
                        @error('icon')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <select class="form-control" id="icon" name="icon" value="{{ $mm->icon }}">
                            @foreach ($icons as $i)
                                <option value="{{ $i->name }}">
                                    {{ $i->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="parent" name='parent' value='1'>
                        <label class="form-check-label" for="parent">Memiliki Sub
                            Menu</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="status" name='active' value='Y'>
                        <label class="form-check-label" for="status">Status
                            Aktif</label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan
                            Perubahan</button>
                    </div>
        </form>
    </div>
</div>
