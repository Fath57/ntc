<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class RapportsActivisme extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
