<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function bills(){
        $this->hasMany('App\Bill');

    }
}
