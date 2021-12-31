<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesHeader extends Model
{
    use HasFactory;

    protected $table = 'sales_header';

    protected $fillable = [
        'code',
        'nama_sales',
        'alamat',
        'no_telp',
        'no_hp',
        'email',
        'user_id',
        'target_dalam',
        'jenis_insentive',
    ];
}
