<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'project_name',
        'client_name',
        'year',
        'live_preview',
        'github_link',
        'title',
        'description',
        'price',
        'image'
    ];
}
