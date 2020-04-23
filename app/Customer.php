<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function rents() {
        return $this->hasMany('App\Rent');
    }

    public function payments() {
     return $this->hasMany('App\Payment');
}
}
