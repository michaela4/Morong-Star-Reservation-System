<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees_and_Corkage extends Model
{
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
