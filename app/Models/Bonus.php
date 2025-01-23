<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bonus extends Model
{
    use HasFactory, SoftDeletes;
    //Menentukan kolom mana yang bisa di isi
    protected $fillable = [
        'boarding_houses_id',
        'image',
        'name',
        'description',
    ];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
