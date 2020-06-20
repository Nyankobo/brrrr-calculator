<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}