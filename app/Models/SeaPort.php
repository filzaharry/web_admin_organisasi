<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeaPort extends Model
{
    use HasFactory;

    protected $table = 'sea_port';

    protected $fillable = [
        'code',
        'name',
        'negara_id',
        'alias'
    ];
}
