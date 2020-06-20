<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalInfo extends Model
{
    protected $table = "rental_info";

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}
