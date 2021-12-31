<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirPort extends Model
{
    use HasFactory;

    protected $table = 'air_port';

    protected $fillable = [
        'code',
        'name',
        'negara_id'
    ];
}
