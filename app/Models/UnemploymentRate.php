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
        '2010',
        '2011',
        '2012',
        '2013',
        '2014'
    ];
}
