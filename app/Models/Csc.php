<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csc extends Model
{
    use HasFactory;
    protected $table = 'csc';

    protected $fillable = [
        'code',
        'name',
        'rating',
        'no_print',
        'kes',
        'kis',
        'afe',
        'afi',
        'dm',
        'cis',
        'ces'
    ];
}
