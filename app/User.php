<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'user_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customers(){
        return $this->hasMany(Customer::class);
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function daytripRegRes(){
        return $this->hasMany(DaytripRegRes::class);
    }

    public function daytripOffPeakSeasonRes(){
        return $this->hasMany(DaytripOffPeakSeasonRes::class);
    }

    public function cottages(){
        return $this->hasMany(Cottage::class);
    }
}
