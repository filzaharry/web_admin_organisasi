@extends('layouts.app')

@section('dashboard')
    <div class="container">
        <h3>Tambah Sub Menu</h3>
        <p>Master Menu : {{ $detail[0]->nama_menu }}</p>
    </div>

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger" role="alert" style="color: white !important;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif

    <section class="container card">
        <div class="col-lg-10">
            <form method="POST" action="{{ route('add-sub-post', [$detail[0]->id]) }}">
                @csrf
                <div class="container mt-4 mb-4">

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Nama Sub Menu</label>
                            @error('nama_menu')<span class="input-group-text" id="basic-addon1"><i style="color:#f44336;"
                                    class="material-icons">report</i></span>@enderror
                            <input type="text" class="form-control" name="nama_menu" value="{{ old('nama_menu') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group input-group-static mb-4">
                            <label class="ms-0">Nomor Urut</label>
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
                                        @error('icon')<span class="input-group-text" id="basic-addon1"><i
                                                style="color:#f44336;" class="material-icons">report</i></span>@enderror
                                        <select class="form-control" id="icon" name="icon" value="{{ old('icon') }}" onchange="subIcon()">
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
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name='active'
                                value='Y'>
                            <label class="form-check-label" for="flexSwitchCheckDefault">Status Aktif</label>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-info">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        function subIcon() {
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
