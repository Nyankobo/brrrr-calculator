<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "property";

    protected $guarded = [];

    public function report()
    {
        return $this->hasOne('App\Models\Report');
    }

    public function purchase()
    {
        return $this->hasOne('App\Models\PurchaseInfo');
    }

    public function rental()
    {
        return $this->hasOne('App\Models\RentalInfo');
    }

}
