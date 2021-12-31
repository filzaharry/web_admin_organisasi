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
        <form method="POST" action="{{ route('add-user-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama Lengkap</label>
                        @error('fullname')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama User (username)</label>
                        @error('username')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Email</label>
                        @error('email')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label for="level" class="ms-0">Level User</label>
                        @error('level')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;" class="material-icons">report</i></span>@enderror
                        <select class="form-control" id="level" name="level" value="{{ old('level') }}">
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

            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </section>

@endsection
