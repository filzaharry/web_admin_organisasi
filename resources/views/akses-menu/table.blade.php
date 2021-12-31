<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="p-4">
                
                @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="{{ route('add-akses') }}">Tambah Akses</a> @endif

                <div class="card-body px-0 pb-2">
                    <table id="daftarMenuTable" class="table align-items-center mb-0 pb-4">
                        <thead>
                            <tr>
                                <th class="font-weight-bolder">Hak Akses</th>
                                <th class="font-weight-bolder">Nama Menu</th>
                                <th class="font-weight-bolder">URL</th>
                                <th class="font-weight-bolder">Akses</th>
                                <th class="font-weight-bolder">Tambah</th>
                                <th class="font-weight-bolder">Edit</th>
                                <th class="font-weight-bolder">Hapus</th>
                                <th class="font-weight-bolder ps-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getAccess as $a)
                                <tr>
                                    <td><div class="d-flex px-3">{{ $a->level }}</div></td>
                                    <td><div class="d-flex px-3">{{ $a->nama_menu }}</div></td>
                                    <td><div class="d-flex px-3"><i>{{ $a->url }}</i></div></td>

                                    @include('akses-menu.status')

                                    <td>
                                        @if ($access->edit == 1)
                                            <a type="button" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $a->id }}">
                                                <span class="badge badge-sm bg-gradient-warning">
                                                    <i class="material-icons">mode_edit</i>
                                                </span>
                                            </a>
                                        @endif

                                        @if ($access->hapus == 1)
                                            <a type="button" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $a->id }}">
                                                <span class="badge badge-sm bg-gradient-danger">
                                                    <i class="material-icons">delete</i>
                                                </span>
                                            </a>
                                        @endif

                                        @include('akses-menu.delete')
                                        @include('akses-menu.edit')

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
