@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Parent Menu : {{ $detail[0]->nama_menu }}</h3>
    </div>

    @include('template.alert')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                @if ($submenu == '[]')
                    <div class="p-4 text-center mt-2">
                        <div class="text-center mt-4 pb-4">
                            <img src="{{ asset('img/folder.png') }}" alt="folder" width="20%" style="opacity: 50%">
                            <p class="pt-4">Opps! Data masih kosong...</p>
                            @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="{{ route('add-sub', [$detail[0]->id]) }}">Tambah Sub Menu</a> @endif

                        </div>
                    </div>
                @else
                    <div class="p-4">

                        @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="{{ route('add-sub', [$detail[0]->id]) }}">Tambah Sub Menu</a> @endif



                        <div class="card-body px-0 pb-2">
                            <div class="table-sm table-responsive p-0">
                                <table id="subDaftarMenuTable" class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bolder">Icon</th>
                                            <th class="font-weight-bolder">Nama Menu</th>
                                            <th class="font-weight-bolder">URL</th>
                                            <th class="font-weight-bolder">No. Urut</th>
                                            <th class="font-weight-bolder">Status</th>
                                            <th class="font-weight-bolder ps-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($submenu as $sm)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-3">
                                                        <span class="badge badge-sm bg-gradient-secondary p-1"
                                                            style="border-radius: 5px; color:white;">
                                                            <i class="material-icons">{{ $sm->icon }}</i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-3">{{ $sm->nama_menu }}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-3"><i>{{ $sm->url }}</i></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-3">{{ $sm->sort_sub }}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-3">
                                                        <span
                                                            class="material-icons badge-sm p-1
                                                        @if ($sm->aktif == 'Y') bg-gradient-primary @else bg-gradient-secondary @endif "
                                                            style="border-radius: 5px; color:white;">
                                                            power_settings_new
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>

                                                    @if ($access->edit == 1)
                                                        <a type="button" data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $sm->id }}">
                                                            <span class="badge badge-sm bg-gradient-warning">
                                                                <i class="material-icons">mode_edit</i>
                                                            </span>
                                                        </a>
                                                    @endif

                                                    @if ($access->hapus == 1)
                                                        <a type="button" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $sm->id }}">
                                                            <span class="badge badge-sm bg-gradient-danger">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </a>
                                                    @endif

                                                    @include('daftar-menu.subdelete')

                                                    @include('daftar-menu.subedit')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#subDaftarMenuTable').DataTable({
                pagingType: "numbers"
            });
        });
    </script>
@endsection
