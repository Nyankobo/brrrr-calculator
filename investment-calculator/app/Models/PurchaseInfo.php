<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseInfo extends Model
{
    protected $table = "purchase_info";

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}
