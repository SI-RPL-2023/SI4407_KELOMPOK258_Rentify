<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_property',
        'id_user',
        'tanggal_sewa',
        'durasi',
        'total'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function history() {
        return $this->hasOne(History::class);
        }
}
