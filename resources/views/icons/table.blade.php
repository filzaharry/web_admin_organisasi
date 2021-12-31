<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="p-4">
                <a class="btn btn-primary mb-0" href="{{ route('add-icon') }}">Tambah Ikon</a>
                <div class="card-body px-0 pb-2">
                    <div class="container">
                        <div class="row">
                            @foreach ($data as $a)

                                <div class="col-2 pt-4 card-hover">
                                    <a style="cursor: pointer;" @if ($access->hapus == 1) data-bs-toggle="modal" data-bs-target="#delete{{ $a->id }}" @endif>
                                        <div class="text-center icon-hover">
                                            <span class="badge badge-sm bg-gradient-info mb-2">
                                                <i class="material-icons">{{ $a->name }}</i>
                                            </span>
                                            <p>{{ $a->name }}</p>
                                        </div>
                                    </a>
                                </div>

                                @include('icons.modal')
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
