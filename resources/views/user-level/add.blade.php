@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Registrasi Level User Baru</h3>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <section class="container card pt-4">
        <form method="POST" action="{{ route('add-user-level-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama Level</label>
                        @error('nama_level_user')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="nama_level_user" value="{{ old('nama_level_user') }}">
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </section>

@endsection
