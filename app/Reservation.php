<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function daytripRegRes(){
        return $this->hasOne(Customer::class); // di pa sure
    }

    public function daytripOffPeakSeasonRes(){
        return $this->hasOne(Customer::class); // di pa sure
    }

    public function sports(){
        return $this->hasMany(Sports::class);
    }

    public function rides(){
        return $this->hasMany(Rides::class);
    }

    public function feesCorkages(){
        return $this->hasMany(Fees_and_Corkage::class);
    }

    public function cottage(){
        return $this->belongsTo(Cottage::class); // from has many w/ch is erroneous
    }

    protected $table = 'reservations';
    protected $fillable = ['customer_id','staff_id', 'occupants', 'rides_id', 'sports_id', 'cottage_id', 'fees_and_corkage_id', 'catering_id', 'type_of_accommodation', 'status', 'reservation_cost', 'amenities_cost', 'overall_amount']; 
}
