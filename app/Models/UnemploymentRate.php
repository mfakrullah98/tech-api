<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnemploymentRate extends Model
{
    use HasFactory;

    public $fillable = [
        'country',
        'code',
        'y2010',
        'y2011',
        'y2012',
        'y2013',
        'y2014'
    ];
}
