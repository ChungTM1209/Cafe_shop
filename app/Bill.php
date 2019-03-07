<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
    public function table(){
        $this->belongsTo('App\Table');
    }
}
