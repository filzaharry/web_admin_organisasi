@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Akses Menu</h3>
    </div>

    @include('template.alert')

    @if ($access->akses == 1)
        @include('akses-menu.table')
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
            $('#daftarMenuTable').DataTable({
                pagingType: "numbers"
            });
        });
    </script>
@endsection
