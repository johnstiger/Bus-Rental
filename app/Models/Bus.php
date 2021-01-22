<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'bus';
    protected $fillable = [
        'bus_name',
        'number_of_seat',
        'price',
        'status',
        'description'
    ];
    public function booking(){
        return $this->hasOne(Booking::class);
    }
}
