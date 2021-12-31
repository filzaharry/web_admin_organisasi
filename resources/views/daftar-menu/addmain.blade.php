@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Tambah Master Menu</h3>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <section class="container card">
        <form method="POST" action="{{ route('add-master-post') }}">
            @csrf

            <div class="container mt-4 mb-4">

                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nama Master Menu</label>
                        @error('nama_menu')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="nama_menu" value="{{ old('nama_menu') }}">
                    </div>
                </div>

                {{-- <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Alamat URL</label>
                        @error('url')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <input type="text" class="form-control" name="url" value="{{ old('url') }}">
                    </div>
                </div> --}}

                <div class="col-md-6">
                    <div class="input-group input-group-static mb-4">
                        <label class="ms-0">Nomor Urut Menu</label>
                        @error('sort')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                class="material-icons">report</i></span>@enderror
                        <input type="number" class="form-control" name="sort" value="{{ old('sort') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col">
                                <div class="input-group input-group-static mb-4">
                                    <label for="icon" class="ms-0">Pilih Icon Menu</label>
                                    @error('icon')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                            class="material-icons">report</i></span>@enderror
                                    <select class="form-control" id="icon" name="icon" value="{{ old('icon') }}" onchange="mainIcon()">
                                        <option value="" disabled selected>Choose...</option>
                                        @foreach ($icons as $i)
                                            <option value="{{ $i->name }}">{{ $i->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- icons --}}
                            <div class="col mt-4" id="icon_img">
                            </div>

                        </div>

                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name='parent' value='1'>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Memiliki Sub Menu</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name='active' value='Y'>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Status Aktif</label>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-info">Tambah</button>
                </div>

        </form>
    </section>

    <script>
        function mainIcon() {
            let icon_name = $("#icon").val()
            $("#icon_img").children().remove()
            if (icon_name != '' && icon_name != null) {
                $.ajax({
                    type: "GET",
                    contentType: "json",
                    processData: false,
                    url: "{{ url('') }}/konfigurasi/daftar-menu/main-dropdown/" + icon_name,
                    success: function(res) {
                        $("#icon_img").prop('disabled', false)
                        $.each(res, function(index, data) {
                            $("#icon_img").append(
                                `<span class="badge badge-sm bg-gradient-primary"><i class="material-icons">${data}</i></span>`)
                        })
                    }
                });
            }
        }
    </script>

@endsection
