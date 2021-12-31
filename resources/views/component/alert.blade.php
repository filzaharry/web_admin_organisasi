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
