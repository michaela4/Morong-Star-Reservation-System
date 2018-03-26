<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Sports;
use App\Rides;
use App\Fees_and_Corkage;

use App\DaytripRegRes;
use App\DaytripOffPeakSeasonRes;

use App\Reservation;
use App\Cottage;
use App\DaytripRegular; //un
use Carbon\Carbon;
use App\User;


class ReservationController extends Controller
{
    public function store(Request $request){
        $cottage_status = " ";

        $customer = new Customer;
        $customer->present_date = $request->present_date;
        $customer->quote_date = $request->quote_date;
        $customer->name = $request->name;
        $customer->company_group = $request->company_group;
        $customer->mobile_no = $request->mobile_no;
        $customer->email = $request->email;
        $customer->no_of_person = $request->no_of_person;
        $customer->date_of_tour = $request->date_of_tour;
        $customer->address_tin = $request->address_tin;
        $customer->reservation_type = $request->reservation_type;
        $customer->save();

        // for Daytrip Regular
        if ($customer->reservation_type == 'Daytrip Regular') {
            $packagedReservation = new DaytripRegRes;
            $packagedReservation->status = $request->reservation_status;
            $packagedReservation->save();

        } elseif ($customer->reservation_type == 'Daytrip Promo') {
            $packagedReservation = new DaytripOffPeakSeasonRes;
            $packagedReservation->status = $request->reservation_status;
            $packagedReservation->save();

        } else {
            return view('test');
        }
            if ($request->has('rides_id')) {
               $rides_id_string = implode(",", $request->get('rides_id'));
            }
            if ($request->has('sports_id')) {
               $sports_id_string = implode(",", $request->get('sports_id'));
            }
            if ($request->has('fees_and_corkage_id')) {
               $fees_and_corkage_id_string = implode(",", $request->get('fees_and_corkage_id'));
            }

            $cottages_id_string = implode(",", $request->get('cottages_id'));

            $reservation = new Reservation;
            $reservation->customer_id = $customer->id;
            $reservation->user_id = $request->user_id;

            $reservation->type_of_accommodation = $packagedReservation->id;

            $reservation->check_in = $request->check_in;
            $reservation->check_out = $request->check_out;
            $reservation->ref_no = $request->ref_no;
            $reservation->status = $request->reservation_status;

            $cottage_status = $request->reservation_status; 

            $reservation->cottage_id = $cottages_id_string;

            if ($request->has('rides_id')) {
              $reservation->rides_id = $rides_id_string;
            }
            if ($request->has('sports_id')) {
              $reservation->sports_id = $sports_id_string;
            }
            if ($request->has('fees_and_corkage_id')) {
              $reservation->fees_and_corkage_id = $fees_and_corkage_id_string;
            }
            //newly added
            $reservation->reservation_cost = $request->vatIn;
            $reservation->amenities_cost = $request->amenities_cost;
            $reservation->overall_amount = $request->overall_amount;
            $reservation->save();

            //for agent
            $user = User::find($request->user_id);

            $cottage = Cottage::find($cottages_id_string);
            $cottage->status = $cottage_status;
            $cottage->agent = $user->user_name;
            $cottage->save();

            //giving summary of reservation
            $reservations = Reservation::all();
            $cottages = Cottage::all();
            $customers = Customer::all();
            $rides = Rides::all();
            $sports = Sports::all();
            $fees_corkages = Fees_and_Corkage::all();

            return view('session.reservation-details', compact('reservations', 'cottages', 'customers', 'rides', 'sports', 'fees_corkages'));
   }


   public function delete (Request $request, $id){
        $cottage_status = "available";
        $cottage_agent = " ";

        $cottage_id_update = Cottage::find($request->cottage_id);
        $cottage_id_update->status = $cottage_status;   // isahan
        $cottage_id_update->save();

        $cottage_user_update = Cottage::find($request->user_id);
        $cottage_user_update->agent = $cottage_agent;   // isahan
        $cottage_user_update->save();

           //dd($cottage->status);
        $customer = Customer::find($id);
        $customer->delete();
        $reservation = Reservation::find($id);
        $reservation->delete();


        //giving summary of reservation
            $reservations = Reservation::all();
            $cottages = Cottage::all();
            $customers = Customer::all();
            $rides = Rides::all();
            $sports = Sports::all();
            $fees_corkages = Fees_and_Corkage::all();

            return view('session.reservation-details', compact('reservations', 'cottages', 'customers', 'rides', 'sports', 'fees_corkages'));
    }
}
