<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'account_id',
        'bus_id',
        'start_date',
        'end_date',
        'price',
        'payment',
        'status'
    ];

    public function account(){
        return $this->belongsTo(Client::class);
    }
    public function bus(){
        return $this->belongsTo(Bus::class);
    }
    
}
