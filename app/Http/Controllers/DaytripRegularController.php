<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaytripRegular;
use App\Customer;
use App\Sports;
use App\Rides;
use App\Fees_and_Corkage;
use App\User;

class DaytripRegularController extends Controller
{
    public function index(){
      $day_trip_regulars = DaytripRegular::all();

      //for amenities
      $sports = Sports::all();
      $rides = Rides::all();
      $fees_corkages = Fees_and_Corkage::all();

      return view('reservationDayTrip.create-daytrip-regular', compact('day_trip_regulars', 'sports', 'rides', 'fees_corkages'));
   }
   
}
