@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Perayaan Hari Besar Islam ( PHBI )</h3>
    </div>

    @include('component.alert')

    @if ($access->akses == 1)

        <div class="row">
            <div class="col-12">

                @if (count($data) != 0)
                    <div class="card my-4">
                        <div class="p-4">
                            @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="">Tambah User</a> @endif

                            <div class="card-body px-0 pb-2">
                                <div class="table-sm table-responsive p-0">

                                    @include('component.table')

                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center mt-4 pb-4">
                        <img src="{{ asset('img/folder.png') }}" alt="folder" width="20%" style="opacity: 50%">
                        <p class="pt-4">Opps! Data masih kosong...</p>
                        @if ($access->tambah == 1) <a class="btn btn-primary mb-0" href="">Tambah Data</a> @endif
                    </div>
                @endif
            </div>
        </div>

    @else
        <div class="text-center mt-4">
            <img src="{{ asset('img/sorry.png') }}" alt="sorry" width="20%" style="opacity: 50%">
            <p class="pt-4">Maaf Anda tidak memiliki akses pada Menu ini</p>
            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    @endif

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#phbiTable').DataTable({
                pagingType: "numbers"
            });
        });
    </script>
@endsection
