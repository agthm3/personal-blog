<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'welcome_message',
        'github_link',
        'whatsapp_link',
        'linkedin_link'
    ];
}
