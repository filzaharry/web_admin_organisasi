<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'bank';

    protected $fillable = [
        'code',
        'name',
        'matauang_id',
        'no_account',
        'nama_account',
        'kantor_cabang',
        'alamat'
    ];
}
