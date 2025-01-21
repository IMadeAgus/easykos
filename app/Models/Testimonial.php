<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    //Menentukan kolom mana yang bisa di isi
    protected $fillable = [
        'boarding_houses_id',
        'photo',
        'name',
        'rating',
    ];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
