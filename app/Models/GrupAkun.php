<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupAkun extends Model
{
    use HasFactory;
    protected $table = 'grup_akun';

    protected $fillable = [
        'code',
        'desc',
        'category',
    ];
}
