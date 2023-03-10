<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'experienced'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
