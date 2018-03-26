<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cottage extends Model
{
    protected $table = 'cottages';
    protected $fillable = ['status']; 

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
