<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="p-4">

                @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="{{ route('add-user') }}">Tambah User</a> @endif

                <div class="card-body px-0 pb-2">
                    <div class="table-sm table-responsive p-0">
                        <table id="userTable" class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-bolder">Nama Lengkap</th>
                                    <th class="font-weight-bolder">Nama user (username)</th>
                                    <th class="font-weight-bolder">Email</th>
                                    <th class="font-weight-bolder">Level</th>
                                    <th class="font-weight-bolder ps-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $a)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">{{ $a->name }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">{{ $a->username }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">{{ $a->email }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">{{ $a->level }}</div>
                                        </td>
                                        <td>
                                            @if ($access->edit == 1)
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $a->id }}">
                                                    <span class="badge badge-sm bg-gradient-warning">
                                                        <i class="material-icons">mode_edit</i>
                                                    </span>
                                                </a>
                                            @endif

                                            @include('user.edit')

                                            @if ($access->hapus == 1)
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $a->id }}">
                                                    <span class="badge badge-sm bg-gradient-danger">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </a>
                                            @endif

                                            @include('user.delete')
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
</div>
