<?php

namespace App\Models;

use App\Models\Property as ModelsProperty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pemilik',
        'property_name',
        'category',
        'price',
        'availability',
        'kapasitas',
        'description',
        'fasilitas',
        'lokasi',
        'image',
        'rating'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pemilik', 'id');
    }
        
}
