<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
