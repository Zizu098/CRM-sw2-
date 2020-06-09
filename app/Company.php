<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function Employee(){
    	return $this->hasMany('App\Employee');
    }
}
