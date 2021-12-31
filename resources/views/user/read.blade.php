@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Daftar User</h3>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    @if ($sukses = Session::get('sukses'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
            <span class="text-sm">{{ $sukses }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($access->akses == 1)
        @include('user.table')
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
            $('#userTable').DataTable({
                pagingType: "numbers"
            });
        });
    </script>
@endsection
