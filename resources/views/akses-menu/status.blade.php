<td>
    <div class="d-flex px-3">
        <span class="material-icons badge-sm p-1
            @if ($a->akses == 1) bg-gradient-primary @else bg-gradient-secondary @endif "
            style="border-radius: 5px; color:white;">
            power_settings_new
        </span>
    </div>
</td>

@if ($a->is_parent == 0)
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1
            @if ($a->tambah == 1) bg-gradient-primary @else bg-gradient-secondary @endif "
                style="border-radius: 5px; color:white;">
                power_settings_new
            </span>
        </div>
    </td>
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1
            @if ($a->edit == 1) bg-gradient-primary @else bg-gradient-secondary @endif "
                style="border-radius: 5px; color:white;">
                power_settings_new
            </span>
        </div>
    </td>
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1
            @if ($a->hapus == 1) bg-gradient-primary @else bg-gradient-secondary @endif "
                style="border-radius: 5px; color:white;">
                power_settings_new
            </span>
        </div>
    </td>
@else
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1 bg-gradient-secondary"
                style="border-radius: 5px; color:white;opacity: 30%;">
                power_settings_new
            </span>
        </div>
    </td>
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1 bg-gradient-secondary"
                style="border-radius: 5px; color:white;opacity: 30%;">
                power_settings_new
            </span>
        </div>
    </td>
    <td>
        <div class="d-flex px-3">
            <span class="material-icons badge-sm p-1 bg-gradient-secondary"
                style="border-radius: 5px; color:white;opacity: 30%;">
                power_settings_new
            </span>
        </div>
    </td>
@endif
