<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\bookings as bookingModel;

class booking extends Controller
{
    //
    public function hello(){
    	return bookingModel::hello();
    }
}
