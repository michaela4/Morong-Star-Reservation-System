<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaytripRegular;
use App\DayTripOffPeakSeasonPromo;
use App\Customer;
use App\Cottage;
use App\Reservation;
use App\Rides;
use App\Sports;
use App\Fees_and_Corkage;
use Carbon\Carbon;
use App\User;

class CustomerController extends Controller
{
    public function index() {
      $day_trip_regulars = DaytripRegular::all();
      $day_trip_promos = DayTripOffPeakSeasonPromo::all();

      $cottages = Cottage::where('status', '=', 'available')->get();

        //for amenities 
      $sports = Sports::all();
      $rides = Rides::all();
      $fees_corkages = Fees_and_Corkage::all();
      $reservation = Reservation::all();
        return view('session.customer-details', compact('day_trip_regulars', 'day_trip_promos', 'cottages', 'sports', 'rides', 'fees_corkages', 'reservation'));
    }

    public function reservationDetails() {
      $reservations = Reservation::all();
      $cottages = Cottage::all();
      $customers = Customer::all();
        //for amenities
      $sports = Sports::all();
      $rides = Rides::all();
      $fees_corkages = Fees_and_Corkage::all();
      return view('session.reservation-details', compact('customers', 'reservations', 'cottages', 'sports', 'rides', 'fees_corkages'));
    }

    

    public function edit (Request $request, $id){ 
        $cottage_status = " ";
        $customer = Customer::find($id);

        if ($request->present_date != null) {
            $customer->present_date = $request->present_date;
        }
        if ($request->quote_date != null) {
            $customer->quote_date = $request->quote_date;
        }
        if ($request->name != null) {
            $customer->name = $request->name;
        }
        if ($request->company_group != null) { 
            $customer->company_group = $request->company_group;
        }
        if ($request->mobile_no != null) { 
            $customer->mobile_no = $request->mobile_no;
        }
        if ($request->email != null) { 
            $customer->email = $request->email;
        }
        if ($request->no_of_person != null) { 
            $customer->no_of_person = $request->no_of_person;
        }
        if ($request->date_of_tour != null) { 
             $customer->date_of_tour = $request->date_of_tour;
        }
        if ($request->address_tin != null) {
           $customer->address_tin = $request->address_tin;
        }
        $customer->save();

            if ($request->has('rides_id')) {
               $rides_id_string = implode(",", $request->get('rides_id'));
            }
            if ($request->has('sports_id')) {
               $sports_id_string = implode(",", $request->get('sports_id'));
            }
            if ($request->has('fees_and_corkage_id')) {
               $fees_and_corkage_id_string = implode(",", $request->get('fees_and_corkage_id'));
            }

            if ($request->has('cottages_id')) {
            $cottages_id_string = implode(",", $request->get('cottages_id'));
            }

            $reservation = Reservation::find($id);

            if ($request->has('check_in')) {
              $reservation->check_in = $request->check_in;
            }
            if ($request->has('check_out')) {
              $reservation->check_out = $request->check_out;
            }
            if ($request->has('ref_no')) {
              $reservation->ref_no = $request->ref_no;
            }
            if ($request->has('overall_amount')) {
              $reservation->overall_amount = $request->overall_amount;
            }
            if ($request->has('reservation_status')) {
              $reservation->status = $request->reservation_status;
              $cottage_status = $request->reservation_status; 
            }

            if ($request->has('cottages_id')) {
              $reservation->cottage_id = $cottages_id_string;
            }
            if ($request->has('rides_id')) {
              $reservation->rides_id = $rides_id_string;
            }
            if ($request->has('sports_id')) {
              $reservation->sports_id = $sports_id_string;
            }
            if ($request->has('fees_and_corkage_id')) {
              $reservation->fees_and_corkage_id = $fees_and_corkage_id_string;
            }
            
            $reservation->save();

            //for agent
            $user = User::find($request->user_id);
              if ($request->has('cottages_id')) {
              $cottage = Cottage::find($cottages_id_string);
              $cottage->status = $cottage_status;
              $cottage->agent = $user->user_name;
              $cottage->save();
            }

            //giving summary of reservation
            $reservations = Reservation::all();
            $cottages = Cottage::all();
            $customers = Customer::all();
            $rides = Rides::all();
            $sports = Sports::all();
            $fees_corkages = Fees_and_Corkage::all();

            return view('session.reservation-details', compact('reservations', 'cottages', 'customers', 'rides', 'sports', 'fees_corkages'));
    }


    public function test(){
        $customers = Customer::latest();
        
        if ($month = request('month')) {
            $customers->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $customers->whereYear('created_at', $year);
        }
        $customers = $customers->get();

        $rides = Rides::all();
        return view ('test', compact('customers', 'rides'));
    }

    public function modal(){
        return view ('modal');
    }
        
}
