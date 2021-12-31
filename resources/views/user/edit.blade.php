<!-- Modal -->
<div class="modal fade" id="editModal{{ $a->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{route('edit-user', [$a->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-normal" id="modalLabel">
                    Ubah Data</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Nama Lengkap</label>
                            @error('fullname')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="text" class="form-control" name="fullname" value="{{ $a->name }}">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Nama User (username)</label>
                            @error('username')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="text" class="form-control" name="username" value="{{ $a->username }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Email</label>
                            @error('email')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="email" class="form-control" name="email" value="{{ $a->email }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label for="level" class="ms-0">Level User</label>
                            @error('level')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <select class="form-control" id="level" name="level" value="{{ $a->level }}">
                                @foreach ($level as $i)
                                    <option value="{{ $i->id }}">{{ $i->nama_level_user }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Password</label>
                            @error('pass')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="password" class="form-control" name="pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Ulangi Password</label>
                            @error('repeatpass')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                            <input type="password" class="form-control" name="repeatpass">
                        </div>
                    </div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="" name='active'
                        value='Y'>
                    <label class="form-check-label" for="flexSwitchCheckDefault">Data Sudah Benar</label>
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