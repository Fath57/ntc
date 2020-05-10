<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    public function cj(){
        return $this->belongsTo(Cj::class,'cj_id');
    }
}
