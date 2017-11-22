<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
	public $timestamps = false;
    public function users() {
        return $this->belongsTo('App\users','roles_id','id');
    }
}
