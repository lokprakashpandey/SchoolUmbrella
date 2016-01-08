<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function affiliate(){
    	return $this->belongsTo('App\Affiliate','affiliateId');
    }
    public function stream(){
    	return $this->belongsTo('App\Stream','streamId');
    }
    public function level(){
    	return $this->belongsTo('App\Level','levelId');
    }
}
