<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id_kamar', 'type', 'harga', 'status'
    ];
}
