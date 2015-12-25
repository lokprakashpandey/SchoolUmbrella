<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    public $timestamps = false;
    public function country()
    {
        return $this->belongsTo('App\Country', 'countryId');
    }
}
