<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="p-4">

                @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="{{ route('add-master') }}">Tambah Menu</a> @endif

                <div class="card-body px-0 pb-2">
                    <div class="table-sm table-responsive p-0">
                        <table id="mainDaftarMenuTable" class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="font-weight-bolder">Icon</th>
                                    <th class="font-weight-bolder">Nama Menu</th>
                                    <th class="font-weight-bolder">URL</th>
                                    <th class="font-weight-bolder">No. Urut</th>
                                    <th class="font-weight-bolder">Parent</th>
                                    <th class="font-weight-bolder">Status</th>
                                    <th class="font-weight-bolder ps-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($main_menu as $mm)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3">
                                                <span class="badge badge-sm bg-gradient-secondary">
                                                    <i class="material-icons">{{ $mm->icon }}</i>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">{{ $mm->nama_menu }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3"><i>{{ $mm->url }}</i></div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">{{ $mm->sort }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">
                                                @if ($mm->is_parent == '1')
                                                    <span class="material-icons badge-sm bg-gradient-success p-1"
                                                        style="border-radius: 5px; color:white;">
                                                        done
                                                    </span>
                                                @else
                                                    <span class="material-icons badge-sm bg-secondary p-1"
                                                        style="border-radius: 5px; color:white;">
                                                        done
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-3">
                                                <span
                                                    class="material-icons badge-sm p-1
                                                @if ($mm->aktif == 'Y') bg-gradient-primary @else bg-gradient-secondary @endif "
                                                    style="border-radius: 5px; color:white;">
                                                    power_settings_new
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($mm->is_parent == '1')
                                                <a href="{{ route('detail', [$mm->id]) }}">
                                                    <span class="badge badge-sm bg-gradient-info">
                                                        <i class="material-icons">preview</i>
                                                    </span>
                                                </a>
                                            @else
                                                <a href="{{ route('detail', [$mm->id]) }}"
                                                    style="pointer-events: none; cursor: default;">
                                                    <span class="badge badge-sm bg-gradient-secondary">
                                                        <i class="material-icons">preview</i>
                                                    </span>
                                                </a>
                                            @endif

                                            @if ($access->edit == 1)
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $mm->id }}">
                                                    <span class="badge badge-sm bg-gradient-warning">
                                                        <i class="material-icons">mode_edit</i>
                                                    </span>
                                                </a>
                                            @endif

                                            @if ($access->hapus == 1)
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $mm->id }}">
                                                    <span class="badge badge-sm bg-gradient-danger">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </a>
                                            @endif

                                            @include('daftar-menu.maindelete')
                                            @include('daftar-menu.mainedit')

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
