@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Registrasi User Baru</h3>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <section class="container card pt-4">
        <form method="POST" action="{{ route('add-icon-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama Ikon</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </section>

@endsection
