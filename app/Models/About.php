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
        'awards','cv','social_links','subtitle'
    ];

    protected $casts = [
        'social_links'=> 'array',
        'subtitle' => 'array',
    ];
}
