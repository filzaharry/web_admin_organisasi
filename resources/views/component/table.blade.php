    <table id="userTable" class="table align-items-center justify-content-center mb-0">
        <thead>
            <tr>
                <th class="font-weight-bolder">Nama Lengkap</th>
                <th class="font-weight-bolder">Nama user (username)</th>
                <th class="font-weight-bolder">Email</th>
                <th class="font-weight-bolder">Level</th>
                <th class="font-weight-bolder ps-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex px-3">sample1</div>
                </td>
                <td>
                    <div class="d-flex px-3">sample2</div>
                </td>
                <td>
                    <div class="d-flex px-3">sample3</div>
                </td>
                <td>
                    <div class="d-flex px-3">sample4</div>
                </td>
                <td>
                    @if ($access->edit == 1)
                        <a type="button" data-bs-toggle="modal" data-bs-target="#editModal1">
                            <span class="badge badge-sm bg-gradient-warning">
                                <i class="material-icons">mode_edit</i>
                            </span>
                        </a>
                    @endif


                    @if ($access->hapus == 1)
                        <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal1">
                            <span class="badge badge-sm bg-gradient-danger">
                                <i class="material-icons">delete</i>
                            </span>
                        </a>
                    @endif

                </td>
            </tr>
        </tbody>
    </table>

