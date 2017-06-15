<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
	protected $table = 'room';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id_kamar', 'namaCustomer', 'checkIn', 'checkOut'
    ];
}
