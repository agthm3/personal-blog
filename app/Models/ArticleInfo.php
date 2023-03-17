<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleInfo extends Model
{
    use HasFactory;
    protected $fillable =[
        'welcome_message'
    ];
}
