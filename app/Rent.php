<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\customer');
    }
}
