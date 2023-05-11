<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_property',
        'id_user',
        'id_reservasi',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class, 'id', 'id_property');
    }
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'id', 'id_reservasi');
    }
}
