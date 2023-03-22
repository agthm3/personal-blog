<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        'welcome_message',
        'image',
        'title',
        'article',
    'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tag()
    {
        return $this->hasOne(Tag::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
