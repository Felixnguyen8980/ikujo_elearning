<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
	public $timestamps = false;
    public function users() {
        return $this->belongsTo('App\users','users_id','id');
    }
}
