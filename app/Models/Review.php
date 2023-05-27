<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_property',
        'id_user',
        'rating',
        'review'
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
