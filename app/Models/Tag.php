<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'new_tag',
     
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
