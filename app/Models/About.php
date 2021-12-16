<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table= 'about';

    protected $fillable = [
        'intro','name','age','residence','address',
        'email','phone','happy_clients','working_hours',
        'awards','cv','subtitle'
    ];

    protected $casts = [
        'subtitle' => 'array',
    ];
}
