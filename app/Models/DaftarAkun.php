<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarAkun extends Model
{
    use HasFactory;
    protected $table = 'akun';

    protected $fillable = [
        'code',
        'name',
        'desc',
        'group',
        'choose'
    ];
}
