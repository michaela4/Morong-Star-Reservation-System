<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cottage;
use App\Reservation;

class CottageController extends Controller
{
    public function show(){
    	$cottages = Cottage::all();
    	$reservations = Reservation::all();
         
        return view('rooms-and-cottages', compact('cottages', 'reservations'));
    }

    public function edit(Request $request, $id){
    	$status = $request->cottage_status;

        $cottage = Cottage::find($id);
        $cottage->status = $status;   
        $cottage->save();

        /*if has reservation 
        $reservation = Cottage::find($id);
        $reservation->status = $status;   
        $reservation->save();*/

        $cottages = Cottage::all();
    	$reservations = Reservation::all();
         
        return view('rooms-and-cottages', compact('cottages', 'reservations'));
    }
}
