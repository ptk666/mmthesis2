<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    //
    protected $table = 'booking_table';

    public static function hello(){
    	return "hello world";
    }
}
