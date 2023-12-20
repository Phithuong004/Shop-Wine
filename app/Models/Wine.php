<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'grapes',
        'country',
        'region',
        'description',
        'picture',
        'price',
    ];
}
