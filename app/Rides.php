<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rides extends Model
{
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
