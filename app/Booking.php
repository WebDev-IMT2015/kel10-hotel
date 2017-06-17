<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id_kamar', 'checkIn', 'checkOut', 'namaDepan', 'namaBelakang', 'email', 'no_telp', 'ntt'
    ];
}
