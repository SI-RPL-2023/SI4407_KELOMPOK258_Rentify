<?php

namespace App\Models;

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

    public function histories() {
        return $this->hasMany(History::class);
        }

    public function favorites() {
        return $this->hasMany(Favorite::class);
        }

    public function reviews() {
        return $this->hasMany(Review::class);
        }
        
}
