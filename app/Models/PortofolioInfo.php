<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortofolioInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'welcome_message',
        'github_link'
    ];
}
