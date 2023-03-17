<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable =[
        'companie_name',
        'companie_email',
        'companie_logo',
        'companie_website',
    ];
}
