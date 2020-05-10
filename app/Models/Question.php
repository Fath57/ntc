<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{

    protected $fillable = ['reponse','numero','question','propositions','module_id'];
    public function results(){
        return $this->hasMany(Result::class);
    }

}
