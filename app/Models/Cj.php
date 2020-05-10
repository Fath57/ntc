<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Cj extends Model
{
    protected $fillable = ['name','user_id','about','image','slug   ok'];

    public function coordonnateur(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
}
