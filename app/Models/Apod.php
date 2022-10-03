<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apod extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'apiKey',
        'url',
        'apiDate',
        'apiStartDate',
        'apiEndDate',
        'apiCount',
        'apiThumbs',
    ];
}
