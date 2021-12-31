@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Tambah Akses Menu</h3>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <section class="container card p-4">
        <form method="POST" action="{{ route('add-akses-post') }}">
            @csrf
            <div class="col-lg-5">
                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label for="level" class="text-primary ms-0">Level User</label>
                        @error('level')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <select class="form-control" id="level" name="level" value="{{ old('level') }}">
                            @foreach ($level as $i)
                                <option value="{{ $i->id }}">{{ $i->nama_level_user }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="main" class="text-primary ms-0">Pilih Master Menu</label>
                    @error('main')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                            class="material-icons">report</i></span>@enderror
                    <select class="form-control" id="main" name="main" onchange="subDropdown()">
                        <option value="" disabled selected>Choose...</option>
                        @foreach ($main as $i)
                            <option value="{{ $i->id }}" {{ old('main') == $i->id ? 'selected' : '' }}>
                                {{ $i->nama_menu }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="sub_menu" class="text-primary ms-0">Pilih Sub Menu</label>
                    @error('sub')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                            class="material-icons">report</i></span>@enderror
                    <select class="form-control" id="sub_menu" name="sub_menu">
                        <option value="">Choose...</option>
                    </select>
                </div>

                <label class="form-check-label text-primary">Hak Akses</label>
                <div class="row m-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="read" name='read' value='1'>
                        <label class="form-check-label" for="read">Lihat</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="create" name='create' value='1'>
                        <label class="form-check-label" for="create">Tambah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="edit" name='edit' value='1'>
                        <label class="form-check-label" for="edit">Ubah</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="delete" name='delete' value='1'>
                        <label class="form-check-label" for="delete">Hapus</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-info">Tambah</button>
        </form>
    </section>

    <script>
        function subDropdown() {
            let id = $("#main").val()
            $("#sub_menu").children().remove()
            $("#sub_menu").append(`<option disabled selected>Choose...</option>`)
            $("#sub_menu").prop('disabled', true)
            if (id != '' && id != null) {
                $.ajax({
                    type: "GET",
                    contentType: "json",
                    processData: false,
                    url: "{{ url('') }}/konfigurasi/akses/dropdown/" + id,
                    success: function(res) {
                        $("#sub_menu").prop('disabled', false)
                        $.each(res, function(index, data) {
                            $("#sub_menu").append(
                                `<option value="${data.id}">${data.nama_menu}</option>`)
                        })
                    }
                });
            }
        }
    </script>

@endsection
