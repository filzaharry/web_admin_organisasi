<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeContainer extends Model
{
    use HasFactory;
    protected $table = 'tipe_container';

    protected $fillable = [
        'code',
        'name',
        'desc'
    ];
}
