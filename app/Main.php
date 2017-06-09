<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
	protected $table = 'room';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'no_kamr', 'type', 'harga', 'status'
    ];
}
